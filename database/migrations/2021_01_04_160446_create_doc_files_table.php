<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_files', function (Blueprint $table) {
            $table->id();
            
            $table->string('doc_id',64)->nullable(false);
            $table->integer('doc_page')->nullable(false);
            $table->string('doc_file',256)->nullable(false);
            $table->string('file_format',4)->nullable(false);
            $table->string('file_resource',100)->nullable(false);
            $table->string('user_org_code',10)->nullable(false);
            $table->smallInteger('file_encrypted')->nullable(true);
            $table->string('external_ref',60)->nullable(true);
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
        Schema::dropIfExists('doc_files');
    }
}
