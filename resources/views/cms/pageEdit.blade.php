@extends('layouts.adminMaster')

@section('stylesheets')
    <!-- Switch Buttons  -->
    <link rel="stylesheet" href="../../../../css/switch-buttons/switch-buttons.css" />
    <!-- Chosen Select  -->
    <link rel="stylesheet" href="../../../../css/plugins/bootstrap-chosen/chosen.css" />
@endsection

@section('content')

    <div class="col-lg-8 col-lg-offset-1">
        {!! Form::model('pages', ['class'=>'form-horizontal validator-form','id'=>'editPageForm']) !!}
        <div class="form-group">
            {{ Form::label('name' ,'Name',['class'=> 'col-lg-2 control-label']) }}
            <div class="col-lg-4">
                {{ Form::text('name', 'example@gmail.com',['class' => 'form-control']) }}
            </div>

            {{ Form::label('slug' ,'Slug',['class'=> 'col-lg-2 control-label']) }}
            <div class="col-lg-4">
                {{ Form::text('slug', null ,['class' => 'form-control']) }}
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
    <script src="../../../js/plugins/bootstrap-chosen/chosen.jquery.js"></script>

    <!-- moment -->
    <script src="../../../js/moment/moment.js"></script>


@endsection

