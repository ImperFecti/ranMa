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
        $comic = $this->comicModel->findAll();

        $data = [
            'title' => 'Comic | CI4APP',
            'comic' => $comic
        ];


        return view('comic/index', $data);
    }
}
