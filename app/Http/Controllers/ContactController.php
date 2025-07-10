<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function show()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|in:devis,renseignement,autre',
            'message' => 'required|string|max:2000',
        ], [
            'name.required' => 'Le nom est obligatoire.',
            'email.required' => 'L\'email est obligatoire.',
            'email.email' => 'L\'email doit être valide.',
            'subject.required' => 'Le sujet est obligatoire.',
            'subject.in' => 'Le sujet sélectionné n\'est pas valide.',
            'message.required' => 'Le message est obligatoire.',
            'message.max' => 'Le message ne peut pas dépasser 2000 caractères.',
        ]);

        try {
            // Envoyer l'email
            $this->sendContactEmail($validated);
            
            // Log du contact pour traçabilité
            Log::info('Nouveau contact reçu', [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'subject' => $validated['subject'],
                'timestamp' => now()
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Votre message a été envoyé avec succès. Nous vous répondrons dans les plus brefs délais.'
            ]);

        } catch (\Exception $e) {
            Log::error('Erreur lors de l\'envoi du formulaire de contact', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'data' => $validated
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Une erreur s\'est produite lors de l\'envoi de votre message. Veuillez réessayer.'
            ], 500);
        }
    }

    /**
     * Envoie l'email de contact
     */
    private function sendContactEmail($data)
    {
        try {
            // Renommer la variable message pour éviter le conflit
            $emailData = $data;
            $emailData['contactMessage'] = $data['message'];
            unset($emailData['message']); // Supprimer l'ancienne variable
            
            Mail::send('emails.contact', $emailData, function ($message) use ($data) {
                $message->to(env('CONTACT_EMAIL'))
                       ->subject('Nouveau message de contact - ' . $data['subject'])
                       ->replyTo($data['email'], $data['name']);
            });
        } catch (\Exception $e) {
            Log::error('Erreur envoi email', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            throw $e;
        }
    }
}