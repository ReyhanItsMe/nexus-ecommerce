<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - NexusEco</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: { sans: ['Plus Jakarta Sans', 'sans-serif'] },
                    colors: {
                        organic: { light: '#fdfbf7', dark: '#0f172a' }
                    }
                }
            }
        }
        // Cek Dark Mode dari LocalStorage
        if (localStorage.getItem('dark') === 'true' || (!('dark' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>
<body class="bg-white dark:bg-organic-dark text-slate-800 dark:text-emerald-50 h-screen w-full overflow-hidden flex transition-colors duration-300">

    <div class="hidden md:block w-1/2 h-full relative overflow-hidden bg-emerald-900">
        <img src="https://images.unsplash.com/photo-1459156212016-c812468e2115?w=1000&q=80" 
             alt="Login Background" 
             class="absolute inset-0 w-full h-full object-cover opacity-80 mix-blend-overlay">
        
        <div class="absolute inset-0 bg-gradient-to-t from-emerald-900 via-emerald-900/40 to-transparent"></div>

        <div class="absolute inset-0 flex flex-col justify-between p-12 z-10">
            <div class="flex items-center gap-2">
                <div class="w-10 h-10 bg-white/20 backdrop-blur-md rounded-xl flex items-center justify-center text-white border border-white/30">
                    <i class='bx bxs-leaf text-2xl'></i>
                </div>
                <span class="text-2xl font-extrabold text-white tracking-tight">
                    NEXUS<span class="text-emerald-400">eco</span>
                </span>
            </div>

            <div class="mb-10">
                <p class="text-2xl font-bold text-white leading-relaxed mb-4">
                    "Kembali ke alam bukan hanya pilihan, tapi gaya hidup untuk masa depan yang lebih baik."
                </p>
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-full bg-white/20 backdrop-blur overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="text-white font-bold text-sm">Alexander Ray</h4>
                        <p class="text-emerald-200 text-xs">Verified Member</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full md:w-1/2 h-full flex flex-col justify-center items-center p-6 md:p-12 relative bg-white dark:bg-organic-dark overflow-y-auto">
        
        <a href="/index.php" class="absolute top-6 left-6 md:top-8 md:left-8 flex items-center gap-2 text-emerald-600 dark:text-emerald-400 font-bold text-sm hover:underline">
            <i class='bx bx-arrow-back'></i> Kembali
        </a>

        <div class="w-full max-w-md space-y-8">
            
            <div class="text-center md:text-left">
                <h1 class="text-3xl md:text-4xl font-extrabold text-emerald-900 dark:text-white mb-2">Welcome Back!</h1>
                <p class="text-emerald-800/60 dark:text-emerald-100/50">Masuk untuk mengelola pesanan dan wishlist Anda.</p>
            </div>

            <form action="process_login.php" method="POST" class="space-y-6" x-data="{ showPass: false }">
                
                <div class="space-y-1">
                    <label for="email" class="text-xs font-bold text-emerald-900 dark:text-emerald-100 uppercase tracking-wider ml-1">Email Address</label>
                    <div class="relative group">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-emerald-400 group-focus-within:text-emerald-600 transition-colors">
                            <i class='bx bx-envelope text-xl'></i>
                        </span>
                        <input type="email" id="email" name="email" required placeholder="nama@email.com" 
                               class="w-full pl-11 pr-4 py-3.5 bg-emerald-50 dark:bg-emerald-900/20 border border-emerald-100 dark:border-emerald-800 rounded-2xl focus:border-emerald-500 focus:bg-white dark:focus:bg-emerald-900/40 outline-none text-emerald-900 dark:text-white font-medium transition-all">
                    </div>
                </div>

                <div class="space-y-1">
                    <label for="password" class="text-xs font-bold text-emerald-900 dark:text-emerald-100 uppercase tracking-wider ml-1">Password</label>
                    <div class="relative group">
                        <span class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-emerald-400 group-focus-within:text-emerald-600 transition-colors">
                            <i class='bx bx-lock-alt text-xl'></i>
                        </span>
                        <input :type="showPass ? 'text' : 'password'" id="password" name="password" required placeholder="••••••••" 
                               class="w-full pl-11 pr-12 py-3.5 bg-emerald-50 dark:bg-emerald-900/20 border border-emerald-100 dark:border-emerald-800 rounded-2xl focus:border-emerald-500 focus:bg-white dark:focus:bg-emerald-900/40 outline-none text-emerald-900 dark:text-white font-medium transition-all">
                        
                        <button type="button" @click="showPass = !showPass" class="absolute inset-y-0 right-0 pr-4 flex items-center text-emerald-400 hover:text-emerald-600 cursor-pointer">
                            <i class='bx' :class="showPass ? 'bx-hide' : 'bx-show'"></i>
                        </button>
                    </div>
                </div>

                <div class="flex justify-end">
                    <a href="forgot-password.php" class="text-xs font-bold text-emerald-600 dark:text-emerald-400 hover:text-emerald-500 hover:underline transition">Lupa Password?</a>
                </div>

                <button type="submit" class="w-full py-4 bg-emerald-600 hover:bg-emerald-500 text-white font-black rounded-2xl shadow-lg shadow-emerald-600/20 active:scale-95 transition-all flex items-center justify-center gap-2 group">
                    MASUK SEKARANG <i class='bx bx-right-arrow-alt text-xl group-hover:translate-x-1 transition-transform'></i>
                </button>
            </form>

            <div class="relative py-2">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-emerald-100 dark:border-emerald-800"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-4 bg-white dark:bg-organic-dark text-emerald-800/50 dark:text-emerald-100/40 font-bold text-xs uppercase tracking-widest">Atau masuk dengan</span>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-4">
                <button class="flex items-center justify-center py-3 bg-white dark:bg-emerald-900/30 border border-emerald-100 dark:border-emerald-800 rounded-xl hover:bg-emerald-50 dark:hover:bg-emerald-800 hover:border-emerald-200 transition-all group active:scale-95">
                    <i class="fa-brands fa-google text-2xl text-slate-800 dark:text-white group-hover:scale-110 transition-transform"></i>
                </button>
                <button class="flex items-center justify-center py-3 bg-white dark:bg-emerald-900/30 border border-emerald-100 dark:border-emerald-800 rounded-xl hover:bg-emerald-50 dark:hover:bg-emerald-800 hover:border-emerald-200 transition-all group active:scale-95">
                    <i class="fa-brands fa-microsoft text-2xl text-slate-800 dark:text-white group-hover:scale-110 transition-transform"></i>
                </button>
                <button class="flex items-center justify-center py-3 bg-white dark:bg-emerald-900/30 border border-emerald-100 dark:border-emerald-800 rounded-xl hover:bg-emerald-50 dark:hover:bg-emerald-800 hover:border-emerald-200 transition-all group active:scale-95">
                    <i class="fa-brands fa-apple text-2xl text-slate-800 dark:text-white group-hover:scale-110 transition-transform"></i>
                </button>
            </div>

            <div class="text-center pt-4">
                <p class="text-sm font-medium text-emerald-800/70 dark:text-emerald-100/60">
                    Belum punya akun? 
                    <a href="register.php" class="text-emerald-600 dark:text-emerald-400 font-black hover:underline transition">Daftar Sekarang</a>
                </p>
            </div>

        </div>
    </div>
</body>
</html>
