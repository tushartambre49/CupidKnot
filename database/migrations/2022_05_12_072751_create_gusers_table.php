<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gusers', function (Blueprint $table) {
            $table->id();
            $table->string('name',200);
            $table->string('email',200);
            $table->string('user_id',200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gusers', function (Blueprint $table) {
            //
        });
    }
}
