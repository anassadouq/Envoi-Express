@extends('layouts.app')
@section('content')
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Envoi Express - Déménagement Nador</title>
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
                        <h1>Déménagement à Nador</h1>
                        <p>
                            Service de déménagement et transport express dans la région de l'Oriental. Nador, porte de la Méditerranée, bénéficie d'un service adapté à son dynamisme économique et sa position stratégique.
                        </p>
                    </div>
                </div>
            </section>
            <section class="workflow" id="procedure">
                <div class="workflow-container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        Nos services à Nador
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 4rem; font-size: 1.1rem;">
                        Adaptés au dynamisme de la région de l'Oriental
                    </p>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-ship"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Liaison port-ville</h3>
                            <p>Service spécialisé pour les marchandises et effets personnels transitant par le port de Nador, avec coordination douanière.</p>
                            <span class="workflow-status">✓ Expertise portuaire</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-industry"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Services industriels</h3>
                            <p>Transport pour les entreprises de la zone industrielle et les activités minières de la région avec équipements adaptés.</p>
                            <span class="workflow-status">✓ Solutions industrielles</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-globe-europe"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Déménagements internationaux</h3>
                            <p>Expertise pour les familles de la diaspora marocaine avec services adaptés aux retours et départs vers l'Europe.</p>
                            <span class="workflow-status">✓ Dimension internationale</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-mountain"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Desserte régionale</h3>
                            <p>Couverture de toute la région : Al Hoceima, Berkane, Oujda, et zones rurales du Rif avec véhicules adaptés.</p>
                            <span class="workflow-status">✓ Couverture régionale</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-fish"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>Secteur halieutique</h3>
                            <p>Services spécialisés pour les professionnels de la pêche et de l'aquaculture avec transport d'équipements spécialisés.</p>
                            <span class="workflow-status">✓ Expertise maritime</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="features" id="zones">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        Pourquoi choisir Envoi Express à Nador ?
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 3rem; font-size: 1.1rem;">
                        Votre partenaire dans la perle de la Méditerranée
                    </p>
                    <div class="features-grid">
                        <div class="feature-card fade-in">
                            <h3><i class="fas fa-anchor" style="color:#0077b6; margin-right: 8px;"></i> Expertise portuaire</h3>
                            <p>Connaissance des procédures portuaires et douanières de Nador.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3><i class="fas fa-industry" style="color:#6c757d; margin-right: 8px;"></i> Solutions industrielles</h3>
                            <p>Services adaptés aux entreprises et zones industrielles de la région.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3><i class="fas fa-globe-europe" style="color:#28a745; margin-right: 8px;"></i> Dimension internationale</h3>
                            <p>Expertise pour les déménagements liés à la diaspora marocaine.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3><i class="fas fa-mountain" style="color:#8d6e63; margin-right: 8px;"></i> Couverture du Rif</h3>
                            <p>Desserte de toute la région de l'Oriental et du Rif.</p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2>Demandez votre devis gratuit</h2>
                        <p>Envoi Express Nador - Votre partenaire transport dans la région de l'Oriental.</p>
                        <a href="/#contactez-nous" class="cta-button">Obtenir un devis</a>
                    </div>
                </div>
            </section>
            <!-- FAQ Section -->
            <div class="container">
                <section class="content-section">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Questions fréquentes</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 2rem; font-size: 1.1rem;">
                        Tout ce que vous devez savoir sur nos services à Nador
                    </p>
                                        
                    <div class="faq-section">
                        <div class="faq-item">
                            <button class="faq-question">
                                Proposez-vous des services liés au port de Nador ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous avons une expertise particulière pour les marchandises transitant par le port de Nador. Nous gérons la coordination avec les services douaniers et le transport depuis/vers le port.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Gérez-vous les déménagements internationaux ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous avons une expertise pour les familles de la diaspora marocaine. Services adaptés aux retours d'Europe et départs vers l'international avec gestion des formalités.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Quelles villes de la région desservez-vous ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous couvrons toute la région de l'Oriental : Al Hoceima, Berkane, Oujda, Taourirt, et toutes les zones rurales du Rif. Véhicules adaptés aux routes de montagne.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Travaillez-vous avec les entreprises industrielles ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous proposons des services spécialisés pour les entreprises de la zone industrielle de Nador et les activités minières de la région. Transport d'équipements lourds et spécialisés.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Quels sont vos délais vers les grandes villes ?
                            </button>
                            <div class="faq-answer">
                                <p>Nador-Fès : 4h, Nador-Casablanca : 6h, Nador-Rabat : 5h. Liaisons régulières avec planification adaptée aux contraintes géographiques de la région.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Proposez-vous des services pour le secteur de la pêche ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous avons une expertise pour les professionnels de la pêche et de l'aquaculture : transport d'équipements spécialisés, matériel de pêche et installations portuaires.</p>
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