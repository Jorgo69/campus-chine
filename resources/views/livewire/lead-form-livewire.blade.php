<div id="formulaire" class="bg-white p-8 rounded-2xl shadow-2xl border border-gray-50">
    @if($success)
        <div class="text-center py-8">
            <div class="text-green-500 text-5xl mb-4">✅</div>
            <h3 class="text-2xl font-bold text-primary">Merci !</h3>
            <p>Votre brochure est en cours de téléchargement.</p>
        </div>
    @else
        <form wire:submit.prevent="submit" class="space-y-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <input type="text" wire:model="nom" placeholder="Nom" class="w-full p-4 bg-surface rounded-xl border-none focus:ring-2 focus:ring-primary">
                <input type="text" wire:model="prenom" placeholder="Prénom" class="w-full p-4 bg-surface rounded-xl border-none focus:ring-2 focus:ring-primary">
            </div>
            <input type="text" wire:model="whatsapp" placeholder="N° WhatsApp (avec indicatif)" class="w-full p-4 bg-surface rounded-xl border-none focus:ring-2 focus:ring-primary">
            <input type="email" wire:model="email" placeholder="Adresse Email" class="w-full p-4 bg-surface rounded-xl border-none focus:ring-2 focus:ring-primary">
            
            <button type="submit" wire:loading.attr="disabled" class="w-full bg-accent text-white font-bold py-4 rounded-xl hover:scale-[1.02] transition-transform shadow-lg flex justify-center items-center">
                <span wire:loading.remove>TÉLÉCHARGER LA BROCHURE GRATUITE</span>
                <span wire:loading>CHARGEMENT...</span>
            </button>
        </form>
    @endif
</div>