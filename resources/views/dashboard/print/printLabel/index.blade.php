@extends('layouts.main')

@section('content')
    <div class="space-y-5">
        <h2 class="text-2xl mb-6">
            PRINT LABEL
        </h2>

        <div class="flex">
            {{-- search --}}
                <form class="w-1/2" action="/printLabel">   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..."  name="search">
    
                        <button type="submit" class="text-white absolute right-2.5 bottom-1 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>
    
            <button type="button" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2 text-center ml-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Print</button>
        </div>

        <div class="w-full grid grid-cols-2 gap-x-20 gap-y-20">
            @php
                $subCount = 4;
            @endphp

            @for ($i = 0; $i < $subCount; $i++)
            <div>
                <h2 class="text-center border-2">DATA HASIL TREATING</h2>

                <div class="border-2 border-t-0 pt-3">
                    <table class="ml-3">
                        <tbody class="text-sm">
                            <tr class="mt-5">
                                <td>Tgl TREATING</td>
                                <td>:</td>
                                <td>{{ isset($product) ? $product->lotwip->tanggal : '' }}</td>
                            </tr>
                            
                            <tr>
                                <td>Resin</td>
                                <td>:</td>
                                <td>{{ isset($product) ? $product->resin : '' }}</td>
                            </tr>
                            <tr>
                                <td>Petugas & Team</td>
                                <td>:</td>
                                <td>{{ isset($product) ? $product->user->name : '' }} - {{ isset($product) ? $product->user->tim : '' }}</td>
                            </tr>
                            <tr>
                                <td class="pt-3">Nama WIP</td>
                                <td>:</td>
                                <td>WP-{{ isset($product) ? $product->resin : '' }}-{{ isset($product) ? $product->item : '' }}</td>
                            </tr>
                            <tr>
                                <td>Lot WIP</td>
                                <td>:</td>
                                <td>{{ isset($product) ? $product->lot_wip : '' }}</td>
                            </tr>
                            <tr>
                                <td>Panjang</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Lebar Tirisan(R/L)</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Qty</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="pt-3">RC</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>VC</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            @endfor
            
            
            {{-- <div>
                <h2 class="text-center border-2">DATA HASIL TREATING</h2>

                <div class="border-2 border-t-0 pt-3">
                    <table class="ml-3">
                        <tbody class="text-sm">
                            <tr class="mt-5">
                                <td>Tgl TREATING</td>
                                <td>:</td>
                                <td>{{ isset($product) ? $product->tanggal : '' }}</td>
                            </tr>
                            
                            <tr>
                                <td>Resin</td>
                                <td>:</td>
                                <td>{{ isset($product) ? $product->resin : '' }}</td>
                            </tr>
                            <tr>
                                <td>Petugas & Team</td>
                                <td>:</td>
                                <td>{{ isset($product) ? $product->user->name : '' }} - {{ isset($product) ? $product->user->tim : '' }}</td>
                            </tr>
                            <tr>
                                <td class="pt-3">Nama WIP</td>
                                <td>:</td>
                                <td>WP-{{ isset($product) ? $product->resin : '' }}-{{ isset($product) ? $product->item : '' }}</td>
                            </tr>
                            <tr>
                                <td>Lot WIP</td>
                                <td>:</td>
                                <td>{{ isset($product) ? $product->lot_wip : '' }}</td>
                            </tr>
                            <tr>
                                <td>Panjang</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Lebar Tirisan(R/L)</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Qty</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="pt-3">RC</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>VC</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div>
                <h2 class="text-center border-2">DATA HASIL TREATING</h2>

                <div class="border-2 border-t-0 pt-3">
                    <table class="ml-3">
                        <tbody class="text-sm">
                            <tr class="mt-5">
                                <td>Tgl TREATING</td>
                                <td>:</td>
                                <td>{{ isset($product) ? $product->tanggal : '' }}</td>
                            </tr>
                            
                            <tr>
                                <td>Resin</td>
                                <td>:</td>
                                <td>{{ isset($product) ? $product->resin : '' }}</td>
                            </tr>
                            <tr>
                                <td>Petugas & Team</td>
                                <td>:</td>
                                <td>{{ isset($product) ? $product->user->name : '' }} - {{ isset($product) ? $product->user->tim : '' }}</td>
                            </tr>
                            <tr>
                                <td class="pt-3">Nama WIP</td>
                                <td>:</td>
                                <td>WP-{{ isset($product) ? $product->resin : '' }}-{{ isset($product) ? $product->item : '' }}</td>
                            </tr>
                            <tr>
                                <td>Lot WIP</td>
                                <td>:</td>
                                <td>{{ isset($product) ? $product->lot_wip : '' }}</td>
                            </tr>
                            <tr>
                                <td>Panjang</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Lebar Tirisan(R/L)</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Qty</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="pt-3">RC</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>VC</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div>
                <h2 class="text-center border-2">DATA HASIL TREATING</h2>

                <div class="border-2 border-t-0 pt-3">
                    <table class="ml-3">
                        <tbody class="text-sm">
                            <tr class="mt-5">
                                <td>Tgl TREATING</td>
                                <td>:</td>
                                <td>{{ isset($product) ? $product->tanggal : '' }}</td>
                            </tr>
                            
                            <tr>
                                <td>Resin</td>
                                <td>:</td>
                                <td>{{ isset($product) ? $product->resin : '' }}</td>
                            </tr>
                            <tr>
                                <td>Petugas & Team</td>
                                <td>:</td>
                                <td>{{ isset($product) ? $product->user->name : '' }} - {{ isset($product) ? $product->user->tim : '' }}</td>
                            </tr>
                            <tr>
                                <td class="pt-3">Nama WIP</td>
                                <td>:</td>
                                <td>WP-{{ isset($product) ? $product->resin : '' }}-{{ isset($product) ? $product->item : '' }}</td>
                            </tr>
                            <tr>
                                <td>Lot WIP</td>
                                <td>:</td>
                                <td>{{ isset($product) ? $product->lot_wip : '' }}</td>
                            </tr>
                            <tr>
                                <td>Panjang</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Lebar Tirisan(R/L)</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Qty</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="pt-3">RC</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>VC</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> --}}
        </div>
    </div>
@endsection