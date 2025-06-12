@extends('layouts.app')
@section('content')
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Envoi Express - Transport de Colis entre Particuliers</title>
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
                    content: "\f078"; /* Font Awesome angle-down icon */
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
                        <h1>Déménagement Entreprise</h1>
                        <p>
                            Un transfert professionnel, rapide et sécurisé partout au Maroc, sans perturber votre activité.
                        </p>
                    </div>
                </div>
            </section>

            <section class="workflow" id="procedure">
                <div class="workflow-container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        Comment se déroule un déménagement d’entreprise ?
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 4rem; font-size: 1.1rem;">
                        Une méthode rigoureuse pour une transition fluide et maîtrisée
                    </p>

                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>1. Audit et Planification</h3>
                            <p>Nous analysons vos besoins, organisons une visite technique et établissons un plan de transfert pour limiter toute interruption d'activité.</p>
                            <span class="workflow-status">✓ Étude préalable réalisée</span>
                        </div>
                    </div>

                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-box-open"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>2. Préparation et Emballage</h3>
                            <p>Étiquetage, inventaire, emballage de l'informatique et des dossiers. Chaque élément est identifié pour faciliter la réinstallation.</p>
                            <span class="workflow-status">✓ Matériel prêt</span>
                        </div>
                    </div>

                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-dolly-flatbed"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>3. Transfert sécurisé</h3>
                            <p>Nos équipes assurent le démontage, le transport et la manutention de vos équipements avec soin et efficacité.</p>
                            <span class="workflow-status">✓ En cours de transfert</span>
                        </div>
                    </div>

                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>4. Réinstallation</h3>
                            <p>Nous remettons en place vos postes de travail, reconnectons vos équipements et validons la conformité avec vos équipes.</p>
                            <span class="workflow-status">✓ Installation terminée</span>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Pourquoi choisir Envoi Express -->
            <section class="features" id="pourquoi">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        Pourquoi choisir Envoi Express pour votre déménagement d’entreprise ?
                    </h2>
                    <div class="features-grid">
                        <div class="feature-card fade-in">
                            <div class="feature-icon" style="font-size: 2.5rem; color: #007bff;">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <h3>Audit et Planification</h3>
                            <p>Un plan d’action précis pour limiter l’impact sur votre productivité et assurer une transition sans stress.</p>
                        </div>

                        <div class="feature-card fade-in">
                            <div class="feature-icon" style="font-size: 2.5rem; color: #28a745;">
                                <i class="fas fa-people-carry"></i>
                            </div>
                            <h3>Transfert complet</h3>
                            <p>Du poste de travail aux serveurs, tout est géré par notre équipe expérimentée en milieu professionnel.</p>
                        </div>

                        <div class="feature-card fade-in">
                            <div class="feature-icon" style="font-size: 2.5rem; color: #17a2b8;">
                                <i class="fas fa-clock"></i>
                            </div>
                            <h3>Flexibilité horaire</h3>
                            <p>Intervention de nuit ou week-end pour ne pas bloquer votre activité en semaine.</p>
                        </div>

                        <div class="feature-card fade-in">
                            <div class="feature-icon" style="font-size: 2.5rem; color: #20c997;">
                                <i class="fas fa-warehouse"></i>
                            </div>
                            <h3>Stockage temporaire</h3>
                            <p>Besoin d’espace entre deux locaux ? Nous proposons des solutions de garde-meubles sécurisés.</p>
                        </div>

                        <div class="feature-card fade-in">
                            <div class="feature-icon" style="font-size: 2.5rem; color: #6f42c1;">
                                <i class="fas fa-recycle"></i>
                            </div>
                            <h3>Gestion des déchets</h3>
                            <p>Evacuation de mobilier obsolète et recyclage des équipements dans le respect des normes.</p>
                        </div>

                        <div class="feature-card fade-in">
                            <div class="feature-icon" style="font-size: 2.5rem; color: #fd7e14;">
                                <i class="fas fa-smile-beam"></i>
                            </div>
                            <h3>Satisfaction garantie</h3>
                            <p>Service professionnel, suivi dédié et transparence tout au long du projet.</p>
                        </div>
                    </div>
                </div>
            </section>


            <section class="cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2>Obtenez votre devis gratuit</h2>
                        <p>Confiez votre projet de déménagement d’entreprise à des experts du transfert professionnel. Obtenez un devis personnalisé dès aujourd’hui.</p>
                        <a href="/" class="cta-button">Demander un devis</a>
                    </div>
                </div>
            </section>

            <!-- FAQ Section -->
            <div class="container">
                <section class="content-section">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Questions fréquentes</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 2rem; font-size: 1.1rem;">
                        Trouvez rapidement les réponses à vos questions
                    </p>
                        
                    <div class="faq-section">
                        <div class="faq-item">
                            <button class="faq-question">
                                Combien de temps faut-il pour recevoir des propositions ?
                            </button>
                            <div class="faq-answer">
                                <p>Vous recevez généralement les premières propositions dans l'heure qui suit votre demande. Notre délai maximum garanti est de 1h30. Plus de 90% de nos demandes reçoivent au moins 3 propositions dans ce délai.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question">
                                Comment fonctionne l'assurance pour mes colis ?
                            </button>
                            <div class="faq-answer">
                                <p>Tous les envois sont automatiquement assurés jusqu'à 1000 DH sans frais supplémentaires. Vous pouvez souscrire une assurance étendue jusqu'à 5000 DH pour 2% de la valeur déclarée. L'assurance couvre les dommages, pertes et vols pendant le transport.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question">
                                Puis-je suivre mon colis en temps réel ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui ! Dès que votre colis est pris en charge, vous recevez un lien de suivi vous permettant de voir sa localisation en temps réel. Vous recevez également des notifications automatiques par SMS et email à chaque étape importante.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question">
                                Quels types d'objets puis-je envoyer ?
                            </button>
                            <div class="faq-answer">
                                <p>Vous pouvez envoyer la plupart des objets : meubles, électroménager, colis, documents, etc. Sont interdits : objets dangereux, produits illégaux, denrées périssables sans emballage adapté. Consultez notre liste complète dans nos conditions générales.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question">
                                Comment sont sélectionnés les transporteurs ?
                            </button>
                            <div class="faq-answer">
                                <p>Tous nos transporteurs sont vérifiés : vérification d'identité, contrôle des antécédents, validation du véhicule et de l'assurance. Ils sont notés par la communauté après chaque transport. Seuls les transporteurs avec une note minimale de 4/5 restent actifs.</p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question">
                                Que se passe-t-il si mon colis est endommagé ?
                            </button>
                            <div class="faq-answer">
                                    <p>En cas de dommage, contactez immédiatement notre service client avec photos à l'appui. Notre assurance intervient rapidement : expertise sous 48h et indemnisation sous 7 jours ouvrés une fois le dossier validé.</p>
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