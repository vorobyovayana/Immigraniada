@include('partials.header')
@include('partials.footer')

<form  method="POST" action="{{ route('immigration.wpe.create')}}">
    @csrf
    <div class="mx-auto" style="width: 800px;">
    <div class="form-group">
    <label for="fName">First Name</label>
          <input type="text" class="form-control" name="fName">
        </div>
        <div class="form-group">
          <label for="lName">Last Name</label>
          <input type="text"  class="form-control" name="lName">
        </div>

        <div class="form-group">
          <label for="pfName">Previous First Name</label>
          <input type="text" value="None" class="form-control" name="pfName">
        </div>
        <div class="form-group">
          <label for="plName">Previous Last Name</label>
          <input type="text" value="None" class="form-control" name="plName">
        </div>
        <div class="form-group">
          <label for="gender">Select gender</label>
          <select class="form-control" name="gender">
            <option selected>Female</option>
            <option>Male</option>
            <option>Other</option>
          </select>
        </div>
        <div>
          <label for="DOB">Date of birth:</label>
          <input type="date" value=08/17/2001 name="DOB" name="DOB">
        </div>
        <div class="form-group">
          <label for="birthCountry">Country of Birth</label>
          <input type="text" value="Russia" class="form-control" name="birthCountry">
        </div>
        <div class="form-group">
          <label for="birthCity">City of Birth</label>
          <input type="text" value="Saint Petersburg" class="form-control" name="birthCity">
        </div>
        <div class="form-group">
          <label for="citizenship">Citizenship</label>
          <input type="text" value="Russia" class="form-control" name="citizenship">
        </div>
        <div class="form-group">
          <label for="residenceCountry">Country of residence</label>
          <input type="text" value="Canada" class="form-control" name="residenceCountry">
        </div>
        <div class="form-group">
          <label for="statusCanada">Status in Canada</label>
          <input type="text" value="Study Permit" class="form-control" name="statusCanada">
        </div>
        <div class="form-group">
          <label for="residenceStatusPeriod">How long have you had your current status in Canada</label>
          <input type="text" value="default" class="form-control" name="residenceStatusPeriod">
        </div>

        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" value="default@default.com" class="form-control" name="email">
        </div>
        <div class="form-group">
          <label for="phone">Phone number</label>
          <input type="text" value="default" class="form-control" name="phone">
        </div>
        <div class="form-group">
          <label for="residentialAddress">Residential Address</label>
          <input type="text" value="default" class="form-control" name="residentialAddress">
        </div>

        <div class="form-group">
          <label for="mart">Mailing Address</label>
          <input type="text" value="default" class="form-control" name="mailingAddress">
        </div>

        <select class="form-control" name="maritalStatus">
          <option>Single</option>
          <option selected>Married</option>
          <option>Divorced</option>
        </select>

        <div class="form-group">
          <label for="mariageDate">Mariage Date</label>
          <input type="date" value=09/29/2022 class="form-control" name="mariageDate">
        </div>

       

        <div class="form-group">
          <label for="englishLevel">English level</label>
          <input type="text" value="default" class="form-control" name="englishLevel">
        </div>
        <div class="form-group">
          <label for="nativeLanguage">Native language</label>
          <input type="text" value="default" class="form-control" name="nativeLanguage">
        </div>


        <div class="form-group">
          <label for="passportNumber">Passport Number</label>
          <input type="text" value="default" class="form-control" name="passportNumber">
        </div>

        <div class="form-group">
          <label for="passportIssueDate">Passport Issue Date</label>
          <input type="date" value="default" class="form-control" name="passportIssueDate">
        </div>

        <div class="form-group">
          <label for="passportExpiryDate">Passport Expiry Date</label>
          <input type="date" value="default" class="form-control" name="passportExpiryDate">
        </div>

        <div class="form-group">
          <label for="passportCountry">Passport Country of Issue</label>
          <input type="text" value="default" class="form-control" name="passportCountry">
        </div>


        <p>Have you passed a IELTS or TOEFL?</p>
        <input type="text" value="Yes" class="form-control" name="englishExam">
        <div class="form-group">
          <label for="OriginalComingToCanadaDate">Original Coming To Canada Date</label>
          <input type="date"  value="default" class="form-control" name="OriginalComingToCanadaDate">
        </div>
        <div class="form-group">
          <label for="OriginalComingToCanadaPurpose">Original Coming To Canada Purpose</label>
          <input type="text"  value="default" class="form-control" name="OriginalComingToCanadaPurpose">
        </div>
        <div class="form-group">
          <label for="MostRecentComingToCanadaDate">Most Recent Coming To Canada Date</label>
          <input type="date"  value="default" class="form-control" name="MostRecentComingToCanadaDate">
        </div>
        <div class="form-group">
          <label for="MostRecentComingToCanadaPurpose">Most Recent Coming To Canada Purpose</label>
          <input type="text"  value="default" class="form-control" name="MostRecentComingToCanadaPurpose">
        </div>
        <div class="form-group">
          <label for="PreviousPermitNumber">Previous Permit Number</label>
          <input type="text"   value="default" class="form-control" name="PreviousPermitNumber">
        </div>

       
        <div class="form-group">
          <label for="IntendedWork">Intended Work</label>
          <input type="text"  value="default" class="form-control" name="IntendedWork">
        </div>
        <div class="form-group">
          <label for="Employer">Employer</label>
          <input type="text"  value="default" class="form-control" name="Employer">
        </div>
        <div class="form-group">
          <label for="CompanyAddress">Company Address</label>
          <input type="text" value="default" class="form-control" name="CompanyAddress">
        </div>
        <div class="form-group">
          <label for="EmploymentDuration">Employment Duration</label>
          <input type="text" value="default" class="form-control" name="EmploymentDuration">
        </div>
        <div class="form-group">
          <label for="Education">Education</label>
          <input type="text"  value="default"class="form-control" name="Education">
        </div>
        <div class="form-group">
          <label for="PreviousEmployment">Previous Employment</label>
          <input type="text" value="default" class="form-control" name="PreviousEmployment">
        </div>
        <input type="submit" value="Save information and proceed">

        </div>

</form>
