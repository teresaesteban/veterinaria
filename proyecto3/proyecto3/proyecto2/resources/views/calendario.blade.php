<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('CALENDARIO') }}
        </h2>
    </x-slot>

    <meta charset="UTF-8"> <!-- Agregar esta línea -->

    @php
        // Obtenemos el mes y el año actual
        $currentMonth = date('n');
        $currentYear = date('Y');

        // Obtenemos el nombre del mes
        $monthName = date('F', mktime(0, 0, 0, $currentMonth, 1, $currentYear));

        // Obtenemos el número de días del mes actual
        $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $currentMonth, $currentYear);

        // Obtenemos los nombres de los días de la semana en español
        $daysOfWeek = ['lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado', 'domingo'];
    @endphp

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                    <div class="text-center text-lg font-bold mb-4">{{ $monthName }} {{ $currentYear }}</div>
                    <table class="w-full">
                        <thead>
                            <tr>
                                @foreach ($daysOfWeek as $day)
                                    <th class="border border-gray-700 py-2 px-4">{{ substr($day, 0, 10) }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $startDay = date('N', strtotime("$currentYear-$currentMonth-01"));
                                $totalDays = $daysInMonth + $startDay - 1;
                                $dayCounter = 1;
                            @endphp
                            @for ($i = 0; $i < $totalDays + ($totalDays >= 5 ? 2 : 0); $i++)
                                @if ($i % 7 == 0)
                                    <tr>
                                @endif
                                @if ($i < $startDay - 1 || $i >= $totalDays)
                                    <td class="border border-gray-700 py-2 px-4"></td>
                                @else
                                    <td class="border border-gray-700 py-2 px-4">
                                        <div class="relative pb-12">
                                            <div class="bg-gray-700 border border-gray-700 rounded-lg px-4 py-2 cursor-pointer"
                                                onclick="showSchedule({{ $dayCounter }})">
                                                <div class="text-lg font-bold">{{ $dayCounter }}</div>
                                                <button class="text-sm font-medium text-white focus:outline-none"
                                                    onclick="showHours({{ $dayCounter }})">Seleccionar hora</button>
                                            </div>
                                        </div>
                                        @php $dayCounter++; @endphp
                                    </td>
                                @endif
                                @if ($i % 7 == 6)
                                    </tr>
                                @endif
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="schedule" class="hidden">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-4">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white">
                    <h2 class="text-lg font-semibold mb-4">Horario para el día <span id="selectedDay"></span></h2>
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="border border-gray-700 py-2 px-4">Hora</th>
                                <th class="border border-gray-700 py-2 px-4">Evento</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($hour = 8; $hour <= 18; $hour++)
                                <tr>
                                    <td class="border border-gray-700 py-2 px-4">{{ str_pad($hour, 2, '0', STR_PAD_LEFT) }}:00</td>
                                    <td class="border border-gray-700 py-2 px-4">
                                        <button class="text-sm font-medium text-white focus:outline-none"
                                            onclick="confirmHour({{ $hour }})">Seleccionar</button>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                    <div id="confirmation" class="hidden mt-4">
                        <p>¿Estás seguro de seleccionar esta hora?</p>
                        <button class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded mr-2"
                            onclick="saveDate()">Aceptar</button>
                        <button class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded"
                            onclick="cancelSelection()">Cancelar</button>
                    </div>
                    <div id="message" class="hidden mt-4"></div>
                </div>
            </div>
        </div>
    </div>

    @include('registro.footer')

    <script>
        let selectedDay = 0;
        let selectedHour = 0;

        function showSchedule(day) {
            selectedDay = day;
            document.getElementById('selectedDay').innerText = day;
            document.getElementById('schedule').classList.remove('hidden');
        }

        function showHours(day) {
            selectedDay = day;
            document.getElementById('selectedDay').innerText = day;
            document.getElementById('confirmation').classList.remove('hidden');
        }

        function confirmHour(hour) {
            selectedHour = hour;
            document.getElementById('confirmation').classList.remove('hidden');
        }

        function cancelSelection() {
            document.getElementById('confirmation').classList.add('hidden');
        }

        function saveDate() {
            document.getElementById('confirmation').classList.add('hidden');
            let formData = new FormData();
            formData.append('fecha', '{{ $currentYear }}-{{ $currentMonth }}-' + selectedDay);
            formData.append('hora', selectedHour);

            fetch('/guardar-hora', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            })
            .then(response => response.json())
            .then(data => {
                document.getElementById('message').classList.remove('hidden');
                if (data.success) {
                    document.getElementById('message').innerText = 'La hora ha sido guardada exitosamente.';
                } else {
                    document.getElementById('message').innerText = 'Ha ocurrido un error al guardar la hora.';
                }
            });
        }
        // Define la fecha y hora de la cita programada
        const citaProgramada = new Date('2024-04-25T08:00:00'); // Cambia la fecha y hora según tu cita

        // Función para mostrar el mensaje cuando llegue el momento
        function mostrarMensaje() {
            const ahora = new Date();
            if (ahora >= citaProgramada) {
                // Muestra el mensaje
                const mensaje = document.createElement('div');
                mensaje.innerText = '¡Cita programada!';
                document.body.appendChild(mensaje);
            }
        }

        // Llama a la función cada segundo para verificar si ha llegado la hora
        setInterval(mostrarMensaje, 1000);
    </script>
</x-app-layout>
