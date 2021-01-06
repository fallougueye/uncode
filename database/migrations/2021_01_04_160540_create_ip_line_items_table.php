<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIpLineItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ip_line_items', function (Blueprint $table) {
            $table->id();
            
            $table->string('LIT_DOC_ID',64)->nullable(false);
            $table->integer('LIT_ROWID')->nullable(false);
            $table->string('LIT_PRODUCT_CODE',50)->nullable(true);
            $table->string('LIT_ITEM_DESCRIPTION',200)->nullable(true);
            $table->string('LIT_ADD_KEY_CODE',50)->nullable(true);
            $table->double('LIT_DISCOUNT_PER',19, 6)->nullable(true);
            $table->double('LIT_DISCOUNT_AMOUNT',19, 6)->nullable(true);
            $table->double('LIT_VAT_PER',19, 6)->nullable(true);
            $table->double('LIT_VAT_AMOUNT',19, 6)->nullable(true);
            $table->double('LIT_QUANTITY',19, 6)->nullable(true);
            $table->string('LIT_QUANTITY_UNIT',50)->nullable(true);
            $table->double('LIT_NET_SUM',19, 6)->nullable(true);
            $table->double('LIT_GROSS_SUM',19, 6)->nullable(true);
            $table->double('LIT_APRICE_NET',19, 6)->nullable(true);
            $table->double('LIT_APRICE_GROSS',19, 6)->nullable(true);
            $table->string('LIT_ORDER_NUMBER',50)->nullable(true);
            $table->integer('LIT_ORDER_ROW_NUMBER')->nullable(true);
            $table->smallInteger('LIT_INFO_ITEM')->nullable(true);
            $table->datetime('LIT_STAMP_TIME')->nullable(true);
            $table->double('LIT_CALC_ITEM_TOTAL',19, 6)->nullable(true);
            $table->smallInteger('LIT_MATCH_STATUS_INDEX')->nullable(true);
            $table->string('LIT_T1',100)->nullable(true);
            $table->string('LIT_T2',100)->nullable(true);
            $table->string('LIT_T3',100)->nullable(true);
            $table->string('LIT_T4',100)->nullable(true);
            $table->string('LIT_T5',100)->nullable(true);
            $table->string('LIT_T6',100)->nullable(true);
            $table->string('LIT_T7',100)->nullable(true);
            $table->string('LIT_T8',100)->nullable(true);
            $table->string('LIT_T9',100)->nullable(true);
            $table->string('LIT_T10',100)->nullable(true);
            $table->string('LIT_T11',100)->nullable(true);
            $table->string('LIT_T12',100)->nullable(true);
            $table->string('LIT_T13',100)->nullable(true);
            $table->string('LIT_T14',100)->nullable(true);
            $table->string('LIT_T15',100)->nullable(true);
            $table->string('LIT_T16',100)->nullable(true);
            $table->string('LIT_T17',100)->nullable(true);
            $table->string('LIT_T18',100)->nullable(true);
            $table->string('LIT_T19',100)->nullable(true);
            $table->string('LIT_T20',100)->nullable(true);
            $table->string('[LIT_T21',100)->nullable(true);
            $table->string('LIT_T22',100)->nullable(true);
            $table->string('LIT_T23',100)->nullable(true);
            $table->string('LIT_T24',100)->nullable(true);
            $table->string('LIT_T25',100)->nullable(true);
            $table->string('LIT_T26',100)->nullable(true);
            $table->string('LIT_T27',100)->nullable(true);
            $table->string('LIT_T28',100)->nullable(true);
            $table->string('LIT_T29',100)->nullable(true);
            $table->string('LIT_T30',100)->nullable(true);
            $table->string('LIT_T31',100)->nullable(true);
            $table->string('LIT_T32',100)->nullable(true);
            $table->string('LIT_T33',100)->nullable(true);
            $table->string('LIT_T34',100)->nullable(true);
            $table->string('LIT_T35',100)->nullable(true);
            $table->string('LIT_T36',100)->nullable(true);
            $table->string('LIT_T37',100)->nullable(true);
            $table->string('LIT_T38',100)->nullable(true);
            $table->string('LIT_T39',100)->nullable(true);
            $table->string('LIT_T40',100)->nullable(true);
            $table->string('LIT_T41',100)->nullable(true);
            $table->string('LIT_T42',100)->nullable(true);
            $table->string('LIT_T43',100)->nullable(true);
            $table->string('LIT_T44',100)->nullable(true);
            $table->string('LIT_T45',100)->nullable(true);
            $table->string('LIT_T46',100)->nullable(true);
            $table->string('LIT_T47',100)->nullable(true);
            $table->string('LIT_T48',100)->nullable(true);
            $table->string('LIT_T49',100)->nullable(true);
            $table->string('LIT_T50',100)->nullable(true);
            $table->double('LIT_N1',19, 6)->nullable(true);
            $table->double('LIT_N2',19, 6)->nullable(true);
            $table->double('LIT_N3',19, 6)->nullable(true);
            $table->double('LIT_N4',19, 6)->nullable(true);
            $table->double('LIT_N5',19, 6)->nullable(true);
            $table->double('LIT_N6',19, 6)->nullable(true);
            $table->double('LIT_N7',19, 6)->nullable(true);
            $table->double('LIT_N8',19, 6)->nullable(true);
            $table->double('LIT_N9',19, 6)->nullable(true);
            $table->double('LIT_N10',19, 6)->nullable(true);
            $table->datetime('LIT_D1')->nullable(true);
            $table->datetime('LIT_D2')->nullable(true);
            $table->datetime('LIT_D3')->nullable(true);
            $table->datetime('LIT_D4')->nullable(true);
            $table->datetime('LIT_D5')->nullable(true);
            $table->datetime('LIT_D6')->nullable(true);
            $table->datetime('LIT_D7')->nullable(true);
            $table->datetime('LIT_D8')->nullable(true);
            $table->datetime('LIT_D9')->nullable(true);
            $table->datetime('LIT_D10')->nullable(true);
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
        Schema::dropIfExists('ip_line_items');
    }
}
