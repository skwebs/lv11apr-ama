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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->nullable()->unique();
            $table->string('name');
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('aadhaar_number')->unique()->nullable();
            $table->integer('status')->nullable();
            $table->boolean('is_enable')->default(1);
            $table->string('photo')->nullable();
            $table->foreignId('student_parent_id')->nullable()->constrained()->onUpdate('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
