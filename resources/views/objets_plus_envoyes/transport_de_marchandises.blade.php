@extends('layouts.app')
@section('content')
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Envoi Express - Transport de Marchandises</title>
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
                        <h1><i class="fas fa-truck" style="margin-right: 10px;"></i> Transport de Marchandises</h1>
                        <p>
                            Chez Envoi Express, nous mettons notre savoir-faire au service du transport de marchandises, quelle que soit la nature ou le volume. De l’envoi ponctuel à la gestion régulière de vos livraisons, nous vous proposons une solution rapide, fiable et sécurisée, adaptée à vos besoins.                        
                        </p>
                    </div>
                </div>
            </section>
            <section class="workflow" id="procedure">
                <div class="workflow-container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        Nos services de transport
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 4rem; font-size: 1.1rem;">
                        Des solutions adaptées à tous vos besoins professionnels
                    </p>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-boxes"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>1. Transport de colis, palettes ou marchandises en vrac</h3>
                            <p>Nous adaptons notre service selon le type de marchandises : colis individuels, palettes standardisées ou marchandises en vrac nécessitant un chargement spécifique.</p>
                            <span class="workflow-status">✓ Tous types acceptés</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>2. Envois express, planifiés ou en tournée</h3>
                            <p>Service flexible : livraisons urgentes le jour même, envois planifiés selon votre calendrier ou tournées régulières pour vos besoins récurrents.</p>
                            <span class="workflow-status">✓ Planning sur mesure</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-dolly"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>3. Chargement et déchargement par nos soins</h3>
                            <p>Notre équipe prend en charge la manutention complète : chargement sécurisé à l'origine et déchargement soigneux à destination avec le matériel adapté.</p>
                            <span class="workflow-status">✓ Service complet</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-map-marked-alt"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>4. Livraison sur chantier, en magasin ou à domicile</h3>
                            <p>Livraisons flexibles selon vos besoins : directement sur vos chantiers, dans vos points de vente ou chez vos clients particuliers.</p>
                            <span class="workflow-status">✓ Destinations multiples</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>5. Prise en charge de marchandises spéciales</h3>
                            <p>Transport adapté pour marchandises fragiles, lourdes ou volumineuses avec équipements et techniques de manutention spécialisés.</p>
                            <span class="workflow-status">✓ Expertise spécialisée</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="features" id="zones">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Nos engagements</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 3rem; font-size: 1.1rem;">
                        Votre partenaire de confiance pour le transport de marchandises
                    </p>
                    <div class="features-grid">
                        <div class="feature-card fade-in">
                            <h3>✔ Respect des délais</h3>
                            <p>Ponctualité garantie avec suivi en temps réel et notifications de livraison.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Suivi et traçabilité</h3>
                            <p>Traçabilité complète de vos marchandises avec géolocalisation et historique détaillé.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Véhicules adaptés</h3>
                            <p>Flotte diversifiée : utilitaires, camions, véhicules capitonnés selon vos marchandises.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Devis personnalisé</h3>
                            <p>Tarification transparente et adaptée à vos volumes, fréquences et destinations.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2>Obtenez votre devis gratuit</h2>
                        <p>Votre partenaire de confiance pour acheminer vos marchandises en toute sécurité.</p>
                        <a href="/#contactez-nous" class="cta-button">Demander un devis</a>
                    </div>
                </div>
            </section>
            <!-- FAQ Section -->
            <div class="container">
                <section class="content-section">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Questions fréquentes</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 2rem; font-size: 1.1rem;">
                        Tout ce que vous devez savoir sur le transport de marchandises
                    </p>
                                        
                    <div class="faq-section">
                        <div class="faq-item">
                            <button class="faq-question">
                                Quels types de marchandises transportez-vous ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous transportons tous types de marchandises légales : produits manufacturés, matières premières, équipements industriels, marchandises palettisées, produits finis. Nous adaptons notre service selon la nature de vos marchandises.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Proposez-vous des contrats de transport régulier ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous établissons des partenariats réguliers avec des tarifs préférentiels pour vos besoins récurrents : tournées hebdomadaires, livraisons mensuelles, ou transport à la demande avec conditions négociées.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Comment gérez-vous les marchandises fragiles ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous utilisons des véhicules capitonnés, des emballages de protection renforcés, des techniques de calage adaptées et une conduite souple. Nos équipes sont formées à la manipulation de marchandises délicates.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Quelles sont vos zones de livraison ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous couvrons tout le Maroc : livraisons locales, régionales et nationales. Transport urbain, inter-villes et vers les zones rurales selon vos besoins de distribution.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Comment calculez-vous vos tarifs ?
                            </button>
                            <div class="faq-answer">
                                <p>Nos tarifs dépendent du poids, volume, distance, délai souhaité et fréquence. Nous proposons des tarifs dégressifs pour les volumes importants et les contrats réguliers. Devis gratuit et personnalisé.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Que comprend votre assurance transport ?
                            </button>
                            <div class="faq-answer">
                                <p>Notre assurance couvre les dommages, pertes et vols pendant le transport. Couverture de base incluse, avec possibilité d'assurance renforcée pour les marchandises de grande valeur. Déclaration et indemnisation rapides.</p>
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