<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docs', function (Blueprint $table) {
            $table->string('doc_id',64)->nullable(false)->primary(); 
            $table->datetime('scan_date')->nullable(true);
            $table->string('comp_no',20)->nullable(true);
            $table->string('doc_name',60)->nullable(true);
            $table->smallInteger('doc_pages')->nullable(true);
            $table->smallInteger('flow_fixed')->nullable(true);
            $table->string('supplier_num',100)->nullable(true);
            $table->string('invoice_num',30)->nullable(true);
            $table->string('voucher_num',30)->nullable(true);
            $table->datetime('invoice_date')->nullable(true);
            $table->datetime('invoice_last_date')->nullable(true);
            $table->double('invoice_sum',19, 6)->nullable(true);
            $table->datetime('stamp_date')->nullable(true);
            $table->string('stamp_uid',60)->nullable(true);
            $table->smallInteger('status_index')->nullable(false);
            $table->string('order_num',50)->nullable(true);
            $table->string('last_acceptor',60)->nullable(true);
            $table->double('exchange_rate',19, 6)->nullable(true);
            $table->string('invoice_currency',10)->nullable(true);
            $table->double('invoice_sum_calc',19, 6)->nullable(true);
            $table->datetime('cash_date')->nullable(true);
            $table->string('accounting_period',15)->nullable(true);
            $table->string('supplier_name',70)->nullable(true);
            $table->string('attrib_t1',50)->nullable(true);
            $table->string('attrib_t2',50)->nullable(true);
            $table->string('attrib_t3',50)->nullable(true);
            $table->string('attrib_t4',50)->nullable(true);
            $table->string('attrib_t5',50)->nullable(true);
            $table->string('attrib_t6]',50)->nullable(true);
            $table->string('attrib_t7',50)->nullable(true);
            $table->double('attrib_n',19, 6)->nullable(true);
            $table->double('attrib_n2',19, 6)->nullable(true);
            $table->double('attrib_n3',19, 6)->nullable(true);
            $table->double('attrib_n4',19, 6)->nullable(true);
            $table->datetime('attrib_d')->nullable(true);
            $table->datetime('attrib_d2')->nullable(true);
            $table->datetime('attrib_d3')->nullable(true);
            $table->datetime('attrib_d4')->nullable(true);
            $table->string('bff_resource',80)->nullable(true);
            $table->double('vat_sum',19, 6)->nullable(true);
            $table->double('invoice_serial',19, 6)->nullable(true);
            $table->string('invoice_type',5)->nullable(true);
            $table->smallInteger('prebooked')->nullable(true);
            $table->smallInteger('secondary_status')->nullable(true);
            $table->datetime('entry_date')->nullable(true);
            $table->string('voucher_group',20)->nullable(true);
            $table->string('voucher_period',4)->nullable(true);
            $table->smallInteger('user_serial')->nullable(true);
            $table->double('net_sum_calc',19, 6)->nullable(true);
            $table->double('net_sum',19, 6)->nullable(true);
            $table->smallInteger('with_comments')->nullable(true);
            $table->smallInteger('external_status')->nullable(true);
            $table->string('voucher_year',4)->nullable(true);
            $table->smallInteger('serial_year')->nullable(true);
            $table->datetime('gl_date')->nullable(true);
            $table->string('credit_memo',30)->nullable(true);
            $table->string('vat_sum_calc',19, 6)->nullable(true);
            $table->string('hold_owner',60)->nullable(true);
            $table->string('lock_owner',60)->nullable(true);
            $table->datetime('lock_date')->nullable(true);
            $table->smallInteger('lock_index')->nullable(true);
            $table->string('contract_num',50)->nullable(true);
            $table->smallInteger('oneaction')->nullable(true);
            $table->smallInteger('transfer_check')->nullable(true);
            $table->smallInteger('autoflow_status_index')->nullable(true);
            $table->smallInteger('match_status_index')->nullable(true);
            $table->smallInteger('custom_action_status')->nullable(true);
            $table->datetime('preprocessing_timestamp')->nullable(true);
            $table->string('supplier_rep_code',60)->nullable(true);
            $table->string('supplier_rep_name',200)->nullable(true);
            $table->datetime('payment_date')->nullable(true);
            $table->string('delivery_note_number',100)->nullable(true);
            $table->string('reference_person',60)->nullable(true);
            $table->smallInteger('CM_REQUEST')->nullable(true);
            $table->smallInteger('invoice_origin')->nullable(true);
            $table->datetime('match_wait_until')->nullable(true);
            $table->string('invoice_category',50)->nullable(true);
            $table->string('parent_invoice_id',64)->nullable(true);
            $table->smallInteger('MC_MATCH_STATUS_INDEX')->nullable(true);
            $table->bigInteger('account_id')
            ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docs');
    }
}
