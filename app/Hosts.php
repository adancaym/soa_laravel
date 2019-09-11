<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class Hosts extends Model {

	protected $table      = "hosts";
	protected $primaryKey = "id";

	public function accounts(){
	    return $this->belongsTo(Accounts::class);
	}

	public function systems(){
	    return $this->belongsToMany(Systems::class);
    }


}

