<?php

use App\HostsSystems;
use App\Systems;
use Illuminate\Database\Seeder;

class SystemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $system = new Systems();
        $system->id = null;
        $system->controller = 'UsersController';
        $system->route = 'users';
        $system->system = 'Usuarios';
        $system->save();

        $systemHost = new HostsSystems();
        $systemHost->hosts_id=1;
        $systemHost->systems_id=1;
        $systemHost->save();
    }
}
