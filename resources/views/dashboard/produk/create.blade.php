@extends('layouts.main');

@section('content')
    <div class="space-y-5">
        <h2 class="text-2xl mb-6">
            TAMBAH ITEM BARU
        </h2>

        <div class="w-1/2">
            <form action="/items" method="POST">
                @csrf
                {{-- item --}}
                <div class="mb-6">
                    <label for="item" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Item</label>
                    <input type="text" id="item" name="item" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('item') is-invalid @enderror" autofocus value="{{ old('item') }}" autocomplete="off" autofocus>
                    @error('item')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                {{-- type --}}
                <div class="mb-6">
                    <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type</label>
                    <input type="text" id="type" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('type') is-invalid @enderror" autofocus value="{{ old('type') }}" autocomplete="off">
                    @error('type')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                {{-- resin --}}
                <div class="mb-6">
                    <label for="resin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Resin</label>
                    <input resin="text" id="resin" name="resin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('resin') is-invalid @enderror" autofocus value="{{ old('resin') }}" autocomplete="off">
                    @error('resin')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                {{-- wip --}}
                <div class="mb-6">
                    <label for="wip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">WIP</label>
                    <input wip="text" id="wip" name="wip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('wip') is-invalid @enderror" autofocus value="{{ old('wip') }}" autocomplete="off">
                    @error('wip')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Tambah Item</button>
            </form>
        </div>
    </div>
@endsection