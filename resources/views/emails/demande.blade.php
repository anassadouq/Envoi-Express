<h2>Nouvelle demande de livraison</h2>

<p><strong>Nom:</strong> {{ $data['nom'] }}</p>
<p><strong>Email:</strong> {{ $data['email'] }}</p>
<p><strong>Téléphone:</strong> {{ $data['tel'] }}</p>
<p><strong>Ville de départ:</strong> {{ $data['ville_depart'] }}</p>
<p><strong>Ville d’arrivée :</strong> {{ $data['ville_arrivee'] }}</p>

<p><strong>Poids:</strong>
    @if(!empty($data['poids']))
        {{ $data['poids'] }} Kg
    @else
        Aucune valeur
    @endif
</p>

<p><strong>Detail:</strong> {{ $data['detail'] ?? 'Aucun détail' }}</p>