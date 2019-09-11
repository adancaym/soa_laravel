<?php

use App\Accounts;
use App\Hosts;
use App\User;
use Illuminate\Database\Seeder;

class HostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $account = new Accounts();
        $host = new Hosts();

        $host->id = null;
        $host->host = 'neural';
        $host->title_page = 'neural';
        $host->landing_page = 'neural';
        $host->accounts_id = $account->createAccount()->id;
        $host->save();

        $hostName = 'neural';
        $user = new User();

        $user->id = null;
        $user->name = $hostName;
        $user->email = $hostName.'@'.$hostName.'.com';
        $user->password =  bcrypt($hostName);
        $user->accounts_id = $host->accounts_id;
        $user->save();

    }
}
