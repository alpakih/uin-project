<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_role', function ($table) {
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('menus', function ($table) {
            $table->foreign('parent_id')->references('id')->on('menus')->onUpdate('cascade')->onDelete('set null');
        });

        Schema::table('role_menu', function ($table) {
            $table->foreign('role_id')->references('id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('menu_id')->references('id')->on('menus')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('students', function ($table) {
            $table->foreign('kelas_id')->references('id')->on('kelas')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('semester_id')->references('id')->on('semesters')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('image_id')->references('id')->on('images')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('lectures', function ($table) {
            $table->foreign('image_id')->references('id')->on('images')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('corousels', function ($table) {
            $table->foreign('image_id')->references('id')->on('images')->onUpdate('cascade')->onDelete('cascade');
        });


        Schema::table('announcements', function ($table) {
            $table->foreign('image_id')->references('id')->on('images')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('role_menu', function ($table) {
            $table->dropForeign(['role_id']);
            $table->dropForeign(['menu_id']);
        });

        Schema::table('menus', function ($table) {
            $table->dropForeign(['parent_id']);
        });

        Schema::table('user_role', function ($table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['role_id']);
        });
        Schema::table('students', function ($table) {
            $table->dropForeign(['kelas_id']);
            $table->dropForeign(['semester_id']);
            $table->dropForeign(['image_id']);
        });

        Schema::table('lectures', function ($table) {
            $table->dropForeign(['image_id']);
        });
        Schema::table('corousels', function ($table) {
            $table->dropForeign(['image_id']);
        });
        Schema::table('announcements', function ($table) {
            $table->dropForeign(['image_id']);
        });
    }
}
