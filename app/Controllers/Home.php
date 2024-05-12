<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | CI4APP'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'CI4APP | ABOUT ME !!'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {;
        $data = [
            'title' => 'CI4APP | Contact Us'
        ];
        return view('pages/contact', $data);
    }
}
