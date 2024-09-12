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
        Schema::create('board', function (Blueprint $table) {
            $table->id('board_id');
            $table->string('title');
            $table->text('content');
            $table->timestamps();
            $table->softDeletes();
            $table->char('delete_yn')->default('N');
            $table->integer('views')->nullable();
            $table->string('email')->nullable();
            $table->foreign('email')->references('email')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('boards');
    }
};
