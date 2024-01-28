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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('start_time');
            $table->string('end_time');
            $table->timestamps();
        });

        Schema::create('lessons_group', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Branch::class)->constrainted()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(\App\Models\Group::class)->constrainted()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(\App\Models\ClassRoom::class)->constrainted()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(\App\Models\Lesson::class)->constrainted()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('day');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
