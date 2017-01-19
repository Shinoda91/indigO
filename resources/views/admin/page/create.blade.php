@extends('admin.layout')

@section('meta-title', 'Add new page')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Pages</div>
        <div class="panel-body">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Add new page
                    </h1>
                </div>
            </div>
            {!! Form::open(['route' => 'admin.page.store', 'files' => true]) !!}
            <div class="row">
                <div class="col-lg-9">
                    <div class="form-group">
                        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title of the page']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::textarea('content', null, ['class' => 'wysiwyg']) !!}
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Publish
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="checkbox">
                                <label>
                                    {!! Form::checkbox('allow_comments', true, true) !!} Allow Comments
                                </label>
                            </div>
                            <div class="form-group">
                                {!! Form::label('status', 'Status') !!}
                                {!! Form::select('status', Config::get('post_status'), null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('lang', 'Language') !!}
                                {!! Form::select('lang', config('languages'), null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="panel-footer text-right">
                            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Main Image
                        </div>
                        <div class="panel-body">
                            {!! Form::label('image', 'Select an Image') !!}
                            <div class="fileUpload">
                                {!! Form::file('image', ['class' => 'upload', 'id' => 'image_file_upload']) !!}
                                <img src="/img/image-placeholder.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}

        </div>
    </div>

@stop
