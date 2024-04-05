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
        Schema::create('provider_service', function (Blueprint $table) {
            $table->id();
            $table->unsignedBiginteger('provider_id');
            $table->unsignedBiginteger('service_id');


            $table->foreign('provider_id')->references('id')
                 ->on('providers')->onDelete('cascade');
            $table->foreign('service_id')->references('id')
                ->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provider_service');
    }
};
