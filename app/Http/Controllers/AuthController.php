<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signIn()
    {
        return view('auth.signin');
    }

    //Kiểm tra dữ liệu đăng ký
    public function checkSignIn(Request $request)
    {
        $username   = $request->username;
        $password   = $request->password;
        $repass     = $request->repass;
        $mssv       = $request->mssv;
        $lopmonhoc  = $request->lopmonhoc;
        $gioitinh   = $request->gioitinh;

        if (
            $username === 'Truclh' &&
            $password === 'truc2710' &&
            $repass === 'truc2710' &&
            $mssv === '0106267' &&
            $lopmonhoc === '67PM1' &&
            $gioitinh === 'nam'
        ) {
            return "Đăng ký thành công!";
        }

        return "Đăng ký thất bại";
    }
}
