<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->string('username',50)->unique();
            $table->string('first_name',50);
            $table->string('middle_name',50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->string('url', 90)->nullable();

            /* $table->unsignedBigInteger('role')->nullable();
            $table->foreign('role')->references('id')->on('positions'); */

            $table->integer('status')->default(1);
            $table->string('image',70)->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('offices');
    }
}
