<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategoribuku;

class PostKategoriController extends Controller
{

    public function index()
    {

        $data_kategori=kategoribuku::get(); 

        return  view('private.post.kategori', compact('data_kategori'));
        
    }

    public function store(Request $request)
    {

        $data_kategori = new kategoribuku();

        $data_kategori->NamaKategori = $request->NamaKategori;
        $data_kategori->save();
        
        return view('home');
    }
}
