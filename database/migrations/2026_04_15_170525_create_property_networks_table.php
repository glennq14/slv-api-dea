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
        Schema::create('property_networks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')
                ->references('id')
                ->on('properties')
                ->onDelete('cascade');
            $table->json('external_feed')
                ->nullable()
                ->comment('Network for third party e.g. slv, zoopla, barzaki, apits');
            $table->json('website_banner')
                ->nullable()
                ->comment('Website banner e.g. reduced, sold, reseved, exclusive and new listing');
            $table->boolean('published')
                ->default(0)
                ->comment('published status of the property on the third party network');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('networks');
    }
};
