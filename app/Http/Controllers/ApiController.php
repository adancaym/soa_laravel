<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function apiAdminUsers(){
        return view('users.index');
    }
    public function apiFormUser(){
        $data['id'] = request('id');
        return view('users.form',$data);

    }
}
