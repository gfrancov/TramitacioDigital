@include('includes.head')
<body>
    <div id="landing" class="d-none">true</div>
    @include('includes.nav')

    <!-- Cercador de procediments -->
    <div class="page-header theme-bg-dark py-5 text-center position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto">Procediments</h1>
	    </div>
    </div>

    <!-- Llistat de fases existents -->
    <div class="page-content">
	    <div class="container">
		    <div class="docs-overview py-5">
			    <div class="row justify-content-center">

                    @foreach ( $fases as $fase )
                        <div class="col-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{$fase->nom}}</h5>
                                    <p class="card-text">{{$fase->descripcio}}</p>
                                </div>
                                <ul class="list-group list-group-flush">

                                    @foreach ( $procediments as $procediment )
                                        @if ($procediment->fase == $fase->id)
                                            <li class="list-group-item fila-procediment">
                                                {{$procediment->nom}}
                                                <div class="procediments-botons">
                                                    <a class="btn btn-warning" href="/gestio/procediment/editar/{{$procediment->slug}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                                    <a class="btn btn-danger" href="/gestio/procediment/eliminar/{{$procediment->slug}}"><i class="fa-solid fa-trash-can"></i></a>
                                                </div>
                                            </li>
                                        @endif
                                    @endforeach

                                    <li class="list-group-item nou-procediment">
                                        <a class="btn btn-success" href="/gestio/procediment/crear/{{$fase->slug}}"><i class="fa-solid fa-circle-plus"></i> Nou procediment</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach

			    </div>
		    </div>
		</div>
    </div>


@include('includes.footer')
