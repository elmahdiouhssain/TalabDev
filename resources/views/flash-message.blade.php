
@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    {{ $message }}
  </div>
@endif


@if ($message = Session::get('error'))
<div class="alert-icon-big alert alert-danger " role="alert">
<div class="alert-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
</div>
<div class="alert-content">
<h6 class="alert-heading">Error</h6>
<p>{{ $message }}.</p>
</div>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert-icon-big alert alert-warning " role="alert">
<div class="alert-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
</div>
<div class="alert-content">
<h6 class="alert-heading">Warning</h6>
<p>{{ $message }}.</p>
</div>
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert-icon-big alert alert-info " role="alert">
<div class="alert-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
</div>
<div class="alert-content">
<h6 class="alert-heading">Informational Notes</h6>
<p>{{ $message }}.</p>
</div>
</div>
@endif


@if ($errors->any())
<div class="alert-icon-big alert alert-danger " role="alert">
<div class="alert-icon">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
</div>
<div class="alert-content">
<h6 class="alert-heading">Error</h6>
<p>Please check the form below for errors.</p>
</div>
</div>
@endif
  