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
                        <form role="form" method="post" action="{{route('quranclass.update',$quranClass->id)}}">
                        @csrf
                        <!-- text input -->
                            <div class="form-group  @error('day') has-error @enderror">
                                <label>Day</label>
                                <input type="text" name="day"  value="{{$quranClass->day}}" class="form-control" placeholder="Enter day" required>
                                @error('day')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group  @error('time') has-error @enderror">
                                <label>Time</label>
                                <input type="text" name="time"  value="{{$quranClass->time}}" class="form-control" placeholder="Enter time" required>
                                @error('time')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group  @error('place') has-error @enderror">
                                <label>Place</label>
                                <input type="text" name="place"  value="{{$quranClass->place}}" class="form-control" placeholder="Enter place" >
                                @error('place')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group  @error('priority') has-error @enderror">
                                <label>Priority</label>
                                <input type="number" min="0" name="priority"  value="{{$quranClass->priority}}" class="form-control" placeholder="Enter priority" required>
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