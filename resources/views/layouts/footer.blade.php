<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
    <style>
        /* Footer */
        h5 {
            font-size: 17px;
            color: #2E4BC6;
        }
        footer {
            background: #333;
            color: white;
            padding: 50px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            color: #2E4BC6;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
        }

        .footer-section ul li a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section ul li a:hover {
            color: white;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #555;
            color: #ccc;
        }

        .footer-bottom a {
            text-decoration: none;
            color: white;
        }

        .social-link {
            text-decoration: none;
            color: white;
            font-size: 20px;
            padding: 5px;
        }

        .dropdown-content a:hover {
            background-color: #D3D3D3;
            color: black;
        }
    </style>

    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                        <a href="/">
                            <img src="images/logo.png" alt="" width="70px">
                        </a>
                    </div>
                    <ul>
                        <li><a href="/qui_sommes_nous">Qui sommes-nous ?</a></li>
                        <li class="dropdown">
                            <a href="#demenagement">Déménagement</a>
                            <div class="dropdown-content">
                                <a href="/demenagement_particulier">Déménagement Particulier</a>
                                <a href="/demenagement_entreprise">Déménagement Entreprise</a>
                                <a href="/demenagement_etudiant">Déménagement Étudiant</a>
                            </div>
                        </li> 
                        <li><a href="/comment_ca_marche">Comment ça marche</a></li>
                        <li><a href="/nous_contacter">Nous contacter</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h5>Conseils pratiques</h5>
                    <ul>
                        <li><a href="#">Assurance</a></li>
                        <li><a href="#">Envoi express et la sécurité</a></li>
                        <li><a href="#">Conseils d'emballage</a></li>
                    </ul>
                    <h5>Nous suivre</h5>
                    <div class="social-links">
                        <a href="https://www.facebook.com" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com" class="social-link" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com" class="social-link"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <div class="footer-section">
                    <h5>Catégories d'objets</h5>
                    <ul>
                        <li><a href="#">Transport meubles</a></li>
                        <li><a href="#">Transport électroménager</a></li>
                        <li><a href="#">Transport matériel high-tech</a></li>
                        <li><a href="#">Transport véhicules</a></li>
                        <li><a href="#">Transport matériel de bricolage</a></li>
                        <li><a href="#">Livraison de colis</a></li>
                        <li><a href="#">Transport de marchandises</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h5>Objets les plus envoyés</h5>
                    <ul>
                        <li><a href="#">Livraison vélo</a></li>
                        <li><a href="#">Livraison buffet</a></li>
                        <li><a href="#">Livraison pièces auto</a></li>
                        <li><a href="#">Transport lave-vaisselle</a></li>
                        <li><a href="#">Transport lave-linge</a></li>
                        <li><a href="#">Livraison canapé</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h5>Contact</h5>
                    <div class="contact-details">
                        <ul>
                            <li>
                                <span class="contact-icon"><i class="fas fa-phone"></i> +212 661 334 939</span>
                            </li>
                            <li>
                                <span class="contact-icon"><i class="fas fa-envelope"></i> contact@envoi-express.ma</span>
                            </li>
                            <li>
                                <span class="contact-icon"><i class="fas fa-map-marker-alt"></i> Oqba Ibn Naafi, Rabat 10090, 1er étage Appartement 02, 46 Av</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2025 <a href="/">Envoi Express</a>. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>