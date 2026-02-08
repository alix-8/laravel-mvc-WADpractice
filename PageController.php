<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{

    //Static
    public function home()
    {
        return view('home');
    }
    //Dynamic
    public function profile($name)
    {
        return view('profile', ['name' => $name]);
    }

    //Multiple
    public function profileAge($name, $age)
    {
        return view('profileAge', ['name' => $name, 'age' => $age,]);
    }

    //Optional
    public function optional($id = '')
    {
        return  view("optional",  ['id' => $id]);
    }

    //Conditional
    public function conditional($name)
    {

        if ($name == 'Admin') {
        return 'Welcome back to Honolulu, just to get that';
        }
        return 'Hello, ' . $name;
    }

    //Dynamic+Array
    public function product($id)
    {
        $products = [
        1 => ['name' => 'Laptop', 'price' => '$999'],
        2 => ['name' => 'Phone', 'price' => '$499']
        ];

        $product = $products[$id] ?? abort(404);

        return view('product', ['product' => $product, 'id' => $id]);
    }
}
