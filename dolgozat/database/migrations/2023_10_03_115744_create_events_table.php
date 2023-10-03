<?php

use App\Models\Event;
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
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id');
            $table->date('date');            
            $table->foreignId('agency_id')->references('agency_id')->on('agencies');
            $table->integer('limit');
            $table->timestamps();
        });

        Event::create([
            'date' => '2023-12-04', 
            'agency_id'=> 1,
            'limit' => 20
            
        ]);

        Event::create([
            'date' => '2023-10-23', 
            'agency_id'=> 2,
            'limit' => 24
            
        ]);

        Event::create([
            'date' => '2023-10-27', 
            'agency_id'=> 3,
            'limit' => 30
            
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
