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
        .card{
            float: left;
            margin-right: 18px;
            width: 18rem;
            border: 2px solid #7a95b1;
            margin-bottom: 10px;
        }
        .card-title{
            height: 40px;
            text-align: justify;
        }
        .list-group .list-group-item{
            border: none;
        }
        #Important{
            padding-top: 50px;
        }
    </style>
    <section class="section-table cid-qTIGE9TrYO" id="table1-1s">
        <div class="container" id="Important">
            <div class="row">
                <div class="col-md-12 pb-4">
                    <h2>Important Links</h2>
                </div>
                <div class="">
                    <ul class="list-group">
                        @foreach($impLinks as $impLink)
                            <li class="list-group-item"> <a href="{{$impLink->url}}" target="_blank"> <i class="fa fa-link"></i> {{$impLink->title}}</a>  </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
