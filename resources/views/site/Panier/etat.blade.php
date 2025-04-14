@switch($item->etat)
    @case(0)
    <span class="badge bg-primary">En attente</span>
    @break
    @case(1)
    <span class="badge bg-secondary">paeiment</span>
    @break
    @case(2)
    <span class="badge bg-success">validé</span>
    @break
    @case(3)
    <span class="badge bg-danger">Annulé</span>
    @break
    
    @default
        
@endswitch