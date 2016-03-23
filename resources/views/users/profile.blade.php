@extends('layouts.default')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">{{ Lang::get('forms.profileFormTitle') }}</div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/saveProfile') }}">
                    {!! csrf_field() !!}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">{{ Lang::get('forms.nameInputTitle') }}</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">{{ Lang::get('forms.emailInputTitle') }}</label>

                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">{{ Lang::get('forms.usernameInputTitle') }}</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control" name="username" value="{{ Auth::user()->username }}">

                            @if ($errors->has('username'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('language') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">{{ Lang::get('forms.languageInputTitle') }}</label>

                        <div class="col-md-6">
                            <select class="form-control" name="language_id">
                                @foreach(Multilang\Languages::all() as $lang)
                                    <option value="{{ $lang->id }}"
                                    {{ $lang->id == Auth::user()->language_id ? 'selected="selected"' : "" }}>
                                        {{ Lang::get('forms.language_'.$lang->code) }}
                                    </option>
                                @endforeach
                            </select>

                            @if ($errors->has('language'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('language') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">{{ Lang::get('forms.passwordInputTitle') }}</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label class="col-md-4 control-label">{{ Lang::get('forms.confirmPasswordInputTitle') }}</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password_confirmation">

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-user"></i>{{ Lang::get('forms.saveProfileBtn') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
