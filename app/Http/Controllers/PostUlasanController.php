<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ulasanbuku;

class PostUlasanController extends Controller
{
    public function ulas($id)
    {

        $ulasan = ulasanbuku::where('BukuID', $id)->get();
        return view('private.post.ulasan', compact('ulasan'));
        
    }
}
