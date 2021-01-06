<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccActionLogNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acc_action_log_names', function (Blueprint $table) {
            $table->id();
           
            $table->integer('log_index')->nullable(false);
            $table->string('log_description',250)->nullable(true);
            $table->smallInteger('default_view')->nullable(false);
            $table->string('lan_code',3)->nullable(false);
            $table->integer('search_index')->nullable(true);
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
        Schema::dropIfExists('acc_action_log_names');
    }
}
