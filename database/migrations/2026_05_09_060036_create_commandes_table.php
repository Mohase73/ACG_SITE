<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->unique();
            $table->string('nom');
            $table->string('telephone');
            $table->string('email')->nullable();
            $table->enum('moyen_paiement', ['orange_money', 'moov_money', 'virement']);
            $table->string('numero_paiement');
            $table->decimal('total', 10, 2);
            $table->enum('statut', ['en_attente', 'confirme', 'annule'])->default('en_attente');
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('commandes');
    }
}
