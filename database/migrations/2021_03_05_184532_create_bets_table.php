<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('client');
            $table->text('bets');
            $table->string('bets_type');
            $table->float('bets_amount', 8, 2);
            $table->timestamp('submitted_time',0);
            $table->float('payout_amount', 8,2)->nullable();
            $table->timestamp('payout_time', 0)->nullable();
            $table->tinyInteger('payout_status')->default(0);
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('bets');
    }
}
