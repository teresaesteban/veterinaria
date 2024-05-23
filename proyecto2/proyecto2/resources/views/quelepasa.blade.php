<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"id="header-title">
            {{ __('¿QUÉ LE PASA A MI MASCOTA?') }}
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
                            <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                                <div class="text-uppercase" id="badge-title">preguntas</div>
                            </div>
                            <div class="fs-3 fw-light text-muted" id="subtitle">Podrás ver las preguntas frecuentes, aceder a las últimas consultas o hacer tu própia pregunta</div>
                            <h1 class="display-3 fw-bolder mb-5"><span class="text-white d-inline" id="main-title">Solicita información de nuestros especialistas </span></h1>

                        </div>
                    </div>

                    <div class="col-xxl-7">
                        <!-- Header profile picture-->
                        <div class="d-flex justify-content-center mt-5 mt-xxl-0">

                            <!-- Primera "cajita" -->
                            <div class="button-box red">
                                <a href="#preguntas-frecuentes" class="text-white" id="faq-link">Preguntas Frecuentes</a>
                            </div>

                            <!-- Segunda "cajita" -->
                            <div class="button-box blue">
                                <x-nav-link :href="route('mostrar-consultas')" :active="request()->routeIs('mostrar-consultas')" class="text-white" id="consultations-link">
                                    Consultas
                                </x-nav-link>
                            </div>

                            <!-- Tercera "cajita" -->
                            <div class="button-box green">
                                <a href="#consultas" class="text-white" id="ask-question-link">Haz tu propia consulta</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>
    <section class="content-section" id="preguntas-frecuentes">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading text-center">
                <h3 class="text-secondary mb-0" id="hover-title">Pasa el cursor</h3>
                <h2 class="mb-5" id="faq-title">Preguntas Frecuentes</h2>
            </div>
            <div class="row gx-0 ">
                <div class="col-lg-6 ">
                    <a class="portfolio-item bg-gradient-primary-to-secondary" href="#!" onmouseover="showParagraph(this)">
                        <div class="caption ">
                            <div class="caption-content text-white">
                                <div class="h2" id="faq1-title">¿Por qué esterilizar a mi mascota antes de los dos años?</div>
                                <p class="mb-0" id="faq1-content">Si tenemos decidido no criar con ellas, los beneficios a largo plazo son muchos si decidimos esterilizarlas entre los siete meses y los dos años. Cuando hablamos de las hembras prevenimos los tumores de mama, las infecciones de matriz, los quistes ováricos y los embarazos psicológicos. Cuando hablamos de los machos prevenimos problemas de comportamiento (marcaje urinario, escapismo, agresividad), prostatitis y tumores testiculares. En Zarpa para la esterilización utilizamos técnicas de cirugía sin sangrado junto con protocolos para evitar el dolor y así asegurar una pronta recuperación.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item bg-gradient-primary-to-secondary" href="#!" onmouseover="showParagraph(this)">
                        <div class="caption">
                            <div class="caption-content text-white">
                                <div class="h2" id="faq2-title">¿Cómo evolucionan los problemas dentales de los perros/gatos?</div>
                                <p class="mb-0" id="faq2-content">Dientes sanos: son blancos y no presentan acumulaciones o decoloraciones, especialmente en los caninos e incisivos. Además, las encías son rosas y el aliento fresco. La placa dental: cuando los perros comen, los restos de alimento se acumulan en la línea de las encías y combinados con la saliva, forman una capa que se adhiere fuertemente en la base de los dientes. Conforme se va formando, la placa se introduce debajo de la encía provocando lesiones. El sarro y la gingivitis: el sarro resulta de la calcificación producida por la placa dental y la saliva. Al mismo tiempo, las bacterias del sarro rodean e invaden el diente y lo destruyen. Sin tratamiento, las inflamaciones provocan la pérdida de los dientes y la atrofia de los huesos. Enfermedad/inflamación progresiva: las bacterias pueden provocar gingivitis muy dolorosas. Una infección de la boca disminuye las defensas inmunitarias, y las bacterias pasan a la circulación sanguínea, pudiendo provocar infecciones a otros órganos.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item bg-gradient-primary-to-secondary" href="#!" onmouseover="showParagraph(this)">
                        <div class="caption">
                            <div class="caption-content text-white">
                                <div class="h2" id="faq3-title">¿Cómo combatir de las pulgas a mi mascota?</div>
                                <p class="mb-0" id="faq3-content">Es muy importante combatirlos, pues son parásitos y transmiten enfermedades a las mascotas y a las personas. Nuestros consejos son: Usar productos de última generación, son los únicos realmente efectivos. Siempre es mejor usar tratamientos preventivos, pero si ya tenemos el problema, sobre todo en el caso de las pulgas, habrá que tratar tanto al animal como el ambiente.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item bg-gradient-primary-to-secondary" href="#!" onmouseover="showParagraph(this)">
                        <div class="caption">
                            <div class="caption-content text-white">
                                <div class="h2" id="faq4-title">¿Cuándo le pongo el collar antiparasitario a mi perro?</div>
                                <p class="mb-0" id="faq4-content">Debido al cambio climático ya no existe estacionalidad, por lo tanto es recomendable que lleve collar antiparasitario todo el año o cualquier presentación de antiparasitario externo, es decir, pipetas, sprays …</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item bg-gradient-primary-to-secondary" href="#!" onmouseover="showParagraph(this)">
                        <div class="caption">
                            <div class="caption-content text-white">
                                <div class="h2" id="faq5-title">¿Mi perr@ o mi gat@ tendrán problemas de comportamiento si no los esterilizo?</div>
                                <p class="mb-0" id="faq5-content">Problemas de comportamiento En el caso de las gatas, los momentos del celo pueden pasar inadvertidos o convertirse en una tortura de ruidos para usted y sus vecinos así como problemas de estrés para la gata. Algo semejante sucede en los gatos macho, donde su principal problema suele ser el marcaje urinario por distintas zonas de la casa. Las perras en celo deben ser sacadas durante su periodo de ovulación siempre atadas ya que, además de que las pueden montar, suelen tener más tendencia a escaparse. Las secreciones vulvares pueden ser incómodas. Algunas de ellas si sufren embarazo psicológico tienen problemas de comportamiento y algunas secreción de leche por las mamas. Los perros macho son más escapistas cuando las hembras están en celo, haciéndose casi imposible que respondan a nuestra llamada en esos momentos. Los problemas de agresividad entre muchos se ven reducidos con la castración y generalmente desaparecen, esto depende entre otras cosas de la edad del perro en el momento de la cirugía.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <a class="portfolio-item bg-gradient-primary-to-secondary" href="#!" onmouseover="showParagraph(this)">
                        <div class="caption">
                            <div class="caption-content text-white ">
                                <div class="h2 text-white" id="faq6-title">Si mi perro tiene sarro en los dientes, ¿qué debería de hacer? </div>
                                <p class="mb-0" id="faq6-content">El sarro está pegado al diente y aparece como consecuencia de no haber eliminado la placa bacteriana inicial. Dicho sarro se va acumulando y va provocando una retracción de la encía hasta llegar incluso a provocar la caída de la pieza dental. Para quitar totalmente la placa de sarro se tiene que realizar una limpieza dental mediante ultrasonidos. Estas limpiezas las realizamos en Zarpa previa sedación de la mascota. Primero quitamos la placa de sarro con ultrasonidos, después eliminamos la placa bacteriana entre el diente y la encía y finalmente pulimos los dientes para reparar los daños en el esmalte dental. Después de hacer la limpieza dental, continuamos con las medidas preventivas para evitar o retrasar en lo posible el acumulo de nueva placa bacteriana.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" id="consultas">
        <div class="container px-5">
            <!-- Contact form-->
            <div class="rounded-4 py-5 px-4 px-md-5">
                <div class="text-center mb-5">
                    <div class="d-flex justify-content-center text-center">
                        <img class="profile-img" src="images/pikaso_reimagine_digital-painting-A-chubby-gray-cat-with-a-cute-fri__1_-removebg-preview.png" alt="..." width="15%" />
                    </div>
                    <h1 class="fw-bolder" id="main-titlee">¿Qué le ocurre a tu mascota?</h1>
                    <p class="lead fw-normal text-muted mb-0"id="titlee">Si tienes alguna duda puedes ponerte en contacto con nuestros especialistas</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">

                        <form action="{{ route('guardar-consulta') }}" method="POST" enctype="multipart/form-data">>
                            @csrf
                            <div class="mb-4">
                                <label for="nombre" class="block text-gray-700 text-white font-bold mb-2"id="nombre">Nombre de tu mascota:</label>
                                <input type="text" name="nombre" id="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:text-gray-300" required>
                                @error('nombre')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="especie" class="block text-gray-700 text-white font-bold mb-2"id="especie">Especie:</label>
                                <input type="text" name="especie" id="especie" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:text-gray-300" required>
                                @error('especie')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="edad" id="edad"class="block text-gray-700 text-white font-bold mb-2">Edad:</label>
                                <input type="number" name="edad" id="edad" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:text-gray-300" required>
                                @error('edad')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="sintomas" id="sintomas"class="block text-gray-700 text-white font-bold mb-2">Síntomas:</label>
                                <textarea name="sintomas" id="sintomas" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:text-gray-300" required></textarea>
                                @error('sintomas')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="imagen" class="block text-gray-700 text-white font-bold mb-2" id="imagen">Subir imagen:</label>
                                <input type="file" name="imagen" id="imagen" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:text-gray-300">
                                @error('imagen')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="comentarios"  id="comentarios"class="block text-gray-700 text-white font-bold mb-2">Comentarios adicionales:</label>
                                <textarea name="comentarios" id="comentarios" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:text-gray-300"></textarea>
                                @error('comentarios')
                                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex items-center justify-between">
                                <button type="submit" class="bg-gradient-primary-to-secondary text-white text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline hover:bg-gray-900 dark:bg-black dark:text-gray-300 dark:hover:bg-gray-800"id="ask-question">Enviar consulta</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
