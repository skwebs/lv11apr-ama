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
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('academic_session_id')->constrained()->onUpdate('cascade');
            $table->foreignId('student_id')->constrained()->onUpdate('cascade');
            $table->foreignId('standard_id')->constrained()->onUpdate('cascade');
            $table->integer('roll');
            $table->boolean('is_enable')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_profiles');
    }
};