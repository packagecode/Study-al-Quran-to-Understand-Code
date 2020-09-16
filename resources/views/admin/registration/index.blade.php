@extends('layouts.admin',['title'=>'List Registration'])
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped ">
                        <thead>
                        <tr>
                            <th>SI</th>
                            <th>Class name</th>
                            <th>Name</th>
                            <th>Profile photo</th>
                            <th>Father Name</th>
                            <th>Education</th>
                            <th>Profession Designation</th>
                            <th>Present Address</th>
                            <th>Permanent Address</th>
                            <th>Telephonemobile</th>
                            <th>Email</th>
                            <th>Year of join</th>
                            <th>Action</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($results as $key => $result)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$result->classname}}</td>
                                <td>{{$result->name}}</td>
                                <td>@isset($result->photo)<a href="{{url($result->photo)}}"><img src="{{url($result->photo)}}" width="50%" alt=""></a>@endisset
                                </td>
                                <td>{{$result->fathername}}</td>
                                <td>{{$result->education}}</td>
                                <td>{{$result->professiondesignation}}</td>
                                <td>{{$result->presentaddress}}</td>
                                <td>{{$result->permanentaddress}}</td>
                                <td>{{$result->telephonemobile}}</td>
                                <td>{{$result->email}}</td>
                                <td>{{$result->yearofjoin}}</td>
                                <td>
                                    <a href="{{route('registration.edit',$result->id)}}" class=""><i
                                                class="fa fa-edit"></i></a>
                                    <a href="{{route('registration.show',$result->id)}}" class=""><i
                                                class="fa fa-eye"></i></a>
                                    <a href="javascript:void(0)" class="text-danger destroyRegistration"
                                       data-toggle="modal"
                                       data-action="{{  route('registration.destroy',$result->id) }}"
                                       data-id="{{$result->id}}"
                                       data-target="#modal-danger"><i class="fa fa-trash"></i></a>
                                </td>
                                
                                
                            </tr>
                        @endforeach
                        </tbody>
                         <tfoot>
                        <tr>
                            <th>SI</th>
                            <th>Class name</th>
                            <th>Name</th>
                            <th>Profile photo</th>
                            <th>Father Name</th>
                            <th>Education</th>
                            <th>Profession Designation</th>
                            <th>Present Address</th>
                            <th>Permanent Address</th>
                            <th>Telephonemobile</th>
                            <th>Email</th>
                            <th>Year of join</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="modal fade" id="modal-danger">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" id="registration_delete" method="POST">
                    @method('DELETE')
                    @csrf
                    <div class="modal-header bg-danger">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Delete Registration</h4>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div> -->
    <!-- /.modal -->
@endsection
 @section('jsScript')
    <script>
        $(function () {
            $('#example1').DataTable();
        });
        $(".destroyRegistration").click(function () {
            var url = $(this).data('action');
            $("#registration_delete").attr('action', url);
        })
    </script>
@stop 
