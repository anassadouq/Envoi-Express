@extends('layouts.app')
@section('content')
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Envoi Express - Livraison Pièces Auto</title>
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
                        <h1><i class="fas fa-car-battery" style="margin-right: 10px;"></i> Livraison Pièces Auto</h1>
                        <p>
                            Service rapide et spécialisé pour la livraison de pièces automobiles. Pièces détachées, accessoires, équipements - nous livrons vos commandes auto rapidement et en sécurité.
                        </p>
                    </div>
                </div>
            </section>
            <section class="workflow" id="procedure">
                <div class="workflow-container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        Comment fonctionne notre livraison pièces auto ?
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 4rem; font-size: 1.1rem;">
                        Un service adapté aux besoins des professionnels et particuliers
                    </p>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>1. Toutes pièces automobiles acceptées</h3>
                            <p>Pièces mécaniques, carrosserie, électronique, pneumatiques, accessoires - nous transportons tous types de pièces auto neuves ou d'occasion.</p>
                            <span class="workflow-status">✓ Expertise automobile</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-store"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>2. Enlèvement chez fournisseurs et casses</h3>
                            <p>Récupération directe chez vos fournisseurs, magasins de pièces, casses automobiles ou centres de distribution selon vos commandes.</p>
                            <span class="workflow-status">✓ Réseau étendu</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>3. Livraison express pour urgences</h3>
                            <p>Service express le jour même pour les réparations urgentes, livraisons standard 24-48h selon destination et disponibilité des pièces.</p>
                            <span class="workflow-status">✓ Réactivité garantie</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>4. Livraison garage, atelier ou domicile</h3>
                            <p>Livraison directe dans vos locaux professionnels, chez vos clients ou à votre domicile selon vos besoins de réparation.</p>
                            <span class="workflow-status">✓ Flexibilité totale</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>5. Protection et identification des pièces</h3>
                            <p>Emballage sécurisé, étiquetage précis et protection adaptée selon le type de pièces pour éviter confusions et dommages.</p>
                            <span class="workflow-status">✓ Traçabilité complète</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="features" id="zones">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Nos clients</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 3rem; font-size: 1.1rem;">
                        Au service de tous les acteurs de l'automobile
                    </p>
                    <div class="features-grid">
                        <div class="feature-card fade-in">
                            <h3>✔ Garages et ateliers</h3>
                            <p>Livraison de pièces pour réparations, entretien et révisions automobiles.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Particuliers bricoleurs</h3>
                            <p>Transport de pièces pour réparations personnelles et entretien de véhicules.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Professionnels de l'auto</h3>
                            <p>Concessionnaires, carrossiers, centres auto - livraisons régulières et ponctuelles.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Service d'urgence</h3>
                            <p>Livraison express pour pannes et réparations urgentes, même week-ends.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2>Obtenez votre devis gratuit</h2>
                        <p>Recevez vos pièces auto rapidement et en sécurité avec Envoi Express, votre partenaire logistique automobile.</p>
                        <a href="/#contactez-nous" class="cta-button">Demander un devis</a>
                    </div>
                </div>
            </section>
            <!-- FAQ Section -->
            <div class="container">
                <section class="content-section">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Questions fréquentes</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 2rem; font-size: 1.1rem;">
                        Tout ce que vous devez savoir sur la livraison de pièces auto
                    </p>
                                        
                    <div class="faq-section">
                        <div class="faq-item">
                            <button class="faq-question">
                                Quels types de pièces automobiles livrez-vous ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous livrons toutes pièces automobiles : moteur, transmission, freinage, carrosserie, électronique, pneumatiques, accessoires. Des petites pièces aux éléments volumineux comme pare-chocs ou capots.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Proposez-vous un service express pour les urgences ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous proposons une livraison express le jour même pour les réparations urgentes. Service disponible dans les principales villes avec supplément tarifaire selon l'urgence.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Comment identifiez-vous les pièces lors du transport ?
                            </button>
                            <div class="faq-answer">
                                <p>Chaque pièce est étiquetée avec références précises, numéro de commande et destination. Pour les commandes multiples, nous utilisons un système de codes-barres pour éviter toute confusion.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Travaillez-vous avec les casses automobiles ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous récupérons régulièrement des pièces d'occasion dans les casses et centres de recyclage automobile. Service particulièrement apprécié pour les véhicules anciens ou les réparations économiques.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Quels sont vos délais de livraison standard ?
                            </button>
                            <div class="faq-answer">
                                <p>Livraison locale : 24h. Livraison régionale : 48h. Livraison nationale : 2-3 jours. Pour les pièces en stock chez nos partenaires, enlèvement et livraison le jour même possible.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Proposez-vous des tarifs préférentiels pour les professionnels ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous proposons des contrats préférentiels pour les garages, ateliers et professionnels de l'automobile avec tarifs dégressifs selon le volume et la fréquence des livraisons.</p>
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