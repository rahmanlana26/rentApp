<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lacak Pesanan | {{ config('app.name', 'CetakPro') }}</title>
        
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <script src="https://cdn.tailwindcss.com"></script>
        @endif

        @php
            $themeColor = $settings['theme_color'] ?? '#10b981';
            $logo = $settings['logo'] ?? null;
        @endphp

        <style>
            :root { --primary: {{ $themeColor }}; }
            .bg-primary { background-color: var(--primary); }
            .text-primary { color: var(--primary); }
            .border-primary { border-color: var(--primary); }
            .ring-primary { --tw-ring-color: var(--primary); }
            .hover-bg-primary-dark:hover { filter: brightness(0.9); }
        </style>
    </head>
    <body class="antialiased bg-gray-50 text-gray-800 font-[Inter] min-h-screen flex flex-col">
        
        <!-- Navbar -->
        <nav class="bg-white shadow-sm p-4 w-full fixed top-0 z-50">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                <a href="{{ route('home') }}" class="flex items-center gap-3">
                    @if($logo)
                        <img src="{{ Storage::url($logo) }}" alt="Logo" class="h-10">
                    @else
                        <span class="text-2xl font-bold text-primary">CetakPro</span>
                    @endif
                </a>
                <a href="{{ route('home') }}" class="text-gray-600 hover:text-primary font-medium">Kembali ke Beranda</a>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex-grow pt-32 pb-20 px-4 flex justify-center">
            <div class="w-full max-w-2xl bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
                <h1 class="text-3xl font-bold text-center mb-2">Lacak Pesanan</h1>
                <p class="text-gray-500 text-center mb-8">Masukkan ID Pesanan Anda untuk melihat status terbaru.</p>

                <form action="{{ route('track.form') }}" method="GET" class="flex flex-col sm:flex-row gap-4 mb-10">
                    <input type="text" name="order_id_unik" value="{{ request('order_id_unik') }}" placeholder="Contoh: CP-20260313-001" required class="flex-grow px-4 py-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 ring-primary focus:border-primary">
                    <button type="submit" class="bg-primary text-white px-8 py-3 rounded-xl font-bold hover-bg-primary-dark transition-all">Lacak</button>
                </form>

                @if(request()->has('order_id_unik'))
                    @if(isset($order) && $order)
                        <div class="border-t border-gray-100 pt-8">
                            <h2 class="text-xl font-bold mb-4">Status Pesanan: <span class="text-primary">{{ $order->order_id_unik }}</span></h2>
                            
                            <div class="bg-gray-50 rounded-xl p-4 mb-6">
                                <div class="grid grid-cols-2 gap-4 text-sm">
                                    <div>
                                        <p class="text-gray-500">Tipe Pesanan</p>
                                        <p class="font-semibold">{{ $order->tipe_pesanan }}</p>
                                    </div>
                                    <div>
                                        <p class="text-gray-500">Status Pembayaran</p>
                                        <p class="font-semibold {{ $order->status_pembayaran == 'Paid' ? 'text-green-600' : 'text-orange-500' }}">{{ $order->status_pembayaran }}</p>
                                    </div>
                                </div>
                            </div>

                            <h3 class="font-bold mb-4">Riwayat Progress</h3>
                            <div class="space-y-4">
                                @forelse($order->progresses as $progress)
                                    <div class="flex gap-4">
                                        <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0 text-primary">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                        </div>
                                        <div>
                                            <p class="font-semibold">{{ $progress->status_pengerjaan }}</p>
                                            <p class="text-gray-600 text-sm">{{ $progress->deskripsi_progress }}</p>
                                            <p class="text-gray-400 text-xs mt-1">{{ $progress->created_at->format('d M Y H:i') }}</p>
                                        </div>
                                    </div>
                                @empty
                                    <p class="text-gray-500 text-sm italic">Belum ada progress pengerjaan.</p>
                                @endforelse
                            </div>
                        </div>
                    @else
                        <div class="bg-red-50 text-red-600 p-4 rounded-xl text-center">
                            Pesanan dengan ID <strong>{{ request('order_id_unik') }}</strong> tidak ditemukan.
                        </div>
                    @endif
                @endif
            </div>
        </main>

        <footer class="bg-gray-900 text-white py-6 mt-auto">
            <div class="max-w-7xl mx-auto px-4 text-center">
                <p>&copy; {{ date('Y') }} {{ config('app.name', 'CetakPro') }}. All rights reserved.</p>
            </div>
        </footer>
    </body>
</html>
