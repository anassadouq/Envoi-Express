@extends('layouts.app')
@section('content')

    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- DataTables CSS -->
            <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
            <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.4/css/buttons.dataTables.min.css">

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
            </style>
        </head>

        <body>
            <!-- Table -->
            <div class="mx-2 my-3">
                <table class="text-center" id="myTable">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Tel</th>
                            <th>Ville de départ</th>
                            <th>Ville d'arrivée</th>
                            <th>Poids</th>
                            <th>Detail</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                            <tr>
                                <td style="width: 10%">{{ $contact->prenom }} {{ $contact->nom }}</td>
                                <td style="width: 10%">{{ $contact->email }}</td>
                                <td style="width: 5%">{{ $contact->tel }}</td>
                                <td style="width: 8%">{{ $contact->ville_depart }}</td>
                                <td style="width: 8%">{{ $contact->ville_arrivee }}</td>
                                <td style="width: 5%">{{ $contact->poids }} Kg</td>
                                <td style="width: 20%">{{ $contact->detail }}</td>
                                <td style="width: 5%">
                                    <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" id="deleteForm{{ $contact->id }}">
                                        @csrf
                                        @method('DELETE')
                                        <ul class="navbar-nav ms-auto">
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

            <!-- Confirm Delete Script -->
            <script>
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
                        buttons: [
                            {
                                extend: 'collection',
                                text: 'Export',
                                buttons: [
                                    {
                                        extend: 'excelHtml5',
                                        exportOptions: { columns: [0,1,2,3,4,5,6] }
                                    },
                                    {
                                        extend: 'pdfHtml5',
                                        exportOptions: { columns: [0,1,2,3,4,5,6] }
                                    },
                                    {
                                        extend: 'print',
                                        exportOptions: { columns: [0,1,2,3,4,5,6] }
                                    }
                                ]
                            }
                        ]
                    });
                });
            </script>
        </body>
    </html>
@endsection