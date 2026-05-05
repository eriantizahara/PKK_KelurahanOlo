<?php

namespace App\Controllers;

class Layout extends BaseController
{
    public function index()
    {
        return view('layout/main');
    }
    public function layanan()
    {
        return view('pelayanan_kelurahan/pelayanan');
    }
    public function kontak()
    {
        return view('layout/kontak');
    }
}
