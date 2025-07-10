<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{env('WEBSITE_NAME')}} - Artisan Maçon</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom CSS for animations and effects */
        .hero-image {
            background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-size: cover;
            background-position: center;
            height: 80vh;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .project-item {
            transition: all 0.3s ease;
        }
        
        .project-item:hover {
            transform: scale(1.03);
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .animate-fade-in {
            animation: fadeIn 1s ease forwards;
        }
        
        .delay-100 {
            animation-delay: 0.1s;
        }
        
        .delay-200 {
            animation-delay: 0.2s;
        }
        
        .delay-300 {
            animation-delay: 0.3s;
        }
        
        .nav-link {
            position: relative;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -2px;
            left: 0;
            background-color: #f59e0b;
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
    </style>
</head>
<body class="font-sans bg-gray-50">
    <!-- Header/Navigation -->
    <header class="fixed w-full bg-white shadow-md z-50">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <div class="flex items-center">
                <i class="fas fa-hammer text-yellow-500 text-3xl mr-2"></i>
                <span class="text-xl font-bold text-gray-800">{{env('WEBSITE_NAME')}}</span>
            </div>
            
            <nav class="hidden md:flex space-x-8">
                <a href="#accueil" class="nav-link text-gray-700 hover:text-yellow-500 transition">Accueil</a>
                <a href="#services" class="nav-link text-gray-700 hover:text-yellow-500 transition">Services</a>
                <a href="#realisations" class="nav-link text-gray-700 hover:text-yellow-500 transition">Réalisations</a>
                <a href="#a-propos" class="nav-link text-gray-700 hover:text-yellow-500 transition">À propos</a>
                <a href="#contact" class="nav-link text-gray-700 hover:text-yellow-500 transition">Contact</a>
            </nav>
            
            <div class="md:hidden">
                <button id="menu-toggle" class="text-gray-700 focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white py-4 px-4 shadow-lg">
            <div class="flex flex-col space-y-4">
                <a href="#accueil" class="text-gray-700 hover:text-yellow-500 transition">Accueil</a>
                <a href="#services" class="text-gray-700 hover:text-yellow-500 transition">Services</a>
                <a href="#realisations" class="text-gray-700 hover:text-yellow-500 transition">Réalisations</a>
                <a href="#a-propos" class="text-gray-700 hover:text-yellow-500 transition">À propos</a>
                <a href="#contact" class="text-gray-700 hover:text-yellow-500 transition">Contact</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="accueil" class="hero-image pt-24 flex items-center justify-center text-white">
        <div class="container mx-auto px-4 text-center animate-fade-in">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Artisan Maçon Professionnel</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-2xl mx-auto">Construction, rénovation et aménagement sur mesure pour votre habitat</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#contact" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-3 px-6 rounded-lg transition duration-300 transform hover:scale-105">
                    Demander un devis
                </a>
                <a href="#services" class="bg-transparent border-2 border-white hover:bg-white hover:text-gray-800 text-white font-bold py-3 px-6 rounded-lg transition duration-300 transform hover:scale-105">
                    Nos services
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Nos Services</h2>
                <div class="w-20 h-1 bg-yellow-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">Artisan maçon avec plus de 20 ans d'expérience, je propose des services de qualité pour tous vos projets de construction et rénovation.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="service-card bg-gray-50 rounded-lg overflow-hidden shadow-md transition duration-300 delay-100">
                    <div class="h-48 bg-gray-200 flex items-center justify-center">
                        <i class="fas fa-home text-6xl text-yellow-500"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Construction neuve</h3>
                        <p class="text-gray-600">Maisons individuelles, extensions, garages, murs de clôture et tous types de constructions en maçonnerie traditionnelle.</p>
                        <div class="mt-4">
                            <a href="#contact" class="text-yellow-500 font-medium hover:text-yellow-600 transition">En savoir plus →</a>
                        </div>
                    </div>
                </div>
                
                <!-- Service 2 -->
                <div class="service-card bg-gray-50 rounded-lg overflow-hidden shadow-md transition duration-300 delay-200">
                    <div class="h-48 bg-gray-200 flex items-center justify-center">
                        <i class="fas fa-tools text-6xl text-yellow-500"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Rénovation</h3>
                        <p class="text-gray-600">Rénovation complète ou partielle de bâtiments anciens, reprise de murs, réfection de façades et ravalement.</p>
                        <div class="mt-4">
                            <a href="#contact" class="text-yellow-500 font-medium hover:text-yellow-600 transition">En savoir plus →</a>
                        </div>
                    </div>
                </div>
                
                <!-- Service 3 -->
                <div class="service-card bg-gray-50 rounded-lg overflow-hidden shadow-md transition duration-300 delay-300">
                    <div class="h-48 bg-gray-200 flex items-center justify-center">
                        <i class="fas fa-layer-group text-6xl text-yellow-500"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3">Aménagements extérieurs</h3>
                        <p class="text-gray-600">Terrasses, allées, murets, escaliers extérieurs, piscines et tous travaux d'aménagement paysager en maçonnerie.</p>
                        <div class="mt-4">
                            <a href="#contact" class="text-yellow-500 font-medium hover:text-yellow-600 transition">En savoir plus →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Pourquoi nous choisir ?</h2>
                <div class="w-20 h-1 bg-yellow-500 mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-yellow-500 text-4xl mb-4">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Qualité professionnelle</h3>
                    <p class="text-gray-600">Un savoir-faire artisanal avec des matériaux de qualité pour des résultats durables.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-yellow-500 text-4xl mb-4">
                        <i class="fas fa-euro-sign"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Prix compétitifs</h3>
                    <p class="text-gray-600">Des tarifs transparents et adaptés aux particuliers sans intermédiaire.</p>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-md text-center">
                    <div class="text-yellow-500 text-4xl mb-4">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Respect des délais</h3>
                    <p class="text-gray-600">Un engagement sur les délais annoncés pour votre tranquillité d'esprit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="realisations" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Nos Réalisations</h2>
                <div class="w-20 h-1 bg-yellow-500 mx-auto"></div>
                <p class="text-gray-600 mt-6 max-w-2xl mx-auto">Découvrez quelques-uns de nos projets récents réalisés pour nos clients.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Project 1 -->
                <div class="project-item rounded-lg overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1605276374104-dee2a0ed3cd6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Construction maison" class="w-full h-64 object-cover">
                    <div class="p-6 bg-white">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Maison individuelle</h3>
                        <p class="text-gray-600 mb-4">Construction complète d'une maison de 120m² avec terrasse et garage.</p>
                        <span class="inline-block bg-yellow-100 text-yellow-800 text-sm px-3 py-1 rounded-full">Construction neuve</span>
                    </div>
                </div>
                
                <!-- Project 2 -->
                <div class="project-item rounded-lg overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1600585152220-90363fe7e115?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Rénovation façade" class="w-full h-64 object-cover">
                    <div class="p-6 bg-white">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Rénovation complète</h3>
                        <p class="text-gray-600 mb-4">Rénovation d'une ancienne ferme avec reprise des murs et nouvelle façade.</p>
                        <span class="inline-block bg-yellow-100 text-yellow-800 text-sm px-3 py-1 rounded-full">Rénovation</span>
                    </div>
                </div>
                
                <!-- Project 3 -->
                <div class="project-item rounded-lg overflow-hidden shadow-lg">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Aménagement extérieur" class="w-full h-64 object-cover">
                    <div class="p-6 bg-white">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Aménagement paysager</h3>
                        <p class="text-gray-600 mb-4">Création d'une terrasse en pierre naturelle avec muret et escalier.</p>
                        <span class="inline-block bg-yellow-100 text-yellow-800 text-sm px-3 py-1 rounded-full">Extérieur</span>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#contact" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105">
                    Voir plus de réalisations
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="a-propos" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-8 lg:mb-0 lg:pr-12">
                    <img src="https://images.unsplash.com/photo-1581093196271-c5e7f5baa7d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Artisan maçon" class="rounded-lg shadow-xl w-full h-auto">
                </div>
                
                <div class="lg:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">À propos de moi</h2>
                    <div class="w-20 h-1 bg-yellow-500 mb-6"></div>
                    <p class="text-gray-600 mb-4">Je m'appelle John Doe et je suis artisan maçon depuis plus de 25 ans. Passionné par mon métier, j'ai créé mon entreprise individuelle pour offrir un service personnalisé et de qualité à mes clients.</p>
                    <p class="text-gray-600 mb-6">Formé aux techniques traditionnelles tout en suivant les évolutions du secteur, je m'engage à réaliser vos projets avec professionnalisme, dans le respect des normes et des délais.</p>
                    
                    <div class="mb-6">
                        <div class="flex items-center mb-3">
                            <i class="fas fa-check-circle text-yellow-500 mr-2"></i>
                            <span class="font-medium">Maçon senior</span>
                        </div>
                        <div class="flex items-center mb-3">
                            <i class="fas fa-check-circle text-yellow-500 mr-2"></i>
                            <span class="font-medium">Assurance décennale</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-check-circle text-yellow-500 mr-2"></i>
                            <span class="font-medium">Agréé Qualibat</span>
                        </div>
                    </div>
                    
                    <a href="#contact" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-3 px-8 rounded-lg transition duration-300 transform hover:scale-105">
                        Contactez-moi
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Témoignages clients</h2>
                <div class="w-20 h-1 bg-yellow-500 mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-500 text-xl mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 italic mb-4">"John a réalisé l'extension de notre maison avec un professionnalisme remarquable. Les délais ont été respectés et le travail est d'une grande qualité. Je recommande sans hésitation !"</p>
                    <div class="flex items-center">
                        <div class="bg-gray-200 w-10 h-10 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-user text-gray-500"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800">Martin L.</h4>
                            <p class="text-sm text-gray-500">Toulouse</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-500 text-xl mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 italic mb-4">"Excellent artisan, très à l'écoute et force de proposition. La terrasse qu'il a réalisée est magnifique et parfaitement intégrée à notre jardin. Un vrai plaisir de travailler avec un professionnel aussi compétent."</p>
                    <div class="flex items-center">
                        <div class="bg-gray-200 w-10 h-10 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-user text-gray-500"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800">Sophie D.</h4>
                            <p class="text-sm text-gray-500">Montauban</p>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-500 text-xl mr-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    <p class="text-gray-600 italic mb-4">"Nous avons fait appel à Jean pour la rénovation complète de notre ancienne ferme. Le résultat dépasse nos attentes. Un travail soigné et des conseils avisés tout au long du projet."</p>
                    <div class="flex items-center">
                        <div class="bg-gray-200 w-10 h-10 rounded-full flex items-center justify-center mr-3">
                            <i class="fas fa-user text-gray-500"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800">Pierre et Claire V.</h4>
                            <p class="text-sm text-gray-500">Castres</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 bg-gray-800 text-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Contactez-nous</h2>
                <div class="w-20 h-1 bg-yellow-500 mx-auto"></div>
                <p class="mt-6 max-w-2xl mx-auto">Pour toute demande de devis ou information, n'hésitez pas à nous contacter. Nous répondons sous 24h.</p>
            </div>
            
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="lg:w-1/2">
                    <form id="contact-form" action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                        @csrf
                        <div id="form-messages" class="hidden"></div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block mb-2 font-medium">Nom complet *</label>
                                <input type="text" id="name" name="name" required value="{{ old('name') }}" class="w-full px-4 py-3 rounded-lg bg-gray-700 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 @error('name') border-red-500 @enderror">
                                @error('name')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label for="email" class="block mb-2 font-medium">Email *</label>
                                <input type="email" id="email" name="email" required value="{{ old('email') }}" class="w-full px-4 py-3 rounded-lg bg-gray-700 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 @error('email') border-red-500 @enderror">
                                @error('email')
                                    <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="phone" class="block mb-2 font-medium">Téléphone</label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="w-full px-4 py-3 rounded-lg bg-gray-700 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 @error('phone') border-red-500 @enderror">
                            @error('phone')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="subject" class="block mb-2 font-medium">Sujet *</label>
                            <select id="subject" name="subject" required class="w-full px-4 py-3 rounded-lg bg-gray-700 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 @error('subject') border-red-500 @enderror">
                                <option value="">Sélectionnez un sujet</option>
                                <option value="devis" {{ old('subject') == 'devis' ? 'selected' : '' }}>Demande de devis</option>
                                <option value="renseignement" {{ old('subject') == 'renseignement' ? 'selected' : '' }}>Renseignement</option>
                                <option value="autre" {{ old('subject') == 'autre' ? 'selected' : '' }}>Autre</option>
                            </select>
                            @error('subject')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="message" class="block mb-2 font-medium">Message *</label>
                            <textarea id="message" name="message" rows="5" required class="w-full px-4 py-3 rounded-lg bg-gray-700 border border-gray-600 focus:outline-none focus:ring-2 focus:ring-yellow-500 @error('message') border-red-500 @enderror">{{ old('message') }}</textarea>
                            @error('message')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" id="submit-btn" class="w-full bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-3 px-6 rounded-lg transition duration-300 transform hover:scale-105">
                            <span id="submit-text">Envoyer le message</span>
                            <span id="submit-loading" class="hidden">
                                <i class="fas fa-spinner fa-spin mr-2"></i>Envoi en cours...
                            </span>
                        </button>
                    </form>
                </div>
                
                <div class="lg:w-1/2">
                    <div class="bg-gray-700 p-8 rounded-lg h-full">
                        <h3 class="text-2xl font-bold mb-6">Coordonnées</h3>
                        
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="text-yellow-500 text-xl mt-1 mr-4">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">Adresse</h4>
                                    <p>{{ env('ADDRESS') }}<br>{{ env('ZIP_CODE') }}</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="text-yellow-500 text-xl mt-1 mr-4">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">Téléphone</h4>
                                    <p>{{ env('PHONE') }} </p>
                                    <p class="text-sm text-gray-400">{{ env('PHONE_SCHEDULES') }}</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="text-yellow-500 text-xl mt-1 mr-4">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">Email</h4>
                                    <p>{{ env('CONTACT_EMAIL') }}</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="text-yellow-500 text-xl mt-1 mr-4">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">Horaires</h4>
                                    <p>{{ env('HORS') }}<br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div class="h-96 w-full">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.0287696661227!2d139.7432389152582!3d35.65858018019973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bf028dcf6ff%3A0x1f06c2386d194e72!2sTokyo%20Tower!5e0!3m2!1sen!2sjp!4v1628577982756!5m2!1sen!2sjp" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-hammer text-yellow-500 text-2xl mr-2"></i>
                        <span class="text-xl font-bold text-white">{{env('WEBSITE_NAME')}}</span>
                    </div>
                    <p class="mb-4">Artisan maçon qualifié pour tous vos projets de construction et rénovation dans la région montpellieraine.</p>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold text-white mb-4">Liens utiles</h3>
                    <ul class="space-y-2">
                        <li><a href="#accueil" class="hover:text-yellow-500 transition">Accueil</a></li>
                        <li><a href="#services" class="hover:text-yellow-500 transition">Services</a></li>
                        <li><a href="#realisations" class="hover:text-yellow-500 transition">Réalisations</a></li>
                        <li><a href="#a-propos" class="hover:text-yellow-500 transition">À propos</a></li>
                        <li><a href="#contact" class="hover:text-yellow-500 transition">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold text-white mb-4">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-yellow-500 transition">Construction neuve</a></li>
                        <li><a href="#" class="hover:text-yellow-500 transition">Rénovation</a></li>
                        <li><a href="#" class="hover:text-yellow-500 transition">Aménagements extérieurs</a></li>
                        <li><a href="#" class="hover:text-yellow-500 transition">Maçonnerie générale</a></li>
                        <li><a href="#" class="hover:text-yellow-500 transition">Ravalement de façade</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="text-lg font-bold text-white mb-4">Informations</h3>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-file-alt text-yellow-500 mr-2 mt-1"></i>
                            <a href="#" class="hover:text-yellow-500 transition">Mentions légales</a>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-shield-alt text-yellow-500 mr-2 mt-1"></i>
                            <a href="#" class="hover:text-yellow-500 transition">Politique de confidentialité</a>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-cookie text-yellow-500 mr-2 mt-1"></i>
                            <a href="#" class="hover:text-yellow-500 transition">Préférences cookies</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 text-center">
                <p>&copy; 2025 {{env('WEBSITE_NAME')}} - Tous droits réservés. SIRET: 123 456 789 00010</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-8 right-8 bg-yellow-500 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg transition opacity-0 invisible">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Success Modal -->
    <div id="success-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white p-8 rounded-lg max-w-md mx-4 text-center">
            <div class="text-green-500 text-5xl mb-4">
                <i class="fas fa-check-circle"></i>
            </div>
            <h3 class="text-2xl font-bold text-gray-800 mb-2">Message envoyé !</h3>
            <p class="text-gray-600 mb-6">Nous avons bien reçu votre demande et vous répondrons dans les plus brefs délais.</p>
            <button id="close-modal" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-6 rounded-lg transition">
                Fermer
            </button>
        </div>
    </div>

    <script>
        // Mobile menu toggle
        const menuToggle = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    mobileMenu.classList.add('hidden');
                }
            });
        });
        
        // Back to top button
        const backToTopButton = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.remove('opacity-100', 'visible');
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Form submission
        const contactForm = document.getElementById('contact-form');
        const successModal = document.getElementById('success-modal');
        const closeModal = document.getElementById('close-modal');
        const submitBtn = document.getElementById('submit-btn');
        const submitText = document.getElementById('submit-text');
        const submitLoading = document.getElementById('submit-loading');
        const formMessages = document.getElementById('form-messages');
        
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            // Désactiver le bouton et afficher le loading
            submitBtn.disabled = true;
            submitText.classList.add('hidden');
            submitLoading.classList.remove('hidden');
            
            // Masquer les messages précédents
            formMessages.classList.add('hidden');
            
            // Préparer les données du formulaire
            const formData = new FormData(contactForm);
            
            try {
                const response = await fetch(contactForm.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.content || 
                                       document.querySelector('input[name="_token"]').value
                    }
                });
                
                const result = await response.json();
                
                if (result.success) {
                    // Afficher le modal de succès
                    successModal.classList.remove('hidden');
                    
                    // Reset form
                    contactForm.reset();
                    
                    // Supprimer les erreurs de validation
                    document.querySelectorAll('.text-red-400').forEach(error => {
                        error.remove();
                    });
                    document.querySelectorAll('.border-red-500').forEach(input => {
                        input.classList.remove('border-red-500');
                    });
                } else {
                    // Afficher le message d'erreur
                    showMessage(result.message, 'error');
                }
                
            } catch (error) {
                console.error('Erreur:', error);
                showMessage('Une erreur s\'est produite lors de l\'envoi. Veuillez réessayer.', 'error');
            } finally {
                // Réactiver le bouton
                submitBtn.disabled = false;
                submitText.classList.remove('hidden');
                submitLoading.classList.add('hidden');
            }
        });
        
        // Fonction pour afficher les messages
        function showMessage(message, type) {
            formMessages.innerHTML = `
                <div class="p-4 rounded-lg ${type === 'error' ? 'bg-red-600' : 'bg-green-600'} text-white">
                    <i class="fas ${type === 'error' ? 'fa-exclamation-triangle' : 'fa-check-circle'} mr-2"></i>
                    ${message}
                </div>
            `;
            formMessages.classList.remove('hidden');
            
            // Faire défiler vers le message
            formMessages.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
        
        closeModal.addEventListener('click', () => {
            successModal.classList.add('hidden');
        });
        
        // Close modal when clicking outside
        successModal.addEventListener('click', (e) => {
            if (e.target === successModal) {
                successModal.classList.add('hidden');
            }
        });
        
        // Animate elements when they come into view
        const animateOnScroll = () => {
            const elements = document.querySelectorAll('.service-card, .project-item');
            
            elements.forEach(element => {
                const elementPosition = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;
                
                if (elementPosition < windowHeight - 100) {
                    element.classList.add('animate-fade-in');
                }
            });
        };
        
        window.addEventListener('scroll', animateOnScroll);
        window.addEventListener('load', animateOnScroll);
    </script>
</body>
</html>