@extends('layouts.main')

@section('content')

<section class="w3l-text-8 genre-single">
    <div class="container py-5">
        <div class="d-grid-1 py-lg-4">
            <div class="text">
                <div class="w3l-about4 new-block" id="about">
                    <div>
                        <video id="my-player_html5_api" class="video-js vjs-default-skin"  data-setup="{&quot;fluid&quot;: true, &quot;autoplay&quot;:true, &quot;playbackRates&quot;: [0.5,1,1.25,1.5, 2]
                        }"   controls preload="auto" poster="{{ $content['image_location'] }}" style="" tabindex="-1" role="application">
                            <source src="{{ $content['url'] }}" type="application/x-mpegURL">
                        </video>
                    </div>
                </div>

                <div class="genre-single-page my-lg-5 my-4">
                    <div class="row ab-grids-sec align-items-center">
                        <div class="col-lg-4 gen-right">
                            <a href="#"><img class="img-fluid" src="{{ $content['image_location'] }}"></a>
                        </div>
                        <div class="col-lg-4 gen-left pl-lg-4 mt-lg-0 mt-5">

                            <h3 class="hny-title">{{ $content['name'] }}</h3>
                            <p class="mt-2">{{$content['info']}}</p>

                            <div style="margin-top:15px;margin-bottom: 20px;">
                                <a href="http://www.sceneabox.com/subscription"><img class="subscribe_img" src="http://www.sceneabox.com/img/watch-full.png"></a>
                          </div>
                        </div>

                        <div class="col-lg-4 gen-right-1">
                            <div class="mb-3">
                                <p><b>Type</b> </p>
                                <p>{{ $content['type'] }} </p>
                            </div>
                            <div class="mb-3">
                                <p><b>Duration</b> </p>
                                <p>{{ $content['length2'] }} </p>
                            </div>
                            <div class="mb-3">
                                <p><b>By</b> </p>
                                <p>{{ $content['cp'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
      </div>
  </div>
</section>
@endsection

@push('scripts')
<script src="https://vjs.zencdn.net/7.14.3/video.js"></script>
    <script>
        videojs('my-player_html5_api', {}, function () {
            // Player is ready
        });
    </script>
@endpush



