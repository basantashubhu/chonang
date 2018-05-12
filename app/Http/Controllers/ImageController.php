<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    
    public function returnLogo($filename){
        $file = Storage::disk('local')->get($filename);
        return new Response($file, 200);
    }

    public function returnCover($filename){
        $file = Storage::disk('local')->get($filename);
        return new Response($file, 200);
    }

}
