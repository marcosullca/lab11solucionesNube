<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchivosController extends Controller
{
    public function showArchivosForm(){
        return view('archivo');
    }
    public function storeUploads(Request $request)
    {
        $response=cloudinary()-> upload($request->file('file')->getRealPath())-> getSecurePath();
        dd($response);
        // $fileName = $request->file('file')->getClientOriginalName();
        // $extension = $request->file('file')->extension();
        // $mime = $request->file('file')->getMimeType();
        // $clientSize = $request->file('file')->getSize();

        return back()
            ->with('success', 'File uploaded successfully');
    }
}
