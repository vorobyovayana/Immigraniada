@include('partials.header')
@include('partials.footer')
@section('page_title',$viewData["page_title"] )
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
    <label for="OriginalComingToCanadaDate">Date of first arrival to Canada</label>
    <input type="date" class="form-control" id="OriginalComingToCanadaDate">
  </div>
  <div class="form-group">
    <label for="OriginalComingToCanadaPurpose">Purpose of first arrival to Canada</label>
    <input type="date" class="form-control" id="OriginalComingToCanadaPurpose">
  </div>
  <div class="form-group">
    <label for="RecentComingToCanadaDate">Date of most recent arrival to Canada</label>
    <input type="date" class="form-control" id="RecentComingToCanadaDate">
  </div>
  <div class="form-group">
    <label for="RecentComingToCanadaPurpose">Purpose of most recent arrival to Canada</label>
    <input type="date" class="form-control" id="RecentComingToCanadaPurpose">
  </div>

  <div class="form-group">
    <label for="previousPermitNumber">Previous Permit Number</label>
    <input type="text" class="form-control" id="previousPermitNumber">
  </div>

  <div class="form-group">
    <label for="intendedWork">Intended occupation</label>
    <input type="text" class="form-control" id="intendedWork">
  </div>
  <div class="form-group">
    <label for="intendedEmployer">Intended employer</label>
    <input type="text" class="form-control" id="intendedEmployer">
  </div>
  <div class="form-group">
    <label for="employmentAddress">Employment Address</label>
    <input type="text" class="form-control" id="employmentAddress">
  </div>
  <div class="form-group">
    <label for="jobTitle">Job Title</label>
    <input type="text" class="form-control" id="jobTitle">
  </div>
  <div class="form-group">
    <label for="employmentDuration">Employment Duration</label>
    <input type="text" class="form-control" id="employmentDuration">
  </div>
  <div class="form-group">
    <label for="education">Education</label>
    <input type="text" class="form-control" id="education">
  </div>
  <div class="form-group">
    <label for="PreviousEmployment">Previous Employment</label>
    <input type="text" class="form-control" id="PreviousEmployment">
  </div>
  </div>
</div>
</div>