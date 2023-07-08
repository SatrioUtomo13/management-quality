@extends('layouts.main')

@section('content')
    <h1 class="text-2xl">Welcome back, {{ auth()->user()->username }}</h1>
    
@endsection