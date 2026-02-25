<nav class="fixed top-0 left-0 right-0 z-[100] bg-white/90 dark:bg-organic-dark/90 backdrop-blur-xl border-b border-emerald-100/50 dark:border-emerald-900/50 h-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 h-full">
        <div class="flex justify-between items-center h-full">
            
            <div class="flex items-center gap-4">
                <button onclick="history.back()" class="w-10 h-10 rounded-xl bg-gray-50 dark:bg-emerald-900/30 text-emerald-900 dark:text-emerald-400 flex items-center justify-center hover:bg-emerald-500 hover:text-white transition-all active:scale-90 border border-emerald-100 dark:border-emerald-800/50">
                    <i class='bx bx-left-arrow-alt text-2xl'></i>
                </button>

                <div class="h-6 w-px bg-emerald-100 dark:bg-emerald-800"></div>

                <a href="/index.php" class="flex items-center gap-2 group">
                    <div class="w-8 h-8 bg-emerald-600 rounded-lg flex items-center justify-center text-white">
                        <i class='bx bxs-leaf text-lg'></i>
                    </div>
                    <span class="text-lg font-extrabold text-emerald-900 dark:text-emerald-400 tracking-tight">
                        NEXUS<span class="text-emerald-500">eco</span>
                    </span>
                </a>
            </div>

            <div class="flex items-center gap-2">
                <button @click="darkMode = !darkMode; localStorage.setItem('dark', darkMode)" class="w-10 h-10 rounded-xl bg-gray-50 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-400 flex items-center justify-center transition active:scale-90">
                    <i x-show="!darkMode" class='bx bx-moon text-xl'></i>
                    <i x-show="darkMode" class='bx bx-sun text-xl'></i>
                </button>
            </div>

        </div>
    </div>
</nav>
