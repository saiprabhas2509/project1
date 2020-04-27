<?php

namespace App\Http\Controllers;
use App\file;
use App\User;

use Illuminate\Http\Request;

class Profile extends Controller
{
    function store(Request $req)
    {
      
      $user = auth()->user();
      $a = $req->get('access');
      if($req->hasFile('file') )
     {  
        $access = $req->get('access');
        $a= '';
        $b = '';
       if ($access != null)
      {
       $filenamewithex = $req->file->getClientOriginalName();
       $filename = pathinfo($filenamewithex, PATHINFO_FILENAME);
       $filetype = $req->file->getClientOriginalExtension();
       $filesize = $req->file->getSize();
       $uploader = $user->name;
      /*
       $ver= "1.0";
       $q1 = file::where([
         ['name',$filename],
         ['type',$filetype],
         ['uploader',$uploader],
       ])->get();
      if($q1 != null)
       {
         do {
           $filename .= ".$ver";
           $ver = (float)$ver + 1.0; 
           $q2 = file::select('select * from files where name = :filename', ['filename' => $filename]);
         } while($q2  != null);
          /*$filename .= ".$ver";  
         $q2 = file::where(['name','=',$filename])->get();
         if(q1 != null){
          $ver = $ver + 1.0;
         }*/
       
        
       $req->file->storeAs('storage',$filename."by".$uploader.".".$filetype);
     
       $file = new file;
       $file->name = $filename;
       $file->type = $filetype;
       $file->size = $filesize/1000000;
       $file->uploader = $uploader;
       $file->access= $access;
       $file->save();
       $a = "File Uploaded Successfully!";
       return view('home', ['a' => $a]);  
      //return $filename;
    }

      else 
      { 
        $b = "Please Provide Access";
       return view('home',['b' =>$b]);
      }
     }
     else
     {
       $c = "Please add a file";
       return view('home',['c' =>$c]);
     }
   } 
}
