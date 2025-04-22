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
        Schema::create('petshop', function(Blueprint $table){
            $table ->id('id');
            $table->unsignedBigInteger('tutor_id'); 
            $table ->string('Nome', 50);
            $table ->string('Tipo_animal', 50);
            $table ->string('Tipo_atendimento', 50);
            $table ->float('Preco');
            $table ->date('Data_atendimento');
            $table ->string('Tutor',50);
            $table ->timestamps();

  // Define a chave estrangeira: Id_Tutor em petshop referencia Id_Tutor na tabela tutor
    
            $table->foreign('tutor_id')
            ->references('id')
            ->on('tutor')
            ->onUpdate('cascade')
            ->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petshop');
    }
};
