<div class="black"><div class="content">
    <div class="container">
        <div class="content-text">
            <p class="titulo">CUIDA A TUS MASCOTAS CON NOSOTROS</p>
            <p>Mejorando vidas, Aquí mismo</p>
            <button class="btn btn-primary">  @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Home</a>
                    @else
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrar</a>
                    @endif
                    @endauth
                </div>
            @endif</button>
        </div>
    </div>
    <img src="{{ asset('images/5bajoknk3a_3bnswwd8oi_peop2417.png') }}" alt="Veterinary Physician Preparing Hypodermic Needle Injection Sedative for Cat" class="content-image">

</div>
<p class="text-end text-white">Vector Illustration of Veterinary Physician Preparing Hypodermic Needle Injection Sedative for Cat</p>
</div>
