@include('includes.head')

<body class="docs-page">
    @include('includes.nav')

    <div class="docs-wrapper">
	    <div id="docs-sidebar" class="docs-sidebar">
		    <div class="top-search-box d-lg-none p-3">
                <form class="search-form">
		            <input type="text" placeholder="Cerca a la documentació" name="search" class="form-control search-input">
		            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
		        </form>
            </div>
            <!-- Sidebar  -->
		    <nav id="docs-nav" class="docs-nav navbar">
			    <ul class="section-items list-unstyled nav flex-column pb-3">

                    @foreach ( $fases as $fase )

                        <li class="nav-item section-title mb-0 mt-3"><a class="nav-link active" href="/fase/{{$fase->slug}}"><span class="theme-icon-holder me-2"><i class="fas {{$fase->icona}}"></i></span>{{$fase->nom}}</a></li>

                        @foreach ( $procediments as $procediment )
                            @if ($procediment->fase == $fase->id)
                                @if ($actualFase->id == $fase->id)
                                <li class="nav-item"><a class="nav-link scrollto" href="#{{$procediment->slug}}">{{$procediment->nom}}</a></li>
                                @else
                                    <li class="nav-item"><a class="nav-link" href="/fase/{{$fase->slug}}#{{$procediment->slug}}">{{$procediment->nom}}</a></li>
                                @endif
                            @endif
                        @endforeach

                    @endforeach


			    </ul>

		    </nav><!--//docs-nav-->
	    </div><!--//docs-sidebar-->
	    <div class="docs-content">
		    <div class="container">
			    <article class="docs-article" id="section-1">
				    <header class="docs-header">
					    <h1 class="docs-heading mb-2">{{$actualFase->nom}} <span class="docs-time">Actualitzat: {{$actualFase->updated_at}}</span></h1>
                        <p>{{$actualFase->descripcio}}</p>
				    </header>
                    @foreach ( $actualProcediments as $actualProcediment )

				    <section class="docs-section" id="{{$actualProcediment->slug}}">
						<h2 class="section-heading">{{$actualProcediment->nom}}</h2>

                        {!! $actualProcediment->contingut !!}


					</section>

                    @endforeach
			    </article>
                @if ($seguentFase)

                <p>Següent fase: <a href="/fase/{{$seguentFase->slug}}">{{$seguentFase->nom}}</a></p>

                @endif
            </div>
        </div>

@include('includes.footer')
