<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}



function poster(Request $request) 
{   
    $b=$request->qwerty;
    
    move_uploaded_file($b, 'D:\development\ai\Brain\Test.jpg');
    exec('python D:\development\ai\Brain\brain.py 2>&1',$a);
    $c=json_encode($a);
    return $c;
}




