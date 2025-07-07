@extends('layouts.app')
@section('content')
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Envoi Express - Livraison Vélo</title>
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
                        <h1><i class="fas fa-bicycle" style="margin-right: 10px;"></i> Livraison Vélo</h1>
                        <p>
                            Service spécialisé dans le transport de vélos. Vélo de route, VTT, vélo électrique ou vélo de collection - nous transportons votre deux-roues en toute sécurité.
                        </p>
                    </div>
                </div>
            </section>

            <section class="workflow" id="procedure">
                <div class="workflow-container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        Comment se passe le transport de vélos ?
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 4rem; font-size: 1.1rem;">
                        Un service adapté aux spécificités de votre vélo
                    </p>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-bicycle"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>1. Tous types de vélos acceptés</h3>
                            <p>Vélos de route, VTT, vélos électriques, vélos de ville, vélos de collection, vélos enfants - nous adaptons notre service à chaque type de vélo.</p>
                            <span class="workflow-status">✓ Expertise cycliste</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>2. Démontage et remontage professionnel</h3>
                            <p>Démontage partiel sécurisé (roues, pédales, guidon si nécessaire) pour optimiser le transport et remontage soigneux à destination.</p>
                            <span class="workflow-status">✓ Montage expert</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-box"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>3. Emballage et protection spécialisés</h3>
                            <p>Cartons vélos renforcés, mousses de protection, film plastique et calage adapté pour préserver cadre, composants et finitions.</p>
                            <span class="workflow-status">✓ Protection maximale</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>4. Transport sécurisé et suivi</h3>
                            <p>Véhicules adaptés avec arrimage spécialisé, conduite souple et suivi GPS pour garantir l'intégrité de votre vélo pendant le transport.</p>
                            <span class="workflow-status">✓ Transport optimal</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>5. Livraison et vérification finale</h3>
                            <p>Livraison à domicile avec déballage, remontage si nécessaire et vérification du bon fonctionnement avant remise au destinataire.</p>
                            <span class="workflow-status">✓ Service complet</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="features" id="zones">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Nos services spécialisés</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 3rem; font-size: 1.1rem;">
                        Adaptés aux besoins des cyclistes et professionnels du cycle
                    </p>
                    <div class="features-grid">
                        <div class="feature-card fade-in">
                            <h3>✔ Livraison magasin vers domicile</h3>
                            <p>Récupération de votre vélo neuf en magasin et livraison directe chez vous.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Transport pour événements sportifs</h3>
                            <p>Acheminement de vélos vers compétitions, randonnées ou événements cyclistes.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Déménagement cycliste</h3>
                            <p>Transport de plusieurs vélos lors de déménagements ou relocalisations.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Assurance spécialisée</h3>
                            <p>Couverture adaptée à la valeur de votre vélo, y compris vélos haut de gamme.</p>
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
                        Tout ce que vous devez savoir sur le transport de vélos
                    </p>
                                        
                    <div class="faq-section">
                        <div class="faq-item">
                            <button class="faq-question">
                                Faut-il démonter le vélo avant transport ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous nous occupons du démontage partiel si nécessaire (roues, pédales, guidon). Pour les vélos standards, un démontage minimal suffit. Pour les vélos haut de gamme, nous prenons des précautions supplémentaires.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Comment protégez-vous les vélos électriques ?
                            </button>
                            <div class="faq-answer">
                                <p>Les vélos électriques nécessitent des précautions spéciales : protection renforcée de la batterie, déconnexion sécurisée des composants électroniques et emballage adapté aux contraintes techniques.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Transportez-vous plusieurs vélos en même temps ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous pouvons transporter plusieurs vélos simultanément pour les familles, clubs cyclistes ou magasins. Tarifs dégressifs selon le nombre de vélos transportés.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Que se passe-t-il si mon vélo est endommagé ?
                            </button>
                            <div class="faq-answer">
                                <p>Tous nos transports de vélos sont assurés. En cas de dommage, nous intervenons rapidement avec expertise par un professionnel du cycle et prise en charge des réparations ou remplacement.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Livrez-vous pour les événements sportifs ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous proposons un service spécialisé pour les compétitions cyclistes : livraison sur site d'événement, récupération après course et transport vers hôtels ou domiciles.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Quels sont vos délais pour la livraison de vélos ?
                            </button>
                            <div class="faq-answer">
                                <p>Transport local : 24-48h. Transport régional : 2-3 jours. Transport national : 3-5 jours. Service express disponible pour les urgences avec supplément tarifaire.</p>
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