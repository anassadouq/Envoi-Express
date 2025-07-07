@extends('layouts.app')
@section('content')
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Envoi Express - Livraison de Colis</title>
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
                        <h1><i class="fas fa-box" style="margin-right: 10px;"></i> Livraison de Colis</h1>
                        <p>
                            Service de livraison rapide et sécurisé pour tous vos colis. Du petit paquet au colis volumineux, nous assurons une livraison fiable partout au Maroc.
                        </p>
                    </div>
                </div>
            </section>
            <section class="workflow" id="procedure">
                <div class="workflow-container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        Comment fonctionne notre service de livraison ?
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 4rem; font-size: 1.1rem;">
                        Un processus simple et efficace pour tous vos envois
                    </p>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-mouse-pointer"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>1. Commande en ligne simple</h3>
                            <p>Renseignez les détails de votre colis, adresses d'enlèvement et de livraison. Obtenez un devis instantané et confirmez votre commande.</p>
                            <span class="workflow-status">✓ Réservation rapide</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-truck-pickup"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>2. Enlèvement à domicile</h3>
                            <p>Notre transporteur vient récupérer votre colis à l'adresse indiquée, au créneau horaire convenu. Emballage et étiquetage sur place si nécessaire.</p>
                            <span class="workflow-status">✓ Collecte pratique</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-route"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>3. Transport sécurisé</h3>
                            <p>Votre colis voyage dans nos véhicules adaptés avec suivi GPS en temps réel. Protection et manipulation soignée tout au long du trajet.</p>
                            <span class="workflow-status">✓ Suivi en temps réel</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>4. Livraison à destination</h3>
                            <p>Livraison directe au destinataire avec signature et confirmation de réception. Notification automatique de la livraison réussie.</p>
                            <span class="workflow-status">✓ Livraison confirmée</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>5. Évaluation du service</h3>
                            <p>Notez votre expérience et le transporteur pour maintenir la qualité de notre service et aider les futurs utilisateurs.</p>
                            <span class="workflow-status">✓ Qualité garantie</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="features" id="zones">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Nos avantages</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 3rem; font-size: 1.1rem;">
                        Pourquoi choisir Envoi Express pour vos livraisons
                    </p>
                    <div class="features-grid">
                        <div class="feature-card fade-in">
                            <h3>✔ Livraison rapide</h3>
                            <p>Express le jour même, standard 24-48h selon la destination et l'urgence.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Tarifs compétitifs</h3>
                            <p>Prix transparents calculés selon poids, dimensions et distance. Pas de frais cachés.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Assurance incluse</h3>
                            <p>Tous les colis sont automatiquement assurés contre les pertes et dommages.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Suivi complet</h3>
                            <p>Traçabilité GPS en temps réel et notifications à chaque étape importante.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2>Obtenez votre devis gratuit</h2>
                        <p>Confiez le transport de votre vélo à des spécialistes qui comprennent la valeur de votre deux-roues.</p>
                        <a href="/#contactez-nous" class="cta-button">Demander un devis</a>
                    </div>
                </div>
            </section>
            <!-- FAQ Section -->
            <div class="container">
                <section class="content-section">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Questions fréquentes</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 2rem; font-size: 1.1rem;">
                        Tout ce que vous devez savoir sur nos livraisons de colis
                    </p>
                                        
                    <div class="faq-section">
                        <div class="faq-item">
                            <button class="faq-question">
                                Quelles sont les dimensions et poids maximum acceptés ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous acceptons les colis jusqu'à 30kg et 150cm de longueur maximum. Pour les colis plus volumineux ou lourds, contactez-nous pour une solution sur mesure avec nos services de transport spécialisé.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Quels sont vos délais de livraison ?
                            </button>
                            <div class="faq-answer">
                                <p>Livraison express le jour même dans la même ville, 24h pour les villes voisines, 48-72h pour les destinations plus éloignées. Délais garantis avec possibilité de livraison sur rendez-vous.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Comment calculez-vous le prix de livraison ?
                            </button>
                            <div class="faq-answer">
                                <p>Le tarif dépend du poids, des dimensions, de la distance et du délai souhaité. Notre calculateur en ligne vous donne un prix instantané et transparent, sans frais cachés.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Que se passe-t-il si le destinataire est absent ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous tentons une nouvelle livraison le lendemain. Si le destinataire reste injoignable après 3 tentatives, le colis est retourné à l'expéditeur ou stocké en point relais selon vos instructions.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Puis-je modifier l'adresse de livraison après envoi ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, tant que le colis n'est pas en cours de livraison finale. Contactez notre service client avec votre numéro de suivi pour modifier l'adresse. Des frais supplémentaires peuvent s'appliquer.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Quels objets ne peuvent pas être envoyés ?
                            </button>
                            <div class="faq-answer">
                                <p>Sont interdits : objets dangereux, produits illégaux, denrées périssables sans emballage adapté, liquides, objets de valeur exceptionnelle. Consultez notre liste complète dans nos conditions générales.</p>
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