<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col">

    <!-- NAVBAR -->
    @include('components.sidebarMenu')

    <!-- CONTENT -->
    <main class="flex-1 p-6 bg-gray-100">
        @yield('content')
    </main>

    <!-- FOOTER -->
    @include('components.footer')

</body>

</body>

</body>
</html>