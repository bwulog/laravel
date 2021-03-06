@extends('layouts.default')

@section('content')
    <h1>All Users</h1>
    
    @if ($users->count())
        @foreach ($users as $user)
            <li>{{ link_to("/users/{$user->username}", $user->username) }} </li>
        @endforeach
    @else 
        <h1>No user found!</h1>
    @endif
@stop