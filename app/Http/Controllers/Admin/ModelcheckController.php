<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
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