@include('includes.head')
<body>
    <div id="landing" class="d-none">true</div>
    @include('includes.nav')

    <!-- Cercador de procediments -->
    <div class="page-header theme-bg-dark py-5 text-center position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto">Modificar un usuari</h1>
	    </div>
    </div>

    <!-- Llistat de fases existents -->
    <div class="page-content">
	    <div class="container">
		    <div class="docs-overview py-5">
                <form class="acces-form" method='post' action='{{route('gestio.usuaris.modificar')}}'>
                    @csrf
                    <div class="row justify-content-center">

                        <div class="col-12 mb-4">
                            <h2>Dades de l'usuari</h2>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='nom'>Nom i cognoms:</label>
                                <input type='text' name='nom' id='nom' placeholder="Exemple: Miquel Arumi" value="{{$usuari->nom}}"/>
                            </div>
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='password'>Nova contrasenya:</label>
                                <input type='password' name='password' id='password' placeholder="Contrasenya" />
                            </div>
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='confirm-password'>Confirmar contrasenya:</label>
                                <input type='password' name='confirm-password' id='confirm-password' placeholder="Confirmar contrasenya" />
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='dni'>DNI:</label>
                                <input type='text' name='dni' id='dni' placeholder="Exemple: 12345678A" value="{{$usuari->dni}}" required />
                            </div>
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='email'>Correu:</label>
                                <input type='email' name='email' id='email' placeholder="Exemple: miquelarumi@gencat.cat" value="{{$usuari->email}}" required />
                            </div>
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='id'>Identificador: <span class="text-muted small">(no editable)</span></label>
                                <input type='number' name='id' id='id' value="{{$usuari->id}}" required readonly />
                            </div>
                        </div>

                        <div class="col-12">
                            @error('message')
                            <p class='error-message'> {{ $message }} </p>
                            @enderror
                            <input style="width: 100%; color: #fff;" type="submit" value="Modificar usuari" class="btn btn-success mt-4" name="crear" id="crear"/>
                        </div>

                    </div>
		    </div>
		</div>
    </div>

@include('includes.footer')
