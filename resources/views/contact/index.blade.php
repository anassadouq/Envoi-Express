<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact</title>
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- DataTables CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">
        <!-- Google Material Icons -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            table {
                border-collapse: collapse;
                width: 100%;
                margin-top: 1rem;
            }

            th, td {
                border: 1px solid #ddd;
                padding: 12px;
                vertical-align: top;
            }

            td img {
                max-width: 120px;
                border-radius: 8px;
            }

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

            .nav-links .logout {
                text-decoration: none;
                color: red;
                font-weight: 500;
                transition: color 0.3s;
            }

            .nav-links .logout:hover {
                color: red;
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
    </head>

    <body>
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
                    <li><a href="/admin">Demande</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li class="nav-item">
                        <a class="nav-link logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout </a>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
            </nav>
        </header>

        <!-- Table -->
        <div class="mx-2 my-3">
            <br>
            <table class="text-center" id="myTable">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Téléphone</th>
                        <th>Sujet</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                        <tr>
                            <td style="width: 10%">{{ $contact->prenom }} {{ $contact->nom }}</td>
                            <td style="width: 10%">{{ $contact->email }}</td>
                            <td style="width: 5%">{{ $contact->tel }}</td>
                            <td style="width: 10%">{{ $contact->sujet }}</td>
                            <td style="width: 20%">{{ $contact->message }}</td>
                            <td style="width: 12%">{{ \Carbon\Carbon::parse($contact->created_at)->format('d/m/Y \à H:i') }}</td>
                            <td style="width: 5%">
                                <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" id="deleteForm{{ $contact->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <ul class="navbar-nav ms-auto">
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                    <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                                                </svg>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <button type="button" onclick="confirmDelete('{{ $contact->id }}')" class="btn">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M10.354 8l3.823-3.823a.5.5 0 0 0-.708-.708L9.646 7.293 5.823 3.469a.5.5 0 0 0-.708.708L8.293 8l-3.82 3.823a.5.5 0 1 0 .708.708L9.647 8.707l3.824 3.824a.5.5 0 0 0 .708-.708L10.354 8z"/>
                                                    </svg>
                                                    &nbsp;Supprimer
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        
        <script>
            /* Burger menu */
            document.addEventListener("DOMContentLoaded", function() {
                const burger = document.getElementById("burger");
                const navLinks = document.getElementById("nav-links");

                burger.addEventListener("click", function() {
                    navLinks.classList.toggle("active");
                });
            });
            /* Confirm Delete Script */
            function confirmDelete(contactId) {
                if (confirm('Êtes-vous sûr de vouloir supprimer cet article ?')) {
                    document.getElementById('deleteForm' + contactId).submit();
                }
            }
        </script>

        <!-- JS Dependencies -->
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js"></script>

        <!-- DataTables Init -->
            <script>
                $(document).ready(function() {
                    $('#myTable').DataTable({
                        dom: 'Blfrtip',
                        lengthChange: false,
                        paging: false,
                        ordering: false,
                        buttons: [
                            {
                                extend: 'collection',
                                text: 'Export',
                                buttons: [
                                    {
                                        extend: 'excelHtml5',
                                        exportOptions: { columns: [0,1,2,3,4,5] }
                                    },
                                    {
                                        extend: 'pdfHtml5',
                                        exportOptions: { columns: [0,1,2,3,4,5] }
                                    },
                                    {
                                        extend: 'print',
                                        exportOptions: { columns: [0,1,2,3,4,5] }
                                    }
                                ]
                            }
                        ]
                    });
                });
            </script>
    </body>
</html>