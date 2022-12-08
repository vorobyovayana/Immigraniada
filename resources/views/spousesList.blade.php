@include('partials.header')
@include('partials.footer')
<table class="table striped">
  <thead>
  <tr>
    <td>Spouse Name</td>

    <td>Edit</td>
    <td>Delete</td>

  </tr>
  </thead>
@foreach($viewData["spouses"] as $spouse) 
<tr>
<td><a href="#"> {{ $spouse["fName"].' '.$spouse["lName"] }}</a></td>


<td><a href="{{ route('spouse.edit',$spouse->id) }}">Edit</a></td>
<td><a href="{{ route('spouse.delete',$spouse->id) }}">Delete</a></td>
@endforeach
</tr>
</table>