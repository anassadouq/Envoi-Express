@extends('layouts.app')
@section('content')
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Envoi Express - Livraison Buffet</title>
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
                        <h1><i class="fas fa-utensils" style="margin-right: 10px;"></i> Livraison Buffet</h1>
                        <p>
                            Service spécialisé dans le transport de buffets et meubles de salle à manger. Buffets anciens, modernes ou de collection - une manipulation experte pour vos meubles précieux.
                        </p>
                    </div>
                </div>
            </section>
            <section class="workflow" id="procedure">
                <div class="workflow-container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        Comment se passe le transport de buffets ?
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 4rem; font-size: 1.1rem;">
                        Un service adapté aux spécificités de vos meubles de salle à manger
                    </p>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-chair"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>1. Tous types de buffets acceptés</h3>
                            <p>Buffets anciens, modernes, bahuts, vaisseliers, enfilades, meubles de salle à manger - nous adaptons notre service à chaque style et époque.</p>
                            <span class="workflow-status">✓ Expertise mobilier</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>2. Démontage et remontage soignés</h3>
                            <p>Démontage partiel si nécessaire (portes, tiroirs, étagères) avec étiquetage précis et remontage professionnel à destination.</p>
                            <span class="workflow-status">✓ Montage expert</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>3. Protection spécialisée pour meubles</h3>
                            <p>Housses matelassées, film plastique, protections d'angles et calage adapté pour préserver finitions, marqueterie et ornements.</p>
                            <span class="workflow-status">✓ Protection sur mesure</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>4. Manutention par équipe spécialisée</h3>
                            <p>Équipes formées au transport de mobilier ancien et de valeur, techniques de portage adaptées aux meubles lourds et fragiles.</p>
                            <span class="workflow-status">✓ Savoir-faire professionnel</span>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>5. Positionnement et finitions</h3>
                            <p>Positionnement précis dans votre salle à manger, remontage complet et vérification de l'état final de votre buffet.</p>
                            <span class="workflow-status">✓ Service complet</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="features" id="zones">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Nos spécialités</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 3rem; font-size: 1.1rem;">
                        Expertise dans tous types de meubles de salle à manger
                    </p>
                    <div class="features-grid">
                        <div class="feature-card fade-in">
                            <h3>✔ Buffets anciens et de collection</h3>
                            <p>Manipulation experte pour meubles d'époque, marqueterie et finitions délicates.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Meubles contemporains</h3>
                            <p>Transport de buffets modernes, laqués, en verre ou matériaux composites.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Vaisseliers et bahuts</h3>
                            <p>Prise en charge de meubles hauts avec parties vitrées et rangements multiples.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3>✔ Assurance valeur</h3>
                            <p>Couverture adaptée à la valeur de vos meubles, y compris pièces d'antiquité.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2>Obtenez votre devis gratuit</h2>
                        <p>Confiez le transport de votre buffet à des spécialistes du mobilier qui respectent la valeur de vos meubles.</p>
                        <a href="/#contactez-nous" class="cta-button">Demander un devis</a>
                    </div>
                </div>
            </section>
            <!-- FAQ Section -->
            <div class="container">
                <section class="content-section">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Questions fréquentes</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 2rem; font-size: 1.1rem;">
                        Tout ce que vous devez savoir sur le transport de buffets
                    </p>
                                        
                    <div class="faq-section">
                        <div class="faq-item">
                            <button class="faq-question">
                                Comment protégez-vous les buffets anciens ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous utilisons des housses matelassées sur mesure, des protections d'angles spécifiques et des techniques de calage adaptées. Pour les meubles d'époque, nous prenons des précautions supplémentaires pour préserver marqueterie et finitions.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Faut-il vider le buffet avant transport ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, il est indispensable de vider complètement le buffet (vaisselle, linge, objets) avant transport. Nous pouvons vous aider à emballer séparément le contenu si nécessaire.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Démontez-vous les buffets pour le transport ?
                            </button>
                            <div class="faq-answer">
                                <p>Selon la taille et la configuration, nous pouvons démonter partiellement (portes, tiroirs, étagères amovibles) pour faciliter le transport et éviter les dommages. Remontage soigneux à destination.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Transportez-vous les buffets avec parties vitrées ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, nous avons l'expertise pour transporter vaisseliers et buffets vitrés. Les parties en verre sont démontées, emballées séparément avec protection renforcée et remontées avec précaution.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Quelles sont les dimensions maximum acceptées ?
                            </button>
                            <div class="faq-answer">
                                <p>Nous transportons des buffets jusqu'à 3 mètres de longueur. Pour les pièces exceptionnelles ou très volumineuses, nous étudions des solutions sur mesure avec véhicules et équipements adaptés.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-question">
                                Proposez-vous une expertise pour meubles de valeur ?
                            </button>
                            <div class="faq-answer">
                                <p>Oui, pour les meubles d'antiquité ou de grande valeur, nous pouvons faire appel à un expert pour évaluation avant transport et établir un protocole de manipulation spécifique.</p>
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