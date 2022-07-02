@extends('layout.app')

@section("title", $posts["name"])


@if ($posts['new'])
<h2>This Blog Page is new</h2>
{{-- @elseif () --}}
@else
<h2>This Blog Page is old</h2>
@endif


@section('content')
<h1>{{ $posts['name'] }}</h1>
<h3>{{ $age }}</h3>