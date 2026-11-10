<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Pemrograman Web - Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body style="margin: 0; display: flex; flex-direction: column; min-height: 100vh; background-color: #f0fdf4;">

    <!-- Navbar Atas -->
    @include('components.navbar')

    <!-- Bagian Konten Utama -->
    <div style="flex: 1;">
        @yield('content')
    </div>

    <!-- Footer Satu-satunya di Paling Bawah -->
    @include('components.footer')

</body>
</html>