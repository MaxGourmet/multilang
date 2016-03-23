@extends('layouts.default')
@section('title', Lang::get('common.welcomePageTitle'))

@section('content')
<div class = "container">
    <h1>{{ Lang::get('common.greeting') }}</h1>
    <div class = "row">
        <div class = "lead">
        {{ Lang::get('common.notAuthenticateContent') }}
        </div>
    </div>
</div>
@endsection
