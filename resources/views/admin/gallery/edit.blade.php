@extends('layouts.admin',['title'=>'Edit Gallery'])
@section('cssScript')
    <style>
        .datepicker {
            z-index: 9999 !important;
        }
    </style>
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
                        <form role="form" method="post" action="{{route('gallery.update',$gallery->id)}}" enctype="multipart/form-data">
                        @csrf
                        <!-- text input -->
                            <div class="form-group @error('type') has-error @enderror">
                                <label>Type</label>
                                <select class="form-control" name="type" required>
                                    <option value="" selected disabled="">Choose</option>
                                    <option value="1" {{ $gallery->type == '1' ? 'selected' : '' }}>Gallery</option>
                                    <option value="2" {{ $gallery->type == '2' ? 'selected' : '' }}>Home page Video</option>
                                </select>
                                @error('type')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- text input -->
                            <div class="form-group  @error('url') has-error @enderror">
                                <label>Video Url</label>
                                <input type="text" name="url"  value="{{$gallery->url}}" class="form-control" placeholder="Enter video url" >
                                @error('url')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- select -->
                            <div class="form-group @error('status') has-error @enderror">
                                <label>Status</label>
                                <select class="form-control" name="status" required>
                                    <option value="" selected disabled="">Choose</option>
                                    <option value="1" {{ $gallery->status == '1' ? 'selected' : '' }}>Active</option>
                                    <option value="2" {{ $gallery->status == '2' ? 'selected' : '' }}>De-Active</option>
                                </select>
                                @error('status')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="box-footer">
                                <input type="hidden" name="_method" value="PATCH">
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
