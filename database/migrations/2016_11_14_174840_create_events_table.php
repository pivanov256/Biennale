<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateEventsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();
        Schema::create('events',function(Blueprint $table){
            $table->increments("id");
            $table->dateTime("start");
            $table->dateTime("end")->nullable();
            $table->string("place");
            $table->string("artist")->nullable();
            $table->string("entrance")->nullable();
            $table->string("title");
            $table->string("description");
            $table->binary("photo")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }

}