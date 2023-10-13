<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholar_enrollment_benefits', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->decimal('amount',12,2);
            $table->string('release_type',15);
            $table->string('dv_no')->nullable();
            $table->date('month');
            $table->json('attachment');
            $table->boolean('is_reimbursed')->default(0);
            $table->tinyInteger('status_id')->unsigned()->index();
            $table->foreign('status_id')->references('id')->on('list_statuses')->onDelete('cascade');
            $table->tinyInteger('benefit_id')->unsigned()->index();
            $table->foreign('benefit_id')->references('id')->on('list_privileges')->onDelete('cascade');
            $table->bigInteger('enrollment_id')->unsigned()->index();
            $table->foreign('enrollment_id')->references('id')->on('scholar_enrollments')->onDelete('cascade');
            $table->integer('release_id')->unsigned()->nullable();
            $table->foreign('release_id')->references('id')->on('releases')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scholar_enrollment_benefits');
    }
};
