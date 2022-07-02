@extends('layout.app')

@section("title", $posts["name"])

@section('content')
<h1>{{ $posts['name'] }}</h1>
<h3>{{ $age }}</h3>