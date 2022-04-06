@extends('layouts.main')

@section('content')
    <h1 class="text-center">Welcome Back, <b>{{ auth()->user()->nama }}</b></h1>
@endsection

