<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCensusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('censuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('household_id');
            $table->string('name');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->integer('occupation_id');
            $table->string('mobile_no');
            $table->string('nid');
            $table->integer('education_id');
            $table->string('dob');
            $table->integer('gender_id');
            $table->integer('religion_id');
            $table->integer('marital_id');
            $table->string('present_address');
            $table->string('ward_id');
            $table->string('thana_id');
            $table->string('zilla_id');
            $table->string('affected_land_no');
            $table->string('yearly_income');
            $table->string('have_you_taken_trainnng');
            $table->string('mention_how_many_days');
            $table->string('expert_area');
            $table->string('course_id');
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
        Schema::dropIfExists('censuses');
    }
}
