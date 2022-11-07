<header class="header">
    
    <div class="contenedor">
        <img class="logo" src="../img/tps_web2021.png" alt="logo">
        <input type="checkbox" id="menu-bar">
        <label class="icon-menu" for="menu-bar"></label>
    @if(auth()->check())
        <nav class="naveg">
            <a class="navegador" href="gestionestacionamientovaras">Gestion de Estacionamientos</a>
            @if(Auth::check() && Auth::user()->role == "admin")
                <a class="navegador" href="gestionUsuario">Administrador de usuario</a>
            @endcan
                
            
            
            <a class="navegador" href="reportes">Reportes</a>
            
        </nav>
        <p class="text-xl ml-15px-fr">Bienvenido <br><b> {{auth()->user()->name.' '.auth()->user()->apellidop}}</b></p>
    </div>
    
        @else
        <nav class="naveg">
            <button class="cerrar_sesion" id="cerrar_sesion">Abrir sesión</button>
           
        </nav>
        
        @endif
</header>