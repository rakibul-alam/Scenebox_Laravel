@extends('layouts.main')
@section('content')
    @if($data['contents'])
        <section class="w3l-grids">
            <div class="container py-lg-3 custom_height">
                @if(isset($contenttype['catname']))
                    <div class="headerhny-title">
                        <div class="w3l-title-grids">
                            <div class="headerhny-left">
                                <h3 class="hny-title">{{ $data['catname'] }}</h3>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="w3l-populohny-grids">
                    @foreach ($data['contents'] as $content)
                            <div class="item vhny-grid">
                                <div class="box16 mb-0">
                                    <a href="{{ route('play.home', $content["contentid"]) }}">
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
                                    <a class="title-gd" href="{{ route('play.home', $content["contentid"]) }}" style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">{{ $content['name'] }}</a>
                                </h2>
                            </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <div style="margin: 8px auto; display: block; text-align:center;"></div>
@endsection

@push('scripts')
@endpush
