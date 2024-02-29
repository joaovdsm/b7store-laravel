<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Advertise;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('advertise_images', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->foreignIdFor(Advertise::class)->constrained();
            // $table->foreignIdFor(Advertise::class)->constrained()->onDelete('cascade'); utilizando desta forma, quando o id (PAI ~ advertises) for deletado 
            // O(s) registro(s) (FILHO(s)) da tabela imagem também é/são removido(s), isso removeria a linha 30 de AdController.
            $table->boolean('featured')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertise_images');
    }
};
