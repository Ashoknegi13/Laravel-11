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
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained()
                                            ->restricOnUpdate()
                                            ->restricOnDelete();

            $table->string('Book_name');
            $table->date('due_date')->nullable();
            $table->boolean('status');
        
              // $table->unsignedBigInteger('stu_id');
            // $table->foreign('stu_id')
            //       ->references('id')
            //        ->on('students')
            //        ->onUpdate('cascade')
            //        ->onDelete('set null ');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};
