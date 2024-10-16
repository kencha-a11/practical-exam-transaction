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
        Schema::create('useraccounts', function (Blueprint $table) {
            $table->id();

            //'transaction_title string', 'description string' , 'status enum', 'total_amount float', 'transaction_number integer',
            $table->string('transaction_title');
            $table->string('description');
            $table->enum('status',['successful','declined']);
            $table->float('total_amount');
            $table->integer('transaction_number');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('useraccounts');
    }
};
