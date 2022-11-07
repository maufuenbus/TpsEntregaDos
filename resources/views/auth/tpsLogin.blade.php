
@include("encabezado")


    
    <header class="header">
        <div class="contenedor">
            <img class="logo" src="../img/tps_web2021.png" alt="logo">
        </div>
    </header>
<body>
    <img class="fondo" src="../img/fondo.jpg" alt="fondo">
    
    <main class="contenido">
        <section class="caja-form-login">
            <div class="login-page">
                <div class="form">
                    <form class="login-form" method="POST" action="">
                        @csrf
                        
                        <input type="text" id="username" name="username" placeholder="Usuario" required>
                        <input type="password" id="password" name="password" placeholder="Contraseña" required>
                        @error('message')
                            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">{{$message}}</p>
                        @enderror
                        <button type="submit">Ingresar</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <!--FOOTER-->
    
        @include("footer")
</body>

