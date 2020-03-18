<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
           


            $table->increments('id');
            $table->string('name');
            $table->string ('document');
            $table->string('email')->notnull();
            $table->string('direction');
            $table->integer('Direction')->nullable();
            $table->date('updated_at')->nullable(); 
            $table->date('created_at')->nullable();
            $table->integer('UsarioCate_ID')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
