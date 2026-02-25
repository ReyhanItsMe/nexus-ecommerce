<nav x-data="{ 
        mobileMenu: false, 
        desktopMenuOpen: false,
        lang: 'ID',
        toggleMobileMenu() {
            this.mobileMenu = !this.mobileMenu;
        }
    }" 
    class="fixed top-0 left-0 right-0 z-[100] bg-white/90 dark:bg-organic-dark/90 backdrop-blur-xl border-b border-emerald-100/50 dark:border-emerald-900/50 transition-colors duration-300 h-20">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 h-full relative z-[110]">
        <div class="flex justify-between items-center h-full gap-4">

            <div class="flex-shrink-0 flex items-center gap-2 cursor-pointer">
                <div class="w-10 h-10 bg-emerald-600 rounded-xl flex items-center justify-center shadow-lg shadow-emerald-600/20 text-white transition-transform hover:scale-105">
                    <i class='bx bxs-leaf text-2xl'></i>
                </div>
                <span class="text-xl font-extrabold text-emerald-900 dark:text-emerald-400 tracking-tight">
                    NEXUS<span class="text-emerald-500">eco</span>
                </span>
            </div>

            <div class="hidden md:flex items-center justify-end w-1/3 min-w-max gap-4">
                <div class="flex items-center gap-1 pr-2">
                    <a href="/index.php" class="px-3 py-2 text-sm font-bold text-emerald-900/70 dark:text-emerald-100/60 hover:text-emerald-600 dark:hover:text-emerald-400 transition">Home</a>
                    <span class="text-emerald-200 dark:text-emerald-800">|</span>
                    <a href="/pages/store.php" class="px-3 py-2 text-sm font-bold text-emerald-900/70 dark:text-emerald-100/60 hover:text-emerald-600 dark:hover:text-emerald-400 transition">Store</a>
                    <span class="text-emerald-200 dark:text-emerald-800">|</span>
                    <a href="/pages/promo.php" class="px-3 py-2 text-sm font-bold text-emerald-900/70 dark:text-emerald-100/60 hover:text-emerald-600 dark:hover:text-emerald-400 transition">Promo</a>
                    <span class="text-emerald-200 dark:text-emerald-800">|</span>
                    <a href="/pages/cart.php" class="px-3 py-2 text-sm font-bold text-emerald-900/70 dark:text-emerald-100/60 hover:text-emerald-600 dark:hover:text-emerald-400 transition">Cart</a>
                </div>

                <div class="relative border-l border-emerald-100 dark:border-emerald-800 pl-4">
                    <button @click="desktopMenuOpen = !desktopMenuOpen" class="w-10 h-10 rounded-xl hover:bg-emerald-50 dark:hover:bg-emerald-800/50 flex items-center justify-center transition text-emerald-900 dark:text-emerald-100">
                        <i class='bx bx-menu text-2xl'></i>
                    </button>
                    <div x-show="desktopMenuOpen" @click.away="desktopMenuOpen = false" x-transition class="absolute right-0 top-14 w-16 bg-white dark:bg-organic-dark shadow-xl rounded-2xl border border-emerald-100 dark:border-emerald-800/50 p-2 flex flex-col gap-3 items-center" style="display: none;">
                        <a href="profile.php" class="w-10 h-10 rounded-xl bg-emerald-50 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400 hover:scale-105 transition flex items-center justify-center">
                            <i class='bx bx-user-circle text-xl'></i>
                        </a>
                        <div class="w-full h-px bg-emerald-100 dark:bg-emerald-800"></div>
                        <button @click="darkMode = !darkMode; localStorage.setItem('dark', darkMode)" class="w-10 h-10 rounded-xl bg-emerald-50 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400 hover:scale-105 transition flex items-center justify-center">
                            <i x-show="!darkMode" class='bx bx-moon text-xl'></i><i x-show="darkMode" class='bx bx-sun text-xl'></i>
                        </button>
                        <div class="w-full h-px bg-emerald-100 dark:bg-emerald-800"></div>
                        <button @click="lang = (lang === 'ID' ? 'EN' : 'ID'); desktopMenuOpen = false" 
                                class="w-10 h-10 rounded-xl bg-emerald-50 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400 hover:scale-105 transition flex flex-col items-center justify-center relative shadow-sm">
                            <i class='bx bx-world text-xl'></i>
                            <span class="absolute -bottom-1 -right-1 bg-emerald-600 text-white text-[8px] font-bold px-1 rounded" x-text="lang"></span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="flex md:hidden items-center">
                <button @click="toggleMobileMenu()" class="w-12 h-12 rounded-2xl bg-emerald-900 dark:bg-emerald-500 text-white dark:text-emerald-950 flex items-center justify-center shadow-md active:scale-95 transition">
                    <i class='bx' :class="mobileMenu ? 'bx-x' : 'bx-menu-alt-right' " style="font-size: 1.75rem;"></i>
                </button>
            </div>
        </div>
    </div>

    <div x-show="mobileMenu"
         @click.away="mobileMenu = false"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="-translate-y-10 opacity-0"
         x-transition:enter-end="translate-y-0 opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="translate-y-0 opacity-100"
         x-transition:leave-end="-translate-y-10 opacity-0"
         class="absolute top-20 left-0 w-full bg-white dark:bg-organic-dark border-b border-emerald-100 dark:border-emerald-900/50 shadow-2xl z-[90] md:hidden rounded-b-[2rem]"
         style="display: none;">
        
        <div class="p-6 flex flex-col space-y-2">
            <a href="/index.php" class="p-4 rounded-2xl bg-emerald-50 dark:bg-emerald-900/20 text-emerald-900 dark:text-emerald-100 font-bold text-lg flex items-center justify-between group">
                Home <i class='bx bx-chevron-right text-emerald-400 group-hover:translate-x-1 transition'></i>
            </a>
            <a href="/pages/store.php" class="p-4 rounded-2xl hover:bg-emerald-50 dark:hover:bg-emerald-900/20 text-emerald-900 dark:text-emerald-100 font-bold text-lg flex items-center justify-between group transition">
                Store <i class='bx bx-chevron-right text-emerald-400 group-hover:translate-x-1 transition'></i>
            </a>
            <a href="/pages/promo.php" class="p-4 rounded-2xl hover:bg-emerald-50 dark:hover:bg-emerald-900/20 text-emerald-900 dark:text-emerald-100 font-bold text-lg flex items-center justify-between group transition">
                Promo <i class='bx bx-chevron-right text-emerald-400 group-hover:translate-x-1 transition'></i>
            </a>
            <a href="/pages/cart.php" class="p-4 rounded-2xl hover:bg-emerald-50 dark:hover:bg-emerald-900/20 text-emerald-900 dark:text-emerald-100 font-bold text-lg flex items-center justify-between group transition">
                Cart <i class='bx bx-chevron-right text-emerald-400 group-hover:translate-x-1 transition'></i>
            </a>
            
            <div class="flex justify-between items-center mt-4 pt-4 border-t border-emerald-100 dark:border-emerald-900/30">
                <div class="flex bg-emerald-50 dark:bg-emerald-900/30 p-1 rounded-xl">
                    <button @click="lang = 'ID'" :class="lang === 'ID' ? 'bg-white dark:bg-emerald-600 shadow-sm' : ''" class="px-4 py-2 rounded-lg text-xs font-bold transition">ID</button>
                    <button @click="lang = 'EN'" :class="lang === 'EN' ? 'bg-white dark:bg-emerald-600 shadow-sm' : ''" class="px-4 py-2 rounded-lg text-xs font-bold transition">EN</button>
                </div>
            
                <div class="flex items-center gap-2">
                    <a href="profile.php" class="p-3 rounded-xl bg-emerald-50 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400 active:scale-95 transition">
                        <i class='bx bx-user-circle text-xl'></i>
                    </a>
                    
                    <button @click="darkMode = !darkMode; localStorage.setItem('dark', darkMode)" class="p-3 rounded-xl bg-emerald-50 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400 active:scale-95 transition">
                        <i x-show="!darkMode" class='bx bx-moon text-xl'></i>
                        <i x-show="darkMode" class='bx bx-sun text-xl'></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>
