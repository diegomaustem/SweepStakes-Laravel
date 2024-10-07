<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sweepstakes', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->foreignId('user_id');
            $table->integer("number_of_winners")->default(1);
            $table->dateTime("end_data")->nullable();
            $table->dateTime("description")->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sweepstakes');
    }
};
