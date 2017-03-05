@extends('layouts.adminMaster')

@section('stylesheets')
    <!-- Switch Buttons  -->
    <link rel="stylesheet" href="../css/switch-buttons/switch-buttons.css" />
    <!-- Chosen Select  -->
    <link rel="stylesheet" href="../css/plugins/bootstrap-chosen/chosen.css" />


@endsection

@section('content')

    <div class="page-header">
        <h1>New Page <button data-toggle="modal" data-target="#modal-addWidgets" class="btn btn-primary pull-right btn-circle">Add Widget</button></h1>
    </div>
    <!-- Modal Without header footer -->
    <div class="modal fade" id="modal-addWidgets" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content panel-body" >
                <div class="form-group col-lg-6 multiWidgets">
                    <span>Select Multiple</span>
                    <div class="switch-button xs showcase-switch-button">
                        <input id="switch-button-1" type="checkbox" name="multiWidgets">
                        <label for="switch-button-1"></label>
                    </div>
                </div>
                <div class="form-group col-lg-12" id="addWidgetsAll">
                    @foreach($allWidgets as $widget)
                        <span class="btn btn-default btn-circle" data-widgetID="{{ $widget->id }}">
                            {{ $widget->name }}
                            <span class="innerWidgetAddBtn"><i class="fa fa-plus"></i></span>
                        </span>
                    @endforeach
                </div>
                <div class="col-lg-12">
                    <button type="button" class="btn btn-primary btn-circle addToPage hide">ADD</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-8 col-lg-offset-1">
        {!! Form::open(['class' => 'form-horizontal validator-form','id'=>'addPageForm']) !!}
        <div class="form-group">
            <label class="col-lg-2 control-label">Name</label>
            <div class="col-lg-4">
                <input type="text" class="form-control" name="name" />
            </div>
            <label class="col-lg-2 control-label">Slug</label>
            <div class="col-lg-4">
                <input type="text" class="form-control" name="slug" />
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-2 control-label">Status</label>
            <div class="col-sm-7">
                <div class="switch-button xs showcase-switch-button">
                    <input id="switch-button-1" type="checkbox" name="status">
                    <label for="switch-button-1"></label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <ul id="allWidgets">

                </ul>
            </div>
        </div>


        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>


        {!! Form::close() !!}
    </div>

@endsection

@section('scripts')
    <!-- Chosen -->
    <script src="../js/plugins/bootstrap-chosen/chosen.jquery.js"></script>

    <!-- moment -->
    <script src="../js/moment/moment.js"></script>


@endsection

