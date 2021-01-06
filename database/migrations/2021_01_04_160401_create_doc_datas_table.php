<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_datas', function (Blueprint $table) {
            $table->smallInteger('data_index')->nullable(false)->primary();
            $table->string('doc_id',64)->nullable(false);
            
            $table->string('data_value',100)->nullable(true);
            $table->datetime('stamp_date')->nullable(true);
            $table->string('stamp_uid',60)->nullable(true);

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
        Schema::dropIfExists('doc_datas');
    }
}
