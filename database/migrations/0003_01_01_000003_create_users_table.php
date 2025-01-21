<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('table_name', function (Blueprint $table) {
            $table->id();
            $table->string('column_name');
            // Voeg hier meer kolommen toe
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('table_name');
    }
};