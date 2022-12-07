<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('fName');
            $table->string('lName');
            $table->boolean('otherNames');
            $table->string('pfName')->default('null');
            $table->string('plName')->default('null');
            $table->string('gender');
            $table->date('dob');
            $table->string('cityOfBirth');
            $table->string('countryOfBirth');
            $table->string('citizenshipCountry');
            $table->string('residenceCountry');
            $table->string('residenceStatus');
            $table->string('residenceStatusPeriod');
            $table->string('maritalStatus');
            $table->date('mariageDate');
            $table->string('nativeLanguage');
            $table->string('englishLevel');
            $table->string('englishExam')->default('null');
            $table->string('passportNumber');
            $table->date('passportIssueDate');
            $table->date('passportExpiryDate');
            $table->string('passportCountryofIssue');
            $table->string('residentialAddress');
            $table->string('MailingAddress');
            $table->string('phone');
            $table->string('email');
            // will continue the list later



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
};
