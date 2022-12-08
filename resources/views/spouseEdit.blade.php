@include('partials.header')
@include('partials.footer')
@section('spouse',$viewData['spouse'])

<form method="POST" action="{{ route('spouse.update',$viewData['spouse']->id)}}">
    @csrf
    <label for="fName">First Name</label>
          <input type="text" class="form-control" value="{{ $viewData['spouse']->fName}}" name="fName">
        </div>
        <div class="form-group">
          <label for="lName">Last Name</label>
          <input type="text"  class="form-control"  value="{{ $viewData['spouse']->lName}}" name="lName">
        </div>

        <div class="form-group">
          <label for="dob">Date of Birth</label>
          <input type="date"  value="{{ $viewData['spouse']->dob}}"  class="form-control" name="dob">
        </div>

        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email"  value="{{ $viewData['spouse']->email}}" class="form-control" name="email">
        </div>
        <div class="form-group">
          <label for="phone">Phone number</label>
          <input type="text"  value="{{ $viewData['spouse']->phone}}" class="form-control" name="phone">
        </div>

        <div class="form-group">
          <label for="residentialAddress">Residential Address</label>
          <input type="text"  value="{{ $viewData['spouse']->residentialAddress}} class="form-control" name="residentialAddress">
        </div>
        <input type=submit value="Update spouse information">
</form>

