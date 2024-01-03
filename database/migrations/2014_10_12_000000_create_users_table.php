<?php

use App\Enum\IdentityType;
use App\Enum\MaritalStatus;
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
            $table->ulid('id')
                ->primary();
            $table->enum('identity_type', IdentityType::toArray())
                ->nullable();
            $table->string('identity_number', 32)
                ->nullable();
            $table->string('photo')
                ->nullable();
            $table->string('name', 100);
            $table->string('nickname', 100)
                ->nullable();
            $table->enum('gender', ['M', 'F'])
                ->nullable();
            $table->string('birthplace', 50)
                ->nullable();
            $table->date('birthdate')
                ->nullable();
            $table->enum('marital_status', MaritalStatus::toArray())
                ->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone_number', 16)
                ->nullable();
            $table->string('address_code', 13)
                ->nullable();
            $table->string('address')
                ->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->fullText(['name']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
