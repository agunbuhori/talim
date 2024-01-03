<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private $addressables = ['users', 'foundations'];

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $sql = file_get_contents(storage_path("app/sql/regions.sql"));

        $statements = array_filter(array_map('trim', explode(';', $sql)));

        foreach ($statements as $stmt) {
            DB::statement($stmt);
        }

        foreach ($this->addressables as $addressable) {
            Schema::table($addressable, function (Blueprint $table) {
                $table->foreign('address_code')
                    ->references('code')
                    ->on('regions')
                    ->nullOnDelete();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        foreach ($this->addressables as $addressable) {
            Schema::table($addressable, function (Blueprint $table) use ($addressable) {
                $table->dropForeign("{$addressable}_address_code_foreign");
            });
        }

        Schema::dropIfExists('full_regions');
        Schema::dropIfExists('regions');
    }
};
