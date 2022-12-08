@include('partials.header')
@section('title', 'page_title')
@include('partials.footer')



<div class="row h-100 justify-content-center align-items-center">

<h1 class="display-7">Welcome to Immigraniada!</h1>
<br>
<h4 class="display-7" >With us, it is easy to continue with your immigration! We will help you to identify your immigration procedures and fill in required forms.</h1>
<br>
<h4 class="display-7" >Choose your immigration path:</h1>

<br><br><br><br><br><br><br>
<div class="row justify-content-center"> <a href="{{ route('immigration.spe')}}" ><button type="button" class="btn btn-secondary btn-lg">
     Study Permit Extension</button> </a></div>
     <div class="row justify-content-center"><a href="{{ route('immigration.wpe')}}" ><button type="button" class="btn btn-secondary btn-lg">
     Work Permit Extension</button> </a></div>
     <div class="row justify-content-center"> <a href="https://www.canada.ca/en/immigration-refugees-citizenship/services/visit-canada/apply-visitor-visa.html" ><button type="button" class="btn btn-secondary btn-lg">
     Visitor Permit</button> </a></div>

