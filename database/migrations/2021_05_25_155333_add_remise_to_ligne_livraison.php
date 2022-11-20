<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRemiseToLigneLivraison extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ligne_bonlivraison', function (Blueprint $table) {
            //
            $table->integer('remise')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ligne_bonlivraison', function (Blueprint $table) {
            //
            $table->removeColumn('remise')->nullable();
        });
    }
}
