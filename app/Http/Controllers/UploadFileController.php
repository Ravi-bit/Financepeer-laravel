<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function store(Request $re){
        $re->validate(['filep'=>'required |image|max:1900']);
        if($re->hasFile('filep')){
           $file= $re->file('filep');
           $ext= $file->getClientOriginalExtension();
           $fileName= time().'.'.$ext;
           $file->storeAs('public/products/',$fileName);
           return $fileName;

        }
        return '';
    }
}
