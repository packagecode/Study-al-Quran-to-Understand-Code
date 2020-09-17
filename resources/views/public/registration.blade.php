@extends('layouts.public',['title'=>'Registation'])
@section('cssScript')
    <style>
        .invalid-feedback {
            display: block !important;
        }

      .form-control{
        min-height:1.9em !important;
        padding: .07em .5em !important;
      }
      .multi-hori{
        float: left;
      }
      .hassan{
        text-align: center;
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
                <div class="col-md-12">
                    <div class="head text-center mb-5">
                <h4>Registration Form</h4>
                </div>
                    <!-- <div>
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
                    </div> -->
                    <div data-form-type="formoid">                             <form role="form" method="post" action="{{route('registration.store')}}" enctype="multipart/form-data">
                            @csrf
                            
                                <div class="col-md-4 multi-hori  @error('classname') has-error @enderror" data-for="classname">
                                    <input type="text" class="form-control input" name="classname" data-form-field="Class Name"
                                           placeholder="Class Name" required="" value="{{old('classname')}}" id="classname-form4-1q">
                                    @error('classname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 multi-hori  @error('name') has-error @enderror"
                                     data-for="name">
                                    <input type="text" class="form-control input" name="name" data-form-field="Name"
                                           placeholder="Name" required="" value="{{old('name')}}" id="name-form4-1q">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 multi-hori  @error('fathername') has-error @enderror"
                                     data-for="fathername">
                                    <input type="text" class="form-control input" name="fathername" data-form-field="Fathername"
                                           placeholder="Father's Name"  value="{{old('fathername')}}" id="fathername-form4-1q">
                                    @error('fathername')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 multi-hori  @error('education') has-error @enderror"
                                     data-for="education">
                                    <input type="text" class="form-control input" name="education" data-form-field="Education"
                                           placeholder="Education"  value="{{old('education')}}" id="education-form4-1q">
                                    @error('education')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 multi-hori @error('professiondesignation') has-error @enderror"
                                     data-for="professiondesignation">
                                    <input type="text" class="form-control input" name="professiondesignation" data-form-field="Profession & Designation"
                                           placeholder="Profession & Designation"  value="{{old('professiondesignation')}}" id="professiondesignation-form4-1q">
                                    @error('professiondesignation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 multi-hori  @error('presentaddress') has-error @enderror"
                                     data-for="presentaddress">
                                    <input type="text" class="form-control input" name="presentaddress" data-form-field="Name"
                                           placeholder="Present Address" value="{{old('presentaddress')}}" id="presentaddress-form4-1q">
                                    @error('presentaddress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 multi-hori  @error('permanentaddress') has-error @enderror"
                                     data-for="permanentaddress">
                                    <input type="text" class="form-control input" name="permanentaddress" data-form-field="Permanent Address"
                                           placeholder="Permanent  Address"  value="{{old('permanentaddress')}}" id="permanentaddress-form4-1q">
                                    @error('permanentaddress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 multi-hori  @error('telephonemobile') has-error @enderror"
                                     data-for="telephonemobile">
                                    <input type="text" class="form-control input" name="telephonemobile" data-form-field="Telephone Mobile"
                                           placeholder="Telephone & Mobile"  value="{{old('telephonemobile')}}" id="telephonemobile-form4-1q">
                                    @error('telephonemobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 multi-hori  @error('email') has-error @enderror"
                                     data-for="email">
                                    <input type="text" class="form-control input" name="email" data-form-field="Name"
                                           placeholder="E-mail"  value="{{old('email')}}" id="email-form4-1q">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-4 multi-hori  @error('yearofjoin') has-error @enderror"
                                     data-for="yearofjoin">
                                    <input type="text" class="form-control input" name="yearofjoin" data-form-field="Year of join"
                                           placeholder="Year of join"  value="{{old('yearofjoin')}}" id="yearofjoin-form4-1q">
                                    @error('yearofjoin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            <div class="col-md-4 multi-hori  @error('photo') has-error @enderror" data-for="photo">
                                    <input type="file" class="form-control" name="photo"  id="photo-form4-1q">
                                    @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                 
                                <div class="clearfix"></div>
                            <div class="input-group-btn col-md-12" style="margin-top: 10px;">
                                 <button href="" type="submit" class="btn btn-primary btn-form display-4">Submit
                               </button>
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