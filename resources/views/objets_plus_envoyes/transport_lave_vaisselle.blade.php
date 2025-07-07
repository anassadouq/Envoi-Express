@extends('layouts.app')
@section('content')
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Envoi Express - Transport Lave-Vaisselle</title>
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
                        <h1><i class="fas fa-utensils" style="margin-right: 10px;"></i> Transport Lave-Vaisselle</h1>
                        <p>
                            Service spécialisé dans le transport de lave-vaisselle. Encastrable, pose libre ou professionnel - nous livrons et installons votre lave-vaisselle en toute sécurité.
                        </p>
                    </div>
                </div>
            </section>
            <section class="workflow" id="procedure">
                <div class="workflow-container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        Comment se passe le transport de lave-vaisselle ?
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 4rem; font-size: 1.1rem;">
                        Un service complet de la récupération à l'installation
                    </p>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-store"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>1. Enlèvement en magasin ou domicile</h3>
                            <p>Récupération de votre lave-vaisselle neuf en magasin ou enlèvement de votre ancien appareil à domicile pour remplacement ou déménagement.</p>
                            <span class="workflow-status">✓ Service flexible</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-dolly"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>2. Manutention spécialisée</h3>
                            <p>Manipulation experte avec diables adaptés, sangles de portage et techniques spécifiques pour éviter les chocs et préserver les composants internes.</p>
                            <span class="workflow-status">✓ Manipulation experte</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>3. Protection renforcée pendant transport</h3>
                            <p>Emballage adapté, calage sécurisé et transport en position verticale pour préserver les circuits internes et éviter les fuites.</p>
                            <span class="workflow-status">✓ Transport sécurisé</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>4. Livraison et positionnement</h3>
                            <p>Livraison à l'étage si nécessaire, positionnement dans votre cuisine et déballage soigneux de votre lave-vaisselle.</p>
                            <span class="workflow-status">✓ Livraison complète</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>5. Installation et raccordement (optionnel)</h3>
                            <p>Service d'installation complet : raccordement eau, évacuation, électricité et premier test de fonctionnement de votre lave-vaisselle.</p>
                            <span class="workflow-status">✓ Installation professionnelle</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="features" id="zones">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Types de lave-vaisselle transportés</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 3rem; font-size: 1.1rem;">
                        Expertise pour tous modèles et configurations
                    </p>
                    <div class="features-grid">
                        <div class="feature-card fade-in">
                            <h3>✔ Lave-vaisselle encastrable</h3>
                            <p>Transport et installation de modèles encastrables avec adaptation aux dimensions de votre cuisine.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Lave-vaisselle pose libre</h3>
                            <p>Livraison de modèles indépendants avec positionnement et raccordement selon vos besoins.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Lave-vaisselle professionnel</h3>
                            <p>Transport d'appareils professionnels pour restaurants, collectivités et établissements.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Service de reprise</h3>
                            <p>Enlèvement de votre ancien lave-vaisselle lors de la livraison du nouveau.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2>Obtenez votre devis gratuit</h2>
                        <p>Faites confiance à nos experts pour le transport et l'installation de votre lave-vaisselle en toute sérénité.</p>
                        <a href="/#contactez-nous" class="cta-button">Demander un devis</a>
                    </div>
                </div>
            </section>
            <!-- FAQ Section -->
            <div class="container">
                <section class="content-section">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Questions fréquentes</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 2rem; font-size: 1.1rem;">
                        Tout ce que vous devez savoir sur le transport de lave-vaisselle
                    </p>
                                        
                    <div class="faq-section">
                        <div class="faq-item">
                            <button class="faq-question">
                                Proposez-vous l'installation du lave-vaisselle ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous proposons un service d'installation complet : raccordement arrivée d'eau, évacuation, branchement électrique et premier test de fonctionnement. Installation par techniciens qualifiés.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Comment transportez-vous les lave-vaisselle encastrables ?
                            </button>
                            <div class="faq-answer">
                                <p>Les lave-vaisselle encastrables nécessitent des précautions particulières. Nous vérifions les dimensions, protégeons les glissières et rails, et nous assurons que l'appareil s'intégrera parfaitement dans votre cuisine.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Reprenez-vous l'ancien lave-vaisselle ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous proposons un service de reprise de votre ancien lave-vaisselle lors de la livraison du nouveau. Débranchement, enlèvement et évacuation selon les normes environnementales.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Que faire si le lave-vaisselle ne passe pas par l'escalier ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous évaluons l'accès avant livraison. Si nécessaire, nous utilisons des techniques spéciales : démontage de portes, passage par fenêtre avec matériel de levage, ou recherche d'accès alternatifs.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Vos livreurs sont-ils formés à l'installation ?
                            </button>
                            <div class="faq-answer">
                                <p>Nos équipes sont formées aux raccordements de base. Pour les installations complexes ou les modèles professionnels, nous faisons appel à des techniciens spécialisés partenaires.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Quels sont vos créneaux de livraison ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous proposons des créneaux flexibles : matin, après-midi ou sur rendez-vous précis. Pour les installations, nous privilégions des créneaux plus larges pour garantir un travail soigné.</p>
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