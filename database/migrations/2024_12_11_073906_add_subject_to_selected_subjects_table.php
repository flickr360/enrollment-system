<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('selected_subjects', function (Blueprint $table) {
        $table->string('subject'); // Add the 'subject' column
    });
}

public function down()
{
    Schema::table('selected_subjects', function (Blueprint $table) {
        $table->dropColumn('subject'); // Drop the 'subject' column
    });
}
};
