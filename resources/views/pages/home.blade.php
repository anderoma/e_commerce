@extends ('layout.layout')

@section ('content')
  
  @if (session()->has('flash_notification.success')) 
  <div class="alert alert-success">{!! session('flash_notification.success') !!}</div>

  @endif
 
  @component('pages.components.banner')
  @endcomponent


@endsection