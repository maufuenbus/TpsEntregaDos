@include("encabezado")
<body>
    <!--==============CABECERA======================-->
    @include("headerMenu")
    <!--================CUERPO======================-->
    <main class="contenido-cuerpo">
        <section class="menu-nav-est">
            <div class="naveg-reg-veh">
            
            <!--================MODALS======================-->  
            @include("modals")
        </section>
        <!------------------- CONTENIDO DE PAGINA ----------------------------------------------------->
        <div class="titulo-pag" >
            <div class="titulo-estacionamiento">
                <h2>Estacionamiento Arturo Prat</h2>
            </div>
            <div class="cont-antvar">
                <div class="contador">
                    <h3 class="contador-estado">Total: </h3>
                </div>
                <div class="contador">
                    <h3 class="contador-estado">Disponibles: </h3>
                </div>
                <div class="contador">
                    <h3 class="contador-estado" id="diferencia1">Usados: </h3>
                </div>                    
            </div>
            <div>
                <section class="grilla-reg-ing" id='area'>
                    @include('prat')                                
                </section>
            </div>
        </div>
        {{--  <script src="../js/estacionamiento.js"></script>  --}}
        <script src="../js/funcionestacionamiento.js"></script>
        <script src="../js/funcionBotones.js"></script>
    </main>
    <!--FOOTER-->
    @include('footer')
</body>

</html>