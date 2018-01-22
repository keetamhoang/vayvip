<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['loginView', 'login', 'registerView', 'register']]);
    }

    public function saveImage($file, $old = null)
    {
        try {
            $filename = md5(time()) . str_slug($file->getClientOriginalName()) . '.' . $file->getClientOriginalExtension();

            $name = '/files/'. $filename;
            $filename = public_path('files').'/'.$filename;

            Image::make($file->getRealPath())->save($filename);

            if ($old) {
                @unlink(public_path($old));
            }

            return $name;
        } catch (\Exception $ex) {
            dd($ex->getMessage());
        }
    }

    public function saveAndCropImage($path, $folder = 'products', $old = null) {
        $image = Image::make($path);

        $width = $image->width();
        $height = $image->height();

        if ($width > $height) {
            $x = $width / 2 - ($height / 2);
            $y = 0;
            $image->crop($height, $height, $x, $y);
        } else if ($width < $height) {
            $x = 0;
            $y = $height / 2 - ($width / 2);
            $image->crop($width, $width, $x, $y);
        } else {
            $x = 0;
            $y = 0;
            $image->crop($width, $width, $x, $y);
        }

        $savePath = '/files/'. $folder;

        if (!is_dir(public_path($savePath))) {
            mkdir(public_path($savePath));
        }

        $filename = md5(time()) . basename($path);

        $filename = '/files/'.$folder. '/' . $filename;

        $image->save(public_path($filename));

        if ($old) {
            @unlink(public_path($old));
        }

        return $filename;
    }
}
