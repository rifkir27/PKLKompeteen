<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->unsignedBigInteger('mentor_id')->nullable()->after('category_id');
            $table->foreign('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign(['mentor_id']);
            $table->dropColumn('mentor_id');
        });
    }
};
