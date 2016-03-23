@extends('layouts.default')
@section('title', Lang::get('common.homePageTitle'))

@section('content')
<div class="container">
    <h1>{{ Lang::get('common.logged_in_greeting', ['name' => Auth::user()->name])  }}</h1>
    <div class="row">
        <blockquote>
            <p>
                {{ Lang::get('common.authenticateContent') }}
            </p>
        </blockquote>
        <p>
        </p>
    </div>
</div>
@endsection
