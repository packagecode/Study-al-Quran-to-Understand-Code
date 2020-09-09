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
                        <form role="form" method="post" action="{{route('liveclass.store')}}">
                        @csrf
                        <!-- select -->
                            <div class="form-group @error('type') has-error @enderror">
                                <label>Video Type</label>
                                <select class="form-control" name="type" required>
                                    <option value="" selected disabled="disabled">Choose</option>
                                    <option value="1" {{ old('type') == '1' ? 'selected' : '' }}>Facebook Live</option>
                                    <option value="2" {{ old('type') == '2' ? 'selected' : '' }}>Facebook</option>
                                    <option value="3" {{ old('type') == '3' ? 'selected' : '' }}>Youtube Live</option>
                                    <option value="4" {{ old('type') == '4' ? 'selected' : '' }}>Youtube</option>
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
                                <input type="text" name="url"  value="{{old('url')}}" class="form-control" placeholder="Enter video url" required>
                                @error('url')
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