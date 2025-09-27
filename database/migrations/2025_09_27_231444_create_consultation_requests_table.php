<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('consultation_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('contact');           // Телефон/мессенджер
            $table->string('email')->nullable();
            $table->boolean('has_apartment');    // yes/no -> true/false
            $table->enum('involvement', ['full','self','unsure']); // повне ведення / самостійно / ще не вирішив
            $table->text('preferred')->nullable(); // зручний спосіб/час
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('consultation_requests');
    }
};