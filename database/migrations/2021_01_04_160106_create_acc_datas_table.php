<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acc_datas', function (Blueprint $table) {
                $table->smallInteger('data_index')->nullable(false)->primary();
                
                $table->string('doc_id',64)->nullable(false);//nvarchar
                $table->smallInteger('sort_order')->nullable(false);//smallInt
                $table->double('brutto',19,6)->nullable(true);//numeric
                $table->double('brutto_calc',19,6)->nullable(true);
                $table->double('vat',19,6)->nullable(true);
                $table->double('vat_pros',19,6)->nullable(true);
                $table->smallInteger('accepted')->nullable(true);
                $table->string('acceptor_id',60)->nullable(true);
                $table->datetime('accepted_date')->nullable(true);
                $table->string('t1',20)->nullable(true);
                $table->string('t2',20)->nullable(true);
                $table->string('t3',20)->nullable(true);
                $table->string('t4',20)->nullable(true);
                $table->string('t5',20)->nullable(true);

                $table->string('t6',40)->nullable(true);
                $table->string('t7',40)->nullable(true);
                $table->string('t8',40)->nullable(true);
                $table->string('t9',40)->nullable(true);
                $table->string('t10',40)->nullable(true);
                $table->string('t11',40)->nullable(true);
                $table->string('t12',40)->nullable(true);
                $table->string('t13',40)->nullable(true);
                $table->string('t14',40)->nullable(true);
                $table->string('t15',40)->nullable(true);
                $table->string('t16',60)->nullable(true);
                $table->string('t17',60)->nullable(true);
                $table->string('t18',60)->nullable(true);
                $table->string('t19',60)->nullable(true);
                $table->string('t20',60)->nullable(true);
                $table->string('t21',60)->nullable(true);
                $table->string('t22',60)->nullable(true);
                $table->string('t23',60)->nullable(true);
                $table->string('t24',60)->nullable(true);
                $table->string('t25',60)->nullable(true);
                $table->string('t26',80)->nullable(true);

                $table->string('t27',80)->nullable(true);
                $table->string('t28',80)->nullable(true);
                $table->string('t29',80)->nullable(true);
                $table->string('t30',150)->nullable(true);
                $table->string('t31',50)->nullable(true);
                $table->string('t32',50)->nullable(true);
                $table->string('t33',50)->nullable(true);
                $table->string('t34',50)->nullable(true);
                $table->string('t35',50)->nullable(true);
                $table->string('t36',50)->nullable(true);
                $table->string('t37',50)->nullable(true);
                $table->string('t38',50)->nullable(true);
                $table->string('t39',50)->nullable(true);
                $table->string('t40',50)->nullable(true);
                $table->string('t41',50)->nullable(true);
                $table->string('t42',50)->nullable(true);
                $table->string('t43',50)->nullable(true);
                $table->string('t44',50)->nullable(true);
                $table->string('t45',50)->nullable(true);
                $table->string('t46',50)->nullable(true);
                $table->string('t47',50)->nullable(true);
                $table->string('t48',50)->nullable(true);
                $table->string('t49',50)->nullable(true);
                $table->string('t50',50)->nullable(true);
                $table->string('t51',50)->nullable(true);
                $table->string('t52',50)->nullable(true);
                $table->string('t53',50)->nullable(true);
                $table->string('t54',50)->nullable(true);
                $table->string('t55',50)->nullable(true);
                $table->string('t56',50)->nullable(true);
                $table->string('t57',50)->nullable(true);
                $table->string('t58',50)->nullable(true);
                $table->string('t59',50)->nullable(true);
                $table->string('t60',50)->nullable(true);
                $table->string('t61',50)->nullable(true);
                $table->string('t62',50)->nullable(true);
                $table->string('t63',50)->nullable(true);
                $table->string('t64',50)->nullable(true);
                $table->string('t65',50)->nullable(true);
                $table->string('t66',50)->nullable(true);
                $table->string('t67',50)->nullable(true);
                $table->string('t68',50)->nullable(true);
                $table->string('t69',50)->nullable(true);
                $table->string('t70',50)->nullable(true);
                $table->string('t71',50)->nullable(true);
                $table->string('t72',50)->nullable(true);
                $table->string('t73',50)->nullable(true);
                $table->string('t74',50)->nullable(true);
                $table->string('t75',50)->nullable(true);
                $table->string('t76',50)->nullable(true);
                $table->string('t77',50)->nullable(true);
                $table->string('t78',50)->nullable(true);
                $table->string('t79',50)->nullable(true);
                $table->string('t80',50)->nullable(true);
                $table->string('t81',50)->nullable(true);
                $table->string('t82',50)->nullable(true);
                $table->string('t83',100)->nullable(true);
                $table->string('t84',100)->nullable(true);
                $table->string('t85',100)->nullable(true);

                $table->double('n1',19, 6)->nullable(true);
                $table->double('n2',19, 6)->nullable(true);
                $table->double('n3',19, 6)->nullable(true);
                $table->double('n4',19, 6)->nullable(true);
                $table->double('n5',19, 6)->nullable(true);
                $table->double('n6',19, 6)->nullable(true);
                $table->double('n7',19, 6)->nullable(true);
                $table->double('n8',19, 6)->nullable(true);
                $table->double('n9',19, 6)->nullable(true);
                $table->double('n10',19, 6)->nullable(true);
                $table->double('n11',19, 6)->nullable(true);
                $table->double('n12',19, 6)->nullable(true);
                $table->double('n13',19, 6)->nullable(true);
                $table->double('n14',19, 6)->nullable(true);
                $table->double('n15',19, 6)->nullable(true);
                $table->double('n16',19, 6)->nullable(true);
                $table->double('n17',19, 6)->nullable(true);
                $table->double('n18',19, 6)->nullable(true);
                $table->double('n19',19, 6)->nullable(true);
                $table->double('n20',19, 6)->nullable(true);
                $table->datetime('stamp_date')->nullable(true);
                $table->string('stamp_uid',60)->nullable(true);
                $table->double('net_sum',19, 6)->nullable(true);
                $table->double('net_calc',19, 6)->nullable(true);
                $table->smallInteger('layer')->nullable(true);
                $table->smallInteger('reviewed')->nullable(true);
                $table->string('reviewer_id',60)->nullable(true);
                $table->datetime('reviewed_date')->nullable(true);

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
        Schema::dropIfExists('acc_datas');
    }
}
