<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBacklogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('backlog', function (Blueprint $table) {
            $table->string('id', 100)->primary();
            $table->string('summary', 250)->nullable();
            $table->integer('backlog_parent_id')->nullable();
            $table->integer('attribute_id')->nullable();
            $table->string('backlog_key', 100)->unique()->nullable();
            $table->string('out_source_type', 100)->nullable();
            $table->string('out_source_id', 250)->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('backlog');
    }
}
