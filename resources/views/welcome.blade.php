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

            @if (session('success'))
                <div class="custom-alert">
                    <span class="icon">✔</span>
                    {{ session('success') }}
                </div>
            @endif

            <!-- Hero Section -->
            <section class="hero">
                <div class="hero-container">
                    <div class="hero-content">
                        <h1>Simple et moins cher. <span class="highlight">La livraison</span> qu'il vous faut</h1>
                        <p>Envoyez (presque) tout, partout au Maroc grâce à des trajets déjà prévus. C'est pratique et bon pour la planète. Bienvenue sur Envoi Express !</p>
                        
                        <div class="cta-buttons">
                            <a href="/" class="btn btn-primary">Commencer</a>
                            <a href="/" class="btn btn-secondary">En savoir plus</a>
                        </div>
                    </div>

                    <div class="hero-image">
                        <img src="images/hero.jpg">
                    </div>
                </div>
            </section>

            <!-- Form Section -->
            <section class="form-section" id="contactez-nous">
                <div class="form-container">
                    <div class="form-card">
                        <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Demander une livraison</h2>
                        <p style="text-align: center; color: #666; margin-bottom: 3rem;">Remplissez le formulaire ci-dessous et recevez des propositions de transporteurs</p>
                            
                        <form method="POST" action="{{ route('demande.store') }}">
                            @csrf
                            <div class="form-grid">
                                <div class="form-group">
                                    <label for="nom">Nom et Prénom : *</label>
                                    <input type="text" name="nom" placeholder="Veuillez entrer votre nom et prénom" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email : *</label>
                                    <input type="email" name="email" placeholder="exemple@gmail.com" required>
                                </div>
                                <div class="form-group">
                                    <label for="telephone">Téléphone : *</label>
                                    <input type="tel" name="tel" placeholder="+212 111 111 111" required>
                                </div>
                                <div class="form-group">
                                    <label for="ville-depart">Ville de départ : *</label>
                                    <input type="text" name="ville_depart" placeholder="Veuillez entrer la ville de départ" required>
                                </div>
                                <div class="form-group">
                                    <label for="ville-arrivee">Ville d'arrivée : *</label>
                                    <input type="text" name="ville_arrivee" placeholder="Veuillez entrer la ville d'arrivée" required>
                                </div>
                                <div class="form-group">
                                    <label for="poids">Poids approximatif : *</label>
                                    <input type="text" name="poids" placeholder="Veuillez entrer le poids" required>
                                </div>
                                <div class="form-group full-width">
                                    <label for="details">Détails de l'envoi</label>
                                    <textarea name="detail" rows="4" style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 10px; font-size: 1rem; resize: vertical; font-family: inherit;" placeholder="Décrivez votre colis (dimensions, nature de l'objet, instructions spéciales, etc.)"></textarea>
                                </div>

                                <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>

                                @if ($errors->has('g-recaptcha-response'))
                                    <span style="color: red; font-size: 0.9rem;">{{ $errors->first('g-recaptcha-response') }}</span>
                                @endif

                                <div class="form-group full-width" style="text-align: center;">
                                    <button class="cta-button" style="padding: 15px 40px; font-size: 1.1rem;">Envoyer la demande</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <!-- Features Section -->
            <section class="features" id="pourquoi">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Pourquoi choisir Envoi Express ?</h2>
                    <div class="features-grid">
                        <div class="feature-card fade-in">
                            <div class="feature-icon" style="font-size: 2.5rem; color: #007bff;">
                                <i class="fas fa-hand-holding-dollar"></i>
                            </div>
                            <h3>Livraison économique</h3>
                            <p>Jusqu'à 80% moins cher pour les gros colis, meubles et objets. Des prix imbattables grâce à notre réseau de transporteurs au Maroc.</p>
                        </div>

                        <div class="feature-card fade-in">
                            <div class="feature-icon" style="font-size: 2.5rem; color: #28a745;">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h3>Sécurisé</h3>
                            <p>Une assurance pour tous vos envois ! Jusqu'à 5000 DH en option. Vos colis sont protégés du départ à l'arrivée.</p>
                        </div>

                        <div class="feature-card fade-in">
                            <div class="feature-icon" style="font-size: 2.5rem; color: #17a2b8;">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <h3>Rapide</h3>
                            <p>Expédition en quelques heures grâce à un réseau de trajets existants. Moins d’attente, plus d’efficacité.</p>
                        </div>

                        <div class="feature-card fade-in">
                            <div class="feature-icon" style="font-size: 2.5rem; color: #20c997;">
                                <i class="fas fa-leaf"></i>
                            </div>
                            <h3>Écologique</h3>
                            <p>Chaque colis optimise un trajet déjà existant. Moins d’émissions, plus de respect de l’environnement.</p>
                        </div>

                        <div class="feature-card fade-in">
                            <div class="feature-icon" style="font-size: 2.5rem; color: #6f42c1;">
                                <i class="fas fa-magic"></i>
                            </div>
                            <h3>Simple</h3>
                            <p>Plateforme intuitive. Envoi en 3 étapes. Pas besoin d’être un pro de la logistique.</p>
                        </div>

                        <div class="feature-card fade-in">
                            <div class="feature-icon" style="font-size: 2.5rem; color: #fd7e14;">
                                <i class="fas fa-flag"></i>
                            </div>
                            <h3>100% Marocain</h3>
                            <p>Conçu, développé et géré au Maroc. Une solution locale pour des besoins locaux.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- How it Works -->
            <section class="how-it-works">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Comment ça marche ?</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 2rem;">Nous transmettons votre demande à notre communauté : des voyageurs et des transporteurs dont le trajet coïncide avec votre livraison</p>
                    <div class="steps">
                        <div class="step fade-in">
                            <div class="step-number">1</div>
                            <h3>Créez une demande de transport</h3>
                            <p>Renseignez les caractéristiques du colis à envoyer (description, dimensions et poids). Ajoutez une photo et validez le prix.</p>
                        </div>
                        <div class="step fade-in">
                            <div class="step-number">2</div>
                            <h3>Recevez des propositions</h3>
                            <p>Nous transmettons votre demande à notre communauté : des voyageurs et des transporteurs dont le trajet coïncide avec votre livraison.</p>
                        </div>
                        <div class="step fade-in">
                            <div class="step-number">3</div>
                            <h3>Validez votre réservation</h3>
                            <p>Payez en ligne et bénéficiez de l'assurance Envoi Express. Le paiement est versé au transporteur une fois le colis livré.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Reviews Section -->
            <section class="reviews">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 1rem;">Avis clients Google</h2>
                    <p style="text-align: center; opacity: 0.9; font-size: 1.1rem;">
                        Nos avis vérifiés Google Business Profile - La confiance de nos clients, notre meilleure garantie
                    </p>

                    <div class="reviews-grid">
                        @forelse($reviews as $review)
                            <div class="review-card">
                                <div class="review-rating">
                                    {{ str_repeat('⭐', round($review['rating'])) }}
                                </div>
                                <div class="review-text">
                                    "{{ $review['text'] }}"
                                </div>
                                <div class="review-author">
                                    - {{ $review['author_name'] }}
                                </div>
                            </div>
                        @empty
                            <p style="text-align:center;">Aucun avis disponible pour le moment.</p>
                        @endforelse
                    </div>

                    <div style="text-align: center; margin-top: 3rem;">
                        <a href="https://www.google.com/maps/place/?q=place_id:ChIJlVKASpltpw0RjZ1SeTvW1Gc" 
                            target="_blank" 
                            style="display: inline-flex; align-items: center; background: white; color: #333; padding: 12px 24px; border-radius: 25px; text-decoration: none; font-weight: 600; transition: transform 0.3s;">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24'%3E%3Cpath fill='%234285f4' d='M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z'/%3E%3Cpath fill='%2334a853' d='M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z'/%3E%3Cpath fill='%23fbbc05' d='M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z'/%3E%3Cpath fill='%23ea4335' d='M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z'/%3E%3C/svg%3E" 
                                style="margin-right: 8px;" alt="Google">
                            Voir tous nos avis Google
                        </a>
                    </div>
                </div>
            </section>


            <!-- Packaging Section -->
            <section class="packaging" id="service">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Emballage de Qualité Professionnelle</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 3rem; font-size: 1.1rem; max-width: 800px; margin-left: auto; margin-right: auto;">
                        Chez Envoi Express, nous savons que la protection de vos colis est primordiale. C'est pourquoi nous proposons des solutions d'emballage adaptées à chaque type d'envoi, garantissant une livraison en parfait état.
                    </p>
                    
                    <div style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); padding: 3rem; border-radius: 20px; margin-bottom: 3rem; overflow-x: auto;">
                        <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem; text-align: center; min-width: 1000px;">
                            <div>
                                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #2E4BC6, #4A6CF7); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem; color: white;">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <h3 style="color: #333; margin-bottom: 0.5rem;">Sécurité Maximale</h3>
                                <p style="color: #666;">Matériaux de qualité supérieure pour une protection optimale</p>
                            </div>
                            <div>
                                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #2E4BC6, #4A6CF7); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem; color: white;">
                                    <i class="fas fa-bolt"></i>
                                </div>
                                <h3 style="color: #333; margin-bottom: 0.5rem;">Service Rapide</h3>
                                <p style="color: #666;">Emballage professionnel en moins de 24h</p>
                            </div>
                            <div>
                                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #2E4BC6, #4A6CF7); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem; color: white;">
                                    <i class="fas fa-cogs"></i>
                                </div>
                                <h3 style="color: #333; margin-bottom: 0.5rem;">Sur Mesure</h3>
                                <p style="color: #666;">Solutions personnalisées selon vos besoins</p>
                            </div>
                            <div>
                                <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #2E4BC6, #4A6CF7); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; font-size: 2rem; color: white;">
                                    <i class="fas fa-tools"></i>
                                </div>
                                <h3 style="color: #333; margin-bottom: 0.5rem;">Démontage et Montage</h3>
                                <p style="color: #666;">Service complet de démontage et remontage de vos meubles</p>
                            </div>
                        </div>
                    </div>



                    <div class="packaging-grid">
                        <div class="packaging-card fade-in">
                            <div class="packaging-icon"><i class="fas fa-box-open"></i></div>
                            <h3>Emballage Renforcé</h3>
                            <p>Protection maximale pour vos objets fragiles et précieux. Idéal pour l'électronique, la vaisselle et les articles délicats.</p>
                            <ul class="packaging-features">
                                <li>Cartons double épaisseur</li>
                                <li>Mousse de protection haute densité</li>
                                <li>Calage sur mesure</li>
                                <li>Film plastique étanche</li>
                                <li>Étiquettes "FRAGILE" spécialisées</li>
                            </ul>
                        </div>
                        <div class="packaging-card fade-in">
                            <div class="packaging-icon"><i class="fas fa-couch"></i></div>
                            <h3>Emballage Meuble</h3>
                            <p>Solution spécialisée pour le transport de mobilier. Nos experts s'occupent de tout, du démontage à la protection complète.</p>
                            <ul class="packaging-features">
                                <li>Sangles de transport professionnelles</li>
                                <li>Protection d'angles renforcée</li>
                                <li>Film plastique épais résistant</li>
                                <li>Couvertures matelassées</li>
                                <li>Service démontage/remontage</li>
                            </ul>
                        </div>
                        <div class="packaging-card fade-in">
                            <div class="packaging-icon"><i class="fas fa-gem"></i></div>
                            <h3>Emballage Premium</h3>
                            <p>Le summum de la protection pour vos objets de grande valeur. Service haut de gamme avec suivi renforcé.</p>
                            <ul class="packaging-features">
                                <li>Caisse en bois sur mesure</li>
                                <li>Mousse découpée au laser</li>
                                <li>Assurance valeur étendue</li>
                                <li>Suivi GPS en temps réel</li>
                                <li>Livraison prioritaire garantie</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="pourquoi" style="text-align: center; margin-top: 4rem; padding: 2rem; background: white; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                        <h3 style="color: #2E4BC6; margin-bottom: 1rem;"><i class="fas fa-bullseye"></i> Pourquoi choisir notre service d'emballage ?</h3>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; margin: 2rem 0;">
                            <div>
                                <strong style="color: #333;"><i class="fas fa-check-circle"></i> 99.8%</strong><br>
                                <span style="color: #666;">de colis livrés intacts</span>
                            </div>
                            <div>
                                <strong style="color: #333;"><i class="fas fa-clock"></i> 24h</strong><br>
                                <span style="color: #666;">délai maximum d'emballage</span>
                            </div>
                            <div>
                                <strong style="color: #333;"><i class="fas fa-award"></i> +15 ans</strong><br>
                                <span style="color: #666;">d'expertise logistique</span>
                            </div>
                            <div>
                                <strong style="color: #333;"><i class="fas fa-leaf"></i> Éco-responsable</strong><br>
                                <span style="color: #666;">matériaux recyclables</span>
                            </div>
                        </div>
                        <p style="color: #666; margin-bottom: 1.5rem; font-style: italic;">"Votre colis, notre priorité. Chaque emballage est réalisé avec le plus grand soin par nos experts."</p>
                        <a href="#contactez-nous" class="cta-button">Demander un devis d'emballage</a>
                    </div>
                </div>
            </section>


            <!-- Workflow Section -->
            <section class="workflow" id="procedure">
                <div class="workflow-container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Suivi de votre colis</h2>
                    <p style="text-align: center; color: #666; margin-bottom: 4rem; font-size: 1.1rem;">
                        Découvrez le parcours complet de votre colis, de la prise en charge à la livraison
                    </p>

                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>1. Demande et Réservation</h3>
                            <p>Vous créez votre demande d'envoi en ligne en précisant les détails de votre colis (dimensions, poids, destinations). Après validation, vous recevez des propositions de transporteurs disponibles.</p>
                            <span class="workflow-status">✓ Demande créée</span>
                        </div>
                    </div>

                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-box"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>2. Emballage et Préparation</h3>
                            <p>Votre colis est soigneusement emballé selon nos standards de qualité. Nos experts s'assurent que votre envoi est parfaitement protégé pour le transport. Étiquetage et documentation complétés.</p>
                            <span class="workflow-status">✓ Colis préparé</span>
                        </div>
                    </div>

                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>3. Prise en Charge</h3>
                            <p>Le transporteur récupère votre colis au point de collecte convenu. Vous recevez une notification de confirmation avec les détails du transporteur et le numéro de suivi pour tracer votre envoi.</p>
                            <span class="workflow-status">✓ En transit</span>
                        </div>
                    </div>

                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-route"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>4. Transport et Suivi</h3>
                            <p>Votre colis voyage vers sa destination. Vous pouvez suivre sa progression en temps réel grâce à notre système de tracking. Notifications automatiques à chaque étape importante du parcours.</p>
                            <span class="workflow-status">✓ Suivi actif</span>
                        </div>
                    </div>

                    <div class="workflow-step fade-in">
                        <div class="workflow-icon" style="font-size: 2rem; color: #2E4BC6;">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="workflow-content">
                            <h3>5. Livraison Confirmée</h3>
                            <p>Votre colis arrive à destination et est remis au destinataire. Confirmation de livraison avec signature électronique ou photo. Paiement automatiquement libéré au transporteur.</p>
                            <span class="workflow-status">✓ Livré avec succès</span>
                        </div>
                    </div>
                </div>
            </section>


            <!-- Stats Section -->
            <section class="stats">
                <div class="container">
                    <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Ayez le réflexe écologique pour vos livraisons</h2>
                    <div class="stats-grid">
                        <div class="stat-item">
                            <span class="stat-number floating">10,332,204</span>
                            <div class="stat-label">kg de CO2 évité !</div>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number floating">99.8%</span>
                            <div class="stat-label">de colis livrés sans pépin</div>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number floating">25kg</span>
                            <div class="stat-label">de CO2eq économisés par livraison</div>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number floating">1h30</span>
                            <div class="stat-label">de délai de réponse max</div>
                        </div>
                    </div>
                </div>
            </section>

            <script src="{{ asset('js/script.js') }}"></script>

            <!-- recaptcha -->
            <script src="https://www.google.com/recaptcha/api.js" async defer></script>

            <!-- google analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-DHJG32NEZ3"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', '{{ env('GOOGLE_ANALYTICS_ID') }}');            
            </script>
        </body>
    </html>
@endsection