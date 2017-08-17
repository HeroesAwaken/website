@extends('partials.layout')

@section('pageTitle', 'Games - ')

@section('content')

    @include('partials.inner_slider')

    <div class="content-top"></div>

    <section id="main-content">

        <div class="row">
            <div class="small-16 columns">
                <nav>
                    <h3>
                        Active Games
                    </h3>
                </nav>
                <div class="big-sep"></div>
            </div>
        </div>

        <div class="row">


            <div class="small-16 columns" style="background-color: rgba(255, 255, 255, 0.15); padding-top:1rem;">
                <form method="POST" action="/games/launcher">
                    {{ csrf_field() }}
                    <div class="small-8 columns">
                        <select name="region">
                            <option value="AUTO" {{ ($selectedregion == '') ? 'selected' : '' }}>Automatic</option>
                            <option value="EU" {{ ($selectedregion == 'EU') ? 'selected' : '' }}>Europe</option>
                            <option value="NA" {{ ($selectedregion == 'NA') ? 'selected' : '' }}>North America</option>
                        </select>
                    </div>
                    <div class="small-8 text-center columns" style="padding-left:0rem;">
                        <button class="lime-button" type="submit">Change Preferred Region</button>
                    </div>
                </form>
            </div>

            <table>
                <thead>
                <tr>
                    <th>Hostname</th>
                    <th>Players</th>
                    <th>Map</th>
                    <th>Region</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($activegames as $gid => $game)

                        <tr>
                            <td style="width:75%">
                                <p style="margin-bottom: 0rem;">
                                    <a href="/games/{{ $game['GID']->statsValue }}">
                                        {{ $game['NAME']->statsValue }}
                                    </a>
                                </p>
                            </td>
                            <td>
                                {{ ceil((0.01 * $game['B-U-percent_full']->statsValue) * $game['MAX-PLAYERS']->statsValue) }} / {{ $game['MAX-PLAYERS']->statsValue }}
                            </td>
                            <td>
                                {{ $game['B-U-map_name']->statsValue }}
                            </td>
                            <td>
                                <img src="/images/flags-24/{{ $game['geoip']['iso_code'] }}.png" title="{{ $game['geoip']['city'] }}, {{ $game['geoip']['state_name'] }}, {{ $game['geoip']['country']}}" style="margin-top: -2px;" />
                                {{ $game['geoip']['continent'] }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
