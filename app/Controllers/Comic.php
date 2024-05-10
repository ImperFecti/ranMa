<?php

namespace App\Controllers;

use App\Models\ComicModel;

class Comic extends BaseController
{

    //deklarasi contruct model comic
    protected $comicModel;
    public function __construct()
    {
        $this->comicModel = new ComicModel();
    }

    public function index()
    {
        //memanggil semua data yang ada di database


        $data = [
            'title' => 'Comic | CI4APP',
            'comic' => $comic = $this->comicModel->getComic()
        ];


        return view('comic/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Comic | CI4APP',
            'comic' => $comic = $this->comicModel->getComic($slug)
        ];

        return view('comic/detail', $data);
    }
}
