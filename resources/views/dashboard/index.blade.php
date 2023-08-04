@extends('layouts.main')

@section('content')
    <h1 class="text-2xl">Welcome back, {{ auth()->user()->username }}</h1>

    <div class="mt-5 bg-white rounded shadow">
        {!! $hasilProduksiChart->container() !!}
    </div>

    <script src="{{ $hasilProduksiChart->cdn() }}"></script>

    {{ $hasilProduksiChart->script() }}
    
@endsection