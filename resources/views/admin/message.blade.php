@extends('layouts.admin',['title'=>$pageTitle])
@section('cssScript')
@stop
@section('content')
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">Activity</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="activity">
                <!-- Post -->
                @foreach($results as $result)
                    <div class="post">
                        <div class="user-block">
                            <img class="img-circle img-bordered-sm" src="{{asset('admin/dist/img/user1-128x128.jpg')}}"
                                 alt="user image">
                            <span class="username">
                          <a href="#">{{$result->name}}</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                            <span class="description">{{ \Carbon\Carbon::parse($result->created_at)->diffForHumans() }}</span>
                        </div>
                        <!-- /.user-block -->
                        <spna><strong>Email : </strong>{{$result->email}}</spna>
                        <br>
                        <spna><strong>Phone : </strong>{{$result->phone}}</spna>
                        <br>
                        <p>
                            <strong>Message : </strong> {{$result->message}}
                        </p>
                    </div>
                    <!-- /.post -->
                @endforeach
            </div>
        </div>
        <!-- /.tab-content -->
    </div>
@stop