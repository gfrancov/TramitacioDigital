<header class="header fixed-top">
    <div class="branding docs-branding">
        <div class="container-fluid position-relative py-2">
            <div class="docs-logo-wrapper">
                <button id="docs-sidebar-toggler" class="docs-sidebar-toggler docs-sidebar-visible me-2 d-xl-none" type="button">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="site-logo"><a class="navbar-brand" href="/"><img class="logo-icon me-2" src="{{asset('assets/images/interior.gif')}}" alt="logo"></a></div>
            </div>
            <div class="docs-top-utilities d-flex justify-content-end align-items-center">
                <div class="top-search-box d-none d-lg-flex">
                    <form class="search-form">
                        <input type="text" placeholder="Cerca a la documentació" name="search" class="form-control search-input">
                        <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
                    </form>
                </div>

                <ul class="social-list list-inline mx-md-3 mx-lg-5 mb-0 d-none d-lg-flex">
                    <li class="list-inline-item"><a href="https://github.com/gfrancov/doc-digital-tramit"><i class="fab fa-github fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="https://twitter.com/interiorcat"><i class="fab fa-twitter fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="https://instagram.com/interiorcat"><i class="fab fa-instagram fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="https://facebook.com/interiorcat"><i class="fab fa-facebook fa-fw"></i></a></li>
                    </ul>
                <a href="{{route('login.form')}}" class="btn btn-primary d-none d-lg-flex">Gestió</a>
            </div>
        </div>
    </div>
</header>
