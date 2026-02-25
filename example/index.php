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
    <?php include 'components/navbar_main.php'; ?>

    <main class="relative pt-20 pb-12 min-h-[calc(100vh-80px)] transition-all duration-300">
        
    </main>

    <?php include 'components/footer.php'; ?>
</body>

</html>
