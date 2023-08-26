@extends('layouts.main')

@section('content')
    <div class="space-y-5">
        <h2 class="text-2xl mb-6">
            TAMBAH DATA BARU
        </h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            <div class="w-full p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100 dark:bg-gray-800 dark:text-red-400" role="alert">
                                {{ $error }}
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Search Item --}}
        <form class="w-1/2" action="/products/create">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" name="itemSearch" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Items..." value="{{ request("itemSearch") }}">
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700">Search</button>
            </div>
        </form>

        <div class="relative overflow-x-auto">
            <form action="/products" method="POST">
                @csrf
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-white uppercase bg-[#004755] dark:bg-gray-700 dark:text-gray-400">
                        <tr class="">
                            <th scope="col" class="px-6 py-3 border border-white" rowspan="2">
                                Tanggal
                            </th>
                            <th scope="col" class="px-6 py-3 border border-white" rowspan="2">
                                Shift
                            </th>
                            <th scope="col" class="px-6 py-3 border border-white" rowspan="2">
                                Lot
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
                            <th scope="col" class="px-12 whitespace-nowrap py-3 border border-white" rowspan="2">
                                Lot Wip
                            </th>
                        </tr>
                        <tr>
                            <th scope="col" class="px-9 py-3 border border-white">
                                R
                            </th>
                            <th scope="col" class="px-9 py-3 border border-white">
                                C
                            </th>
                            <th scope="col" class="px-9 py-3 border border-white">
                                L
                            </th>
                            <th scope="col" class="px-9 py-3 border border-white">
                                R
                            </th>
                            <th scope="col" class="px-9 py-3 border border-white">
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
                        @foreach ($params as $item)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="hidden">
                                <input type="text" class="input-product" name="user_id" required value="{{ Auth::id() }}">
                            </td>
                            <td class="border">
                                <input type="date" class="input-product" id="tanggal" name="tanggal" required>
                            </td>
                            <td class="border">
                                <select required name="shift" class="w-full border-none">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" id="lot" name="lot" required>
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" name="item" required readonly value="{{ $item->item }}">
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" name="resin" required readonly value="{{ $item->resin }}">
                            </td>
                            <td class="border">
                                <input type="number" step="0.1" class="input-product w-10" name="rc_r" required>
                            </td>
                            <td class="border">
                                <input type="number" step="0.1" class="input-product" name="rc_c" required>
                            </td>
                            <td class="border">
                                <input type="number" step="0.1" class="input-product" name="rc_l" required>
                            </td>
                            <td class="border">
                                <input type="number" step="0.1" class="input-product" name="vc_r" required>
                            </td>                            
                            <td class="border">
                                <input type="number" step="0.1" class="input-product" name="vc_l" required>
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" name="speed" required>
                            </td>
                            <td class="border">
                                <input type="number" class="input-product" name="berat_aktual" required>
                            </td>
                            <td class="border">
                                <input type="number" class="input-product" name="berat_awal" required>
                            </td>
                            <td class="border">
                                <input type="number" class="input-product" name="berat_akhir" required>
                            </td>
                            <td class="border">
                                <input type="number" class="input-product" name="rsi">
                            </td>
                            <td class="border">
                                <input type="number" class="input-product" name="qty_transisi">
                            </td>
                            <td class="border">
                                <input type="number" class="input-product" name="qty_lot" required>
                            </td>
                            <td class="border">
                                <input type="number" class="input-product" name="qty_total" required>
                            </td>
                            <td class="border">
                                <input type="text" class="input-product min-w-fit" id="lot_wip" name="lot_wip" required readonly>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <button type="submit" class="text-white mt-5 bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Save Data</button>
            </form>
        </div>
    </div>
    <script>
        function updateIdentitas(){
            let tanggal = document.getElementById('tanggal').value + '-';
            let lot = document.getElementById('lot').value;
            let lotWip = tanggal + lot;
            document.getElementById('lot_wip').value = 'T1' + '-' + lotWip;
        }

        document.getElementById('tanggal').addEventListener('input', updateIdentitas);
        document.getElementById('lot').addEventListener('input', updateIdentitas);
    </script>
@endsection