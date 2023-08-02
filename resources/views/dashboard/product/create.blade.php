@extends('layouts.main')

@section('content')
    <div class="space-y-5">
        <h2 class="text-2xl mb-6">
            TAMBAH DATA BARU
        </h2>

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
                            <td class="border">
                                <input type="date" class="input-product" id="tanggal" name="tanggal" required>
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" id="lot" name="lot" required>
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" name="item" required>
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" name="resin" required>
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" name="rc_r" required>
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" name="rc_c" required>
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" name="rc_l" required>
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" name="vc_r" required>
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" name="vc_l" required>
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" name="speed" required>
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" name="berat_aktual" required>
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" name="berat_awal" required>
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" name="berat_akhir" required>
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" name="rsi">
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" name="qty_transisi">
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" name="qty_lot" required>
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" name="qty_total" required>
                            </td>
                            <td class="border">
                                <input type="text" class="input-product" id="lot_wip" name="lot_wip" required readonly>
                            </td>
                        </tr>
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