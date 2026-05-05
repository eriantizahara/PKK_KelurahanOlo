<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function umum()
    {
        return view('profile/umum');
    }

    public function visiMisi()
    {
        return view('profile/visimisi');
    }

    public function struktur()
    {
        return view('profile/struktur');
    }
}
