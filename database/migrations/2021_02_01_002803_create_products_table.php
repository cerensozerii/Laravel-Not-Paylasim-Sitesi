<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table){
            $table->id() ->autoIncrement();
            $table->string('title',150);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->integer('category_id')->nullable();
            $table->string('status',5)->nullable()->default('False');
            $table->string('slug',100)->nullable();
            $table->integer('user_id')->nullable()->default('False');
            $table->string('lectures')->nullable();
            $table->string('subject')->nullable();
            $table->integer('grade')->nullable();
            $table->string('department')->nullable();
            $table->string('teacher')->nullable();
            $table->string('school')->nullable();
            $table->text('detail')->nullable();
            $table->string('image')->nullable();
            $table->string('files')->nullable();
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
        Schema::dropIfExists('products');
    }
}
