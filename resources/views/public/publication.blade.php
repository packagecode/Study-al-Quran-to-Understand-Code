@extends('layouts.public',['title'=>'Publication'])

@section('content')
    <section class="mbr-section content5 cid-qTIxKpC7FN" id="content5-x">


        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">


                </div>
            </div>
        </div>
    </section>
    <style media="screen">
        .card {
            float: left;
            margin-right: 18px;
            width: 21rem;
            border: 2px solid #7a95b1;
            margin-bottom: 60px;
        }

        .card-body {
            padding: 0px;
        }

        .card-body .btn {
            margin: 0px;
            border-radius: 0px;
        }

        .card-title {
            margin-top: -5px;
            text-align: center;
            border-bottom: 1px solid;
            padding: 10px 0px;
            margin-bottom: 0px;
        }

        .card-img-top {
            width: 100%;
            height: 461px;
        }

        .list-group .list-group-item {
            border: none;
        }
    </style>
    <section class="section-table cid-qTIGE9TrYO" id="table1-1s">


        <div class="container container-table">


            <div class="container scroll">
                <div class="row">
                    <div class="col-md-12 pb-4">
                        <h2 class="text-center text-bold">Our Publication </h2>
                    </div>
                </div>
                @foreach($results as $result)
                    <div class="card">
                        @isset($result->cover_pic)<a href="{{url($result->cover_pic)}}"><img class="card-img-top"
                                                                                             src="{{url($result->cover_pic)}}"
                                                                                             width="30%"
                                                                                             alt="book"></a>@else
                            <img class="card-img-top" src="{{asset('demobook.png')}}" width="30%" alt="book">
                        @endisset
                        <div class="card-body">
                            <h5 class="card-title">{{$result->title}}</h5>
                        {{-- <p class="card-text">Date: {{str_replace('/','-',$result->date)}}</p>--}}
                        <!-- <a href="#" class="btnbtn-primary btn-sm">Go somewhere</a> -->
                            <a class="btn btn-primary btn-sm" style="width: 35%"
                               href="{{isset($result->vlink) ? $result->vlink : '#'}}" target="_blank">View</a>
                            <a class="btn btn-primary btn-sm" style="float:right"
                               href="{{isset($result->dlink) ? $result->dlink : '#'}}" target="_blank">Download</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="clearfix"></div>
            <div class="container table-info-container">

            </div>
        </div>
    </section>
@endsection
