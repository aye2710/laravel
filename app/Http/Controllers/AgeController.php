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

        session(['age' => $age]);

        return "Đã lưu tuổi vào session";
    }
}
