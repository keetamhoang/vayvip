<?php

namespace App\Http\Controllers\Backend;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends AdminController
{
    public function loginView() {
        if (auth('admin')->check()) {
            return redirect(url('admin'));
        }

        return view('auth.login');
    }

    public function login(Request $request) {
        $email = $request->input('email');

        $password = $request->input('password');

        $user = User::where('email', $email)->first();

        if (!empty($user)) {
            if ($user->status == config('const.IN_ACTIVE')) {
                return redirect()->back()->with('error', 'Tài khoản chưa được kích hoạt');
            }

            $hashedPassword = $user->password;

            if (Hash::check($password, $hashedPassword)) {

                auth('admin')->login($user, true);

                return redirect(url('admin'))->with('success', 'Đăng nhập thành công');
            } else {
                return redirect()->back()->with('error', 'Mật khẩu không đúng');
            }
        } else {
            return redirect()->back()->with('error', 'Tài khoản không tồn tại');
        }
    }

    public function registerView() {
        return view('auth.register');
    }

    public function register(Request $request) {
        $email = $request->input('email');
        $name = $request->input('name');
        $password = $request->input('password');
        $repassword = $request->input('repassword');

        if (empty($password) or empty($repassword) or empty($name) or empty($email)) {
            return redirect()->back()->with('error', 'Hãy điền đủ thông tin để đăng ký');
        }

        if ($password != $repassword) {
            return redirect()->back()->with('error', 'Mật khẩu không không khớp');
        }

        $user = User::where('email', $email)->first();

        if (!empty($user)) {
            return redirect()->back()->with('error', 'Tài khoản đã tồn tại');
        }

        $data = [
            'email' => $email,
            'name' => $name,
            'password' => Hash::make($password),
            'status' => config('const.IN_ACTIVE')
        ];

        User::create($data);

        return redirect(url('dang-nhap'))->with('success', 'Đăng ký thành công');
    }

    public function logout() {
        auth('admin')->logout();

        return redirect(url('/'));
    }
}
