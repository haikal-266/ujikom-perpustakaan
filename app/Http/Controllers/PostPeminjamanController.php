<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peminjaman;
use App\Models\buku;
// use App\Models\User;


class PostPeminjamanController extends Controller
{
    // public function index()
    // {

    //     $pinjam=peminjaman::get(); 

    //     return  view('private.post.index', compact('data_pinjam'));
        
    // }


    public function store(Request $request)
    {
        
        $pinjam = new peminjaman();

        $pinjam->UserID = Auth()->user()->id;
        $pinjam->BukuID = $request->BukuID;
        $pinjam->TanggalPeminjaman = $request->TanggalPeminjaman;
        $pinjam->TanggalPengembalian = $request->TanggalPengembalian;
        $pinjam->StatusPeminjaman = $request->StatusPeminjaman;
        $pinjam->save();

        return view('private.post.peminjaman');
    }
}
