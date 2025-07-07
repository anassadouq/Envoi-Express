@extends('layouts.app')
@section('content')
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Envoi Express - Déménagement Agadir</title>
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
            /* Eco Section */
            .eco-section {
                background: #f8f9fa;
                padding: 60px 0;
            }
            .eco-content {
                max-width: 800px;
                margin: 0 auto;
                text-align: center;
            }
            .eco-features {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
                gap: 2rem;
                margin-top: 2rem;
            }
            .eco-feature {
                background: white;
                padding: 1.5rem;
                border-radius: 10px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
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
                    <h1>Déménagement à Agadir</h1>
                    <p>
                        Déménagement et transport express dans tout le Souss-Massa
                    </p>
                    <p style="font-size: 1.1rem; margin-top: 1rem;">
                        Vous êtes à Agadir, Inezgane, Dcheira, Aït Melloul ou même jusqu'à Tiznit ou Taroudant ? Envoi Express vous propose un service de déménagement et de transport sur mesure, rapide, fiable et économique.
                    </p>
                </div>
            </div>
        </section>
        
        <section class="workflow" id="procedure">
            <div class="workflow-container">
                <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                    Nos services à Agadir et région
                </h2>
                <p style="text-align: center; color: #666; margin-bottom: 4rem; font-size: 1.1rem;">
                    Solutions complètes pour particuliers et entreprises
                </p>
                <div class="workflow-step fade-in">
                    <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                        <i class="fas fa-home"></i>
                    </div>
                    <div class="workflow-content">
                        <h3>Déménagement local ou national</h3>
                        <p>Appartement, villa, bureaux - nous gérons tous types de déménagements dans la région ou vers toutes les villes du Maroc.</p>
                        <span class="workflow-status">✓ Couverture complète</span>
                    </div>
                </div>
                <div class="workflow-step fade-in">
                    <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                        <i class="fas fa-couch"></i>
                    </div>
                    <div class="workflow-content">
                        <h3>Transport de meubles et électroménagers</h3>
                        <p>Objets volumineux ou fragiles transportés avec soin et expertise par nos équipes spécialisées.</p>
                        <span class="workflow-status">✓ Manipulation experte</span>
                    </div>
                </div>
                <div class="workflow-step fade-in">
                    <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <div class="workflow-content">
                        <h3>Livraison express avec valeur déclarée</h3>
                        <p>Service de livraison rapide avec valeur déclarée pour vos envois urgents dans la région.</p>
                        <span class="workflow-status">✓ Rapidité garantie</span>
                    </div>
                </div>
                <div class="workflow-step fade-in">
                    <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                        <i class="fas fa-tools"></i>
                    </div>
                    <div class="workflow-content">
                        <h3>Emballage, démontage et remontage professionnel</h3>
                        <p>Service complet d'emballage, démontage et remontage professionnel de vos meubles.</p>
                        <span class="workflow-status">✓ Service intégral</span>
                    </div>
                </div>
                <div class="workflow-step fade-in">
                    <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                        <i class="fas fa-warehouse"></i>
                    </div>
                    <div class="workflow-content">
                        <h3>Garde-meubles sécurisé à prix compétitif</h3>
                        <p>Solutions de stockage à prix compétitif pour particuliers et entreprises dans la région d'Agadir.</p>
                        <span class="workflow-status">✓ Stockage économique</span>
                    </div>
                </div>
                <div class="workflow-step fade-in">
                    <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <div class="workflow-content">
                        <h3>Solutions sur mesure pour particuliers & entreprises</h3>
                        <p>Services personnalisés adaptés à vos besoins spécifiques et contraintes particulières.</p>
                        <span class="workflow-status">✓ Personnalisation</span>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="features" id="zones">
            <div class="container">
                <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                    Pourquoi choisir Envoi Express à Agadir ?
                </h2>
                <p style="text-align: center; color: #666; margin-bottom: 3rem; font-size: 1.1rem;">
                    Votre partenaire transport au cœur du Souss
                </p>
                <div class="features-grid">
                    <div class="feature-card fade-in">
                        <h3><i class="fas fa-users-cog" style="color:#007bff; margin-right: 8px;"></i> Une équipe locale experte</h3>
                        <p>Connaissant parfaitement la région, même en zones rurales ou côtières.</p>
                    </div>
                    <div class="feature-card fade-in">
                        <h3><i class="fas fa-truck-moving" style="color:#28a745; margin-right: 8px;"></i> Une intervention rapide</h3>
                        <p>Service adapté aux professionnels du tourisme, hôtellerie, commerces et administrations.</p>
                    </div>
                    <div class="feature-card fade-in">
                        <h3><i class="fas fa-headset" style="color:#ffc107; margin-right: 8px;"></i> Un service client réactif</h3>
                        <p>Disponible tous les jours avec plus de 170 avis 5 étoiles pour la qualité de nos prestations.</p>
                    </div>
                    <div class="feature-card fade-in">
                        <h3><i class="fas fa-hand-holding-usd" style="color:#dc3545; margin-right: 8px;"></i> Des tarifs compétitifs</h3>
                        <p>Avec devis gratuit sous 15 minutes, pas de frais cachés.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Eco Section -->
        <section class="eco-section">
            <div class="container">
                <div class="eco-content">
                    <h2 style="font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Déménager malin, livrer mieux</h2>
                    <p style="color: #666; font-size: 1.1rem; margin-bottom: 2rem;">
                        Agadir est une ville tournée vers l'avenir. Chez Envoi Express, nous adoptons une logistique optimisée et durable :
                    </p>
                    <div class="eco-features">
                        <div class="eco-feature">
                            <i class="fas fa-route" style="font-size: 2rem; color: #2E4BC6; margin-bottom: 1rem;"></i>
                            <h4>✓ Réduction des trajets à vide</h4>
                        </div>
                        <div class="eco-feature">
                            <i class="fas fa-leaf" style="font-size: 2rem; color: #2E4BC6; margin-bottom: 1rem;"></i>
                            <h4>✓ Respect de l'environnement</h4>
                        </div>
                        <div class="eco-feature">
                            <i class="fas fa-clock" style="font-size: 2rem; color: #2E4BC6; margin-bottom: 1rem;"></i>
                            <h4>✓ Optimisation des délais</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-section">
            <div class="container">
                <div class="cta-content">
                    <h2>Obtenez votre devis express pour Rabat</h2>
                    <p>Rabat, une ville historique et moderne — profitez de notre solution pour envoyer tout type d'objet en toute simplicité.</p>
                    <a href="/#contactez-nous" class="cta-button">Demander un devis</a>
                </div>
            </div>
        </section>
        
        <!-- FAQ Section -->
        <div class="container">
            <section class="content-section">
                <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Questions fréquentes</h2>
                <p style="text-align: center; color: #666; margin-bottom: 2rem; font-size: 1.1rem;">
                    Tout ce que vous devez savoir sur nos services à Agadir
                </p>
                                    
                <div class="faq-section">
                    <div class="faq-item">
                        <button class="faq-question">
                            Dans quelles villes de la région intervenez-vous ?
                        </button>
                        <div class="faq-answer">
                            <p>Nous intervenons à Agadir, Inezgane, Dcheira, Aït Melloul, et nous étendons jusqu'à Tiznit, Taroudant et toute la région du Souss-Massa. Devis gratuit pour toute destination.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            Proposez-vous des services pour les professionnels du tourisme ?
                        </button>
                        <div class="faq-answer">
                            <p>Oui, nous avons une expertise particulière pour les hôtels, riads, restaurants et commerces touristiques. Solutions adaptées aux contraintes saisonnières et aux besoins spécifiques du secteur.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            Comment gérez-vous les livraisons en zones rurales ?
                        </button>
                        <div class="faq-answer">
                            <p>Notre équipe locale connaît parfaitement les zones rurales et côtières de la région. Nous adaptons nos véhicules et nos horaires pour atteindre toutes les destinations, même les plus isolées.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            Quels sont vos tarifs pour la région d'Agadir ?
                        </button>
                        <div class="faq-answer">
                            <p>Nos tarifs sont adaptés à la région avec des prix compétitifs. Devis gratuit en ligne ou par téléphone avec réponse ultra-rapide. Tarifs préférentiels pour les professionnels locaux.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            Livrez-vous depuis Agadir vers d'autres villes du Maroc ?
                        </button>
                        <div class="faq-answer">
                            <p>Oui, nous livrons depuis Agadir vers Marrakech, Casablanca, Rabat, Laâyoune et partout au Maroc. Service de déménagement national avec suivi complet.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <button class="faq-question">
                            Proposez-vous un service de stockage à Agadir ?
                        </button>
                        <div class="faq-answer">
                            <p>Oui, nous disposons d'entrepôts sécurisés à Agadir pour le garde-meubles temporaire ou longue durée. Idéal pour les déménagements échelonnés ou les besoins de stockage saisonnier.</p>
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