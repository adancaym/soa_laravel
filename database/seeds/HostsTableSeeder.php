<?php

use App\Accounts;
use App\Hosts;
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
        $host->accounts_id = $account->createAccount()->id;
        $host->save();

    }
}
