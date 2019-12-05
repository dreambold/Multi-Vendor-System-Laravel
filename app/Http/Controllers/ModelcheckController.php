<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;

class ModelcheckController extends Controller
{
    public function modelCheck(Request $request)
    {
        $modelname = $request->modelName;
        $filename = app_path('Models/'.$modelname.'.php');
        if(file_exists($filename)){
            return [
                'status'=>false,
                'message'=>'Model name already exists'
            ];
        }
        else{
            return [
                'status'=>true,
                'message'=>'success'
            ];
        }
    }
}