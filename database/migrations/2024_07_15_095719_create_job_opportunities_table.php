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
        Schema::create('job_opportunities', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Added title field
            $table->date('published_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->integer('vacancy');
            $table->string('experience');
            $table->string('job_type');
            $table->string('salary');
            $table->date('deadline');
            $table->string('location');
            $table->string('image')->nullable();
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_opportunities');
    }
};
