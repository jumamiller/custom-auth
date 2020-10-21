<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('staff_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company_email')->unique();
            $table->string('phone_number');
            $table->string('password');
            $table->ipAddress('ipaddress');
            $table->text('device');
            $table->string('resume');
            $table->string('avatar');
            $table->boolean('is_phone_verified');
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
        Schema::dropIfExists('staff');
    }
}
