<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Applicant;

class ApplicantController extends Controller
{
    public function showWPQuestions(){
        $viewData = array();
        $viewData["page_title"]="Work Permit Extension";

        return view("WPQuestions")->with("viewData", $viewData);
    }
    public function showSPQuestions(){
        $viewData = array();
        $viewData["page_title"]="Study Permit Extension";


        return view("SPQuestions")->with("viewData", $viewData);
    }

    public function showSuccessPage(){
        $viewData = array();

        return view("infoSuccess")->with("viewData", $viewData);
    }

    function createWPApplicant(Request $postData)  {

        //var_dump($postData);

        $na = new Applicant();

        $na->immigrationPath = "WP";

        $na->fName = $postData->input('fName');
        $na->fName = 'Iana';
        $na->lName = $postData->input('lName');
        $na->pfName = $postData->input('pfName');
        $na->plName = $postData->input('plName');
        $na->gender = $postData->input('gender');
        $na->dob = $postData->input('DOB');
        $na->countryOfBirth = $postData->input('birthCountry');
        $na->cityOfBirth = $postData->input('birthCity');
        $na->citizenshipCountry = $postData->input('citizenship');
        $na->residenceCountry = $postData->input('residenceCountry');
        $na->residenceStatus = $postData->input('statusCanada');
        $na->residenceStatusPeriod = $postData->input('residenceStatusPeriod');

        $na->residentialAddress = $postData->input('residentialAddress');
        $na->MailingAddress = $postData->input('mailingAddress');
        $na->email = $postData->input('email');
        $na->phone = $postData->input('phone');

        $na->maritalStatus = $postData->input('maritalStatus');
        $na->mariageDate= $postData->input('mariageDate');

        $na->englishLevel= $postData->input('englishLevel');
        $na->nativeLanguage= $postData->input('nativeLanguage');
        $na->englishExam= $postData->input('englishExam');

        $na->passportNumber= $postData->input('passportNumber');
        $na->passportIssueDate= $postData->input('passportIssueDate');
        $na->passportExpiryDate= $postData->input('passportExpiryDate');
        $na->passportCountryofIssue= $postData->input('passportCountry');

        $na->OriginalComingToCanadaDate= $postData->input('OriginalComingToCanadaDate');
        $na->OriginalComingToCanadaPurpose= $postData->input('OriginalComingToCanadaPurpose');
        $na->MostRecentComingToCanadaDate= $postData->input('MostRecentComingToCanadaDate');
        $na->MostRecentComingToCanadaPurpose= $postData->input('MostRecentComingToCanadaPurpose');
        $na->PreviousPermitNumber= $postData->input('PreviousPermitNumber');

        $na->IntendedWork= $postData->input('IntendedWork');
        $na->Employer= $postData->input('Employer');
        $na->CompanyAddress= $postData->input('CompanyAddress');
        $na->EmploymentDuration= $postData->input('EmploymentDuration');
        $na->Education= $postData->input('Education');
        $na->PreviousEmployment= $postData->input('PreviousEmployment');

        $na->save();
        return redirect()->route('immigration.success');
   

    }

    function createSPApplicant(Request $postData)  {

        //var_dump($postData);

        $na = new Applicant();

        $na->immigrationPath = "SP";

        $na->fName = $postData->input('fName');
        $na->lName = $postData->input('lName');
        $na->pfName = $postData->input('pfName');
        $na->plName = $postData->input('plName');
        $na->gender = $postData->input('gender');
        $na->dob = $postData->input('DOB');
        $na->countryOfBirth = $postData->input('birthCountry');
        $na->cityOfBirth = $postData->input('birthCity');
        $na->citizenshipCountry = $postData->input('citizenship');
        $na->residenceCountry = $postData->input('residenceCountry');
        $na->residenceStatus = $postData->input('statusCanada');
        $na->residenceStatusPeriod = $postData->input('residenceStatusPeriod');

        $na->residentialAddress = $postData->input('residentialAddress');
        $na->MailingAddress = $postData->input('mailingAddress');
        $na->email = $postData->input('email');
        $na->phone = $postData->input('phone');

        $na->maritalStatus = $postData->input('maritalStatus');
        $na->mariageDate= $postData->input('mariageDate');

        $na->englishLevel= $postData->input('englishLevel');
        $na->nativeLanguage= $postData->input('nativeLanguage');
        $na->englishExam= $postData->input('englishExam');

        $na->passportNumber= $postData->input('passportNumber');
        $na->passportIssueDate= $postData->input('passportIssueDate');
        $na->passportExpiryDate= $postData->input('passportExpiryDate');
        $na->passportCountryofIssue= $postData->input('passportCountry');

        $na->OriginalComingToCanadaDate= $postData->input('OriginalComingToCanadaDate');
        $na->OriginalComingToCanadaPurpose= $postData->input('OriginalComingToCanadaPurpose');
        $na->MostRecentComingToCanadaDate= $postData->input('MostRecentComingToCanadaDate');
        $na->MostRecentComingToCanadaPurpose= $postData->input('MostRecentComingToCanadaPurpose');
        $na->PreviousPermitNumber= $postData->input('PreviousPermitNumber');

        //$na->IntendedStudy= $postData->input('IntendedStudy');
        
        //$na->CompanyAddress= $postData->input('CompanyAddress');
        $na->InstitutionAddress= $postData->input('InstitutionAddress');
        $na->StudentId= $postData->input('StudentId');
        $na->EducationDuration= $postData->input('EducationDuration');
        $na->EducationCost= $postData->input('EducationCost');
        $na->Sponsor= $postData->input('Sponsor');
        $na->AvailableFunds= $postData->input('AvailableFunds');
        //$na->WorkPermitRequired= $postData->input('wpRequired');
        $na->Institution= $postData->input('Institution');
        
        $na->save();
        //return back();

        return redirect()->route('immigration.success');
    }

}