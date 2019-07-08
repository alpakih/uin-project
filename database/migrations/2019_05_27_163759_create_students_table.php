<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('nim');
            $table->string('nama');
            $table->string('no_hp');
            $table->integer('anak_ke')->nullable()->unsigned()->default(0);
            $table->string('pekerjaan_ortu')->nullable();
            $table->double('penghasilan_ortu')->nullable();
            $table->integer('semester_id')->nullable()->unsigned();
            $table->integer('kelas_id')->nullable()->unsigned();
            $table->string('angkatan')->nullable(); 
            $table->string('alamat')->nullable();
            $table->string('alamat_domisili')->nullable();
            $table->string('email');
            $table->string('password');
            $table->integer('image_id')->nullable()->unsigned();;
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
