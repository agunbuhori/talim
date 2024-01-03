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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->ulid('id')
                ->primary();
            $table->foreignUlid('student_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignUlid('subject_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->tinyInteger('semester');
            $table->year('year');
            $table->float('grade', 3, 2)
                ->nullable()
                ->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
