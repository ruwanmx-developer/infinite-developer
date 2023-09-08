<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><span class="s1">infinite<span
                    class="s2">Developer</span></span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="{{ route('learn') }}" class="nav-link">Learn</a>
                </li>
            </ul>
            <div class="d-flex">
                <form class="input-group d-flex" action="{{ route('search') }}" method="GET">
                    <input type="text" class="form-control" placeholder="Search in the Site" name="key">
                    <button class="input-group-text" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</nav>
