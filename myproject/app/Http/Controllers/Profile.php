<?php

namespace App\Http\Controllers;
use App\file;
use App\User;

use Illuminate\Http\Request;

class Profile extends Controller
{
    function store(Request $req)
    {
      // $path=$req->file('file')->store('storage');
         /*
         session()->put('success', 'your file uploaded successfuly');
          */
          // return redirect()
          // ->back()
           //->withInput();
             
      // return 'your file is uploaded successfuly';
      $user = auth()->user();
      if($req->hasFile('file'))
     {
       $filenamewithex = $req->file->getClientOriginalName();
       $filename = pathinfo($filenamewithex, PATHINFO_FILENAME);
       $filetype = $req->file->getClientOriginalExtension();
       $filesize = $req->file->getSize();
       $uploader = $user->name;
       $access =  $req->get('access');
       // $version = 1.0;
       //$check = file::where('name', '=', $filename)->where('type','=',$filetype)->where('uploader','=',$uploader)->first();
       /*if($check != null){
         do{
           $filename= $filename.".".$version;
           $version = $version + 1;
           $check2= file::where('name', '=', $filename)->where('type','=',$filetype)->where('uploader','=',$uploader)->first();
         }while ($check != null);
         $filenamewithex= $filename.$filetype ;
         $req->file->storeAs('storage',$filenamewithex);
        }
        else */
        $req->file->storeAs('storage',$filenamewithex);
  
       $file = new file;
       $file->name = $filename;
       $file->type = $filetype;
       $file->size = $filesize/1000000;
       $file->uploader = $uploader;
      $file->access= $access;
       $file->save();
       return redirect()
       ->back();
      }
    
    } 
}
