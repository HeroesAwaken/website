@extends('partials.layout')

@section('content')

    @include('partials.inner_slider')

    <div class="content-top"></div>

    <section id="main-content">

        <div class="row">
            <div class="small-16 columns">
                <h1>{{ $user->username }}  <td>{!! $user->isOnline() ? "<i class='label success'>ONLINE</i>" : "<i class='label alert'>OFFLINE</i>" !!}</td></h1>
                <!-- MAKE BIGGER!! -->
                @include('partials.addFriend', ['user_id' => $user->id])
                <div class="big-sep"></div>
            </div>
        </div>

        <div class="row" style="margin-bottom: 5rem;">
            <div class="large-16 columns">
                @if($user->friends()->count() > 0)
                    <p>{{ $user->username }} has {{ $user->friends()->count() }} {{ $user->friends()->count() > 1 ? 'friends' : 'friend' }}</p>
                @else
                    <p>No friends to display</p>
                @endif
                <!-- WE WANT -->
                <!-- Stats from in-game -->
                <!-- K/D/A -->
                <!-- Each map. Hours / Numbers / Win/Lose Ratio -->
                <!-- Add friend -->
                <!-- PM -->
                <!-- Numbers of posts / Comments -->

                <h3>Description</h3>
                @if($user->description != null)
                    <p>{{ $user->description }}</p>
                @else
                    <p>This soldier has no description yet!</p>
                @endif

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
