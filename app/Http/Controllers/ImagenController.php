<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagenController extends Controller
{
    public function store(Request $requets){
        $request->validate([
            'img' => 'mimes:jpeg,png,jpg|max:2048', 
        ]);
    }

}
