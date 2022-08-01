<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
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
