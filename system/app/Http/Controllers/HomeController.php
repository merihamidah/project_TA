<?php

namespace App\Http\Controllers;

class HomeController extends Controller{
    function showBeranda(){
        return view('beranda');
    }
    function showPemenuhanGizi(){
        return view('pemenuhangizi');
    }
    function showArtikel(){
        return view('artikel');
    }
    
    function showIbuHamil(){
        return view('ibuhamil');
    }

}