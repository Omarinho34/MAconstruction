<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message de contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #f59e0b;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 0 0 8px 8px;
        }
        .field {
            margin-bottom: 15px;
        }
        .field strong {
            color: #f59e0b;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            color: #666;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>🔨 {{ env('MAIL_FROM_NAME')}}</h1>
        <p>Nouveau message de contact</p>
    </div>
    
    <div class="content">
        <p>Vous avez reçu un nouveau message via le formulaire de contact de votre site web.</p>
        
        <div class="field">
            <strong>Nom :</strong> {{ $name }}
        </div>
        
        <div class="field">
            <strong>Email :</strong> {{ $email }}
        </div>
        
        @if($phone)
        <div class="field">
            <strong>Téléphone :</strong> {{ $phone }}
        </div>
        @endif
        
        <div class="field">
            <strong>Sujet :</strong> 
            @switch($subject)
                @case('devis')
                    Demande de devis
                    @break
                @case('renseignement')
                    Renseignement
                    @break
                @case('autre')
                    Autre
                    @break
                @default
                    {{ $subject }}
            @endswitch
        </div>
        
        <div class="field">
            <strong>Message :</strong>
            <p style="background-color: white; padding: 15px; border-radius: 5px; border-left: 4px solid #f59e0b;">
                {{ $contactMessage }}
            </p>
        </div>
        
        <div class="field">
            <strong>Date :</strong> {{ now()->format('d/m/Y à H:i') }}
        </div>
    </div>
    
    <div class="footer">
        <p>Ce message a été envoyé depuis le formulaire de contact de votre site web {{env('WEBSITE_NAME')}}.</p>
    </div>
</body>
</html>