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
        Schema::create('computer_information', function (Blueprint $table) {
            $table->id();
            $table->string('department_id');
            $table->string('type_id')->nullable();
            $table->string('user_id')->nullable();
            $table->string('computer_id');
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
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computer_information');
    }
};
