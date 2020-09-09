@extends('layouts.public',['title'=>'Gallery'])
@section('cssScript')
    <link rel="stylesheet" href="assets/gallery/style.css">
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
@section('content')
    <section class="mbr-section content5 cid-qTIxN089Tx" id="content5-13">


        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">


                </div>
            </div>
        </div>
    </section>

    <section class="mbr-section content5 cid-qTIzpmsS4U" id="content5-1m">


        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">


                </div>
            </div>
        </div>
    </section>
    <section class="mbr-section content5 cid-qTIxN33pwr" id="content5-17">


        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-5">
                        {{--                        <br>সফল হজ্জ সম্পর্কিত--}}
                        {{--                        উপস্থাপনা--}}
                        <div><br></div>
                    </h2>


                </div>
            </div>
        </div>
    </section>

    <section class="mbr-gallery mbr-slider-carousel cid-qTIzRq5yKV" id="gallery1-1n">

        <div class="container">
            <div class="row">
                @foreach($gallery as $result)
                    <div class="col-md-4 vg">
                        <iframe height="215" width="350" src="{{$result->url}}" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>
                @endforeach
            </div>
            {{--  <div><!-- Filter --><!-- Gallery -->
                  <div class="mbr-gallery-row">
                      <div class="mbr-gallery-layout-default">
                          <div>
                              <div>
                                  <div class="mbr-gallery-item mbr-gallery-item--p6 video-slide"
                                       data-video-url="https://www.youtube.com/watch?v=DX6D7WhlFs4&amp;feature=youtu.be"
                                       data-tags="Awesome">
                                      <div href="#lb-gallery1-1n" data-slide-to="0" data-toggle="modal">
                                          <div></div>
                                          <img alt="" src="assets/images/2018-5-4-16-7-19-496222.jpg"><span
                                                  class="icon-video"></span><span
                                                  class="mbr-gallery-title mbr-fonts-style display-7">সফল হজ্জ সম্পর্কিত উপস্থাপনা ১<br></span>
                                      </div>
                                  </div>
                                  <div class="mbr-gallery-item mbr-gallery-item--p6 video-slide"
                                       data-video-url="https://www.youtube.com/watch?v=M4Q15keRHJg&amp;feature=youtu.be"
                                       data-tags="Awesome">
                                      <div href="#lb-gallery1-1n" data-slide-to="1" data-toggle="modal">
                                          <div></div>
                                          <img alt="" src="assets/images/2018-5-4-16-6-49-4357.jpg"><span
                                                  class="icon-video"></span><span
                                                  class="mbr-gallery-title mbr-fonts-style display-7">সফল হজ্জ সম্পর্কিত উপস্থাপনা ২<br></span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="clearfix"></div>
                      </div>
                  </div><!-- Lightbox -->
                  <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1"
                       data-keyboard="true" data-interval="false" id="lb-gallery1-1n">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-body">
                                  <div class="carousel-inner">
                                      <div class="carousel-item active video-container"><img
                                                  src="assets/images/gallery00.jpg" alt=""></div>
                                      <div class="carousel-item video-container"><img src="assets/images/gallery04.jpg"
                                                                                      alt=""></div>
                                  </div>
                                  <a class="carousel-control carousel-control-prev" role="button" data-slide="prev"
                                     href="#lb-gallery1-1n"><span class="mbri-left mbr-iconfont"
                                                                  aria-hidden="true"></span><span
                                              class="sr-only">Previous</span></a><a
                                          class="carousel-control carousel-control-next" role="button" data-slide="next"
                                          href="#lb-gallery1-1n"><span class="mbri-right mbr-iconfont"
                                                                       aria-hidden="true"></span><span class="sr-only">Next</span></a><a
                                          class="close" href="#" role="button" data-dismiss="modal"><span class="sr-only">Close</span></a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>--}}
        </div>

    </section>

@endsection
@section('jsScript')
    <script src="assets/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
    <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
    <script src="assets/gallery/player.min.js"></script>
    <script src="assets/gallery/script.js"></script>
    <script src="assets/formoid/formoid.min.js"></script>
@endsection