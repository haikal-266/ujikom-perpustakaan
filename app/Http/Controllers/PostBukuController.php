<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class PostBukuController extends Controller
{
    

    public function index()
    {

        $data_buku = buku::all(); 

        return  view('private.post.index', compact('data_buku'));
        
    }

    public function edit($id)
    {

        $book = buku::where('BukuID', $id)->get();
        return  view('private.post.edit', ['book' => $book[0]]);
        
    }

    public function update(Request $request)
    {

       $buku = buku::where('BukuID', $request->id)->update([

            'Judul' => $request->Judul,
            'Penulis' => $request->Penulis,
            'Penerbit' => $request->Penerbit,
            'TahunTerbit' => $request->TahunTerbit,

       ]);

        return redirect('/index');
    }



    public function destroy($id)
    {

        $book = buku::where('BukuID', $id);
        $book->delete();  
        return redirect('/index');
      
    }


    public function store(Request $request)
    {

        buku::create([

            'Judul' => $request->Judul,
            'Penulis' => $request->Penulis,
            'Penerbit' => $request->Penerbit,
            'TahunTerbit' => $request->TahunTerbit,

       ]);

        // $data_buku = new buku();

        // $data_buku->Judul = $request->Judul;
        // $data_buku->Penulis = $request->Penulis;
        // $data_buku->Penerbit = $request->Penerbit;
        // $data_buku->TahunTerbit = $request->TahunTerbit;
        // $data_buku->save();

        return redirect('/index');
        
    }

    // public function delete(BukuID $BukuID)
    // {
    //     buku::find('BukuID');
    // }

}
