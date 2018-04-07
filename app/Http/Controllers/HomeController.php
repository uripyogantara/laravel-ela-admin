<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function dashboard(){
        return view('dashboard');
    }

    public function kunjungan(){
        return view('kunjungan');
    }

    public function dataMaster(){
        return view('data-master');
    }

    public function dataPasien(){
        return view('data-pasien');
    }

    public function pengaturan(){
        return view('pengaturan');
    }
}
