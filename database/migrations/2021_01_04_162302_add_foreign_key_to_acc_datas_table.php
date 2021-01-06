<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToAccDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('acc_datas', function (Blueprint $table) {
             $table->foreign('doc_id')
                ->references('doc_id')
                ->on('docs')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        Schema::table('acc_data_names', function (Blueprint $table) {
            $table->foreign('data_index')
                ->references('data_index')
                ->on('acc_datas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        Schema::table('acc_action_logs', function (Blueprint $table) {
            $table->foreign('doc_id')
                ->references('doc_id')
                ->on('docs')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        Schema::table('acc_action_log_names', function (Blueprint $table) {
            $table->foreign('log_index')
                ->references('log_index')
                ->on('acc_action_logs')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        Schema::table('doc_attachments', function (Blueprint $table) {
            $table->foreign('doc_id')
                ->references('doc_id')
                ->on('docs')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        Schema::table('doc_datas', function (Blueprint $table) {
            $table->foreign('doc_id')
                ->references('doc_id')
                ->on('docs')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        Schema::table('doc_data_names', function (Blueprint $table) {
            $table->foreign('data_index')
                ->references('data_index')
                ->on('doc_datas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        Schema::table('doc_files', function (Blueprint $table) {
            $table->foreign('doc_id')
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
        Schema::table('acc_datas', function (Blueprint $table) {
            $table->foreign('doc_id')
                ->references('doc_id')
                ->on('docs')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        Schema::table('acc_data_names', function (Blueprint $table) {
            $table->foreign('data_index')
                ->references('data_index')
                ->on('acc_datas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        Schema::table('acc_action_logs', function (Blueprint $table) {
            $table->foreign('doc_id')
                ->references('doc_id')
                ->on('docs')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        Schema::table('acc_action_log_names', function (Blueprint $table) {
            $table->foreign('log_index')
                ->references('log_index')
                ->on('acc_action_logs')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        Schema::table('doc_attachments', function (Blueprint $table) {
            $table->foreign('doc_id')
                ->references('doc_id')
                ->on('docs')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        Schema::table('doc_datas', function (Blueprint $table) {
            $table->foreign('doc_id')
                ->references('doc_id')
                ->on('docs')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        Schema::table('doc_data_names', function (Blueprint $table) {
            $table->foreign('data_index')
                ->references('data_index')
                ->on('doc_datas')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
        Schema::table('doc_files', function (Blueprint $table) {
            $table->foreign('doc_id')
                ->references('doc_id')
                ->on('docs')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });

        
    }
}
