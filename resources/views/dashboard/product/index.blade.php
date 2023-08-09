@extends('layouts.main')

@section('content')
    <div class="space-y-5">
        <h2 class="text-2xl mb-6">
            INPUT DATA
        </h2>

        {{-- add data --}}
        <a href="/products/create" class="w-fit text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Tambah Data</a>

        @if (session()->has('success'))
            <div class="w-full p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-100 dark:bg-gray-800 dark:text-green-400" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-[#004755] dark:bg-gray-700 dark:text-gray-400">
                    <tr class="">
                        <th scope="col" class="px-6 py-3 border border-white" rowspan="2">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white" rowspan="2">
                            Petugas
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white" rowspan="2">
                            Shift
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white" rowspan="2">
                            Item
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white" rowspan="2">
                            Resin
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white text-center" colspan="3">
                            Resin Content
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white text-center" colspan="2">
                            Volatile Content
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white" rowspan="2">
                            Speed
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white text-center" colspan="3">
                            Berat
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white" rowspan="2">
                            RSI
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white text-center" colspan="3">
                            Quantity
                        </th>
                        <th scope="col" class="text-center border border-white " rowspan="2">
                            Lot Wip
                        </th>
                        <th scope="col" class="text-center border border-white " rowspan="2">
                            Aksi
                        </th>
                    </tr>
                    <tr>
                        <th scope="col" class="px-6 py-3 border border-white">
                            R
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white">
                            C
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white">
                            L
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white">
                            R
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white">
                            L
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white">
                            Aktual
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white">
                            Awal
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white">
                            Akhir
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white">
                            Transisi
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white">
                            Lot
                        </th>
                        <th scope="col" class="px-6 py-3 border border-white">
                            Total
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)    
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $product->user->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->shift }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->item }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->resin }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->check->rc_r }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->check->rc_c }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->check->rc_l }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->check->vc_r }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->check->vc_l }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->speed }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->berat->berat_aktual }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->berat->berat_awal }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->berat->berat_akhir }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->berat->rsi }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->quantity->qty_transisi }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->quantity->qty_lot }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->quantity->qty_total }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{ $product->lotwip->lot_wip }}
                            </td>
                            <td class="px-6 py-4 flex">
                                {{-- edit --}}
                                <a href="/products/{{ $product->id }}/edit">
                                    <button class="ml-1 focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-1 py-1 mb-2 dark:focus:ring-yellow-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                        </svg>
                                    </button>
                                </a>
                                {{-- delete --}}
                                <form action="/products/{{ $product->id }}" method="post" class="ml-1">
                                    @method('DELETE')
                                    @csrf
                                    <button class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-1 py-1 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" onclick="return confirm('Apakah anda yakin?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
