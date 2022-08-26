@include('includes.head')
<body>
    <div id="landing" class="d-none">true</div>
    @include('includes.nav')

    <!-- Cercador de procediments -->
    <div class="page-header theme-bg-dark py-5 text-center position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto">Benvingut a la gestió</h1>
	    </div>
    </div>

    <!-- Llistat de fases existents -->
    <div class="page-content">
	    <div class="container">
		    <div class="docs-overview py-5">
			    <div class="row justify-content-center">
                    <div class="col-lg-4 col-12 mb-2">

                        <!-- Card de tasca -->
                        <div class="card shadow-sm mb-2">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fa-solid fa-diagram-project"></i>
                                    </span>
                                    <span class="card-title-text">Gestionar Fases</span>
                                </h5>
                                <div class="card-text">
                                    Per gestionar totes les fases del circuit:
                                    <ul>
                                        <li>Modificar contingut</li>
                                        <li>Canviar l'ordre</li>
                                        <li>Crear una nova</li>
                                    </ul>
                                </div>
                                <a class="card-link-mask" href="{{route('gestio.fases')}}"></a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-12 mb-2">

                        <!-- Card de tasca -->
                        <div class="card shadow-sm mb-2">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fa-solid fa-bars-progress"></i>
                                    </span>
                                    <span class="card-title-text">Gestionar Procediments</span>
                                </h5>
                                <div class="card-text">
                                    Per gestionar els procediments de cada fase:
                                    <ul>
                                        <li>Modificar contingut</li>
                                        <li>Canviar l'ordre</li>
                                        <li>Crear un de nou</li>
                                    </ul>
                                </div>
                                <a class="card-link-mask" href="{{route('gestio.procediments')}}"></a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-12 mb-2">

                        <!-- Card de tasca -->
                        <div class="card shadow-sm mb-2">
                            <div class="card-body">
                                <h5 class="card-title mb-3">
                                    <span class="theme-icon-holder card-icon-holder me-2">
                                        <i class="fa-solid fa-users"></i>
                                    </span>
                                    <span class="card-title-text">Gestionar Usuaris</span>
                                </h5>
                                <div class="card-text">
                                    Gestiona els usuaris:
                                    <ul>
                                        <li>Modificar usuaris</li>
                                        <li>Eliminar un usuari</li>
                                        <li>Crear un usuari</li>
                                    </ul>
                                </div>
                                <a class="card-link-mask" href="/gestio/usuaris"></a>
                            </div>
                        </div>

                    </div>
			    </div>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <a href="{{route('sortir')}}" class="btn btn-primary mt-4" style="width: 100%"><i class="fa-solid fa-arrow-right-from-bracket"></i> Tancar sessió</a>
                    </div>
                </div>
		    </div>
		</div>
    </div>


@include('includes.footer')
