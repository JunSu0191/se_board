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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('file_name');
            $table->text('file_path');
            $table->string('filw_size');
            $table->string('file_type');
            $table->char('delete_yn')->default('N');
            $table->timestamps();
            $table->integer('board_id')->nullable();
            $table->foreign('board_id')->references('board_id')->on('board');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('files');
    }
};
