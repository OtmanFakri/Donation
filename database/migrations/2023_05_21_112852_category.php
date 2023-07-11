<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Category extends Migration
{

    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('parent_id')->unsigned()->nullable(); // Change to bigInteger and add unsigned
            $table->foreign('parent_id')->references('id')->on('category')->onDelete('set null');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->useCurrent();

        });
    }

    public function down()
    {
        Schema::dropIfExists('category');
        Schema::table('category', function (Blueprint $table) {
            $table->bigInteger('parent_id')->nullable(false)->change();
        });
    }
}
