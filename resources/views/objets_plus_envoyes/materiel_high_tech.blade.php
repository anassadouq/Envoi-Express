@extends('layouts.app')
@section('content')
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Envoi Express - Transport Matériel High-Tech</title>
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
                        <h1><i class="fas fa-laptop-code" style="margin-right: 10px;"></i> Transport de Matériel High-Tech</h1>
                        <p>
                            Le matériel high-tech est précieux, fragile et souvent coûteux : il mérite une attention particulière. Chez Envoi Express, nous sommes spécialisés dans le transport sécurisé de matériel électronique et informatique, pour les particuliers comme pour les professionnels.
                        </p>
                    </div>
                </div>
            </section>
            <section class="workflow" id="procedure">
                <div class="workflow-container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        Comment se passe le transport high-tech ?
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 4rem; font-size: 1.1rem;">
                        Un service ultra-sécurisé pour vos équipements électroniques
                    </p>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-box"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>1. Emballage renforcé et protections antichocs</h3>
                            <p>Emballage spécialisé avec mousse, film bulle et protections rigides pour préserver vos équipements des vibrations et chocs pendant le transport.</p>
                            <span class="workflow-status">✓ Protection maximale</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>2. Manutention par du personnel formé</h3>
                            <p>Nos équipes sont spécialement formées à la manipulation d'équipements électroniques fragiles et coûteux, avec des techniques adaptées.</p>
                            <span class="workflow-status">✓ Expertise technique</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>3. Véhicules adaptés et climatisés</h3>
                            <p>Camions propres, secs, amortis et non exposés aux variations de température pour préserver l'intégrité de vos équipements électroniques.</p>
                            <span class="workflow-status">✓ Transport optimal</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>4. Transport discret et sécurisé</h3>
                            <p>Service discret pour vos équipements de valeur avec véhicules sécurisés et protocoles de sécurité renforcés pendant tout le transport.</p>
                            <span class="workflow-status">✓ Sécurité renforcée</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>5. Traçabilité sur demande</h3>
                            <p>Suivi en temps réel de vos équipements avec notifications à chaque étape importante du transport pour votre tranquillité d'esprit.</p>
                            <span class="workflow-status">✓ Suivi complet</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="features" id="zones">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Nos clients</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 3rem; font-size: 1.1rem;">
                        Nous servons particuliers et professionnels
                    </p>
                    <div class="features-grid">
                        <div class="feature-card fade-in">
                            <h3>✔ Particuliers</h3>
                            <p>Déménagement high-tech, achat/vente d'équipements, transport d'ordinateurs personnels.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Bureaux et entreprises</h3>
                            <p>Start-ups, écoles, studios - transport de parcs informatiques et équipements professionnels.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Boutiques spécialisées</h3>
                            <p>Magasins, centres de réparation, revendeurs - livraisons et transferts d'équipements.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Service garanti</h3>
                            <p>Intervention rapide, zéro compromis sur la sécurité, assurance transport disponible.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2>Obtenez votre devis gratuit</h2>
                        <p>La solution idéale pour transporter vos équipements high-tech en toute confiance et sans stress.</p>
                        <a href="/#contactez-nous" class="cta-button">Demander un devis</a>
                    </div>
                </div>
            </section>
            <!-- FAQ Section -->
            <div class="container">
                <section class="content-section">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Questions fréquentes</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 2rem; font-size: 1.1rem;">
                        Tout ce que vous devez savoir sur le transport high-tech
                    </p>
                                        
                    <div class="faq-section">
                        <div class="faq-item">
                            <button class="faq-question">
                                Quels équipements high-tech transportez-vous ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous transportons ordinateurs, télévisions, imprimantes professionnelles, matériel audio/vidéo, serveurs, équipements réseau, consoles de jeux, matériel photo/vidéo professionnel, et tout équipement électronique sensible.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Comment protégez-vous les équipements fragiles ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous utilisons des emballages spécialisés : mousse antichoc, film bulle, caisses rigides, et protections sur mesure. Nos véhicules sont équipés de suspensions adaptées et climatisés pour éviter les variations de température.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Proposez-vous une assurance pour les équipements de valeur ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous proposons une assurance transport adaptée à la valeur de vos équipements. Cette assurance couvre les dommages, pertes et vols pendant le transport. Tarif calculé selon la valeur déclarée.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Vos équipes sont-elles formées au matériel informatique ?
                            </button>
                            <div class="faq-answer">
                                <p>Absolument. Nos manutentionnaires reçoivent une formation spécifique sur la manipulation d'équipements électroniques : techniques de portage, précautions antistatiques, et protocoles de sécurité adaptés.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Puis-je suivre le transport de mes équipements ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous proposons un service de traçabilité avec suivi GPS en temps réel et notifications automatiques. Vous recevez des alertes à chaque étape : enlèvement, transport, et livraison.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Intervenez-vous pour les entreprises ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous accompagnons les entreprises dans leurs déménagements informatiques, transferts de parcs machines, livraisons d'équipements neufs, et transport de matériel pour événements ou formations.</p>
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