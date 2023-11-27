<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Users table
return new class extends Migration
{
    public function up(): void
    {
        // This table shows in the users page, 
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');  
            $table->string('surname')->nullable();
            $table->string('email')->unique();
            $table->string('job')->nullable();
            $table->string('role')->default('User'); 
            $table->string('permission_level')->default(0); // Change the data type if needed (e.g., to unsignedInteger)
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('role');
    }
};
