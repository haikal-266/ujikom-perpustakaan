<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class PostBukuController extends Controller
{

    public function index()
    {

        return  view('private.post.create');
        
    }


    public function store(Request $request)
    {

        $data_buku = new buku();

        $data_buku->Judul = $request->Judul;
        $data_buku->Penulis = $request->Penulis;
        $data_buku->Penerbit = $request->Penerbit;
        $data_buku->TahunTerbit = $request->TahunTerbit;
        $data_buku->save();

        return view('private.post.create');
        
    }
}
