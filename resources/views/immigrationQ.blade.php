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
      <option value="{{ $immOption }}">{{ $immOption }}</option>
      @endforeach
     <!-- ?php
   if(isset($_POST['question1'])=="Student who wants to keep studying") {
    echo '<a href="{{ route("immigration.wpe") }}">Go to study permit questions</a>';
   }else if(isset($_POST['question1'])=="Worker who wants to keep worker") {
    echo '<a href="{{ route("immigration.spe") }}">Go to work permit questions</a>';
   }else{
    echo 'What are you doing here?';
   }

  ?>  -->
    </select>


    
  </div>
  
    
  

</form>
</div>
</div>
</div>
