@extends('layouts.app')
@section('content')
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Envoi Express - Transport Matériel de Bricolage</title>
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
                        <h1><i class="fas fa-tools" style="margin-right: 10px;"></i> Transport Matériel de Bricolage</h1>
                        <p>
                            Vous avez acheté du matériel de bricolage encombrant ou lourd et vous ne savez pas comment le transporter ? Envoi Express vous propose un service rapide, fiable et adapté pour le transport de tous vos équipements de bricolage, que vous soyez un particulier, artisan ou professionnel du bâtiment.                        
                        </p>
                    </div>
                </div>
            </section>
            <section class="workflow" id="procedure">
                <div class="workflow-container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        Que transportons-nous ?
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 4rem; font-size: 1.1rem;">
                        Tous vos équipements de bricolage, du plus petit au plus encombrant
                    </p>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>1. Outils électroportatifs</h3>
                            <p>Perceuses, scies, ponceuses, meuleuses, visseuses et tous vos outils électriques avec leurs accessoires et mallettes de transport.</p>
                            <span class="workflow-status">✓ Outils protégés</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>2. Équipements lourds</h3>
                            <p>Compresseurs, bétonnières, groupes électrogènes, échafaudages, machines-outils et tout équipement professionnel encombrant.</p>
                            <span class="workflow-status">✓ Manutention spécialisée</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-cubes"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>3. Matériaux encombrants</h3>
                            <p>Bois, plaques de plâtre, tuyaux, sacs de ciment, carrelage, isolants et tous matériaux de construction volumineux.</p>
                            <span class="workflow-status">✓ Transport sécurisé</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>4. Mobilier d'atelier</h3>
                            <p>Établis, armoires à outils, rangements d'atelier, machines fixes et tout l'équipement pour aménager votre espace de travail.</p>
                            <span class="workflow-status">✓ Installation possible</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="features" id="zones">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Nos avantages</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 3rem; font-size: 1.1rem;">
                        Un service adapté aux besoins des bricoleurs et professionnels
                    </p>
                    <div class="features-grid">
                        <div class="feature-card fade-in">
                            <h3>✔ Enlèvement rapide</h3>
                            <p>Récupération en magasin, entrepôt ou chez vous selon vos achats et besoins.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Livraison directe</h3>
                            <p>À domicile, sur chantier ou dans votre atelier - là où vous en avez besoin.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Véhicules adaptés</h3>
                            <p>Camions et utilitaires adaptés au poids et volume de votre matériel de bricolage.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Disponibilité flexible</h3>
                            <p>Service en urgence ou sur rendez-vous selon vos contraintes de chantier.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2>Obtenez votre devis gratuit</h2>
                        <p>Envoi Express vous facilite la vie en transportant votre matériel là où vous en avez besoin, sans stress ni efforts.</p>
                        <a href="/#contactez-nous" class="cta-button">Demander un devis</a>
                    </div>
                </div>
            </section>
            <!-- FAQ Section -->
            <div class="container">
                <section class="content-section">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Questions fréquentes</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 2rem; font-size: 1.1rem;">
                        Tout ce que vous devez savoir sur le transport de matériel de bricolage
                    </p>
                                        
                    <div class="faq-section">
                        <div class="faq-item">
                            <button class="faq-question">
                                Quels types de matériel de bricolage transportez-vous ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous transportons tous types d'équipements : outils électroportatifs, machines lourdes (compresseurs, bétonnières), matériaux (bois, plaques, sacs de ciment), mobilier d'atelier et équipements professionnels du bâtiment.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Livrez-vous directement sur les chantiers ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous livrons directement sur vos chantiers, même dans des zones d'accès difficile. Nos chauffeurs sont habitués aux contraintes des chantiers et s'adaptent aux horaires de travail.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Comment transportez-vous les matériaux lourds ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous disposons de véhicules adaptés (camions avec hayon, grues auxiliaires) et d'équipements de manutention (diables, sangles, palans) pour manipuler en toute sécurité vos matériaux lourds et encombrants.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Proposez-vous un service d'urgence ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous comprenons que les chantiers ont parfois des besoins urgents. Nous proposons un service express pour les livraisons urgentes de matériel, même le jour même selon disponibilité.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Travaillez-vous avec les magasins de bricolage ?
                            </button>
                            <div class="faq-answer">
                                <p>Absolument ! Nous récupérons vos achats directement en magasin ou entrepôt et les livrons à destination. Service particulièrement pratique pour les gros achats difficiles à transporter soi-même.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Vos tarifs sont-ils adaptés aux particuliers ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous proposons des tarifs compétitifs aussi bien pour les particuliers bricoleurs que pour les artisans et professionnels du bâtiment. Devis gratuit et personnalisé selon vos besoins.</p>
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