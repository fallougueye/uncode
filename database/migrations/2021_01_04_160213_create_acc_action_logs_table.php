<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccActionLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acc_action_logs', function (Blueprint $table) {
            $table->integer('log_index')->nullable(false)->primary();
            $table->string('doc_id',64)->nullable(false);
            $table->string('stamp_uid',60)->nullable(false);
            $table->datetime('stamp_date')->nullable(false);
            $table->string('log_comment',2000)->nullable(true);
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
        Schema::dropIfExists('acc_action_logs');
    }
}
