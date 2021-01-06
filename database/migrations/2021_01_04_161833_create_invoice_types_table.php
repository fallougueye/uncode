<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_types', function (Blueprint $table) {
            $table->string('invoice_type_code',5)->nullable(false)->primary();
            $table->string('invoice_type_name',60)->nullable(true);
            $table->smallInteger('handle_code')->nullable(true);
            $table->string('comp_no',20)->nullable(false);
            $table->smallInteger('layer')->nullable(true);
            $table->integer('credit_memo')->nullable(true);
            $table->smallInteger('INVOICE_TYPE_CAT')->nullable(true);
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
        Schema::dropIfExists('invoice_types');
    }
}
