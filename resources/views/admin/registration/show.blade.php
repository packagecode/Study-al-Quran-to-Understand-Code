@extends('layouts.admin',['title'=>'Show Registration'])
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
                        <form role="form" method="post" action="{{route('registration.show',$registration->id)}}" enctype="multipart/form-data">
                        @csrf
                        <!-- text input -->
                             <div class="form-group  @error('photo') has-error @enderror">
                                <label>Profile Photo</label>
                                @isset($registration->photo)<a href="{{url($registration->photo)}}"><img src="{{url($registration->photo)}}" width="30%" alt=""></a>@endisset
                            </div>
                            <div class="form-group  @error('classname') has-error @enderror">
                                <label>Class Name</label>
                                <input type="text" name="classname" value="{{$registration->classname}}" readonly="" class="form-control" placeholder="Enter title" required>
                                @error('classname')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group  @error('name') has-error @enderror">
                                <label>Name</label>
                                <input type="text" name="name" value="{{$registration->name}}" readonly="" class="form-control" placeholder="Enter title" required>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group  @error('fathername  ') has-error @enderror">
                                <label>Father's Name</label>
                                <input type="text" name="fathername " value="{{$registration->fathername}}" readonly="" class="form-control" placeholder="Enter title" required>
                                @error('fathername')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group  @error('education') has-error @enderror">
                                <label>Education</label>
                                <input type="text" name="education" value="{{$registration->education}}" readonly="" class="form-control" placeholder="Enter title" required>
                                @error('education')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group  @error('professiondesignation') has-error @enderror">
                                <label>Profession Designation</label>
                                <input type="text" name="professiondesignation" value="{{$registration->professiondesignation}}" readonly="" class="form-control" placeholder="Enter title" required>
                                @error('professiondesignation')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group  @error('presentaddress') has-error @enderror">
                                <label>Present Address</label>
                                <input type="text" name="presentaddress" value="{{$registration->presentaddress}}" readonly="" class="form-control" placeholder="Enter title" required>
                                @error('presentaddress')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group  @error('presentaddress') has-error @enderror">
                                <label>Present Address</label>
                                <input type="text" name="presentaddress" value="{{$registration->presentaddress}}" class="form-control" placeholder="Enter title" readonly="" required>
                                @error('presentaddress')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group  @error('telephonemobile ') has-error @enderror">
                                <label>Telephone Mobile</label>
                                <input type="text" name="telephonemobile" value="{{$registration->telephonemobile}}" readonly="" class="form-control" placeholder="Enter title" required>
                                @error('telephonemobile')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group  @error('email ') has-error @enderror">
                                <label>Email</label>
                                <input type="text" name="email" value="{{$registration->email}}" readonly="" class="form-control" placeholder="Enter title" required>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group  @error('yearofjoin') has-error @enderror">
                                <label>Year Of Join   </label>
                                <input type="text" name="yearofjoin" value="{{$registration->yearofjoin}}" readonly="" class="form-control" placeholder="Enter title" required>
                                @error('yearofjoin')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
