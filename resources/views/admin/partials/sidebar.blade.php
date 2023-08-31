<div class="sidebar sticky-top col-md-3 col-lg-2">
    <div class="offcanvas-md offcanvas-end" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="#">
                        <i class="bi bi-speedometer2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <i class="bi bi-person-fill"></i> Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <i class="bi bi-person-fill"></i> Cards
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <i class="bi bi-newspaper"></i> Advertisements
                    </a>
                </li>
            </ul>
            <hr class="my-3">
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="nav-link d-flex align-items-center gap-2" href="{{ route('logout') }}">
                            <i class="bi bi-box-arrow-right"></i> Sign out
                        </button>
                    </form>

                </li>
            </ul>
        </div>
    </div>
</div>
