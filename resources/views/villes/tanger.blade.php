@extends('layouts.app')
@section('content')
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Envoi Express - Déménagement Tanger</title>
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
                        <h1>Déménagement à Tanger</h1>
                        <p>
                            Besoin d'envoyer des colis ou de déménager rapidement depuis Tanger ? Profitez de notre service d'expédition express sécurisé, avec suivi en temps réel et devis instantané.
                        </p>
                    </div>
                </div>
            </section>
            <section class="workflow" id="procedure">
                <div class="workflow-container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        Comment ça marche ?
                    </h2>

                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-edit"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>1. Décrivez votre envoi</h3>
                            <p>Ville de départ : Tanger, destination, type d'envoi (colis, objets fragiles, mobilier ou déménagement), dimensions, poids et urgence.</p>
                            <span class="workflow-status">✓ Devis personnalisé</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>2. Recevez votre devis personnalisé</h3>
                            <p>En quelques clics, recevez une estimation personnalisée selon votre volume, votre délai et votre budget.</p>
                            <span class="workflow-status">✓ Prix transparent</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>3. Validez votre commande</h3>
                            <p>Confirmez votre choix et laissez-nous gérer l'expédition de Tanger vers votre destination.</p>
                            <span class="workflow-status">✓ Service clé en main</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>4. Transport sécurisé</h3>
                            <p>Depuis le port dynamique de Tanger, votre envoi voyage en toute sécurité avec suivi en temps réel.</p>
                            <span class="workflow-status">✓ Suivi complet</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>5. Livraison garantie</h3>
                            <p>Note client moyenne : 4,7/5 pour notre réactivité et professionnalisme depuis Tanger.</p>
                            <span class="workflow-status">✓ Satisfaction garantie</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="features" id="zones">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Pourquoi choisir notre service depuis Tanger ?</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 3rem; font-size: 1.1rem;">
                        Votre partenaire de confiance pour tous vos envois depuis Tanger
                    </p>
                    <div class="features-grid">
                        <div class="feature-card fade-in">
                            <h3><i class="fas fa-shipping-fast"></i> Livraison express garantie</h3>
                            <p>De Tanger vers toutes les destinations avec options rapides et sécurisées.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3><i class="fas fa-shield-alt"></i> Assurance incluse</h3>
                            <p>Jusqu'à 50 000 MAD pour protéger vos biens pendant le transport.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3><i class="fas fa-tags"></i> Tarifs avantageux</h3>
                            <p>Jusqu'à 40% moins chers que les transporteurs traditionnels.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3><i class="fas fa-box-open"></i> Service flexible</h3>
                            <p>Documents, cartons, électroménager, mobilier - nous transportons tout.</p>
                        </div>
                    </div>

                </div>
            </section>
            <section class="cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2>Recevez votre devis express maintenant</h2>
                        <p>Simplifiez vos envois depuis Tanger — rapide, sécurisé, et économique.</p>
                        <a href="/#contactez-nous" class="cta-button">Demander un devis</a>
                    </div>
                </div>
            </section>
            <!-- FAQ Section -->
            <div class="container">
                <section class="content-section">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Questions fréquentes</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 2rem; font-size: 1.1rem;">
                        Tout ce que vous devez savoir sur nos services depuis Tanger
                    </p>
                                        
                    <div class="faq-section">
                        <div class="faq-item">
                            <button class="faq-question">
                                Quelles destinations desservez-vous depuis Tanger ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous desservons toutes les villes du Maroc depuis Tanger : Rabat, Casablanca, Marrakech, Fès, Agadir, et bien d'autres. Devis instantané selon votre destination.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Quels sont vos délais depuis Tanger ?
                            </button>
                            <div class="faq-answer">
                                <p>Tanger-Rabat : 24h, Tanger-Casablanca : 24-48h, autres destinations : 2-5 jours selon la distance. Options express disponibles pour les envois urgents.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Proposez-vous l'enlèvement à domicile à Tanger ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous proposons l'enlèvement à domicile dans tous les quartiers de Tanger : centre-ville, Malabata, Boukhalef, zones industrielles. Service inclus dans nos tarifs.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Comment sont calculés vos tarifs depuis Tanger ?
                            </button>
                            <div class="faq-answer">
                                <p>Nos tarifs dépendent de la destination, du poids, du volume et de l'urgence. Système de calcul transparent avec jusqu'à 40% d'économies par rapport aux transporteurs classiques.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Gérez-vous les déménagements complets depuis Tanger ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous gérons tous types de déménagements depuis Tanger : appartements, maisons, bureaux. Service complet avec emballage, démontage/remontage et installation à destination.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Que faire pour un envoi fragile depuis Tanger ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous proposons un emballage renforcé et une manipulation spécialisée pour les objets fragiles. Assurance adaptée et suivi prioritaire pour vos envois délicats depuis Tanger.</p>
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