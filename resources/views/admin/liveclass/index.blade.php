@extends('layouts.admin',['title'=> $pageTitle])
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body  table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>SI</th>
                            <th>Url</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($results as $key => $result)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$result->url}}</td>
                                <td>
                                    @php
                                        if ($result->type == '1')
                                            $type = 'Facebook Live';
                                        elseif ($result->type == '2')
                                            $type = 'Facebook';
                                        elseif ($result->type == '3')
                                            $type = 'Youtube Live';
                                        elseif ($result->type == '4')
                                            $type = 'Youtube';
                                    @endphp
                                    {{$type}}
                                </td>
                                <td>
                                    <a href="{{route('liveclass.edit',$result->id)}}" class=""><i
                                                class="fa fa-edit"></i></a>
                                    <a href="javascript:void(0)" class="text-danger destroyLiveclass"
                                       data-toggle="modal"
                                       data-action="{{  route('liveclass.destroy',$result->id) }}"
                                       data-id="{{$result->id}}"
                                       data-target="#modal-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>SI</th>
                            <th>Url</th>
                            <th>Type</th>
                            <th>Action</th>
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
                <form action="" id="liveclass_delete" method="POST">
                    @method('DELETE')
                    @csrf
                    <div class="modal-header bg-danger">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Delete Live Video</h4>
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
    </div>
    <!-- /.modal -->
@endsection
@section('jsScript')
    <script>
        $(function () {
            $('#example1').DataTable();
        });
        $(".destroyLiveclass").click(function () {
            var url = $(this).data('action');
            $("#liveclass_delete").attr('action', url);
        })
    </script>
@stop
