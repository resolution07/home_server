<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDHTModel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dht_s', function(Blueprint $table){
            $table->id();
            $table->float('humidity');
            $table->float('temperature');
            $table->float('heat_index')->nullable();
            $table->timestamps();

            $table->index(['humidity', 'temperature']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dht_s');
    }
}
