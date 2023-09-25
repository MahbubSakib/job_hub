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
        Schema::create('job_saves', function (Blueprint $table) {
            $table->id();
            $table->integer('job_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('job_title')->nullable();
            $table->string('company')->nullable();
            $table->string('job_photo')->nullable();
            $table->string('job_region')->nullable();
            $table->string('job_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_saves');
    }
};
