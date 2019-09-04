<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Systems extends Model
{
    protected $table = "systems";
    protected $primaryKey = "id";

    public function hosts(){
        return $this->belongsToMany(Hosts::class);
    }


}
