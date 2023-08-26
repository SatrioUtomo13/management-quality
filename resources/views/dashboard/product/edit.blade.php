@extends('layouts.main')

@section('content')
    <div class="space-y-5">
        <h2 class="text-2xl mb-6">
            EDIT DATA
        </h2>

        <div class="relative overflow-x-auto">
            <form action="/products/{{ $product->id }}" method="POST">
                @method('PUT')
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
                            <th scope="col" class="px-6 py-3 border border-white" rowspan="2">
                                Lot Wip
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
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="hidden">
                                <input type="text" class="input-product" name="user_id" required value="{{ Auth::id() }}">
                            </td>
                            <td class="border">
                                <input type="date" class="input-product" id="tanggal" name="tanggal" required value="{{ $product->lotwip->tanggal }}">
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" name="shift" required value="{{ $product->shift }}"> 
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" id="lot" name="lot" required value="{{ $product->lotwip->lot }}">
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" name="item" required value="{{ $product->item }}">
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" name="resin" required value="{{ $product->resin }}">
                            </td>
                            <td class="border">
                                <input type="number" step="0.1" class="input-product" name="rc_r" required value="{{ $product->check->rc_r }}">
                            </td>
                            <td class="border">
                                <input type="number" step="0.1" class="input-product" name="rc_c" required value="{{ $product->check->rc_c }}">
                            </td>
                            <td class="border">
                                <input type="number" step="0.1" class="input-product" name="rc_l" required value="{{ $product->check->rc_l }}">
                            </td>
                            <td class="border">
                                <input type="number" step="0.1" class="input-product" name="vc_r" required value="{{ $product->check->vc_r }}">
                            </td>
                            <td class="border">
                                <input type="number" step="0.1" class="input-product" name="vc_l" required value="{{ $product->check->vc_l }}">
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" name="speed" required value="{{ $product->speed }}">
                            </td>
                            <td class="border">
                                <input type="number" class="input-product" name="berat_aktual" required value="{{ $product->berat->berat_aktual }}">
                            </td>
                            <td class="border">
                                <input type="number" class="input-product" name="berat_awal" required value="{{ $product->berat->berat_awal }}">
                            </td>
                            <td class="border">
                                <input type="number" class="input-product" name="berat_akhir" required value="{{ $product->berat->berat_akhir }}">
                            </td>
                            <td class="border">
                                <input type="number" class="input-product" name="rsi" value="{{ $product->berat->rsi }}">
                            </td>
                            <td class="border">
                                <input type="number" class="input-product" name="qty_transisi" value="{{ $product->quantity->qty_transisi }}">
                            </td>
                            <td class="border">
                                <input type="number" class="input-product" name="qty_lot" required value="{{ $product->quantity->qty_lot }}">
                            </td>
                            <td class="border">
                                <input type="number" class="input-product" name="qty_total" required value="{{ $product->quantity->qty_total }}">
                            </td>
                            <td class="border">
                                <input type="text" class="input-product min-w-fit" id="lot_wip" name="lot_wip" required readonly value="{{ $product->lotwip->lot_wip }}">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="text-white mt-5 bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Edit Data</button>
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