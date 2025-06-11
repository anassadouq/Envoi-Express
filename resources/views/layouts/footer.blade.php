<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
    <style>
        /* Footer */
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
                    <p><br>Simple et moins cher. <br>La livraison qu'il vous faut.</p>
                </div>
                
                <div class="footer-section">
                    <h5>Services</h5>
                    <ul>
                        <li><a href="#service">Sécurité Maximale</a></li>
                        <li><a href="#service">Service Rapide</a></li>
                        <li><a href="#service">Sur Mesure</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h5>Informations</h5>
                    <ul>
                        <li><a href="/">Acceuil</a></li>
                        <li><a href="#pourquoi">Pourquoi nous</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#procedure">Procedure</a></li>
                        <li><a href="#contactez-nous">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h5>Contact</h5>
                    <div class="contact-details">
                        <ul>
                            <li>
                                <span class="contact-icon"><i class="fas fa-phone"></i> +212 5 22 12 34 56</span>
                            </li>
                            <li>
                                <span class="contact-icon"><i class="fas fa-envelope"></i> contact@envoiexpress.ma</span>
                            </li>
                            <li>
                                <span class="contact-icon"><i class="fas fa-map-marker-alt"></i> Avenue Mohammed V<br>Casablanca 20250, Maroc</span>
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