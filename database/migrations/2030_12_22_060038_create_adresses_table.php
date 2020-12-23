<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->id();
            $table->text('company_name')->nullable();
            $table->string('phn_num', 15)->nullable();

            $table->unsignedBigInteger('user_code')->nullable();
            $table->foreign('user_code')->references('id')->on('users');

            $table->unsignedBigInteger('auth_code')->nullable();
            $table->foreign('auth_code')->references('id')->on('offices');

            $table->unsignedBigInteger('seller_no')->nullable();
            $table->foreign('seller_no')->references('id')->on('sales_men');

            $table->unsignedBigInteger('client_no')->nullable();
            $table->foreign('client_no')->references('id')->on('clients');

            $table->string('full_adress')->nullable();
            $table->string('post_code', 10)->nullable();
            $table->string('city', 100)->nullable();

            $table->unsignedBigInteger('state_key')->nullable();
            $table->foreign('state_key')->references('id')->on('states');

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
        Schema::dropIfExists('adresses');
    }
}
