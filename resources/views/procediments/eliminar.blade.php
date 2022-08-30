@include('includes.head')
<body>
    <div id="landing" class="d-none">true</div>
    @include('includes.nav')

    <!-- Cercador de procediments -->
    <div class="page-header theme-bg-dark py-5 text-center position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto">Eliminar un procediment</h1>
	    </div>
    </div>

    <!-- Llistat de fases existents -->
    <div class="page-content">
	    <div class="container">
		    <div class="docs-overview py-5">
                <form class="acces-form" method='post' action='{{route('gestio.procediments.eliminar')}}'>
                    @csrf
                    <div class="row justify-content-center">

                        <div class="col-6">
                            <h2 class="mb-4">Estàs segur?</h2>
                            <p>Estàs segur que vols eliminar el següent procediment?<br/> <span class="text-danger">Aquesta acció es irreversible.</span></p>
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='nom'>Nom del procediment:</label>
                                <input type='text' name='nom' id='nom' placeholder="Exemple: Estudi de la sol·licitud" value="{{$procediment->nom}}" readonly required/>
                            </div>
                            <div class='form-control mb-2'>
                                <label class='text-bold' for='id'>Identificador:</label>
                                <input type='number' name='id' id='id' placeholder="Exemple: 2" value="{{$procediment->id}}" readonly required />
                            </div>
                            <input style="width: 100%;" type="submit" value="Eliminar procediment" class="btn btn-danger mt-4" name="eliminar" id="eliminar"/>
                        </div>

                    </div>
                </form>
		    </div>
		</div>
    </div>

@include('includes.footer')
<script type="text/javascript" src="{{asset('assets/js/preview.js')}}"></script>
