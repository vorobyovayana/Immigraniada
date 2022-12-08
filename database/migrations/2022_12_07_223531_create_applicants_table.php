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
            $table->string('immigrationPath')->default('none');
            $table->string('fName');
            $table->string('lName');
            $table->boolean('otherNames');
            $table->string('pfName')->default('none');
            $table->string('plName')->default('none');
            $table->string('gender');
            $table->date('dob');
            $table->string('cityOfBirth');
            $table->string('countryOfBirth');
            $table->string('citizenshipCountry');
            $table->string('residenceCountry');
            $table->string('residenceStatus');
            $table->string('residenceStatusPeriod');
            $table->string('maritalStatus');
            $table->string('mariageDate')->default(1111-11-11);
            $table->string('nativeLanguage')->default('none');
            $table->string('englishLevel')->default('none');
            $table->string('englishExam')->default('none');
            $table->string('passportNumber');
            $table->date('passportIssueDate');
            $table->date('passportExpiryDate');
            $table->string('passportCountryofIssue');
            $table->string('residentialAddress');
            $table->string('MailingAddress');
            $table->string('phone');
            $table->string('email');

            $table->string('OriginalComingToCanadaDate')->default('none');
            $table->string('OriginalComingToCanadaPurpose')->default('none');
            $table->string('MostRecentComingToCanadaDate')->default('none');
            $table->string('MostRecentComingToCanadaPurpose')->default('none');
            $table->string('PreviousPermitNumber')->default('none');

            // for work permit
            $table->string('IntendedWork')->default('none');
            $table->string('Employer')->default('none');
            $table->string('CompanyAddress')->default('none');
            $table->string('EmploymentDuration')->default('none');
            $table->string('Education')->default('none');
            $table->string('PreviousEmployment')->default('none');

            // for study permit
           // $table->string('IntendedStudy')->default('none');
            $table->string('Institution')->default('none');
            $table->string('InstitutionAddress')->default('none');
            $table->string('StudentId')->default('none');
            
            $table->string('EducationDuration')->default('none');
            $table->string('EducationCost')->default('none');
            $table->string('Sponsor')->default('none');
            $table->string('AvailableFunds')->default('none');
            //$table->boolean('WorkPermitRequired')->default(false);
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
