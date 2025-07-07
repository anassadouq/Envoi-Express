@extends('layouts.app')
@section('content')
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Envoi Express - Livraison Canapé</title>
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
                        <h1><i class="fas fa-couch" style="margin-right: 10px;"></i> Livraison Canapé</h1>
                        <p>
                            Service spécialisé dans la livraison de canapés et salons. Canapé 2 places, d'angle, convertible ou sur mesure - nous livrons votre mobilier de salon avec expertise.
                        </p>
                    </div>
                </div>
            </section>
            <section class="workflow" id="procedure">
                <div class="workflow-container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        Comment se passe la livraison de canapés ?
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 4rem; font-size: 1.1rem;">
                        Un service adapté aux spécificités de votre mobilier de salon
                    </p>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-couch"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>1. Tous types de canapés acceptés</h3>
                            <p>Canapés 2-3 places, d'angle, convertibles, fauteuils, salons complets - nous adaptons notre service à chaque type de mobilier de salon.</p>
                            <span class="workflow-status">✓ Expertise mobilier</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>2. Démontage si nécessaire</h3>
                            <p>Démontage partiel des canapés modulables ou d'angle pour faciliter le passage dans les escaliers et couloirs étroits.</p>
                            <span class="workflow-status">✓ Adaptation sur mesure</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>3. Protection textile et cuir</h3>
                            <p>Housses de protection adaptées aux tissus délicats, cuir et matériaux spéciaux pour préserver l'aspect et la qualité de votre canapé.</p>
                            <span class="workflow-status">✓ Protection sur mesure</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>4. Équipe de portage renforcée</h3>
                            <p>Équipes à 2 ou 3 personnes selon le poids et les dimensions, formées aux techniques de portage de mobilier volumineux et fragile.</p>
                            <span class="workflow-status">✓ Manutention experte</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>5. Positionnement et finitions</h3>
                            <p>Positionnement précis dans votre salon, remontage si nécessaire, retrait des protections et vérification de l'état final de votre canapé.</p>
                            <span class="workflow-status">✓ Service complet</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="features" id="zones">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Types de canapés livrés</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 3rem; font-size: 1.1rem;">
                        Expertise pour tous styles et configurations
                    </p>
                    <div class="features-grid">
                        <div class="feature-card fade-in">
                            <h3>✔ Canapés d'angle</h3>
                            <p>Livraison de canapés d'angle avec démontage/remontage pour passage dans les accès difficiles.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Canapés convertibles</h3>
                            <p>Transport de canapés-lits avec mécanismes délicats et matelas intégrés.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Canapés en cuir</h3>
                            <p>Protection spécialisée pour cuir et matériaux nobles avec housses adaptées.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Salons complets</h3>
                            <p>Livraison d'ensembles complets : canapé, fauteuils, table basse, éléments assortis.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2>Obtenez votre devis gratuit</h2>
                        <p>Confiez la livraison de votre canapé à des spécialistes qui respectent la qualité de votre mobilier de salon.</p>
                        <a href="/#contactez-nous" class="cta-button">Demander un devis</a>
                    </div>
                </div>
            </section>
            <!-- FAQ Section -->
            <div class="container">
                <section class="content-section">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Questions fréquentes</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 2rem; font-size: 1.1rem;">
                        Tout ce que vous devez savoir sur la livraison de canapés
                    </p>
                                        
                    <div class="faq-section">
                        <div class="faq-item">
                            <button class="faq-question">
                                Comment protégez-vous les canapés en cuir ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous utilisons des housses spéciales non-abrasives pour le cuir, évitant tout contact avec des matériaux rugueux. Protection renforcée des coutures et parties saillantes pour préserver l'intégrité du cuir.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Que faire si le canapé ne passe pas par l'escalier ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous évaluons l'accès avant livraison. Solutions possibles : démontage partiel, passage par fenêtre avec matériel de levage, retrait temporaire de portes ou recherche d'accès alternatifs.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Démontez-vous les canapés d'angle ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous pouvons démonter les canapés d'angle modulables pour faciliter le transport et le passage dans les accès difficiles. Remontage soigneux dans votre salon avec vérification des fixations.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Livrez-vous les canapés convertibles ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous avons l'expertise pour transporter les canapés-lits avec leurs mécanismes délicats. Précautions spéciales pour préserver les systèmes de conversion et les matelas intégrés.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Combien de personnes pour livrer un canapé ?
                            </button>
                            <div class="faq-answer">
                                <p>Selon les dimensions : 2 personnes pour les canapés 2-3 places standard, 3 personnes pour les canapés d'angle ou très volumineux. Équipes renforcées pour les étages sans ascenseur.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Proposez-vous un service de reprise de l'ancien canapé ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous proposons l'enlèvement de votre ancien canapé lors de la livraison du nouveau. Service d'évacuation avec recyclage selon les normes environnementales.</p>
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