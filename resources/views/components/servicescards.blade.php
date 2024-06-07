<div class="card" style="width: 18rem;">
    <img src="{{$urlservizio}}" class="card-img-top" alt="...">
    <div class="card-body d-flex flex-column">
        <h5 class="card-title">{{$nomeservizio}}</h5>
        <p class="card-text"></p>
        <div class="mt-auto">
        <a href="{{route('services.detail', ['id'=>$id])}}" class="btn btn-primary">Dettaglio</a>
        </div>
    </div>
</div>