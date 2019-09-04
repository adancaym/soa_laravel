<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostsSystemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosts_systems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('systems_id')->nullable(false);
            $table->unsignedBigInteger('hosts_id')->nullable(false);

            $table->foreign('systems_id')->references('id')->on('systems');
            $table->foreign('hosts_id')->references('id')->on('hosts');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hosts_systems');
    }
}
