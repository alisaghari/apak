<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->text('f_name')->nullable();
            $table->text('l_name')->nullable();
            $table->text('birthdate')->nullable();
            $table->text('address')->nullable();
            $table->string('phone',11)->unique();
            $table->text('n_code')->nullable();
            $table->text('shaba')->nullable();
            $table->text('hesab')->nullable();
            $table->text('owner_name')->nullable();
            $table->integer('type')->nullable();
            $table->text('website')->nullable();
            $table->text('fa_website')->nullable();
            $table->text('tell')->nullable();
            $table->text('description')->nullable();
            $table->text('password')->nullable();
            $table->text('verify')->nullable();

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
        Schema::dropIfExists('users');
    }
}
