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
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['Adherent', 'Admin','Assistant'])->default('Adherent');
            $table->string('photo')->nullable();
            $table->integer('telephone');
            $table->string('sport')->nullable();
            $table->rememberToken();
            $table->timestamps();
            // $table->foreignId('abonnement_id')->constrained();
            // $table->foreignId('contact_id')->constrained();
            // $table->foreignId('classe_id')->constrained();
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
