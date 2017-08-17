@include('partials.header')

@if( ! Request::is('admin*'))<a href="{{ route('download') }}"><img class="hide-for-small-only" style="position: absolute; left: 1rem; top: 8rem; z-index:2500; width: 10rem;" src="{{ asset('images/dl_new.png') }}"></a>@endif

@if( ! Request::is('admin*'))
    @include('partials.navbar')
@else
    @include('partials.admin-navbar')
@endif

@yield('content')

@include('partials.footer')