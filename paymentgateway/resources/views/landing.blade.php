<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'CetakPro') }}</title>
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <script src="https://cdn.tailwindcss.com"></script>
        @endif

        @php
            $themeColor = $settings['theme_color'] ?? '#10b981'; // Default emerald-500
            $logo = $settings['logo'] ?? null;
            $whatsappUrl = $settings['whatsapp_url'] ?? '#';
        @endphp

        <style>
            :root {
                --primary: {{ $themeColor }};
            }
            .bg-primary { background-color: var(--primary); }
            .text-primary { color: var(--primary); }
            .border-primary { border-color: var(--primary); }
            .hover-bg-primary-dark:hover { filter: brightness(0.9); }
        </style>
    </head>
    <body class="antialiased bg-gray-50 text-gray-800 font-[Inter]">
        
        <!-- Navbar -->
        <nav class="bg-white shadow-sm p-4 w-full fixed top-0 z-50">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                <div class="flex items-center gap-3">
                    @if($logo)
                        <img src="{{ Storage::url($logo) }}" alt="Logo" class="h-10">
                    @else
                        <span class="text-2xl font-bold text-primary">CetakPro</span>
                    @endif
                </div>
                <div class="flex gap-4">
                    <a href="{{ route('track.form') }}" class="text-gray-600 hover:text-primary font-medium py-2">Lacak Pesanan</a>
                    <!-- Customer routing will go to /customer directly, but user requested /login to redirect for now -->
                    <!-- Wait, user requested "Login Admin" and "Login/Register Customer" buttons, let's just make direct links to filament panels -->
                    <a href="/customer/login" class="bg-primary text-white px-5 py-2 rounded-lg font-medium hover-bg-primary-dark transition-all">Pesan Sekarang</a>
                    <a href="/admin/login" class="text-primary border border-primary px-5 py-2 rounded-lg font-medium hover:bg-gray-50 transition-all">Admin</a>
                </div>
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="pt-32 pb-20 px-4 text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold mb-6">Solusi Cetak <span class="text-primary">Berkualitas</span></h1>
            <p class="text-lg md:text-xl text-gray-500 mb-10 max-w-2xl mx-auto">Mulai dari cetak Jersey hingga Digital Printing. Kami menyediakan hasil terbaik dengan harga terjangkau.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/customer/register" class="bg-primary text-white px-8 py-3 rounded-xl font-bold text-lg hover-bg-primary-dark transition-all shadow-lg shadow-primary/30">Daftar & Pesan</a>
                <a href="{{ $whatsappUrl }}" target="_blank" class="bg-green-500 text-white px-8 py-3 rounded-xl font-bold text-lg hover:bg-green-600 transition-all shadow-lg shadow-green-500/30 flex items-center gap-2">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                    Hubungi Kami
                </a>
            </div>
        </div>

        <!-- Catalog Section -->
        <div class="bg-white py-20 px-4">
            <div class="max-w-7xl mx-auto">
                <h2 class="text-3xl font-bold text-center mb-12">Katalog <span class="text-primary">Produk</span></h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse($catalogs as $catalog)
                        <div class="bg-gray-50 rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition-all border border-gray-100">
                            @if($catalog->gambar)
                                <img src="{{ Storage::url($catalog->gambar) }}" alt="{{ $catalog->nama_produk }}" class="w-full h-48 object-cover">
                            @else
                                <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-400">
                                    No Image
                                </div>
                            @endif
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">{{ $catalog->nama_produk }}</h3>
                                <p class="text-gray-500 mb-4 line-clamp-2">{{ $catalog->deskripsi }}</p>
                                <div class="flex justify-between items-center">
                                    <span class="text-primary font-bold text-lg">Mulai Rp {{ number_format($catalog->harga_mulai, 0, ',', '.') }}</span>
                                    <a href="/customer/register" class="text-sm bg-primary text-white px-4 py-2 rounded-lg hover-bg-primary-dark transition-all">Pesan</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full text-center text-gray-500 py-10">
                            Belum ada produk di katalog.
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white py-10 mt-auto">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <p>&copy; {{ date('Y') }} {{ config('app.name', 'CetakPro') }}. All rights reserved.</p>
            </div>
        </footer>

    </body>
</html>
