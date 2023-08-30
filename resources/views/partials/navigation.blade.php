<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Infinite Developer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">
                        <i class="bi bi-house-door-fill"></i>
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('learn') }}">
                        <i class="bi bi-mortarboard-fill"></i>
                        Learn
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " aria-current="page" href="#"> <i class="bi bi-person-rolodex"></i>
                        Contact
                        Me</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#"> <i class="bi bi-person-bounding-box"></i>
                        Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Help</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
