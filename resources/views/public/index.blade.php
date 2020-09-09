@extends('layouts.public')

@section('content')
    <section class="mbr-section content5 cid-qQlGhyLXWj" id="content5-2">
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                </div>
            </div>
        </div>
    </section>

    @include('public.inc.slider')

    <section class="header3 cid-qQlJlEFv3o" id="header3-4">


        <div class="container">
            <div class="media-container-row">
                <div class="mbr-figure" style="width: 50%;">
                    <img src="assets/images/logo-150x125.png" alt="Mobirise" title="">
                </div>

                <div class="media-content">
                    <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-5"><strong>&nbsp;কোরআন বুঝে পড়ার
                            ওয়েবসাইট এ স্বাগতম</strong></h1>

                    <div class="mbr-section-text mbr-white pb-3 ">
                        <p class="mbr-text mbr-fonts-style display-7">পবিত্র আল-কুরআন আমাদের পূর্নাঙ্গ বিধান। এই জীবন
                            বিধান
                            অনুসরনেই রয়েছে আমাদের ইহকাল ও পরলৌকিক জীবনের সাফল্য। জীবনের প্রতি ক্ষেত্রে চলার পথে
                            আল-কুরআনেই
                            রয়েছে সঠিক দিক নির্দেশনা। তাই পবিত্র কুরআনের মর্মার্থ বুঝাসহ তা ঝাসহ তা অন জন্য আসুন
                            আল-কুরআন
                            পড়ি। আল-কুরআন এর সাথে চলি।
                            <br>
                            <br>একই আলোকে “Study Al Quran to Understand” পবিত্র কোরআন বুঝে পড়ুন –এই বিশেষ শিক্ষা
                            কার্যক্রম
                            এর সাপ্তাহিক ক্লাস চলছে।
                            <br>
                            <br><br>
                        </p>
                    </div>
                    <div class="mbr-section-btn d-none"><a class="btn btn-md btn-secondary display-4"
                                                           href="#">আরও
                            পড়ুন...</a></div>
                </div>
            </div>
        </div>

    </section>

    <section class="section-table cid-qTZ5yCuyef" id="table1-1t">


        <div class="container container-table">
            @isset($gallerys)
                @foreach($gallerys as $gallery)
                    <div class="row">
                        @isset($gallery->url)
                            <div class="col-md-12">
                                <iframe src="{{$gallery->url}}" frameborder="0" width="100%" height="480px"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                            </div>
                        @endisset
                    </div>
                @endforeach
            @endisset
            <h3 class="mbr-section-subtitle mbr-fonts-style align-center pb-5 mbr-light display-5"><strong>কোরআন ক্লাশের
                    সময়সূচী&nbsp;</strong></h3>
            <div class="table-wrapper">
                <div class="container">

                </div>

                <div class="container scroll">
                    <table class="table" cellspacing="0">
                        <thead>
                        <tr class="table-heads ">


                            <th class="head-item mbr-fonts-style display-7">বার/ দিন</th>
                            <th class="head-item mbr-fonts-style display-7">সময়</th>
                            <th class="head-item mbr-fonts-style display-7">স্থান</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($quranClass as $result)
                            <tr>
                                <td class="body-item mbr-fonts-style display-7">{{$result->day}}</td>
                                <td class="body-item mbr-fonts-style display-7">{{$result->time}}</td>
                                <td class="body-item mbr-fonts-style display-7">{{$result->place}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container table-info-container">

                </div>
            </div>
        </div>
    </section>



    {{-- <section class="mbr-section content5 cid-qQlNMzGcn1" id="content5-8">


         <div class="container">
             <div class="media-container-row">
                 <div class="title col-12 col-md-8">
                     <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-5">আমাদের
                         প্রকাশনাসমূহ&nbsp;</h2>


                 </div>
             </div>
         </div>
     </section>

     <section class="features17 cid-qQlNE2XZQ8" id="features17-7">


         <div class="container-fluid">
             <div class="media-container-row">
                 <div class="card p-3 col-12 col-md-6 col-lg-2">
                     <div class="card-wrapper">
                         <div class="card-img">
                             <a href="https://drive.google.com/file/d/1AdqsQZU-04oEAAcAseekFglz_qUnDfPq/view?usp=sharing"><img
                                         src="assets/images/untitled-1-171x254.jpg" alt="Mobirise" title=""></a>
                         </div>
                         <div class="card-box">
                             <h4 class="card-title pb-3 mbr-fonts-style display-4">Nurani</h4>

                         </div>
                     </div>
                 </div>

                 <div class="card p-3 col-12 col-md-6 col-lg-2">
                     <div class="card-wrapper">
                         <div class="card-img">
                             <a href="https://drive.google.com/file/d/1avU-5AeXt2mw9Nuxr_oAqXIfRHNnR5tq/view?usp=sharing"><img
                                         src="assets/images/untitled-1-171x254.jpg" alt="Mobirise" title=""></a>
                         </div>
                         <div class="card-box">
                             <h4 class="card-title pb-3 mbr-fonts-style display-4">Tazweed</h4>

                         </div>
                     </div>
                 </div>

                 <div class="card p-3 col-12 col-md-6 col-lg-2">
                     <div class="card-wrapper">
                         <div class="card-img">
                             <a href="https://drive.google.com/file/d/1s0S3cpLUFdTg7GEzu0N4fbv5Re9is6iH/view?usp=sharing"><img
                                         src="assets/images/untitled-1-171x254.jpg" alt="Mobirise" title=""></a>
                         </div>
                         <div class="card-box">
                             <h4 class="card-title pb-3 mbr-fonts-style display-4">Surah Al-Imran</h4>

                         </div>
                     </div>
                 </div>

                 <div class="card p-3 col-12 col-md-6 col-lg-2">
                     <div class="card-wrapper">
                         <div class="card-img">
                             <img src="assets/images/untitled-1-171x254.jpg" alt="Mobirise" title="">
                         </div>
                         <div class="card-box">
                             <h4 class="card-title pb-3 mbr-fonts-style display-4">
                                 Ampara
                             </h4>

                         </div>
                     </div>
                 </div>
                 <div class="card p-3 col-12 col-md-6 col-lg-2">
                     <div class="card-wrapper">
                         <div class="card-img">
                             <a href="https://drive.google.com/file/d/1695rFbkOrsUnYnW3r2HmS3nHaACePiRy/view?usp=sharing"><img
                                         src="assets/images/untitled-1-171x254.jpg" alt="Mobirise" title=""></a>
                         </div>
                         <div class="card-box">
                             <h4 class="card-title pb-3 mbr-fonts-style display-4">Al-Quran Bangla Translate</h4>

                         </div>
                     </div>
                 </div>
                 <div class="card p-3 col-12 col-md-6 col-lg-2">
                     <div class="card-wrapper">
                         <div class="card-img">
                             <a href="https://drive.google.com/file/d/1k3Dl9WMsjhS_8dWEHHGhEIIZl3r8ur8t/view?usp=sharing"><img
                                         src="assets/images/untitled-1-171x254.jpg" alt="Mobirise" title=""></a>
                         </div>
                         <div class="card-box">
                             <h4 class="card-title pb-3 mbr-fonts-style display-4">Quran Tajweed SAQ</h4>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section class="mbr-section content8 cid-qUgaOMjAU3" id="content8-1u">


         <div class="container">
             <div class="media-container-row title">
                 <div class="col-12 col-md-8">
                     <div class="mbr-section-btn align-center"><a class="btn btn-secondary display-4" href="page2.html">আরও
                             বইসমূহ</a></div>
                 </div>
             </div>
         </div>
     </section>--}}
@endsection
