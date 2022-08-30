@include('includes.head')
<body>
    <div id="landing" class="d-none">true</div>
    @include('includes.nav')

    <!-- Cercador de procediments -->
    <div class="page-header theme-bg-dark py-5 text-center position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto">Crear un usuari</h1>
	    </div>
    </div>

    <!-- Llistat de fases existents -->
    <div class="page-content">
	    <div class="container">
		    <div class="docs-overview py-5">
                <form class="acces-form" method='post' action='{{route('gestio.usuaris.crear')}}'>
                    @csrf
                    <div class="row justify-content-center">

                        <div class="col-12 mb-4">
                            <h2>Dades de l'usuari</h2>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='nom'>Nom i cognoms:</label>
                                <input type='text' name='nom' id='nom' placeholder="Exemple: Miquel Arumi" required/>
                            </div>
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='password'>Contrasenya:</label>
                                <input type='password' name='password' id='password' placeholder="Contrasenya" required />
                            </div>
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='confirm-password'>Confirmar contrasenya:</label>
                                <input type='password' name='confirm-password' id='confirm-password' placeholder="Confirmar contrasenya" required />
                                <p class="text-danger small" id="camp-confirmar-contrasenya" style="display: none;">Les contrasenyes no coincideixen.</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='dni'>DNI:</label>
                                <input type='text' name='dni' id='dni' placeholder="Exemple: 12345678A" required />
                            </div>
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='email'>Correu:</label>
                                <input type='email' name='email' id='email' placeholder="Exemple: miquelarumi@gencat.cat" required />
                            </div>
                        </div>

                        <div class="col-12">
                            <input style="width: 100%; color: #fff;" type="submit" value="Donar d'alta" class="btn btn-success mt-4" name="crear" id="crear" disabled/>
                        </div>

                    </div>
		    </div>
		</div>
    </div>

@include('includes.footer')
<script type="text/javascript" src="{{asset('assets/js/confirm-password.js')}}"></script>
