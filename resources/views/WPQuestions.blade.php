@include('partials.header')
@include('partials.footer')
@section('page_title',$viewData["page_title"] )

<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <form method="POST" action="{{ route('immigration.wpe.create')}}">
      @csrf
        <div class="form-group">
          <label for="fName">First Name</label>
          <input type="text" class="form-control" id="fName">
        </div>
        <div class="form-group">
          <label for="lName">Last Name</label>
          <input type="text" class="form-control" id="lName">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="previousNames">
          <label class="form-check-label" for="previuosNames">Have you had any previous names</label>
        </div>
        <div class="form-group">
          <label for="pfName">Previous First Name</label>
          <input type="text" class="form-control" id="pfName">
        </div>
        <div class="form-group">
          <label for="plName">Previous Last Name</label>
          <input type="text" class="form-control" id="plName">
        </div>
        <div class="form-group">
          <label for="gender">Select gender</label>
          <select class="form-control" id="gender">
            <option>Female</option>
            <option>Male</option>
            <option>Other</option>
          </select>
        </div>
        <div>
          <label for="DOB">Date of birth:</label>
          <input type="date" id="DOB" name="DOB">
        </div>
        <div class="form-group">
          <label for="birthCountry">Country of Birth</label>
          <input type="text" class="form-control" id="birthCountry">
        </div>
        <div class="form-group">
          <label for="birthCity">City of Birth</label>
          <input type="text" class="form-control" id="birthCity">
        </div>
        <div class="form-group">
          <label for="citizenship">Citizenship</label>
          <input type="text" class="form-control" id="citizenship">
        </div>
        <div class="form-group">
          <label for="residenceCountry">Country of residence</label>
          <input type="text" class="form-control" id="residenceCountry">
        </div>
        <div class="form-group">
          <label for="statusCanada">Status in Canada</label>
          <input type="text" class="form-control" id="residenceCountry">
        </div>
        <div class="form-group">
          <label for="residenceStatusPeriod">How long have you had your current status in Canada</label>
          <input type="text" class="form-control" id="residenceStatusPeriod">
        </div>

        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
          <label for="phone">Phone number</label>
          <input type="text" class="form-control" id="phone">
        </div>
        <div class="form-group">
          <label for="residentialAddress">Residential Address</label>
          <input type="text" class="form-control" id="residentialAddress">
        </div>

        <div class="form-group">
          <label for="mart">Mailing Address</label>
          <input type="text" class="form-control" id="mailingAddress">
        </div>

        <select class="form-control" id="maritalStatus">
          <option>Single</option>
          <option>Married</option>
          <option>Divorced</option>
        </select>

        <div class="form-group">
          <label for="mariageDate">Mariage Date</label>
          <input type="date" class="form-control" id="mariageDate">
        </div>

        <div class="form-group">
          <label for="sfName">Spouse First Name</label>
          <input type="text" class="form-control" id="sfName">
        </div>

        <div class="form-group">
          <label for="slName">Spouse Last Name</label>
          <input type="text" class="form-control" id="slName">
        </div>

        <div class="form-group">
          <label for="englishLevel">English level</label>
          <input type="text" class="form-control" id="englishLevel">
        </div>
        <div class="form-group">
          <label for="nativeLanguage">Native language</label>
          <input type="text" class="form-control" id="nativeLanguage">
        </div>


        <div class="form-group">
          <label for="passportNumber">Passport Number</label>
          <input type="text" class="form-control" id="passportNumber">
        </div>

        <div class="form-group">
          <label for="passportIssue">Passport Issue Date</label>
          <input type="date" class="form-control" id="passportNumber">
        </div>

        <div class="form-group">
          <label for="passportExpiry">Passport Expiry Date</label>
          <input type="date" class="form-control" id="passportNumber">
        </div>

        <div class="form-group">
          <label for="passportCountry">Passport Country of Issue</label>
          <input type="text" class="form-control" id="passportCountry">
        </div>


        <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
          <div class="col-10 col-md-8 col-lg-6">
          <p>Have you passed a IELTS or TOEFL?</p>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="englishExamYes">
        <label class="form-check-label" for="englishExamYes">
          Yes
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="englishExamNo" checked>
        <label class="form-check-label" for="englishExamNo">
          No
        </label>
      </div>


        <div class="form-group">
          <label for="OriginalComingToCanadaDate">Original Coming To Canada Date</label>
          <input type="date" class="form-control" id="OriginalComingToCanadaDate">
        </div>
        <div class="form-group">
          <label for="OriginalComingToCanadaPurpose">Original Coming To Canada Purpose</label>
          <input type="text" class="form-control" id="OriginalComingToCanadaPurpose">
        </div>
        <div class="form-group">
          <label for="MostRecentComingToCanadaDate">Most Recent Coming To Canada Date</label>
          <input type="date" class="form-control" id="MostRecentComingToCanadaDate">
        </div>
        <div class="form-group">
          <label for="MostRecentComingToCanadaPurpose">Most Recent Coming To Canada Purpose</label>
          <input type="text" class="form-control" id="MostRecentComingToCanadaPurpose">
        </div>
        <div class="form-group">
          <label for="PreviousPermitNumber">Previous Permit Number</label>
          <input type="text" class="form-control" id="PreviousPermitNumber">
        </div>

       
        <div class="form-group">
          <label for="IntendedWork">Intended Work</label>
          <input type="text" class="form-control" id="IntendedWork">
        </div>
        <div class="form-group">
          <label for="Employer">Employer</label>
          <input type="text" class="form-control" id="Employer">
        </div>
        <div class="form-group">
          <label for="CompanyAddress">Company Address</label>
          <input type="text" class="form-control" id="CompanyAddress">
        </div>
        <div class="form-group">
          <label for="EmploymentDuration">Employment Duration</label>
          <input type="text" class="form-control" id="EmploymentDuration">
        </div>
        <div class="form-group">
          <label for="Education">Education</label>
          <input type="text" class="form-control" id="Education">
        </div>
        <div class="form-group">
          <label for="PreviousEmployment">Previous Employment</label>
          <input type="text" class="form-control" id="PreviousEmployment">
        </div>

    </div>
    <a href="{{ route('immigration.wpe') }}">Go to next page</a>
    <button type="submit" class="btn btn-primary">
    Submit</button>
    </form>
  </div>
</div>
</div>