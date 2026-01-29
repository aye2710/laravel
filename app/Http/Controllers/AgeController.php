<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgeController extends Controller
{
    public function index()
    {
        return view('age.input');
    }

    public function store(Request $request)
    {
        $age = $request->age;

        // Lưu tuổi vào session
        session(['age' => $age]);

        return redirect('/age/check');
    }

    public function check()
    {
        return "Bạn đủ tuổi để truy cập!";
    }
}
