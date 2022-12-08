@include('partials.header')
@include('partials.footer')
@section('applicant',$viewData['applicant'])

<form method="POST" action="{{ route('applicant.update',$viewData['applicant']->id)}}">
    @csrf
    <label for="fName">First Name</label>
          <input type="text" class="form-control" value="{{ $viewData['applicant']->fName}}" name="fName">
        </div>
        <div class="form-group">
          <label for="lName">Last Name</label>
          <input type="text"  class="form-control"  value="{{ $viewData['applicant']->lName}}" name="lName">
        </div>

        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email"  value="{{ $viewData['applicant']->email}}" class="form-control" name="email">
        </div>
        <div class="form-group">
          <label for="phone">Phone number</label>
          <input type="text"  value="{{ $viewData['applicant']->phone}}" class="form-control" name="phone">
        </div>

        <div class="form-group">
          <label for="residentialAddress">Residential Address</label>
          <input type="text"  value="{{ $viewData['applicant']->residentialAddress}} class="form-control" name="residentialAddress">
        </div>
        <input type=submit value="Update applicant information">
</form>

