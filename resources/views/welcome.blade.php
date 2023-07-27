<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <div style="background-image: url('img/welcome.jpg')" class=" w-screen h-screen bg-cover bg-gray-600 bg-blend-multiply">
        
        <div class="w-full h-screen overflow-hidden lg:max-w-sm lg:h-fit bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2">
            
            <img class="rounded-t-lg" src="{{ asset('img/welcom-illustration.jpg') }}" alt="" />

            <div class="px-5 sm:py-5 flex flex-col lg:shadow-md lg:shadow-slate-300 lg:py-2">
            
                <h5 class="mb-2 text-xl sm:text-5xl md:text-5xl lg:text-xl text-center font-bold tracking-tight text-gray-900 dark:text-white lg:mb-0">Hii, Welcome to our tour guide</h5>

                {{-- carousel --}}
                <div id="default-carousel" class="relative" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-40 md:mt-5 md:mb-16 lg:mb-0 overflow-hidden rounded-lg">
                        <!-- Item 1 -->
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-center md:text-3xl lg:text-base">Let's take a quick guide to get started with this app</p>
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                            <h2 class="mb-2 text-md font-semibold text-gray-900 dark:text-white text-center md:text-3xl lg:text-base">Login</h2>
                            <ul class="max-w-md text-xs space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400 md:text-2xl md:max-w-2xl md:mx-5 lg:text-sm">
                                <li>
                                    Make sure you have an account, otherwise ask admin
                                </li>
                                <li>
                                    Fill Username & Password field
                                </li>
                                <li>
                                    Press Login button
                                </li>
                            </ul>
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                            <h2 class="mb-2 text-md font-semibold text-gray-900 dark:text-white text-center md:text-3xl lg:text-base">Input Data</h2>
                            <ul class="max-w-md text-xs space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400 md:text-2xl md:max-w-2xl md:mx-5 lg:text-sm">
                                <li>
                                    Fill data on Spreadsheet
                                </li>
                                <li>
                                    Click save for saving data
                                </li>
                                <li>
                                    Click delete for delete data
                                </li>
                            </ul>
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                            <h2 class="mb-2 text-md font-semibold text-gray-900 dark:text-white text-center md:text-3xl lg:text-base">Print</h2>
                            <ul class="max-w-md text-xs space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400 md:text-2xl md:max-w-2xl md:mx-5 lg:text-sm">
                                <li>
                                    Choose feature (print label, print hasil)
                                </li>
                                <li>
                                    Print label for sub product
                                </li>
                                <li>
                                    Print hasil for product
                                </li>
                            </ul>
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-1000 ease-in-out" data-carousel-item>
                            <h2 class="mb-2 text-md font-semibold text-gray-900 dark:text-white text-center md:text-3xl lg:text-base">Report</h2>
                            <ul class="max-w-md text-xs space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400 md:text-2xl md:max-w-2xl md:mx-5 lg:text-sm">
                                <li>
                                    Choose feature (Laporan produksi, Laporan kualitas)
                                </li>
                                <li>
                                    Laporan produksi for amount of product
                                </li>
                                <li>
                                    Laporan kualitas for quality of product
                                </li>
                            </ul>
                        </div>
                    </div>   
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 carousel-indicator">
                        <button type="button" class="w-3 h-3 rounded-full " aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full " aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full " aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full " aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full " aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                    </div>
                    
                </div>

                {{-- skip button --}}
                <div class="w-full flex justify-center">
                    <a href="/login" class="text-white inline-flex items-center self-center bg-gradient-to-r from-orange-400 via-orange-500 to-orange-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-orange-300 dark:focus:ring-orange-800 shadow-lg shadow-orange-500/50 dark:shadow-lg dark:shadow-orange-800/80 font-medium rounded-full text-sm px-10 py-2.5 text-center mb-2 md:mr-8 md:px-20 md:py-5 md:text-3xl lg:px-5 lg:py-2.5 lg:w-fit lg:text-sm lg:mr-0">
                        Skip
                        <svg class="w-3.5 h-3.5 ml-2 md:w-8 md:h-8 md:ml-5 lg:w-3.5 lg:h-3.5 lg:ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>