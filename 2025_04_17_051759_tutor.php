<?php

use Illuminate\Cache\Events\ForgettingKey;
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
        Schema::create('tutor', function(Blueprint $table){
            $table->id(); // PRIMARY KEY auto-increment padrão
        //    $table->unsignedBigInteger('Id_Tutor')->unique();
          $table ->string('Nome', 50);
            $table ->string('Idade', 8);
            $table ->string('Telefone', 30);
            $table ->string('Email', 50);
            $table ->timestamps();

        

      

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutor');
    }
};
