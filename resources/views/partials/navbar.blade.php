<nav class="navbar navbar-expand-lg">
    <!-- Logo -->
    <div class="logo-wrapper valign">
        <div class="logo">
            <h2><a href="{{ route('home') }}">WE ARE</a><span>GROUP</span></h2>
        </div>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-line-double"></i></span> </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a @if (request()->segment(1) == '')
                class="nav-link active" 
            @else
                class="nav-link"
            @endif href="{{ route('home') }}">Acceuil</a></li>
            <li class="nav-item"><a @if (request()->segment(1) == 'about')
                class="nav-link active" 
            @else
                class="nav-link"
            @endif href="{{ route('about') }}">A propos de nous</a></li>
            {{-- <li class="nav-item"><a @if (request()->segment(1) == 'services')
                class="nav-link active" 
            @else
                class="nav-link"
            @endif href="{{ route('services') }}">Nos services</a></li> --}}
            <li class="nav-item"><a @if (request()->segment(1) == 'gallery')
                class="nav-link active" 
            @else
                class="nav-link"
            @endif href="{{ ('gallery') }}">Gallerie</a></li>
            {{-- <li class="nav-item dropdown"> <span class="nav-link"> Blog <i class="ti-angle-down"></i></span>
                <ul class="dropdown-menu last">
                    <li class="dropdown-item"><a href="blog.html">Blog Page</a></li>
                    <li class="dropdown-item"><a href="post.html">Post Page</a></li>
                    <li class="dropdown-item"><a href="services-page.html">Services Page</a></li>
                </ul>
            </li> --}}
            <li class="nav-item"><a @if (request()->segment(1) == 'contact')
                class="nav-link active" 
            @else
                class="nav-link"
            @endif href="{{ route('contact') }}">Contacts</a></li>
        </ul>
    </div>
</nav>
