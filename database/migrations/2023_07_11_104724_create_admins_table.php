<?php

use App\Models\Admins;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('login');
            $table->string('passwd');
            $table->rememberToken();
            $table->timestamps();
        });

        Admins::create([
            'name'=>"NFA Admin",
            'login'=>'nfa-admin',
            'passwd'=>Hash::make('nfa#admins')
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
