<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KatsuKaze</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-orange-300">

    <nav class="flex justify-between items-center px-8 py-4 sticky top-0 z-50 shadow-lg backdrop-blur-md">
        <!-- Container Flex untuk gambar dan teks -->
        <div class="flex items-center space-x-2">
            <img src="public/bg.png" alt="Logo" class="w-16 h-16 object-cover">
            <div class="text-3xl font-bold text-red-700">Katsu<span class="text-orange-700">Kaze</span></div>
        </div>
        <!-- Menu -->
        <ul class="flex space-x-6 font-semibold">
            <li><a href="index.php" class="hover:text-red-950 text-red-700">Home</a></li>
            <li><a href="about.php" class="hover:text-red-950 text-red-700">About Us</a></li>
            <li><a href="layanan.php" class="hover:text-red-950 text-red-700">Layanan</a></li>
            <li><a href="pesan.php" class="hover:text-red-950 text-red-700">Pesan</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section id="about" class="bg-orange-300 py-16">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-center text-center md:text-left">
            <!-- Logo -->
            <div class="flex-shrink-0 mb-6 md:mb-0">
                <img src="public/bg.png" alt="KatsuKaze Logo" class="w-80 h-80">
            </div>
            <!-- Description -->
            <div class="ml-8 max-w-xl">
                <h1 class="text-5xl font-bold text-red-700">
                    Katsu<span class="text-orange-700">Kaze</span>
                </h1>
                <p class="text-gray-700 mt-4 leading-relaxed">
                    Katsukaze adalah sebuah usaha kuliner yang menghadirkan cita rasa autentik katsu Jepang dengan
                    sentuhan modern. Menggunakan bahan-bahan berkualitas dan proses higienis, Katsukaze menawarkan
                    berbagai pilihan menu seperti chicken katsu, pork katsu, hingga katsu curry yang disajikan dengan
                    saus khas buatan sendiri.
                </p>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="py-16 bg-orange-300 text-center mt-8">
        <h2 class="text-4xl font-bold text-red-700 mb-6">MENU</h2>
        <p class="text-gray-700 max-w-2xl mx-auto mb-6 leading-relaxed">
            Kami menawarkan beberapa pilihan menu yang bervariasi dan berbeda sehingga pelanggan dapat memilih sesuai
            selera. Tersedia pilihan cheesy chicken katsu, chicken katsu original, dan vegetarian katsu.
        </p>

        <!-- Menu Items -->
        <div class="flex flex-wrap justify-center gap-16">
            <!-- Cheesy Chicken Katsu -->
            <div class="text-center">
                <img src="public/Group 9.png" alt="Cheesy Chicken Katsu" class="w-40 h-40 mx-auto rounded-full">
                <h3 class="text-xl font-bold text-red-700 mt-4">CHEESY CHICKEN KATSU</h3>
                <p class="text-gray-700">Harga</p>
                <a href="#" class="text-orange-700 font-bold">Beli Sekarang</a>
            </div>
            <!-- Chicken Katsu Original -->
            <div class="text-center">
                <img src="public/Group 7-1.png" alt="Chicken Katsu Original" class="w-40 h-40 mx-auto rounded-full">
                <h3 class="text-xl font-bold text-red-700 mt-4">CHICKEN KATSU ORIGINAL</h3>
                <p class="text-gray-700">Harga</p>
                <a href="#" class="text-orange-700 font-bold">Beli Sekarang</a>
            </div>
            <!-- Vegetarian Katsu -->
            <div class="text-center">
                <img src="public/Group 9.png" alt="Vegetarian Katsu" class="w-40 h-40 mx-auto rounded-full">
                <h3 class="text-xl font-bold text-red-700 mt-4">VEGETARIAN KATSU</h3>
                <p class="text-gray-700">Harga</p>
                <a href="#" class="text-orange-700 font-bold">Beli Sekarang</a>
            </div>
        </div>
    </section>


    <footer class="bg-orange-300 py-12 border-t border-gray-300 text-white">
        <!-- Logo Footer -->
        <div class="flex justify-center mb-4">
            <img src="public/bg.png" alt="Logo Footer" class="w-32 h-32">
        </div>

        <!-- KatsuKaze Branding -->
        <h2 class="text-4xl font-bold text-red-700 text-center mb-8">
            Katsu<span class="text-orange-700">Kaze</span>
        </h2>

        <!-- Footer Content -->
        <div class="container mx-auto flex justify-between px-12 text-sm">
            <!-- Hubungi Kami -->
            <div class="space-y-2">
                <h4 class="font-bold text-lg mb-2 text-red-700">Hubungi Kami</h4>
                <ul class="space-y-1">
                    <li class="flex items-center">
                        <i class="fab fa-instagram w-4 h-4 mr-2"></i> Instagram
                    </li>
                    <li class="flex items-center">
                        <i class="fab fa-whatsapp w-4 h-4 mr-2"></i> Whatsapp
                    </li>
                    <li class="flex items-center">
                        <i class="fab fa-facebook w-4 h-4 mr-2"></i> Facebook
                    </li>
                    <li class="flex items-center">
                        <i class="fab fa-tiktok w-4 h-4 mr-2"></i> Tiktok
                    </li>
                </ul>
            </div>

            <!-- Layanan -->
            <div class="text-center space-y-2">
                <h4 class="font-bold text-lg mb-2 text-red-700">Layanan</h4>
                <ul class="space-y-1">
                    <li>Home</li>
                    <li>Tentang Kami</li>
                    <li>Pemesanan</li>
                    <li>Fasilitas</li>
                </ul>
            </div>

            <!-- Alamat -->
            <div class="space-y-2 text-right">
                <h4 class="font-bold text-lg mb-2 text-red-700">Alamat</h4>
                <p class="leading-relaxed">
                    JL Abd Saleh Kec Pakis, Kab Malang<br>
                    Jawa Timur 65154
                </p>
            </div>
        </div>

        <!-- Copyright -->
        <p class="text-center text-gray-600 mt-8 text-sm">© 2024 Katsu | Kaze</p>
    </footer>

</body>

</html>