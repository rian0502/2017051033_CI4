<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa;

class MahasiswaController extends BaseController
{
    public function index()
    {
        //
        $data = [
            "title" => "Mahasiswa",
            "mahasiswa" => (new Mahasiswa())->findAll()
        ];           
        return view("mahasiswa/index", $data);
    }
    public function detail($npm)
    {
        $data = [
            "title" => "Detail Mahasiswa",
            "mahasiswa" => (new Mahasiswa())->find($npm)
        ];
        return $npm;
        return view("mahasiswa/detail", $data);
    }
}
