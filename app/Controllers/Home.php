<?php

namespace App\Controllers;

class Home extends BaseController
{
    // route method halaman utama
    public function index()
    {
        $data = [
            'title' => 'Home | ranMa'
        ];
        return view('pages/home', $data);
    }

    // route method halaman about me
    public function about()
    {
        $data = [
            'title' => 'ranMa | ABOUT ME !!'
        ];
        return view('pages/about', $data);
    }

    // route method halaman contact
    public function contact()
    {
        $data = [
            'title' => 'ranMa | Contact Us'
        ];
        return view('pages/contact', $data);
    }

    // route method halaman dokumentasi framework codeigniter 4
    public function codeigniter()
    {
        $data = [
            'title' => 'ranMa | Framework Codeigniter 4'
        ];
        return view('pages/welcome_message');
    }
}
