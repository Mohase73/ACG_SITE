<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('start'); //date de départ de la réservation
            $table->date('end'); //date de la réservation
            $table->date('limit'); // date limite de paiement
            $table->boolean('rented')->default(false); //indique si la réservation est effectuée
            $table->foreignId('user_id')->constrained();
            $table->foreignId('formation_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
