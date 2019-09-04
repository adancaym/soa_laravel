<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{

    protected $table = 'accounts';
    protected $primaryKey= 'id';

    public function user(){
        return $this->hasOne(User::class);
    }

    public function hosts(){
        return $this->hasMany(Hosts::class);
    }

    public function accounts(){
        return $this->hasMany(Accounts::class,'id_accounts_father','id');
    }

    public function createAccount(){
        $new = new Accounts();
        if ($new->save()){
            return $new;
        }
    }

    public function createAccountWithParent($idParent=null){

        $newAccount = $this->createAccount();

            $newAccount->id_accounts_father = $idParent ?? session('host')->accounts_id;

        if ($newAccount->update()){
            return $newAccount;
        }
    }

}
