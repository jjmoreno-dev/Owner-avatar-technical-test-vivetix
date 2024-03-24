<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
    <!-- Application (all authenticated users) -->
    <li class="nav-item text-light">Application</li>
    <hr class="narrow text-light">

   
   
  
    
    <li class="nav-item"><a class="nav-link text-light" href="{{ route('back.customers.index') }}"><img class="nav-icon"
                src="{{ asset('img/icons/persons-white.png') }}" />Customers</a></li>
    <li class="nav-item"><a class="nav-link text-light" href="{{ route('event.index') }}"><img class="nav-icon"
                src="{{ asset('img/icons/event.png') }}" />Event</a></li>
    <li class="nav-item"><a class="nav-link text-light" href="{{ route('sales.index') }}"><img class="nav-icon"
                src="{{ asset('img/icons/money.png') }}" />Sales</a></li>
   

    <!-- Administration (only developer) -->
    @can('developer')
        <hr class="narrow text-light">
        <li class="nav-item text-light">Administration</li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="offcanvasNavbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="true">
                <i class="bi bi-person-bounding-box nav-icon"></i>{{ Auth::user()->name }}
            </a>

            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                <li><a class="dropdown-item" href="{{ route('back.users.index') }}"><i
                            class="bi bi-people-fill nav-icon"></i>Users</a></li>
             
            </ul>
        </li>
    @endcan
</ul>
