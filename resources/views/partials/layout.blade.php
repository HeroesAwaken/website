@include('partials.header')


@if( ! Request::is('admin*'))
    @include('partials.navbar')
@else
    @include('partials.admin-navbar')
@endif

@yield('content')

@include('partials.footer')