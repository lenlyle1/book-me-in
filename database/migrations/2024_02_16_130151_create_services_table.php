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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->string('service_name');
            $table->integer('retail_price');
            $table->string('duration');
            $table->string('extra_time');
            $table->string('tax');
            $table->longtext('description');
            $table->string('category_name');
            $table->string('treatment_type');
            $table->string('resource');
            $table->string('online_booking');
            $table->string('available_for');
            $table->string('voucher_sales');
            $table->string('commissions');
            $table->string('service_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
