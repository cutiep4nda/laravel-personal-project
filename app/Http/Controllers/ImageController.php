<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    public function index(){
        return view('pages.uploadfile');
    }
    public function store(Request $request)
    {
        //dd($request);
        // $request->validate([
        //     'image' => 'required|mimes:jpg,png,pdf'
        // ]);
        // dd($request);
        $file = $request->file('image');
        $path = $file->store('images');
        // dd($path);
        $image = new Image();
        $success = $image->create([
            'credential' => Auth::user()->div,
            'path' => $path
        ]);

        if($success){
            return response()->json(['message' => 'Image uploaded successfully!']);
        }
    }

    public function show(){
        if (Auth::user()->div == "admin") {
            $data = Image::all();
        }else{
            $data = Image::where('credential', Auth::user()->div)->get();
        }
        return view('pages.showimage', ['data' => $data]);
    }
}
