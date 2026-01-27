<?php

namespace App\Livewire;

use Livewire\Component;

class LeadFormLivewire extends Component
{
    // Propriétés du formulaire
    public $nom = '';
    public $prenom = '';
    public $whatsapp = '';
    public $email = '';
    public $success = false;

    // Règles de validation
    protected $rules = [
        'nom' => 'required|min:2',
        'prenom' => 'required|min:2',
        'whatsapp' => 'required|min:8',
        'email' => 'required|email',
    ];

    // Messages de validation personnalisés
    protected $messages = [
        'nom.required' => 'Le nom est obligatoire.',
        'nom.min' => 'Le nom doit contenir au moins 2 caractères.',
        'prenom.required' => 'Le prénom est obligatoire.',
        'prenom.min' => 'Le prénom doit contenir au moins 2 caractères.',
        'whatsapp.required' => 'Le numéro WhatsApp est obligatoire.',
        'whatsapp.min' => 'Le numéro WhatsApp doit contenir au moins 8 chiffres.',
        'email.required' => 'L\'email est obligatoire.',
        'email.email' => 'Veuillez entrer une adresse email valide.',
    ];

    public function submit()
    {
        $this->validate();

        // Ici vous pouvez enregistrer en base de données :
        // Lead::create([
        //     'nom' => $this->nom,
        //     'prenom' => $this->prenom,
        //     'whatsapp' => $this->whatsapp,
        //     'email' => $this->email,
        // ]);

        // Dispatch custom toast event (works with Livewire Alpine bundle)
        $this->dispatch('toast', [
            'type' => 'success',
            'title' => 'Félicitations ! 🎉',
            'message' => 'Votre brochure est prête au téléchargement !'
        ]);

        // Marquer comme succès pour afficher l'état de confirmation
        $this->success = true;

        // Déclencher le téléchargement du PDF
        // Le fichier doit être dans public/pdf/brochure.pdf
        $pdfPath = public_path('pdf/brochure.pdf');
        
        if (file_exists($pdfPath)) {
            return response()->download($pdfPath, 'Campus_Chine_Brochure_2026.pdf');
        }
    }
    
    public function render()
    {
        return view('livewire.lead-form-livewire');
    }
}
