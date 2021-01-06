<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocDataNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doc_data_names', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('data_index')->nullable(false);
            $table->string('data_name',50)->nullable(true);
            $table->string('default_value',50)->nullable(true);
            $table->string('data_type',1)->nullable(true);
            $table->smallInteger('list_index')->nullable(true);
            $table->smallInteger('order_index')->nullable(true);
            $table->smallInteger('lock_field')->nullable(true);
            $table->string('special_field',20)->nullable(true);
            $table->string('check_type',10)->nullable(true);
            $table->string('check_value_list',250)->nullable(true);
            $table->smallInteger('check_bind_index1')->nullable(true);
            $table->smallInteger('check_bind_index2')->nullable(true);
            $table->string('check_operator1',2)->nullable(true);
            $table->string('check_operator2',2)->nullable(true);
            $table->smallInteger('client_field')->nullable(true);
            $table->smallInteger('must_field')->nullable(true);
            $table->string('cell_format',25)->nullable(true);
            $table->smallInteger('max_length')->nullable(true);
            $table->smallInteger('min_length')->nullable(true);
            $table->string('comp_no',20)->nullable(true);
            $table->smallInteger('client_updateable')->nullable(false);
            $table->smallInteger('fs_field')->nullable(false);
            $table->smallInteger('fs_must_field')->nullable(false);
            $table->integer('fs_order_index')->nullable(true);
            $table->integer('fs_train_order_index')->nullable(true);
            $table->smallInteger('fs_length')->nullable(true);
            $table->smallInteger('fs_trainable')->nullable(true);
            $table->smallInteger('fs_alignment')->nullable(true);
            $table->string('fs_default_value',50)->nullable(true);
            $table->string('fs_data_type',10)->nullable(true);
            $table->smallInteger('fs_lock_field')->nullable(true);
            $table->smallInteger('use_digitgrouping')->nullable(true);
            $table->smallInteger('num_digits')->nullable(true);
            $table->integer('data_width')->nullable(true);
            $table->smallInteger('fs_enablebatchlocking')->nullable(true);
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
        Schema::dropIfExists('doc_data_names');
    }
}
