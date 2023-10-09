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
        Schema::create('scanners', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->default('null');
            $table->string('department_id');
            $table->string('type_id');
            $table->string('scanner_id');
            $table->string('scanner_brand');
            $table->string('scanner_model');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scanners');
    }
};
