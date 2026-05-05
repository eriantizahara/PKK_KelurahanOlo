<?php

namespace App\Controllers;

class Pkk extends BaseController
{
    public function profile()
    {
        return view('pkk/profile_tp_pkk');
    }

    public function visiMisi()
    {
        return view('pkk/visi_misi');
    }

    public function strukturOrganisasi()
    {
        return view('pkk/struktur_organisasi_tp_pkk');
    }
    public function pokja1()
    {
        return view('pkk/pokja1');
    }

    public function pokja2()
    {
        return view('pkk/pokja2');
    }

    public function pokja3()
    {
        return view('pkk/pokja3');
    }

    public function pokja4()
    {
        return view('pkk/pokja4');
    }
}