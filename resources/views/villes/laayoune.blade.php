@extends('layouts.app')
@section('content')
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Envoi Express - Déménagement Laâyoune</title>
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
                        <h1>Déménagement à Laayoune</h1>
                        <p>
                            Service de déménagement et transport express dans la capitale du Sahara marocain. Laâyoune, porte du Sud, bénéficie d'un service adapté à ses spécificités géographiques et économiques.
                        </p>
                    </div>
                </div>
            </section>
            <section class="workflow" id="procedure">
                <div class="workflow-container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        Nos services à Laâyoune
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 4rem; font-size: 1.1rem;">
                        Adaptés aux défis du Sud marocain
                    </p>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-route"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Liaisons longue distance</h3>
                            <p>Expertise pour les transports sur de longues distances vers Casablanca, Rabat, Marrakech avec planification adaptée aux contraintes sahariennes.</p>
                            <span class="workflow-status">✓ Expertise longue distance</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-fish"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Secteur de la pêche</h3>
                            <p>Services spécialisés pour l'industrie halieutique : transport d'équipements de pêche, matériel de transformation et installations portuaires.</p>
                            <span class="workflow-status">✓ Expertise halieutique</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-gem"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Activités minières</h3>
                            <p>Transport pour les entreprises du secteur minier et des phosphates avec équipements adaptés aux charges lourdes et spécialisées.</p>
                            <span class="workflow-status">✓ Solutions minières</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-sun"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Protection climatique</h3>
                            <p>Emballage et transport adaptés au climat saharien : protection contre la chaleur, le sable et les variations thermiques.</p>
                            <span class="workflow-status">✓ Adaptation climatique</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Services administratifs</h3>
                            <p>Solutions pour les administrations et organismes publics avec respect des procédures spécifiques et des délais institutionnels.</p>
                            <span class="workflow-status">✓ Expertise administrative</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="features" id="zones">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        Pourquoi choisir Envoi Express à Laâyoune ?
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 3rem; font-size: 1.1rem;">
                        Votre partenaire dans la capitale du Sahara
                    </p>
                    <div class="features-grid">
                        <div class="feature-card fade-in">
                            <h3><i class="fas fa-sun" style="color:#e4a500; margin-right: 8px;"></i> Expertise saharienne</h3>
                            <p>Connaissance parfaite des défis logistiques du Sud marocain.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3><i class="fas fa-truck-monster" style="color:#007bff; margin-right: 8px;"></i> Véhicules adaptés</h3>
                            <p>Flotte spécialement équipée pour les longues distances et le climat saharien.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3><i class="fas fa-fish" style="color:#00bfa5; margin-right: 8px;"></i> Secteurs spécialisés</h3>
                            <p>Expertise pour la pêche, les mines et les activités économiques locales.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3><i class="fas fa-thermometer-three-quarters" style="color:#dc3545; margin-right: 8px;"></i> Protection climatique</h3>
                            <p>Emballage et transport adaptés aux conditions extrêmes du Sahara.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2>Demandez votre devis gratuit</h2>
                        <p>Envoi Express Laâyoune - Votre partenaire transport dans le Sud marocain, nous livrons partout au Maroc.</p>
                        <a href="/#contactez-nous" class="cta-button">Obtenir un devis</a>
                    </div>
                </div>
            </section>
            <!-- FAQ Section -->
            <div class="container">
                <section class="content-section">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Questions fréquentes</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 2rem; font-size: 1.1rem;">
                        Tout ce que vous devez savoir sur nos services à Laâyoune
                    </p>
                                        
                    <div class="faq-section">
                        <div class="faq-item">
                            <button class="faq-question">
                                Quels sont vos délais depuis Laâyoune vers les grandes villes ?
                            </button>
                            <div class="faq-answer">
                                <p>Laâyoune-Agadir : 6h, Laâyoune-Marrakech : 8h, Laâyoune-Casablanca : 10h, Laâyoune-Rabat : 12h. Planification spéciale pour les longues distances avec étapes de repos.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Comment protégez-vous les biens du climat saharien ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous utilisons des emballages renforcés contre la chaleur, le sable et les variations thermiques. Nos véhicules sont climatisés et équipés pour maintenir des conditions optimales pendant le transport.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Proposez-vous des services pour l'industrie de la pêche ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous avons une expertise particulière pour le secteur halieutique de Laâyoune : transport d'équipements de pêche, matériel de transformation, installations frigorifiques et produits de la mer.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Travaillez-vous avec les entreprises minières ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous proposons des services spécialisés pour les entreprises du secteur minier et des phosphates : transport d'équipements lourds, matériel spécialisé et installations industrielles.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Couvrez-vous toute la région du Sud ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous desservons toute la région : Dakhla, Boujdour, Smara, Tarfaya et toutes les localités du Sud marocain. Véhicules adaptés aux pistes et routes sahariennes.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Quels sont vos tarifs pour les longues distances ?
                            </button>
                            <div class="faq-answer">
                                <p>Nos tarifs sont adaptés aux spécificités des longues distances depuis Laâyoune. Devis personnalisé avec tarifs préférentiels pour les envois réguliers et les professionnels locaux.</p>
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