<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Hosts;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function saveModel(Model $model)
    {
        try {
            if ($model->save()) {
                return response()->json(['mensaje' => 'Se ha guardado exitosamente']);
            } else {
                return response()->json(['mensaje' => 'Error']);
            }
        } catch (\Exception $e) {
            return response()->json(['mensaje'=>$e->getMessage()]);
        }
    }

    public function updateModel(Model $model,Request $request)
    {
        try {
            if ($model->update($request->all())) {
                return response()->json(['mensaje' => 'Se ha guardado exitosamente']);
            } else {

                return response()->json(['mensaje' => 'Error']);
            }
        }catch (\Exception $e){
            return response()->json(['mensaje'=>$e->getMessage()]);
        }
    }


}
