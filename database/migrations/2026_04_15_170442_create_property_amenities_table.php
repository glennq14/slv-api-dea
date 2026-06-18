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
        Schema::create('property_amenities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')
                ->references('id')
                ->on('properties')
                ->onDelete('cascade');
            $table->integer('amenities')->nullable();
            $table->integer('airport')->nullable();
            $table->integer('sea')->nullable();
            $table->integer('public_transport')->nullable();
            $table->integer('schools')->nullable();
            $table->integer('resorts')->nullable();

            $table->integer('terrace')->nullable();
            $table->integer('attic')->nullable();
            $table->integer('roof_garden')->nullable();
            $table->integer('covered_veranda')->nullable();
            $table->integer('uncovered_veranda')->nullable();
            $table->integer('covered_parking')->nullable();
            $table->integer('basement')->nullable();
            $table->integer('courtyard')->nullable();
            $table->integer('garden')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_amenities');
    }
};
