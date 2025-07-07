@extends('layouts.app')
@section('content')
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Envoi Express - Déménagement Marrakech</title>
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
                        <h1>Déménagement à Marrakech</h1>
                        <p>
                            Le déménagement sans stress, rapide et humain. À Marrakech, tout va vite. Nous vous accompagnons pour tous vos besoins en déménagement et transport express, en toute sérénité.
                        </p>
                    </div>
                </div>
            </section>
            <section class="workflow" id="procedure">
                <div class="workflow-container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        Nos services à Marrakech
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 4rem; font-size: 1.1rem;">
                        Notre équipe locale intervient rapidement partout à Marrakech
                    </p>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Déménagement particuliers</h3>
                            <p>Appartements, villas, étudiants - nous gérons tous types de déménagements résidentiels à Marrakech avec soin et professionnalisme.</p>
                            <span class="workflow-status">✓ Service personnalisé</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Déménagements d'entreprise</h3>
                            <p>Bureaux, commerces, startups - déménagements professionnels avec planification adaptée à votre activité.</p>
                            <span class="workflow-status">✓ Expertise business</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Transport d'objets lourds ou fragiles</h3>
                            <p>Manipulation experte pour pianos, œuvres d'art, antiquités et objets de valeur avec protection renforcée.</p>
                            <span class="workflow-status">✓ Manipulation experte</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Emballage, démontage/remontage</h3>
                            <p>Service complet d'emballage professionnel et montage/démontage de vos meubles par nos équipes qualifiées.</p>
                            <span class="workflow-status">✓ Service complet</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-warehouse"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Garde-meubles sécurisé</h3>
                            <p>Solutions de stockage temporaire ou longue durée dans nos entrepôts sécurisés à Marrakech.</p>
                            <span class="workflow-status">✓ Stockage sécurisé</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="features" id="zones">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Pourquoi choisir Envoi Express à Marrakech ?</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 3rem; font-size: 1.1rem;">
                        Votre partenaire local de confiance dans la ville ocre
                    </p>
                    <div class="features-grid">
                        <div class="feature-card fade-in">
                            <h3>Équipe locale et réactive</h3>
                            <p>Équipe basée à Marrakech, ponctuelle et disponible 7j/7.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>Connaissance parfaite</h3>
                            <p>Guéliz, Majorelle, Hivernage, Sidi Ghanem, Targa - nous connaissons tous les quartiers.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>Service client chaleureux</h3>
                            <p>Disponible 7j/7 avec une approche humaine et personnalisée.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>Plus de 170 avis 5 étoiles</h3>
                            <p>Tarifs clairs, devis gratuits et sans engagement.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2>Demandez votre devis maintenant</h2>
                        <p>Marrakech bouge vite, nous aussi ! Votre déménagement, notre mission.</p>
                        <a href="/#contactez-nous" class="cta-button">Obtenir un devis gratuit</a>
                    </div>
                </div>
            </section>
            <!-- FAQ Section -->
            <div class="container">
                <section class="content-section">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Questions fréquentes</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 2rem; font-size: 1.1rem;">
                        Tout ce que vous devez savoir sur nos services à Marrakech
                    </p>
                                        
                    <div class="faq-section">
                        <div class="faq-item">
                            <button class="faq-question">
                                Dans quels quartiers de Marrakech intervenez-vous ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous intervenons dans tous les quartiers de Marrakech : Guéliz, Majorelle, Hivernage, Sidi Ghanem, Targa, Médina, Agdal, et toute la périphérie. Devis gratuit quel que soit le quartier.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Proposez-vous des déménagements vers d'autres villes ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous gérons les déménagements depuis Marrakech vers toutes les villes du Maroc : Casablanca, Rabat, Agadir, Fès, etc. Devis personnalisé selon la destination.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Comment gérez-vous les accès difficiles dans la Médina ?
                            </button>
                            <div class="faq-answer">
                                <p>Notre équipe connaît parfaitement la Médina de Marrakech. Nous utilisons des véhicules adaptés et des techniques spéciales pour accéder aux riads et maisons traditionnelles.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Quels sont vos tarifs à Marrakech ?
                            </button>
                            <div class="faq-answer">
                                <p>Nos tarifs sont transparents et compétitifs. Devis gratuit en ligne ou par téléphone avec réponse en moins de 15 minutes. Pas de frais cachés, prix tout compris.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Proposez-vous un service de garde-meubles ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous disposons d'entrepôts sécurisés à Marrakech pour le stockage temporaire ou longue durée de vos meubles et objets. Tarifs préférentiels pour nos clients déménagement.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Gérez-vous les déménagements d'étudiants ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous proposons des formules spéciales pour les étudiants avec tarifs préférentiels. Service adapté aux petits volumes et budgets étudiants à Marrakech.</p>
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