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
        Schema::create('item', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('user_id')->nullable()->index();
            $table->foreign('user_id')->nullable()->references('id')->on('users');
            $table->string('description');
            $table->string('address');
            $table->boolean('availabilities');
            $table->boolean('booked');
            $table->bigInteger('score_cost');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });

        Schema::create('item_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id');
            $table->foreign('item_id')->references('id')->on('item')->onDelete('cascade');
            $table->string('image_path');
            $table->timestamps();
        });

        Schema::create('food_item', function (Blueprint $table) {

            $table->id();
            $table->foreignId('item_id')->constrained('item');
            $table->dateTime('expiration_date');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });

        Schema::create('object_item', function (Blueprint $table) {
            $table->foreignId('item_id')->constrained('item');
            $table->id();
            $table->enum('condition',['new','used','broken']);
            $table->unsignedBigInteger('category_id')->index();
            $table->foreign('category_id')->references('id')->on('category');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->useCurrent();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item');
        Schema::dropIfExists('food_item');
        Schema::dropIfExists('object_item');
    }
};
