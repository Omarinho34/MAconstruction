# M.A Construction - Site Web Artisan Maçon

![M.A Construction](https://img.shields.io/badge/Laravel-11-red.svg)
![PHP](https://img.shields.io/badge/PHP-8.2+-blue.svg)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-3.0-cyan.svg)

Site web vitrine pour artisan maçon avec formulaire de contact fonctionnel et interface responsive.

## 🌟 Fonctionnalités

- ✅ **Site vitrine responsive** - Compatible mobile, tablette et desktop
- ✅ **Formulaire de contact** - Avec validation et envoi d'email
- ✅ **Sections complètes** - Accueil, Services, Réalisations, À propos, Contact
- ✅ **Design moderne** - Interface utilisateur avec TailwindCSS
- ✅ **Animations** - Effets visuels et transitions fluides
- ✅ **Carte interactive** - Intégration Google Maps
- ✅ **Témoignages clients** - Section dédiée aux avis
- ✅ **Configuration flexible** - Variables d'environnement personnalisables

## 🚀 Installation

### Prérequis

- PHP 8.2 ou supérieur
- Composer
- Node.js et npm
- MySQL (optionnel)

### Étapes d'installation

1. **Cloner le projet**
```bash
git clone https://github.com/votre-nom/ma-construction.git
cd ma-construction
```

2. **Installer les dépendances PHP**
```bash
composer install
```

3. **Installer les dépendances Node.js**
```bash
npm install
```

4. **Configurer l'environnement**
```bash
cp .env.example .env
php artisan key:generate
```

5. **Configurer la base de données (optionnel)**
```bash
php artisan migrate
```

6. **Compiler les assets**
```bash
npm run build
```

## ⚙️ Configuration

### Variables d'environnement à modifier

Éditez le fichier `.env` et personnalisez les variables suivantes :

#### Configuration Email (obligatoire pour le formulaire de contact)
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=votre_email@gmail.com
MAIL_PASSWORD="votre_mot_de_passe_application"
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=votre_email@gmail.com
MAIL_FROM_NAME="M.A Construction"
```

#### Configuration du contact
```env
CONTACT_EMAIL=votre_email@gmail.com
```

#### Informations de l'entreprise
```env
WEBSITE_NAME="M.A Construction"
ADDRESS="123 Rue de l'Exemple"
ZIP_CODE="34070 Montpellier"
PHONE="06 12 34 56 78"
PHONE_SCHEDULES="Lundi - Vendredi: 9h - 18h"
HORS="Du lundi au Vendredi : 8h - 21h"
```

### Configuration Gmail

Pour utiliser Gmail comme serveur SMTP :

1. **Activer l'authentification à 2 facteurs** sur votre compte Google
2. **Générer un mot de passe d'application** :
   - Allez sur [myaccount.google.com](https://myaccount.google.com)
   - Sécurité → Validation en deux étapes
   - Mots de passe des applications
   - Sélectionnez "Autre" et tapez "Laravel"
   - Utilisez le mot de passe généré dans `MAIL_PASSWORD`

## 🌐 Démarrage

### Démarrer le serveur de développement

```bash
php artisan serve
```

Le site sera accessible à l'adresse : `http://localhost:8000`

### Tester la configuration email

Visitez `http://localhost:8000/test-email` pour tester l'envoi d'email.

## 📁 Structure du projet

```
ma-construction/
├── app/
│   └── Http/
│       └── Controllers/
│           └── ContactController.php     # Gestion du formulaire
├── resources/
│   ├── views/
│   │   ├── welcome.blade.php            # Page principale
│   │   └── emails/
│   │       └── contact.blade.php        # Template email
│   ├── css/
│   │   └── app.css                      # Styles TailwindCSS
│   └── js/
│       └── app.js                       # JavaScript
├── routes/
│   └── web.php                          # Routes web
├── .env                                 # Configuration environnement
└── README.md                            # Ce fichier
```

## 🎨 Personnalisation

### Modifier les couleurs

Les couleurs principales du site utilisent la palette TailwindCSS :
- **Couleur principale** : `yellow-500` (jaune)
- **Couleur secondaire** : `gray-800` (gris foncé)

Pour changer les couleurs, modifiez les classes dans `resources/views/welcome.blade.php`.

### Modifier les images

Remplacez les URLs des images dans le fichier `welcome.blade.php` :
- Images de services (lignes 138, 154, 165)
- Images de réalisations (lignes 228, 237, 244)
- Image "À propos" (ligne 270)

### Modifier les témoignages

Éditez les témoignages clients dans la section "Testimonials" (lignes 310-370).

### Modifier la carte Google Maps

Remplacez l'URL de la carte dans la section "Map" (ligne 503) par vos coordonnées.

## 📧 Formulaire de contact

### Champs disponibles

- **Nom complet** (obligatoire)
- **Email** (obligatoire)
- **Téléphone** (optionnel)
- **Sujet** (obligatoire) : Devis, Renseignement, Autre
- **Message** (obligatoire)

### Validation

- Validation côté serveur avec Laravel
- Validation côté client avec JavaScript
- Protection CSRF intégrée
- Gestion des erreurs et messages de succès

### Personnaliser le template email

Modifiez le fichier `resources/views/emails/contact.blade.php` pour personnaliser l'apparence des emails reçus.

## 🔧 Maintenance

### Vider les caches

```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
```

### Logs des erreurs

Consultez les logs dans `storage/logs/laravel.log` pour diagnostiquer les problèmes.

### Mise à jour des dépendances

```bash
composer update
npm update
```

## 📱 Responsive Design

Le site est entièrement responsive et s'adapte à tous les écrans :
- **Mobile** : < 768px
- **Tablette** : 768px - 1024px  
- **Desktop** : > 1024px

## 🛡️ Sécurité

- Protection CSRF sur tous les formulaires
- Validation des données côté serveur
- Échappement automatique des données avec Blade
- Configuration sécurisée des headers

## 🚀 Déploiement

### Déploiement sur serveur web

1. **Transférer les fichiers** sur votre hébergeur
2. **Configurer l'environnement** (`.env`)
3. **Installer les dépendances** :
   ```bash
   composer install --no-dev
   npm run build
   ```
4. **Configurer les permissions** :
   ```bash
   chmod -R 755 storage bootstrap/cache
   ```
5. **Pointer le domaine** vers le dossier `public/`

### Variables d'environnement production

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://votre-domaine.com
```

## 📞 Support

Pour toute question ou assistance : amri.omar34@outlook.fr 

1. **Vérifiez les logs** : `storage/logs/laravel.log`
2. **Testez la configuration email** : `/test-email`
3. **Consultez la documentation Laravel** : [laravel.com](https://laravel.com)

## 📄 Licence

Ce projet est sous licence MIT. Voir le fichier `LICENSE` pour plus de détails.

## 🔄 Changelog

### v1.0.0
- Site vitrine complet
- Formulaire de contact fonctionnel
- Design responsive
- Configuration flexible

---

**Développé avec ❤️ pour les artisans maçons**