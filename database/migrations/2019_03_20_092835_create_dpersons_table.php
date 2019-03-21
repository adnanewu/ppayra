<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDpersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dpersons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('trainee_name');
            $table->string('relation_with_house_hold');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('dob');
            $table->string('gender_id');
            $table->string('occupation_id');
            $table->string('religion_id');
            $table->string('education_id');
            $table->string('marital_id');
            $table->string('mobile_no');
            $table->string('present_address');
            $table->string('nid');
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
        Schema::dropIfExists('dpersons');
    }
}
