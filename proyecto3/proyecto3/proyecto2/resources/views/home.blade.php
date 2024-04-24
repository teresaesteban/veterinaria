<x-app-layout>
  <x-slot name="header">
    <!-- Cambié el color del texto a blanco -->
    <h2 class="font-semibold text-xl text-white dark:text-green-400 leading-tight">
        {{ __('HOME') }}
    </h2>
  </x-slot>

  <div class="py-12 bg-gray-900 dark:bg-gray-900"> <!-- Mantuve el fondo oscuro -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-gray-800 dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg"> <!-- Mantuve el fondo oscuro -->
        <div class="p-6 text-white dark:text-white"> <!-- Cambié el color del texto a blanco -->
          <!-- Contenido de la página de inicio -->
          <div class="text-center">
            <h1 class="text-4xl font-bold mb-4">Bienvenido a la Clínica Veterinaria</h1>
            <p class="text-lg mb-8">Cuidando de tus mascotas como si fueran de la familia</p>
            <!-- Añadí un espacio para el carrusel de imágenes -->
            <div id="carouselExampleIndicators" class="carousel slide mb-8" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/images/carrusel1.webp" class="d-block w-100" alt="Imagen 1">
                </div>
                <div class="carousel-item">
                  <img src="/images/carrusel3.webp" class="d-block w-100" alt="Imagen 3">
                </div>
                <div class="carousel-item">
                  <img src="/images/carrusel4.webp" class="d-block w-100" alt="Imagen 4">
                </div>
                <!-- Añade más imágenes según necesites -->
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- Cambié el color del botón a blanco -->
            <a href="/servicios" class="bg-white hover:bg-gray-200 text-gray-900 font-bold py-3 px-6 rounded inline-block"> <!-- Cambié el color del botón a blanco -->
                Nuestros Servicios
            </a>
          </div>

          <div class="mt-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md">
              <h2 class="text-2xl font-bold mb-2 text-gray-700 dark:text-blue-400">Experiencia</h2>
              <p class="text-gray-800 dark:text-gray-300">Contamos con más de 20 años de experiencia en el cuidado de mascotas.</p>
          </div>


            <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md"> <!-- Mantuve el color del fondo -->
              <h2 class="text-2xl font-bold mb-2 text-gray-700 dark:text-white">Equipo Profesional</h2> <!-- Cambié el color del texto a blanco -->
              <p class="text-gray-500 dark:text-gray-300">Nuestro equipo está compuesto por veterinarios altamente capacitados y amantes de los animales.</p> <!-- Cambié el color del texto a gris claro -->
            </div>
            <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md"> <!-- Mantuve el color del fondo -->
              <h2 class="text-2xl font-bold mb-2 text-gray-700 dark:text-white">Atención Personalizada</h2> <!-- Cambié el color del texto a blanco -->
              <p class="text-gray-500 dark:text-gray-300">Nos preocupamos por cada mascota como si fuera nuestra, ofreciendo un trato personalizado y dedicado.</p> <!-- Cambié el color del texto a gris claro -->
            </div>
          </div>

          <div class="mt-12">
            <h2 class="text-2xl font-bold mb-4">Nuestros Servicios</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
              <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md"> <!-- Mantuve el color del fondo -->
                <h3 class="text-xl font-bold mb-2 text-gray-700 dark:text-white">Consultas Médicas</h3> <!-- Cambié el color del texto a blanco -->
                <p class="text-gray-500 dark:text-gray-300">Realizamos consultas médicas completas para diagnosticar y tratar cualquier problema de salud que pueda tener tu mascota.</p> <!-- Cambié el color del texto a gris claro -->
              </div>
              <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md"> <!-- Mantuve el color del fondo -->
                <h3 class="text-xl font-bold mb-2 text-gray-700 dark:text-white">Vacunaciones</h3> <!-- Cambié el color del texto a blanco -->
                <p class="text-gray-500 dark:text-gray-300">Ofrecemos un completo programa de vacunación para prevenir enfermedades comunes en mascotas.</p> <!-- Cambié el color del texto a gris claro -->
              </div>
              <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md"> <!-- Mantuve el color del fondo -->
                <h3 class="text-xl font-bold mb-2 text-gray-700 dark:text-white">Cirugías</h3> <!-- Cambié el color del texto a blanco -->
                <p class="text-gray-500 dark:text-gray-300">Realizamos cirugías de rutina y especializadas con equipos modernos y bajo la supervisión de nuestros expertos veterinarios.</p> <!-- Cambié el color del texto a gris claro -->
              </div>
              <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md"> <!-- Mantuve el color del fondo -->
                <h3 class="text-xl font-bold mb-2 text-gray-700 dark:text-white">Odontología</h3> <!-- Cambié el color del texto a blanco -->
                <p class="text-gray-500 dark:text-gray-300">Cuidamos la salud dental de tu mascota con limpiezas, extracciones y tratamientos periodontales.</p> <!-- Cambié el color del texto a gris claro -->
              </div>
              <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md"> <!-- Mantuve el color del fondo -->
                <h3 class="text-xl font-bold mb-2 text-gray-700 dark:text-white">Exámenes de Laboratorio</h3> <!-- Cambié el color del texto a blanco -->
                <p class="text-gray-500 dark:text-gray-300">Contamos con laboratorio propio para realizar análisis clínicos, pruebas de diagnóstico y seguimiento de tratamientos.</p> <!-- Cambié el color del texto a gris claro -->
              </div>
              <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md"> <!-- Mantuve el color del fondo -->
                <h3 class="text-xl font-bold mb-2 text-gray-700 dark:text-white">... y mucho más</h3> <!-- Cambié el color del texto a blanco -->
                <p class="text-gray-500 dark:text-gray-300">Además de los servicios mencionados, ofrecemos una amplia gama de servicios adicionales para el bienestar integral de tu mascota.</p> <!-- Cambié el color del texto a gris claro -->
              </div>
            </div>
          </div>

          <div class="mt-12">
            <h2 class="text-2xl font-bold mb-4">Contáctanos</h2>
            <p class="text-lg mb-4 text-white dark:text-white">¿Listo para agendar una cita? ¡Consigue la tuya ahora mismo!</p> <!-- Cambié el color del texto a blanco -->
            <!-- Cambié el color del botón a blanco -->
            <a href="/calendario" class="bg-white hover:bg-gray-200 text-gray-900 font-bold py-3 px-6 rounded inline-block"> <!-- Cambié el color del botón a blanco -->
                Consigue cita
            </a>
          </div>
          <!-- Fin del contenido de la página de inicio -->
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
@include('registro.footer')
