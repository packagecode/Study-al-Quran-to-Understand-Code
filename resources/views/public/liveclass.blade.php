@extends('layouts.public',['title'=>'Live'])
@section('cssScript')
    <style>
        hr {
            border: 0;
            height: 3px;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
        }
        .vg {
            padding-top: 18px !important;
            padding-right: 0px !important;
        }
    </style>
@stop
@section('jsScript')

@stop
@section('content')
    <div id="fb-root"></div>
    <script async defer src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>

    <section class="mbr-section content5 cid-qTIxOTWev8" id="content5-1d">
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                </div>
            </div>
        </div>
    </section>

    <section class="mbr-section content5 cid-qTIBiwU3lL" id="content5-1o">
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                </div>
            </div>
        </div>
    </section>
    <section class="mbr-section form4 cid-qTIBze1OD7" id="form4-1q">
        <div class="container">
            <div class="row">
                @foreach($videos as $video)
                    @if ($video->type == '1')
                        <div class="col-md-4 vg">
                            <div id="fb-root"></div>
                            <!-- Your embedded video player code -->
                            <div class="fb-video"
                                 data-href="{{$video->url}}"
                                 data-width="500" data-height="300"
                                 data-allowfullscreen="true"
                                 data-autoplay="true"
                                 data-show-captions="true">
                            </div>
                            <span class="product-new-top" style="margin-top: 18px;">Live</span>
                        </div>
                    @elseif($video->type == '3')
                        <div class="col-md-4 vg">
                            <iframe height="300" width="450" src="{{$video->url}}" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            <span class="product-new-top" style="margin-top: 18px;">Live</span>
                        </div>
                    @endif
                @endforeach
            </div>
            @if ($video->type == '1' )
                <hr>
            @endif
            <div class="row">
                @foreach($videos as $video)
                    @if($video->type == '2' )
                        <div class="col-md-4 vg">
                            <iframe height="215" width="350" src="{{$video->url}}" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>
                    @elseif ($video->type == '4' )
                        <div class="col-md-4 vg">
                            <div id="fb-root"></div>
                            <!-- Your embedded video player code -->
                            <div class="fb-video"
                                 data-href="{{$video->url}}"
                                 data-width="500" data-height="300"
                                 data-show-text="false">
                            </div>
                        </div>
                    @else
                        <div class="col-md-4 vg">
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection