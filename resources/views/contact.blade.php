@extends('partials.layout')

@section('content')

    @include('partials.inner_slider')

    <div class="content-top"></div>

    <section id="main-content">

        <div class="row">
            <div class="small-16 columns">
                <h1>@lang('contact.get_in_touch')</h1>
                <div class="big-sep"></div>
            </div>
        </div>

        <div class="row">
            <div class="small-16 large-8 columns">
                <h4>@lang('contact.how_to')</h4>
                <p>@lang('contact.how_to_description')</p>
                <p>You can contact us via <a href="mailto:support@heroesawaken.com">support@heroesawaken.com</a>. In case secure communication is preffered, <a href="{{ asset('images/support.pgp.txt') }}">a PGP Public Key is available</a></p>
            </div>
            <div class="small-16 large-7 columns">
                <div class="row small-up-1 medium-up-2">
                    <h4>@lang('contact.to_contact')</h4>
                    <!--address-->
                    <div class="column">
                        <h5>AwokenLead</h5>
                        <address>
                            <p>
                            @foreach($leads as $user)
                                <!--team-member-->
                                <a href="{{ route('profile.details', $user->username) }}">{{ $user->username }}</a><br>
                                <!--//team-member-->
                            @endforeach
                            </p>
                        </address>
                    </div>
                    <!--//address-->
                    <!--address-->
                    <div class="column">
                        <h5>Staff</h5>
                        <address>
                            <p>
                            @foreach($staffs as $user)
                                <!--team-member-->
                                <a href="{{ route('profile.details', $user->username) }}">{{ $user->username }}</a><br>
                                <!--//team-member-->
                            @endforeach
                            </p>
                        </address>
                    </div>
                    <!--//address-->
                    <!--address-->
                    <div class="column">
                        <h5>AwokenDevs</h5>
                        <address>
                            <p>
                            @foreach($devs as $user)
                                <!--team-member-->
                                <a href="{{ route('profile.details', $user->username) }}">{{ $user->username }}</a><br>
                                <!--//team-member-->
                            @endforeach
                            </p>
                        </address>
                    </div>
                    <!--//address-->
                     <!--address-->
                    <div class="column">
                        <h5>Community Managers</h5>
                        <address>
                            <p>
                            @foreach($communitymanagers as $user)
                                <!--team-member-->
                                <a href="{{ route('profile.details', $user->username) }}">{{ $user->username }}</a><br>
                                <!--//team-member-->
                            @endforeach
                            </p>
                        </address>
                    </div>
                    <!--//address-->
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
