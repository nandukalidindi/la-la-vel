<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('purchase', function (Blueprint $table) {
          $table->string('cname');
          $table->string('pname');
          $table->timestamp('puttime');
          $table->integer('quantity');
          $table->double('puprice');
          $table->string('status');
          $table->timestamps();
          $table->primary(array('cname', 'pname', 'puttime'));
          $table->foreign('cname')->references('cname')->on('customer')->onDelete('cascade');
          $table->foreign('pname')->references('pname')->on('product')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase');
    }
}
