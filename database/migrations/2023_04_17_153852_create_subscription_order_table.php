<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('subscription_order', function (Blueprint $table) {
            $table->id();
            $table->dateTime('start_time');
            $table->unsignedBigInteger('plan-id')->index();
            $table->foreign('plan-id')->references('id')->on('subscription_plan');
            $table->bigInteger('end-time');
            $table->bigInteger('user-id');
            $table->foreign('user-id')->references('id')->on('user');
        });

        Schema::enableForeignKeyConstraints();
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_order');
    }
};
