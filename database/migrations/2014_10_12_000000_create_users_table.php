<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * For run down & up, run : php artisan migrate:fresh
     * You can add "--seed" for import fake data using factory : php artisan migrate:fresh --seed
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username', 25)->unique(); # Username ; VARCHAR(25); unique
            $table->string('email', 255)->unique(); # Email ; VARCHAR(255); unique
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255); # Password ; VARCHAR(255)
            $table->string('first_name', 30)->nullable(); # First Name ; VARCHAR(30) ; nullable
            $table->string('last_name', 30)->nullable(); # Last Name ; VARCHAR(30) ; nullable
            $table->string('country_code', 10)->nullable(); # Country Code ; VARCHAR(10) ; nullable
            $table->string('city', 40)->nullable(); # City ; VARCHAR(40) ; nullable
            $table->string('address', 80)->nullable(); # Address ; VARCHAR(80) ; nullable
            $table->string('country', 40)->nullable(); # Country ; VARCHAR(40) ; nullable
            # todo => Add optional birthday date
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
        Schema::dropIfExists('users');
    }
};
