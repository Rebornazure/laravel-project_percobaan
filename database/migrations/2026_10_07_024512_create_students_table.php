<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name', length: 100);
            $table->string('nis', length: 10);
            // $table->string('classroom', length: 20);
            // merelasikan tabel classroom dengan tabel student
            // mengambil id dari tabel classroom
            // mengubah kolom classroom dari string ke foreign key (classroom_id)
            $table->foreignId('classroom_id')->constrained(
                table: 'classroom',
                indexName: 'classroom_student_id'
            );
            $table->text('address');
            $table->string('email')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
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
