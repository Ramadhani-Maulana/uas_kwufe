<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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


    <!-- Our Service Section -->
    <section class="bg-orange-300 py-12 text-center px-8 mt-28">
        <h2 class="text-4xl font-bold text-red-700 mb-8">OUR SERVICE</h2>
        <div class="flex justify-center gap-8">
            <div class="text-center">
                <div class="w-20 h-20 bg-red-600 text-white rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl">📱</span>
                </div>
                <h3 class="font-bold text-xl">Online Booking</h3>
            </div>
            <div class="text-center">
                <div class="w-20 h-20 bg-red-600 text-white rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl">🚚</span>
                </div>
                <h3 class="font-bold text-xl">Delivery Service</h3>
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