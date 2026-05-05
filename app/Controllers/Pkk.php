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
}