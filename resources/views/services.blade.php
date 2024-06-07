<x-layout>
    <div class="bg-image flex-column">
        <div class="row">
            <h1 id="title-aboutus" class="text-center pt-5">Services</h1>
        </div>
    
    <div class="row">
        @foreach ($services as $service)
        <div class="col-12 col-md-3 px-5">
            <x-servicescards
            urlservizio="{{$service['urlservizio']}}"
            nomeservizio="{{$service['nomeservizio']}}"
            id="{{$service['id']}}"         
                        
            >
            </x-servicescards>
       
        </div>
        @endforeach
    </div>
</div>


</x-layout>