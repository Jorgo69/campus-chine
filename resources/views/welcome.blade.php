@extends('layouts.app')
@section('content')
    {{-- Hero Section --}}
    <section id="accueil" class="pt-32 pb-20 px-4 bg-gradient-to-b from-blue-50 to-white">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-8 animate-fade-in">
                <span class="bg-accent/10 text-accent font-bold px-4 py-2 rounded-full text-sm">PROJET CAMPUS CHINE 2026</span>
                <h1 class="text-5xl lg:text-7xl font-heading font-extrabold text-primary leading-tight">
                    Votre futur académique en <span class="text-accent">Chine</span> commence ici.
                </h1>
                <p class="text-xl text-neutral opacity-80 leading-relaxed">
                    Bourses d'études, accompagnement visa et intégration réussie. Nous sécurisons votre parcours de l'Afrique jusqu'à votre diplôme universitaire.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#formulaire" class="bg-primary text-white px-8 py-4 rounded-full font-bold text-center hover:shadow-xl transition-all">Obtenir ma bourse</a>
                    <a href="#pourquoi" class="border-2 border-primary text-primary px-8 py-4 rounded-full font-bold text-center hover:bg-primary hover:text-white transition-all">En savoir plus</a>
                </div>
            </div>
            
            {{-- Le Formulaire Livewire --}}
            <livewire:lead-form-livewire />
        </div>
    </section>

    {{-- Section Pourquoi --}}
    <section id="pourquoi" class="py-24 bg-white px-4">
        <div class="max-w-7xl mx-auto text-center mb-16">
            <h2 class="text-4xl font-bold text-primary mb-4">Pourquoi choisir la Chine ?</h2>
            <div class="h-1 w-20 bg-accent mx-auto"></div>
        </div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            {{-- Carte 1 --}}
            <div class="p-8 bg-surface rounded-2xl hover:-translate-y-2 transition-transform duration-300">
                <div class="text-accent mb-4"><x-lucide-graduation-cap class="w-12 h-12" /></div>
                <h3 class="text-xl font-bold mb-2">Diplômes Internationaux</h3>
                <p class="opacity-70">Accédez à des universités classées parmi les meilleures mondiales avec des diplômes reconnus partout.</p>
            </div>
            {{-- Carte 2 --}}
            <div class="p-8 bg-surface rounded-2xl hover:-translate-y-2 transition-transform duration-300 border-t-4 border-accent">
                <div class="text-accent mb-4"><x-lucide-banknote class="w-12 h-12" /></div>
                <h3 class="text-xl font-bold mb-2">Bourses Généreuses</h3>
                <p class="opacity-70">Des programmes de bourses couvrant jusqu'à 100% des frais de scolarité et de logement.</p>
            </div>
            {{-- Carte 3 --}}
            <div class="p-8 bg-surface rounded-2xl hover:-translate-y-2 transition-transform duration-300">
                <div class="text-accent mb-4"><x-lucide-globe class="w-12 h-12" /></div>
                <h3 class="text-xl font-bold mb-2">Opportunités Carrière</h3>
                <p class="opacity-70">Maîtrisez le Mandarin et ouvrez-vous les portes du marché économique le plus dynamique au monde.</p>
            </div>
        </div>
    </section>

    {{-- Bandeau Événement --}}
    <section id="evenement" class="bg-accent py-12 px-4">
        <div class="max-w-5xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8 text-white">
            <div class="text-center md:text-left">
                <h2 class="text-3xl font-black italic uppercase">Conférence de Mars 2026</h2>
                <p class="text-lg opacity-90 font-medium">Ne manquez pas notre prochaine session d'orientation en direct.</p>
            </div>
            <a href="{{ config('app.whatsapp.link') }}{{ config('app.whatsapp.number') }}" _blank class="bg-white text-accent px-8 py-4 rounded-xl font-black hover:bg-opacity-90 transition-all shadow-xl">RÉSERVER MA PLACE</a>
        </div>
    </section>
@endsection