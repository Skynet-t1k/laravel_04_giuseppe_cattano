<x-layout>
    <div class="bg-image flex-column">
        <h1 id="title-aboutus" class="text-center pt-5"> {{ $persona['nome'] }} </h1>
        <div class="row">
            <div class="col-12 col-md-6 desc">
                <h2>Ruolo: {{ $persona['ruolo']}}</h2>
                <h3>Abilita': {{$persona['abilità']}}</h3>
                <p class="lead">{{$persona['descrizione']}}</p>
            </div>
            <div class="col12 col-md-6"><img src="{{ $persona['imageurl'] }}" class="img-fluid detailimg" alt="..."></div>
        </div>
    </div>
</x-layout>