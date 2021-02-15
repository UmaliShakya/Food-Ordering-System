<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Stu_Name');
            $table->integer('stu_Age');
            $table->string('University');
            $table->string('Faculty');
            $table->string('Stu_Address');
            $table->integer('Stu_MobileNo');
            $table->string('Stu_Emali');
            $table->string('GardianName');
            $table->integer('Gardi_contactNo');
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
        Schema::dropIfExists('students');
    }
}
