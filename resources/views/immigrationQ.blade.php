@include('partials.header')
@include('partials.footer')
@section('title', 'page_title')
<form>
  <div class="form-group">
    <label for="question1">Are you a...</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Student who wants to keep studying</option>
      <option>Student who wants to start working</option>
      <option>Sorker who wants to keep working</option>
      <option>Visitor</option>
    </select>
    <input class="form-control" type="text" placeholder="Your immigration path is..." readonly>
  </div>
</form>
