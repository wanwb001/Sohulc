<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // API 请求返回的结果
        $data = [
            ['first_name' => 'John', 'last_name' => 'Doe', 'age' => 'twenties'],
            ['first_name' => 'Fred', 'last_name' => 'Ali', 'age' => 'thirties'],
            ['first_name' => 'Alex', 'last_name' => 'Cho', 'age' => 'thirties'],
        ];
        test_helps();
     
        return view('home');
    }
}
