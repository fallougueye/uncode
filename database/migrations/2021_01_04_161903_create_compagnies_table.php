<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompagniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compagnies', function (Blueprint $table) {
            
            $table->smallInteger('comp_index')->nullable(true);
            $table->string('comp_no',20)->nullable(false)->primary();
            $table->string('comp_name',99)->nullable(true);
            $table->string('comp_parent',20)->nullable(true);
            $table->string('comp_struct1',150)->nullable(true);
            $table->string('comp_struct2',150)->nullable(true);
            $table->string('comp_struct3',150)->nullable(true);
            $table->string('comp_struct4',150)->nullable(true);
            $table->string('comp_struct5',150)->nullable(true);
            $table->string('comp_struct6',150)->nullable(true);
            $table->string('comp_struct7',150)->nullable(true);
            $table->string('comp_struct8',150)->nullable(true);
            $table->string('comp_struct9',150)->nullable(true);
            $table->string('comp_struct10',150)->nullable(true);
            $table->datetime('comp_date1')->nullable(true);
            $table->datetime('comp_date2')->nullable(true);
            $table->datetime('comp_date3')->nullable(true);
            $table->datetime('valid_start')->nullable(true);
            $table->datetime('valid_end')->nullable(true);
            $table->string('edipartnerid',30)->nullable(true);

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
        Schema::dropIfExists('compagnies');
    }
}
