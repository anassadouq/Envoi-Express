@extends('layouts.app')
@section('content')

    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Qui sommes-nous - Envoi Express</title>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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
                    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="50" cy="50" r="0.5" fill="%23ffffff" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"></rect></svg>');
                    opacity: 0.3;
                }

                .heroo-content {
                    position: relative;
                    z-index: 2;
                }

                .heroo h1 {
                    font-size: 3.5rem;
                    margin-bottom: 1.5rem;
                    font-weight: 700;
                }

                .heroo p {
                    font-size: 1.3rem;
                    opacity: 0.9;
                    max-width: 800px;
                    margin: 0 auto;
                }

                /* Main Content */
                .main-content {
                    padding: 80px 0;
                }

                .content-section {
                    margin-bottom: 80px;
                }

                .section-title {
                    font-size: 2.5rem;
                    color: #333;
                    margin-bottom: 2rem;
                    text-align: center;
                }

                .section-subtitle {
                    font-size: 1.2rem;
                    color: #666;
                    text-align: center;
                    margin-bottom: 3rem;
                    max-width: 800px;
                    margin-left: auto;
                    margin-right: auto;
                }

                /* Story Section */
                .story-grid {
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    gap: 4rem;
                    align-items: center;
                    margin-bottom: 4rem;
                }

                .story-text {
                    font-size: 1.1rem;
                    line-height: 1.8;
                    color: #444;
                }

                .story-text h3 {
                    color: #2E4BC6;
                    font-size: 1.5rem;
                    margin-bottom: 1rem;
                }

                .story-text p {
                    margin-bottom: 1.5rem;
                }

                .story-image {
                    position: relative;
                    border-radius: 20px;
                    overflow: hidden;
                    height: 400px;
                    background: linear-gradient(135deg, #2E4BC6, #4A6CF7);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }

                .story-image-placeholder {
                    text-align: center;
                    color: white;
                }

                .story-image-placeholder .icon {
                    font-size: 4rem;
                    margin-bottom: 1rem;
                }

                /* Values Section */
                .values-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                    gap: 3rem;
                    margin-top: 3rem;
                }

                .value-card {
                    background: white;
                    padding: 2.5rem;
                    border-radius: 20px;
                    text-align: center;
                    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                    transition: transform 0.3s, box-shadow 0.3s;
                    position: relative;
                    overflow: hidden;
                }

                .value-card::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    height: 4px;
                    background: linear-gradient(90deg, #2E4BC6, #4A6CF7, #6B7EFF);
                }

                .value-card:hover {
                    transform: translateY(-10px);
                    box-shadow: 0 20px 50px rgba(0,0,0,0.15);
                }

                .value-icon {
                    width: 80px;
                    height: 80px;
                    background: linear-gradient(135deg, #2E4BC6, #4A6CF7);
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin: 0 auto 1.5rem;
                    font-size: 2rem;
                    color: white;
                }

                .value-card h3 {
                    color: #333;
                    margin-bottom: 1rem;
                    font-size: 1.5rem;
                }

                .value-card p {
                    color: #666;
                    line-height: 1.6;
                }

                /* Team Section */
                .team-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                    gap: 2rem;
                    margin-top: 3rem;
                }

                .team-member {
                    background: white;
                    border-radius: 20px;
                    padding: 2rem;
                    text-align: center;
                    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                    transition: transform 0.3s;
                }

                .team-member:hover {
                    transform: translateY(-5px);
                }

                .member-photo {
                    width: 120px;
                    height: 120px;
                    border-radius: 50%;
                    margin: 0 auto 1.5rem;
                    background: linear-gradient(135deg, #2E4BC6, #4A6CF7);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    color: white;
                    font-size: 2rem;
                    font-weight: bold;
                }

                .member-name {
                    font-size: 1.3rem;
                    font-weight: bold;
                    color: #333;
                    margin-bottom: 0.5rem;
                }

                .member-role {
                    color: #2E4BC6;
                    font-weight: 600;
                    margin-bottom: 1rem;
                }

                .member-bio {
                    color: #666;
                    font-size: 0.9rem;
                    line-height: 1.6;
                }

                /* Stats Section */
                .stats-section {
                    background: #f8f9fa;
                    padding: 80px 0;
                    margin: 80px 0;
                }

                .stats-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                    gap: 2rem;
                    margin-top: 3rem;
                }

                .stat-item {
                    text-align: center;
                    padding: 2rem;
                }

                .stat-number {
                    font-size: 3rem;
                    font-weight: bold;
                    color: #2E4BC6;
                    display: block;
                    margin-bottom: 0.5rem;
                }

                .stat-label {
                    color: #666;
                    font-size: 1.1rem;
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
                    background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="50" cy="50" r="0.5" fill="%23ffffff" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"></rect></svg>');
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

                /* Responsive */
                @media (max-width: 768px) {
                    .hero h1 {
                        font-size: 2.5rem;
                    }

                    .story-grid {
                        grid-template-columns: 1fr;
                        gap: 2rem;
                    }

                    .nav-links {
                        display: none;
                    }

                    .section-title {
                        font-size: 2rem;
                    }

                    .story-image {
                        height: 300px;
                    }
                }

                /* Animations */
                @keyframes fadeInUp {
                    from {
                        opacity: 0;
                        transform: translateY(50px);
                    }
                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }

                .fade-in {
                    animation: fadeInUp 1s ease-out;
                }

                .floating {
                    animation: floating 3s ease-in-out infinite;
                }

                @keyframes floating {
                    0%, 100% { transform: translateY(0px); }
                    50% { transform: translateY(-10px); }
                }
            </style>
        </head>

        <body>
            <!-- Hero Section -->
            <section class="heroo">
                <div class="container">
                    <div class="heroo-content">
                        <h1>Qui sommes-nous ?</h1>
                        <p>Découvrez l'histoire d'Envoi Express, une entreprise marocaine innovante qui révolutionne la livraison de colis en optimisant les trajets existants pour un transport plus économique et écologique.</p>
                    </div>
                </div>
            </section>

            <!-- Main Content -->
            <main class="main-content">
                <div class="container">
                    <!-- Notre Histoire -->
                    <section class="content-section">
                        <h2 class="section-title">Notre Histoire</h2>
                        <div class="story-grid">
                            <div class="story-text">
                                <h3>Une vision, une mission</h3>
                                <p>Envoi Express est né en 2020 d'un constat simple : pourquoi créer de nouveaux trajets quand des milliers de voyageurs et transporteurs parcourent déjà le Maroc chaque jour ?</p>
                                <p>Notre fondateur, inspiré par les défis logistiques du pays, a imaginé une plateforme qui connecte ceux qui ont besoin d'envoyer des colis avec ceux qui voyagent déjà sur le même itinéraire.</p>
                                <p>Aujourd'hui, nous sommes fiers d'être la première plateforme de transport collaboratif au Maroc, avec plus de 435 000 utilisateurs satisfaits.</p>
                            </div>
                            <div class="story-image">
                                <div class="story-image-placeholder">
                                    <div class="icon"><i class="fas fa-truck-moving"></i></div>
                                    <h3>Depuis 2020</h3>
                                    <p>Au service du Maroc</p>
                                </div>
                            </div>
                        </div>

                        <div class="story-grid" style="margin-top: 4rem;">
                            <div class="story-image">
                                <div class="story-image-placeholder">
                                    <div class="icon"><i class="fas fa-recycle"></i></div>
                                    <h3>Éco-responsable</h3>
                                    <p>Transport durable</p>
                                </div>
                            </div>
                            <div class="story-text">
                                <h3>Notre impact environnemental</h3>
                                <p>Chez Envoi Express, nous croyons fermement que l'innovation technologique doit servir l'environnement. En optimisant les trajets existants, nous réduisons significativement l'empreinte carbone du transport de colis.</p>
                                <p>Chaque livraison via notre plateforme évite en moyenne 25 kg de CO2eq par rapport aux méthodes traditionnelles. Ensemble, nous avons déjà évité plus de 10 millions de kg de CO2 !</p>
                                <p>Notre approche collaborative transforme chaque voyageur en acteur de la transition écologique.</p>
                            </div>
                        </div>
                    </section>


                    <!-- Nos Valeurs -->
                    <section class="content-section">
                        <h2 class="section-title">Nos Valeurs</h2>
                        <p class="section-subtitle">Les principes qui guident chacune de nos actions et décisions</p>
                        
                        <div class="values-grid">
                            <div class="value-card fade-in">
                                <div class="value-icon"><i class="fas fa-handshake"></i></div>
                                <h3>Confiance</h3>
                                <p>Nous bâtissons une communauté basée sur la confiance mutuelle, avec un système d'avis vérifiés et une assurance complète pour tous les envois.</p>
                            </div>
                            <div class="value-card fade-in">
                                <div class="value-icon"><i class="fas fa-leaf"></i></div>
                                <h3>Durabilité</h3>
                                <p>Chaque colis transporté via notre réseau contribue à réduire l'impact environnemental du transport traditionnel.</p>
                            </div>
                            <div class="value-card fade-in">
                                <div class="value-icon"><i class="fas fa-lightbulb"></i></div>
                                <h3>Innovation</h3>
                                <p>Nous révolutionnons la logistique marocaine en créant des solutions technologiques adaptées aux besoins locaux.</p>
                            </div>
                            <div class="value-card fade-in">
                                <div class="value-icon"><i class="fas fa-wallet"></i></div>
                                <h3>Accessibilité</h3>
                                <p>Des prix jusqu'à 80% moins chers que les transporteurs traditionnels, pour rendre la livraison accessible à tous.</p>
                            </div>
                            <div class="value-card fade-in">
                                <div class="value-icon"><i class="fas fa-bullseye"></i></div>
                                <h3>Excellence</h3>
                                <p>Un taux de satisfaction de 4,7/5 et 99,9% de colis livrés sans incident témoignent de notre engagement qualité.</p>
                            </div>
                            <div class="value-card fade-in">
                                <div class="value-icon"><i class="fas fa-rocket"></i></div>
                                <h3>Simplicité</h3>
                                <p>Une plateforme intuitive et un processus en 3 étapes seulement pour envoyer vos colis partout au Maroc.</p>
                            </div>
                        </div>
                    </section>

                    <!-- Notre Équipe -->
                    <section class="content-section">
                        <h2 class="section-title">Notre Équipe</h2>
                        <p class="section-subtitle">Les talents passionnés qui font d'Envoi Express une réussite</p>
                        
                        <div class="team-grid">
                            <div class="team-member fade-in">
                                <div class="member-photo">YA</div>
                                <div class="member-name">Youssef Alami</div>
                                <div class="member-role">CEO & Fondateur</div>
                                <div class="member-bio">Entrepreneur passionné par l'innovation logistique et le développement durable. 15 ans d'expérience dans le transport au Maroc.</div>
                            </div>
                            <div class="team-member fade-in">
                                <div class="member-photo">SB</div>
                                <div class="member-name">Sarah Benali</div>
                                <div class="member-role">CTO</div>
                                <div class="member-bio">Ingénieure en informatique spécialisée dans les plateformes collaboratives. Experte en intelligence artificielle et optimisation de trajets.</div>
                            </div>
                            <div class="team-member fade-in">
                                <div class="member-photo">KM</div>
                                <div class="member-name">Karim Moussaoui</div>
                                <div class="member-role">Directeur Opérations</div>
                                <div class="member-bio">Expert en logistique et supply chain avec 12 ans d'expérience. Responsable de l'optimisation de notre réseau de transporteurs.</div>
                            </div>
                            <div class="team-member fade-in">
                                <div class="member-photo">LT</div>
                                <div class="member-name">Laila Tazi</div>
                                <div class="member-role">Directrice Marketing</div>
                                <div class="member-bio">Spécialiste en marketing digital et communication. Passionnée par l'expérience client et l'innovation dans les services.</div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- Stats Section -->
                <section class="stats-section">
                    <div class="container">
                        <h2 class="section-title">Envoi Express en Chiffres</h2>
                        <p class="section-subtitle">Des résultats qui témoignent de notre engagement</p>
                        
                        <div class="stats-grid">
                            <div class="stat-item">
                                <span class="stat-number floating">435,000+</span>
                                <div class="stat-label">Utilisateurs satisfaits</div>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number floating">1.2M+</span>
                                <div class="stat-label">Colis livrés</div>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number floating">4.7/5</span>
                                <div class="stat-label">Note moyenne</div>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number floating">99.9%</span>
                                <div class="stat-label">Colis livrés sans incident</div>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number floating">16</span>
                                <div class="stat-label">Villes desservies</div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- CTA Section -->
                <section class="cta-section">
                    <div class="container">
                        <div class="cta-content">
                            <h2>Rejoignez la révolution du transport</h2>
                            <p>Découvrez comment Envoi Express peut simplifier vos envois tout en contribuant à un avenir plus durable.</p>
                            <a href="/" class="cta-button">Commencer maintenant</a>
                        </div>
                    </div>
                </section>
            </main>
        </body>
    </html>
@endsection