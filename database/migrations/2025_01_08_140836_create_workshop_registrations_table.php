<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('workshop_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('leerlingcode');
            $table->string('name');
            $table->string('email');
            $table->string('workshop1');
            $table->string('workshop2');
            $table->string('workshop3');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('workshop_registrations');
    }
};