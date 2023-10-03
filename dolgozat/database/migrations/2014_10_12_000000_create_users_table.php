<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->boolean('vip');
            //$table->rememberToken();
            $table->timestamps();
        });

        User::create([
            'name' => "Nagy Péter",
            'email' => 'valaki@gmail.com',
            'vip' => true
        ]);

        User::create([
            'name' => "Bogdán Mária",
            'email' => 'mari@gmail.com',
            'vip' => true
        ]);

        User::create([
            'name' => "Kis Álmos",
            'email' => 'szende@gmail.com',
            'vip' => false
        ]);

        User::create([
            'name' => "Senki Házi",
            'email' => 'foul.gosth@gmail.com',
            'vip' => false
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
