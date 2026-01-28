<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    {{-- SEO Meta Tags --}}
    <title>Campus Chine | Bourses d'études en Chine pour étudiants africains</title>
    <meta name="description" content="Décrochez votre bourse d'études en Chine. Campus Chine accompagne les étudiants africains : dossier, visa, intégration. Universités prestigieuses, bourses jusqu'à 100%.">
    <meta name="keywords" content="bourse chine, études chine, université chine, bourse africain, campus chine, étudier en chine">
    <meta name="author" content="Campus Chine">
    
    {{-- Open Graph --}}
    <meta property="og:title" content="Campus Chine | Votre Bourse d'Études en Chine">
    <meta property="og:description" content="Rejoignez l'élite des étudiants africains dans les universités chinoises les plus prestigieuses.">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="fr_FR">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-surface text-neutral font-body antialiased">

    {{-- ============================================
         TOAST NOTIFICATION COMPONENT (Custom - No Laravel Notify)
         Uses Livewire Alpine bundle
         ============================================ --}}
    <div 
        x-data="{ 
            show: false, 
            message: '', 
            title: '',
            type: 'success',
            init() {
                Livewire.on('toast', (data) => {
                    this.message = data[0].message || data.message;
                    this.title = data[0].title || data.title || 'Notification';
                    this.type = data[0].type || data.type || 'success';
                    this.show = true;
                    setTimeout(() => { this.show = false; }, 5000);
                });
            }
        }"
        x-show="show"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-4"
        class="fixed top-24 right-6 z-[100] max-w-sm"
        style="display: none;"
    >
        <div 
            class="rounded-2xl shadow-2xl p-5 flex items-start gap-4"
            :class="{
                'bg-green-50 border border-green-200': type === 'success',
                'bg-red-50 border border-red-200': type === 'error',
                'bg-blue-50 border border-blue-200': type === 'info',
                'bg-yellow-50 border border-yellow-200': type === 'warning'
            }"
        >
            {{-- Icon --}}
            <div 
                class="flex-shrink-0 w-10 h-10 rounded-full flex items-center justify-center"
                :class="{
                    'bg-green-500': type === 'success',
                    'bg-red-500': type === 'error',
                    'bg-blue-500': type === 'info',
                    'bg-yellow-500': type === 'warning'
                }"
            >
                <template x-if="type === 'success'">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </template>
                <template x-if="type === 'error'">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </template>
                <template x-if="type === 'info'">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </template>
                <template x-if="type === 'warning'">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                </template>
            </div>
            
            {{-- Content --}}
            <div class="flex-1">
                <h4 
                    class="font-bold text-sm"
                    :class="{
                        'text-green-800': type === 'success',
                        'text-red-800': type === 'error',
                        'text-blue-800': type === 'info',
                        'text-yellow-800': type === 'warning'
                    }"
                    x-text="title"
                ></h4>
                <p 
                    class="text-sm mt-1"
                    :class="{
                        'text-green-700': type === 'success',
                        'text-red-700': type === 'error',
                        'text-blue-700': type === 'info',
                        'text-yellow-700': type === 'warning'
                    }"
                    x-text="message"
                ></p>
            </div>
            
            {{-- Close Button --}}
            <button @click="show = false" class="text-gray-400 hover:text-gray-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    </div>

    {{-- ============================================
         NAVIGATION - Glassmorphism with Alpine.js (inline)
         ============================================ --}}
    <nav 
        x-data="{ scrolled: false, mobileOpen: false }"
        x-init="window.addEventListener('scroll', () => { scrolled = window.scrollY > 50 })"
        class="fixed top-0 w-full z-50 transition-all duration-300"
        :class="scrolled ? 'navbar-scrolled' : 'bg-transparent'"
    >
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                
                {{-- Logo --}}
                <div class="shrink-0 flex items-center">
                    <a href="#accueil" class="flex items-center gap-3">
                        <img src="{{ asset('images/logo.jpeg') }}" alt="Campus Chine Logo" class="h-12 w-12 rounded-full object-cover shadow-lg">
                        <span class="text-primary font-heading font-extrabold text-2xl tracking-tighter">
                            CAMPUS<span class="text-accent">CHINE</span>
                        </span>
                    </a>
                </div>
                
                {{-- Desktop Navigation --}}
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#accueil" class="font-medium text-neutral hover:text-accent transition-colors duration-200">
                        Accueil
                    </a>
                    <a href="#pourquoi" class="font-medium text-neutral hover:text-accent transition-colors duration-200">
                        Pourquoi la Chine ?
                    </a>
                    <a href="#temoignages" class="font-medium text-neutral hover:text-accent transition-colors duration-200">
                        Témoignages
                    </a>
                    <a href="#campus" class="font-medium text-neutral hover:text-accent transition-colors duration-200">
                        Campus
                    </a>
                    <a href="#evenement" class="font-semibold text-accent hover:text-accent/80 transition-colors duration-200">
                        🔥 Événement Mars
                    </a>
                </div>
                
                {{-- Desktop CTA Button --}}
                <div class="hidden md:block">
                    <a href="#formulaire" class="btn-cta text-sm">
                        Télécharger la Brochure
                    </a>
                </div>
                
                {{-- Mobile Menu Button --}}
                <button 
                    @click="mobileOpen = !mobileOpen"
                    class="md:hidden relative z-50 w-10 h-10 flex items-center justify-center rounded-lg hover:bg-gray-100 transition-colors"
                    aria-label="Menu"
                >
                    <div class="w-6 flex flex-col gap-1.5">
                        <span 
                            class="block h-0.5 bg-primary rounded-full transition-all duration-300"
                            :class="mobileOpen ? 'rotate-45 translate-y-2' : ''"
                        ></span>
                        <span 
                            class="block h-0.5 bg-primary rounded-full transition-all duration-300"
                            :class="mobileOpen ? 'opacity-0' : ''"
                        ></span>
                        <span 
                            class="block h-0.5 bg-primary rounded-full transition-all duration-300"
                            :class="mobileOpen ? '-rotate-45 -translate-y-2' : ''"
                        ></span>
                    </div>
                </button>
            </div>
        </div>
        
        {{-- Mobile Menu Overlay --}}
        <div 
            x-show="mobileOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-black/50 md:hidden"
            @click="mobileOpen = false"
            style="display: none;"
        ></div>
        
        {{-- Mobile Menu Panel --}}
        <div 
            x-show="mobileOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
            class="fixed top-0 right-0 h-full w-80 max-w-[85vw] glass-strong md:hidden z-50 pt-24 px-6"
            style="display: none;"
        >
            <nav class="flex flex-col space-y-6">
                <a href="#accueil" @click="mobileOpen = false" class="text-xl font-semibold text-primary hover:text-accent transition-colors">
                    Accueil
                </a>
                <a href="#pourquoi" @click="mobileOpen = false" class="text-xl font-semibold text-primary hover:text-accent transition-colors">
                    Pourquoi la Chine ?
                </a>
                <a href="#temoignages" @click="mobileOpen = false" class="text-xl font-semibold text-primary hover:text-accent transition-colors">
                    Témoignages
                </a>
                <a href="#campus" @click="mobileOpen = false" class="text-xl font-semibold text-primary hover:text-accent transition-colors">
                    Campus
                </a>
                <a href="#evenement" @click="mobileOpen = false" class="text-xl font-semibold text-accent">
                    🔥 Événement Mars
                </a>
                <hr class="border-gray-200">
                <a href="#formulaire" @click="mobileOpen = false" class="btn-cta text-center">
                    Télécharger la Brochure
                </a>
            </nav>
        </div>
    </nav>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- ============================================
         FOOTER
         ============================================ --}}
    <footer class="gradient-primary text-white">
        {{-- Main Footer --}}
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                
                {{-- Brand --}}
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        <img src="{{ asset('images/logo.jpeg') }}" alt="Campus Chine" class="h-14 w-14 rounded-full object-cover">
                        <span class="font-heading font-extrabold text-2xl">
                            CAMPUS<span class="text-accent">CHINE</span>
                        </span>
                    </div>
                    <p class="text-white/70 leading-relaxed max-w-md mb-6">
                        Votre partenaire de confiance pour accéder aux meilleures universités chinoises. 
                        Accompagnement personnalisé de A à Z pour réaliser votre rêve d'excellence.
                    </p>
                    {{-- Social Links --}}
                    <div class="flex gap-4">
                        <a href="{{ config('app.whatsapp.link') }}{{ config('app.whatsapp.number') }}" target="_blank" 
                           class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-accent transition-colors">
                            <x-lucide-message-circle class="w-5 h-5" />
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-accent transition-colors">
                            <x-lucide-facebook class="w-5 h-5" />
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-accent transition-colors">
                            <x-lucide-instagram class="w-5 h-5" />
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-accent transition-colors">
                            <x-lucide-linkedin class="w-5 h-5" />
                        </a>
                    </div>
                </div>
                
                {{-- Quick Links --}}
                <div>
                    <h4 class="font-heading font-bold text-lg mb-6">Liens Rapides</h4>
                    <ul class="space-y-3">
                        <li><a href="#accueil" class="text-white/70 hover:text-white transition-colors">Accueil</a></li>
                        <li><a href="#pourquoi" class="text-white/70 hover:text-white transition-colors">Pourquoi la Chine</a></li>
                        <li><a href="#temoignages" class="text-white/70 hover:text-white transition-colors">Témoignages</a></li>
                        <li><a href="#formulaire" class="text-white/70 hover:text-white transition-colors">Télécharger la Brochure</a></li>
                    </ul>
                </div>
                
                {{-- Contact --}}
                <div>
                    <h4 class="font-heading font-bold text-lg mb-6">Contact</h4>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-white/70">
                            <x-lucide-mail class="w-5 h-5 text-accent" />
                            <span>contact@campuschine.com</span>
                        </li>
                        <li class="flex items-center gap-3 text-white/70">
                            <x-lucide-phone class="w-5 h-5 text-accent" />
                            <span>{{ config('app.whatsapp.number') }}</span>
                        </li>
                        <li class="flex items-start gap-3 text-white/70">
                            <x-lucide-map-pin class="w-5 h-5 text-accent mt-1" />
                            <span>Pékin, Shanghai, Guangzhou</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        {{-- Copyright Bar --}}
        <div class="border-t border-white/10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-white/50">
                    <p>&copy; 2026 Campus Chine. Tous droits réservés.</p>
                    <p>Votre passerelle vers l'excellence académique chinoise 🇨🇳</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>