@include('includes.head')
<body>
    <div id="landing" class="d-none">true</div>
    @include('includes.nav')

    <!-- Cercador de procediments -->
    <div class="page-header theme-bg-dark py-5 text-center position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto">Guia Interactiva</h1>
		    <div class="page-intro single-col-max mx-auto">Aquí trobaràs la informació necessaria sobre les fases i cadascun dels procediments que existeixen a la implantació d'un tràmit digital.</div>
		    <div class="main-search-box pt-3 d-block mx-auto">
                 <form class="search-form w-100" method="GET" action="{{route('cercador')}}">
		            <input type="text" placeholder="Cerca a la documentació" name="q" class="form-control search-input">
		            <button type="submit" class="btn search-btn" value="q"><i class="fas fa-search"></i></button>
		        </form>
             </div>
	    </div>
    </div>

    <!-- Llistat de fases existents -->
    <div class="page-content">
	    <div class="container">
		    <div class="docs-overview py-5">
			    <div class="row justify-content-center">
                    @foreach ( $fases as $fase )
                        <div class="col-12 col-lg-4 py-3">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">
                                        <span class="theme-icon-holder card-icon-holder me-2">
                                            <i class="fas {{$fase->icona}}"></i>
                                        </span>
                                        <span class="card-title-text">{{$fase->ordre}} &mdash; {{$fase->nom}}</span>
                                    </h5>
                                    <div class="card-text">
                                        {{$fase->descripcio}}
                                    </div>
                                    <a class="card-link-mask" href="/fase/{{$fase->slug}}"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
			    </div>
		    </div>
		</div>
    </div>

    <section class="cta-section text-center py-5 theme-bg-dark position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h3 class="mb-2 text-white mb-3">Creus que necessites més informació?</h3>
		    <div class="section-intro text-white mb-3 single-col-max mx-auto">Si creus que necessites més informació o documentació sobre com funciona el procediment per a la implantació d'un tràmit digital pots consultar els següents tres documents:</div>
		    <div class="pt-3 text-center">
			    <a class="btn btn-light m-1" href="https://espai.interior.gencat.cat/Eines-recursos/Administracio-electronica/Transformaci%C3%B3_Digital/Documents/Guia%20del%20circuit%20d%27implantaci%C3%B3%20d%27un%20tr%C3%A0mit%20digital_v25.pdf" target="_blank">Guia <i class="fas fa-folder-open ml-2"></i></a>
                <a class="btn btn-light m-1" href="#" target="_blank">Guia breu <i class="fas fa-book ml-2"></i></a>
                <a class="btn btn-light m-1" href="https://espai.interior.gencat.cat/Eines-recursos/Administracio-electronica/Transformaci%C3%B3_Digital/Documents/Infografia%20del%20circuit%20d%E2%80%99implantaci%C3%B3%20d%E2%80%99un%20tr%C3%A0mit%20digital.pdf" target="_blank">Infografia <i class="fas fa-file ml-2"></i></a>
		    </div>
	    </div>
    </section><!--//cta-section-->

@include('includes.footer')
