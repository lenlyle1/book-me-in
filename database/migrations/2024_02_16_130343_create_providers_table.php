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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mobile_number');
            $table->string('email');
            $table->string('status');
            $table->string('appointments');
            $table->string('user_permission');
            $table->dateTime('start_date');
            $table->dateTime('end_date')->nullable();
            $table->text('notes')->nullable();
            $table->string('service_commission')->nullable();
            $table->string('product_commission')->nullable();
            $table->string('voucher_commission');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('providers');
    }
};
