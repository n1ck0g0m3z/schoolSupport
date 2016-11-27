@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Information to {{ $profile->first_name . '  ' . $profile->last_name}}</div>
                <div class="panel-body">
                    {!! Form::open(array('url' => '/data', 'files'=>true, 'class'=>'form-horizontal')) !!}

                        <div class="form-group{{ $errors->has('testName') ? ' has-error' : '' }}">
                            <label for="testName" class="col-md-4 control-label">Title</label>

                            <div class="col-md-6">
                                <input id="testName" type="text" class="form-control" name="testName" value="{{ old('testName') }}">

                                @if ($errors->has('testName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('testName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('testPoint') ? ' has-error' : '' }}">
                            <label for="testPoint" class="col-md-4 control-label">出席</label>

                            <div class="col-md-6">
                                <input id="testPoint" type="number" step="0.01" class="form-control" name="testPoint" value="{{ old('testPoint') }}">

                                @if ($errors->has('testName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('testName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('grade') ? ' has-error' : '' }}">
                            <label for="grade" class="col-md-4 control-label">成績</label>

                            <div class="col-md-6">
                                <input id="grade" type="number" step="0.01" class="form-control" name="grade" value="{{ old('grade') }}">

                                @if ($errors->has('grade'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('grade') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('attendance') ? ' has-error' : '' }}">
                            <label for="attendance" class="col-md-4 control-label">内容</label>

                            <div class="col-md-6">
                                <input id="attendance" type="text" class="form-control" name="attendance" value="{{ old('attendance') }}">

                                @if ($errors->has('attendance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('attendance') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    
                        <input id="student_id" class="form-control hide" name="student_id" value="{{ $profile->id }}">
                         
                        <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
                            {!! Form::label('File', null, ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::file('file', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
