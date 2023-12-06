@extends('layouts.main')
@section('content')
    @foreach ($data as $contenttype)
        @if($contenttype['contentviewtype']==4)
            <section class="w3l-main-slider position-relative" id="home">
                <div class="companies20-content">
                    <div class="owl-one owl-carousel owl-theme">
                        @foreach ($contenttype['contents'] as $content)
                            <div class="item">
                                <li>
                                    <div class="slider-info banner-web-view" style="background-size: cover; background-image: url({{ $content['image_location'] }})">
                                        <div class="banner-info box16">
                                            <a href="{{ route('play.home',$content["contentid"]) }}" class="play-view1">
                                                <span class="video-play-icon">
                                                    <span class="fa fa-play"></span>
                                                </span>
                                                <h6>Watch Trailer</h6>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        @if($contenttype['contentviewtype']==1 || $contenttype['contentviewtype']==2)
            @if($contenttype['contents'])
                <section class="w3l-grids">
                    <div class="container py-lg-3 custom_height">
                        <div class="headerhny-title">
                            <div class="w3l-title-grids">
                                <div class="headerhny-left">
                                    <h3 class="hny-title">{{ $contenttype['catname'] }}</h3>
                                </div>
                                <div class="headerhny-right text-lg-right">
                                    <h4><a class="show-title" href="genre.html">Show all</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="w3l-populohny-grids">

                            @foreach ($contenttype['contents'] as $index => $content)

                            @if ($index < 4)
                                <div class="item vhny-grid">
                                    <div class="box16 mb-0">
                                        <a href="{{ route('play.home',$content["contentid"]) }}">
                                            <figure>
                                                <img class="img-fluid" src="{{ $content['image_location'] }}" alt="">
                                            </figure>
                                            @if ($content['isfree'] == 0)
                                                    <img class="pre-img img-fluid" src="{{ asset('assets/images/c7.png') }}">
                                                @endif
                                            <div class="box-content">
                                                <h4>
                                                    <span class="post">
                                                        <span class="fa fa-clock-o"></span>
                                                        {{ $content['duration'] }}
                                                    </span>
                                                </h4>
                                            </div>
                                            <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                        </a>
                                    </div>
                                    <h2>
                                        <a class="title-gd" href="{{ route('play.home',$content["contentid"]) }}" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">{{ $content['name'] }}</a>
                                    </h2>
                                </div>
                            @endif
                        @endforeach
                        </div>
                    </div>
                </section>
            @endif
        @endif
    @endforeach
    <div style="margin: 8px auto; display: block; text-align:center;">
    </div>

@endsection

@push('scripts')

@endpush



