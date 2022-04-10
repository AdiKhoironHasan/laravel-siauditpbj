@extends('layouts.main')

@section('content')
    <h1>Dashboard Auditor</h1>
    <h2 class="text-center">Welcome Back, <b>{{ auth()->user()->name }}</b></h2>
@endsection
