<?php

namespace App\Livewire;

use Livewire\Component;

class LeadFormLivewire extends Component
{
    // Propriétés du formulaire
    public $nom, $prenom, $whatsapp, $email;
    public $success = false;

    // Règles de validation
    protected $rules = [
        'nom' => 'required|min:2',
        'prenom' => 'required|min:2',
        'whatsapp' => 'required|numeric|min:8',
        'email' => 'required|email',
    ];

    public function submit()
    {
        $this->validate();

        // Ici tu peux enregistrer en base de données :
        // Lead::create([...]);

        $this->success = true;

        // On déclenche le téléchargement du PDF (le fichier doit être dans storage/app/public)
        return response()->download(public_path('brochure_campus_chine.pdf'));
    }
    
    public function render()
    {
        return view('livewire.lead-form-livewire');
    }
}
