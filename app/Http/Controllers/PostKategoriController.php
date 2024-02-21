<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kategoribuku;

class PostKategoriController extends Controller
{
    public function store(Request $request)
    {

        $data_kategori = new kategoribuku();

        $data_buku->NamaKategori = $request->NamaKategori;
        $data_buku->save();
        
        return view('private.post.create');
    }
}
