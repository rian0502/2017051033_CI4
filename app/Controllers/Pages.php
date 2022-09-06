<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    public function index()
    {
        //
        $data = ["title"=>"Pages"];
        return  view('pages/pages', $data);
    }
    public function home(){
        $data = ["title"=>"Home"];
        return  view('pages/home', $data);      
    }
    public function about(){
        $data = ["title"=>"About"];
        return view('pages/about', $data);
    }
}
?>