@extends('layouts.adminMaster')

@section('stylesheets')
    <!-- datatables Styling  -->
    <link rel="stylesheet" href="../assets/css/plugins/datatables/jquery.dataTables.css" />

@endsection

@section('content')
    <div class="page-header">
        <h1><a href="createPage" class="btn btn-primary btn-circle">Add Page</a></h1>
    </div>
    <div class="page-header"><h1>Pages</h1></div>

    <div class="panel panel-default">
        <div class="panel-heading">Basic DataTable {{--{{ config('app.url') }}--}}</div>
        <div class="panel-body">

            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>SLUG</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pages as $page)
                    <tr class="odd">
                        <td>{{ $page->id }}</td>
                        <td>{{ $page->name }}</td>
                        <td>{{ $page->slug }}</td>
                        <td class="center"><a href="{{ App::make('url')->to('/') }}/cms/pages/edit/{{ $page->name }}">Edit</a></td>
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

