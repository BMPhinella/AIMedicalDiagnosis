<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
        <p class="button-custom order-lg-last mb-0"><a href="" class="btn btn-secondary py-2 px-3">Dr.JEBT</a></p>
        <div class="collapse navbar-collapse" id="ftco-nav">
        
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a href="#home" class="nav-link pl-0">Home</a></li>
                <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#resources" class="nav-link">Resources</a></li>
                @if (Route::has('login'))
                @auth
                @else
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                
                @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>