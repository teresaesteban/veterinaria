<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CALENDARIO') }}
        </h2>
    </x-slot>

    <br>

    <div class="grid grid-cols-3 gap-4">
        <div class="col-span-2">
            <div id="calendar"></div>
        </div>
        <div class="col-span-1">
            <div class="next-appointments">
                <h3>Citas Próximas</h3>
                <ul id="next-appointments-list">
                    <!-- Aquí se llenarán las citas próximas -->
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
    <link href="css/styles.css" rel="stylesheet" />
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var calendar = $('#calendar').fullCalendar({
                editable: true,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                events: '/full-calender',
                selectable: true,
                selectHelper: true,
                select: function (start, end, allDay) {
                    var title = prompt('Motivo general de tu cita:');

                    if (title) {
                        var start = $.fullCalendar.formatDate(start, 'Y-MM-DD HH:mm:ss');
                        var end = $.fullCalendar.formatDate(end, 'Y-MM-DD HH:mm:ss');

                        $.ajax({
                            url: "/full-calender/action",
                            type: "POST",
                            data: {
                                title: title,
                                start: start,
                                end: end,
                                type: 'add'
                            },
                            success: function (data) {
                                calendar.fullCalendar('refetchEvents');
                                alert("Cita creada exitosamente");
                            }
                        })
                    }
                },
                eventResize: function (event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                    var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                    var title = event.title;
                    var id = event.id;

                    $.ajax({
                        url: "/full-calender/action",
                        type: "POST",
                        data: {
                            title: title,
                            start: start,
                            end: end,
                            id: id,
                            type: 'update'
                        },
                        success: function (response) {
                            calendar.fullCalendar('refetchEvents');
                            alert("Cita creada exitosamente");
                        }
                    })
                },
                eventDrop: function (event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, 'Y-MM-DD HH:mm:ss');
                    var end = $.fullCalendar.formatDate(event.end, 'Y-MM-DD HH:mm:ss');
                    var title = event.title;
                    var id = event.id;

                    $.ajax({
                        url: "/full-calender/action",
                        type: "POST",
                        data: {
                            title: title,
                            start: start,
                            end: end,
                            id: id,
                            type: 'update'
                        },
                        success: function (response) {
                            calendar.fullCalendar('refetchEvents');
                            alert("Cita creada exitosamente");
                        }
                    })
                },
                eventClick: function (event) {
                    if (confirm("¿Estás seguro de querer cambiarla?")) {
                        var id = event.id;

                        $.ajax({
                            url: "/full-calender/action",
                            type: "POST",
                            data: {
                                id: id,
                                type: "delete"
                            },
                            success: function (response) {
                                calendar.fullCalendar('refetchEvents');
                                alert("Cita borrada exitosamente");
                            }
                        })
                    }
                }
            });

            // Función para cargar las citas próximas
            function loadNextAppointments() {
                $.ajax({
                    url: "/next-appointments", // Ruta para obtener las citas próximas
                    type: "GET",
                    success: function (data) {
                        var appointments = data.appointments;
                        var appointmentsList = $('#next-appointments-list');
                        appointmentsList.empty(); // Limpiar la lista antes de agregar citas nuevas
                        appointments.forEach(function (appointment) {
                            var listItem = '<li class="appointment-item">' + appointment.title + ' - ' + appointment.start + '</li>';
                            appointmentsList.append(listItem);
                        });
                    }
                });
            }

            // Llamar a la función para cargar las citas próximas al inicio
            loadNextAppointments();
        });
    </script>
    <br>
</x-app-layout>
@include('registro.footer')
