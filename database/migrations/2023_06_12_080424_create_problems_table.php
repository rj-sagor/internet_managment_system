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
        Schema::create('problems', function (Blueprint $table) {
            $table->id();
            $table->string("user_id")->uniqid();
            $table->string('name');
            $table->string('designation_id');
            $table->string('department_id');
            $table->string('room_number');
            $table->string('others')->nullable();
            $table->string('problem_id');
            $table->string('problem_trucking_number');
            $table->string('service_cost')->nullable();
            $table->string('service_date')->nullable();
            $table->string('service_details')->nullable();
            $table->string('status')->default('unsolve');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('problems');
    }
};
