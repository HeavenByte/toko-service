<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>siddiqcom - Toko & Servis</title>
    
    <!-- BARIS INI SANGAT PENTING: Memanggil Tailwind CSS lewat Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Navbar dengan Mega Menu -->
    <nav class="bg-white border-b border-gray-200 relative z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                
                <!-- Bagian Kiri: Logo & Menu -->
                <div class="flex items-center h-full space-x-8">
                    <!-- Logo -->
<a href="/" class="flex items-center h-full mr-20 md:mr-28">
    <img src="{{ asset('images/siddiqcom.png') }}" alt="Logo Siddiqcom" class="h-24 md:h-28 w-auto object-contain origin-left transform scale-150 hover:opacity-80 transition">
</a>
                    <!-- Navigasi Utama -->
                    <div class="hidden md:flex items-center h-full space-x-1">
                        
                        <!-- Menu 1: Punya Mega Menu Dropdown -->
                        <div class="group h-full flex items-center">
                            <button class="text-gray-600 font-medium px-3 py-2 rounded-md hover:bg-yellow-50 hover:text-yellow-600 flex items-center transition-colors">
                                Layanan & Toko
                                <!-- Ikon Panah Bawah -->
                                <svg class="w-4 h-4 ml-1 text-gray-400 group-hover:text-yellow-500 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>

                            <!-- Konten Mega Menu -->
                            <div class="absolute top-16 left-0 w-full bg-white border-t border-gray-100 shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 ease-in-out">
                                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                                    <div class="grid grid-cols-3 gap-8">
                                        
                                        <!-- Kolom 1: Servis -->
                                        <div>
                                            <h3 class="text-xs font-bold text-gray-400 tracking-widest uppercase mb-4">Servis Perangkat</h3>
                                            <ul class="space-y-3">
                                                <li>
                                                    <a href="#" class="block p-3 rounded-lg hover:bg-yellow-50 border border-transparent hover:border-yellow-100 transition">
                                                        <div class="font-semibold text-gray-800 text-sm">Lacak Progress Servis</div>
                                                        <div class="text-xs text-gray-500 mt-1">Cek status perbaikan perangkat Anda.</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block p-3 rounded-lg hover:bg-yellow-50 border border-transparent hover:border-yellow-100 transition">
                                                        <div class="font-semibold text-gray-800 text-sm">Cetak Nota Digital</div>
                                                        <div class="text-xs text-gray-500 mt-1">Unduh riwayat perbaikan (PDF).</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Kolom 2: Toko -->
                                        <div>
                                            <h3 class="text-xs font-bold text-gray-400 tracking-widest uppercase mb-4">Toko Sparepart</h3>
                                            <ul class="space-y-3">
                                                <li>
                                                    <a href="#" class="block p-3 rounded-lg hover:bg-yellow-50 border border-transparent hover:border-yellow-100 transition">
                                                        <div class="font-semibold text-gray-800 text-sm">Katalog Sparepart</div>
                                                        <div class="text-xs text-gray-500 mt-1">Lihat ketersediaan komponen.</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <!-- Kolom 3: Banner/Info Tambahan -->
                                        <div class="bg-yellow-50 rounded-xl p-6 flex flex-col justify-center items-start border border-yellow-100">
                                            <span class="bg-yellow-400 text-white text-xs font-bold px-2 py-1 rounded mb-3">BARU</span>
                                            <h4 class="font-bold text-gray-800 mb-2">Layanan Jemput Servis</h4>
                                            <p class="text-sm text-gray-600 mb-4">Kini kami bisa menjemput perangkat rusak langsung ke rumah Anda.</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Menu 2: Link Biasa -->
                        <a href="#" class="text-gray-600 font-medium px-3 py-2 rounded-md hover:bg-yellow-50 hover:text-yellow-600 transition-colors">
                            Kontak
                        </a>
                    </div>
                </div>

                <!-- Bagian Kanan: Tombol Aksi -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="/login" class="text-gray-600 font-medium hover:text-yellow-600 transition-colors">Log in</a>
                    <a href="#" class="bg-gray-900 text-white px-5 py-2 rounded-lg font-medium hover:bg-yellow-500 transition-colors">
                        Mulai Lacak
                    </a>
                </div>

            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <main class="max-w-7xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-sm rounded-2xl p-10 border-t-4 border-yellow-400 text-center mt-10">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-4">Selamat Datang di <span class="text-yellow-500">siddiqcom</span></h1>
            <p class="text-lg text-gray-500 mb-8 max-w-2xl mx-auto">Platform servis perangkat dan toko sparepart digital Anda. Mudah, cepat, dan transparan.</p>
            <button class="bg-yellow-400 text-white font-bold py-3 px-8 rounded-xl hover:bg-yellow-500 hover:shadow-lg transition-all duration-300">
                Lacak Servis Sekarang
            </button>
        </div>
    </main>

</body>
</html>