<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('mentor_ratings', function (Blueprint $table) {
            if (!Schema::hasColumn('mentor_ratings', 'mentor_id')) {
                $table->unsignedBigInteger('mentor_id')->after('id');
            }
        });
    }

    public function down(): void
    {
        Schema::table('mentor_ratings', function (Blueprint $table) {
            $table->dropColumn('mentor_id');
        });
    }
};
