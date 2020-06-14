<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index() {
        $nama = 'NineOne Store';
        // $service = ["Fullstack Web Developer", "Videography", "Digital
        // Marketing","Icon Design"];
        // return view('template' , ['nama' => $nama, 'service' => $service]);
        return view('web.home', ['nama' => $nama]);
    }
}
