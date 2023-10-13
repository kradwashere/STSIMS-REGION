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
        Schema::create('scholar_enrollment_infos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->boolean('is_grades_completed')->default(0);
            $table->boolean('is_benefits_released')->default(0);
            $table->boolean('is_checked')->default(0);
            $table->boolean('is_missed')->default(0);
            $table->boolean('is_completed')->default(0);
            $table->bigInteger('enrollment_id')->unsigned()->index();
            $table->foreign('enrollment_id')->references('id')->on('scholar_enrollments')->onDelete('cascade');
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
        Schema::dropIfExists('scholar_enrollment_infos');
    }
};
