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
                                            <a href="#" class="popup-with-zoom-anim play-view1" onclick="clickLink()">
                                                <span class="video-play-icon fa fa-play">
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

                                    <input type="text" id="url" style="width:100%" value="https://stream.bdflixlive.com/xYDHlandhUElzhdoqk/mp4:iDSdCZhqEqk.mp4/playlist.m3u8"> <input type="button" id="btn" value="play">
                                    <video id="video" class="video-js vjs-default-skin" preload="none" crossorigin="true" controls width="640" height="268" controls>
                                    </video>
                                    <div class="box16 mb-0">

                                        <a href="#" onclick="clickLink()">
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
                                        <a class="title-gd" href="/play/EB43pg3V3Bo" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">{{ $content['name'] }}</a>
                                    </h2>
                                </div>
                            @endif
                        @endforeach
                        </div>
                    </div>
                </section>
            @endif
        @endif


        {{-- @foreach ($contenttype['contents'] as $index => $content)
        <a href="{{ $content['contentid'] }}">Show</a>
        @endforeach --}}
    @endforeach
    <div style="margin: 8px auto; display: block; text-align:center;">
    </div>

@endsection

@push('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/5.10.2/video.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-hls/3.0.2/videojs-contrib-hls.js"></script>
    <script>
        // Ensure jQuery is loaded before this script
        $(document).ready(function() {
            // Handle click events on elements with the class 'play-video'
            $('.play-video').on('click', function(e) {
                e.preventDefault();

                // Get the video URL from the data-video-url attribute
                var videoUrl = $(this).data('https://banglaflix.com.bd/sceneabox/api/flixlist_json_app_single');

            });
        });

        $(document).ready(function() {
  $("#btn").on("click", function() {
    $("#video").html("<source src='"+ $("#url").val() +"' type='application/x-mpegURL'>");
    var ply = videojs("video");
    ply.play();
  });
});
    </script>
@endpush



