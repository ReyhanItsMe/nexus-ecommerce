<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: localStorage.getItem('dark') === 'true' }" :class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | NexusEco</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'organic-dark': '#051b11',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-emerald-50 dark:bg-organic-dark transition-colors duration-300">

    <div class="min-h-screen flex flex-col md:flex-row">
        
        <div class="hidden md:flex md:w-1/2 bg-emerald-900 relative items-center justify-center overflow-hidden">
            <img src="https://images.unsplash.com/photo-1545241047-6083a3684587?w=1200" 
                 class="absolute inset-0 w-full h-full object-cover opacity-40">
            <div class="relative z-10 p-12 text-white">
                <a href="../index.php" class="text-3xl font-black tracking-tighter flex items-center gap-2 mb-8">
                    <i class='bx bxs-leaf text-emerald-400'></i> NEXUSECO
                </a>
                <h1 class="text-5xl font-extrabold leading-tight mb-4">Mulai Perjalanan Hijau Anda.</h1>
                <p class="text-emerald-100/70 text-lg max-w-md">Dapatkan akses eksklusif ke koleksi tanaman organik terbaik dan panduan perawatan langsung dari ahlinya.</p>
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-emerald-950 via-transparent to-transparent"></div>
        </div>

        <div class="w-full md:w-1/2 flex items-center justify-center p-8 sm:p-12 lg:p-20 bg-white dark:bg-organic-dark">
            <div class="w-full max-w-md">
                <div class="md:hidden mb-10 text-center">
                    <a href="../index.php" class="text-2xl font-black tracking-tighter text-emerald-900 dark:text-white inline-flex items-center gap-2">
                        <i class='bx bxs-leaf text-emerald-500'></i> NEXUSECO
                    </a>
                </div>

                <div class="mb-10">
                    <h2 class="text-3xl font-black text-emerald-900 dark:text-white mb-2 tracking-tight">Buat Akun Baru</h2>
                    <p class="text-emerald-800/50 dark:text-emerald-100/40 font-medium">Lengkapi data diri untuk bergabung dengan komunitas kami.</p>
                </div>

                <form action="process_register.php" method="POST" class="space-y-5">
                    <div>
                        <label class="block text-xs font-black uppercase tracking-widest text-emerald-900 dark:text-emerald-500 mb-2">Nama Lengkap</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-emerald-500/50">
                                <i class='bx bx-user text-xl'></i>
                            </span>
                            <input type="text" name="fullname" placeholder="John Doe" required
                                   class="w-full pl-11 pr-4 py-4 bg-emerald-50 dark:bg-emerald-900/20 border-b-2 border-transparent focus:border-emerald-500 outline-none text-emerald-900 dark:text-white transition-all">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-black uppercase tracking-widest text-emerald-900 dark:text-emerald-500 mb-2">Email</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-emerald-500/50">
                                <i class='bx bx-envelope text-xl'></i>
                            </span>
                            <input type="email" name="email" placeholder="contoh@mail.com" required
                                   class="w-full pl-11 pr-4 py-4 bg-emerald-50 dark:bg-emerald-900/20 border-b-2 border-transparent focus:border-emerald-500 outline-none text-emerald-900 dark:text-white transition-all">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-black uppercase tracking-widest text-emerald-900 dark:text-emerald-500 mb-2">Phone</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-emerald-500/50">
                                <i class='bx bx-phone text-xl'></i>
                            </span>
                            <input type="text" name="phone" placeholder="628123456789" required
                                   class="w-full pl-11 pr-4 py-4 bg-emerald-50 dark:bg-emerald-900/20 border-b-2 border-transparent focus:border-emerald-500 outline-none text-emerald-900 dark:text-white transition-all">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-black uppercase tracking-widest text-emerald-900 dark:text-emerald-500 mb-2">Password</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-emerald-500/50">
                                <i class='bx bx-lock-alt text-xl'></i>
                            </span>
                            <input type="password" name="password" placeholder="••••••••" required
                                   class="w-full pl-11 pr-4 py-4 bg-emerald-50 dark:bg-emerald-900/20 border-b-2 border-transparent focus:border-emerald-500 outline-none text-emerald-900 dark:text-white transition-all">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-black uppercase tracking-widest text-emerald-900 dark:text-emerald-500 mb-2">Konfirmasi Password</label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-emerald-500/50">
                                <i class='bx bx-check-shield text-xl'></i>
                            </span>
                            <input type="password" name="confirm_password" placeholder="••••••••" required
                                   class="w-full pl-11 pr-4 py-4 bg-emerald-50 dark:bg-emerald-900/20 border-b-2 border-transparent focus:border-emerald-500 outline-none text-emerald-900 dark:text-white transition-all">
                        </div>
                    </div>

                    <button type="submit" class="w-full py-5 bg-emerald-900 dark:bg-emerald-500 text-white dark:text-emerald-950 font-black tracking-widest uppercase hover:bg-emerald-800 dark:hover:bg-emerald-400 transition-all active:scale-[0.98] shadow-xl shadow-emerald-500/10 mt-4">
                        Daftar Sekarang
                    </button>
                </form>

                <div class="mt-10 text-center">
                    <p class="text-emerald-800/50 dark:text-emerald-100/40 text-sm font-medium">
                        Sudah punya akun? 
                        <a href="login.php" class="text-emerald-600 dark:text-emerald-400 font-black hover:underline underline-offset-4 ml-1">Masuk di sini</a>
                    </p>
                </div>
            </div>
        </div>

    </div>

</body>
</html>
