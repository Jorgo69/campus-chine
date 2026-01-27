@extends('layouts.app')
@section('content')

    {{-- ============================================
         HERO SECTION
         ============================================ --}}
    <section id="accueil" class="relative min-h-screen flex items-center pt-20 pb-16 px-4 overflow-hidden gradient-hero">
        
        {{-- Decorative Blobs --}}
        <div class="section-blob blob-primary w-96 h-96 -top-48 -left-48 absolute"></div>
        <div class="section-blob blob-accent w-80 h-80 top-1/4 -right-40 absolute"></div>
        <div class="section-blob blob-primary w-64 h-64 bottom-0 left-1/3 absolute"></div>
        
        <div class="max-w-7xl mx-auto w-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                
                {{-- Left Content --}}
                <div class="space-y-8 order-2 lg:order-1">
                    
                    {{-- Badge --}}
                    <div class="scroll-hidden">
                        <span class="inline-flex items-center gap-2 bg-accent/10 text-accent font-bold px-5 py-2.5 rounded-full text-sm">
                            <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                            RENTRÉE 2026 - INSCRIPTIONS OUVERTES
                        </span>
                    </div>
                    
                    {{-- Main Title --}}
                    <div class="scroll-hidden delay-100">
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-heading font-extrabold text-primary leading-[1.1] tracking-tight">
                            Votre Bourse d'Études en 
                            <span class="text-gradient-accent">Chine</span>, 
                            C'est Maintenant.
                        </h1>
                    </div>
                    
                    {{-- Subtitle --}}
                    <div class="scroll-hidden delay-200">
                        <p class="text-lg sm:text-xl text-neutral/80 leading-relaxed max-w-xl">
                            Rejoignez l'élite des étudiants africains dans les universités chinoises les plus prestigieuses. 
                            <strong class="text-primary">Accompagnement complet</strong> : dossier, visa, intégration — de votre candidature jusqu'à votre diplôme.
                        </p>
                    </div>
                    
                    {{-- Stats Row --}}
                    <div class="scroll-hidden delay-300">
                        <div class="flex flex-wrap gap-8 py-6 border-y border-gray-200">
                            <div class="text-center">
                                <div class="text-3xl font-heading font-extrabold text-primary">500+</div>
                                <div class="text-sm text-neutral/60">Étudiants accompagnés</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-heading font-extrabold text-accent">100%</div>
                                <div class="text-sm text-neutral/60">Bourses accessibles</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-heading font-extrabold text-primary">50+</div>
                                <div class="text-sm text-neutral/60">Universités partenaires</div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- CTA Buttons --}}
                    <div class="scroll-hidden delay-400">
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#formulaire" class="btn-cta text-center animate-pulse-glow">
                                <x-lucide-download class="w-5 h-5 mr-2" />
                                Télécharger la Brochure Gratuite
                            </a>
                            <a href="#pourquoi" class="btn-outline text-center">
                                En savoir plus
                                <x-lucide-arrow-down class="w-5 h-5 ml-2" />
                            </a>
                        </div>
                    </div>
                </div>
                
                {{-- Right Content - Form with Image --}}
                <div class="order-1 lg:order-2">
                    <div class="scroll-hidden-right">
                        {{-- Image Decoration --}}
                        <div class="relative">
                            <div class="absolute -inset-4 bg-gradient-to-r from-primary/20 to-accent/20 rounded-3xl blur-2xl"></div>
                            <div class="relative">
                                <img 
                                    src="{{ asset('images/images-1.jpeg') }}" 
                                    alt="Étudiants africains en Chine" 
                                    class="w-full h-64 lg:h-80 object-cover rounded-3xl shadow-2xl mb-8"
                                >
                                {{-- Floating Badge --}}
                                <div class="absolute -bottom-4 -right-4 glass-strong rounded-2xl p-4 shadow-xl">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-12 rounded-full gradient-accent flex items-center justify-center">
                                            <x-lucide-trophy class="w-6 h-6 text-white" />
                                        </div>
                                        <div>
                                            <div class="font-bold text-primary">Top 100</div>
                                            <div class="text-sm text-neutral/60">Universités mondiales</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        {{-- The Livewire Form --}}
                        <div class="mt-8">
                            <livewire:lead-form-livewire />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================
         SECTION: POURQUOI LA CHINE
         ============================================ --}}
    <section id="pourquoi" class="relative py-24 lg:py-32 px-4 bg-white overflow-hidden">
        
        {{-- Section Header --}}
        <div class="max-w-7xl mx-auto text-center mb-16 lg:mb-20">
            <div class="scroll-hidden">
                <span class="inline-block bg-primary/10 text-primary font-semibold px-4 py-2 rounded-full text-sm mb-6">
                    POURQUOI NOUS CHOISIR
                </span>
            </div>
            <div class="scroll-hidden delay-100">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-extrabold text-primary mb-6">
                    Pourquoi Étudier en <span class="text-accent">Chine</span> ?
                </h2>
            </div>
            <div class="scroll-hidden delay-200">
                <p class="text-lg text-neutral/70 max-w-2xl mx-auto">
                    La Chine offre une combinaison unique d'excellence académique, de bourses généreuses et d'opportunités de carrière internationales.
                </p>
            </div>
            <div class="scroll-hidden delay-200">
                <div class="h-1 w-24 bg-gradient-to-r from-primary to-accent mx-auto mt-8 rounded-full"></div>
            </div>
        </div>
        
        {{-- Features Grid --}}
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                {{-- Feature 1: Diplômes --}}
                <div class="scroll-hidden delay-100">
                    <div class="card-glass h-full group">
                        <div class="w-16 h-16 rounded-2xl gradient-primary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <x-lucide-graduation-cap class="w-8 h-8 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4">Diplômes de Rang Mondial</h3>
                        <p class="text-neutral/70 leading-relaxed">
                            Universités dans le <strong>Top 100 Shanghai Ranking</strong>. Diplômes reconnus en Afrique, Europe et Amérique. 
                            Ouvrez-vous les portes des meilleures entreprises internationales.
                        </p>
                    </div>
                </div>
                
                {{-- Feature 2: Bourses --}}
                <div class="scroll-hidden delay-200">
                    <div class="card-glass h-full group border-t-4 border-accent">
                        <div class="w-16 h-16 rounded-2xl gradient-accent flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <x-lucide-banknote class="w-8 h-8 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4">Bourses Jusqu'à 100%</h3>
                        <p class="text-neutral/70 leading-relaxed">
                            Bourses CSC, provinciales et universitaires couvrant <strong>scolarité, logement et allocation mensuelle</strong>. 
                            Étudiez sans vous soucier des finances.
                        </p>
                        <div class="mt-4 inline-flex items-center text-accent font-semibold text-sm">
                            <x-lucide-star class="w-4 h-4 mr-1" />
                            Plus populaire
                        </div>
                    </div>
                </div>
                
                {{-- Feature 3: Carrière --}}
                <div class="scroll-hidden delay-300">
                    <div class="card-glass h-full group">
                        <div class="w-16 h-16 rounded-2xl gradient-primary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <x-lucide-trending-up class="w-8 h-8 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4">Explosion de Carrière</h3>
                        <p class="text-neutral/70 leading-relaxed">
                            Le mandarin ouvre les portes de la <strong>2ème économie mondiale</strong>. 
                            Les bilingues mandarin-français gagnent en moyenne +40% de salaire.
                        </p>
                    </div>
                </div>
                
                {{-- Feature 4: Innovation --}}
                <div class="scroll-hidden delay-400">
                    <div class="card-glass h-full group">
                        <div class="w-16 h-16 rounded-2xl gradient-primary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <x-lucide-cpu class="w-8 h-8 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4">Innovation & Technologie</h3>
                        <p class="text-neutral/70 leading-relaxed">
                            Laboratoires de pointe, IA, robotique, énergies renouvelables. 
                            La Chine forme les <strong>leaders tech de demain</strong>.
                        </p>
                    </div>
                </div>
                
                {{-- Feature 5: Vie Étudiante --}}
                <div class="scroll-hidden delay-500">
                    <div class="card-glass h-full group">
                        <div class="w-16 h-16 rounded-2xl gradient-primary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <x-lucide-users class="w-8 h-8 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4">Vie Étudiante Dynamique</h3>
                        <p class="text-neutral/70 leading-relaxed">
                            Campus modernes, clubs internationaux, voyages culturels, festivals. 
                            Une <strong>expérience humaine inoubliable</strong> au cœur de l'Asie.
                        </p>
                    </div>
                </div>
                
                {{-- Feature 6: Réseau Alumni --}}
                <div class="scroll-hidden delay-600">
                    <div class="card-glass h-full group">
                        <div class="w-16 h-16 rounded-2xl gradient-primary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <x-lucide-globe class="w-8 h-8 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4">Réseau Alumni Puissant</h3>
                        <p class="text-neutral/70 leading-relaxed">
                            <strong>500+ diplômés africains</strong> passés par nos services. 
                            Mentorat, événements networking et opportunités professionnelles post-diplôme.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================
         SECTION: TÉMOIGNAGES
         ============================================ --}}
    <section id="temoignages" class="relative py-24 lg:py-32 px-4 bg-gradient-to-b from-surface to-white overflow-hidden">
        
        {{-- Decorative Elements --}}
        <div class="section-blob blob-accent w-72 h-72 top-20 -right-36 absolute"></div>
        <div class="section-blob blob-primary w-64 h-64 bottom-40 -left-32 absolute"></div>
        
        {{-- Section Header --}}
        <div class="max-w-7xl mx-auto text-center mb-16 lg:mb-20">
            <div class="scroll-hidden">
                <span class="inline-block bg-accent/10 text-accent font-semibold px-4 py-2 rounded-full text-sm mb-6">
                    ILS NOUS FONT CONFIANCE
                </span>
            </div>
            <div class="scroll-hidden delay-100">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-extrabold text-primary mb-6">
                    Témoignages de Nos <span class="text-accent">Alumni</span>
                </h2>
            </div>
            <div class="scroll-hidden delay-200">
                <p class="text-lg text-neutral/70 max-w-2xl mx-auto">
                    Découvrez les parcours inspirants de ceux qui ont fait confiance à Campus Chine pour transformer leur avenir.
                </p>
            </div>
        </div>
        
        {{-- Testimonials Grid --}}
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                {{-- Testimonial 1 --}}
                <div class="scroll-hidden delay-100">
                    <div class="card-testimonial h-full">
                        {{-- Quote Icon --}}
                        <div class="text-accent/20 mb-4">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                        </div>
                        
                        {{-- Quote --}}
                        <p class="text-neutral/80 leading-relaxed mb-6 text-lg italic">
                            "Campus Chine m'a ouvert les portes de l'université de <strong class="text-primary">Tsinghua</strong>. 
                            Aujourd'hui, je fais mon doctorat financé à 100%. Sans leur accompagnement, je n'aurais jamais osé postuler."
                        </p>
                        
                        {{-- Author --}}
                        <div class="flex items-center gap-4">
                            <img 
                                src="{{ asset('images/images-2.jpeg') }}" 
                                alt="Amadou K." 
                                class="w-14 h-14 rounded-full object-cover border-2 border-accent"
                            >
                            <div>
                                <div class="font-bold text-primary">Amadou K.</div>
                                <div class="text-sm text-neutral/60">Doctorant, Tsinghua - Sénégal 🇸🇳</div>
                            </div>
                        </div>
                        
                        {{-- Rating --}}
                        <div class="flex gap-1 mt-4">
                            @for($i = 0; $i < 5; $i++)
                                <x-lucide-star class="w-5 h-5 text-yellow-400 fill-current" />
                            @endfor
                        </div>
                    </div>
                </div>
                
                {{-- Testimonial 2 --}}
                <div class="scroll-hidden delay-200">
                    <div class="card-testimonial h-full">
                        {{-- Quote Icon --}}
                        <div class="text-accent/20 mb-4">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                        </div>
                        
                        {{-- Quote --}}
                        <p class="text-neutral/80 leading-relaxed mb-6 text-lg italic">
                            "L'accompagnement visa était <strong class="text-primary">impeccable</strong>. Toutes les démarches administratives, 
                            les documents, les délais — tout était géré. Je n'aurais jamais pu faire ça seule."
                        </p>
                        
                        {{-- Author --}}
                        <div class="flex items-center gap-4">
                            <img 
                                src="{{ asset('images/images-3.jpeg') }}" 
                                alt="Fatou M." 
                                class="w-14 h-14 rounded-full object-cover border-2 border-accent"
                            >
                            <div>
                                <div class="font-bold text-primary">Fatou M.</div>
                                <div class="text-sm text-neutral/60">Master en Commerce, Shanghai - Côte d'Ivoire 🇨🇮</div>
                            </div>
                        </div>
                        
                        {{-- Rating --}}
                        <div class="flex gap-1 mt-4">
                            @for($i = 0; $i < 5; $i++)
                                <x-lucide-star class="w-5 h-5 text-yellow-400 fill-current" />
                            @endfor
                        </div>
                    </div>
                </div>
                
                {{-- Testimonial 3 --}}
                <div class="scroll-hidden delay-300">
                    <div class="card-testimonial h-full">
                        {{-- Quote Icon --}}
                        <div class="text-accent/20 mb-4">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                        </div>
                        
                        {{-- Quote --}}
                        <p class="text-neutral/80 leading-relaxed mb-6 text-lg italic">
                            "En 3 ans, j'ai décroché mon diplôme et un emploi dans une <strong class="text-primary">multinationale à Shanghai</strong>. 
                            Campus Chine, c'est le meilleur investissement de ma vie."
                        </p>
                        
                        {{-- Author --}}
                        <div class="flex items-center gap-4">
                            <img 
                                src="{{ asset('images/images-4.jpeg') }}" 
                                alt="Jean-Paul T." 
                                class="w-14 h-14 rounded-full object-cover border-2 border-accent"
                            >
                            <div>
                                <div class="font-bold text-primary">Jean-Paul T.</div>
                                <div class="text-sm text-neutral/60">Ingénieur chez Huawei - Cameroun 🇨🇲</div>
                            </div>
                        </div>
                        
                        {{-- Rating --}}
                        <div class="flex gap-1 mt-4">
                            @for($i = 0; $i < 5; $i++)
                                <x-lucide-star class="w-5 h-5 text-yellow-400 fill-current" />
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- Trust Badges --}}
        <div class="max-w-4xl mx-auto mt-16">
            <div class="scroll-hidden">
                <div class="glass-strong rounded-2xl p-8">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                        <div>
                            <div class="text-3xl font-heading font-extrabold text-primary">98%</div>
                            <div class="text-sm text-neutral/60">Taux de satisfaction</div>
                        </div>
                        <div>
                            <div class="text-3xl font-heading font-extrabold text-accent">500+</div>
                            <div class="text-sm text-neutral/60">Étudiants placés</div>
                        </div>
                        <div>
                            <div class="text-3xl font-heading font-extrabold text-primary">15+</div>
                            <div class="text-sm text-neutral/60">Pays représentés</div>
                        </div>
                        <div>
                            <div class="text-3xl font-heading font-extrabold text-accent">5 ans</div>
                            <div class="text-sm text-neutral/60">D'expérience</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================
         SECTION: ÉVÉNEMENT MARS 2026
         ============================================ --}}
    <section id="evenement" class="relative py-20 lg:py-28 px-4 overflow-hidden">
        
        {{-- Background Gradient --}}
        <div class="absolute inset-0 gradient-accent"></div>
        
        {{-- Decorative Pattern --}}
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-full h-full" 
                 style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.4\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');"></div>
        </div>
        
        <div class="max-w-6xl mx-auto relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                {{-- Left Content --}}
                <div class="text-white text-center lg:text-left">
                    <div class="scroll-hidden">
                        <span class="inline-flex items-center gap-2 bg-white/20 text-white font-bold px-4 py-2 rounded-full text-sm mb-6">
                            <span class="animate-pulse">🔴</span>
                            PLACES LIMITÉES
                        </span>
                    </div>
                    
                    <div class="scroll-hidden delay-100">
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-black mb-6 leading-tight">
                            🚀 CONFÉRENCE EXCLUSIVE
                            <br>
                            <span class="text-white/90">MARS 2026</span>
                        </h2>
                    </div>
                    
                    <div class="scroll-hidden delay-200">
                        <p class="text-xl text-white/90 mb-8 leading-relaxed">
                            Session d'orientation en direct avec nos experts. Découvrez les <strong>meilleures universités</strong>, 
                            les <strong>bourses disponibles</strong> et posez toutes vos questions.
                        </p>
                    </div>
                    
                    <div class="scroll-hidden delay-300">
                        <ul class="space-y-3 mb-8 text-left inline-block">
                            <li class="flex items-center gap-3">
                                <x-lucide-check-circle class="w-6 h-6 text-white" />
                                <span>Présentation des universités partenaires</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <x-lucide-check-circle class="w-6 h-6 text-white" />
                                <span>Session Q&A en direct</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <x-lucide-check-circle class="w-6 h-6 text-white" />
                                <span>Témoignages d'anciens étudiants</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <x-lucide-check-circle class="w-6 h-6 text-white" />
                                <span>Guide exclusif offert aux participants</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                {{-- Right Content - CTA Card --}}
                <div class="scroll-hidden-right">
                    <div class="glass-strong rounded-3xl p-8 lg:p-10 text-center">
                        <div class="mb-6">
                            <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-accent/10 mb-4">
                                <x-lucide-calendar class="w-10 h-10 text-accent" />
                            </div>
                            <h3 class="text-2xl font-heading font-bold text-primary mb-2">
                                Samedi 15 Mars 2026
                            </h3>
                            <p class="text-neutral/60">14h00 - 17h00 (Heure de Paris)</p>
                        </div>
                        
                        <div class="border-t border-gray-200 pt-6 mb-6">
                            <p class="text-neutral/70 mb-6">
                                Inscrivez-vous maintenant via WhatsApp pour réserver votre place gratuitement.
                            </p>
                        </div>
                        
                        <a 
                            href="{{ config('app.whatsapp.link') }}{{ config('app.whatsapp.number') }}?text=Bonjour%2C%20je%20souhaite%20m%27inscrire%20%C3%A0%20la%20conf%C3%A9rence%20de%20Mars%202026" 
                            target="_blank"
                            class="w-full btn-cta justify-center text-lg animate-pulse-glow"
                        >
                            <x-lucide-message-circle class="w-6 h-6 mr-2" />
                            RÉSERVER MA PLACE SUR WHATSAPP
                        </a>
                        
                        <p class="text-sm text-neutral/50 mt-4">
                            🎁 Bonus : Guide des bourses offert à l'inscription
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================
         SECTION: FINAL CTA (Formulaire)
         ============================================ --}}
    <section id="formulaire" class="relative py-24 lg:py-32 px-4 bg-gradient-to-b from-white to-surface overflow-hidden">
        
        {{-- Decorative Blobs --}}
        <div class="section-blob blob-primary w-80 h-80 -top-40 -left-40 absolute"></div>
        <div class="section-blob blob-accent w-72 h-72 bottom-20 -right-36 absolute"></div>
        
        <div class="max-w-4xl mx-auto relative z-10">
            
            {{-- Section Header --}}
            <div class="text-center mb-12">
                <div class="scroll-hidden">
                    <span class="inline-block bg-accent/10 text-accent font-semibold px-4 py-2 rounded-full text-sm mb-6">
                        PASSEZ À L'ACTION
                    </span>
                </div>
                <div class="scroll-hidden delay-100">
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-extrabold text-primary mb-6">
                        Téléchargez Votre <span class="text-accent">Brochure Gratuite</span>
                    </h2>
                </div>
                <div class="scroll-hidden delay-200">
                    <p class="text-lg text-neutral/70 max-w-2xl mx-auto">
                        Recevez notre guide complet des universités chinoises, des programmes de bourses et des étapes pour réussir votre candidature.
                    </p>
                </div>
            </div>
            
            {{-- Form Container --}}
            <div class="scroll-hidden-scale delay-300">
                <div class="max-w-xl mx-auto">
                    <livewire:lead-form-livewire />
                </div>
            </div>
            
            {{-- Trust Elements --}}
            <div class="scroll-hidden delay-400">
                <div class="flex flex-wrap justify-center gap-6 mt-12 text-sm text-neutral/60">
                    <div class="flex items-center gap-2">
                        <x-lucide-shield-check class="w-5 h-5 text-green-500" />
                        <span>Données sécurisées</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <x-lucide-mail-check class="w-5 h-5 text-green-500" />
                        <span>Aucun spam</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <x-lucide-download class="w-5 h-5 text-green-500" />
                        <span>Téléchargement instantané</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection