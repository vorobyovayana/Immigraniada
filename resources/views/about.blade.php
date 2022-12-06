@include('partials.header')
@include('partials.footer')
@section('page_title',$viewData["page_title"] )
@section('content',$viewData["content"] )
<h2>@yield('page_title')</h2>
<h3>@yield('content')</h3>
<div class="embed-responsive embed-responsive-16by9">
<iframe width="560" height="315" src="https://www.youtube.com/embed/aKpgb2WrGo0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>