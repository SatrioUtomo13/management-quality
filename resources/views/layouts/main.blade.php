<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TACO</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
      
@include('layouts.sidebar')

<div class="p-4 sm:ml-64">
  <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 bg-slate-100">
    @yield('content')
  </div>
</div>

</body>
</html>