<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_id');
            $table->string('cproditem', 6);
            $table->string('cprodtitle');
            $table->string('cprodtype', 12);
            $table->string('ctransaction', 16);
            $table->string('ctransaffiliate', 16);
            $table->bigInteger('ctransamount');
            $table->string('ctranspaymentmethod', 8);
            $table->string('ctransvendor', 16);
            $table->string('ctransreceipt', 32);
            $table->string('cupsellreceipt', 32);
            $table->string('caffitid', 32);
            $table->text('cvendthru');
            $table->string('cverify', 32);
            $table->string('ctranstime', 32);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('customer_id')->on('customers')->references('id')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
