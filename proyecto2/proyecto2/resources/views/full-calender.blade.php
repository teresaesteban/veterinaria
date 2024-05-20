<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('CALENDARIO') }}
        </h2>
    </x-slot>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>New Age - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
      </head>
      <header class="py-5">
        <div class="container px-5 pb-5">
            <div class="row gx-5 align-items-center">
                <div class="col-xxl-5">
                    <!-- Header text content-->
                    <div class="text-center text-xxl-start">
                        <div class="badge bg-gradient-primary-to-secondary text-white mb-4"><div class="text-uppercase">CALENDARIO</div></div>
                        <div class="fs-3 fw-light text-muted">Tu calendario facíl de usar</div>
                        <h1 class="display-3 fw-bolder mb-5"><span class="text-white d-inline">Concerta citas y consulta eventos </span></h1>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                            <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder" href="#ir">Crea Cita</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-7">
                    <!-- Header profile picture-->
                    <div class="d-flex justify-content-center mt-5 mt-xxl-0">

                            <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                            <!-- Watch a tutorial on how to do this on YouTube (link)-->
                            <img class="profile-img" src="images/calendarioe.png" alt="..." width="70%"/>


                    </div>
                </div>
            </div>
        </div>
    </header>
      <body id="page-top">
        <!-- App features section-->
<!-- Sección de capacidades del calendario -->    <!-- App features section-->
        <section id="calendar-features">
            <div class="container px-5">
                <div class="row justify-content-center">
                    <!-- Añadir citas -->
                    <div class="col-lg-4 col-md-4 mb-5">
                        <div class="text-center">
                            <i class="bi-plus-circle icon-feature text-gradient d-block mb-3"></i>
                            <h3 class="font-alt">Añadir Citas</h3>
                            <p class="text-muted mb-0">Haz clic en el calendario para seleccionar un rango de fechas y añadir una nueva cita.</p>
                        </div>
                    </div>
                    <!-- Editar citas -->
                    <div class="col-lg-4 col-md-4 mb-5">
                        <div class="text-center">
                            <i class="bi-pencil icon-feature text-gradient d-block mb-3"></i>
                            <h3 class="font-alt">Editar Citas</h3>
                            <p class="text-muted mb-0">Puedes arrastrar y soltar las citas para cambiar su fecha y hora.</p>
                        </div>
                    </div>
                    <!-- Borrar citas -->
                    <div class="col-lg-4 col-md-4 mb-5">
                        <div class="text-center">
                            <i class="bi-trash icon-feature text-gradient d-block mb-3"></i>
                            <h3 class="font-alt">Borrar Citas</h3>
                            <p class="text-muted mb-0">Haz clic en una cita para eliminarla del calendario.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


 <br>  <h1 class="display-5 lh-6 mb-3 text-center">Calendario clínica veterinaria</h1>
 <!-- Agrega un contenedor para centrar la imagen -->
 <div class="d-flex justify-content-center">
     <img src="images/title.jpg" alt="Calendario" style="width: 10%;" />
 </div><div id="ir"></div>
 <div id="calendar"></div>

 <br>
 <!-- Call to Action--><!-- Call to Action-->
<section class="call-to-action text-white text-center" id="contact">
    <div class="container position-relative">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <h2 class="mb-4">¿Has tenido algún problema? Introduce tu correo electrónico y nos pondremos en contacto</h2>
                <!-- Contact form-->
                <form class="form-subscribe" id="contactFormFooter" method="POST" action="{{ route('contact.store') }}">
                    @csrf
                    <!-- Email address input-->
                    <div class="row">
                        <div class="col">
                            <input class="form-control form-control-lg" name="email" id="emailAddressBelow" type="email" placeholder="Correo electrónico" required />
                        </div>
                        <div class="col-auto"><button class="btn btn-primary btn-lg" type="submit">Enviar</button></div>
                    </div>
                    <!-- Submit success message-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">¡Correo electrónico enviado con éxito!</div>
                            <p>Nos pondremos en contacto contigo pronto.</p>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">¡Error al enviar el correo electrónico!</div></div>
                </form>
            </div>
        </div>
    </div>
</section>

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
                    events: @json($events),
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
                                    calendar.fullCalendar('renderEvent', data, true); // Renderiza el nuevo evento en el calendario
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
                                alert("Cita actualizada exitosamente");
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
                                alert("Cita actualizada exitosamente");
                            }
                        })
                    },

                    eventClick: function (event) {
                        if (confirm("¿Estás seguro de querer cancelarla?")) {
                            var id = event.id;

                            $.ajax({
                                url: "/full-calender/action",
                                type: "POST",
                                data: {
                                    id: id,
                                    type: "delete"
                                },
                                success: function (response) {
                if (response.error) {
                    alert(response.error);
                } else {
                    calendar.fullCalendar('removeEvents', event.id);
                    alert("Cita borrada exitosamente");
                }
            },
                                error: function (xhr, status, error) {
                                    if (xhr.status == 403) {
                                        alert("No tienes permiso para borrar este evento.");
                                    } else {
                                        alert("Error: " + xhr.responseText);
                                    }
                                }
                            })
                        }
                    }
                });
            });
        </script>

    </body>
</x-app-layout>

@include('registro.footer')
