@extends('layouts.app')
@section('content')
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Envoi Express - Déménagement Casablanca</title>
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
                        <h1>Déménagement à Casablanca</h1>
                        <p>
                            Le déménagement rapide, fiable et professionnel. À Casablanca, chaque minute compte. Nous intervenons partout : Maârif, Bourgogne, Anfa, Sidi Maarouf, Hay Hassani, Ain Sebaâ.
                        </p>
                    </div>
                </div>
            </section>
            <section class="workflow" id="procedure">
                <div class="workflow-container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        Nos services à Casablanca
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 4rem; font-size: 1.1rem;">
                        Solutions adaptées aux particuliers et professionnels
                    </p>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Déménagement résidentiel</h3>
                            <p>Studio, appartement, villa - nous gérons tous types de déménagements résidentiels à Casablanca avec expertise et soin.</p>
                            <span class="workflow-status">✓ Service personnalisé</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Déménagement professionnel</h3>
                            <p>Bureaux, commerces, startups - déménagements d'entreprise avec planification adaptée à votre activité économique.</p>
                            <span class="workflow-status">✓ Expertise business</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Livraisons express</h3>
                            <p>Livraisons urgentes avec suivi et valeur déclarée partout à Casablanca et sa périphérie.</p>
                            <span class="workflow-status">✓ Rapidité garantie</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Service d'emballage</h3>
                            <p>Emballage professionnel, démontage/remontage de vos meubles par nos équipes qualifiées.</p>
                            <span class="workflow-status">✓ Service complet</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-warehouse"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Garde-meubles sécurisé</h3>
                            <p>Solutions de stockage dans nos entrepôts sécurisés à Casablanca pour vos besoins temporaires ou longue durée.</p>
                            <span class="workflow-status">✓ Stockage sécurisé</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="features" id="zones">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Pourquoi choisir notre service ?</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 3rem; font-size: 1.1rem;">
                        Votre partenaire de confiance pour vos envois vers Rabat
                    </p>
                    <div class="features-grid">
                        <div class="feature-card fade-in">
                            <h3>✔ Livraison express garantie</h3>
                            <p>Options d'expédition rapide vers Rabat avec suivi en temps réel.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Assurance sérénité</h3>
                            <p>Couverture jusqu'à 50 000 MAD pour protéger vos biens pendant le transport.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Tarifs compétitifs</h3>
                            <p>Jusqu'à 40% moins cher que les transporteurs traditionnels.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Service flexible</h3>
                            <p>Pour colis, meubles ou déménagements complets vers la capitale.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2>Demandez votre devis maintenant</h2>
                        <p>Casablanca bouge vite, nous aussi ! En ligne ou par téléphone — réponse en moins de 15 min !</p>
                        <a href="/#contactez-nous" class="cta-button">Obtenir un devis gratuit</a>
                    </div>
                </div>
            </section>
            <!-- FAQ Section -->
            <div class="container">
                <section class="content-section">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Questions fréquentes</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 2rem; font-size: 1.1rem;">
                        Tout ce que vous devez savoir sur nos services vers Rabat
                    </p>
                                        
                    <div class="faq-section">
                        <div class="faq-item">
                            <button class="faq-question">
                                Quels sont vos délais de livraison vers Rabat ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous proposons plusieurs options : livraison express le jour même depuis les villes proches, livraison standard 24-48h selon la ville de départ. Délais garantis avec suivi en temps réel.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Comment calculez-vous vos tarifs ?
                            </button>
                            <div class="faq-answer">
                                <p>Nos tarifs dépendent de la distance, du poids, du volume et de l'urgence. Notre système de devis instantané vous donne un prix transparent, jusqu'à 40% moins cher que les transporteurs traditionnels.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Que couvre votre assurance sérénité ?
                            </button>
                            <div class="faq-answer">
                                <p>Notre assurance couvre vos biens jusqu'à 50 000 MAD contre les dommages, pertes et vols pendant le transport. Déclaration simple et indemnisation rapide en cas de problème.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Proposez-vous des déménagements complets vers Rabat ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous gérons tous types de déménagements : appartements, maisons, bureaux. Service complet avec emballage, démontage/remontage et positionnement de vos meubles à Rabat.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Comment suivre mon envoi vers Rabat ?
                            </button>
                            <div class="faq-answer">
                                <p>Vous recevez un numéro de suivi permettant de localiser votre envoi en temps réel. Notifications automatiques à chaque étape importante du transport vers Rabat.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Livrez-vous dans tous les quartiers de Rabat ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous livrons dans tous les quartiers de Rabat et sa région : Agdal, Hassan, Souissi, Hay Riad, Temara, Salé. Livraison à domicile ou en point relais selon vos préférences.</p>
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