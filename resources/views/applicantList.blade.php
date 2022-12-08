@include('partials.header')
@include('partials.footer')
<table class="table striped">
  <thead>
  <tr>
    <td>Applicant Name</td>

    <td>Edit</td>
    <td>Delete</td>

  </tr>
  </thead>
@foreach($viewData["applicants"] as $applicant) 
<tr>
<td><a href="#"> {{ $applicant["fName"].' '.$applicant["lName"] }}</a></td>


<td><a href="{{ route('applicant.edit',$applicant->id) }}">Edit</a></td>
<td><a href="{{ route('applicant.delete',$applicant->id) }}">Delete</a></td>
@endforeach
</tr>
</table>