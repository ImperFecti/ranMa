<?php

namespace App\Controllers;

class Pages extends BaseController
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
    {
        $data = [
            'title' => 'CI4APP | CONTACT US',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. abc No. 123',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. def No. 456',
                    'kota' => 'Bandung'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
