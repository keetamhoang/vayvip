<?php

namespace App\Console\Commands;

use App\Components\Unit;
use App\Models\Code;
use App\Models\Discount;
use App\Models\PushSubscrtiption;
use App\User;
use Goutte\Client;
use Illuminate\Console\Command;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Minishlink\WebPush\Subscription;
use Image;
use Minishlink\WebPush\WebPush;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\SitemapIndex;

class HoangCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hoang:command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(Request $request)
    {
        $auth = array(
            'VAPID' => array(
                'subject' => 'https://github.com/Minishlink/web-push-php-example/',
                'publicKey' => env('VAPID_PUBLIC_KEY'),
                'privateKey' => env('VAPID_PRIVATE_KEY')
            ),
        );

        $webPush = new WebPush($auth);

        PushSubscrtiption::chunk(100, function ($endpoints) use ($webPush) {
            foreach ($endpoints as $e) {
                $notification = [
                    'subscription' => Subscription::create([
                        'endpoint' => $e->endpoint,
                        'publicKey' => $e->public_key,
                        'authToken' => $e->auth_token,
                    ]),
                    'payload' => 'hello !',
                ];

                $webPush->sendNotification(
                    $notification['subscription'],
                    $notification['payload'] // optional (defaults null)
                );
            }
        });

        $webPush->flush();

//        Discount::where('status', 0)->chunk(200, function ($discounts) use ($request) {
//            foreach ($discounts as $discount) {
//                if (!empty($discount->image_local)) {
//                    try {
//                        $file = base64_encode(file_get_contents($discount->image));
//
//                        $image = Image::make($file);
//
//                        $width = $image->width();
//                        $height = $image->height();
//
//                        if ($width > 650) {
//                            $newHeight = round(650 * $height / $width);
//                            $image->resize(650, $newHeight);
//                        }
//
//                        $slug = Unit::create_slug($discount->name);
//
//                        $filename = 'ma-giam-gia-' . $discount->merchant . '-' . $slug . '-' . time() . uniqid() . '.jpg';
//
//                        @unlink(public_path($discount->image_local));
//
//                        $image->save('public/uploads/' .  $filename);
//
//
////                        $file = $discount->image;
////
////                        $files = file_get_contents($file);
////
////                        $filename = basename($file);
////
////                        $filename = 'ma-giam-gia-' . $discount->merchant . '-' . time() . uniqid() . '.' . pathinfo($filename, PATHINFO_EXTENSION);
////
////                        Storage::disk('public')->put($filename, $files, 'public');
//
//                        $discount->update([
//                            'image_local' => '/uploads/' . $filename
//                        ]);
//                    } catch (\Exception $ex) {
//                        $this->line($ex->getMessage() . '|' . $ex->getLine() . '|' . $discount->id);
//
//                        $discount->update([
//                            'image_local' => '/assets/image/khuyenmai.png'
//                        ]);
//                    }
//                }
//            }
//        });
    }
}
