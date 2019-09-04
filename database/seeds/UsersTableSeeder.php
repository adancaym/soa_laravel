<?php

use App\Accounts;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $account = new Accounts();
        $user->id = null;
        $user->name = 'Adan';
        $user->email = 'adanyanezgonzalez@gmail.com';
        $user->password =  bcrypt('likeastone');
        $user->accounts_id = $account->createAccountWithParent(1)->id;
        $user->save();
    }
}
