<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanierItemsTable extends Migration
{
    public function up()
    {
        Schema::create('panier_items', function (Blueprint $table) {
            $table->id();
            $table->string('session_id');
            $table->foreignId('produit_id')->constrained()->onDelete('cascade');
            $table->integer('quantite')->default(1);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('panier_items');
    }
}
