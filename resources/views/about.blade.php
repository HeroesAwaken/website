@extends('partials.layout')

@section('content')

    @include('partials.inner_slider')

    <div class="content-top"></div>

    <section id="main-content">

        <div class="row">
            <div class="small-16 columns">
                <h1>About Us</h1>
                <div class="big-sep"></div>
            </div>
        </div>

        <div class="row">
            <div class="small-16 columns">
                <p>
                    The heroes awaken was found and opened by Makahost for the public 2017-06-30 and the team only has one goal, and that is to revive the game EA once made and closed their servers for. Heroes Awaken is a non profit community with open ideas for new suggestions and even new devs or staff members. If you feel like this is any kind of role for you, go to our contact page and talk to someone there.
                </p>

            </div>
        </div>

        <div class="row team">
            <div class="small-16 columns">
                <div class="row small-up-1 medium-up-2 large-up-3">

                    <!--team-member-->
                    <div class="column team-member">
                        <div class="photo">
                            <img src="{{ asset('images/placeholders/about.png') }}" class="" alt="">
                        </div>
                        <h5><a href="{{ route('profile.details', 'makahost') }}">MakaHost</a></h5>
                        <p>Founder, Developer &amp; Go-To Guy</p>
                    </div>
                    <!--//team-member-->

                    <!--team-member-->
                    <div class="column team-member">
                        <div class="photo">
                            <img src="{{ asset('images/about/lyngholm.gif') }}" class="" alt="">
                        </div>
                        <h5><a href="{{ route('profile.details', 'lyngholm') }}">Lyngholm</a></h5>
                        <p>Staff, Developer &amp; Coordinator</p>
                    </div>
                    <!--//team-member-->

                    <!--team-member-->
                    <div class="column team-member">
                        <div class="photo">
                            <img src="{{ asset('images/placeholders/about.png') }}" class="" alt="">
                        </div>
                        <h5>SD149</h5>
                        <p>Staff &amp; Developer</p>
                    </div>
                    <!--//team-member-->

                    <!--team-member-->
                    <div class="column team-member">
                        <div class="photo">
                            <img src="{{ asset('images/placeholders/about.png') }}" class="" alt="">
                        </div>
                        <h5>Absent</h5>
                        <p>Staff &amp; Designer</p>
                    </div>
                    <!--//team-member-->

                    <!--team-member-->
                    <div class="column team-member">
                        <div class="photo">
                            <img src="{{ asset('images/placeholders/about.png') }}" class="" alt="">
                        </div>
                        <h5>Doge</h5>
                        <p>Awaken Developer &amp; Doge</p>

                    </div>
                    <!--//team-member-->

                    <!--team-member-->
                    <div class="column team-member">
                        <div class="photo">
                            <img src="{{ asset('images/placeholders/about.png') }}" class="" alt="">
                        </div>
                        <h5>Ray</h5>
                        <p>Staff</p>
                    </div>
                    <!--//team-member-->

                    <!--team-member-->
                    <div class="column team-member">
                        <div class="photo">
                            <img src="{{ asset('images/placeholders/about.png') }}" class="" alt="">
                        </div>
                        <h5>Synaxis</h5>
                        <p>Staff</p>

                    </div>
                    <!--//team-member-->

                    <!--team-member-->
                    <div class="column team-member">
                        <div class="photo">
                            <img src="{{ asset('images/about/warp.gif') }}" class="" alt="">
                        </div>
                        <h5>Warp Productions</h5>
                        <p>Awaken Developer, Wolf, SysAdmin &amp; Video Editor</p>
                    </div>
                    <!--//team-member-->

                    <!--team-member-->
                    <div class="column team-member">
                        <div class="photo">
                            <img src="{{ asset('images/placeholders/about.png') }}" class="" alt="">
                        </div>
                        <h5>Heax</h5>
                        <p>Staff</p>

                    </div>
                  <!--//team-member-->

                  <!--team-member-->
                    <div class="column team-member">
                        <div class="photo">
                          <a href="{{ route('profile.details', 'wazz') }}"target="_blank">
                            <img src="{{ asset('images/about/wazz.png') }}" class="" alt="">
                          </a>
                        </div>
                        <h5><a href="{{ route('profile.details', 'wazz') }}">Wazz</a></h5>
                        <p>Awaken Developer &amp; <a href="https://www.youtube.com/channel/UCHkNbfx2zlWizm1Tevux6bw"target="_blank"><u>Youtuber</u></a></p>
                    </div>
                    <!--//team-member-->

                    <!--team-member-->
                    <div class="column team-member">
                        <div class="photo">
                            <img src="{{ asset('images/about/Snow_.jpg') }}" class="" alt="">
                        </div>
                        <h5><a href="{{ route('profile.details', 'snow') }}">Snow</a></h5>
                        <p>Staff &amp; Designer</p>
                    </div>
                    <!--//team-member-->

                          <!--team-member-->
                    <div class="column team-member">
                        <div class="photo">
                            <img src="{{ asset('images/placeholders/about.png') }}" class="" alt="">
                        </div>
                        <h5>Vahdek</h5>
                        <p>Awaken Developer</p>
                    </div>
                    <!--//team-member-->

                           <!--team-member-->
                    <div class="column team-member">
                        <div class="photo">
                            <img src="{{ asset('images/placeholders/about.png') }}" class="" alt="">
                        </div>
                        <h5>Crowscream</h5>
                        <p>Staff &amp; Developer</p>
                    </div>
                    <!--//team-member-->

                      <!--team-member-->
                    <div class="column team-member">
                        <div class="photo">
                            <img src="{{ asset('images/about/lord_squirrel.gif') }}" class="" alt="">
                        </div>
                        <h5>Lord Squirrel</h5>
                        <p>Awaken Developer</p>
                    </div>
                    <!--//team-member-->
                    
                     <!--team-member-->
                    <div class="column team-member">
                        <div class="photo">
                            <img src="{{ asset('images/placeholders/about.png') }}" class="" alt="">
                        </div>
                        <h5>Hazriel</h5>
                        <p>Awaken Developer</p>
                    </div>
                    <!--//team-member-->
                    
                     <!--team-member-->
                    <div class="column team-member">
                        <div class="photo">
                            <img src="{{ asset('images/placeholders/about.png') }}" alt="">
                        </div>
                        <h5>Jefalo</h5>
                        <p>Awaken Developer &amp; Game Contributer</p>
                    </div>
                    <!--//team-member-->


                </div>
            </div>
        </div>

    </section>

@endsection
