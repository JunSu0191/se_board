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
        Schema::create('schedule', function (Blueprint $table) {
            $table->id();
            $table->integer('board_id')->nullable();
            $table->string('title');
            $table->text('content');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->softdeletes();
            $table->timestamps();
            $table->string('email')->nullable();

            // 외래 키 설정 (users 테이블의 user_id와 연결)
            $table->foreign('email')->references('email')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('schedules');
    }
};
