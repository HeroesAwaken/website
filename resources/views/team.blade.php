@extends('partials.layout')

@section('content')

    @include('partials.inner_slider')

    <div class="content-top"></div>

    <section id="main-content">

        <div class="row">
            <div class="small-16 columns">
                <h1>@lang('layout.team')</h1>
                <div class="big-sep"></div>
            </div>
        </div>

        <div class="row team">
            <h2>Awoken Lead</h2>
            <div class="small-16 columns">
                <div class="row small-up-2 medium-up-4 large-up-5">
                @foreach($leads as $user)
                    <!--team-member-->
                        <div class="column team-member">
                            <div class="photo">
                                <a href="{{ route('profile.details', $user->username) }}">
                                    <img src="{{ $user->avatar ? $user->avatar : asset('images/placeholders/about.png')  }}" class="" alt="">
                                </a>
                            </div>
                            <h5><a href="{{ route('profile.details', $user->username) }}">{{ $user->username }}</a></h5>
                        </div>
                        <!--//team-member-->
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row team">
            <h2>Staff</h2>
            <div class="small-16 columns">
                <div class="row small-up-2 medium-up-4 large-up-5">
                    @foreach($staffs as $user)
                        @if($leads->where('id', $user->id)->first() == null)
                        <!--team-member-->
                            <div class="column team-member">
                                <div class="photo">
                                    <a href="{{ route('profile.details', $user->username) }}">
                                        <img src="{{ $user->avatar ? $user->avatar : asset('images/placeholders/about.png')  }}" class="" alt="">
                                    </a>
                                </div>
                                <h5><a href="{{ route('profile.details', $user->username) }}">{{ $user->username }}</a></h5>
                            </div>
                            <!--//team-member-->
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row team">
            <h2>Awoken Dev</h2>
            <div class="small-16 columns">
                <div class="row small-up-2 medium-up-4 large-up-5">
                @foreach($devs as $user)
                    <!--team-member-->
                        <div class="column team-member">
                            <div class="photo">
                                <a href="{{ route('profile.details', $user->username) }}">
                                    <img src="{{ $user->avatar ? $user->avatar : asset('images/placeholders/about.png')  }}" class="" alt="">
                                </a>
                            </div>
                            <h5><a href="{{ route('profile.details', $user->username) }}">{{ $user->username }}</a></h5>
                        </div>
                        <!--//team-member-->
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row">
            <div class="card small-16 large-centered columns" style="text-align: center; margin-top:1rem; vertical-align:middle;">
                <dl>
                    <dt style="text-transform: uppercase;font-size: 0.73333rem;color: #271d21;">Advertisement</dt>
                    <dd>
                        <div id="FGus239aiSAGisa32s2" style="display: none;">
                            <img src="{{ asset('images/blocked_sadface.png') }}" alt="sadface"/>
                        </div>
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-format="autorelaxed"
                             data-ad-client="ca-pub-8715450313943907"
                             data-ad-slot="3703932528"></ins>
                        <script>
                             (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </dd>
                </dl>
            </div>
        </div>
    </section>

@endsection