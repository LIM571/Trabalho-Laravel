<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lutadors', function (Blueprint $table) {
            $table->id();
            $table->text("nome");
            $table->text("apelido");
            $table->integer('idade');
            $table->float('peso');
            $table->text('descricao');
            $table->String('arquivo')->Nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lutadors');
    }
};
