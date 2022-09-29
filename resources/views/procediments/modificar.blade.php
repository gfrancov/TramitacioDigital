@include('includes.head')
<body>
    <div id="landing" class="d-none">true</div>
    @include('includes.nav')

    <!-- Cercador de procediments -->
    <div class="page-header theme-bg-dark py-5 text-center position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto">Modificar un procediment</h1>
	    </div>
    </div>

    <!-- Llistat de fases existents -->
    <div class="page-content">
	    <div class="container">
		    <div class="docs-overview py-5">
                <form class="acces-form" method='post' action='{{route('gestio.procediments.modificar')}}'>
                    @csrf
                    <div class="row justify-content-center">

                        <div class="col-12 mb-4">
                            <h2>Dades del procediment</h2>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='nom'>Nom visualitzat:</label>
                                <input type='text' name='nom' id='nom' placeholder="Exemple: Estudi de la sol·licitud" value="{{$procediment->nom}}" required/>
                            </div>
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='fase'>Fase a la qual pertany:</label>
                                <select style="width: 100%;" name='fase' id='fase'>
                                    @foreach ( $fases as $cadaFase )
                                        @if ( $cadaFase->id == $procediment->fase )
                                            <option value="{{ $cadaFase->id }}" selected>{{ $cadaFase->nom }}</option>
                                        @else
                                            <option value="{{ $cadaFase->id }}">{{ $cadaFase->nom }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='ordre'>Ordre:</label>
                                <input type='number' name='ordre' id='ordre' placeholder="Exemple: 6" value="{{$procediment->ordre}}" required />
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='slug'>Slug:</label>
                                <input type='text' name='slug' id='slug' placeholder="Exemple: estudi-solicitud" value="{{$procediment->slug}}" required />
                            </div>
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='actor'>Actor que realitza el procediment:</label>
                                <select style="width: 100%;" name='actor' id='actor'>
                                    @php
                                        $actors = ['Agent GT', 'Sol·licitant', 'Responsable CCP', 'Àrea TIC'];
                                    @endphp

                                    @foreach ( $actors as $actor )
                                        @if ( $actor == $procediment->actor )
                                            <option value="{{$actor}}" selected>{{$actor}}</option>
                                        @else
                                        <option value="{{$actor}}">{{$actor}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='id'>Identificador: <span class="text-muted small">(no editable)</span></label>
                                <input type='text' name='id' id='id' value="{{$procediment->id}}" required readonly />
                            </div>
                        </div>

                        <div class="col-12 mt-2">
                            <h4 style="display: flex; justify-content: space-between; align-items: center;">
                                Contingut
                                <div class="botons">
                                    <a class="btn btn-warning" href="/gestio/xuleta" target="_blank"><i class="fa-solid fa-pen-to-square"></i> Xuleta</a>
                                </div>
                            </h4>
                            <textarea name="contingut" id="contingut" style="width: 100%; height: 20vh;">{{$procediment->contingut}}</textarea>
                            <input style="width: 100%;" type="submit" value="Modificar procediment" class="btn btn-success mt-4" name="modificar" id="modificar"/>
                        </div>

                    </div>
		    </div>
		</div>
    </div>
    <!-- TinyMCE Script -->
<script>
    tinymce.init({
        selector: '#contingut',
        plugins: 'image autolink lists media table link bullist numlist',
        toolbar: 'undo redo | styleselect | bold italic underline link | alignleft aligncenter alignright alignjustify | table bullist numlist | outdent indent | code | ',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Gabriel Franco',
        menubar: false,
        language: 'ca',
        table_class_list: [
            {title: 'Zebra', value: 'table table-striped'},
            {title: 'Vores', value: 'table table-bordered'}
        ]
        });
</script>

@include('includes.footer')
