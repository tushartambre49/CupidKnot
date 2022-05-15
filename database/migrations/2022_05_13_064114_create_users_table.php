<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',200);
            $table->string('email',200)->unique();
            $table->date('dob');
            $table->string('password',200)->nullable();
            $table->string('gender',200);
            $table->string('income',200);
            $table->string('occupation',200);
            $table->string('ftype',200);
            $table->string('manglik',200);
            $table->string('eincome',200);
            $table->string('eoccupation',200);
            $table->string('efamilytype',200);
            $table->string('emanglik',200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
