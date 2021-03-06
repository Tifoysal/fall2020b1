<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">

           @if(auth()->user()->role=='manager')
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
            @endif

@if(auth()->user()->role=='admin')
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
                <a class="nav-link" href="{{route('category.createForm')}}">
                    <span data-feather="file"></span>
                    Category
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('category.list')}}">
                    <span data-feather="file"></span>
                    Category List
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="{{route('product')}}">
                    <span data-feather="file"></span>
                    Product
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('product.list')}}">
                    <span data-feather="file"></span>
                    Product List
                </a>
            </li>
@endif

        </ul>


    </div>
</nav>
