<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('foundations', function (Blueprint $table) {
            $table->ulid('id')
                ->primary();
            $table->string('logo')
                ->nullable();
            $table->string('registration_number', 32)
                ->nullable();
            $table->string('name', 100)
                ->index();
            $table->string('email', 100)
                ->nullable();
            $table->string('phone_number', 16)
                ->nullable();
            $table->string('address_code', 13)
                ->nullable();
            $table->string('address')
                ->nullable();
            $table->timestamps();

            $table->fullText(['name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foundations');
    }
};
