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
        Schema::create('servicings', function (Blueprint $table) {
            $table->id();
            $table->string('user_name_id');
            $table->string('problem_id');
            $table->string('servicing_details');
            $table->string('amount')->nullable();
            $table->string('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('servicings');
    }
};
