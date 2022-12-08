@include('partials.header')
@include('partials.footer')
<br><br>
<div class="mx-auto" style="width: 800px;">
<a href="{{ route('form.imm5710')}}"><button>If unmarried, skip</button></a></div><br><br>
      <form method="POST" action="{{ route('spouse.create')}}">
      <div class="mx-auto" style="width: 800px;">
      @csrf
      <div class="form-group">
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
        <label for="willAccompany">Will they accompany you to Canada?</label>
        <select class="form-control" name="willAccompany">
            <option selected>Yes</option>
            <option>No</option>
          </select>
          </div>
        <input type=submit value="Add spouse">
</div>
</form>  

