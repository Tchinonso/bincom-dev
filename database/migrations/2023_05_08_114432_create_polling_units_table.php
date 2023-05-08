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
        Schema::create('polling_units', function (Blueprint $table) {
            $table->id();
            $table->integer('uniqueid');
            $table->integer('polling_unit_id');
            $table->integer('ward_id');
            $table->integer('lga_id');
            $table->integer('uniquewardid');
            $table->string('polling_unit_number');
            $table->string('polling_unit_name');
            $table->string('polling_unit_description');
            $table->integer('lat');
            $table->integer('long');
            // $table->string('entered_by_user');
            // $table->date('date_entered');
            // $table->string('user_ip_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('polling_units');
    }
};
