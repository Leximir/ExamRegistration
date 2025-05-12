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
        Schema::table('users', function (Blueprint $table) {
            $table->string('index')->unique();

            $table->unsignedBigInteger('semester_id')->nullable();
            $table->foreign('semester_id')->references('id')->on('semesters');

            $table->unsignedBigInteger('subfaculty_id')->nullable();
            $table->foreign('subfaculty_id')->references('id')->on('subfaculties');

            $table->boolean('is_admin')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
