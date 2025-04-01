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
            $table->Integer('student_id');
            $table->primary('student_id');
            $table->string('student_name',30);
            $table->string('email')->unique()->nullable();
            $table->Integer('age')->unsigned();
            $table->float('percentage',3,2)->comment('Student percentage.../..');
            $table->string('phone',10)->unique();

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
