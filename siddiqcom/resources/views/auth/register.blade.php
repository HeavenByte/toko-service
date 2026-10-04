<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - siddiqcom</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 font-sans text-gray-200 antialiased">
    
    <!-- Container Utama Full Screen -->
    <div class="min-h-screen flex items-center justify-center p-4">
        
        <!-- Kartu Split Layout -->
        <div class="flex flex-col md:flex-row w-full max-w-4xl bg-gray-800 rounded-2xl shadow-2xl overflow-hidden border border-gray-700">

            <!-- Sisi Kiri: Branding & Informasi -->
            <div class="hidden md:flex flex-col justify-center w-1/2 p-12 bg-gray-800 relative">
                <div class="mb-6">
                    <a href="/" class="text-3xl font-extrabold text-yellow-400 tracking-wider flex items-center">
                        <!-- Ikon Logo Sederhana -->
                        <svg class="w-8 h-8 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        siddiqcom
                    </a>
                </div>
                <h3 class="text-xl font-bold text-white mb-4">Bergabunglah Bersama Kami</h3>
                <p class="text-sm text-gray-400 leading-relaxed mb-8">
                    Daftarkan diri Anda untuk menikmati kemudahan melacak perbaikan perangkat dan berbelanja komponen sparepart komputer maupun HP secara online.
                </p>
                <div class="text-xs text-gray-500 mt-auto">
                    Powered By<br>
                    <span class="font-semibold text-gray-400">© 2024 siddiqcom. All rights reserved.</span>
                </div>
            </div>

            <!-- Sisi Kanan: Form Register -->
            <div class="w-full md:w-1/2 p-8 md:p-12 bg-gray-900 flex flex-col justify-center">
                
                <!-- Judul -->
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-semibold text-white mb-2">Create Account</h2>
                    <div class="text-yellow-400 font-bold tracking-widest text-sm uppercase">SIGN UP</div>
                </div>

                <!-- Form Input -->
                <form method="POST" action="{{ route('register') }}" class="space-y-5">
                    @csrf
                    
                    <!-- Input Nama -->
                    <div>
                        <label class="block text-xs font-medium text-gray-400 mb-1">Full Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" required autofocus
                            class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 transition" 
                            placeholder="Nama Lengkap">
                        @error('name')
                            <span class="text-red-400 text-xs mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Input Email -->
                    <div>
                        <label class="block text-xs font-medium text-gray-400 mb-1">Email Address</label>
                        <input type="email" name="email" value="{{ old('email') }}" required
                            class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 transition" 
                            placeholder="email@contoh.com">
                        @error('email')
                            <span class="text-red-400 text-xs mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Input Password -->
                    <div>
                        <label class="block text-xs font-medium text-gray-400 mb-1">Password</label>
                        <input type="password" name="password" required
                            class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 transition" 
                            placeholder="••••••••••••">
                        @error('password')
                            <span class="text-red-400 text-xs mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Input Konfirmasi Password -->
                    <div>
                        <label class="block text-xs font-medium text-gray-400 mb-1">Confirm Password</label>
                        <input type="password" name="password_confirmation" required
                            class="w-full bg-gray-800 border border-gray-700 rounded-lg px-4 py-2.5 text-white focus:outline-none focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 transition" 
                            placeholder="••••••••••••">
                    </div>

                    <!-- Tombol Sign Up -->
                    <button type="submit" class="w-full bg-yellow-400 text-gray-900 font-bold py-3 rounded-lg hover:bg-yellow-500 transition duration-300 mt-2">
                        Sign up
                    </button>
                </form>

                <!-- Link Kembali ke Login -->
                <div class="mt-6 text-center">
                    <span class="text-xs text-gray-500">Already have an account?</span>
                    <a href="{{ route('login') }}" class="text-xs text-yellow-400 hover:text-yellow-500 ml-1 transition">Sign In</a>
                </div>

            </div>
        </div>
    </div>

</body>
</html>