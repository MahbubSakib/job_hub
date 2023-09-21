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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_title')->nullable();
            $table->string('category')->nullable();
            $table->string('job_region')->nullable();
            $table->string('company')->nullable();
            $table->string('job_type')->nullable();
            $table->string('job_vacancy')->nullable();
            $table->string('experience')->nullable();
            $table->string('salary')->nullable();
            $table->string('gender')->nullable();
            $table->timestamp('application_published_on')->nullable();
            $table->timestamp('application_deadline')->nullable();
            $table->text('job_description')->nullable();
            $table->text('responsibilities')->nullable();
            $table->string('education_experience')->nullable();
            $table->text('other_benifits')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
