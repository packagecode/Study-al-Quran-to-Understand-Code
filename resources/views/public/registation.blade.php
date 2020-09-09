@extends('layouts.public',['title'=>'Registation'])
@section('cssScript')
    <style>
        .invalid-feedback {
            display: block !important;
        }
    </style>
@stop
@section('content')
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
                <div class="col-md-6">
                    <div>
                        <div class="icon-block pb-3">
                        <span class="icon-block__icon">
                            <span class="mbri-letter mbr-iconfont"></span>
                        </span>
                            <h4 class="icon-block__title align-left mbr-fonts-style display-5"><strong><span
                                            style="font-style: normal;">যোগাযোগঃ</span> &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong></h4>
                        </div>
                        <div class="icon-contacts pb-3">

                            <p class="mbr-text align-left mbr-fonts-style display-7">মোবাইল: +৮৮০১৫৫৩৫৬৯২৪৬
                                <br>ইমেইল: info@studyalqurantounderstand.org
                                <br>হেল্প লাইন: +৮৮০১৫৫৩৫৬৯২৪৬,+৮৮০১৮১৯৩১০৪৬৪
                                <br>ঢাকা ১০০০, বাংলাদেশ</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div data-form-type="formoid">
                        <div data-form-alert="" hidden="">ধন্যবাদ</div>
                        <form class="block mbr-form" action="{{route('contact.store')}}" method="post"
                              data-form-title="Mobirise Form">
                            @csrf
                            <input type="hidden" name="email" data-form-email="true"
                                   value="dI1nz4/U1snvYPy1KYXPWIZ+IkJanV0ROvxDYspE//zvoIuBXUEFLvf89pGJHFiNPSof5ncF/g7d6M7O37wGgOa3cbZNXMWYUoE2V2CKA9SmzSAaAsV0FvmDJi2q2YJH"
                                   data-form-field="Email">
                            <div class="row">
                                <div class="col-md-6 multi-horizontal  @error('name') has-error @enderror"
                                     data-for="name">
                                    <input type="text" class="form-control input" name="name" data-form-field="Name"
                                           placeholder="পূর্ণ নাম" required="" value="{{old('name')}}" id="name-form4-1q">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6 multi-horizontal  @error('phone') has-error @enderror"
                                     data-for="phone">
                                    <input type="text" class="form-control input" name="phone" data-form-field="Phone"
                                           placeholder="ফোন নাম্বার" required="" value="{{old('phone')}}" id="phone-form4-1q">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-12  @error('email') has-error @enderror" data-for="email">
                                    <input type="text" class="form-control input" name="email" data-form-field="Email"
                                           placeholder="ই-মেইল" required="" value="{{old('email')}}" id="email-form4-1q">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-12  @error('message') has-error @enderror" data-for="message">
                                    <textarea class="form-control input" name="message" rows="3"
                                              data-form-field="Message" placeholder="আপনার জিজ্ঞাসা "
                                              style="resize:none" id="message-form4-1q">{{old('message')}}</textarea>
                                    @error('message')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="input-group-btn col-md-12" style="margin-top: 10px;">
                                    <button href="" type="submit" class="btn btn-primary btn-form display-4">প্রেরণ
                                        করুন
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mbr-section content5 cid-qTIxOZ6nrH" id="content5-1j">

        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-5">গুগল ম্যপে আমাদের
                        অবস্থান</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="map1 cid-qTIoTcCNsI" id="map1-c">


        <div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.0624957867244!2d90.3812202607362!3d23.74515070578297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b9f65a8dc9%3A0x3f3645fbd409f707!2s25+Green+Rd%2C+Dhaka+1205!5e0!3m2!1sen!2sbd!4v1528379520413"
                    width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section>
@endsection