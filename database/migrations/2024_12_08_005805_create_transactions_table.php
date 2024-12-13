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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // To store the name (e.g., user name)
            $table->string('type'); // To store the type of transaction (e.g., Debit, Credit)
            $table->decimal('amount', 10, 2); // To store the transaction amount
            $table->enum('status', ['Pending', 'Completed']); // To store the status of the transaction
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};