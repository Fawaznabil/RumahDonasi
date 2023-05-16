<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name');
            $table->string('email')->unique();
            $table->string('notelepon');
            $table->string('alamat');
            $table->string('nik')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('google_id')->nullable();
            $table->string('password');
            $table->string('role')->default('customer');
            $table->string('number')->nullable();
            $table->string('photo')->default('assets/ava-icon-dark.png');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    //     Schema::table('users', function (Blueprint $table) {
    //         $table->string('role', 16)->default('customer')->after('password');
    //     });
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
