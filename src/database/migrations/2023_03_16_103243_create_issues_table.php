<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('finish_date')->nullable();
            $table->timestamp('due_date')->nullable();
            $table->integer('planned_hours')->nullable();
            $table->integer('estimate_hours')->nullable();
            $table->integer('actual_hours')->nullable();
            $table->integer('finish_percent')->nullable();
            $table->unsignedBigInteger('assignee_id')->nullable();
            $table->string('backlog_id', 100)->nullable();
            $table->integer('forecast_hours')->nullable();
            $table->string('attached_files_list', 250)->nullable();
            $table->string('monitor_user_ids', 250)->nullable();
            $table->string('issue_key', 100)->unique()->nullable();
            $table->foreign('assignee_id')->references('id')->on('users');
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
        Schema::dropIfExists('issues');
    }
}
