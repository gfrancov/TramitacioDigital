@include('includes.head')
<body>
    <div id="landing" class="d-none">true</div>
    @include('includes.nav')

    <!-- Capçalera -->
    <div class="page-header theme-bg-dark py-5 text-center position-relative mb-4">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto">Resultats</h1>
	    </div>
    </div>

    <!-- Formulari d'inici de sessió -->
    <div class="page-content">
	    <div class="container">
		    <div class="docs-overview py-5">
			    <div class="row justify-content-center">

                    @foreach ($llistatProcediments as $procediment )
                        <div class="col-12 col-lg-12 py-3">
                            <div class="card shadow-sm mb-2">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        #{{$procediment->ordre}}
                                        {{$procediment->nom}}
                                        <span class="badge bg-dark">Procediment</span>
                                        @switch($procediment->actor)
                                            @case('Sol·licitant')
                                                <span class="badge bg-warning">Sol·licitant</span>
                                                @break

                                            @case('Agent GT')
                                                <span class="badge bg-info">GT Administració Digital</span>
                                                @break

                                            @case('Responsable CCP')
                                                <span class="badge bg-danger">Responsable CCP</span>
                                                @break

                                            @case('ATIC')
                                                <span class="badge bg-success">Àrea TIC</span>
                                                @break
                                            @default
                                        @endswitch

                                     </h5>
                                    <div class="card-text mb-2 text-muted small">
                                        La teva cerca coincideix amb el contingut d'aquest procediment.
                                    </div>
                                    <a class="btn btn-primary" href="/procediment/{{$procediment->slug}}"><i class="fa-solid fa-arrow-pointer"></i> Accedir</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($llistatFases as $fase )
                        <div class="col-12 col-lg-12 py-3">
                            <div class="card shadow-sm mb-2">
                                <div class="card-body">
                                    <h5 class="card-title mb-0">{{$fase->ordre}} — {{$fase->nom}} <span class="badge bg-dark">Fase</span> </h5>
                                    <div class="card-text mb-2">
                                        {{$fase->descripcio}}
                                    </div>
                                    <a class="btn btn-primary" href="/fase/{{$fase->slug}}"><i class="fa-solid fa-arrow-pointer"></i> Accedir</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

			    </div>
		    </div>
		</div>
    </div>

@include('includes.footer')
