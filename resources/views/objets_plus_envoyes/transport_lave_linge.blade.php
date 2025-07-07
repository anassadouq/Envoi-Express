@extends('layouts.app')
@section('content')
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Envoi Express - Transport Lave-Linge</title>
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
                        <h1><i class="fas fa-tshirt" style="margin-right: 10px;"></i> Transport Lave-Linge</h1>
                        <p>
                            Service expert pour le transport de machines à laver. Lave-linge hublot, top ou professionnel - nous assurons un transport sécurisé et une installation soignée.
                        </p>
                    </div>
                </div>
            </section>
            <section class="workflow" id="procedure">
                <div class="workflow-container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        Comment se passe le transport de lave-linge ?
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 4rem; font-size: 1.1rem;">
                        Un service complet adapté aux spécificités des machines à laver
                    </p>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>1. Préparation et sécurisation</h3>
                            <p>Vidange complète, fixation du tambour avec vis de transport, débranchement sécurisé et préparation de votre lave-linge pour le transport.</p>
                            <span class="workflow-status">✓ Préparation technique</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-dolly"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>2. Manutention spécialisée</h3>
                            <p>Manipulation avec diables renforcés, sangles de portage et techniques adaptées au poids important des machines à laver (jusqu'à 80kg).</p>
                            <span class="workflow-status">✓ Équipement adapté</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>3. Transport sécurisé en position verticale</h3>
                            <p>Transport obligatoirement en position debout avec arrimage spécialisé pour préserver les composants internes et éviter les dommages.</p>
                            <span class="workflow-status">✓ Position optimale</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>4. Livraison et positionnement</h3>
                            <p>Livraison à l'étage si nécessaire, positionnement dans votre buanderie ou salle de bain, et déballage soigneux de votre machine.</p>
                            <span class="workflow-status">✓ Mise en place</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>5. Installation et mise en service</h3>
                            <p>Raccordement eau froide/chaude, évacuation, branchement électrique, retrait des vis de transport et premier test de fonctionnement.</p>
                            <span class="workflow-status">✓ Installation complète</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="features" id="zones">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Types de lave-linge transportés</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 3rem; font-size: 1.1rem;">
                        Expertise pour tous modèles et capacités
                    </p>
                    <div class="features-grid">
                        <div class="feature-card fade-in">
                            <h3>✔ Lave-linge hublot</h3>
                            <p>Transport de machines à chargement frontal avec protection spéciale du hublot et des joints.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Lave-linge top</h3>
                            <p>Manutention adaptée aux machines à chargement par le dessus avec sécurisation du couvercle.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Lave-linge séchant</h3>
                            <p>Transport de machines combinées avec précautions supplémentaires pour les composants de séchage.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Machines professionnelles</h3>
                            <p>Transport de lave-linge industriels et semi-professionnels pour collectivités et entreprises.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2>Obtenez votre devis gratuit</h2>
                        <p>Confiez le transport de votre lave-linge à des professionnels qui maîtrisent les spécificités techniques de ces appareils.</p>
                        <a href="/#contactez-nous" class="cta-button">Demander un devis</a>
                    </div>
                </div>
            </section>
            <!-- FAQ Section -->
            <div class="container">
                <section class="content-section">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Questions fréquentes</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 2rem; font-size: 1.1rem;">
                        Tout ce que vous devez savoir sur le transport de lave-linge
                    </p>
                                        
                    <div class="faq-section">
                        <div class="faq-item">
                            <button class="faq-question">
                                Faut-il préparer le lave-linge avant transport ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, il faut vidanger complètement la machine et fixer le tambour avec les vis de transport. Nous pouvons nous charger de cette préparation si vous ne disposez pas des vis ou de l'expertise technique.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Pourquoi transporter le lave-linge en position verticale ?
                            </button>
                            <div class="faq-answer">
                                <p>Le transport en position debout est obligatoire pour préserver les composants internes (tambour, amortisseurs, pompe). Un transport couché peut endommager définitivement la machine.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Proposez-vous l'installation complète ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous proposons l'installation complète : raccordements eau et électricité, mise à niveau, retrait des vis de transport et test de fonctionnement. Installation par techniciens qualifiés.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Que faire si l'ancien lave-linge doit être évacué ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous proposons un service de reprise : débranchement de l'ancien lave-linge, évacuation et recyclage selon les normes environnementales lors de la livraison du nouveau.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Comment gérez-vous les accès difficiles ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous évaluons l'accès avant livraison. Pour les étages sans ascenseur ou passages étroits, nous utilisons des techniques spéciales et du matériel adapté (sangles, poulies, démontage de portes si nécessaire).</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Vos équipes sont-elles assurées pour l'installation ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nos équipes sont assurées pour le transport et l'installation. Nous disposons d'une assurance responsabilité civile professionnelle couvrant les dommages éventuels pendant l'intervention.</p>
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