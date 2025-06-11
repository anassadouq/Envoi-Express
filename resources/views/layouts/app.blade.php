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

            .cta-button {
                background: linear-gradient(135deg, #2E4BC6, #4A6CF7);
                color: white;
                padding: 12px 24px;
                border: none;
                border-radius: 25px;
                text-decoration: none;
                font-weight: 600;
                transition: transform 0.3s, box-shadow 0.3s;
            }

            .cta-button:hover {
                transform: translateY(-2px);
                box-shadow: 0 8px 25px rgba(46, 75, 198, 0.3);
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
                <a href="/" class="logo">
                    <div class="logo-icon">EE</div>
                    Envoi Express
                </a>

                <!-- Burger Icon -->
                <div class="burger" id="burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <ul class="nav-links" id="nav-links">
                    <li><a href="/qui_sommes_nous">Qui sommes-nous ?</a></li>
                    <li><a href="/">Déménagement</a></li>
                    <li><a href="#pourquoi">Pourquoi nous</a></li>
                    <li><a href="/comment_ca_mache">Comment ça marche</a></li>
                    <li><a href="/nous_contacter">Nous contacter</a></li>
                </ul>
            </nav>
        </header>

        @yield('content')
        @include('layouts.footer')
    </body>
</html>