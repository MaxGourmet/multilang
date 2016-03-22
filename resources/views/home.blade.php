@extends('layouts.default')

@section('content')
<div class="container">
    <h1>{{ Lang::get('messages.logged_in_greeting', ['name' => Auth::user()->name])  }}</h1>
    <div class="row">
        <p>
            Aliquam tempus vestibulum urna, vitae venenatis massa rutrum iaculis. Donec nec metus nulla. Nunc sit
            amet semper mauris. Maecenas vestibulum varius hendrerit. Nulla id efficitur felis. Aenean porta quam eu
            nisl egestas accumsan. Maecenas aliquam egestas turpis, id posuere mauris gravida ac.
        </p>
    </div>
</div>
@endsection
