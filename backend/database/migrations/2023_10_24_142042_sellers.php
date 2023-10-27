<?php
 
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
 
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('user_email')->unique();
            $table->string('company_name')->unique();
            $table->string('company_email')->unique();
            $table->string('password');
            $table->timestamps();
        });
    }
 
    public function down(): void
    {
        Schema::drop('sellers');
    }
};