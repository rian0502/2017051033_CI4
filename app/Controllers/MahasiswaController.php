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

    public function detail($npm){
        $data = [
            "title" => "Mahasiswa",
            "mahasiswa" => (new Mahasiswa())->where(["NPM" => $npm])->first()
        ];
        return view("mahasiswa/detail", $data);
    }


    public function create(){
        session();
        $data = [
            "title" => "Mahasiswa",
            'validation' => \Config\Services::validation()
        ];
        return view("mahasiswa/create",$data);
    }

    public function store(){
        $data = [
            "NPM" => $this->request->getPost("NPM"),
            "nama" => $this->request->getPost("nama"),
            "alamat" => $this->request->getPost("alamat"),
        ];
        if(!$this->validate([
            "NPM" => "required|is_unique[mahasiswas.NPM]",
            "nama" => "required|min_length[1]|",
            "alamat" => "required|min_length[1]",
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/mahasiswas/create')->withInput()->with('validation',$validation);
        }


        (new Mahasiswa())->insert($data);
        return redirect()->to("/mahasiswas")->withInput()->with("success","Data berhasil ditambahkan");
    }

    public function edit($npm){
        session();
        $data = [
            "title" => "Mahasiswa",
            "mahasiswa" => (new Mahasiswa())->where(["NPM" => $npm])->first(),
            "validation" => \Config\Services::validation()
        ];
        return view("mahasiswa/update", $data);
    }

    public function update(){

        if(!$this->validate([
            "nama" => "required|min_length[1]",
            "alamat" => "required|min_length[1]",
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('/mahasiswas/edit/'.$this->request->getPost('NPM'))->withInput()->with('validation',$validation);
        }

        $data = [
            "nama" => $this->request->getPost("nama"),
            "alamat" => $this->request->getPost("alamat"),
        ];
        (new Mahasiswa())->where(["NPM" => $this->request->getPost("NPM")])->set($data)->update();
        return redirect()->to("/mahasiswas")->with("success","Data berhasil diubah");
    }

    public function delete($npm){
        (new Mahasiswa())->where(["NPM" => $npm])->delete();
        return redirect()->to("/mahasiswas")->with("success","Data berhasil dihapus");
    }
}
