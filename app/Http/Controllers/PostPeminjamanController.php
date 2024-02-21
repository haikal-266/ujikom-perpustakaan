<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peminjaman;

class PostPeminjamanController extends Controller
{
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
