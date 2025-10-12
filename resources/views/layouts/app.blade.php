<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    
    {{-- Menggunakan CDN Tailwind CSS v3 yang stabil --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col min-h-screen bg-gray-100">

    {{-- Navbar di luar konten utama --}}
    @include('layouts.navbar')
    
    {{-- Konten Utama yang akan memenuhi ruang kosong --}}
    <main class="flex-grow">
        <div class="py-16">
            @yield('content')
        </div>
    </main>
    
    {{-- Footer yang akan menempel di bawah --}}
    @include('layouts.footer')

</body>