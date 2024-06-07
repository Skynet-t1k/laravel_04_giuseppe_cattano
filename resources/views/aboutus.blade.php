<x-layout>
    <div class="bg-image flex-column">
    <div class="row">
        <h1 id="title-aboutus" class="text-center pt-5">Chi Siamo</h1>
    </div>
    <div class="row">
        @foreach ($personaggi as $persona)
        <div class="col12 col-md-3 px-5">
            <x-aboutuscards
            imageurl="{{$persona['imageurl']}}"
            nome="{{$persona['nome']}}"
            ruolo="{{$persona['ruolo']}}"
            id="{{$persona['id']}}"

            >

            </x-aboutuscards>
       
        </div>
        @endforeach
    </div>
    </div>
</x-layout>