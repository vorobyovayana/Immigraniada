@include('partials.header')
@include('partials.footer')
<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <form method="POST" action="{{ route('spouse.create')}}">
      @csrf
      <label for="fName">First Name</label>
          <input type="text" class="form-control" name="fName">
        </div>
        <div class="form-group">
          <label for="lName">Last Name</label>
          <input type="text"  class="form-control" name="lName">
        </div>
        <div class="form-group">
          <label for="dob">Date of Birth</label>
          <input type="text"  class="form-control" name="dob">
        </div>

        <div class="form-group">
          <label for="countryOfBirth">Country Of Birth</label>
          <input type="text"  class="form-control" name="countryOfBirth">
        </div>

        <div class="form-group">
          <label for="residentialAddress">Residential Address</label>
          <input type="text"  class="form-control" name="residentialAddress">
        </div>

        <div class="form-group">
          <label for="occupation">Occupation</label>
          <input type="text"  class="form-control" name="occupation">
        </div>

        <div class="form-group">
          <label for="occupation">Occupation</label>
          <input type="text"  class="form-control" name="occupation">
        </div>
        <div class="form-group">
        <label for="willAccompany">Will they accompany you to Canada?</label>
        <select class="form-control" name="willAccompany">
            <option selected>Yes</option>
            <option>No</option>
          </select>
          </div>
        <input type=submit value="Add spouse">
</form>  
