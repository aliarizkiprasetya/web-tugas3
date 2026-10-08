<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi UNUGHA</title>
    <!-- Tailwind CSS Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased min-h-screen flex flex-col">

    <!-- 1. Navigation Bar -->
    <nav class="bg-emerald-700 text-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo/Teks Kampus -->
<div class="flex items-center space-x-3">
    <img src="{{ asset('logo unugha.jpg') }}" alt="Logo UNUGHA" class="h-10 w-auto bg-white p-1 rounded-full object-contain">
    <span class="font-bold text-xl tracking-wide">Sistem Informasi UNUGHA</span>
</div>
                
                <!-- Menu (Home, Katalog, Kontak) -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="hover:text-emerald-200 font-medium transition duration-150">Home</a>
                    <a href="#" class="hover:text-emerald-200 font-medium transition duration-150">Katalog</a>
                    <a href="#" class="hover:text-emerald-200 font-medium transition duration-150">Kontak</a>
                </div>

                <!-- Tombol Login -->
                <div>
                    <a href="#" class="bg-white text-emerald-700 hover:bg-emerald-100 px-4 py-2 rounded-lg font-semibold shadow transition duration-150">Login</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content Utama -->
    <main class="flex-grow max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 w-full">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 mb-3">Selamat Datang di Portal UNUGHA</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Sistem Layanan Informasi Terpadu Universitas Nahdlatul Ulama Al Ghazali Cilacap.</p>
        </div>

        <!-- 2. Tiga Buah Card Informasi Ringkas (Menggunakan CSS Grid) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition duration-200 flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mb-4 text-2xl font-bold">
                    📚
                </div>
                <h2 class="text-xl font-bold text-gray-800 mb-2">Katalog Mahasiswa</h2>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Akses data registrasi, jadwal perkuliahan, dan informasi kurikulum mahasiswa secara lengkap dan terstruktur.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition duration-200 flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mb-4 text-2xl font-bold">
                    📝
                </div>
                <h2 class="text-xl font-bold text-gray-800 mb-2">Layanan Akademik</h2>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Pengajuan KRS, cek transkrip nilai, serta layanan administrasi akademik online dengan mudah dan cepat.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-xl shadow-md border border-gray-100 hover:shadow-lg transition duration-200 flex flex-col items-center text-center">
                <div class="w-12 h-12 bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mb-4 text-2xl font-bold">
                    📞
                </div>
                <h2 class="text-xl font-bold text-gray-800 mb-2">Pusat Bantuan</h2>
                <p class="text-gray-600 text-sm leading-relaxed">
                    Dukungan layanan mahasiswa dan dosen untuk menangani kendala sistem informasi serta konsultasi akademik.
                </p>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-gray-400 py-6 text-center text-sm">
        <p>&copy; 2026 Universitas Nahdlatul Ulama Al Ghazali Cilacap. All rights reserved.</p>
    </footer>

</body>
</html>