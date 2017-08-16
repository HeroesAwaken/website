@extends('partials.layout')

@section('pageTitle', 'Forum - ')

@section('content')

    @include('partials.inner_slider')

    <div class="content-top"></div>

    <section id="main-content">

        <div class="row">
            <div class="small-16 columns">
                <nav>
                    <h3>
                        @lang('layout.forum')
                    </h3>
                </nav>
                <div class="big-sep"></div>
            </div>
        </div>

        <div class="row">
            <table>
                <thead>
                <tr>
                    <th>@lang('forum.forum_name')</th>
                    <th>@lang('forum.posts')</th>
                    <th>@lang('forum.comments')</th>
                    <th>@lang('forum.last_post')</th>
                </tr>
                </thead>
                <tbody>
                    {{--<tr class="forum-category">--}}
                        {{--<td colspan="5">Official Threads</td>--}}
                    {{--</tr>--}}
                    @foreach($forums as $index => $forum)
                        <tr>
                            <td style="width:75%">
                                <p style="margin-bottom: 0rem;">
                                    <b><a href="{{ route('forums.details', $forum->id) }}">{{ $forum->name }}</a></b><br />
                                    {{ $forum->description }}
                                </p>
                            </td>
                            <td>{{ $forum->topics->count() }}</td>
                            <td>{{ $forum->countComments() }}</td>
                            <td>
                                @if($forum->topics->last())
                                    <p style="margin-bottom: 0rem;">
                                        <a href="{{ route('forums.posts', [$forum->id, $forum->topics->last()->topic_id]) }}">{{ $forum->topics->last()->created_at->diffForHumans() }}</a><br />
                                        <small>@lang('forum.by') <a href="{{ route('profile.details', $forum->topics->last()->author->username) }}">{{ $forum->topics->last()->author->username }}</a></small>
                                    </p>
                                @else
                                    <p style="margin-bottom: 0rem;">
                                        @lang('forum.no_comments')
                                    </p>
                                @endif
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

@stop
