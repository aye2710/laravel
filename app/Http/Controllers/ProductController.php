<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $title = "Product List";
        return view("product.index", [
            "title" => $title,

            "products" => [
                [
                    "id" => 1,
                    'name' => "Product A",
                    'price' => 100,
                    'description' => "Description for Product A"
                ],
                [
                    "id" => 2,
                    'name' => "Product B",
                    'price' => 200,
                    'description' => "Description for Product B"
                ],
                [
                    "id" => 3,
                    'name' => "Product C",
                    'price' => 300,
                    'description' => "Description for Product C"
                ],
            ]
        ]);
    }

    public function getDetail($id = 123)
    {
        return view("product.product-detail", [
            "id" => $id
        ]);
    }

    public function create()
    {
        return view("product.add");
    }

    public function store(Request $request)
    {
        var_dump($request->input('name'));
    }

    public function login()
    {
        return view("product.login");
    }

    public function checkLogin(Request $request)
    {
        if ($request->input('username') == 'lehuutruc' && $request->input('password') == '111111') {
            return "Login successful";
        } else {
            return "Login failed";
        }
    }
    public function register()
    {
        return view("product.register");
    }

    public function checkRegister(Request $request)
    {
        // Get all input data
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $phone = $request->input('phone');
        $mssv = $request->input('mssv');

        // Here you would typically save to database
        // For now, just return success message with data
        return "Registration successful!<br>" .
            "Username: $username<br>" .
            "Email: $email<br>" .
            "Phone: $phone<br>" .
            "MSSV: $mssv";
    }
}
