<h2>Nouvelle demande de contact</h2>

<p><strong>Nom:</strong> {{ $data['nom'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] ?? 'Non fourni' }}</p>
<p><strong>Téléphone:</strong> {{ $data['tel'] }}</p>
<p><strong>sujet:</strong> {{ $data['sujet'] ?? 'Non précisée' }}</p>
<p><strong>message:</strong> {{ $data['message'] ?? 'Aucune message' }}</p>
