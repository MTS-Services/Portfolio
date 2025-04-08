<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            @isset($user)
                <img src="{{ $user->profile_image ? asset('storage/images/users/' . $user->profile_image) : asset('default_images/profile.png') }}"
                    alt="{{ $user->name }}" class="img-fluid rounded-circle "
                    style="width: 120px; height: 120px; object-fit: cover">
            @endisset
            <h1 class="text-light"><a href="{{ url('/') }}">{{ $user->name ?? '' }}</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="{{ $user->twitter ?? '' }}" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="{{ $user->facebook ?? '' }}" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="{{ $user->instagram ?? '' }}" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="{{ $user->linkedin ?? '' }}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a>
                </li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a>
                </li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i>
                        <span>Portfolio</span></a></li>
                <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a>
                </li>
                <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a>
                </li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->
