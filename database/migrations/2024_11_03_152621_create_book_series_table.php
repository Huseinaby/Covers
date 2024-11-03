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
        Schema::create('book_series', function(Blueprint $table){
            $table->id();
            $table->string('judul');
            $table->foreignId('author_id')->constrained('authors');
            $table->foreignId('publisher_id')->constrained('publishers');
            $table->year('thn_terbit');
            $table->text('deskripsi');
            $table->string('alias');
            $table->string('rating');            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_series');
    }
};
