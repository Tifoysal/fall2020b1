<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('home')}}">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('order')}}">
                    <span data-feather="file"></span>
                    Orders
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('product')}}">
                    <span data-feather="file"></span>
                    Product
                </a>
            </li>

        </ul>


    </div>
</nav>
