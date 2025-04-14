<div class="row">
    @if ($item->etat == 0)
        <div><a class="btn btn-outline-success" href="{{route('panier.paye',['id' =>$item->id])}}"><i class="">Payer</i></a></div>
    @endif
    
    @if ($item->etat != 2)
        <div><a href="{{route('panier.annule',['id' =>$item->id])}}"><i class="btn btn-outline-danger">Annulé</i></a></div>
    @endif
    


</div>