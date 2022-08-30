@include('includes.head')
<body>
    <div id="landing" class="d-none">true</div>
    @include('includes.nav')

    <!-- Cercador de procediments -->
    <div class="page-header theme-bg-dark py-5 text-center position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto">Modificar una fase</h1>
	    </div>
    </div>

    <!-- Llistat de fases existents -->
    <div class="page-content">
	    <div class="container">
		    <div class="docs-overview py-5">
                <form class="acces-form" method='post' action='{{route('gestio.fase.modificar')}}'>
                    @csrf
                    <div class="row justify-content-center">

                        <div class="col-12 mb-4">
                            <h2>Dades de la fase</h2>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='nom'>Nom visualitzat:</label>
                                <input type='text' name='nom' id='nom' placeholder="Exemple: Estudi de la sol·licitud" value="{{$fase->nom}}" required/>
                            </div>
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='ordre'>Ordre:</label>
                                <input type='number' name='ordre' id='ordre' placeholder="Exemple: 6" value="{{$fase->ordre}}" required />
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='slug'>Slug:</label>
                                <input type='text' name='slug' id='slug' placeholder="Exemple: estudi-solicitud" value="{{$fase->slug}}" required />
                            </div>
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='icona'>Icona: <span id="preview-icona"><i class="fa-solid {{$fase->icona}}"></i></span> <a href="https://fontawesome.com/search?m=free&s=solid%2Cbrands" target="_blank" class="small">D'on surten?</a></label>
                                <input type='text' name='icona' id='icona' placeholder="Exemple: fa-copy" value="{{$fase->icona}}" required />

                            </div>
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='id'>Identificador: <span class="text-muted small">(no editable)</span></label>
                                <input type='text' name='id' id='id' value="{{$fase->id}}" required readonly />
                            </div>
                        </div>

                        <div class="col-12 mt-2">
                            <h4 style="display: flex; justify-content: space-between; align-items: center;">
                                Descripció
                            </h4>
                            <input type='text' name='descripcio' id='icona' style="width: 100%; padding: 7px;" placeholder="Exemple: Fase per identificar característiques." value="{{$fase->descripcio}}" required />
                            <input style="width: 100%;" type="submit" value="Modificar fase" class="btn btn-success mt-4" name="modificar" id="modificar"/>
                        </div>

                    </div>
		    </div>
		</div>
    </div>

@include('includes.footer')
<script type="text/javascript" src="{{asset('assets/js/icon-preview.js')}}"></script>
