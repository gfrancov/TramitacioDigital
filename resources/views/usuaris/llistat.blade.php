@include('includes.head')
<body>
    <div id="landing" class="d-none">true</div>
    @include('includes.nav')

    <!-- Cercador de procediments -->
    <div class="page-header theme-bg-dark py-5 text-center position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto">Usuaris</h1>
	    </div>
    </div>

    <!-- Llistat de fases existents -->
    <div class="page-content">
	    <div class="container">
		    <div class="docs-overview py-5">
			    <div class="row justify-content-center">

                    @foreach ( $usuaris as $usuari )
                        <div class="col-12 mb-3">
                            <div class="card shadow-sm mb-2">
                                <div class="card-body">
                                    <h5 class="card-title mb-0">
                                        <span class="card-title-text">{{$usuari->nom}}</span>
                                    </h5>
                                    <div class="card-text mb-4">
                                        {{$usuari->email}}
                                    </div>
                                    <a class="btn btn-success" href="/gestio/usuari/editar/{{$usuari->id}}"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                                    <a class="btn btn-danger" href="/gestio/usuari/eliminar/{{$usuari->id}}"><i class="fa-solid fa-trash-can"></i> Eliminar</a>

                                </div>
                            </div>

                        </div>
                    @endforeach


			    </div>
                <div class="row justify-content-center">
                    <a class="btn btn-success" href="/gestio/usuari/crear"><i class="fa-solid fa-circle-plus"></i> Donar d'alta usuari</a>
                </div>
		    </div>
		</div>
    </div>


@include('includes.footer')