@include('registro.footer')
<script>
    function translatePage(language) {const translations = {
    en: {
        'header-title': 'WHAT\'S WRONG WITH MY PET?',
        'badge-title': 'questions',
        'subtitle': 'You can see frequently asked questions, access the latest queries or ask your own question',
        'main-title': 'Request information from our specialists',
        'faq-link': 'Frequently Asked Questions',
        'consultations-link': 'Consultations',
        'ask-question-link': 'Ask your own question',
        'hover-title': 'Hover',
        'faq-title': 'Frequently Asked Questions',
        'faq1-title': 'Why sterilize my pet before the age of two?',
        'faq1-content': 'If we have decided not to breed them, the long-term benefits are many if we decide to sterilize them between seven months and two years. When we talk about females, we prevent breast tumors, uterine infections, ovarian cysts, and false pregnancies. When we talk about males, we prevent behavioral problems (urine marking, escapism, aggression), prostatitis, and testicular tumors. At Zarpa, for sterilization, we use bloodless surgery techniques along with protocols to avoid pain and ensure a prompt recovery.',
        'faq2-title': 'How do dental problems in dogs/cats progress?',
        'faq2-content': 'Healthy teeth: they are white and do not show accumulations or discolorations, especially in the canines and incisors. In addition, the gums are pink and the breath is fresh. Dental plaque: when dogs eat, food debris accumulates at the gum line and combined with saliva, forms a layer that adheres strongly at the base of the teeth. As it forms, the plaque gets under the gum causing lesions. Tartar and gingivitis: tartar results from the calcification produced by dental plaque and saliva. At the same time, the bacteria from the tartar surround and invade the tooth and destroy it. Without treatment, inflammation causes tooth loss and bone atrophy. Progressive disease/inflammation: bacteria can cause very painful gingivitis. A mouth infection lowers immune defenses, and bacteria enter the bloodstream, potentially causing infections in other organs.',
        'faq3-title': 'How to fight fleas on my pet?',
        'faq3-content': 'It is very important to combat them, as they are parasites and transmit diseases to pets and people. Our tips are: Use the latest generation products, they are the only really effective ones. It is always better to use preventive treatments, but if we already have the problem, especially in the case of fleas, we must treat both the animal and the environment.',
        'faq4-title': 'When do I put the anti-parasitic collar on my dog?',
        'faq4-content': 'Due to climate change there is no seasonality, so it is recommended that they wear an anti-parasitic collar all year round or any external anti-parasitic presentation, that is, pipettes, sprays ...',
        'faq5-title': 'Will my dog or cat have behavioral problems if I don\'t sterilize them?',
        'faq5-content': 'Behavioral problems In the case of cats, moments of heat can go unnoticed or become a torture of noises for you and your neighbors as well as stress for the animal. In the case of dogs, psychological pregnancies can occur. In the case of males, it is most likely that when there are females nearby, they will try to escape or fight with other males to try to get to them. As we have already mentioned, it is best to sterilize them.',
        'faq6-title': 'If my dog has tartar on their teeth, what should I do?',
'faq6-content': 'Tartar is attached to the tooth and appears as a result of not removing the initial bacterial plaque. This tartar accumulates and causes a recession of the gums, eventually leading to tooth loss. To completely remove tartar plaque, a dental cleaning using ultrasound must be performed. We perform these cleanings at Zarpa after sedating the pet. First, we remove the tartar plaque with ultrasound, then we eliminate the bacterial plaque between the tooth and the gum, and finally, we polish the teeth to repair any damage to the dental enamel. After the dental cleaning, we continue with preventive measures to avoid or delay the accumulation of new bacterial plaque as much as possible.',
'especie':'Species',
'nombre':'Name of the pet',
'edad':'Age of the pet',
'sintomas':'Symptoms',
'comentarios':'Comments',
'main-titlee':'What\'s wrong with my pet?',
'titlee':'If you have any questions, please contact us',
'ask-question':'Send your question'

    },
    es: {
        'header-title': '¿QUÉ LE PASA A MI MASCOTA?',
        'badge-title': 'preguntas',
        'subtitle': 'Podrás ver las preguntas frecuentes, acceder a las últimas consultas o hacer tu propia pregunta',
        'main-title': 'Solicita información de nuestros especialistas',
        'faq-link': 'Preguntas Frecuentes',
        'consultations-link': 'Consultas',
        'ask-question-link': 'Haz tu propia consulta',
        'hover-title': 'Pasa el cursor',
        'faq-title': 'Preguntas Frecuentes',
        'faq1-title': '¿Por qué esterilizar a mi mascota antes de los dos años?',
        'faq1-content': 'Si tenemos decidido no criar con ellas, los beneficios a largo plazo son muchos si decidimos esterilizarlas entre los siete meses y los dos años. Cuando hablamos de las hembras prevenimos los tumores de mama, las infecciones de matriz, los quistes ováricos y los embarazos psicológicos. Cuando hablamos de los machos prevenimos problemas de comportamiento (marcaje urinario, escapismo, agresividad), prostatitis y tumores testiculares. En Zarpa para la esterilización utilizamos técnicas de cirugía sin sangrado junto con protocolos para evitar el dolor y así asegurar una pronta recuperación.',
        'faq2-title': '¿Cómo evolucionan los problemas dentales de los perros/gatos?',
        'faq2-content': 'Dientes sanos: son blancos y no presentan acumulaciones o decoloraciones, especialmente en los caninos e incisivos. Además, las encías son rosas y el aliento fresco. La placa dental: cuando los perros comen, los restos de alimento se acumulan en la línea de las encías y combinados con la saliva, forman una capa que se adhiere fuertemente en la base de los dientes. Conforme se va formando, la placa se introduce debajo de la encía provocando lesiones. El sarro y la gingivitis: el sarro resulta de la calcificación producida por la placa dental y la saliva. Al mismo tiempo, las bacterias del sarro rodean e invaden el diente y lo destruyen. Sin tratamiento, las inflamaciones provocan la pérdida de los dientes y la atrofia de los huesos. Enfermedad/inflamación progresiva: las bacterias pueden provocar gingivitis muy dolorosas. Una infección de la boca disminuye las defensas inmunitarias, y las bacterias pasan a la circulación sanguínea, pudiendo provocar infecciones a otros órganos.',
        'faq3-title': '¿Cómo combatir las pulgas a mi mascota?',
        'faq3-content': 'Es muy importante combatirlos, pues son parásitos y transmiten enfermedades a las mascotas y a las personas. Nuestros consejos son: Usar productos de última generación, son los únicos realmente efectivos. Siempre es mejor usar tratamientos preventivos, pero si ya tenemos el problema, sobre todo en el caso de las pulgas, habrá que tratar tanto al animal como el ambiente.',
        'faq4-title': '¿Cuándo le pongo el collar antiparasitario a mi perro?',
        'faq4-content': 'Debido al cambio climático ya no existe estacionalidad, por lo tanto es recomendable que lleve collar antiparasitario todo el año o cualquier presentación de antiparasitario externo, es decir, pipetas, sprays …',
        'faq5-title': '¿Mi perr@ o mi gat@ tendrán problemas de comportamiento si no los esterilizo?',
        'faq5-content': 'Problemas de comportamiento En el caso de las gatas, los momentos del celo pueden pasar inadvertidos o convertirse en una tortura de ruidos para usted y sus vecinos así como estrés para el animal. En el caso de las perras pueden producirse embarazos psicológicos. En el caso de los machos, lo más probable es que cuando haya hembras cerca, intente escaparse o se pelee con otros machos para intentar acceder a ellas. Como ya hemos comentado, lo mejor es esterilizarlos.',
        'faq6-title':'Si mi perro tiene sarro en los dientes, ¿qué debería de hacer?',
        'faq6-content':'El sarro está pegado al diente y aparece como consecuencia de no haber eliminado la placa bacteriana inicial. Dicho sarro se va acumulando y va provocando una retracción de la encía hasta llegar incluso a provocar la caída de la pieza dental. Para quitar totalmente la placa de sarro se tiene que realizar una limpieza dental mediante ultrasonidos. Estas limpiezas las realizamos en Zarpa previa sedación de la mascota. Primero quitamos la placa de sarro con ultrasonidos, después eliminamos la placa bacteriana entre el diente y la encía y finalmente pulimos los dientes para reparar los daños en el esmalte dental. Después de hacer la limpieza dental, continuamos con las medidas preventivas para evitar o retrasar en lo posible el acumulo de nueva placa bacteriana.',
        'especie':'Especie',
'nombre':'Nombre de la mascota',
'edad':'Edad de la mascota',
'sintomas':'Sintomas',
'comentarios':'Comentarios adicionales',
'main-titlee':'¿Qué le ocurre a tu mascota?',
'titlee':'Si tienes alguna consulta, por favor, ponte en contacto con nuestros especialistas',
'ask-question':'Enviar tu consulta'
    }
};

      // Actualizar el texto en la página según el idioma seleccionado
      Object.keys(translations[language]).forEach(key => {
        const element = document.getElementById(key);
        if (element) {
          element.textContent = translations[language][key];
        }
      });
    }
  </script>

<script>
    function showParagraph(element, show) {
        var paragraph = element.querySelector("p");
        if (show) {
            paragraph.style.display = "block";
        } else {
            paragraph.style.display = "none";
        }
    }

    // Manejar el evento mouseover y mouseout
    var portfolioItems = document.querySelectorAll(".portfolio-item");
    portfolioItems.forEach(function(item) {
        item.addEventListener("mouseover", function() {
            showParagraph(this, true);
        });
        item.addEventListener("mouseout", function() {
            showParagraph(this, false);
        });
    });
</script>