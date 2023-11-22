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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('balance');
            $table->timestamps();
        });

        User::create([
            'name' => 'Én',
            'email' => 'en@dolgozat.hu',
            'balance' => 0,
        ]);

        User::create([
            'name' => 'Te',
            'email' => 'te@dolgozat.hu',
            'balance' => 100000,
        ]);

        User::create([
            'name' => 'Ő',
            'email' => 'o@dolgozat.hu',
            'balance' => -9999999,
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
