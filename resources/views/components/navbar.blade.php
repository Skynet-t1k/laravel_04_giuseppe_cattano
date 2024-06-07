<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('homepage')}}">
            <img class="navlogo" src="/images/logo.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
                <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home Page</a>
                <a class="nav-link  mx-5" href="{{route('aboutus')}}">Chi Siamo</a>
                <a class="nav-link" href="{{route('services')}}">Servizi</a>
            </div>
        </div>
        <div class="navlogo"></div>
    </div>
</nav>