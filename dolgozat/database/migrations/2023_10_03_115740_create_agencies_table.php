<?php

use App\Models\Agency;
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
        Schema::create('agencies', function (Blueprint $table) {
            $table->id('agency_id');
            $table->string('name');
            $table->string('country');
            $table->string('type');
            $table->timestamps();
        });

        Agency::create([
            'name' => "Fly with us", 
            'country' => 'HU', 
            'type' => 'valami'
        ]);

        Agency::create([
            'name' => "Busszantó", 
            'country' => 'HU', 
            'type' => 'buszos cég'
        ]);

        Agency::create([
            'name' => "HAj Ó De jó", 
            'country' => 'IT', 
            'type' => 'hajós utak'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agencies');
    }
};
