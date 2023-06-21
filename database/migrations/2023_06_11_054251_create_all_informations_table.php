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
        Schema::create('all_informations', function (Blueprint $table) {
            $table->id();
            $table->string('profile_id');
            $table->string('name');
            $table->string('designation');
            $table->string('room_number');
            $table->string('department');
            $table->string('monitor');
            $table->string('mother_board');
            $table->string('proccesor');
            $table->string('ip_address');
            $table->string('mac_address');
            $table->string('installation_date');
            $table->string('ram');
            $table->string('os_system');
            $table->string('hdd_ssd');
            $table->string('price')->nullable();
            $table->string('tender_number')->nullable();
            $table->string('tendar_date')->nullable();
            $table->string('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('all_informations');
    }
};
