@include('includes.head')
<body>
    <div id="landing" class="d-none">true</div>
    @include('includes.nav')

    <!-- Capçalera -->
    <div class="page-header theme-bg-dark py-5 text-center position-relative mb-4">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto">Accés a la gestió</h1>
	    </div>
    </div>

    <!-- Formulari d'inici de sessió -->
    <div class="page-content">
	    <div class="container">
		    <div class="docs-overview py-5">
			    <div class="row justify-content-center">
                    <div class="col-12 col-lg-4 py-3">
                        <form class="acces-form" id="acces-form" method='post' action='{{route('login.validacio')}}'>
                            @csrf
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='dni'>DNI:</label>
                                <input type='text' name='dni' id='dni' />
                            </div>
                            <div class='form-control mb-4'>
                                <label class='text-bold' for='password'>Contrasenya:</label>
                                <input type='password' name='password' id='password' />
                            </div>
                            @error('message')
                            <p class='error-message'> {{ $message }} </p>
                            @enderror
                            <div class='form-control'>
                                <input type='submit' class='submit btn btn-primary' id="renovacio-button" value='Accedir'/>
                            </div>
                        </form>

                    </div>
			    </div>
		    </div>
		</div>
    </div>

@include('includes.footer')
