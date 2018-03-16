<?php

namespace App\Http\Controllers\Backend\Bank;

use App\Http\Controllers\Backend\AdminController;
use App\Models\ShinhanBank;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class ShinhanBankController extends AdminController
{
    public function index() {
        if (auth('admin')->user()->type == 'shinhanbank') {
            $acc = User::find(auth('admin')->user()->id);

            $acc->update([
                'last_log' => Carbon::now()
            ]);
        }

        return view('admin.bank.shinhanbank.index');
    }

    public function shinhanBankAttribute(Request $request) {
        $status = $request->input('status');
//        $search = $request->input('search');

        if ($status == 'waiting') {
            $customers = ShinhanBank::where('status', config('const.WAITING'));
        } elseif ($status == 'processing') {
            $customers = ShinhanBank::where('status', config('const.PROCESSING'));
        } elseif ($status == 'done') {
            $customers = ShinhanBank::where('status', config('const.DONE'));
        } else {
            $customers = new ShinhanBank;
        }

//        if (!empty($search)) {
//            $condi = $search[0];
//            $search = substr($search, 1, strlen($search) - 1);
//
//            $customers = $customers->where('salary', "$condi", intval($search));
//        }

        $customers = $customers->where('type', 'shinhanbank')->orderBy('id', 'desc')->get();

        return $this->chatfuelDatatable($customers);
    }

    public function chatfuelDatatable($customers)
    {
        return DataTables::of($customers)
            ->editColumn('salary', function ($customer) {
                $text = number_format(intval($customer->salary), 0, '.', '.');

                $text = '<input value="'.$text.'">';

                return $text;
            })
            ->editColumn('name', function ($customer) {
                $text = '<input value="'.$customer->name.'">';

                return $text;
            })
            ->editColumn('job', function ($customer) {
                $text = '<input value="'.$customer->job.'">';

                return $text;
            })
            ->editColumn('birthday', function ($customer) {
                $text = '<input value="'.$customer->birthday.'">';

                return $text;
            })
            ->editColumn('region', function ($customer) {
                $text = '<input value="'.$customer->region.'">';

                return $text;
            })
            ->editColumn('phone', function ($customer) {
                $text = '<input value="'.$customer->phone.'">';

                return $text;
            })
            ->editColumn('email', function ($customer) {
                $text = '<input value="'.$customer->email.'">';

                return $text;
            })

            ->editColumn('status', function ($customer) {
                $text = view('admin.bank.shinhanbank.status', compact('customer'))->render();

                return $text;
            })
            ->rawColumns(['salary', 'type', 'birthday', 'name', 'email', 'phone', 'region', 'status', 'job'])
            ->make(true);
    }
}
