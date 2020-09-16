@extends('layouts.admin',['title'=>'Create Publication'])
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
                        <form role="form" method="post" action="{{route('publication.store')}}" enctype="multipart/form-data">
                        @csrf
                        <!-- text input -->
                            <div class="form-group  @error('title') has-error @enderror">
                                <label>Title</label>
                                <input type="text" name="title"  value="{{old('title')}}" class="form-control" placeholder="Enter title" required>
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group @error('date') has-error @enderror">
                                <label>Date</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="date" value="{{old('date')}}" class="form-control pull-right" id="datepicker" required>
                                </div>
                                <!-- /.input group -->
                                @error('date')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- text input -->
                            <div class="form-group  @error('vlink') has-error @enderror">
                                <label>View Link</label>
                                <input type="text" name="vlink"  value="{{old('vlink')}}" class="form-control" placeholder="Enter video link" >
                                @error('vlink')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group  @error('dlink') has-error @enderror">
                                <label>Download Link</label>
                                <input type="text" name="dlink"  value="{{old('dlink')}}" class="form-control" placeholder="Enter download link" >
                                @error('dlink')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group  @error('cover_pic') has-error @enderror">
                                <label>Cover Photo (Width: 800px & Height : 1060px)</label>
                                <input type="file" name="cover_pic"  class="form-control">
                                @error('cover_pic')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group  @error('priority') has-error @enderror">
                                <label>Priority</label>
                                <input type="number" min="0" name="priority"  value="{{old('priority')}}" class="form-control" >
                                @error('priority')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- select -->
                            <div class="form-group @error('status') has-error @enderror">
                                <label>Status</label>
                                <select class="form-control" name="status" required>
                                    <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Active</option>
                                    <option value="2" {{ old('status') == '2' ? 'selected' : '' }}>De-Active</option>
                                </select>
                                @error('status')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
