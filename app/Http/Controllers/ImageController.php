<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upload(Request $request) {
        $path =$request->file('image')->store('app/public');
        // dd($path);
        return view('image',['path'=>$path]);
    }
}
