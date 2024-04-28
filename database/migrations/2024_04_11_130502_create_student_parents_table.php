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
        Schema::create('student_parents', function (Blueprint $table) {
            $table->id();
            $table->string('father_name');
            $table->string('father_aadhaar')->nullable()->unique();
            $table->string('father_contact')->nullable();
            $table->string('father_contact_2')->nullable();
            $table->string('father_whatsapp')->nullable();
            $table->string('father_photo')->nullable();
            $table->string('mother_name');
            $table->string('mother_aadhaar')->nullable()->unique();
            $table->string('mother_contact')->nullable();
            $table->string('mother_contact_2')->nullable();
            $table->string('mother_whatsapp')->nullable();
            $table->string('mother_photo')->nullable();
            $table->text('address');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_parents');
    }
};
