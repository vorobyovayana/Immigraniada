@include('partials.header')
@include('partials.footer')
@section('page_title',$viewData["page_title"] )


<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <form>
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
          <input type="date" id="DOB" name="birDOBthday">
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
          <label for="mailingAddress">Mailing Address</label>
          <input type="text" class="form-control" id="mailingAddress">
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
    </div>



    <a href="{{ route('immigration.wpe') }}">Go to next page</a>
    <button type="submit" class="btn btn-primary">
    Submit</button>
    </form>
  </div>
</div>
</div>