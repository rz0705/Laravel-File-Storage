<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('upload');
    }

    public function fileUploadPost(Request $request)
    {
        // dd($request->all());
        // dd('hghf');

        $request->validate([
            'file' => 'required|mimes:png,jpg,pdf,xlx,csv|max:2048',
        ]);

        $fileName = time().'.'.$request->file->extension();  
   
        $request->file->move(public_path('storage/uploads'), $fileName);
   
        return back()
            ->with('success','You have successfully upload file.')
            ->with('file',$fileName);
    }
}
