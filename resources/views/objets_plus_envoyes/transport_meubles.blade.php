@extends('layouts.app')
@section('content')
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Envoi Express - Transport de Meubles</title>
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

            <section class="heroo">
                <div class="container">
                    <div class="heroo-content">
                        <h1><i class="fas fa-couch" style="margin-right: 10px; color: white;"></i>Transport de Meubles</h1>
                        <p>Vous avez besoin de transporter un meuble encombrant, fragile ou précieux ? Faites confiance à Envoi Express, votre spécialiste du transport de meubles en toute sécurité.</p>
                    </div>
                </div>
            </section>

            <section class="workflow" id="procedure">
                <div class="workflow-container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        <i class="fas fa-route"></i> Comment se passe le transport ?
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 4rem; font-size: 1.1rem;">
                        Un service professionnel, sécurisé et adapté à vos meubles
                    </p>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon"><i class="fas fa-couch"></i></div>
                        <div class="workflow-content">
                            <h3>Transport de meubles neufs ou d’occasion</h3>
                            <p>Nous prenons en charge tous types de meubles : canapés, lits, armoires, tables, buffets anciens, etc.</p>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon"><i class="fas fa-truck"></i></div>
                        <div class="workflow-content">
                            <h3>Livraison à domicile ou en entreprise</h3>
                            <p>Enlèvement et livraison où vous le souhaitez, à domicile ou sur votre lieu de travail.</p>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon"><i class="fas fa-box-open"></i></div>
                        <div class="workflow-content">
                            <h3>Protection et emballage adaptés</h3>
                            <p>Utilisation de housses, films plastiques, sangles et camions capitonnés.</p>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon"><i class="fas fa-people-carry"></i></div>
                        <div class="workflow-content">
                            <h3>Manutention professionnelle</h3>
                            <p>Manipulation sécurisée de vos meubles par notre équipe formée et expérimentée.</p>
                        </div>
                    </div>
                    <div class="workflow-step fade-in">
                        <div class="workflow-icon"><i class="fas fa-map"></i></div>
                        <div class="workflow-content">
                            <h3>Déplacement local, régional ou national</h3>
                            <p>Transport assuré à l’échelle locale, régionale ou nationale, partout au Maroc.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="features" id="zones">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        <i class="fas fa-check-circle"></i> Pourquoi choisir Envoi Express ?
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 3rem; font-size: 1.1rem;">
                        Nos garanties pour un transport de meubles réussi
                    </p>
                    <div class="features-grid">
                        <div class="feature-card fade-in">
                            <h3><i class="fas fa-bolt"></i> Intervention rapide</h3>
                            <p>Service disponible rapidement selon vos besoins et contraintes.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3><i class="fas fa-tools"></i> Matériel adapté</h3>
                            <p>Camion capitonné, sangles, housses, diable – tout l’équipement nécessaire.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3><i class="fas fa-shield-alt"></i> Manipulation sécurisée</h3>
                            <p>Techniques professionnelles pour éviter tout dommage durant le transport.</p>
                        </div>
                        <div class="feature-card fade-in">
                            <h3><i class="fas fa-wrench"></i> Service démontage/remontage</h3>
                            <p>Option de démontage et remontage de meubles selon vos besoins.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="cta-section">
                <div class="container">
                    <div class="cta-content">
                        <h2><i class="fas fa-file-signature"></i> Obtenez votre devis gratuit</h2>
                        <p>Confiez le transport de vos meubles à des professionnels. Vos biens voyagent en toute confiance avec Envoi Express.</p>
                        <a href="/#contactez-nous" class="cta-button">Demander un devis</a>
                    </div>
                </div>
            </section>

            <section class="content-section">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">
                        <i class="fas fa-question-circle"></i> Questions fréquentes
                    </h2>
                    <p style="text-align: center; color: #666; margin-bottom: 2rem; font-size: 1.1rem;">
                        Tout ce que vous devez savoir sur le transport de meubles
                    </p>
                    <div class="faq-section">
                        @php
                            $faqs = [
                                ['title' => 'Quels types de meubles pouvez-vous transporter ?', 'answer' => 'Nous transportons tous types de meubles : canapés, lits, armoires, buffets, électroménager, etc.'],
                                ['title' => 'Proposez-vous le démontage et remontage ?', 'answer' => 'Oui, service disponible sur demande selon la complexité du meuble.'],
                                ['title' => 'Comment protégez-vous les meubles ?', 'answer' => 'Protection avec housses, films, sangles, et camions capitonnés.'],
                                ['title' => 'Livrez-vous à l\'étage ?', 'answer' => 'Oui, avec ou sans ascenseur. Tarification selon l’étage.'],
                                ['title' => 'Puis-je assurer mes meubles ?', 'answer' => 'Oui, assurance optionnelle selon la valeur déclarée.'],
                                ['title' => 'Quels sont vos délais de livraison ?', 'answer' => 'Local : 24h. Régional : 1–2 jours. National : 2–4 jours.']
                            ];
                        @endphp

                        @foreach ($faqs as $faq)
                            <div class="faq-item">
                                <button class="faq-question"> {{ $faq['title'] }}</button>
                                <div class="faq-answer"><p>{{ $faq['answer'] }}</p></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

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