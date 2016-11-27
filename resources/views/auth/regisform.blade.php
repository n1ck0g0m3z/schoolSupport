@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>
                <div class="panel-body">
                    {!! Form::open(array('url' => '/register/profile', 'files'=>true, 'class'=>'form-horizontal')) !!}
                        {{ isset($profile) ? Form::hidden('_method', 'PUT') : '' }}
                        @if ($profile)
                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $profile->first_name }}">

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('first_kana') ? ' has-error' : '' }}">
                            <label for="first_kana" class="col-md-4 control-label">First Kana</label>

                            <div class="col-md-6">
                                <input id="first_kana" type="text" class="form-control" name="first_kana" value="{{ $profile->first_kana }}">

                                @if ($errors->has('first_kana'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_kana') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $profile->last_name }}">

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('last_kana') ? ' has-error' : '' }}">
                            <label for="last_kana" class="col-md-4 control-label">Last Kana</label>

                            <div class="col-md-6">
                                <input id="last_kana" type="text" class="form-control" name="last_kana" value="{{ $profile->last_kana }}">

                                @if ($errors->has('last_kana'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_kana') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        @if (\Auth::User()->permission != 0)
                        <div class="form-group{{ $errors->has('teacher_name') ? ' has-error' : '' }}">
                            <label for="teacher_name" class="col-md-4 control-label">担任</label>

                            <div class="col-md-6">
                                <input id="teacher_name" type="text" class="form-control" name="teacher_name" value="{{ $profile->teacher_name }}">

                                @if ($errors->has('teacher_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('teacher_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @endif
                        
                        <div class="form-group{{ $errors->has('cls') ? ' has-error' : '' }}">
                            
                            @if (\Auth::User()->permission != 0)
                            <label for="cls" class="col-md-4 control-label">Class Number</label>
                            @else
                            <label for="cls" class="col-md-4 control-label">Class Name</label>
                            @endif
                            <div class="col-md-6">
                                <input id="cls" type="text" class="form-control" name="cls" value="{{ $profile->cls }}">

                                @if ($errors->has('cls'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cls') }}</strong>
                                    </span>
                                @endif
                                
                            </div>
                        </div>
                        @else
                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('first_kana') ? ' has-error' : '' }}">
                            <label for="first_kana" class="col-md-4 control-label">First Kana</label>

                            <div class="col-md-6">
                                <input id="first_kana" type="text" class="form-control" name="first_kana" value="{{ old('first_kana') }}">

                                @if ($errors->has('first_kana'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_kana') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('last_kana') ? ' has-error' : '' }}">
                            <label for="last_kana" class="col-md-4 control-label">Last Kana</label>

                            <div class="col-md-6">
                                <input id="last_kana" type="text" class="form-control" name="last_kana" value="{{ old('last_kana') }}">

                                @if ($errors->has('last_kana'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_kana') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                         
                        @if (\Auth::User()->permission != 0)
                        <div class="form-group{{ $errors->has('teacher_name') ? ' has-error' : '' }}">
                            <label for="teacher_name" class="col-md-4 control-label">担任</label>

                            <div class="col-md-6">
                                <input id="teacher_name" type="text" class="form-control" name="teacher_name" value="{{ old('teacher_name') }}">

                                @if ($errors->has('teacher_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('teacher_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @endif
                         
                        <div class="form-group{{ $errors->has('cls') ? ' has-error' : '' }}">
                            
                            @if (\Auth::User()->permission != 0)
                            <label for="cls" class="col-md-4 control-label">Class Number</label>
                            @else
                            <label for="cls" class="col-md-4 control-label">Class Name</label>
                            @endif
                            <div class="col-md-6">
                                <input id="cls" type="text" class="form-control" name="cls" value="{{ old('cls') }}">

                                @if ($errors->has('cls'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cls') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @endif
                        <div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
                            {!! Form::label('Picture', null, ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::file('img', null, ['class' => 'form-control']) !!}
                                @if ($errors->has('img'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('img') }}</strong>
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
