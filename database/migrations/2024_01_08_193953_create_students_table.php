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
            $table->string('name');
            $table->string('email');
            $table->foreignIdFor(\App\Models\Branch::class)->constrained()->cascadeOnDelete();
            $table->string('phone', 20);
            $table->timestamps();
        });

        Schema::create('groups_students', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Group::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Student::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
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
