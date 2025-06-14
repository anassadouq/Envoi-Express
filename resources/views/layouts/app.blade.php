<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Envoi Express - Transport de Colis entre Particuliers</title>
    </head>

    <body>
        <style>
            /* Header */
            header {
                background: #fff;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                position: sticky;
                top: 0;
                z-index: 100;
                padding: 5px;
            }

            nav {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 1rem 0;
            }

            .logo {
                display: flex;
                align-items: center;
                gap: 10px;
                font-size: 1.5rem;
                font-weight: bold;
                color: #2E4BC6;
                text-decoration: none;
            }

            .logo-icon {
                width: 40px;
                height: 40px;
                background: #2E4BC6;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-weight: bold;
                font-size: 1.2rem;
            }

            .nav-links {
                display: flex;
                gap: 2rem;
                list-style: none;
            }

            .nav-links a {
                text-decoration: none;
                color: #333;
                font-weight: 500;
                transition: color 0.3s;
            }

            .nav-links a:hover {
                color: #2E4BC6;
            }

            /* Dropdown Menu */
            .dropdown {
                position: relative;
            }

            .dropdown-content {
                display: none;
                position: absolute;
                background-color: white;
                min-width: 200px;
                box-shadow: 0 8px 16px rgba(0,0,0,0.1);
                z-index: 1000;
                border-radius: 10px;
                padding: 0.5rem 0;
                top: 100%;
                left: 0;
            }

            .dropdown-content a {
                color: #333;
                padding: 8px 16px;
                text-decoration: none;
                display: block;
                font-size: 0.9rem;
            }

            .dropdown-content a:hover {
                background-color: #f1f1f1;
                color: #2E4BC6;
            }

            .dropdown:hover .dropdown-content {
                display: block;
            }

            .dropdown > a::after {
                content: " ▼";
                font-size: 0.7rem;
                margin-left: 0.5rem;
            }

            /* Burger styles */
            .burger {
                display: none;
                flex-direction: column;
                cursor: pointer;
                gap: 5px;
            }

            .burger span {
                width: 25px;
                height: 3px;
                background: #2E4BC6;
                border-radius: 2px;
                transition: 0.3s;
            }

            /* Responsive */
            @media (max-width: 768px) {
                .nav-links {
                    position: absolute;
                    top: 100%;
                    left: 0;
                    right: 0;
                    background: #fff;
                    flex-direction: column;
                    gap: 1rem;
                    padding: 1rem;
                    display: none;
                }

                .nav-links.active {
                    display: flex;
                }

                .burger {
                    display: flex;
                }
            }
        </style>

        <header>
            <nav class="container">
                <a href="/">
                    <img src="images/logo.png" alt="" width="60px">
                </a>

                <!-- Burger Icon -->
                <div class="burger" id="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <ul class="nav-links" id="nav-links">
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
            </nav>
        </header>

        <script src="{{ asset('js/script.js') }}"></script>

        @yield('content')
        @include('layouts.footer')
    </body>
</html>