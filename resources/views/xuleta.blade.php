@include('includes.head')
<body>
    <div id="landing" class="d-none">true</div>
    @include('includes.nav')

    <!-- Cercador de procediments -->
    <div class="page-header theme-bg-dark py-5 text-center position-relative">
	    <div class="theme-bg-shapes-right"></div>
	    <div class="theme-bg-shapes-left"></div>
	    <div class="container">
		    <h1 class="page-heading single-col-max mx-auto">Xuleta</h1>
	    </div>
    </div>

    <!-- Llistat de fases existents -->
    <div class="page-content">
	    <div class="container">
		    <div class="docs-overview py-5">

                <div class="row justify-content-center mt-5">
                    <p>Aquí trobaràs els elements per continguts més avançats i que no hi són disponibles al constructor.</p>
                    <p>Pots copiar el codi des d'aquí i enganxar-ho al codi HTML del constructor, que el podràs obrir amb el botó <>.</p>
                </div>

                <!-- Un exemple -->
                <div class="row justify-content-center mt-5">
                    <h3>Botó</h3>
                </div>
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-6 col-12">
                        <textarea style="width: 100%; resize: none;" rows="4" readonly>
<a href='enllaç' target="_blank" class='btn btn-success mb-3'>
    <i class="fa-solid fa-link"></i>
    Text del botó
</a></textarea>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="capsa-demostracio p-3" style="border: 1px solid black; border-radius: 8px;">
                            <a href='http://enllaç' target="_blank" class='btn btn-success mb-3'>
                                <i class="fa-solid fa-link"></i>
                                Text del botó
                            </a>
                        </div>
                    </div>
                </div>

                <hr/>

                <!-- Un exemple -->
                <div class="row justify-content-center mt-5">
                    <h3>Advertencia</h3>
                </div>
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-6 col-12">
<textarea style="width: 100%; resize: none;" rows="11" readonly>
<div class="callout-block callout-block-warning">
    <div class="content">
        <h4 class="callout-title">
            <span class="callout-icon-holder me-1">
                <i class='fas fa-bullhorn'></i>
            </span>
            Títol de l'advertencia
        </h4>
        <p>Text de l'advertencia.</p>
    </div>
</div></textarea>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="capsa-demostracio p-3" style="border: 1px solid black; border-radius: 8px;">
                            <div class="callout-block callout-block-warning">
                                <div class="content">
                                    <h4 class="callout-title">
                                        <span class="callout-icon-holder me-1">
                                            <i class='fas fa-bullhorn'></i>
                                        </span>
                                        Títol de l'advertencia
                                    </h4>
                                    <p>Text de l'advertencia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Un exemple -->
                <div class="row justify-content-center mt-5">
                    <h3>Taula</h3>
                </div>
                <div class="row justify-content-center mb-5">
                    <div class="col-lg-6 col-12">
                <textarea style="width: 100%; resize: none;" rows="11" readonly>
</textarea>
                    </div>

                </div>


		    </div>
		</div>
    </div>


@include('includes.footer')
