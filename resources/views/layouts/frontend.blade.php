<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Avenorr</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </head>
    <body class="font-sans antialiased">
        
            <!-- header -->
            <livewire:Frontend.header /> 

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            {{-- <div class="fixed z-50 flex flex-col space-y-4 bottom-8 right-8">
                <a href="https://wa.me/yournumber" class="w-14 h-14 bg-[#25D366] rounded-full flex items-center justify-center shadow-2xl hover:scale-110 transition-transform">
                    <i class="text-2xl text-white fab fa-whatsapp"></i>
                </a>
                <a href="tel:+919876543210" class="flex items-center justify-center transition-transform bg-white rounded-full shadow-2xl w-14 h-14 hover:scale-110 md:hidden">
                    <i class="text-xl text-black fas fa-phone"></i>
                </a>
            </div> --}}

            <!-- footer -->
            <livewire:Frontend.footer />
    </body>
</html>
