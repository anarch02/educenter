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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('start')->default('null');
            $table->boolean('is_active')->default('true');
            $table->foreignIdFor(\App\Models\Branch::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Course::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Subject::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Teacher::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
