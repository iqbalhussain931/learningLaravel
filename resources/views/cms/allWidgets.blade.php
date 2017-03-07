@extends('layouts.adminMaster')

@section('stylesheets')
    <!-- datatables Styling  -->
    <link rel="stylesheet" href="../assets/css/plugins/datatables/jquery.dataTables.css" />

@endsection

@section('content')
    <div class="page-header">
        <h1><button data-toggle="modal" data-target="#modal-addWidgets" class="btn btn-primary btn-circle">Add Widget</button></h1>
    </div>
    <!-- Modal Without header footer -->
    <div class="modal fade" id="modal-addWidgets" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content panel-body" >
                {!! Form::open(['class' => 'form-horizontal validator-form','id'=>'addWidgetForm']) !!}
                <div class="form-group">
                    <label class="col-lg-2 control-label">Name</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="name" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>


    <div class="page-header"><h1>Widgets</h1></div>

    <div class="panel panel-default">
        <div class="panel-heading">Basic DataTable</div>
        <div class="panel-body">

            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
                </thead>
                <tbody>
                @foreach($widgets as $widget)
                    <tr class="odd">
                        <td>{{ $widget->id }}</td>
                        <td>{{ $widget->name }}</td>
                        <td class="center"><a href="#">Edit</a></td>
                        <td class="center"><a href="#">Delete</a></td>
                    </tr>
                @endforeach
                {{--<tr class="even gradeC">
                    <td>Trident</td>
                    <td>Internet
                        Explorer 5.0</td>
                    <td>Win 95+</td>
                    <td class="center">5</td>
                    <td class="center">C</td>
                </tr>--}}
                </tbody>
            </table>

        </div>
    </div>

@endsection

@section('scripts')
    <!-- NanoScroll -->
    <script src="../js/plugins/nicescroll/jquery.nicescroll.min.js"></script>


    <!-- Data Table -->
    <script src="../js/plugins/datatables/jquery.dataTables.js"></script>
    <script src="../js/plugins/datatables/DT_bootstrap.js"></script>
    <script src="../js/plugins/datatables/jquery.dataTables-conf.js"></script>

@endsection

