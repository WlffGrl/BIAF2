<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.welcome');
    }
    public function pengumuman()
    {
        return view('pages.pengumuman');
    }
    public function jadwal()
    {
        return view('pages.jadwal');
    }
    public function forum()
    {
        return view('pages.forum');
    }
}
