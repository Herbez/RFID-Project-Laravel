<?php

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
        Schema::create('table_the_iot_projects', function (Blueprint $table) {
            $table->id(); // Primary key column
            $table->string('name'); // Name column (VARCHAR)
            $table->integer('card_id'); // Name column (VARCHAR)
            $table->integer('academic_year'); // Year of study column (INTEGER)
            $table->string('faculty'); // Faculty column (VARCHAR)
            $table->string('photo')->nullable(); // Photo column (VARCHAR, can store file path, nullable)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_the_iot_projects');
    }
};
