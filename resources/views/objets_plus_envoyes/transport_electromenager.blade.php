@extends('layouts.app')
@section('content')
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Envoi Express - Transport Électroménager</title>
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
                        <h1>
                            <i class="fas fa-plug-circle-bolt" style="margin-right: 10px; color: white;"></i>
                            Transport Électroménager
                        </h1>
                        <p>
                            Besoin de faire livrer un réfrigérateur, une machine à laver, un four ou tout autre appareil électroménager ? Envoi Express vous propose un service rapide, sécurisé et adapté au transport de vos équipements électroménagers, qu’ils soient neufs ou usagés.                        
                        </p>
                    </div>
                </div>
            </section>
            <section class="workflow" id="procedure">
                <div class="workflow-container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        Comment se passe le transport électroménager ?
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 4rem; font-size: 1.1rem;">
                        Un service professionnel adapté à vos appareils électroménagers
                    </p>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-store"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>1. Enlèvement en magasin, entrepôt ou domicile</h3>
                            <p>Nous récupérons vos appareils électroménagers directement chez le vendeur, en entrepôt ou à votre domicile selon vos besoins.</p>
                            <span class="workflow-status">✓ Enlèvement flexible</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>2. Livraison à l'étage avec ou sans ascenseur</h3>
                            <p>Nos équipes sont formées pour livrer vos appareils à l'étage, même sans ascenseur, en toute sécurité pour vos équipements et votre domicile.</p>
                            <span class="workflow-status">✓ Livraison à l'étage</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>3. Protection renforcée pendant le transport</h3>
                            <p>Emballage adapté, sangles d'arrimage et protection contre les chocs pour préserver vos appareils pendant tout le trajet.</p>
                            <span class="workflow-status">✓ Protection maximale</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>4. Matériel de levage et d'arrimage adapté</h3>
                            <p>Diables, sangles, matériel de portage - nous disposons de tout l'équipement nécessaire pour manipuler vos appareils lourds et encombrants.</p>
                            <span class="workflow-status">✓ Équipement professionnel</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>5. Installation sur demande (en option)</h3>
                            <p>Service d'installation et de mise en service de vos appareils électroménagers directement à destination pour un service complet.</p>
                            <span class="workflow-status">✓ Installation possible</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="features" id="zones">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Pourquoi choisir Envoi Express ?</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 3rem; font-size: 1.1rem;">
                        Nos garanties pour un transport électroménager réussi
                    </p>
                    <div class="features-grid">
                        <div class="feature-card fade-in">
                            <h3>✔ Livraison rapide et ponctuelle</h3>
                            <p>Respect des délais convenus avec suivi en temps réel de votre livraison.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Manutention par des professionnels</h3>
                            <p>Équipes formées aux spécificités du transport d'électroménager lourd et fragile.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Transport local, régional ou longue distance</h3>
                            <p>Service disponible partout au Maroc selon vos besoins de livraison.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Devis gratuit et sans engagement</h3>
                            <p>Estimation transparente et personnalisée selon vos appareils et destination.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2>Obtenez votre devis gratuit</h2>
                        <p>Ne prenez pas de risques inutiles : laissez vos appareils entre des mains expertes avec Envoi Express.</p>
                        <a href="/#contactez-nous" class="cta-button">Demander un devis</a>
                    </div>
                </div>
            </section>
            <!-- FAQ Section -->
            <div class="container">
                <section class="content-section">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Questions fréquentes</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 2rem; font-size: 1.1rem;">
                        Tout ce que vous devez savoir sur le transport d'électroménager
                    </p>
                                        
                    <div class="faq-section">
                        <div class="faq-item">
                            <button class="faq-question">
                                Quels appareils électroménagers transportez-vous ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous transportons tous types d'électroménager : réfrigérateurs, lave-linge, lave-vaisselle, fours, cuisinières, micro-ondes, climatiseurs, etc. Qu'ils soient neufs ou usagés, gros ou petit électroménager.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Proposez-vous l'installation des appareils ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous proposons un service d'installation et de mise en service pour la plupart des appareils électroménagers. Ce service optionnel inclut le raccordement et les premiers tests de fonctionnement.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Comment transportez-vous les appareils lourds ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous utilisons des diables spécialisés, des sangles de portage et des techniques de manutention adaptées. Nos équipes sont formées pour manipuler les appareils lourds en toute sécurité, même dans les escaliers.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Que faire si mon appareil est endommagé pendant le transport ?
                            </button>
                            <div class="faq-answer">
                                <p>Tous nos transports sont couverts par une assurance de base. En cas de dommage, signalez-le immédiatement à la livraison. Notre service client traite rapidement les déclarations de sinistre.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Livrez-vous les appareils dans toutes les pièces ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous livrons vos appareils dans la pièce de destination (cuisine, buanderie, etc.) et pouvons les positionner selon vos indications, dans la limite du raisonnable et de la sécurité.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Quels sont vos créneaux de livraison ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous proposons des créneaux de livraison flexibles : matin, après-midi ou sur rendez-vous selon vos disponibilités. Pour les livraisons urgentes, nous pouvons intervenir le jour même.</p>
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