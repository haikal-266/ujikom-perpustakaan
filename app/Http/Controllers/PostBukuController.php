<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class PostBukuController extends Controller
{
    

    public function index()
    {

        $data_buku=buku::get(); 

        return  view('private.post.index', compact('data_buku'));
        
    }


    public function store(Request $request)
    {

        $data_buku = new buku();

        $data_buku->Judul = $request->Judul;
        $data_buku->Penulis = $request->Penulis;
        $data_buku->Penerbit = $request->Penerbit;
        $data_buku->TahunTerbit = $request->TahunTerbit;
        $data_buku->save();

        return view('home');
        
    }

    // public function delete(BukuID $BukuID)
    // {
    //     buku::find('BukuID');
    // }

}
