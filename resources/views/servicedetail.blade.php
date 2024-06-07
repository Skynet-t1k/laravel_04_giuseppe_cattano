<x-layout>
    <div class="bg-image flex-column">
        <h1 id="title-aboutus" class="text-center pt-5"> {{ $service['nomeservizio'] }} </h1>
        <div class="row">
            <div class="col12 col-md-6 desc">
             <p class="lead">{{$service['descservizio']}}</p>
            </div>
            <div class="col12 col-md-6"><img src="{{ $service['urlservizio'] }}" class="img-fluid detailimg" alt="..."></div>
        </div>
    </div>
</x-layout>