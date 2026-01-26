<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Chine | Votre futur en Chine</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    {{-- @livewireStyles --}}
</head>
<body class="bg-surface text-neutral font-body antialiased">

    {{-- Navigation --}}
    <nav class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-md border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="shrink-0 flex items-center">
                    <span class="text-primary font-heading font-extrabold text-2xl tracking-tighter">CAMPUS<span class="text-accent">CHINE</span></span>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8 font-medium">
                        <a href="#accueil" class="hover:text-accent transition-colors">Accueil</a>
                        <a href="#pourquoi" class="hover:text-accent transition-colors">Pourquoi la Chine ?</a>
                        <a href="#evenement" class="text-accent font-bold">Événement Mars</a>
                    </div>
                </div>
                <a href="#formulaire" class="bg-primary text-white px-5 py-2 rounded-full text-sm font-bold hover:bg-opacity-90 transition-all">S'inscrire</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    {{-- Footer Simple --}}
    <footer class="bg-primary text-white py-12 text-center">
        <p class="opacity-70">&copy; 2026 Campus Chine. Tous droits réservés.</p>
    </footer>

    {{-- @livewireScripts --}}
</body>
</html>