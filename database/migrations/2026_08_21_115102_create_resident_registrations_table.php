<?php

use App\Models\User;
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
        Schema::create('resident_registrations', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            // at first it will have no user_id but if the admin approved of the refistration then it will have an user_id
            $table->foreignIdFor(User::class)->nullable()->constrained()->cascadeOnDelete();
            // reference id is when the residents want to check if their registration is approved or rejected, will create an /verification/register route in the future.
            $table->string('reference_id')->unique();

            // personal info
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('suffix')->nullable(); // will be an enum
            $table->string('blood_type')->nullable(); // will be an enum
            $table->string('sex'); // will be an enum just male and female
            $table->string('civil_status')->default('single'); // will also be an enum
            $table->string('birth_place')->nullable();
            $table->date('birth_date');
            $table->string('email');
            $table->string('phone_number');

            // address
            $table->string('house_number');
            // $table->foreignIdFor(Barangay::class)->constrained()->cascadeOnDelete();
            $table->string('municipal');
            $table->string('province');

            // uploaded ID's
            $table->string('valid_id_path');
            $table->string('proof_residency_path');

            $table->string('status')->default('pending'); // this also is an enum
            $table->text('remarks')->nullable(); // this is when the status is rejected the admin will add why your registration is rejected
            $table->foreignId('verified_by')->nullable()->constrained('users')->nullOnDelete();
            $table->timestamp('verified_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resident_registrations');
    }
};
