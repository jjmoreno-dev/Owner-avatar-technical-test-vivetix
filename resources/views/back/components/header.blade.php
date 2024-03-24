@if(Illuminate\Support\Facades\Auth::check())
   



<header>
    <nav class="navbar bg-secondary fixed-top d-print-none">
        <div class=" container-fluid">
            <div class="d-flex align-items-center justify-content-start">
                <div class="d-none d-lg-block me-1">
                <a class="btn btn-lg btn-success text-white me-1" href="/" title="Home" role="button" tabindex="-1">
                    <i class="bi bi-house-fill"></i>
                </a>
                </div>
                <div>
                    <button class="btn btn-lg btn-outline-dark me-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" tabindex="-1"
                        title="Menu">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
                <div class="d-none d-lg-block">
                    <span class="text-white">{{ Auth::user()->name }}</span>
                </div>
            </div>
            <div>

                <div class="btn-group me-1" role="group">
                    <a class="btn btn-lg btn-outline-dark" href="{{ route('back.customers.index') }}" title="Customers" role="button" tabindex="-1">
                       
                        <img src="{{ asset('img/icons/persons-white.png') }}" class="img-fluid" />
                    </a>
                    <a class="btn btn-lg btn-outline-dark" href="{{ route('event.index') }}" title="Event" role="button" >
                       
                        <img src="{{ asset('img/icons/event.png') }}" class="img-fluid" />
                    </a>
                    <a class="btn btn-lg btn-outline-dark" href="{{ route('sales.index') }}" title="Sales" role="button" >
                       
                        <img src="{{ asset('img/icons/money.png') }}" class="img-fluid" />
                    </a>
                    <a class="btn btn-lg btn-outline-dark" href="{{ route('back.users.index') }}" title="User" role="button" >
                       
                        <img src="{{ asset('img/icons/settings-user.png') }}" class="img-fluid" />
                    </a>
                    
                </div>

            
                <a class="btn btn-lg btn-danger text-white" href="{{ route('logout') }}" title="Logout" role="button" tabindex="-1"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right"></i>
                </a>
            </div>

            {{-- Offcanvas Menu --}}
            @include('back.components.offcanvas')

            {{-- logout --}}
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </nav>
</header>
@endif