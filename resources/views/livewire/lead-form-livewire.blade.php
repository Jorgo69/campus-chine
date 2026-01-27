<div id="formulaire-container" class="relative">
    {{-- Glassmorphism Card --}}
    <div class="glass-strong rounded-3xl p-8 lg:p-10 shadow-2xl">
        
        @if($success)
            {{-- Success State --}}
            <div class="text-center py-8">
                <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-green-100 mb-6">
                    <x-lucide-check-circle class="w-12 h-12 text-green-500" />
                </div>
                <h3 class="text-2xl font-heading font-bold text-primary mb-3">
                    Félicitations ! 🎉
                </h3>
                <p class="text-neutral/70 mb-6">
                    Votre brochure est en cours de téléchargement.<br>
                    Vérifiez également votre boîte email.
                </p>
                <a 
                    href="{{ asset('pdf/brochure.pdf') }}" 
                    download 
                    class="btn-cta inline-flex"
                >
                    <x-lucide-download class="w-5 h-5 mr-2" />
                    Télécharger à nouveau
                </a>
            </div>
        @else
            {{-- Form Header --}}
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full gradient-primary mb-4">
                    <x-lucide-file-text class="w-8 h-8 text-white" />
                </div>
                <h3 class="text-xl font-heading font-bold text-primary mb-2">
                    Recevez votre brochure gratuite
                </h3>
                <p class="text-neutral/60 text-sm">
                    Remplissez le formulaire pour un accès instantané
                </p>
            </div>
            
            {{-- Form --}}
            <form wire:submit.prevent="submit" class="space-y-5">
                
                {{-- Name Fields Row --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <input 
                            type="text" 
                            wire:model="nom" 
                            placeholder="Votre nom *"
                            class="form-input-glass @error('nom') ring-2 ring-red-500 @enderror"
                        >
                        @error('nom')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <input 
                            type="text" 
                            wire:model="prenom" 
                            placeholder="Votre prénom *"
                            class="form-input-glass @error('prenom') ring-2 ring-red-500 @enderror"
                        >
                        @error('prenom')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                
                {{-- WhatsApp Field --}}
                <div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                            <x-lucide-phone class="w-5 h-5 text-neutral/40" />
                        </div>
                        <input 
                            type="text" 
                            wire:model="whatsapp" 
                            placeholder="N° WhatsApp avec indicatif (ex: +221...)*"
                            class="form-input-glass pl-12 @error('whatsapp') ring-2 ring-red-500 @enderror"
                        >
                    </div>
                    @error('whatsapp')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                {{-- Email Field --}}
                <div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                            <x-lucide-mail class="w-5 h-5 text-neutral/40" />
                        </div>
                        <input 
                            type="email" 
                            wire:model="email" 
                            placeholder="Votre adresse email *"
                            class="form-input-glass pl-12 @error('email') ring-2 ring-red-500 @enderror"
                        >
                    </div>
                    @error('email')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                
                {{-- Submit Button --}}
                <button 
                    type="submit" 
                    wire:loading.attr="disabled"
                    wire:loading.class="opacity-70 cursor-wait"
                    class="w-full btn-cta text-lg py-5 group"
                >
                    <span wire:loading.remove class="flex items-center justify-center gap-2">
                        <x-lucide-download class="w-6 h-6 group-hover:animate-bounce" />
                        TÉLÉCHARGER LA BROCHURE GRATUITE
                    </span>
                    <span wire:loading class="flex items-center justify-center gap-2">
                        <svg class="animate-spin h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        ENVOI EN COURS...
                    </span>
                </button>
                
                {{-- Privacy Note --}}
                <p class="text-center text-xs text-neutral/50 mt-4">
                    🔒 Vos données sont sécurisées et ne seront jamais partagées.
                </p>
            </form>
        @endif
    </div>
</div>