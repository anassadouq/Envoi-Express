<!DOCTYPE html>
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
    <!-- Header -->
    <header>
        <nav class="container">
            <a href="#" class="logo">
                <div class="logo-icon">EE</div>
                Envoi Express
            </a>
            <ul class="nav-links">
                <li><a href="#comment-ca-marche">Comment ça marche</a></li>
                <li><a href="#tarifs">Tarifs</a></li>
                <li><a href="#support">Support</a></li>
                <li><a href="#connexion">Connexion</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Simple et moins cher.<br>La livraison qu'il vous faut.</h1>
                    <p>Envoyez (presque) tout, partout au Maroc grâce à des trajets déjà prévus. C'est pratique et bon pour la planète. Bienvenue sur Envoi Express !</p>
                </div>
                
                <div class="hero-illustration">
                    <!-- Delivery illustration -->
                    <div style="width: 400px; height: 300px; background: rgba(255,255,255,0.1); border-radius: 20px; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                        <div style="text-align: center; color: #fff;">
                            <div style="font-size: 4rem; margin-bottom: 1rem;">
                                <i class="fas fa-truck-fast"></i>
                            </div>
                            <h3 style="margin-bottom: 0.5rem;">Livraison Rapide</h3>
                            <p style="opacity: 0.8;">Partout au Maroc</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Form Section -->
    <section class="form-section">
        <div class="form-container">
            <div class="form-card">
                <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Demander une livraison</h2>
                <p style="text-align: center; color: #666; margin-bottom: 3rem;">Remplissez le formulaire ci-dessous et recevez des propositions de transporteurs</p>
                
                <div class="form-grid">
                    <div class="form-group">
                        <label for="nom">Nom et Prénom</label>
                        <input type="text" id="nom" placeholder="Mohamed Alami">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="mohamed.alami@email.com">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Téléphone</label>
                        <input type="tel" id="telephone" placeholder="+212 6 12 34 56 78">
                    </div>
                    <div class="form-group">
                        <label for="ville-depart">Ville de départ</label>
                        <input type="text" id="ville-depart" placeholder="Casablanca">
                    </div>
                    <div class="form-group">
                        <label for="ville-arrivee">Ville d'arrivée</label>
                        <input type="text" id="ville-arrivee" placeholder="Rabat">
                    </div>
                    <div class="form-group">
                        <label for="poids">Poids approximatif</label>
                        <input type="text" id="poids" placeholder="5 kg">
                    </div>
                    <div class="form-group full-width">
                        <label for="details">Détails de l'envoi</label>
                        <textarea id="details" rows="4" style="width: 100%; padding: 12px; border: 2px solid #e0e0e0; border-radius: 10px; font-size: 1rem; resize: vertical; font-family: inherit;" placeholder="Décrivez votre colis (dimensions, nature de l'objet, instructions spéciales, etc.)"></textarea>
                    </div>
                    <div class="form-group full-width" style="text-align: center;">
                        <button class="cta-button" style="padding: 15px 40px; font-size: 1.1rem;">Envoyer la demande</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
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
                        <i class="fas fa-shield-halved"></i>
                    </div>
                    <h3>Assurance sérénité</h3>
                    <p>Une assurance pour tous vos envois ! Jusqu'à 5000 DH en option. Vos colis sont protégés du départ à l'arrivée.</p>
                </div>
                <div class="feature-card fade-in">
                    <div class="feature-icon" style="font-size: 2.5rem; color: #ffc107;">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3>Excellente satisfaction</h3>
                    <p>Avis vérifiés : nos clients nous notent en moyenne 4,7 sur 5. Plus de 435 000 avis clients satisfaits.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- How it Works -->
    <section class="how-it-works">
        <div class="container">
            <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Comment ça marche ?</h2>
            <p style="text-align: center; color: #666; margin-bottom: 2rem;">Simple comme bonjour en 3 étapes</p>
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
            <h2 style="text-align: center; font-size: 2.5rem; margin-bottom: 1rem;">+ de 435 000 avis clients 🤩</h2>
            <p style="text-align: center; opacity: 0.9; font-size: 1.1rem;">La confiance de nos clients, notre meilleure garantie. Fiable, sécurisé et économique.</p>
            <div class="reviews-grid">
                <div class="review-card">
                    <div class="review-rating">⭐⭐⭐⭐⭐</div>
                    <div class="review-text">"Au top ! Première expérience sur ce site. Besoin d'un transport d'un gros meuble situé à 800km de chez moi. Vite contacté, transporteur au top, transaction sécurisée… Je recommande ce site sans problème."</div>
                    <div class="review-author">- Alexandra</div>
                </div>
                <div class="review-card">
                    <div class="review-rating">⭐⭐⭐⭐⭐</div>
                    <div class="review-text">"Prix imbattable ! Super service à un prix imbattable. Les avis laissés aux conducteurs permettent d'avoir une totale confiance, et à raison. Je recommande Envoi Express à fond !"</div>
                    <div class="review-author">- Caroline M.</div>
                </div>
                <div class="review-card">
                    <div class="review-rating">⭐⭐⭐⭐⭐</div>
                    <div class="review-text">"Sûr et efficace ! Je ne connaissais pas ce site il y a encore 1 mois. Et depuis, je l'ai utilisé 2 fois. Sans soucis. Tout s'est très bien passé. Très bon rapport service/prix."</div>
                    <div class="review-author">- Nathalie F.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Packaging Section -->
    <section class="packaging">
        <div class="container">
            <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Emballage de Qualité Professionnelle</h2>
            <p style="text-align: center; color: #666; margin-bottom: 3rem; font-size: 1.1rem; max-width: 800px; margin-left: auto; margin-right: auto;">
                Chez Envoi Express, nous savons que la protection de vos colis est primordiale. C'est pourquoi nous proposons des solutions d'emballage adaptées à chaque type d'envoi, garantissant une livraison en parfait état.
            </p>
            
            <div style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); padding: 3rem; border-radius: 20px; margin-bottom: 3rem;">
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem; text-align: center;">
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
                        <strong style="color: #333;"><i class="fas fa-check-circle"></i> 99.9%</strong><br>
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
                <a href="#" class="cta-button">Demander un devis d'emballage</a>
            </div>
        </div>
    </section>


    <!-- Workflow Section -->
    <section class="workflow">
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
                    <span class="stat-number floating">99.99%</span>
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

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Envoi Express</h3>
                    <ul>
                        <li><a href="#">À propos</a></li>
                        <li><a href="#">Comment ça marche</a></li>
                        <li><a href="#">Tarifs</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Envoyer un colis</a></li>
                        <li><a href="#">Devenir transporteur</a></li>
                        <li><a href="#">Assurance</a></li>
                        <li><a href="#">Professionnels</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Support</h3>
                    <ul>
                        <li><a href="#">Centre d'aide</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Signaler un problème</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Légal</h3>
                    <ul>
                        <li><a href="#">Conditions générales</a></li>
                        <li><a href="#">Politique de confidentialité</a></li>
                        <li><a href="#">Cookies</a></li>
                        <li><a href="#">Mentions légales</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Notre Adresse</h3>
                    <div style="color: #ccc; line-height: 1.6;">
                        <div style="display: flex; align-items: center; margin-bottom: 0.5rem;">
                            <span style="margin-right: 0.5rem;">📍</span>
                            <span>123 Avenue Mohammed V<br>Casablanca 20250, Maroc</span>
                        </div>
                        <div style="display: flex; align-items: center; margin-bottom: 0.5rem;">
                            <span style="margin-right: 0.5rem;">📞</span>
                            <span>+212 5 22 12 34 56</span>
                        </div>
                        <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                            <span style="margin-right: 0.5rem;">✉️</span>
                            <span>contact@envoiexpress.ma</span>
                        </div>
                        
                        <!-- Map -->
                        <div style="background: #444; border-radius: 10px; overflow: hidden; height: 150px; position: relative;">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.4567!2d-7.6175!3d33.5731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd4778aa113b%3A0xb06c1d84f310fd3!2sCasablanca%2C%20Morocco!5e0!3m2!1sen!2sus!4v1635959823456!5m2!1sen!2sus"
                                width="100%" 
                                height="150" 
                                style="border:0; border-radius: 10px;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Envoi Express. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Simplified animations and interactions
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('fade-in');
                }
            });
        }, observerOptions);

        // Observe fade-in elements
        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Form submission
        document.querySelector('.form-section button').addEventListener('click', function(e) {
            e.preventDefault();
            const nom = document.getElementById('nom').value;
            const email = document.getElementById('email').value;
            const telephone = document.getElementById('telephone').value;
            const villeDepart = document.getElementById('ville-depart').value;
            const villeArrivee = document.getElementById('ville-arrivee').value;
            const details = document.getElementById('details').value;
            
            if (nom && email && telephone && villeDepart && villeArrivee && details) {
                alert(`Merci ${nom} ! Votre demande de ${villeDepart} vers ${villeArrivee} a été envoyée. Nous vous contactons bientôt au ${telephone}.`);
                // Reset form
                document.getElementById('nom').value = '';
                document.getElementById('email').value = '';
                document.getElementById('telephone').value = '';
                document.getElementById('ville-depart').value = '';
                document.getElementById('ville-arrivee').value = '';
                document.getElementById('details').value = '';
                document.getElementById('poids').value = '';
            } else {
                alert('Veuillez remplir tous les champs du formulaire');
            }
        });

        // Simple hover effects for cards
        document.querySelectorAll('.feature-card, .packaging-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.boxShadow = '0 15px 40px rgba(0,0,0,0.15)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 10px 30px rgba(0,0,0,0.1)';
            });
        });
    </script>
</body>
</html>