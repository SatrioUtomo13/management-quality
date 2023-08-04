@extends('layouts.main')

@section('content')
    <div class="space-y-5">
        <h2 class="text-2xl mb-6">
            LAPORAN PRODUKSI
        </h2>

        <div class="p-6 m-20 bg-white rounded shadow">
            {!! $hasilProduksiChart->container() !!}
        </div>
    </div>

    <script src="{{ $hasilProduksiChart->cdn() }}"></script>

    {{ $hasilProduksiChart->script() }}
@endsection