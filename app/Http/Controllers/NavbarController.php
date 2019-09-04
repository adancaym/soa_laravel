<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NavbarController extends Controller
{
    public function getHost(){




        $data = ['host'=>session('host')];
        if (Auth::check()) {
            $data['links'] = session('host')->systems;

        }
        return response()->json($data);
    }

}
