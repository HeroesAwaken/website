@extends('partials.layout')

@section('pageTitle', $game['NAME']->statsValue.' - ')

@section('content')

    @include('partials.inner_slider')

    <div class="content-top"></div>

    <section id="main-content">

        <div class="row">
            <div class="small-16 columns">
                <nav>
                    <h3>
                        {{ $game['NAME']->statsValue }}
                    </h3>
                    Players: {{ floor((0.01 * $game['B-U-percent_full']->statsValue) * $game['MAX-PLAYERS']->statsValue) }} / {{ $game['MAX-PLAYERS']->statsValue }}
                </nav>
                <div class="big-sep"></div>
            </div>
        </div>

        <div class="row">
            @foreach($playersByTeam as $team => $playerlist)
            <div style="float: left; width: 48%; margin-left: 1%; margin-right: 1%;">
                <table>
                    <thead>
                    <tr>
                        <th>Hero Name</th>
                        <th>Level</th>
                        <th>Score</th>
                        <th>Kills</th>
                        <th>Time</th>
                        <th>Ping</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse($playerlist as $player)
                            <tr>
                                <td style="width: 33%">
                                    <p style="margin-bottom: 0rem;">
                                        <a href="/profile/{{ $player['user']['username'] }}">
                                            {{ $player['hero']['heroName'] }}
                                        </a>
                                    </p>
                                </td>
                                <td>
                                    {{ $player['P-level']->statsValue }}
                                </td>
                                <td>
                                    {{ $player['P-score']->statsValue }}
                                </td>
                                <td>
                                    {{ $player['P-kills']->statsValue }}
                                </td>
                                <td>
                                    {{ $player['P-time']->statsValue }}
                                </td>
                                <td>
                                    <span style="line-height: 24px;">
                                        <img src="/images/flags-24/{{ $player['geoip']['iso_code'] }}.png" title="{{ $player['geoip']['state_name'] }}, {{ $player['geoip']['country']}}" style="margin-top: -2px;" />
                                        {{ $player['P-ping']->statsValue }}ms
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">No Players</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            @endforeach
            <br syle="clear: both;" />
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
