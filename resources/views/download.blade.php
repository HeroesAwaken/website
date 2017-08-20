@extends('partials.layout')

@section('pageTitle', 'Download - ')

@section('content')

    @include('partials.inner_slider')

    <div class="content-top"></div>

    <section id="main-content">

        <div class="row">
            <div class="small-16 columns">
                <h1>Download HeroesAwaken</h1>
                <div class="big-sep"></div>
            </div>
        </div>

        <div class="row">
            <div class="small-16 large-16 columns">
                <h4>Client Download</h4>
                @if( ! Auth::check())
                    <p>
                        You need an Account to download our client.<br />
                        <a href="{{ route('login') }}">Login</a> or <a href="{{ route('register') }}">register</a> now!
                    </p>
                @else
                    <p>
                        <a href="{{ route('downloadclient', 'client') }}">Download our installer.</a><br />
                        <a href="{{ route('downloadclient', 'client-archive') }}">Download the client as zip.</a><br />
                        <a href="{{ route('downloadclient', 'tutorial') }}">Download our tutorial-only client.</a><br />
                    </p>
                @endif
            </div>
        </div>
    </section>

@endsection
