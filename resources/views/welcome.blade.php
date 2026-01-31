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
                            RENTREE 2026 - INSCRIPTIONS OUVERTES
                        </span>
                    </div>
                    
                    {{-- Main Title --}}
                    <div class="scroll-hidden delay-100">
                        <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-heading font-extrabold text-primary leading-[1.1] tracking-tight">
                            Votre Bourse d'Etudes en 
                            <span class="text-gradient-accent">Chine</span>, 
                            C'est Maintenant.
                        </h1>
                    </div>
                    
                    {{-- Subtitle --}}
                    <div class="scroll-hidden delay-200">
                        <p class="text-lg sm:text-xl text-neutral/80 leading-relaxed max-w-xl">
                            Rejoignez l'elite des etudiants africains dans les universites chinoises les plus prestigieuses. 
                            <strong class="text-primary">Accompagnement complet</strong> : dossier, visa, integration — de votre candidature jusqu'a votre diplome.
                        </p>
                    </div>
                    
                    {{-- Stats Row --}}
                    <div class="scroll-hidden delay-300">
                        <div class="flex flex-wrap gap-8 py-6 border-y border-gray-200">
                            <div class="text-center">
                                <div class="text-3xl font-heading font-extrabold text-primary">500+</div>
                                <div class="text-sm text-neutral/60">Etudiants accompagnes</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-heading font-extrabold text-accent">100%</div>
                                <div class="text-sm text-neutral/60">Bourses accessibles</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-heading font-extrabold text-primary">50+</div>
                                <div class="text-sm text-neutral/60">Universites partenaires</div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- CTA Buttons --}}
                    <div class="scroll-hidden delay-400">
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="{{ config('landing.whatsapp.link') }}{{ config('landing.whatsapp.number') }}?text={{ urlencode(config('landing.whatsapp.brochure_message')) }}" 
                               target="_blank"
                               class="btn-cta text-center animate-pulse-glow">
                                <x-lucide-message-circle class="w-5 h-5 mr-2" />
                                Obtenir la Brochure via WhatsApp
                            </a>
                            <a href="#parcours" class="btn-outline text-center">
                                Decouvrir le parcours
                                <x-lucide-arrow-down class="w-5 h-5 ml-2" />
                            </a>
                        </div>
                    </div>
                </div>
                
                {{-- Right Content - Image + WhatsApp CTA --}}
                <div class="order-1 lg:order-2">
                    <div class="scroll-hidden-right">
                        {{-- Image Decoration --}}
                        <div class="relative">
                            <div class="absolute -inset-4 bg-gradient-to-r from-primary/20 to-accent/20 rounded-3xl blur-2xl"></div>
                            <div class="relative">
                                <img 
                                    src="{{ asset('images/images-1.jpeg') }}" 
                                    alt="Etudiants africains en Chine" 
                                    class="w-full h-80 lg:h-96 object-cover rounded-3xl shadow-2xl"
                                >
                                {{-- Floating Badge --}}
                                <div class="absolute -bottom-4 -right-4 glass-strong rounded-2xl p-4 shadow-xl">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-12 rounded-full gradient-accent flex items-center justify-center">
                                            <x-lucide-trophy class="w-6 h-6 text-white" />
                                        </div>
                                        <div>
                                            <div class="font-bold text-primary">Top 100</div>
                                            <div class="text-sm text-neutral/60">Universites mondiales</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        {{-- WhatsApp CTA Card --}}
                        <div class="mt-8 glass-strong rounded-2xl p-6 text-center">
                            <h3 class="font-heading font-bold text-xl text-primary mb-3">
                                Pret a commencer ?
                            </h3>
                            <p class="text-neutral/70 mb-4 text-sm">
                                Contactez-nous sur WhatsApp pour un accompagnement personnalise
                            </p>
                            <a href="{{ config('landing.whatsapp.link') }}{{ config('landing.whatsapp.number') }}?text={{ urlencode(config('landing.whatsapp.message')) }}" 
                               target="_blank"
                               class="w-full btn-cta justify-center">
                                <x-lucide-message-circle class="w-5 h-5 mr-2" />
                                Contactez-nous sur WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================
         SECTION: NOTRE MISSION
         ============================================ --}}
    <section id="mission" class="relative py-24 lg:py-32 px-4 bg-gradient-to-b from-white to-surface overflow-hidden">
        
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                
                {{-- Left Content --}}
                <div>
                    <div class="scroll-hidden">
                        <span class="inline-block bg-accent/10 text-accent font-semibold px-4 py-2 rounded-full text-sm mb-6">
                            QUI SOMMES-NOUS
                        </span>
                    </div>
                    
                    <div class="scroll-hidden delay-100">
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-extrabold text-primary mb-6">
                            Notre <span class="text-accent">Mission</span>
                        </h2>
                    </div>
                    
                    <div class="scroll-hidden delay-200">
                        <p class="text-lg text-neutral/80 leading-relaxed mb-8">
                            {{ config('landing.mission.intro') }}
                        </p>
                    </div>
                    
                    {{-- Mission Points --}}
                    <div class="space-y-4">
                        @foreach(config('landing.mission.points') as $index => $point)
                            <div class="scroll-hidden delay-{{ ($index + 3) * 100 }}">
                                <div class="flex items-start gap-4 p-4 rounded-xl bg-white shadow-sm hover:shadow-md transition-shadow">
                                    <div class="flex-shrink-0 w-8 h-8 rounded-full gradient-primary flex items-center justify-center">
                                        <x-lucide-check class="w-4 h-4 text-white" />
                                    </div>
                                    <p class="text-neutral/80">{{ $point }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                    <div class="scroll-hidden delay-700 mt-8">
                        <p class="text-primary font-semibold italic">
                            {{ config('landing.mission.conclusion') }}
                        </p>
                    </div>
                </div>
                
                {{-- Right Content - Image --}}
                <div class="scroll-hidden-right">
                    <div class="relative">
                        <div class="absolute -inset-4 bg-gradient-to-r from-accent/20 to-primary/20 rounded-3xl blur-2xl"></div>
                        <img 
                            src="{{ asset('images/images-2.jpeg') }}" 
                            alt="Etudiants Campus Chine" 
                            class="relative w-full h-96 object-cover rounded-3xl shadow-2xl"
                        >
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
                    Pourquoi Etudier en <span class="text-accent">Chine</span> ?
                </h2>
            </div>
            <div class="scroll-hidden delay-200">
                <p class="text-lg text-neutral/70 max-w-2xl mx-auto">
                    La Chine offre une combinaison unique d'excellence academique, de bourses genereuses et d'opportunites de carriere internationales.
                </p>
            </div>
        </div>
        
        {{-- Features Grid --}}
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                {{-- Feature 1 --}}
                <div class="scroll-hidden delay-100">
                    <div class="card-glass h-full group">
                        <div class="w-16 h-16 rounded-2xl gradient-primary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <x-lucide-graduation-cap class="w-8 h-8 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4">Diplomes de Rang Mondial</h3>
                        <p class="text-neutral/70 leading-relaxed">
                            Universites dans le Top 100 Shanghai Ranking. Diplomes reconnus en Afrique, Europe et Amerique.
                        </p>
                    </div>
                </div>
                
                {{-- Feature 2 --}}
                <div class="scroll-hidden delay-200">
                    <div class="card-glass h-full group border-t-4 border-accent">
                        <div class="w-16 h-16 rounded-2xl gradient-accent flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <x-lucide-banknote class="w-8 h-8 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4">Bourses Jusqu'a 100%</h3>
                        <p class="text-neutral/70 leading-relaxed">
                            Bourses CSC, provinciales et universitaires couvrant scolarite, logement et allocation mensuelle.
                        </p>
                    </div>
                </div>
                
                {{-- Feature 3 --}}
                <div class="scroll-hidden delay-300">
                    <div class="card-glass h-full group">
                        <div class="w-16 h-16 rounded-2xl gradient-primary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <x-lucide-trending-up class="w-8 h-8 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4">Explosion de Carriere</h3>
                        <p class="text-neutral/70 leading-relaxed">
                            Le mandarin ouvre les portes de la 2eme economie mondiale. Bilingues gagnent +40% de salaire.
                        </p>
                    </div>
                </div>
                
                {{-- Feature 4 --}}
                <div class="scroll-hidden delay-400">
                    <div class="card-glass h-full group">
                        <div class="w-16 h-16 rounded-2xl gradient-primary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <x-lucide-cpu class="w-8 h-8 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4">Innovation & Technologie</h3>
                        <p class="text-neutral/70 leading-relaxed">
                            Laboratoires de pointe, IA, robotique. La Chine forme les leaders tech de demain.
                        </p>
                    </div>
                </div>
                
                {{-- Feature 5 --}}
                <div class="scroll-hidden delay-500">
                    <div class="card-glass h-full group">
                        <div class="w-16 h-16 rounded-2xl gradient-primary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <x-lucide-users class="w-8 h-8 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4">Vie Etudiante Dynamique</h3>
                        <p class="text-neutral/70 leading-relaxed">
                            Campus modernes, clubs internationaux, voyages culturels. Une experience humaine inoubliable.
                        </p>
                    </div>
                </div>
                
                {{-- Feature 6 --}}
                <div class="scroll-hidden delay-600">
                    <div class="card-glass h-full group">
                        <div class="w-16 h-16 rounded-2xl gradient-primary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <x-lucide-globe class="w-8 h-8 text-white" />
                        </div>
                        <h3 class="text-xl font-bold text-primary mb-4">Reseau Alumni Puissant</h3>
                        <p class="text-neutral/70 leading-relaxed">
                            500+ diplomes africains. Mentorat, networking et opportunites professionnelles post-diplome.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================
         SECTION: PARCOURS ETUDIANT (FAQ Accordions)
         ============================================ --}}
    <section id="parcours" class="relative py-24 lg:py-32 px-4 bg-gradient-to-b from-surface to-white overflow-hidden">
        
        {{-- Decorative Elements --}}
        <div class="section-blob blob-accent w-72 h-72 top-20 -right-36 absolute"></div>
        <div class="section-blob blob-primary w-64 h-64 bottom-40 -left-32 absolute"></div>
        
        {{-- Section Header --}}
        <div class="max-w-7xl mx-auto text-center mb-16">
            <div class="scroll-hidden">
                <span class="inline-block bg-accent/10 text-accent font-semibold px-4 py-2 rounded-full text-sm mb-6">
                    VOTRE PARCOURS
                </span>
            </div>
            <div class="scroll-hidden delay-100">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-extrabold text-primary mb-6">
                    Le Parcours Etudiant avec <span class="text-accent">Campus Chine</span>
                </h2>
            </div>
            <div class="scroll-hidden delay-200">
                <p class="text-lg text-neutral/70 max-w-2xl mx-auto">
                    De votre premiere question jusqu'a votre diplome, nous vous accompagnons a chaque etape.
                </p>
            </div>
        </div>
        
        {{-- Accordions --}}
        <div class="max-w-4xl mx-auto">
            <div class="space-y-4" x-data="{ activeAccordion: null }">
                @foreach(config('landing.parcours') as $index => $step)
                    <div class="scroll-hidden delay-{{ ($index + 1) * 100 }}">
                        <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition-shadow overflow-hidden">
                            {{-- Accordion Header --}}
                            <button 
                                @click="activeAccordion = activeAccordion === {{ $index }} ? null : {{ $index }}"
                                class="w-full flex items-center justify-between p-6 text-left"
                            >
                                <div class="flex items-center gap-4">
                                    <div class="flex-shrink-0 w-12 h-12 rounded-xl flex items-center justify-center"
                                         :class="activeAccordion === {{ $index }} ? 'gradient-accent' : 'bg-primary/10'">
                                        <span class="font-heading font-bold text-lg"
                                              :class="activeAccordion === {{ $index }} ? 'text-white' : 'text-primary'">
                                            {{ $index + 1 }}
                                        </span>
                                    </div>
                                    <h3 class="font-heading font-bold text-lg text-primary">
                                        {{ $step['title'] }}
                                    </h3>
                                </div>
                                <div class="flex-shrink-0 ml-4">
                                    <x-lucide-chevron-down 
                                        class="w-6 h-6 text-primary transition-transform duration-300"
                                        x-bind:class="activeAccordion === {{ $index }} ? 'rotate-180' : ''"
                                    />
                                </div>
                            </button>
                            
                            {{-- Accordion Content --}}
                            <div 
                                x-show="activeAccordion === {{ $index }}"
                                x-collapse
                                x-cloak
                            >
                                <div class="px-6 pb-6">
                                    <div class="pl-16 border-l-2 border-accent/30">
                                        <p class="text-neutral/70 leading-relaxed">
                                            {{ $step['content'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            {{-- CTA after accordions --}}
            <div class="scroll-hidden delay-700 text-center mt-12">
                <p class="text-neutral/70 mb-6">
                    Pret a commencer votre parcours ?
                </p>
                <a href="{{ config('landing.whatsapp.link') }}{{ config('landing.whatsapp.number') }}?text={{ urlencode(config('landing.whatsapp.message')) }}" 
                   target="_blank"
                   class="btn-cta">
                    <x-lucide-message-circle class="w-5 h-5 mr-2" />
                    Discuter avec un conseiller
                </a>
            </div>
        </div>
    </section>

    {{-- ============================================
         SECTION: TEMOIGNAGES
         ============================================ --}}
    <section id="temoignages" class="relative py-24 lg:py-32 px-4 bg-white overflow-hidden">
        
        {{-- Section Header --}}
        <div class="max-w-7xl mx-auto text-center mb-16">
            <div class="scroll-hidden">
                <span class="inline-block bg-accent/10 text-accent font-semibold px-4 py-2 rounded-full text-sm mb-6">
                    ILS NOUS FONT CONFIANCE
                </span>
            </div>
            <div class="scroll-hidden delay-100">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-extrabold text-primary mb-6">
                    Temoignages de Nos <span class="text-accent">Alumni</span>
                </h2>
            </div>
        </div>
        
        {{-- Testimonials Grid --}}
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                {{-- Testimonial 1 --}}
                <div class="scroll-hidden delay-100">
                    <div class="card-testimonial h-full">
                        <div class="text-accent/20 mb-4">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                        </div>
                        <p class="text-neutral/80 leading-relaxed mb-6 text-lg italic">
                            "Campus Chine m'a ouvert les portes de l'universite de Tsinghua. Aujourd'hui, je fais mon doctorat finance a 100%."
                        </p>
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('images/images-2.jpeg') }}" alt="Amadou K." class="w-14 h-14 rounded-full object-cover border-2 border-accent">
                            <div>
                                <div class="font-bold text-primary">Amadou K.</div>
                                <div class="text-sm text-neutral/60">Doctorant, Tsinghua - Senegal</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Testimonial 2 --}}
                <div class="scroll-hidden delay-200">
                    <div class="card-testimonial h-full">
                        <div class="text-accent/20 mb-4">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                        </div>
                        <p class="text-neutral/80 leading-relaxed mb-6 text-lg italic">
                            "L'accompagnement visa etait impeccable. Toutes les demarches administratives, tout etait gere."
                        </p>
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('images/images-3.jpeg') }}" alt="Fatou M." class="w-14 h-14 rounded-full object-cover border-2 border-accent">
                            <div>
                                <div class="font-bold text-primary">Fatou M.</div>
                                <div class="text-sm text-neutral/60">Master Commerce, Shanghai - Cote d'Ivoire</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                {{-- Testimonial 3 --}}
                <div class="scroll-hidden delay-300">
                    <div class="card-testimonial h-full">
                        <div class="text-accent/20 mb-4">
                            <svg class="w-12 h-12" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                            </svg>
                        </div>
                        <p class="text-neutral/80 leading-relaxed mb-6 text-lg italic">
                            "En 3 ans, j'ai decroche mon diplome et un emploi dans une multinationale a Shanghai."
                        </p>
                        <div class="flex items-center gap-4">
                            <img src="{{ asset('images/images-4.jpeg') }}" alt="Jean-Paul T." class="w-14 h-14 rounded-full object-cover border-2 border-accent">
                            <div>
                                <div class="font-bold text-primary">Jean-Paul T.</div>
                                <div class="text-sm text-neutral/60">Ingenieur chez Huawei - Cameroun</div>
                            </div>
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
                            <div class="text-sm text-neutral/60">Etudiants places</div>
                        </div>
                        <div>
                            <div class="text-3xl font-heading font-extrabold text-primary">15+</div>
                            <div class="text-sm text-neutral/60">Pays representes</div>
                        </div>
                        <div>
                            <div class="text-3xl font-heading font-extrabold text-accent">5 ans</div>
                            <div class="text-sm text-neutral/60">D'experience</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================
         SECTION: VIE SUR LE CAMPUS (Masonry Grid)
         ============================================ --}}
    <section id="campus" class="relative py-24 lg:py-32 px-4 bg-gradient-to-b from-white to-surface overflow-hidden">
        
        {{-- Section Header --}}
        <div class="max-w-7xl mx-auto text-center mb-16">
            <div class="scroll-hidden">
                <span class="inline-block bg-primary/10 text-primary font-semibold px-4 py-2 rounded-full text-sm mb-6">
                    IMMERSION TOTALE
                </span>
            </div>
            <div class="scroll-hidden delay-100">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-extrabold text-primary mb-6">
                    La Vie sur le <span class="text-accent">Campus</span>
                </h2>
            </div>
        </div>
        
        {{-- Masonry Grid --}}
        <div class="max-w-6xl mx-auto">
            <div class="columns-1 sm:columns-2 lg:columns-3 gap-6 space-y-6">
                @foreach(['images-1', 'images-2', 'images-3', 'images-4'] as $index => $image)
                    <div class="scroll-hidden delay-{{ ($index + 1) * 100 }} break-inside-avoid">
                        <div class="relative group overflow-hidden rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500">
                            <img 
                                src="{{ asset('images/' . $image . '.jpeg') }}" 
                                alt="Vie sur le campus" 
                                class="w-full h-auto object-cover transform group-hover:scale-110 transition-transform duration-700"
                            >
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/80 via-primary/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============================================
         SECTION: EVENEMENT MARS 2026
         ============================================ --}}
    <section id="evenement" class="relative py-20 lg:py-28 px-4 overflow-hidden">
        
        {{-- Background Gradient --}}
        <div class="absolute inset-0 gradient-accent"></div>
        
        <div class="max-w-6xl mx-auto relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                {{-- Left Content --}}
                <div class="text-white text-center lg:text-left">
                    <div class="scroll-hidden">
                        <span class="inline-flex items-center gap-2 bg-white/20 text-white font-bold px-4 py-2 rounded-full text-sm mb-6">
                            <span class="animate-pulse">*</span>
                            PLACES LIMITEES
                        </span>
                    </div>
                    
                    <div class="scroll-hidden delay-100">
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-black mb-6 leading-tight">
                            {{ config('landing.event.title') }}
                            <br>
                            <span class="text-white/90">MARS 2026</span>
                        </h2>
                    </div>
                    
                    <div class="scroll-hidden delay-200">
                        <p class="text-xl text-white/90 mb-8 leading-relaxed">
                            Session d'orientation en direct avec nos experts. Decouvrez les meilleures universites et posez vos questions.
                        </p>
                    </div>
                    
                    <div class="scroll-hidden delay-300">
                        <ul class="space-y-3 mb-8 text-left inline-block">
                            <li class="flex items-center gap-3">
                                <x-lucide-check-circle class="w-6 h-6 text-white" />
                                <span>Presentation des universites partenaires</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <x-lucide-check-circle class="w-6 h-6 text-white" />
                                <span>Session Q&A en direct</span>
                            </li>
                            <li class="flex items-center gap-3">
                                <x-lucide-check-circle class="w-6 h-6 text-white" />
                                <span>Temoignages d'anciens etudiants</span>
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
                                {{ config('landing.event.date') }}
                            </h3>
                            <p class="text-neutral/60">{{ config('landing.event.time') }}</p>
                        </div>
                        
                        <div class="border-t border-gray-200 pt-6 mb-6">
                            <p class="text-neutral/70 mb-6">
                                Inscrivez-vous maintenant via WhatsApp pour reserver votre place gratuitement.
                            </p>
                        </div>
                        
                        <a 
                            href="{{ config('landing.whatsapp.link') }}{{ config('landing.whatsapp.number') }}?text={{ urlencode(config('landing.whatsapp.event_message')) }}" 
                            target="_blank"
                            class="w-full btn-cta justify-center text-lg animate-pulse-glow"
                        >
                            <x-lucide-message-circle class="w-6 h-6 mr-2" />
                            RESERVER MA PLACE
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================
         SECTION: FINAL CTA
         ============================================ --}}
    <section id="contact" class="relative py-24 lg:py-32 px-4 bg-white overflow-hidden">
        
        {{-- Decorative Blobs --}}
        <div class="section-blob blob-primary w-80 h-80 -top-40 -left-40 absolute"></div>
        <div class="section-blob blob-accent w-72 h-72 bottom-20 -right-36 absolute"></div>
        
        <div class="max-w-4xl mx-auto relative z-10 text-center">
            
            <div class="scroll-hidden">
                <span class="inline-block bg-accent/10 text-accent font-semibold px-4 py-2 rounded-full text-sm mb-6">
                    PASSEZ A L'ACTION
                </span>
            </div>
            
            <div class="scroll-hidden delay-100">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-extrabold text-primary mb-6">
                    Pret a <span class="text-accent">Commencer</span> ?
                </h2>
            </div>
            
            <div class="scroll-hidden delay-200">
                <p class="text-lg text-neutral/70 max-w-2xl mx-auto mb-10">
                    Contactez-nous sur WhatsApp pour recevoir votre brochure gratuite et discuter de votre projet d'etudes en Chine avec un conseiller.
                </p>
            </div>
            
            <div class="scroll-hidden delay-300">
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ config('landing.whatsapp.link') }}{{ config('landing.whatsapp.number') }}?text={{ urlencode(config('landing.whatsapp.brochure_message')) }}" 
                       target="_blank"
                       class="btn-cta text-lg animate-pulse-glow">
                        <x-lucide-message-circle class="w-6 h-6 mr-2" />
                        Obtenir la Brochure via WhatsApp
                    </a>
                    <a href="{{ config('landing.whatsapp.link') }}{{ config('landing.whatsapp.number') }}?text={{ urlencode(config('landing.whatsapp.message')) }}" 
                       target="_blank"
                       class="btn-outline text-lg">
                        <x-lucide-phone class="w-6 h-6 mr-2" />
                        Nous Contacter
                    </a>
                </div>
            </div>
            
            {{-- Trust Elements --}}
            <div class="scroll-hidden delay-400">
                <div class="flex flex-wrap justify-center gap-6 mt-12 text-sm text-neutral/60">
                    <div class="flex items-center gap-2">
                        <x-lucide-shield-check class="w-5 h-5 text-green-500" />
                        <span>Reponse rapide</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <x-lucide-clock class="w-5 h-5 text-green-500" />
                        <span>Disponible 7j/7</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <x-lucide-message-circle class="w-5 h-5 text-green-500" />
                        <span>Conseils gratuits</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection