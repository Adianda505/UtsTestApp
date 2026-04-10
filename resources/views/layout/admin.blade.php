<!DOCTYPE html>
<html lang="en" class="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </title>
    <title>Admin Panel</title>
</head>
<body> 
<div class="bg-white dark:bg-white">
        
<div class="flex flex-col bg-gray-100 ml-45">
    @include('components.sidebarMenu')
</div>
    <div>
        @include('components.footer')
    </div>
</div>
</body>
</html>