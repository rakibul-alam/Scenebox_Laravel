@extends('layouts.main')

@section('content')
<section class="w3l-text-8 genre-single">
    <div class="container py-5">
        <div class="d-grid-1 py-lg-4">
            <div class="text">
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

            {{-- you may also like --}}
                    {{-- <div class="grids-main ">
                        <div class="container py-lg-4">
                            <div class="headerhny-title">
                                <div class="headerhny-left">
                                    <h3 class="hny-title">You May Also Like</h3>
                                </div>
                            </div>
                                <div class="w3l-populohny-grids">
                                    <div class="item vhny-grid">
                                      <div class="box16 mb-0">
                                        <a href="http://www.sceneabox.com/play/bk58rKfeXII">
                                        <figure>
                                            <img class="img-fluid" src="{{ $content['image_location'] }}" alt="">
                                        </figure>
                                            <h3 class="title" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;"> Bikal Belar Pakhi</h3>
                                            <h4> <span class="post"><span class="fa fa-clock-o"> </span> 40:19
                                            </span>
                                            </h4>
                                          <span class="fa fa-play video-icon" aria-hidden="true"></span>
                                         </a>
                                       </div>
                                    </div>
                                </div>
                        </div>
                    </div> --}}
            {{-- you may also like --}}
        </div>
  </div>


</section>
@endsection

@push('scripts')
    <script>
        // videojs('my-player_html5_api', {}, function () {
        //     // Player is ready
        // });

        videojs('my-player').ready(function() {
            var myPlayer = this;

            // Show loader while waiting for the video to start
            my-player.on('waiting', function() {
                // Display loader
                document.querySelector('.custom-loader').style.display = 'block';
            });

            // Hide loader when the video is ready and playing
            my-player.on('playing', function() {
                // Hide loader
                document.querySelector('.custom-loader').style.display = 'none';
            });
        });
    </script>
@endpush



