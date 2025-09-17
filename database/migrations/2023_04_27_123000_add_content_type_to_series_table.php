<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddContentTypeToSeriesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('series', function (Blueprint $table) {
            $table->string('content_type')->default('video')->after('description')->comment('Type of content: video, text, quiz, etc.');
            $table->text('text_content')->nullable()->after('content_type')->comment('Text content for series if content_type is text');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('series', function (Blueprint $table) {
            $table->dropColumn(['content_type', 'text_content']);
        });
    }
}
