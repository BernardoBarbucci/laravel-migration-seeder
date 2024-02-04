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
        Schema::create('train', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('departure_station', 80);
            $table->string('arrival_station', 80);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code'); // codice treno 
            $table->integer('carriages_number'); // numero carrozze
            $table->boolean('on_time')->default(true); // di default in orario 
            $table->boolean('canceled')->default(false); // di default non cancellato
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('train');
    }
};
