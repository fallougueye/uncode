<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkToIpLineItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ip_line_items', function (Blueprint $table) {
            $table->foreign('LIT_DOC_ID')
                ->references('doc_id')
                ->on('docs')
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
        Schema::table('ip_line_items', function (Blueprint $table) {
            $table->foreign('LIT_DOC_ID')
                ->references('doc_id')
                ->on('docs')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }
}
