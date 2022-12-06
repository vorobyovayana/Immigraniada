@include('partials.header')
@include('partials.footer')
@section('title', 'page_title')
@section('path1', 'path1')
<div class="container h-100">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
<form>
  <div class="form-group">
    <label for="question1">Are you a...</label>
    <select class="form-control" id="question1">
      @foreach($viewData["imm_options"] as $immOption)
      <option value={{ $immOption }}>{{ $immOption }}</option>
      @endforeach
    </select>
 
    <input class="form-control" type="text" placeholder="Your immigration path is..." readonly>
  </div>

    <a href="{{ route('immigration.questions') }}">Go to questions</a>
  

</form>
</div>
</div>
</div>
