@extends('partials.layout')

@section('pageTitle', $user->username.' - ')

@section('content')

    @include('partials.inner_slider')

    <div class="content-top"></div>

    <section id="main-content">

        <div class="row">
            <div class="small-16 columns">
                <h1 class="pull-left">{{ $user->username }}  <td>{!! $user->isOnline() ? "<i class='label success'>ONLINE</i>" : "<i class='label alert'>OFFLINE</i>" !!}</td></h1>
                <!-- MAKE BIGGER!! -->
                <h2 class="pull-right" style="padding-top: 10px">
                    @if(Auth::check() && $user->id != Auth::id())
                        @if(! Auth::user()->isFriend($user->id))
                            @if(\App\FriendRequest::where('receiver', Auth::user()->id)->where('sender', $user->id)->exists())
                                <a href="{{ route('profile.addFriend', $user->id) }}"> <i class="fa fa-user-plus"></i> </a>
                            @elseif(\App\FriendRequest::where('sender', Auth::user()->id)->where('receiver', $user->id)->exists())
                                <i class="fa fa-hourglass-end"></i>
                            @else
                                <a href="{{ route('profile.addFriend', $user->id) }}"> <i class="fa fa-us5er-plus"></i> </a>
                            @endif
                        @else
                            <i class="fa fa-check"></i>
                        @endif
                    @endif
                </h2>
                <div class="clearfix"></div>
                <div class="big-sep"></div>
            </div>
        </div>

        <div class="row profile">
            <div class="large-16 columns">
                <div style="display: none">
                    @if($user->friends()->count() > 0)
                        <p>{{ $user->username }} has {{ $user->friends()->count() }} {{ $user->friends()->count() > 1 ? 'friends' : 'friend' }}</p>
                    @else
                        <p>No friends to display</p>
                    @endif
                </div>

                <div class="row">
                    <div class="col-lg-8 container-heroes">
                        <div class="content-header">
                            <h3>{{ $user->username }}'s heroes</h3>
                        </div>
                        <div class="content callout-secondary">
                            @if($user->heroes()->count() == 0)
                            <div class="no-hero" style="position: relative; height: 200px;">
                                <h5 class="text-center" style="line-height: 200px;">I have no heroes!</h5>
                                <img src="{{ asset('images/herocreator/error-icon.png') }}" style="position: absolute; bottom: 0;" />
                            </div>
                            @else
                                @foreach($user->heroes as $hero)
                                    <div class="col-lg-10 hero">
                                        <div class="hero-image image-{{ $hero->getTeam() }}">
                                        <span class="image-{{ $hero->getClass() }}"
                                              style="background-image: url({{ asset('/images/herocreator/icon_'.$hero->getTeam().'_classes.png') }});">
                                        </span>
                                        </div>
                                        <div class="hero-content">
                                            <span class="name">{{ $hero->heroName }}</span>
                                            <div class="info">
                                                <div class="info-content col-lg-11">
                                                    <div class="col-lg-4 col-xs-4 hero-team team-{{ $hero->getTeam() }}"><span>{{ $hero->getTeam() }}</span></div>
                                                    <div class="col-lg-4 col-xs-4 hero-class class-{{ $hero->getClass() }}"><span>{{ $hero->getClass() }}</span></div>
                                                    <div class="col-lg-4 col-xs-4 hero-level level-{{ $hero->getStat('level') }}"><span>level</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-4 container-stats">
                        <div class="content-header" style="background: #532929; padding-left: 5px; text-align: center;">
                            <h3>{{ $user->username }}'s stats</h3>
                        </div>
                        <div class="content callout-secondary">
                            <i>Coming soon!</i>
                            <img src="{{ asset('images/placeholders/soon.png') }}" class="center-block" />
                        </div>
                    </div>
                    <div class="col-lg-4 container-desc">
                        <div class="content-header" style="background: #532929; padding-left: 5px; text-align: center;">
                            <h3>Description</h3>
                        </div>
                        <div class="content callout-secondary" style="margin-top: -8px; padding: 5px; color: #333; overflow: auto;">
                            {!! $user->description != null ? $user->description : 'This soldier has no description yet!' !!}
                        </div>
                    </div>
                </div>
                <!-- WE WANT -->
                <!-- Stats from in-game -->
                <!-- K/D/A -->
                <!-- Each map. Hours / Numbers / Win/Lose Ratio -->
                <!-- Add friend -->
                <!-- PM -->
                <!-- Numbers of posts / Comments -->
            </div>
            @if($user->signature != null)
                <div class="large-16 columns">
                    <img src="{{ $user->signature->image }}">
                </div>
            @endif
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

@stop
