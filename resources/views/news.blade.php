@extends('partials.layout')

@section('pageTitle', 'News - ')

@section('content')

    @include('partials.inner_slider')

    <div class="content-top"></div>

    <section id="main-content">

    <div class="row">
        <div class="small-16 columns">
            <h1>@lang('layout.news')</h1>
            <div class="big-sep"></div>
        </div>
    </div>
       
    <div class="row blog-entries">

        @foreach(\App\News::all()->sortByDesc('date') as $news)
            <!-- NEWS POST START -->
            <div class="small-16 large-16 columns">

                <article class="blog-entry row">
                    <div class="article-date small-16 medium-2 columns">
                        <div>
                            <p>{{ $news->date->format('M') }} <span class="day">{{ $news->date->format('d') }}</span> <span class="year">{{ $news->date->format('Y') }}</span></p>
                        </div>
                    </div>

                    <div class="article-content small-16 medium-14 columns">
                        <h3>{{ $news->title }}</h3>
                        {!! $news->text !!}
                    </div>
                </article>
            </div>

            <div class="row">
                <div class="small-16 columns">
                    <div class="big-sep"></div>
                </div>
            </div>

        @endforeach

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
