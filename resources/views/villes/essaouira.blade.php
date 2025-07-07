@extends('layouts.app')
@section('content')
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Envoi Express - Déménagement Essaouira</title>
            <!-- CSS -->
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">
            <!-- icons -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        </head>
        <body>
            <style>
                /* Hero Section */
                .heroo {
                    background: linear-gradient(135deg, #2E4BC6 0%, #1a365d 100%);
                    color: white;
                    padding: 120px 0 80px;
                    text-align: center;
                    position: relative;
                    overflow: hidden;
                }
                .heroo::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    opacity: 0.3;
                }
                .heroo-content {
                    position: relative;
                    z-index: 2;
                }
                .heroo h1 {
                    font-size: 2.7rem;
                    margin-bottom: 1.5rem;
                    font-weight: 700;
                }
                .heroo p {
                    font-size: 1.3rem;
                    opacity: 0.9;
                    max-width: 800px;
                    margin: 0 auto;
                }
                /* CTA Section */
                .cta-section {
                    background: linear-gradient(135deg, #2E4BC6 0%, #1a365d 100%);
                    color: white;
                    padding: 80px 0;
                    text-align: center;
                    position: relative;
                    overflow: hidden;
                }
                .cta-section::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    opacity: 0.3;
                }
                .cta-content {
                    position: relative;
                    z-index: 2;
                }
                .cta-section h2 {
                    font-size: 2.5rem;
                    margin-bottom: 1rem;
                }
                .cta-section p {
                    font-size: 1.2rem;
                    opacity: 0.9;
                    margin-bottom: 2rem;
                    max-width: 600px;
                    margin-left: auto;
                    margin-right: auto;
                }
                .cta-button {
                    background: white;
                    color: #2E4BC6;
                    padding: 15px 30px;
                    border: none;
                    border-radius: 25px;
                    text-decoration: none;
                    font-weight: 600;
                    font-size: 1.1rem;
                    transition: transform 0.3s, box-shadow 0.3s;
                    display: inline-block;
                }
                .cta-button:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 8px 25px rgba(255,255,255,0.3);
                }
                /* FAQ */
                .faq-section {
                    max-width: 800px;
                    margin: 0 auto;
                    padding: 2rem 1rem;
                    border-radius: 10px;
                }
                .faq-item {
                    margin-bottom: 1rem;
                    border: 1px solid #ddd;
                    border-radius: 8px;
                    overflow: hidden;
                    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
                    transition: all 0.3s ease;
                    background: #fff;
                }
                .faq-question {
                    width: 100%;
                    text-align: left;
                    padding: 1rem 1.5rem;
                    font-size: 1.1rem;
                    font-weight: 600;
                    background-color: #f9f9f9;
                    border: none;
                    cursor: pointer;
                    outline: none;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    transition: background-color 0.3s ease;
                }
                .faq-question:hover {
                    background-color: #f0f0f0;
                }
                .faq-question::after {
                    content: "\f078";
                    font-family: "Font Awesome 6 Free";
                    font-weight: 900;
                    transition: transform 0.3s ease;
                }
                .faq-item.active .faq-question::after {
                    transform: rotate(180deg);
                }
                .faq-answer {
                    max-height: 0;
                    overflow: hidden;
                    transition: max-height 0.4s ease;
                    background-color: #fff;
                    padding: 0 1.5rem;
                }
                .faq-item.active .faq-answer {
                    padding: 1rem 1.5rem;
                    max-height: 500px;
                }
            </style>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                        
            <!-- Hero Section -->
            <section class="heroo">
                <div class="container">
                    <div class="heroo-content">
                        <h1>Déménagement à Essaouira</h1>
                        <p>
                            Service de déménagement et transport express dans la perle de l'Atlantique. Essaouira, ville du vent et des arts, mérite un service de déménagement à la hauteur de son charme unique.
                        </p>
                    </div>
                </div>
            </section>
            <section class="workflow" id="procedure">
                <div class="workflow-container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        Nos services à Essaouira
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 4rem; font-size: 1.1rem;">
                        Adaptés au charme unique de la cité des Alizés
                    </p>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Déménagement dans la Médina</h3>
                            <p>Expertise spéciale pour les riads et maisons traditionnelles de la Médina d'Essaouira avec ses ruelles étroites et son patrimoine architectural.</p>
                            <span class="workflow-status">✓ Expertise patrimoniale</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-palette"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Transport d'œuvres d'art</h3>
                            <p>Service spécialisé pour les artistes et galeries d'Essaouira : transport sécurisé de peintures, sculptures et objets d'art.</p>
                            <span class="workflow-status">✓ Protection artistique</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-hotel"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Services pour professionnels du tourisme</h3>
                            <p>Solutions adaptées aux maisons d'hôtes, riads, restaurants et commerces touristiques avec contraintes saisonnières.</p>
                            <span class="workflow-status">✓ Expertise touristique</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-water"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Protection contre les embruns</h3>
                            <p>Emballage renforcé adapté au climat marin d'Essaouira pour protéger vos biens de l'humidité et du sel.</p>
                            <span class="workflow-status">✓ Protection marine</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-route"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Liaisons vers grandes villes</h3>
                            <p>Connexions régulières vers Marrakech, Casablanca, Agadir et toutes les destinations du Maroc depuis Essaouira.</p>
                            <span class="workflow-status">✓ Réseau national</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="features" id="zones">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        Pourquoi choisir Envoi Express à Essaouira ?
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 3rem; font-size: 1.1rem;">
                        Votre partenaire dans la cité des Alizés
                    </p>
                    <div class="features-grid">
                        <div class="feature-card fade-in">
                            <h3><i class="fas fa-landmark" style="color:#795548; margin-right: 8px;"></i> Connaissance du patrimoine</h3>
                            <p>Expertise dans les bâtiments historiques et respect de l'architecture traditionnelle.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3><i class="fas fa-palette" style="color:#e91e63; margin-right: 8px;"></i> Service artistique</h3>
                            <p>Transport spécialisé pour la communauté artistique dynamique d'Essaouira.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3><i class="fas fa-water" style="color:#2196f3; margin-right: 8px;"></i> Adaptation climatique</h3>
                            <p>Protection renforcée contre l'humidité et les conditions marines.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3><i class="fas fa-star" style="color:#ff9800; margin-right: 8px;"></i> Service personnalisé</h3>
                            <p>Approche humaine adaptée au rythme de vie unique d'Essaouira.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2>Demandez votre devis gratuit</h2>
                        <p>Envoi Express Essaouira - Le transport en harmonie avec l'âme de la cité des Alizés.</p>
                        <a href="/#contactez-nous" class="cta-button">Obtenir un devis</a>
                    </div>
                </div>
            </section>
            <!-- FAQ Section -->
            <div class="container">
                <section class="content-section">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Questions fréquentes</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 2rem; font-size: 1.1rem;">
                        Tout ce que vous devez savoir sur nos services à Essaouira
                    </p>
                                        
                    <div class="faq-section">
                        <div class="faq-item">
                            <button class="faq-question">
                                Comment gérez-vous les accès dans la Médina d'Essaouira ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous connaissons parfaitement la Médina d'Essaouira et ses contraintes d'accès. Nous utilisons des véhicules adaptés et des techniques spéciales pour accéder aux riads et maisons traditionnelles via les ruelles étroites.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Proposez-vous des services pour les artistes ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous avons une expertise particulière pour le transport d'œuvres d'art : peintures, sculptures, instruments de musique. Emballage spécialisé et manipulation experte pour la communauté artistique d'Essaouira.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Comment protégez-vous les biens de l'humidité marine ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous utilisons des emballages étanches et des protections spéciales contre l'humidité et les embruns marins. Nos véhicules sont équipés pour maintenir un environnement sec pendant le transport.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Quelles sont vos liaisons depuis Essaouira ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous assurons des liaisons régulières vers Marrakech (3h), Casablanca (5h), Agadir (3h), Rabat (6h) et toutes les villes du Maroc. Planification adaptée aux besoins touristiques et saisonniers.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Travaillez-vous avec les professionnels du tourisme ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous proposons des services spécialisés pour les riads, maisons d'hôtes, restaurants et commerces touristiques. Solutions adaptées aux contraintes saisonnières et aux besoins spécifiques du secteur.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Quels sont vos tarifs pour Essaouira ?
                            </button>
                            <div class="faq-answer">
                                <p>Nos tarifs sont adaptés à la spécificité d'Essaouira avec des prix compétitifs. Devis gratuit personnalisé selon vos besoins, avec tarifs préférentiels pour les résidents et professionnels locaux.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <script>
                const faqItems = document.querySelectorAll('.faq-item');
                faqItems.forEach(item => {
                    const question = item.querySelector('.faq-question');
                    question.addEventListener('click', () => {
                        item.classList.toggle('active');
                    });
                });
            </script>
        </body>
    </html>
@endsection