<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpLineItemParamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ip_line_item_params', function (Blueprint $table) {
            $table->id();
            
            $table->string('LIP_DATA_FIELD',50)->nullable(false);
            $table->string('LIP_COMP_NO',20)->nullable(true);
            $table->string('LIP_FIELD_LABEL',100)->nullable(true);
            $table->string('LIP_DATA_TYPE',10)->nullable(true);
            $table->string('LIP_SCREEN_POSITION',10)->nullable(true);
            $table->smallInteger('LIP_FIELD_LENGHT')->nullable(true);
            $table->smallInteger('LIP_SHOW_IN_CLIENT')->nullable(true);
            $table->string('LIP_ORDER_ROW_DATA_FIELD',50)->nullable(true);
            $table->string('LIP_ORDER_ROW_DATA_FIELD_LABEL',100)->nullable(true);
            $table->smallInteger('LIP_ASSOSIATION_FIELD')->nullable(true);
            $table->smallInteger('LIP_RULES_FIELD')->nullable(true);
            $table->smallInteger('lip_col_order')->nullable(true);
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
        Schema::dropIfExists('ip_line_item_params');
    }
}
