<div class="sidebar" id="side_nav">
    <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
        <h1 class="fs-4">
            <span class="bg-white text-dark rounded shadow px-2 me-2">O.S</span>
            <span class="text-white">Ocid Store</span>
        </h1>
        <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i class="fal fa-stream"></i></button>
    </div>

    <ul class="list-unstyled px-2">
        <li class="active">
            <a href="{{ route('dashboard.index') }}" class="text-decoration-none px-3 py-2 d-block">
                <i class="fal fa-home"></i>
                Dashboard
            </a>
        </li>

        <li class="">
            <a href="{{ route('dashboard.category') }}" class="text-decoration-none px-3 py-2 d-block">
                <i class="fal fa-home"></i>
                Category
            </a>
        </li>

        <li class="">
            <a href="{{ route('dashboard.product') }}" class="text-decoration-none px-3 py-2 d-block">
                <i class="fal fa-home"></i>
                Product
            </a>
        </li>

        <li class="">
            <a href="{{ route('dashboard.user') }}" class="text-decoration-none px-3 py-2 d-block">
                <i class="fal fa-home"></i>
                User
            </a>
        </li>

    </ul>

    <hr class="h-color mx-2">

    <ul class="list-unstyled px-2">
        <li class="">
            <a href="#" class="text-decoration-none px-3 py-2 d-block">
                <i class="fal fa-bars"></i>
                Settings
            </a>
        </li>

        <li class="">
            <a href="#" class="text-decoration-none px-3 py-2 d-block">
                <i class="fal fa-bell"></i>
                Notifications
            </a>
        </li>
    </ul>
</div>
