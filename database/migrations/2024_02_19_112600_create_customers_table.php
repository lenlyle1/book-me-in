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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->string('client_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('full_name');
            $table->string('blocked');
            $table->string('block_reason');
            $table->string('appointments');
            $table->string('no_shows');
            $table->string('total_sales');
            $table->string('outstanding');
            $table->string('gender');
            $table->string('mobile_number');
            $table->string('telephone');
            $table->string('email');
            $table->string('accepts_marketing');
            $table->string('accepts_sms_marketing');
            $table->string('address');
            $table->string('apartment_suite');
            $table->string('area');
            $table->string('city');
            $table->string('state');
            $table->string('post_code');
            $table->string('date_of_birth');
            $table->dateTime('added');
            $table->text('note');
            $table->string('referral_source');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
