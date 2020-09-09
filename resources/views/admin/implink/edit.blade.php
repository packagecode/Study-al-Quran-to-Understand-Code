@extends('layouts.admin',['title'=> $pageTitle])
@section('cssScript')
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title"></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form role="form" method="post" action="{{route('implink.update',$impLink->id)}}">
                        @csrf
                        <!-- select -->
                            <div class="form-group @error('title') has-error @enderror">
                                <label>Title</label>
                                <input type="text" name="title"  value="{{$impLink->title}}" class="form-control" placeholder="Enter Title" required>
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <!-- text input -->
                            <div class="form-group  @error('url') has-error @enderror">
                                <label>Url</label>
                                <input type="text" name="url"  value="{{$impLink->url}}" class="form-control" placeholder="Enter  url" required>
                                @error('url')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        <!-- text input -->
                            <div class="form-group  @error('priority') has-error @enderror">
                                <label>Priority</label>
                                <input type="number" name="priority"  value="{{$impLink->priority}}" class="form-control" min="0" required>
                                @error('priority')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="box-footer">
                                {{Form::hidden('_method', 'PATCH')}}
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jsScript')
    <script>
        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })
    </script>
@stop
