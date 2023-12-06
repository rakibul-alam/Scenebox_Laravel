@extends('layouts.main')

@section('content')

<section class="w3l-text-8 genre-single">
    <div class="container py-5">
        <div class="d-grid-1 py-lg-4">
            <div class="text">
                @foreach($data['contents'] as $content)
                <div class="video-container">
                    <video id="my-player" class="video-js vjs-default-skin vjs-big-play-button_cust w-100"  data-setup="{&quot;fluid&quot;: true, &quot;autoplay&quot;:true, &quot;playbackRates&quot;: [0.5,1,1.25,1.5, 2]
                    }"   controls preload="auto" poster="{{ $content['image_location'] }}" style="" tabindex="-1" role="application">
                        <source src="{{ $content['url'] }}" type="application/x-mpegURL">
                    </video>

                    <div class="custom-loader">
                        <img src="{{ asset('assets/images/p6.gif') }}" alt="Loader">
                    </div>
                </div>
                <div class="genre-single-page my-lg-5 my-4">

                        <div class="row ab-grids-sec align-items-center">
                            <div class="col-lg-4 gen-right">
                                <a href="#"><img class="img-fluid" src="{{ $content['image_location'] }}"></a>
                            </div>
                            <div class="col-lg-4 gen-left pl-lg-4 mt-lg-0 mt-5">
                                <h3 class="hny-title">{{ $content['name'] }}</h3>
                                <p class="mt-2">{{$content['name']}}</p>
                                {{-- <div style="margin-top:15px;margin-bottom: 20px;">
                                    <a href="{{ $content['url'] }}"><img class="subscribe_img" src="http://www.sceneabox.com/img/watch-full.png"></a>
                                </div> --}}
                            </div>
                            <div class="col-lg-4 gen-right-1">
                                <div class="mb-3">
                                    <p><b>Type</b> </p>
                                    <p>{{ $content['catname'] }} </p>
                                </div>
                                <div class="mb-3">
                                    <p><b>Duration</b> </p>
                                    <p>{{ $content['duration'] }} </p>
                                </div>
                                <div class="mb-3">
                                    <p><b>By</b> </p>
                                    <p>{{ $content['cp'] }}</p>
                                </div>
                            </div>
                        </div>
                        <hr> <!-- Add a horizontal line between videos for better separation -->
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
