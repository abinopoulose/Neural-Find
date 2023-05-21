<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;



class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    function predict(Request $request) 
    {   
        move_uploaded_file($request->img,'..\ai\test.jpg');
        exec('cd ../ai && python brain.py  2>&1',$cmdoutput);
        foreach ($cmdoutput as $output)
            $output=$output;

        return view('prediction',['result'=> $output ]);
    }

}



