<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        //
        $data = ["title"=>"Pages"];
        return 
        view('templates/header', $data)
        .view('templates/navbar',$data)
        .view('pages/index', $data)
        .view('templates/footer');
    }

    public function home(){
        $data = ["title"=>"Home"];
        return 
        view('templates/header', $data)
        .view('templates/navbar',$data)
        .view('pages/home', $data)
        .view('templates/footer');        
    }
    public function about(){
        $data = ["title"=>"About"];
        return 
        view('templates/header', $data)
        .view('templates/navbar',$data)
        .view('pages/about', $data)
        .view('templates/footer');
    }
}
?>