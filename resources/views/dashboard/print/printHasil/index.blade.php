@extends('layouts.main')

@section('content')
    <div class="space-y-5">
        <h2 class="text-2xl mb-6">
            PRINT HASIL
        </h2>

        <div class="flex">
        {{-- search --}}
            <form class="w-1/2">   
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required>

                    <button type="submit" class="text-white absolute right-2.5 bottom-1 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-1 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>

            <button type="button" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2 text-center ml-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Print</button>
        </div>

        {{-- body --}}
        <div class="lg:w-3/4">
            <h2 class="text-xl font-semibold border-2 text-center py-2">DATA HASIL TREATING</h2>

            <div class="border-2 border-t-0 pl-5 py-5">
                <table>
                    <tbody>
                        <tr>
                            <td>NAMA WIP</td>
                            <td class="pl-2">:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>LOT WIP</td>
                            <td class="pl-2">:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>QTY</td>
                            <td class="pl-2">:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Lot Tac & RM</td>
                            <td class="pl-2">:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Qty awal - akhir</td>
                            <td class="pl-2">:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>PIC - Team - shift</td>
                            <td class="pl-2">:</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h2 class="text-xl font-semibold border-2 border-t-0 text-center py-2">DATA PEMAKAIAN</h2>

            <table class="w-full">
                <thead class="text-sm">
                    <tr>
                        <th class="border-2 border-t-0">LOT___________</th>
                        <th class="border-2 border-t-0">QTY PAKAI</th>
                        <th class="border-2 border-t-0">QTY RUSAK</th>
                        <th class="border-2 border-t-0">SALDO</th>
                        <th class="border-2 border-t-0">CHECK BRUSH</th>
                        <th class="border-2 border-t-0">SHIFT-TEAM</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 m-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" />
                            </svg>
                        </td>
                        <td class="border-2 border-t-0"></td>
                    </tr>
                    <tr>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 m-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" />
                            </svg>
                        </td>
                        <td class="border-2 border-t-0"></td>
                    </tr>
                    <tr>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 m-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" />
                            </svg>
                        </td>
                        <td class="border-2 border-t-0"></td>
                    </tr>
                    <tr>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 m-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" />
                            </svg>
                        </td>
                        <td class="border-2 border-t-0"></td>
                    </tr>
                    <tr>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 m-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" />
                            </svg>
                        </td>
                        <td class="border-2 border-t-0"></td>
                    </tr>
                    <tr>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 m-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" />
                            </svg>
                        </td>
                        <td class="border-2 border-t-0"></td>
                    </tr>
                    <tr>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 m-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" />
                            </svg>
                        </td>
                        <td class="border-2 border-t-0"></td>
                    </tr>
                    <tr>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 m-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" />
                            </svg>
                        </td>
                        <td class="border-2 border-t-0"></td>
                    </tr>
                    <tr>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 m-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" />
                            </svg>
                        </td>
                        <td class="border-2 border-t-0"></td>
                    </tr>
                    <tr>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0"></td>
                        <td class="border-2 border-t-0">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 m-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" />
                            </svg>
                        </td>
                        <td class="border-2 border-t-0"></td>
                    </tr> 
                </tbody>
            </table>

            <div class="w-full flex">
                <div class="w-2/5">
                    <table class="w-full">
                        <tbody>
                            <tr>
                                <td colspan="2" class="text-center text-4xl">9005</td>
                            </tr>
                            <tr>
                                <td class="text-center text-2xl">Qty Awal</td>
                                <td class="text-2xl">1000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="w-3/5">
                    <table class="w-full">
                        <tbody>
                            <tr>
                                <td rowspan="2" class="text-center border-2 border-t-0 text-4xl">T1-2023072805</td>
                                <td class="border-2 border-t-0 text-sm text-center">Check <br> Brush</td>
                            </tr>
                            <tr>
                                <td class="border-2 border-t-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 m-auto">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 7.5A2.25 2.25 0 017.5 5.25h9a2.25 2.25 0 012.25 2.25v9a2.25 2.25 0 01-2.25 2.25h-9a2.25 2.25 0 01-2.25-2.25v-9z" />
                                    </svg>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection