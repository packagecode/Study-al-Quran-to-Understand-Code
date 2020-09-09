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
                        <form role="form" method="post" action="{{route('slider.update',$slider->id)}}"
                              enctype="multipart/form-data">
                        @csrf
                        <!-- text input -->
                            <div class="form-group  @error('file') has-error @enderror">
                                <label>Title</label>
                                <input type="file" name="file" class="form-control">
                                @error('file')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group  @error('priority') has-error @enderror">
                                <label>Priority</label>
                                <input type="number" min="0" name="priority" value="{{$slider->priority}}"
                                       class="form-control"
                                       placeholder="Enter priority" required>
                                @error('priority')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="box-footer">
                                {{Form::hidden('_method', 'PATCH')}}
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
@stop