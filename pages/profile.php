<!DOCTYPE html>
<html lang="id" x-data="{ darkMode: localStorage.getItem('dark') === 'true', openCart: false }" :class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexusEco — Premium Organic Store</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        organic: { 
                            light: '#F8F9F4', 
                            dark: '#06110D' 
                        }
                    },
                    borderRadius: {
                        '4xl': '2rem',
                        '5xl': '3rem',
                    }
                }
            }
        }
    </script>
    
    <style>
        /* Mencegah elemen Alpine 'berkedip' saat load */
        [x-cloak] { display: none !important; }
        
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            -webkit-tap-highlight-color: transparent;
            transition: background-color 0.5s ease;
        }

        /* Custom Scrollbar untuk tema Organik */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: #059669;
            border-radius: 10px;
        }

        /* Animasi CSS murni untuk Drawer agar tidak blink */
        .cart-drawer {
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .cart-overlay {
            transition: opacity 0.4s ease;
        }
    </style>
</head>

<body class="bg-organic-light dark:bg-organic-dark text-slate-800 dark:text-emerald-50 overflow-x-hidden">
    <?php include './../components/navbar_secondary.php'; ?>

    <main class="relative pt-20 pb-12 min-h-[calc(100vh-80px)] transition-all duration-300">

        <section class="py-12 bg-white dark:bg-organic-dark transition-colors duration-300">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
                <div class="flex flex-col md:flex-row items-center md:items-center gap-6 md:gap-10">
                    
                    <div class="relative">
                        <div class="w-32 h-32 md:w-36 md:h-36 bg-emerald-50 dark:bg-emerald-900 border border-emerald-100 dark:border-emerald-800 shadow-xl overflow-hidden">
                            <img src="https://ui-avatars.com/api/?name=User+Name&background=10b981&color=fff&size=200" alt="Profile" class="w-full h-full object-cover">
                        </div>
                        <button class="absolute bottom-2 right-2 w-8 h-8 bg-emerald-500 text-white flex items-center justify-center hover:bg-emerald-600 transition-colors shadow-lg">
                            <i class='bx bx-camera text-base'></i>
                        </button>
                    </div>
        
                    <div class="flex-1 w-full text-center md:text-left">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-4">
                            <div class="flex flex-col md:flex-row md:items-center gap-2 md:gap-4">
                                <h1 class="text-3xl font-black text-emerald-900 dark:text-white tracking-tight">
                                    Nama Lengkap User
                                </h1>
                                <span class="inline-flex items-center px-3 py-1 bg-emerald-50 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400 text-[10px] font-black uppercase tracking-widest border border-emerald-100 dark:border-emerald-800">
                                    Gold Member
                                </span>
                            </div>
                            
                            <p class="text-emerald-800/40 dark:text-emerald-100/30 font-bold text-[10px] uppercase tracking-widest">
                                Member Since Jan 2024
                            </p>
                        </div>
        
                        <div class="space-y-2">
                            <div class="flex flex-col md:flex-row md:items-center justify-between border-b border-emerald-50 dark:border-emerald-900/30 pb-2">
                                <p class="text-emerald-800/60 dark:text-emerald-100/50 font-medium flex items-center justify-center md:justify-start gap-2">
                                    <i class='bx bx-envelope text-lg text-emerald-500'></i> useremail@gmail.com
                                </p>
                                <button class="text-[10px] font-black uppercase tracking-[0.2em] text-rose-500 hover:text-rose-600 dark:text-rose-400 transition-colors underline underline-offset-4 decoration-2">
                                    Verifikasi Sekarang
                                </button>
                            </div>
        
                            <div class="flex flex-col md:flex-row md:items-center justify-between pt-1">
                                <p class="text-emerald-800/60 dark:text-emerald-100/50 font-medium flex items-center justify-center md:justify-start gap-2">
                                    <i class='bx bx-phone text-lg text-emerald-500'></i> +62 812-3456-7890 
                                </p>
                                <span class="flex items-center justify-center gap-1 text-[10px] font-black text-emerald-500 uppercase tracking-widest">
                                    <i class='bx bxs-check-shield text-base'></i> Verified Account
                                </span>
                            </div>
                        </div>
                    </div>
        
                </div>
            </div>
        </section>
        
        <section class="py-12 bg-white dark:bg-organic-dark transition-colors duration-300 border-t border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="flex flex-col md:flex-row justify-between items-start gap-8">
                    
                    <div class="max-w-sm">
                        <h2 class="text-2xl font-black text-emerald-900 dark:text-white tracking-tight mb-2">Personal Information</h2>
                        <p class="text-sm text-emerald-800/50 dark:text-emerald-100/40">
                            Nama ini akan digunakan untuk keperluan pengiriman dan identitas sertifikat tanaman Anda.
                        </p>
                    </div>
        
                    <div class="flex-1 w-full max-w-2xl">
                        <form action="update_name.php" method="POST" class="space-y-6">
                            <div class="group">
                                <label class="block text-[10px] font-black uppercase tracking-widest text-emerald-900 dark:text-emerald-500 mb-2">Nama Lengkap</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-emerald-500/50 group-focus-within:text-emerald-500 transition-colors">
                                        <i class='bx bx-id-card text-xl'></i>
                                    </span>
                                    <input type="text" name="new_name" placeholder="Masukkan nama lengkap Anda..." required
                                           class="w-full pl-11 pr-4 py-4 bg-emerald-50 dark:bg-emerald-900/20 border-b-2 border-transparent focus:border-emerald-500 outline-none text-emerald-900 dark:text-white transition-all font-medium">
                                </div>
                            </div>
                            <button type="submit" class="w-full md:w-auto px-12 py-4 bg-emerald-900 dark:bg-emerald-500 text-white dark:text-emerald-950 text-xs font-black uppercase tracking-widest hover:bg-emerald-800 dark:hover:bg-emerald-400 transition-all active:scale-[0.98] shadow-xl shadow-emerald-500/10">
                                Update Name
                            </button>
                        </form>
                    </div>
        
                </div>
            </div>
        </section>
        
        <section class="py-12 bg-white dark:bg-organic-dark transition-colors duration-300 border-t border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="flex flex-col md:flex-row justify-between items-start gap-8">
                    
                    <div class="max-w-sm">
                        <h2 class="text-2xl font-black text-emerald-900 dark:text-white tracking-tight mb-2">Email Settings</h2>
                        <p class="text-sm text-emerald-800/50 dark:text-emerald-100/40">
                            Pastikan alamat email Anda aktif untuk menerima notifikasi pesanan dan update terbaru.
                        </p>
                    </div>
        
                    <div class="flex-1 w-full max-w-2xl">
                        <form action="update_email.php" method="POST" class="space-y-6">
                            <div>
                                <label class="block text-[10px] font-black uppercase tracking-widest text-emerald-900/40 dark:text-emerald-500/40 mb-2">Email Saat Ini</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-emerald-500/30">
                                        <i class='bx bx-envelope text-xl'></i>
                                    </span>
                                    <input type="email" value="useremail@gmail.com" readonly
                                           class="w-full pl-11 pr-4 py-4 bg-emerald-50/50 dark:bg-emerald-900/5 border-b-2 border-emerald-100 dark:border-emerald-800/50 outline-none text-emerald-900/40 dark:text-white/30 cursor-not-allowed font-medium">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="group">
                                    <label class="block text-[10px] font-black uppercase tracking-widest text-emerald-900 dark:text-emerald-500 mb-2">Email Baru</label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-emerald-500/50 group-focus-within:text-emerald-500 transition-colors">
                                            <i class='bx bx-mail-send text-xl'></i>
                                        </span>
                                        <input type="email" name="new_email" placeholder="Email baru..." required
                                               class="w-full pl-11 pr-4 py-4 bg-emerald-50 dark:bg-emerald-900/20 border-b-2 border-transparent focus:border-emerald-500 outline-none text-emerald-900 dark:text-white transition-all font-medium">
                                    </div>
                                </div>
                                <div class="group">
                                    <label class="block text-[10px] font-black uppercase tracking-widest text-emerald-900 dark:text-emerald-500 mb-2">Konfirmasi Email</label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-emerald-500/50 group-focus-within:text-emerald-500 transition-colors">
                                            <i class='bx bx-check-double text-xl'></i>
                                        </span>
                                        <input type="email" name="confirm_new_email" placeholder="Ulangi email..." required
                                               class="w-full pl-11 pr-4 py-4 bg-emerald-50 dark:bg-emerald-900/20 border-b-2 border-transparent focus:border-emerald-500 outline-none text-emerald-900 dark:text-white transition-all font-medium">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="w-full md:w-auto px-12 py-4 bg-emerald-900 dark:bg-emerald-500 text-white dark:text-emerald-950 text-xs font-black uppercase tracking-widest hover:bg-emerald-800 dark:hover:bg-emerald-400 transition-all active:scale-[0.98] shadow-xl shadow-emerald-500/10">
                                Change Email Address
                            </button>
                        </form>
                    </div>
        
                </div>
            </div>
        </section>
        
        <section class="py-12 bg-white dark:bg-organic-dark transition-colors duration-300 border-t border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="flex flex-col md:flex-row justify-between items-start gap-8">
                    
                    <div class="max-w-sm">
                        <h2 class="text-2xl font-black text-emerald-900 dark:text-white tracking-tight mb-2">Phone Settings</h2>
                        <p class="text-sm text-emerald-800/50 dark:text-emerald-100/40">
                            Gunakan nomor telepon aktif untuk mempermudah koordinasi pengiriman pesanan Anda.
                        </p>
                    </div>
        
                    <div class="flex-1 w-full max-w-2xl">
                        <form action="update_phone.php" method="POST" class="space-y-6">
                            <div>
                                <label class="block text-[10px] font-black uppercase tracking-widest text-emerald-900/40 dark:text-emerald-500/40 mb-2">Nomor Saat Ini</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-emerald-500/30">
                                        <i class='bx bx-phone text-xl'></i>
                                    </span>
                                    <input type="text" value="+62 812-3456-7890" readonly
                                           class="w-full pl-11 pr-4 py-4 bg-emerald-50/50 dark:bg-emerald-900/5 border-b-2 border-emerald-100 dark:border-emerald-800/50 outline-none text-emerald-900/40 dark:text-white/30 cursor-not-allowed font-medium">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="group">
                                    <label class="block text-[10px] font-black uppercase tracking-widest text-emerald-900 dark:text-emerald-500 mb-2">Nomor Baru</label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-emerald-500/50 group-focus-within:text-emerald-500 transition-colors">
                                            <i class='bx bx-phone-call text-xl'></i>
                                        </span>
                                        <input type="tel" name="new_phone" placeholder="0812..." required
                                               class="w-full pl-11 pr-4 py-4 bg-emerald-50 dark:bg-emerald-900/20 border-b-2 border-transparent focus:border-emerald-500 outline-none text-emerald-900 dark:text-white transition-all font-medium">
                                    </div>
                                </div>
                                <div class="group">
                                    <label class="block text-[10px] font-black uppercase tracking-widest text-emerald-900 dark:text-emerald-500 mb-2">Konfirmasi Nomor</label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-emerald-500/50 group-focus-within:text-emerald-500 transition-colors">
                                            <i class='bx bx-check-double text-xl'></i>
                                        </span>
                                        <input type="tel" name="confirm_new_phone" placeholder="Ulangi nomor..." required
                                               class="w-full pl-11 pr-4 py-4 bg-emerald-50 dark:bg-emerald-900/20 border-b-2 border-transparent focus:border-emerald-500 outline-none text-emerald-900 dark:text-white transition-all font-medium">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="w-full md:w-auto px-12 py-4 bg-emerald-900 dark:bg-emerald-500 text-white dark:text-emerald-950 text-xs font-black uppercase tracking-widest hover:bg-emerald-800 dark:hover:bg-emerald-400 transition-all active:scale-[0.98] shadow-xl shadow-emerald-500/10">
                                Change Phone Number
                            </button>
                        </form>
                    </div>
        
                </div>
            </div>
        </section>
        
        <section class="py-12 bg-white dark:bg-organic-dark transition-colors duration-300 border-t border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="flex flex-col md:flex-row justify-between items-start gap-8">
                    
                    <div class="max-w-sm">
                        <h2 class="text-2xl font-black text-emerald-900 dark:text-white tracking-tight mb-2">Security Settings</h2>
                        <p class="text-sm text-emerald-800/50 dark:text-emerald-100/40">
                            Gunakan kombinasi karakter yang kuat untuk menjaga keamanan akun NexusEco Anda.
                        </p>
                    </div>
        
                    <div class="flex-1 w-full max-w-2xl">
                        <form action="update_password.php" method="POST" class="space-y-6">
                            <div class="group">
                                <label class="block text-[10px] font-black uppercase tracking-widest text-emerald-900 dark:text-emerald-500 mb-2">Password Saat Ini</label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-emerald-500/50 group-focus-within:text-emerald-500 transition-colors">
                                        <i class='bx bx-lock text-xl'></i>
                                    </span>
                                    <input type="password" name="current_password" placeholder="Masukkan password lama..." required
                                           class="w-full pl-11 pr-4 py-4 bg-emerald-50 dark:bg-emerald-900/20 border-b-2 border-transparent focus:border-emerald-500 outline-none text-emerald-900 dark:text-white transition-all font-medium">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="group">
                                    <label class="block text-[10px] font-black uppercase tracking-widest text-emerald-900 dark:text-emerald-500 mb-2">Password Baru</label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-emerald-500/50 group-focus-within:text-emerald-500 transition-colors">
                                            <i class='bx bx-lock-open-alt text-xl'></i>
                                        </span>
                                        <input type="password" name="new_password" placeholder="Buat password..." required
                                               class="w-full pl-11 pr-4 py-4 bg-emerald-50 dark:bg-emerald-900/20 border-b-2 border-transparent focus:border-emerald-500 outline-none text-emerald-900 dark:text-white transition-all font-medium">
                                    </div>
                                </div>
                                <div class="group">
                                    <label class="block text-[10px] font-black uppercase tracking-widest text-emerald-900 dark:text-emerald-500 mb-2">Konfirmasi</label>
                                    <div class="relative">
                                        <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-emerald-500/50 group-focus-within:text-emerald-500 transition-colors">
                                            <i class='bx bx-check-shield text-xl'></i>
                                        </span>
                                        <input type="password" name="confirm_new_password" placeholder="Ulangi..." required
                                               class="w-full pl-11 pr-4 py-4 bg-emerald-50 dark:bg-emerald-900/20 border-b-2 border-transparent focus:border-emerald-500 outline-none text-emerald-900 dark:text-white transition-all font-medium">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="w-full md:w-auto px-12 py-4 bg-emerald-900 dark:bg-emerald-500 text-white dark:text-emerald-950 text-xs font-black uppercase tracking-widest hover:bg-emerald-800 dark:hover:bg-emerald-400 transition-all active:scale-[0.98] shadow-xl shadow-emerald-500/10">
                                Update Security Key
                            </button>
                        </form>
                    </div>
        
                </div>
            </div>
        </section>

        <section class="py-12 bg-white dark:bg-organic-dark transition-colors duration-300 border-t border-emerald-50 dark:border-emerald-900/30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="flex flex-col md:flex-row justify-between items-start gap-8">
                    
                    <div class="max-w-sm">
                        <h2 class="text-2xl font-black text-emerald-900 dark:text-white tracking-tight mb-2">Shipping Address</h2>
                        <p class="text-sm text-emerald-800/50 dark:text-emerald-100/40 mb-6">
                            Atur alamat pengiriman utama Anda untuk mempermudah proses checkout.
                        </p>
                        <button class="flex items-center gap-2 text-xs font-black uppercase tracking-widest text-emerald-600 dark:text-emerald-400 hover:text-emerald-500 transition-colors">
                            <i class='bx bx-plus-circle text-xl'></i> Tambah Alamat Baru
                        </button>
                    </div>
        
                    <div class="flex-1 w-full space-y-4">
                        <div class="p-6 bg-emerald-50 dark:bg-emerald-900/10 border-l-4 border-emerald-500 relative group transition-all">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <span class="text-[10px] font-black uppercase tracking-widest text-emerald-500 mb-1 block">Alamat Utama</span>
                                    <h4 class="font-bold text-emerald-900 dark:text-white">Rumah (John Doe)</h4>
                                </div>
                                <div class="flex gap-3">
                                    <button class="text-emerald-900/30 dark:text-white/30 hover:text-emerald-500 transition-colors"><i class='bx bx-edit-alt text-lg'></i></button>
                                    <button class="text-emerald-900/30 dark:text-white/30 hover:text-rose-500 transition-colors"><i class='bx bx-trash text-lg'></i></button>
                                </div>
                            </div>
                            <p class="text-sm text-emerald-800/70 dark:text-emerald-100/60 leading-relaxed">
                                Jl. Alam Sutera No. 123, Blok C, <br>
                                Serpong, Tangerang Selatan, Banten 15320 <br>
                                <span class="font-bold text-[10px] mt-2 block tracking-tight">[+62 812-3456-7890]</span>
                            </p>
                        </div>
        
                        <div class="p-6 bg-white dark:bg-emerald-900/5 border border-emerald-100 dark:border-emerald-800/50 relative group transition-all">
                            <div class="flex justify-between items-start mb-4">
                                <div>
                                    <h4 class="font-bold text-emerald-900 dark:text-white text-sm">Kantor (Nexus Tower)</h4>
                                </div>
                                <div class="flex gap-3">
                                    <button class="text-emerald-900/30 dark:text-white/30 hover:text-emerald-500 transition-colors"><i class='bx bx-edit-alt text-lg'></i></button>
                                    <button class="text-emerald-900/30 dark:text-white/30 hover:text-rose-500 transition-colors"><i class='bx bx-trash text-lg'></i></button>
                                </div>
                            </div>
                            <p class="text-sm text-emerald-800/50 dark:text-emerald-100/40">
                                Sudirman Central Business District, Lot 11, <br>
                                Kebayoran Baru, Jakarta Selatan, 12190
                            </p>
                            <button class="mt-4 text-[10px] font-black uppercase tracking-widest text-emerald-400 hover:text-emerald-500">Jadikan Utama</button>
                        </div>
                    </div>
        
                </div>
            </div>
        </section>
        
        <section class="py-20 bg-emerald-50 dark:bg-black/20 text-center">
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <p class="text-xs font-black text-emerald-900/30 dark:text-white/20 uppercase tracking-[0.3em] mb-6">Selesai Beraktivitas?</p>
                <button class="px-16 py-4 border-2 border-rose-500 text-rose-500 hover:bg-rose-500 hover:text-white font-black text-xs uppercase tracking-[0.2em] transition-all active:scale-95">
                    Sign Out From NexusEco
                </button>
            </div>
        </section>

    </main>

    <?php include './../components/footer_secondary.php'; ?>
</body>

</html>
