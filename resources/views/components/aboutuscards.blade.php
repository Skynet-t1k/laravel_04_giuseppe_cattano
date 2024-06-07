<div class="card" style="width: 18rem;">
    <img src="{{$imageurl}}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$nome}}</h5>
        <p class="card-text">{{$ruolo}}</p>
        <a href="{{route('dettaglio', ['id'=>$id])}}" class="btn btn-primary">Dettaglio</a>
    </div>
</div>