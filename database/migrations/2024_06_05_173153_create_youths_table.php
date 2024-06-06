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
        Schema::create('youths', function (Blueprint $table) {
            $table->id();
            $table->string('purok');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->smallInteger('age');
            $table->date('birthday');
            $table->string('sex');
            $table->string('youth_classification');
            $table->string('youth_age_group');
            $table->string('email')->unique();
            $table->string('contact_number')->unique();
            $table->string('address');
            $table->string('highest_educational_attainment');
            $table->string('work_status');
            $table->boolean('registered_voter');
            $table->boolean('last_election_voter');
            $table->boolean('attended_kk_assembly');
            $table->integer('attended_kk_assembly_times')->nullable();
            $table->string('region')->default('IV');
            $table->string('province')->default('Neg. Occ.');
            $table->string('city')->default('Talisay City');
            $table->string('barangay')->default('Zone-3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('youths');
    }
};
