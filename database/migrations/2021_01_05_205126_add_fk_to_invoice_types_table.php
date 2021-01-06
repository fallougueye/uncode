<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToInvoiceTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoice_types', function (Blueprint $table) {
            $table->foreign('comp_no')
                ->references('comp_no')
                ->on('compagnies')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoice_types', function (Blueprint $table) {
            $table->foreign('comp_no')
                ->references('comp_no')
                ->on('compagnies')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }
}
