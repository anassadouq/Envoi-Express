@extends('layouts.app')
@section('content')

    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Nous contacter - Envoi Express</title>
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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

                /* Main Content */
                .main-content {
                    padding: 80px 0;
                }

                .content-section {
                    margin-bottom: 80px;
                }

                .section-title {
                    font-size: 2.5rem;
                    color: #333;
                    margin-bottom: 2rem;
                    text-align: center;
                    font-weight: 600;
                }

                .section-subtitle {
                    font-size: 1.2rem;
                    color: #666;
                    text-align: center;
                    margin-bottom: 3rem;
                    max-width: 800px;
                    margin-left: auto;
                    margin-right: auto;
                }

                /* Contact Grid */
                .contact-grid {
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    gap: 4rem;
                    align-items: start;
                    margin-top: 3rem;
                }

                /* Contact Form */
                .contact-form {
                    background: white;
                    padding: 3rem;
                    border-radius: 20px;
                    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                }

                .contact-form h3 {
                    color: #2E4BC6;
                    margin-bottom: 2rem;
                    font-size: 1.8rem;
                    font-weight: 600;
                }

                .form-grid {
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    gap: 1.5rem;
                    margin-bottom: 1.5rem;
                }

                .form-group {
                    margin-bottom: 1.5rem;
                }

                .form-group.full-width {
                    grid-column: 1 / -1;
                }

                .form-group label {
                    display: block;
                    margin-bottom: 0.5rem;
                    font-weight: 600;
                    color: #333;
                }

                .form-group input,
                .form-group select,
                .form-group textarea {
                    width: 100%;
                    padding: 12px 16px;
                    border: 2px solid #e0e0e0;
                    border-radius: 10px;
                    font-size: 1rem;
                    font-family: 'Poppins', sans-serif;
                    transition: border-color 0.3s, box-shadow 0.3s;
                }

                .form-group input:focus,
                .form-group select:focus,
                .form-group textarea:focus {
                    outline: none;
                    border-color: #2E4BC6;
                    box-shadow: 0 0 0 3px rgba(46, 75, 198, 0.1);
                }

                .form-group textarea {
                    resize: vertical;
                    min-height: 120px;
                }

                .submit-button {
                    background: linear-gradient(135deg, #2E4BC6, #4A6CF7);
                    color: white;
                    padding: 15px 30px;
                    border: none;
                    border-radius: 25px;
                    font-weight: 600;
                    font-size: 1.1rem;
                    cursor: pointer;
                    transition: transform 0.3s, box-shadow 0.3s;
                    width: 100%;
                }

                .submit-button:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 8px 25px rgba(46, 75, 198, 0.3);
                }

                /* Contact Info */
                .contact-info {
                    background: linear-gradient(135deg, #2E4BC6, #4A6CF7);
                    color: white;
                    padding: 3rem;
                    border-radius: 20px;
                    height: fit-content;
                }

                .contact-info h3 {
                    margin-bottom: 2rem;
                    font-size: 1.8rem;
                    font-weight: 600;
                }

                .contact-item {
                    display: flex;
                    align-items: center;
                    margin-bottom: 2rem;
                    padding: 1rem;
                    background: rgba(255,255,255,0.1);
                    border-radius: 15px;
                    backdrop-filter: blur(10px);
                }

                .contact-item-icon {
                    width: 50px;
                    height: 50px;
                    background: rgba(255,255,255,0.2);
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    margin-right: 1rem;
                    font-size: 1.5rem;
                }

                .contact-item-content h4 {
                    margin-bottom: 0.5rem;
                    font-weight: 600;
                }

                .contact-item-content p {
                    opacity: 0.9;
                    line-height: 1.4;
                }

                /* Map Section */
                .map-section {
                    background: #f8f9fa;
                    padding: 80px 0;
                    margin: 80px 0;
                }

                .map-container {
                    background: white;
                    border-radius: 20px;
                    overflow: hidden;
                    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
                    height: 400px;
                }

                .map-container iframe {
                    width: 100%;
                    height: 100%;
                    border: none;
                }

                /* Responsive */
                @media (max-width: 768px) {
                    .hero h1 {
                        font-size: 2.5rem;
                    }

                    .nav-links {
                        display: none;
                    }

                    .section-title {
                        font-size: 2rem;
                    }

                    .contact-grid {
                        grid-template-columns: 1fr;
                        gap: 2rem;
                    }

                    .form-grid {
                        grid-template-columns: 1fr;
                        gap: 1rem;
                    }

                    .contact-form,
                    .contact-info {
                        padding: 2rem;
                    }

                    .faq-links {
                        grid-template-columns: 1fr;
                    }
                }

                /* Animations */
                @keyframes fadeInUp {
                    from {
                        opacity: 0;
                        transform: translateY(50px);
                    }
                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }

                .fade-in {
                    animation: fadeInUp 1s ease-out;
                }
            </style>
        </head>

        <body>

            <!-- Hero Section -->
            <section class="heroo">
                <div class="container">
                    <div class="heroo-content">
                        <h1>Nous contacter</h1>
                        <p>Une question, un besoin spécifique ou envie d'en savoir plus ? Notre équipe est là pour vous accompagner. Contactez-nous par le moyen qui vous convient le mieux.</p>
                    </div>
                </div>
            </section>

            <!-- Main Content -->
            <main class="main-content">
                <div class="container">
                    <!-- Contact Section -->
                    <section class="content-section">
                        <div class="contact-grid">
                            <!-- Contact Form -->
                            <div class="contact-form fade-in">
                                <h3>Envoyez-nous un message</h3>
                                <form method="POST" action="{{ route('contact.store') }}">
                                    @csrf
                                    <div class="form-grid">
                                        <div class="form-group">
                                            <label for="nom">Nom complet *</label>
                                            <input type="text" name="nom" required placeholder="Veuillez entrer le nom">
                                        </div>
                                        <div class="form-group">
                                            <label for="telephone">Téléphone *</label>
                                            <input type="tel" name="tel" required placeholder="+212 111 111 111">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input type="email" name="email" required placeholder="exemple@gmail.com">
                                    </div>

                                    <div class="form-group">
                                        <label for="sujet">Sujet *</label>
                                        <select name="sujet">
                                            <option value="">Choisissez un sujet</option>
                                            <option value="question-generale">Question générale</option>
                                            <option value="probleme-livraison">Problème de livraison</option>
                                            <option value="devenir-transporteur">Devenir transporteur</option>
                                            <option value="partenariat">Partenariat professionnel</option>
                                            <option value="reclamation">Réclamation</option>
                                            <option value="autre">Autre</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="message">Message </label>
                                        <textarea name="message" placeholder="Décrivez votre demande en détail..."></textarea>
                                    </div>

                                    <button type="submit" class="submit-button">Envoyer le message</button>
                                </form>
                            </div>

                            <!-- Contact Info -->
                            <div class="contact-info fade-in">
                                <h3><i class="fas fa-address-book"></i> Nos coordonnées</h3>

                                <div class="contact-item">
                                    <div class="contact-item-icon"><i class="fas fa-map-marker-alt"></i></div>
                                    <div class="contact-item-content">
                                        <h4>Adresse</h4>
                                        <p>Oqba Ibn Naafi, Rabat 10090, 1er étage Appartement 02, 46 Av</p>
                                    </div>
                                </div>

                                <div class="contact-item">
                                    <div class="contact-item-icon"><i class="fas fa-phone"></i></div>
                                    <div class="contact-item-content">
                                        <h4>Téléphone</h4>
                                        <p>+212 661 334 939<br>Lun-Ven : 8h-18h</p>
                                    </div>
                                </div>

                                <div class="contact-item">
                                    <div class="contact-item-icon"><i class="fas fa-envelope"></i></div>
                                    <div class="contact-item-content">
                                        <h4>Email</h4>
                                        <p>contact@envoi-express.ma<br>Réponse sous 24h</p>
                                    </div>
                                </div>

                                <div class="contact-item">
                                    <div class="contact-item-icon"><i class="fas fa-comments"></i></div>
                                    <div class="contact-item-content">
                                        <h4>Chat en direct</h4>
                                        <p>Support instantané<br>Lun-Sam : 9h-19h</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>

                <!-- Map Section -->
                <section class="map-section">
                    <div class="container">
                        <h2 class="section-title">Notre localisation</h2>
                        <p class="section-subtitle">Venez nous rendre visite dans nos bureaux au cœur de Rabat</p>
                        
                        <div class="map-container fade-in">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3087.9121864979643!2d-6.851446124285621!3d34.00397567317513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76d994a805295%3A0x67d4d63b79529d8d!2sEnvoi%20Express%20Soci%C3%A9t%C3%A9%20de%20Transport%20et%20D%C3%A9m%C3%A9nagement%20%C3%A0%20Rabat!5e1!3m2!1sen!2sma!4v1751112680136!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </section>
            </main>
        </body>
    </html>
@endsection