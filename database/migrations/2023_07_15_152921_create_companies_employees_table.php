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
        Schema::create('companies_employees', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->decimal('salary', 10, 2);
            $table->string('department');
            $table->foreignId('people_id');
            $table->foreignId('company_id')->constrained();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies_employees');
    }
};
