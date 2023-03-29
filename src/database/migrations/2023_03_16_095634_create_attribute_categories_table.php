<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributeCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_category', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250)->nullable();
            $table->integer('created_by')->nullable();
            $table->timestamp('created_date')->nullable();
            $table->integer('updated_by')->nullable();
            $table->timestamp('updated_date')->nullable();
            $table->tinyInteger('active')->nullable();
            $table->string('attribute_category_key', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attribute_category');
    }
}
