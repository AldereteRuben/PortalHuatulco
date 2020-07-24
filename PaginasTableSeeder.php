<?php

use Illuminate\Database\Seeder;

class PaginasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paginas')->insert([
<<<<<<< Updated upstream
        	[
        		'titulo_es' => 'Bienvenido a Huatulco',
        		'ruta' => 'home',
                'seccion' => null
        	],
        	[
        		'titulo_es' => 'Las bahías de Huatulco',
        		'ruta' => 'bahias',
                'seccion' => null
        	],
        	[
        		'titulo_es' => '¿Cómo llegar?',
        		'ruta' => 'como_llegar',
                'seccion' => 'paginas'
        	],
=======
            [
                'titulo_es' => 'Bienvenido a Huatulco',
                'ruta' => 'home'
            ],
            [
                'titulo_es' => 'Las bahías de Huatulco',
                'ruta' => 'bahias'
            ],
            [
                'titulo_es' => '¿Cómo llegar?',
                'ruta' => 'como_llegar'
            ],
>>>>>>> Stashed changes
            [
                'titulo_es' => 'Servicios',
                'ruta' => 'servicios',
                'seccion' => null
            ],
            [
                'titulo_es' => 'Vida Nocturna',
                'ruta' => 'vida_nocturna',
                'seccion' => 'paginas'
            ],
            [
                'titulo_es' => 'Compras',
                'ruta' => 'compras',
                'seccion' => 'paginas'
            ],
            [
                'titulo_es' => 'Ecoturismo',
                'ruta' => 'ecoturismo',
                'seccion' => 'paginas'
            ],
            [
                'titulo_es' => 'Turismo de bienestar',
                'ruta' => 'turismo_bienestar',
                'seccion' => 'paginas'
            ],
            [
                'titulo_es' => 'Sol y Playa',
                'ruta' => 'sol_y_playa',
                'seccion' => 'paginas'
            ],
            [
                'titulo_es' => 'Turismo de Aventura',
                'ruta' => 'turismo_de_aventura',
                'seccion' => 'paginas'
            ],
            [
                'titulo_es' => 'Cultura',
                'ruta' => 'cultura',
                'seccion' => 'paginas'
            ],
            [
                'titulo_es' => 'Restaurantes',
                'ruta' => 'restaurantes',
                'seccion' => null
            ]
        ]);

        DB::table('secciones_pagina')->insert([
            [
                'titulo_es' => 'Bahías de Huatulco',
                'texto_es' => 'El vaivén de sus olas, el sonido del mar, el color que genera el brillo del sol en sus aguas, un reencuentro con la naturaleza, esto y más le da significado a Bahías de Huatulco. Nueve bahías donde podrás sentir el aroma del mar, enterrar tus pies en la arena y percibir la suave brisa.',
                'orden_seccion' => 0,
                'pagina_id' => 1
            ],
            [
                'titulo_es' => 'Las Bahías de Huatulco',
                'texto_es' => 'El vaivén de sus olas, el sonido del mar, el color que genera el brillo del sol en sus aguas, un reencuentro con la naturaleza, esto y más le da significado a Bahías de Huatulco. Nueve bahías donde podrás sentir el aroma del mar, enterrar tus pies en la arena y percibir la suave brisa. Conejos, Tangolunda, Chahué, Santa Cruz, Órgano, Maguey, Cacaluta, Chachacual y San Agustín te esperan para que explores sus 37 hermosas playas. Disfrutar de una cálida estancia, con más de 300 días de sol al año, con una agradable temperatura, cálidas aguas que están acompañadas por una exuberante flora y fauna terrestre y acuática, zonas arrecifales y hermosos amaneceres y puestas de sol. Ven a Huatulco y comprueba cómo el paraíso puede estar a tu disposición.',
                'orden_seccion' => 0,
                'pagina_id' => 2
            ],
            [
                'titulo_es' => '¿Cómo llegar?',
                'texto_es' => 'Bahías de Huatulco cuenta con una accesibilidad por aire, tierra y mar. Estos servicios de transportación proporcionan una gran oferta en empresas, horarios, presupueto y estilo de viaje. Dependiendo de sus gustos y preferencias usted puede elegir el que sea de su conveniencia. Informese acerca de las condiciones de viaje para conocer mejor los servicios.',
                'orden_seccion' => 0,
                'pagina_id' => 3
            ],
            [
                'titulo_es' => 'Por aire',
                'texto_es' => 'La empresa Aeropuertos del Sureste (Asur), opera el Aeropuerto Internacional de Huatulco que está ubicado a 15.9 Km. de distancia del destino turístico Bahías de Huatulco, cuyo tiempo de traslado es de aproximadamente 20 minutos al centro del pueblo La Crucecita. Se encuentra a un costado de la Carretera Federal 200 Pinotepa a Salina Cruz, en la Región Costa del estado de Oaxaca. Cabe destacar que la compañía ha adquirido el compromiso de ser una Empresa Socialmente Responsable con el medio ambiente.',
                'orden_seccion' => 1,
                'pagina_id' => 3
            ],
            [
                'titulo_es' => 'Información del aeropuerto',
                'texto_es' => '| Dirección | Aeropuerto Internacional de Huatulco. Carretera Pinotepa a Salina Cruz Km 237, Huatulco, Edo. de Oaxaca. |
| Teléfono | 958 581 9004 |
| Correo | <contactos@asur.com.mx> |
| Servicios | Alimentos y bebidas, tiendas de artesanías y suvenires, arrendadoras de autos, transportadora y mostradores donde podrá adquirir reservaciones de hoteles y paseos. |
| Corporativo | Bosques de Alisos 47A - Piso 4, Bosques de las Lomas México D.F., C.P. 05120 |
| Teléfono | 555 284 0400 |
| Correo | <ir@asur.com.mx> |
| Redes sociales | Twitter @ASURMexico |
| Pagina web | <http://www.asur.com.mx/es.html> |',
                'orden_seccion' => 2,
                'pagina_id' => 3
            ],
            [
                'titulo_es' => 'Aerolíneas',
                'texto_es' => '**Nacionales** | 
 | Desde y hacia Ciudad de México en vuelo directo
Aeroméxico | Aeromexico es una de las compañias aereas que tiene mayor tiempo atendiendo el mercado de Huatulco, de acuerdo a su información actualmente cuanta con 14 vuelos semanales. <https://aeromexico.com/es-mx>
Interjet | Interjet le presenta a sus clientes 50 destinos nacionales e internacionales. <https://www.interjet.com/es-mx>
Volaris | Desde el año 2006 Volaris se define como una linea de bajo costo <https://www.volaris.com/>
Vivaerobus | VivaAerobus es una linea denominada de bajo costo. <https://www.vivaaerobus.com/mx>
Magnicharters | Magnicharter atiende principalmente destino de playa incluyendo Huatulco. <https://www.magnicharters.com/magnisite/mex/ventas/index.html>
 | Desde y hacia Ciudad de Queretaro en vuelo directo
Tar aerolíneas | Tar Aerolineas es una linea aerea regional, que se a expandido a la zona sureste de México, atendiendo destinos como Huatulco. <https://tarmexico.com/>
 | Desde y hacia Ciudad de Oaxaca en vuelo directo
Aerotucan | Aerotucan es una empresa oaxaqueña que da servicio a destinos dentro del estado de Oaxaca y conecta con la ciudad de Tuxrla Gutierrez, Chiapas. Tambien proporciona servicio de taxi aereo en vuelos no regulares. <http://aerotucan.com/portal/>
		
**Internacionales** | 
Frontier | Linea aerea que conecta con Huatulco desde Estados Unidos. <https://es.flyfrontier.com/>
United Airlines | Opción para conectar vuelos entre Estados Unidos y Huatulco <https://www.united.com/es/us>
Canada Air | Linea Aerea con bandera canadiense. <https://www.aircanada.com/mx/es/aco/home.html>
Delta | Linea aerea de Estados Unidos <https://es.delta.com/>',
                'orden_seccion' => 3,
                'pagina_id' => 3
            ],
            [
                'titulo_es' => 'Transporte del aeropuerto',
                'texto_es' => 'Al llegar al Aeropuerto de Huatulco, tendrá varias opciones para trasladarse a su destino final. Rentar un auto: existen diferentes compañías en donde usted podrá optar por la de su preferencia. Tomar un Taxi: el traslado se otorga en lo que le llaman  "servicio colectivo o especial" la diferencia es que en el primero usted compartirá vehículo e itinerario con otras personas y en el segundo la prestación es exclusiva para usted; los precios están exhibidos en el mostrador correspondiente, tenga en cuenta que existe una sola transportadora autorizada. La tercera opción es que usted ya tenga integrado el servicio de transporte en su paquete, en este caso una persona de su agencia de viajes seguramente estará esperando en la puerta de desembarco. Para que se le otorgue el servicio de transportación hotel-aeropuerto es decir el de salida, su agencia de viajes lo contactará para definir la hora y el lugar. En el caso de querer contratar un vehículo, puede hacerlo directamente en su hotel o con las diversas compañías de taxis existentes en Huatulco.',
                'orden_seccion' => 4,
                'pagina_id' => 3
            ],
            [
                'titulo_es' => 'Recomendaciones antes del viaje',
                'texto_es' => 'Compre un seguro de viajes.

La documentación requerida para un viaje nacional es: una identificación por cada persona que viaja (incluyendo niños) y en casos particulares (consulte su línea aérea) el pase de abordar ya sea impreso o en formato electrónico. Para vuelos internacionales dependiendo del origen, escalas, conexiones y destino final le solicitarán: el pasaporte, la visa, en casos específicos certificados de salud, vacunas adicionales y pueden requerirle una identificación adicional al pasaporte. Es muy importante que los datos personales concuerden en todos los documentos y en las reservaciones aéreas.

Usted como pasajero está en la obligación de acatar las leyes, reglamentos y regulaciones de cada destino.

Tome en cuenta la duración del viaje para que lleve ropa cómoda, también es importante informarse sobre la temperatura y la humedad del destino final.

Llame a su línea aérea y pregunte los objetos que están autorizados llevar en su equipaje documentado y en su bolsa de mano, así también las que están prohibidas o tienen restricciones en cantidad. Es importante llevar ciertos artículos en su bolsa de mano, algunos ejemplos serían: documentos personales, objetos delicados, de valor, electrónicos perecederos, llaves, joyas, medicamentos y recetas médicas. Es siempre buena idea cerrar con candados de viajes los equipajes.

Pregunte sobre el peso máximo de equipaje permitido y el número de maletas que usted puede transportar, cada línea aérea tiene sus propias políticas y cada tarifa difiere entre sí. Recuerde que el exceso (generalmente en peso) será cobrado en el mostrador a la hora que usted se registre.

No olvide identificar su equipaje con nombre y teléfono; se recomienda hacer una lista de sus pertenencias y recordar las características de su maleta para identificarla en el destino o para dar información en caso de extravío.

Si usted o alguno de sus acompañantes requiere algún servicio adicional, especial o delicado es importante hacérselo saber a la línea aérea con antelación.  Algunos casos pueden ser: requerir de silla de ruedas, documentar equipaje delicado, frágil o deportivo, viajar con mascotas, acompañantes mayores, mujeres embarazadas, personas con muletas o con aparatos ortopédicos, infantes (se considera infante al menor de 2 años).',
                'orden_seccion' => 5,
                'pagina_id' => 3
            ],
            [
                'titulo_es' => 'Por tierra',
                'texto_es' => 'Llegar a Huatulco por vía terrestre es una posibilidad llena de opciones, se pueden tomar carreteras federales y autopistas hasta llegar a este destino. Las principales opciones a partir de la ciudad de México son pasando por Oaxaca o dirigiéndote hacia Acapulco. En el caso de la primera opción tendrás posteriormente que elegir una ruta a continuar, pasar por Salina Cruz, Sola de Vega o Pochutla. Elige la mejor opción en función de tus intereses pues cada una de ellas presenta características particulares.

El transporte terrestre disponible para poder llegar a Bahías de Huatulco está conformado principalmente por líneas de autotransporte de primera y segunda clase, las cuales proporcionan sus servicios en horarios preestablecidos llegando a terminales de autobuses reconocidas. Existe además transporte en camionetas tipo Urvan a partir de la ciudad de Oaxaca, estas operan a partir de pequeñas terminales con horarios irregulares que obedecen a la demanda.

Algunos servicios de trasportación son proporcionados por empresas reconocidas en el sureste del país y otros son ofertados por empresas regionales. En el caso de autobús, la primera clase permite desplazarse cómodamente gozando de servicios adicionales incluidos y viajes directos; mientras la segunda clase a un mejor precio conlleva hacer escalas en pequeñas poblaciones fuera del itinerario general. Por otro lado, el servicio de transporte en camionetas tipo Urvan permite un ahorro en tiempo y una mayor flexibilidad de horarios.',
                'orden_seccion' => 6,
                'pagina_id' => 3
            ],
            [
                'titulo_es' => 'Servicios de transporte',
                'texto_es' => ' | | **TERMINAL Y CENTRAL CAMIONERA** | **OTROS SERVICIOS DE TRANSPORTACIÓN**
 | | Terminal ADO | Central Camionera Huatulco | Expressos Colombo | Huatulco 2000
Descripción | | | | | 
Líneas | Primera | El servicio de primera clase te permite transportarte a partir de algunas principales ciudades del país, Ciudad de México, Tuxtla Gutiérrez, Veracruz y Oaxaca, principalmente. Este servicio de mayor comodidad cuenta con aire acondicionado, sanitarios, televisión a bordo e internet inalámbrico.			
 | Segunda | El servicio de transportación de segunda clase se encuentra disponible principalmente a partir de las ciudades importantes en la región, Salina Cruz, Puerto Escondido y Oaxaca. Es muy diverso en sus modalidades, algunas tienen un servicio directo y otras hacen escalas continuas, pocas de ellas tienen aire acondicionado.		La transportación en camionetas tipo Urvan son muy utilizadas por los viajeros regionales, proporcionan un ahorro en tiempo considerables y una gran diversidad de horarios. El servicio es compartido atendiendo la capacidad de vehículos haciendo escalas preestablecidas en las terminales y puntos de solicitud del servicio.	
Dirección | Calle Riscalillo #102 esquina Bulevard Chahué, Sector T. La Crucecita, Bahía de Santa Cruz, Oaxaca. C.P. 70987 | Avenida Carpinteros Manzana 1, Sector T. La Crucecita, Bahía de Santa Cruz, Oaxaca C.P. 70989 | Calle Gardenia 1502, Sector H. La Crucecita, Santa Cruz Huatulco, Oaxaca C.P. 70987 | Avenida Guamuchil, Sector H. La Crucecita, Santa Cruz Huatulco, Oaxaca C.P. 70987
Teléfono | 9585870261 | 958 587 0680 | 958 587 2311 | 958 587 2910
Correo | <solucioneshola@ado.com.mx> | <ibravo@estrellablanca.com.mx> | <contacto@expressoscolombohuatulco.com> | <huatulco2000_oaxaca@hotmail.com>
Servicios que ofrecen en sus instalaciones | En sus instalaciones cuentan con sala de espera, servicios sanitarios, tienda de conveniencia y servicio de taxis. | En sus instalaciones cuentan con sala de espera, servicios sanitarios, tienda de conveniencia y servicio de taxis. | En sus instalaciones cuentan con sala de espera y servicios sanitarios.	En sus instalaciones cuentan con sala de espera.',
                'orden_seccion' => 7,
                'pagina_id' => 3
            ],
            [
                'titulo_es' => 'Vehiculo propio',
                'texto_es' => 'Rutas | Ciudad de México-Acapulco-Puerto Escondido-La Crucecita | Ciudad de México-Salina Cruz-La Crucecita | Ciudad de México-Oaxaca-La Crucecita | Oaxaca-Sta. Maria Huatulco- La Crucecita | Oaxaca- San Pedro Pochutla- La Crucecita | Oaxaca-Puerto Escondido- La Crucecita | Oaxaca-Tehuantepec- Salina Cruz-La Crucecita
Descripción | Tome la autopista 95 hacia Acapulco, al llegar a Acapulco tome la carretera federal 200 con dirección Pinotepa Nacional/Puerto Escondido/Huatulco, continúe por el Boulevard Chahué hasta llegar a Bahías de Huatulco (La Crucecita). | Tome la autopista 150D con dirección Puebla/Córdoba, desvié por la autopista 145D con dirección a Acayucan, continúe por la carretera transístmica 185 con dirección Matías Romero/Salina Cruz, tome la autopista 185D continúe y prosiga por la carretera federal 200 con dirección a Huatulco/Puerto Escondido, continúe por el Boulevard Chahué hasta llegar a Bahías de Huatulco (La Crucecita). | Tome la autopista 150D con dirección Puebla/Orizaba, al entronque con la autopista 135D tome esta con dirección a Tehuacán/Oaxaca. Continúe por la carretera federal 175 con dirección a Puerto Ángel, tome la carretera federal 200 con dirección a Huatulco/Salina Cruz, continúe por el Boulevard Chahué hasta llegar a Bahías de Huatulco (La Crucecita). | Tome la carretera federal 175 con dirección Puerto Ángel, desvíe por la carretera estatal hacia Pluma Hidalgo/Santa María Huatulco, tome la carretera federal 200 con dirección a Huatulco/Salina Cruz, continúe por el Boulevard Chahué hasta llegar a Bahías de Huatulco (La Crucecita). | Tome la autopista 150D con dirección Puebla/Orizaba, al entronque con la autopista 135D tome esta con dirección a Tehuacán/Oaxaca. Continúe por la carretera federal 175 con dirección a Pochutla/Puerto Ángel, tome la carretera federal 200 con dirección a Huatulco/Salina Cruz, continúe por el Boulevard Chahué hasta llegar a Bahías de Huatulco (La Crucecita). | Tome la carretera federal 175 con dirección Puerto Ángel, desvíe en el entronque con la carretera estatal 131 y tome esta con dirección a Puerto Escondido, continué por la carretera federal 200 con dirección a Huatulco/Salina Cruz, continúe por el Boulevard Chahué hasta llegar a Bahías de Huatulco (La Crucecita). | Tome la carretera federal 190 con dirección Tehuantepec/Salina Cruz, tome la carretera federal 200 con dirección Huatulco/Puerto Escondido, continúe por el Boulevard Chahué hasta llegar a Bahías de Huatulco (La Crucecita).
Dadas las características del territorio de la entidad oaxaqueña atravesado por serranías, las distancias y el tiempo de manejo varía en diversos tramos carreteros. | Conducir con precaución, a partir de Acapulco y hasta Puerto Escondido se encuentran constantemente sobre la carretara topes. Es inseguro viajar de noche. | Es una de las mejores opciones por condiciones de la carretera. Considere traer agua embotellada y medicamentos antimareos. | A partir de la ciudad de Oaxaca, cualquier ruta que elija presenta caminos con curvas. Maneje con precaución atendiendo los señalamientos carreteros, y asegurece contar con medicamentos antimareos. | Esta ruta es la más corta, pero las condiciones en algunos tramos carreteros estatales en temporada de lluvias la imposibilitan. Carente de señalización en algunos tramos que generan confusión y presentan tramos con neblina en las tardes. | Es una de las rutas más bellas por el paisaje de la Sierra Sur, presenta un gran número de curvas. Respete la velocidad sugerida y los señalamientos carreteros para evitar accidentes. | Opción interesante si esta interesado en algún punto de paso. La carretera no se encuentra en condiciones óptimas regularmente. Tome precauciones con el encuentro posible con peregrinos y caravanas que se dirigen a Juquila. | No es recomendable por la duración invertida, presenta un ahorro en pago de una caseta al ser carretera libre.',
                'orden_seccion' => 8,
                'pagina_id' => 3
            ],
            [
                'titulo_es' => 'Por mar',
                'texto_es' => 'Bahías de Huatulco, se encuentra localizado en la costa sur en la república Mexicana, pertenece al estado de Oaxaca. Huatulco es un puerto de cabotaje y altura que por consiguiente en él  se realiza turismo de recreación náutica y de altura, lo cual hace que se pueda desarrollar la pesca deportiva. Así mismo, existen instalaciones portuarias tal cómo el muelle de cruceros con dos posiciones de atraque. Las coordenadas de localización del puerto son 15°45’42.777” Latitud Norte y 96°07’53.015” Longitud Oeste.',
                'orden_seccion' => 9,
                'pagina_id' => 3
            ],
            [
                'titulo_es' => 'Transporte marítimo',
                'texto_es' => 'Huatulco se encuentra a 450 millas náuticas del puerto de Quetzal en Guatemala, a 720 del Puerto Calderas, en Costa Rica. A 240 de Acapulco, a 640 de Puerto Vallarta, a 780 de la Paz Baja California Sur, a 1,730 de San Diego California y a 1,950 millas náuticas del puerto de San Francisco en California en EEUU
Es importante hacer saber que en el muelle de la dársena de Santa Cruz, así cómo en el de la Marina Chahué, hay oportunidad de reabastecerse de combustible y agua potable para las embarcaciones.',
                'orden_seccion' => 10,
                'pagina_id' => 3
            ],
            [
                'titulo_es' => 'Muelle de cruceros',
                'texto_es' => 'El muelle de cruceros tiene las siguientes instalaciones:  Plataforma de operación, atraque y descenso de pasajeros 180m de longitud y ancho de 15 m. 2 pasarelas a Duque de Alba de 50m de longitud, 2 duque de alba de 50m de longitud. Ancho de duques de alba 15m. Profundidad de operacion al Nivel de Bajamar Media Inferior(N.B.M.I.) 10m. Defensas Bridgestones tipo HC-90 (J4): 26 piezas (13 por banda) Bitas de fierro fundido de 100 toneladas de capacidad: 24 piezas (12 por banda). Su profundidad es de 10m, el ancho de 120m y la longitud de 380m.',
                'orden_seccion' => 11,
                'pagina_id' => 3
            ],
            [
                'titulo_es' => 'Marina Chahué',
                'texto_es' => "La marina Chahué está localizada a 1.46 millas náuticas del muelle de cruceros de Huatulco, su ubicación georreferenciada es: lat 15° 45.821' , lon - 96°.07.256'. Marina Chahué ubicada en Poligono 3, Bahias de Huatulco, Santa María Huatulco, Oaxaca. Código Postal 70989. Teléfono 52 (958) 587 2652 Informes: egutierreza@fonatur.gob.mx

Horario | Los horarios de atención son de 9 a 14 y de 16 a 19 horas
Permisos requeridos | Certificado de la embarcación, identificación oficial del propietario y/o responsable de la embarcación, Póliza de seguro RC VIGENTE, Comprobante de domicilio, Certificado de importación temporal (En caso de que así sea)
Costos para uso de marina | Teléfono 52 (958) 587 2652 Informes: <egutierreza@fonatur.gob.mx>",
                'orden_seccion' => 12,
                'pagina_id' => 3
            ],
            [
                'titulo_es' => 'Servicios',
                'texto_es' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'orden_seccion' => 1,
                'pagina_id' => 4
            ],
            [
                'titulo_es' => 'Vida Nocturna',
                'texto_es' => 'En Bahías de Huatulco podrás disfrutar de una vida nocturna muy variada desde un restaurante-bar, discotecas, shows en vivo hasta tranvías panorámicos; que te harán pasar un rato agradable en un ambiente más relajado. En sus centros nocturnos podrás degustar platillos de la región o platillos internacionales, escuchar música pop, rock o tomar un buen mezcal o una bebida de tu preferencia, inclusive si quieres pasar una noche tranquila y escuchar música más relajada, sin duda en este destino encuentras un lugar perfecto para ti.',
                'orden_seccion' => 0,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => 'Restaurantes-Bar',
                'texto_es' => 'En los restaurantes y bares que se ofrecen recreación nocturna pueden encontrar música en vivo de diferentes géneros que van  desde algo más tranquilo como baladas,y trovas. hasta  rock  o  salsa y cumbia para bailar.',
                'orden_seccion' => 1,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => '¿Qué hacer?',
                'texto_es' => 'En estos restaurantes-Bar encontrarás platillos y bebidas nacionales e internacionales acompañados de agradable música que hará que pases una noche increíble.',
                'orden_seccion' => 2,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => 'Dentro del destino Bahías de Huatulco, en las zonas de Tangolunda, Chahué, La Crucecita y Santa Cruz encontrarás opciones de vida nocturna.',
                'orden_seccion' => 3,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => '¿Cómo Llegar?',
                'texto_es' => 'Puedes llegar en auto particular, a pie o en taxi. Si te interesa algún restaurante-bar en la zona en la que te encuentres hospedado, ya sea Santa cruz, La crucecita o Tangolunda puedes llegar a pie, pero si el lugar que te interesa se encuentra en otra zona te recomendamos utilizar transporte, ya sea auto propio o taxi.',
                'orden_seccion' => 4,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => '¿Qué empresas dan servicio?',
                'texto_es' => 'No hay nada aquí.',
                'orden_seccion' => 5,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => 'Horario',
                'texto_es' => 'La mayoría de los restaurantes bar abren alrededor de las 6:00 p.m. y algunos cierran a las 11:00 pm, otros se mantienen por un par de horas más.',
                'orden_seccion' => 6,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'Tener energía y ganas de  pasar una noche única e inolvidable.
                Verificar si alguno de los establecimientos requiere reservación y aceptan tarjeta de crédito y cuentas separadas.
                Solicitar información acerca de los ingredientes que contienen los platillos, por precaución, en caso de ser alérgicos.',
                'orden_seccion' => 7,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => 'Discotecas',
                'texto_es' => 'Las discos, espacios de vida nocturna para disfrutar de unas copas, bailar al ritmo de la música y pasar un rato agradable.  Si deseas salir por  la noche, Huatulco te ofrece opciones para divertirte. ¡Sólo es cuestión que te decidas!',
                'orden_seccion' => 8,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => '¿Qué hacer?',
                'texto_es' => 'Disfrutar de espacios especiales para convivir, bailar y escuchar música de los mejores Dj´s de Bahías de Huatulco.',
                'orden_seccion' => 9,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => 'Bahías de Huatulco cuenta con dos Discotecas, localizadas en las zonas de Chahué y Santa Cruz.',
                'orden_seccion' => 10,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => '¿Cómo Llegar?',
                'texto_es' => 'Si es la primera vez que visitas el destino es recomendable llegar mediante el servicio de taxi, para que puedas conocer la ubicación de las discotecas.Si cuentas con vehículo particular es recomendable utilizar Google Maps para ubicar fácilmente el lugar.',
                'orden_seccion' => 11,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => '¿Qué empresas dan servicio?',
                'texto_es' => 'No hay nada aquí.',
                'orden_seccion' => 12,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => 'Horario',
                'texto_es' => 'De 10:00 p.m. a 4:00 a.m.',
                'orden_seccion' => 13,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'Portar ropa cómoda. Asimismo, no manejar bajo la influencia del alcohol.',
                'orden_seccion' => 14,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => 'Shows en hoteles',
                'texto_es' => 'Dentro de sus instalaciones, los hoteles ofrecen shows en vivo tematizados que pueden ir desde noches oaxaqueñas, mexicanas, caribeñas, internacional, por mencionar algunas.',
                'orden_seccion' => 15,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => '¿Qué hacer?',
                'texto_es' => 'Disfrutar las diferentes temáticas de espectáculo que son planeadas para que puedas vivir momentos únicos y agradables.',
                'orden_seccion' => 16,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => 'En la zona Hotelera de Tangolunda encontrarás una gran variedad de shows en vivo.',
                'orden_seccion' => 17,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => '¿Cómo Llegar?',
                'texto_es' => 'Si te encuentras en la zona de Tangolunda puedes solicitar información de la distancia de tu ubicación al hotel que deseas visitar. Dependiendo de la distancia tomar el servicio de taxi o viajar en auto particular.  Si te encuentras fuera de la zona de Tangolunda es necesario arribar mediante automóvil ya sea en modalidad pública o privada.',
                'orden_seccion' => 18,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => '¿Qué empresas dan servicio?',
                'texto_es' => 'No hay nada aquí.',
                'orden_seccion' => 19,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => 'Horario',
                'texto_es' => 'Cada empresa cuenta con horarios de servicio distintos.',
                'orden_seccion' => 20,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'Se recomienda preguntar por la disponibilidad y reservar con anticipación.',
                'orden_seccion' => 21,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => 'Tranvías Panorámicos',
                'texto_es' => 'Recorrido panorámico que recorre por la tarde-noche  las principales calles de la zona turística de Bahías de Huatulco. Algunos de estos transportes están ambientados con música  El guía chofer va explicando todo lo que podrás encontrar en  Huatulco, te lleva a  los principales miradores, como el de Tangolunda  ¡ La diversión a bordo!.',
                'orden_seccion' => 22,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => '¿Qué hacer?',
                'texto_es' => 'Sorprenderte de la belleza del destino a través de un recorrido por las principales zonas de Huatulco como son la zona Hotelera de Tangolunda, Bahía Chahué y Bahía Santa Cruz. En este tour podrás captar fotografías y videos en lugares emblemáticos de Bahías de Huatulco.',
                'orden_seccion' => 23,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => 'El punto de partida de los tranvías panorámicos se encuentra frente a la plaza El Madero, ubicada en la zona de La Crucecita.',
                'orden_seccion' => 24,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => '¿Cómo Llegar?',
                'texto_es' => 'Si te encuentras en la zona de la Crucecita puedes llegar caminando, ya que salen frente a la plaza El Madero. Sí tu hotel se encuentra en la zona de Tangolunda o Santa Cruz te recomendamos a través de un automóvil, ya sea el servicio de taxi o vehículo privado.',
                'orden_seccion' => 25,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => '¿Qué empresas dan servicio?',
                'texto_es' => 'No hay nada aquí.',
                'orden_seccion' => 26,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => 'Horario',
                'texto_es' => 'De 4:00 p.m. a 11:00 p.m.',
                'orden_seccion' => 27,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'Se recomienda reservar con anticipación.
                Contar con una camara fotografico o su dispositivo movil para poder captura una nueva experiencia.',
                'orden_seccion' => 28,
                'pagina_id' => 5
            ],
            [
                'titulo_es' => 'Compras',
                'texto_es' => 'En Bahías de Huatulco además de disfrutar de un día en la playa podrás realizar ditintas compras debido a que ofrece una gran variedad de establecimientos en donde puedes adquirir souvenirs, artesanias de la región y obras de arte.',
                'orden_seccion' => 0,
                'pagina_id' => 6
            ],
            [
                'titulo_es' => 'Mercado',
                'texto_es' => 'La visita a los mercados es otra de las actividades que puedes realizar  en Huatulco. Estos espacios llenos de colorido donde encontrarás una gama de productos de la región así como souvenirs que puedes llevarte de regreso a casa.',
                'orden_seccion' => 1,
                'pagina_id' => 6
            ],
            [
                'titulo_es' => '¿Qué hacer?',
                'texto_es' => 'En estos establecimientos podrás adquirir diferentes articulos como souvenirs, articulos de playa como: inflables, trajes de baño, juegos de arena, entre otros asi como establecimientos de alimentos y bebidas.',
                'orden_seccion' => 2,
                'pagina_id' => 6
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => 'Existen diferentes opciones en donde comprar en Huatulco como: Mercado 3 de Mayo, Mercado Santa Cruz, Mercado orgánico, Mercado Benito Juarez.',
                'orden_seccion' => 3,
                'pagina_id' => 6
            ],
            [
                'titulo_es' => '¿Cómo Llegar?',
                'texto_es' => 'Podrás trasladarte en taxi o automovil propio.',
                'orden_seccion' => 4,
                'pagina_id' => 6
            ],
            [
                'titulo_es' => '¿Qué empresas dan servicio?',
                'texto_es' => 'No aplica.',
                'orden_seccion' => 5,
                'pagina_id' => 6
            ],
            [
                'titulo_es' => 'Horario',
                'texto_es' => 'Se encuentran abierto de 7:00 am. a  8:00 pm.',
                'orden_seccion' => 6,
                'pagina_id' => 6
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'Llevar siempre efectivo, usar zapatos comodos.',
                'orden_seccion' => 7,
                'pagina_id' => 6
            ],
            [
                'titulo_es' => 'Galerías de Arte',
                'texto_es' => 'Visitar las galerías de arte que se ubican en Huatulco te envuelven en una magia de colores y texturas. Los diferentes significados de las obras rescatan  esa fusión del arte contemporáneo con las raíces oaxaqueñas.',
                'orden_seccion' => 8,
                'pagina_id' => 6
            ],
            [
                'titulo_es' => '¿Qué hacer?',
                'texto_es' => 'En estas galerías podrás encontrar pinturas exhibidas y a la venta donde se muestra el talento de artistas oaxaqueños, que dan a conocer su arte a través de sus trabajos.  Además de encontrar sus obras podrás adquirir prendas de vestir, bolsas y diferentes artículos bordados a mano, elaborados por bordadoras de la costa oaxaqueña, y comprar piedras como el granito, mármol, cuarzo, etc.',
                'orden_seccion' => 9,
                'pagina_id' => 6
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => 'Visitar galerias de arte puede ser una actividad muy reconfortante y Bahias de Huatulco cuenta con dos galerias de arte. Una de ellas esta en Santa Cruz y la otra en la Crucecita.',
                'orden_seccion' => 10,
                'pagina_id' => 6
            ],
            [
                'titulo_es' => '¿Cómo Llegar?',
                'texto_es' => 'En taxi o automovil propio ubicados en el centro de la Crucecita.',
                'orden_seccion' => 11,
                'pagina_id' => 6
            ],
            [
                'titulo_es' => '¿Qué empresas dan servicio?',
                'texto_es' => 'Las empresas que ofrecen este servicio son Galería de Arte & Decoración Rafael Ortega Y Rubin Galería/Arte.',
                'orden_seccion' => 12,
                'pagina_id' => 6
            ],
            [
                'titulo_es' => 'Horario',
                'texto_es' => 'Existen diferente horarios en cada uno de los establecimientos por lo que es recomendable informarse en cada uno de ellos.',
                'orden_seccion' => 13,
                'pagina_id' => 6
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'No tocar los articulos que esten prohibidos.',
                'orden_seccion' => 14,
                'pagina_id' => 6
            ],
            [
                'titulo_es' => 'Ecoturismo',
                'texto_es' => 'Son aquellas actividades donde el turista se relaciona con el entorno natural, respetándolo y tomando conciencia sobre la conservación y cuidado del medio ambiente. Dichas actividades pueden ser: Visita al cocodrilario/iguanario, visita al centro mexicano de la tortuga, hacer camping y glamping, tomar talleres de educación ambiental y practicar el senderismo interpretativo.',
                'orden_seccion' => 0,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Cocodrilario',
                'texto_es' => 'Desde el imaginario mitológico en diversas culturas y en diversas épocas, el cocodrilo ha sido considerado un animal exótico. Recorrer los espacios donde habita esta especie es una experiencia que te conecta con la naturaleza.   Sabías que los  cocodrilos pueden vivir entre 50  y 80 años.  Te invito a explorar este espacio.',
                'orden_seccion' => 1,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Cocodrilario',
                'texto_es' => 'Se realiza un recorrido guiado en canoa por la laguna y los manglares; se hace avistamiento de aves, iguanas y cocodrilos en libertad. Es un paseo impresionante y con mucho aprendizaje sobre la vida en el manglar.',
                'orden_seccion' => 2,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Cocodrilario',
                'texto_es' => 'Actividad que se lleva a cabo en la Laguna Tonameca, comunidad de La Ventanilla, Municipio de Santa María Tonameca.',
                'orden_seccion' => 3,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Cocodrilario',
                'texto_es' => 'Desde la ciudad de Pochutla sale transporte público a Mazunte. Solicita bajar a la altura de La Ventanilla. Si viajas en vehículo privado, deberás seguir sobre la carretera federal 200 hasta la desviación conocida como “Crucero de San Antonio” (sobre km. 201), ahí se toma la desviación hacia Mazunte; recorriendo aproximadamente 6 kilómetros para llegar al destino.',
                'orden_seccion' => 4,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Cocodrilario',
                'texto_es' => 'El servicio lo ofrecen dos cooperativas locales: Lagarto Real y Servicios Ecoturísticos La Ventanilla.',
                'orden_seccion' => 5,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Cocodrilario',
                'texto_es' => 'El horario que manejan las empresas para realizar este servicio son de 8:00 a 17:00 horas todos los días del año.',
                'orden_seccion' => 6,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Cocodrilario',
                'texto_es' => 'Llevar sombrero y bloqueador. Si deseas un paseo más largo por la laguna, admirando a cocodrilos en libertad, se recomiendan los servicios de la cooperativa Lagarto Real.',
                'orden_seccion' => 7,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Iguanario',
                'texto_es' => 'Los criaderos, espacios para la preservación de la iguana verde y la iguana negra resultan también ser espacios de interés turística. Si te interesa conocer más a fondo sobre las diferentes etapas de reproducción de esta especie, te invitamos a vivir la experiencia. ',
                'orden_seccion' => 8,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Iguanario',
                'texto_es' => 'Realizarás una visita guiada por el criadero de iguana. Conocerás sobre la reproducción y vida de diversos tipos de esta especie. Asimismo, si gustas, podrás interactuar con algunas de ellas. ¡Una experiencia única!',
                'orden_seccion' => 9,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Iguanario',
                'texto_es' => 'El iguanario se encuentra en la comunidad de Barra de Copalita, Municipio de San Miguel del Puerto.',
                'orden_seccion' => 10,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Iguanario',
                'texto_es' => 'Si te encuentras en La Crucecita, deberás caminar a la esquina que forman las calles Carrizal y Palo Verde donde encontrarás taxis-colectivos a Barra de Copalita. También, desde Santa Cruz Huatulco o de la zona hotelera podrás tomar un taxi que te lleve directo al destino. Si viajas en vehículo propio puedes tomar la carretera costera rumbo al Este, una vez que entroncas con la carretera federal 200, deberás seguir con dirección a Salina Cruz, seguidamente encontrarás el puente del río Copalita y unos metros después del primer tope del lado izquierdo se encuentra el acceso al iguanario.',
                'orden_seccion' => 11,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Iguanario',
                'texto_es' => 'La Cooperativa Coopalytan es la encargada del iguanario y de hacer los recorridos guiados. ',
                'orden_seccion' => 12,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Iguanario',
                'texto_es' => 'El horario que manejan las empresas para realizar este servicio son de 9:00-17:00 horas. Todos los días del año.',
                'orden_seccion' => 13,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Iguanario',
                'texto_es' => 'Si prefieres, o si vas con grupos grandes, puedes llamar para avisar de tu llegada: 958 103 0605.',
                'orden_seccion' => 14,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Centro Mexicano de la Tortuga',
                'texto_es' => 'Espacio dedicado al manejo, conservación  y desarrollo de las tortugas. En el Centro Mexicano de la Tortuga se ubican acuarios y estanquerías donde podrás conocer más de esta especie. Un lugar de interpretación ambiental que tienes que visitar.',
                'orden_seccion' => 15,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Centro Mexicano de la Tortuga',
                'texto_es' => 'Se realiza una visita al acuario y a los criaderos de tortugas en sus estanques. Se pueden observar 3 de las 8 especies de tortugas marinas que hay en el mundo, así como a 9 especies de agua dulce y 2 terrestres.',
                'orden_seccion' => 16,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Centro Mexicano de la Tortuga',
                'texto_es' => 'Se ubica en la comunidad de Mazunte, Municipio de Santa María Tonameca.',
                'orden_seccion' => 17,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Centro Mexicano de la Tortuga',
                'texto_es' => 'Desde la ciudad de Pochutla sale transporte público a Mazunte.  Si viajas en vehículo privado, deberás seguir sobre la carretera federal 200 hasta la desviación conocida como “Crucero de San Antonio” (sobre km. 201) ya sea que entres de Huatulco o de Puerto Escondido, ahí se toma la desviación hacia Mazunte; recorriendo aproximadamente 6 kilómetros para llegar al destino. ',
                'orden_seccion' => 18,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Centro Mexicano de la Tortuga',
                'texto_es' => 'El CMT es una institución del gobierno federal dependiente de la Comisión Nacional de Áreas Naturales Protegidas (CONANP). ',
                'orden_seccion' => 19,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Centro Mexicano de la Tortuga',
                'texto_es' => 'El horario que manejan las empresas para realizar este servicio son de miércoles a sábado: De 10:00 a 16:30 horas. Los domingos de 10:00 a 14:30 horas.',
                'orden_seccion' => 20,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Centro Mexicano de la Tortuga',
                'texto_es' => 'La visita dura entre 1 y 2 horas. Para grupos escolares, es necesario hacer una solicitud por medio de oficio. Más información: https://www.gob.mx/conanp/acciones-y-programas/centro-mexicano-de-la-tortuga',
                'orden_seccion' => 21,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Camping y Glamping',
                'texto_es' => 'Si lo tuyo es despertar al aire libre, el camping te espera, y si lo que deseas son  unos toques de  sofisticación, el glamping puede ser tu opción perfecta.  La instalación de casas portátiles y la convivencia al aire libre son experiencias que no debes perderte.',
                'orden_seccion' => 22,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Camping y Glamping',
                'texto_es' => 'Las actividades de camping dependerán de la ubicación del lugar, en el destino Bahías de Huatulco se puede efectuar dicha actividad en la Bahía de San Agustín, La Jabalina y Bocana de Copalita, y a través de esta actividad también se puede desarrollar el senderismo, avistamiento de aves, tours sobre cultura local, conseguir gran valor paisajístico, recreativo y eco-turístico, excursionismo en el Parque Nacional, bucear, practicar snorkel, pesca deportiva en las playas, o bien, efectuar turismo de aventura en el Río Copalita mediante tours de rafting nivel 1, 2 y 3, tour de cuatrimotos, visitar la tienda de artesanías, souvenirs y avistamiento de flora y fauna. Por otro lado, el glamping se practica en el destino de Pluma Hidalgo, lugar que se localiza aproximadamente a 53km/1.30hrs de distancia partiendo de la Crucecita, Bahías de Huatulco; al tratarse de un sitio que se encuentra en lo alto de la Sierra Oaxaqueña, es una experiencia totalmente distinta, pues el clima se vuelve frío y el paisaje cambia, se puede acampar en zonas con vista a la montaña, realizar actividades eco-turísticas en los alrededores de Cerehidalgo, reunirse en zonas de picnic y jardín y experimentar tours o clases de cultura local, a través de las fincas cafetaleras.',
                'orden_seccion' => 23,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Camping y Glamping',
                'texto_es' => 'La actividad de camping puede realizarse en tres lugares pertenecientes a Bahías de Huatulco, tales como la Bocana de Copalita, La Jabalina y la Bahía de San Agustín. Por otro lado, la actividad de Glamping se realiza únicamente en el municipio de Pluma Hidalgo, Oaxaca. ',
                'orden_seccion' => 24,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Camping y Glamping',
                'texto_es' => 'Para efectos de la actividad de camping, la forma de traslado a “Camping Don Taco” ubicado en la Bahía de San Agustín es a través de transporte terrestre o marítimo, público o privado. Este lugar se sitúa aproximadamente a 29.2km/45min partiendo de La Crucecita, Huatulco. Por lo tanto, la trayectoria inicia de La Crucecita hacia el Aeropuerto Internacional Bahías de Huatulco, sobre la Carretera Federal 200 Bahías de Huatulco. Arribando a la entrada aeropuerto existe la desviación hacia la izquierda con dirección a Bahía San Agustín, donde se encuentra un sitio de taxis público que realiza viajes colectivos hacia la playa; mediante el arribo de forma marítima es a través de embarcaciones como yates, catamaranes o lanchas que realizan tour a las bahías. El traslado a “Rancho Tangolunda” se ubica en La Jabalina, Huatulco, aproximadamente a 9.2km/15min partiendo de La Crucecita hacia la zona hotelera Tangolunda, sobre la Carretera Federal 200 Bahías de Huatulco. La forma de arribar al lugar es mediante transporte privado o público, a 10 minutos de la salida de La Crucecita en dirección a Tangolunda se encuentra una desviación a la izquierda con su respectivo letrero del mariposario “Yeé Lo Beé” y “Rancho Tangolunda”. Para arribar a “Finca Margaritas” situada en el municipio de Pluma Hidalgo, es a través de transporte terrestre público o privado, lugar que se localiza alrededor de 50.3km/1.30hrs partiendo de La Crucecita, Bahías de Huatulco. El trayecto inicia de La Crucecita hacia el Aeropuerto Internacional Bahías de Huatulco, sobre la Carretera Federal 200 Bahías de Huatulco, hasta llegar a la carretera  Zapote Copalita y girar hacia la derecha con dirección a Matamoros seguido a la altura de Comedor “Los Cafetales” y girar en dirección izquierda hasta arribar a Finca Las Margaritas.',
                'orden_seccion' => 25,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Camping y Glamping',
                'texto_es' => 'Las empresas que ofertan espacios para la actividad de camping se localizan en Bahías de Huatulco, las cuales son “Camping Don Taco” ubicado en la Bahía de San Agustín y “Rancho Tangolunda” empresa situada en La Jabalina, Huatulco. En el caso de la actividad de glamping, lo oferta únicamente la empresa “Finca Margaritas” ubicada en el municipio de Pluma Hidalgo.',
                'orden_seccion' => 26,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Camping y Glamping',
                'texto_es' => 'Las empresas “Camping Don Taco” y “Rancho Tangolunda” localizadas en Bahías de Huatulco cuentan con un horario de  servicio en oficina de 9:00 am a 5:00 pm; y la empresa Finca Margaritas localizada en Pluma Hidalgo tiene un horario de atención las 24 horas del día, por ser un lugar tipo alojamiento.',
                'orden_seccion' => 27,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Camping y Glamping',
                'texto_es' => 'Las recomendaciones en caso del alojamiento situado en Pluma Hidalgo, es que solo aceptan pagos en efectivo, requiere reservar con antelación las actividades adicionales como el taller de café, temazcal, pícnic en las cascadas, taller de cocina Oaxaqueña y hoguera, no se admiten mascotas y no se pueden añadir cunas o camas supletorias en este alojamiento; y para el caso de alojamientos situados en Bahías de Huatulco, se recomienda permanecer en lugares seguros, hacer uso de productos ecológicos, bloqueador solar, repelente, linternas, ropa cómoda, y botiquín de viaje.  ',
                'orden_seccion' => 28,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Talleres de educación ambiental',
                'texto_es' => 'Los talleres de educación ambiental  son otra de las opciones que puedes encontrar dentro del ecoturismo. Te invito a integrarte a actividades para  sensibilizarte y reflexionar sobre la preservación y el manejo de los recursos naturales de la región y del planeta.',
                'orden_seccion' => 29,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Talleres de educación ambiental',
                'texto_es' => 'Los talleres de educación ambiental ofrecen pláticas a través de “Educa-tours” tales como “Sendero en la selva” el cual consiste en un recorrido con actividades divertidas de interacción, motivación y sensibilización de grupo a los alumnos, con servicio incluido de guía especializado, actividades de rallys, transporte terrestre, y pago por acceso al parque para el recorrido con una duración de 3.5 horas. “Sendero Sabanal” consiste en un tour de camino en la montaña, para experimentar la adrenalina y velocidad bicicleta a través de 8 km de la selva arroyo y humedales. “Sendero al Mar” consiste en una caminata con duración de 5 horas para descubrir la importancia de los humedales costeros, y finalmente el tour “Bici-selva” con duración de 3.5 horas, realiza 6 paradas interpretativas para conocer la belleza paisajística de la Selva Baja Caducifolia y Vegetación Riparia.',
                'orden_seccion' => 30,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Talleres de educación ambiental',
                'texto_es' => 'La actividad de talleres de educación ambiental puede realizarse en dos lugares pertenecientes a Huatulco, en el mismo destino Bahías de Huatulco y Bahía de San Agustín. Asimismo, en el Municipio de Pluma Hidalgo ofertan dichos talleres.',
                'orden_seccion' => 31,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Talleres de educación ambiental',
                'texto_es' => 'La ubicación de la agencia de viajes Huatulco Salvaje es en la Dársena de Santa Cruz, Plaza María Bonita Local 2, Bahía de Santa Cruz, Bahías de Huatulco, Oaxaca o el contacto vía telefónica al número (958)-119-38-86 y la Cooperativa y agencia ecoturística Cruz del Monte ubicada en calle ceiba #206, 70987, Crucecita, Oaxaca. ',
                'orden_seccion' => 32,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Talleres de educación ambiental',
                'texto_es' => 'Las empresas que ofertan el servicio se ubican en Bahías de Huatulco, y corresponden a la agencia de viajes “Huatulco Salvaje” y la “Cooperativa y agencia ecoturística Cruz del Monte”. ',
                'orden_seccion' => 33,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Talleres de educación ambiental',
                'texto_es' => 'El horario de servicio de la agencia de viajes “Huatulco Salvaje” es diariamente de 9:00 am a 5:00 pm y de la Cooperativa y agencia ecoturística Cruz del Monte es diariamente de 7:00 am a 11:00 pm. Sin embargo, los horarios y disponibilidad para impartir los talleres dependerán del tipo de taller o tour requerido y estarán sujetos a condiciones del tiempo, por lo tanto se recomienda contactar directamente a la agencia para reservar el tour o taller. ',
                'orden_seccion' => 34,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Talleres de educación ambiental',
                'texto_es' => 'Durante el tour, se recomienda hacer uso de productos ecológicos, bloqueador solar, repelente, linternas, ropa cómoda, botiquín de viaje y permanecer el lugares seguros.',
                'orden_seccion' => 35,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Senderismo interpretativo',
                'texto_es' => 'Adquirir saberes sobre la naturaleza, la historia y la cultura de un sitio te lleva a descubrir nuevos espacios del conocimiento. Los senderos interpretativos forman parte de las actividades ecoturísticas donde puede recorrer senderos para recrearte y aprender al mismo tiempo. No lo pienses más,  Huatulco y sus cercanías te ofrecen varios escenarios para la práctica de esta actividad.',
                'orden_seccion' => 36,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Senderismo interpretativo',
                'texto_es' => 'Recorrer un parque botánico, observar paisajes, mariposas y aves en su hábitat natural. Conocer una gran variedad de especies de árboles, plantas y frutas exóticas; también se puede realizar una caminata en Punta Cometa, conocer el Manglar La Ventanilla, visitar la playa de Mazunte y Pto. Ángel o caminar por el Parque Nacional Huatulco, observar flora y fauna de la región y observar aves en su hábitat natural.',
                'orden_seccion' => 37,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Senderismo interpretativo',
                'texto_es' => 'Los lugares donde se puede hacer la actividad de senderismo son: Punta Cometa, el Manglar de La Ventanilla, playa de Mazunte y Pto. Ángel o en el Parque Nacional Huatulco.',
                'orden_seccion' => 38,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Senderismo interpretativo',
                'texto_es' => 'Si desea trasladarse al lugar del recorrido, puede hacerlo desde las Bahías de Huatulco en vehículo hasta Santa María Huatulco, y después 6km hacia Pluma Hidalgo, se observará la desviación hacia la población de Magdalena, y aproximadamente a 3km se ubicará el Jardín Botánico. Si desea solicitar los servicios, debe trasladarse a la bahía de Santa Cruz en taxi, servicio urbano, caminando por la Quinta Avenida, o en auto propio. La Plaza María Bonita se localiza después de la Dársena, del lado izquierdo yendo hacia la Iglesia de Santa Cruz. O bien, pregunte por los servicios a Domicilio.',
                'orden_seccion' => 39,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Senderismo interpretativo',
                'texto_es' => 'Jardín Botánico Hagia Sofía, Oaxaca Expediciones, Huatulco Salvaje, entre otras.',
                'orden_seccion' => 40,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Senderismo interpretativo',
                'texto_es' => 'Las salidas son de lunes a viernes a partir de las 8:00 o 9:00 de la mañana, depende de la empresa donde contrate el servicio. Y sábados de 11:00 a 17:00 hrs.',
                'orden_seccion' => 41,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Senderismo interpretativo',
                'texto_es' => 'Usar ropa y zapatos cómodos, gorra y/o sombrero, repelente para mosquitos, llevar traje de baño, zapatos para agua y toallas.',
                'orden_seccion' => 42,
                'pagina_id' => 7
            ],
            [
                'titulo_es' => 'Turismo de bienestar',
                'texto_es' => 'Si uno de tus propósitos de viaje  a Bahías de Huatulco es  la relajación,  puedes   experimentar  el temazcal, una antigua práctica espiritual basada en un baño sagrado de vapor, relacionada con la  conexión entre el cuerpo, el espíritu y la madre naturaleza. Huatulco  y sus alrededores  cuentan  con escenarios perfectos para la práctica  de Yoga, en estos espacios  podrás experimentar de los más excitantes saludos al sol.  Aunado a esto, las playas., son sitios idóneos para  la meditación en salidas y puestas de sol. Si lo que deseas es relajación total, a todo este conjunto de experiencias antes mencionadas,  le agregamos una sesión de masajes  para relajar y aliviar dolencias, dando como resultado un sentimiento de bienestar.   ',
                'orden_seccion' => 0,
                'pagina_id' => 8
            ],
            [
                'titulo_es' => 'Spa',
                'texto_es' => 'El spa es un lugar excepcional de relajación, descanso y conexión contigo mismo, su elemento principal es el agua, por ello, se le atribuye a que es una forma de conseguir salud a través del agua, impulsando al mismo tiempo a descubrir un espíritu revitalizado y mejora de la energía. En el spa hacen uso de distintas modalidades en terapias, tratamientos y actividades de relajación a través de jacuzzis, hidromasajes, saunas, piscinas, tinas de baño, existiendo también terapias alternas que fungen como complemento del spa, tales como la aromaterapia, masoterapia, faciales, tratamientos de belleza, exfoliantes, envolventes y  reafirmantes.',
                'orden_seccion' => 1,
                'pagina_id' => 8
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => 'En Bahías de Huatulco existen distintos centros de spa que te ayudarán a impulsar tu bienestar mediante la salud física y mental.',
                'orden_seccion' => 2,
                'pagina_id' => 8
            ],
            [
                'titulo_es' => '¿Qué voy a hacer?',
                'texto_es' => 'En el spa hacen uso de distintas modalidades en terapias, tratamientos y actividades de relajación a través del temazcal, jacuzzis, hidromasajes, saunas, piscinas, tinas de baño, aguas medicinales y balnearios. Asimismo, cuentan con centro de belleza para que te realicen exfoliaciones, pedicure, manicure o tratamientos cosméticos.',
                'orden_seccion' => 3,
                'pagina_id' => 8
            ],
            [
                'titulo_es' => '¿Qué empresas dan el servicio?',
                'texto_es' => 'Eco Spa, SPA con aroma a Oaxaca, SPA en Huatulco Harmony, Temazcal SPA Maya, Xquenda Huatulco SPA
Tomy´s SPA, Flor Loto Holistic Center y La Casa del Sol Temazcal & Spa.',
                'orden_seccion' => 4,
                'pagina_id' => 8
            ],
            [
                'titulo_es' => '¿Cómo llegar?',
                'texto_es' => 'Si estás hospedado en algún hotel, pregunta por el servicio de traslado al SPA. Si te situas en la crucecita puedes llegar de forma particular a traves de un taxi especial o auto particular a  la  bahía de Chahué, Santa Cruz o Tangolunga, según corresponda la dirección del sitio.',
                'orden_seccion' => 5,
                'pagina_id' => 8
            ],
            [
                'titulo_es' => 'Horarios',
                'texto_es' => ' Horario de 8:00 am a 8:00 pm todos los días.',
                'orden_seccion' => 6,
                'pagina_id' => 8
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'Para mayor comodidad y calidad en servicio, acude en el horario previamente establecido por medio de una cita. Si así lo deseas, puedes llevar una toalla para cubrir el cuerpo al terminar el servicio. Si acudes por vez primera, relájate y disfruta esta experiencia enriquecedora.',
                'orden_seccion' => 7,
                'pagina_id' => 8
            ],
            [
                'titulo_es' => 'Sol y Playa',
                'texto_es' => 'El sol y la playa, dos elementos que te  permitirán desconectarte de la rutina  y conectarte con la belleza  natural de las bahías. Sentirte libre, tocar la arena, mirar el paisaje, pasar mucho tiempo en el agua, ver salir al sol y  contemplar atardeceres  son cosas que te encantarán.  Las  actividades recreativas que ofrece Bahías de Huatulco están vinculadas con  el disfrute del sol y la playa, tales como  nadar en el mar,  asistir a los clubes de playa,  realizar recorridos en  catamarán, lancha, yate, velero o  moto acuática.',
                'orden_seccion' => 0,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Clubes de playa',
                'texto_es' => 'Los clubes de playa son espacios recreativos donde puedes relajarte y refrescarte. Se ubican en su mayoría a orilla de la playa y dentro de sus instalaciones puedes encontrar piscinas, área de camastros y  sombrillas. Dentro de sus servicio de alimentos y bebidas podrás encontrar desde  botanas o barra de snack´s hasta una variedad de platillos a la carta.',
                'orden_seccion' => 1,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => 'Si deseas relajarte, escoger tu camastro, refrescarte,  y estar junto al mar disfrutando del paisaje,  en la bahía de Santa Cruz y Chahué podrás encontrar  clubes de playa.',
                'orden_seccion' => 2,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => '¿Qué voy a hacer?',
                'texto_es' => 'En los clubes de playa puedes hacer uso de las piscinas,   tomar el sol en los camastros, además de deleitar tu paladar  con el menú de alimentos y bebidas que ofrecen dichos establecimientos. También puedes divertirte con las actividades recreativas que ofrecen durante el día. Algunos de estos espacios también cuentan con servicios adicionales como salones para eventos, gimnasio y área wellness.',
                'orden_seccion' => 3,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => '¿Qué empresas dan el servicio?',
                'texto_es' => 'Las empresas que ofrecen el servicio de clubes de playa en  Conejos, Tangolunda,  Chahué y Santa Cruz son principalmente: Secrets Huatulco Resort & Spa, Barceló Huatulco, Dreams Huatulco Resort & Spa, Las Brisas, Sea Soul Beach Club y  Castillo Huatulco. Es importante mencionar que hay hoteles que ofrecen el sistema de day pass (pase de día), otros emplean membresías con un cobro fijo.',
                'orden_seccion' => 4,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Cómo llegar?',
                'texto_es' => 'Los sitios más alejados de la Crucecita son Conejos y Tangolunda y por tanto para llegar a estos clubes de playa se puede optar  por el taxi o vehículo propio. En el caso de los sitios que se ubican en Santa Cruz o Chahué, dependerá del lugar donde pretendas hospedarte, ya que puedes tener la opción de llegar caminando, en taxi o vehículo propio.',
                'orden_seccion' => 5,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Horarios',
                'texto_es' => 'Cada club de playa cuenta con horarios de servicios distintos, entre las 9:00 am y 08:00 pm.',
                'orden_seccion' => 6,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'Te invito a informarte de los  horarios de servicio de los clubes de playa, así como de los  sistemas de cobro  y servicios que incluye. Es posible que en temporada alta algunos hoteles otorguen solo este servicio a sus huéspedes. No olvides llevar tu traje de baño, sandalias, gafas y protección solar biodegradable.',
                'orden_seccion' => 7,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Baño en el mar',
                'texto_es' => 'Bañarse en el mar, práctica cotidiana que implica ir a nadar y refrescarte  con la brisa marina., además que, en algunos lapsos de tiempo, puedes tomar el sol o simplemente sentarte en  la arena y contemplar la naturaleza.  Esta actividad  trae consigo beneficios físicos y terapeúticos. ¡No puedes dejar de vivir esta experiencia!',
                'orden_seccion' => 8,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => ' A lo largo de las nueve bahías podróas disfrutar de diversas playas donde tendrás  la oportunidad  de experimentar un  relajante baño en el mar y disfrutar de los magnificos escenarios naturales.',
                'orden_seccion' => 9,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => '¿Qué voy a hacer?',
                'texto_es' => 'En cada una de las bahías o playas que conforman este destino, disfrutarás de  un relajante baño mientras contemplas la belleza del panorama natural y sus cristalinas aguas que Huatulco tiene para ti.  Si vas en familia hay playas como  Santa Cruz,  La Entrega, Maguey  o San Agustín donde pueden disfrutar chicos y grandes. Si lo que buscas es algo más privado, El Órgano, El Violín y la India pueden ser espacios perfectos.',
                'orden_seccion' => 10,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => '¿Qué empresas dan el servicio?',
                'texto_es' => 'Las principales playas en Bahías de Huatulco son de acceso al público, por lo tanto Huatulco te ofrece  múltiples opciones para nadar en cada una de sus playas. ',
                'orden_seccion' => 11,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Cómo llegar?',
                'texto_es' => 'Hay varias opciones para llegar a las playas, por vía terrestre  puedes  optar po  taxi, automóvil propio o con la asistencia de una agencia de viajes o guía de turistas certificado. En el caso de las playas que sólo tienen acceso por vía marítima, el servicio colectivo del catamarán o en algunos casos en  viajes privados ya sea en lancha o yate.',
                'orden_seccion' => 12,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Horarios',
                'texto_es' => 'Los  horarios para salir a nadar normalmente se da entre las  9:00 am y las  06:00 p.m., aunque algunas personas, por los efectos de la exposición al sol, optan por ir antes o después del horario antes mencionado.',
                'orden_seccion' => 13,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'Durante las actividades procura no exponerte al sol por tiempo prolongado entre las 11:00 am y 03:00 pm puesto que los rayos solares son más intensos. 
                Cuida este destino natural utilizando productos biodegradables  como el  bloqueador solar. Evita  tanto alimentar  a la fauna marina como pisar y fragmentar corales. Te invitamos a respetar las señalizaciones  e indicaciones de las playas.  Reduce la cantidad de basura y asegúrate llevarte toda la que vas a  generar en tu visita.',
                'orden_seccion' => 14,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Jet ski y banana',
                'texto_es' => 'Jet ski y el paseo en banana son actividades recreativas acuáticas que al practicarlas podrás liberar estrés y  sentir la adrenalina.  Con el Jet ski o moto acuática tienes la  oportunidad de recorrer las playas de una forma más rápida y sintiendo la brisa del mar.  En lo que se refiere al inflable acuático, conocido coloquialmente como "banana", el efecto que produce la lancha al momento de arrastrar este artefacto a  gran velocidad, te generará momento de diversión, ya que buscarás  mantenerte  en equilibiro para no ser lanzado(a) al mar.',
                'orden_seccion' => 15,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => 'Unas de las actividades que puedes realizar para disfrutar aún más de tu viaje a las Bahías de Huatulco es  Jet ski y banana.',
                'orden_seccion' => 16,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => '¿Qué voy a hacer?',
                'texto_es' => 'En estas actividades puedes disfrutar de las playas de una forma distinta,  experimenta esta aventura a bordo de la "banana" o a través de un jet ski o moto acuática que ofrece tours en los que te permitirán  trasladarte de una playa a otra.',
                'orden_seccion' => 17,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => '¿Qué empresas dan el servicio?',
                'texto_es' => 'Existen distintas empresas que te brindan el servicio del paseo en la banana o jet ski, comúnmente se sitúan directamente en las playas principales como: "La Entrega", "Maguey", "Santa Cruz", "El Arrocito" y "San Agustín".',
                'orden_seccion' => 18,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Cómo llegar?',
                'texto_es' => 'Se trata principalmente de arribar a la playa de tu interés, a través del uso de un automóvil particular o el servicio de taxi local en dirección a la zona de Santa Cruz. ',
                'orden_seccion' => 19,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Horarios',
                'texto_es' => 'El servicio de recorridos comprende un horario entre las 9:00 am y 6:00 pm.',
                'orden_seccion' => 20,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'Durante la realización de las actividades preste atención a las instrucciones del guía, utilice el equipo de seguridad como el chaleco salvavidas o los flotadores. 
                Protege tu salud y el entorno natural usando productos ecológicos como el bloqueador y bronceador solar. 
                Sé responsable al adquirir el servicio y evita realizar maniobras de riesgo durante la actividad.',
                'orden_seccion' => 21,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Paseo en lancha',
                'texto_es' => 'El paseo en lancha implica el recorrido en lancha por las bahías de Huatulco. Todo dependerá del número de bahías que desees recorrer. Durante el viaje el guía y capitán de la embarcación realizará un recorrido donde realizará una descripción de la flora y fauna del sitio. Durante el tour se realizan paradas, ya sea para practicar snorkel, nadar y/o comer.',
                'orden_seccion' => 22,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => 'Los recorridos a través de las embarcaciones turísticas, son una forma especial que te permitirán conocer las bahías y playas rodeadas de naturaleza que Bahías de Huatulco tiene para ti, ven y disfruta de las hermosas playas a bordo de una lancha. 
                ',
                'orden_seccion' => 23,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => '¿Qué voy a hacer?',
                'texto_es' => 'El paseo en lancha es un recorrido marítimo que te invita a conocer y disfrutar de los atractivos naturales principales de este destino, como: el bufadero, la formación rocosa “La Cara de Piedra” , Roca blanca y otras playas. Asimismo, realizarás una parada  en una playa para ingerir alimentos y practicar snokel antes de volver. ',
                'orden_seccion' => 24,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => '¿Qué empresas dan el servicio?',
                'texto_es' => 'Las empresas que ofrecen este servicio son Paraiso Huatulco, Sicaruu, Huatulco Activities, Huatulco Salvaje y las sociedades cooperativas y empresas de transportación marítima  que se ubican en la dársena de Santa Cruz.',
                'orden_seccion' => 25,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Cómo llegar?',
                'texto_es' => 'Las embarcaciones parten de la dársena de Santa Cruz, asimismo, las empresas prestadora de servicios cuentan con taquillas en la misma zona para proporcionar información acerca de cada tour y sus respectivas tarifas. Para arribar al sitio de Santa Cruz es a través de vehículo particular o mediante el servicio de taxis locales. ',
                'orden_seccion' => 26,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Horarios',
                'texto_es' => 'Los horarios se encuentran establecidos según el tipo y duración del tour de interés, sin embargo, se imparten aproximadamente a partir de las 9:00 am a las 5:00 pm.',
                'orden_seccion' => 27,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'Durante la actividad es recomendable utilizar el chaleco salvavidas que proporcionan las embarcaciones al inicio del recorrido, evitar ponerse de pie durante la navegación, cuidar del entorno natural depositando la basura dentro de la embarcación, así como utilizar productos ecológicos como el protector y bloqueador solar. ',
                'orden_seccion' => 28,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Veleo',
                'texto_es' => 'Recorrer las aguas de Huatulco a bordo de un  velero, resulta ideal para disfrutar de los bellos paisajes que el destino turístico te ofrece. El velerismo como recreo, es una práctica naútica donde la fuerza del  viento y las corrientes de agua juegan un papel importante.',
                'orden_seccion' => 29,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => 'Vive el sueño de navegar en un velero sobre las playas de Bahías de Huatulco.',
                'orden_seccion' => 30,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => '¿Qué voy a hacer?',
                'texto_es' => 'Durante el recorrido puedes disfrutar de paisajes naturales, así como la observación de fauna marina, admirar la belleza de las puestas de sol, sin duda un lugar que te encantara.',
                'orden_seccion' => 31,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => '¿Qué empresas dan el servicio?',
                'texto_es' => 'Las empresas que ofrecen el servicio de veleros, son  Descubre Huatulco Tours & Adventure y Sailing Huatulco Velero Luna Azul. El servicio de velero es privado con capacidad máxima de 10 personas.',
                'orden_seccion' => 32,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Cómo llegar?',
                'texto_es' => 'Las embarcaciones parten del muelle de Santa Cruz, asimismo, las empresas prestadora de servicios cuentan con taquillas en la misma zona para proporcionar información acerca de cada tour y sus respectivas tarifas. Para arribar al sitio de Santa Cruz es a través de un carro particular o mediante el servicio de taxis locales. ',
                'orden_seccion' => 33,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Horarios',
                'texto_es' => 'Los horarios se encuentran establecidos según el tipo y duración del tour de interés, sin embargo, se imparten aproximadamente a partir de las 9:00 am a las 5:00 pm. ',
                'orden_seccion' => 34,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'Durante la actividad es recomendable hacer uso de ropa cómoda, bloqueador solar o bronceador ecológico, cámara fotográfica y prestar atención a las instrucciones del guía, utilice el equipo de seguridad como el chaleco salvavidas o los flotadores.',
                'orden_seccion' => 35,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Juego de playa',
                'texto_es' => 'Los juegos de playa no podían faltar en Huatulco. En las principales playas podrás disfrutas desde construir el castillo de arena, cavar un pozo, enterrarte en la arena hasta disfrutar en ciertos espacios del voleybol y  el futbol playero. ',
                'orden_seccion' => 36,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => 'Los juegos de playa como juegos en la arena, así como futbol o voleibol harán de tu estancia en Huatulco algo diferente y atractivo.',
                'orden_seccion' => 37,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => '¿Qué voy a hacer?',
                'texto_es' => 'En estos juegos podrás disfrutar de un momento de calidad con tu familia o amigos practicando voleibol playero o soccer playero.',
                'orden_seccion' => 38,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => '¿Qué empresas dan el servicio?',
                'texto_es' => 'En taxi de sitio o en automóvil propio, solo tienes que dirigirte a cualquier playa que quieras disfrutar. ',
                'orden_seccion' => 39,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Cómo llegar?',
                'texto_es' => 'Las playas en dónde puedes encontrar con más frecuencia este tipo de actividades es Chahué y Tangolunda.',
                'orden_seccion' => 40,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Horarios',
                'texto_es' => 'Puede disfrutar de un juego desde las 8:00 horas hasta las 18:00 horas que hay luz solar.',
                'orden_seccion' => 41,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'Usar ropa cómoda, bloqueador solar, hidratarse constantemente y llevar repuestos de balones.',
                'orden_seccion' => 42,
                'pagina_id' => 9
            ],
            [
                'titulo_es' => 'Turismo de Aventura',
                'texto_es' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'orden_seccion' => 0,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Kayak en mar y rio',
                'texto_es' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'orden_seccion' => 1,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => 'Esta actividad se puede realizar en Bahía Santa Cruz, Playa Paraíso, Playa la Entrega, Playa Maguey, Playa San Agustín, Play Riscalillo.',
                'orden_seccion' => 2,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Qué voy a hacer?',
                'texto_es' => 'Actividades como remar kayaks en las playas de la costa de Oaxaca y afines. Los kayaks de mar son pequeñas embarcaciones marinas donde te propulsarás a través de una pala de dos hojas.',
                'orden_seccion' => 3,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Qué empresas dan el servicio?',
                'texto_es' => 'Las empresas prestadoras de este servicio son Oaxaca Expediciones y Hurricane Divers.',
                'orden_seccion' => 4,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Cómo llegar?',
                'texto_es' => 'Del Parque Central de la Crucecita, Huatulco, se puede llegar a las empresas prestadoras del servicio, ya sea tomando un taxi colectivo, especial o en transporte privado.  Estas empresas ofrecen el tour y se encargan del traslado en ida y vuelta desde Bahías de Huatulco.',
                'orden_seccion' => 5,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Horarios',
                'texto_es' => 'El horario que manejan las empresas para realizar esta actividad es de 9:00 a.m. a 6:00 p.m.',
                'orden_seccion' => 6,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'Utilizar correctamente el equipo y seguir las indicaciones del guía.',
                'orden_seccion' => 7,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Rafting niveles 1,2,3 y 4',
                'texto_es' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'orden_seccion' => 8,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => 'Esta actividad se puede realizar en las comunidades San José Alemania, Las Hamacas, Zimatán y Puente Bocana.',
                'orden_seccion' => 9,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Qué voy a hacer?',
                'texto_es' => 'Descender en una embarcación sin motor sobre las fuertes corrientes de los ríos de la región. ',
                'orden_seccion' => 10,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Qué empresas dan el servicio?',
                'texto_es' => ' Las empresas prestadoras de este servicio son Huatulco Expediciones, Paraíso Huatulco y Huatulco Activities',
                'orden_seccion' => 11,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Cómo llegar?',
                'texto_es' => 'Del Parque Central de la Crucecita, Huatulco, se puede llegar a las empresas prestadoras del servicio, ya sea tomando un taxi colectivo, especial o en transporte privado.  Estas empresas ofrecen el tour y se encargan del traslado en ida y vuelta desde Bahías de Huatulco.',
                'orden_seccion' => 12,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Horarios',
                'texto_es' => 'El horario que manejan las empresas para realizar esta actividad es de 9:00 a.m. a 6:00 p.m.',
                'orden_seccion' => 13,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'Usar bloqueador solar. Traer traje de baño y dinero en efectivo.',
                'orden_seccion' => 14,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Snorkel nocturno',
                'texto_es' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'orden_seccion' => 15,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => 'Esta actividad se puede realizar en Playa la Entrega, Órgano y Cacaluta.',
                'orden_seccion' => 16,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Qué voy a hacer?',
                'texto_es' => 'Nadar en medio de animales marinos, donde gracias a la bioluminiscencia pueden observarse las diversas formas y colores de la fauna. ',
                'orden_seccion' => 17,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Qué empresas dan el servicio?',
                'texto_es' => ' Las empresas prestadoras de este servicio son Aventura Mundo y Huatulco Salvaje.',
                'orden_seccion' => 18,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Cómo llegar?',
                'texto_es' => 'Del Parque Central de la Crucecita, Huatulco, se puede llegar a las empresas prestadoras del servicio, ya sea tomando un taxi colectivo, especial o en transporte privado.  Estas empresas ofrecen el tour y se encargan del traslado en ida y vuelta desde Bahías de Huatulco.',
                'orden_seccion' => 19,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Horarios',
                'texto_es' => 'El horario que manejan las empresas para realizar esta actividad es de 8:00 p.m. a 10:00 p.m.',
                'orden_seccion' => 20,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'Usar adecuadamente el equipo y no dañar los ecosistemas marinos. Traer una toalla.',
                'orden_seccion' => 21,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Paseo en bici y ciclismo de monstaña',
                'texto_es' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'orden_seccion' => 22,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => 'Esta actividad se puede realizar en Cacaluta y miradores de las Bahías de Huatulco.',
                'orden_seccion' => 23,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Qué voy a hacer?',
                'texto_es' => 'Pedalear una bicicleta entre caminos que te permitirán conocer los miradores, bulevares y paisajes de la selva de Huatulco. ',
                'orden_seccion' => 24,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Qué empresas dan el servicio?',
                'texto_es' => ' Las empresas prestadoras de este servicio son Descubre Huatulco y Huatulco Salvaje',
                'orden_seccion' => 25,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Cómo llegar?',
                'texto_es' => 'Del Parque Central de la Crucecita, Huatulco, se puede llegar a las empresas prestadoras del servicio, ya sea tomando un taxi colectivo, especial o en transporte privado.  Estas empresas ofrecen el tour y se encargan del traslado en ida y vuelta desde Bahías de Huatulco.',
                'orden_seccion' => 26,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Horarios',
                'texto_es' => 'El horario que manejan las empresas para realizar esta actividad es de 8:00 a.m. a 8:00 p.m.',
                'orden_seccion' => 27,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'Usar adecuadamente el equipo y respetar las señales de tránsito y vialidad. ',
                'orden_seccion' => 28,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Campismo',
                'texto_es' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'orden_seccion' => 29,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => 'Esta actividad se puede realizar en Bahía de San Agustín.',
                'orden_seccion' => 30,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Qué voy a hacer?',
                'texto_es' => 'Acampar en un espacio al aire libre, colocando casas de campaña temporales. ',
                'orden_seccion' => 31,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Qué empresas dan el servicio?',
                'texto_es' => ' La empresa prestadora de este servicio es Camping Don Taco.',
                'orden_seccion' => 32,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Cómo llegar?',
                'texto_es' => 'Del Parque Central de la Crucecita, Huatulco, se puede llegar a las empresas prestadoras del servicio, ya sea tomando un taxi colectivo, especial o en transporte privado.  Estas empresas ofrecen el tour y se encargan del traslado en ida y vuelta desde Bahías de Huatulco.',
                'orden_seccion' => 33,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Horarios',
                'texto_es' => 'Abierto las 24 horas',
                'orden_seccion' => 34,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'No olvidar llevar su equipo básico, de cocina, para dormir y de aseo. ',
                'orden_seccion' => 35,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Rappel',
                'texto_es' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'orden_seccion' => 36,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => 'Esta actividad se puede realizar en Bocana del Río Copalita.',
                'orden_seccion' => 37,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Qué voy a hacer?',
                'texto_es' => 'Practicar escalada en roca sobre paredes verticales. ',
                'orden_seccion' => 38,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Qué empresas dan el servicio?',
                'texto_es' => ' La empresa prestadora de este servicio es Huatulco Expediciones. ',
                'orden_seccion' => 39,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Cómo llegar?',
                'texto_es' => 'Del Parque Central de la Crucecita, Huatulco, se puede llegar a las empresas prestadoras del servicio, ya sea tomando un taxi colectivo, especial o en transporte privado.  Estas empresas ofrecen el tour y se encargan del traslado en ida y vuelta desde Bahías de Huatulco.',
                'orden_seccion' => 40,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Horarios',
                'texto_es' => 'El horario que manejan las empresas para realizar esta actividad es de 9:00 a.m. a 6:00 p.m.',
                'orden_seccion' => 41,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'Usar adecuadamente el equipo necesario, tomar periodos de descanso, mantener el equilibrio y realizar la actividad lentamente. ',
                'orden_seccion' => 42,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Tirolesa',
                'texto_es' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'orden_seccion' => 43,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => 'Esta actividad se puede realizar en Tangolunda, Huatulco.',
                'orden_seccion' => 44,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Qué voy a hacer?',
                'texto_es' => 'Deslizamientos a través de una tirolesa ubicada en una zona montañosa rodeada de flora y fauna. ',
                'orden_seccion' => 45,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Qué empresas dan el servicio?',
                'texto_es' => ' Las empresas prestadoras de este servicio son Huatulco Expediciones y Huatulco Activities. ',
                'orden_seccion' => 46,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Cómo llegar?',
                'texto_es' => 'Del Parque Central de la Crucecita, Huatulco, se puede llegar a las empresas prestadoras del servicio, ya sea tomando un taxi colectivo, especial o en transporte privado.  Estas empresas ofrecen el tour y se encargan del traslado en ida y vuelta desde Bahías de Huatulco.',
                'orden_seccion' => 47,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Horarios',
                'texto_es' => 'El horario que manejan las empresas para realizar esta actividad es de 9:00 a.m. a 6:00 p.m.',
                'orden_seccion' => 48,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'Seguir todas las instrucciones de los guías y verificar cuidadosamente el equipo utilizado. Usar ropa y zapatos cómodos, repelente y lentes de sol. ',
                'orden_seccion' => 49,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Excursionismo',
                'texto_es' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'orden_seccion' => 50,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => 'Esta actividad se puede realizar en las Montañas cafetaleras y playas de la costa Oaxaqueña.',
                'orden_seccion' => 51,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Qué voy a hacer?',
                'texto_es' => 'Travesías en las playas, selva y montañas de la sierra oaxaqueña. ',
                'orden_seccion' => 52,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Qué empresas dan el servicio?',
                'texto_es' => ' Las empresas prestadoras de este servicio son Paraíso Huatulco, Aventura Mundo, Huatulco Salvaje y Oaxaca Expediciones. ',
                'orden_seccion' => 53,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Cómo llegar?',
                'texto_es' => 'Del Parque Central de la Crucecita, Huatulco, se puede llegar a las empresas prestadoras del servicio, ya sea tomando un taxi colectivo, especial o en transporte privado.  Estas empresas ofrecen el tour y se encargan del traslado en ida y vuelta desde Bahías de Huatulco.',
                'orden_seccion' => 54,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Horarios',
                'texto_es' => 'El horario que manejan las empresas para realizar esta actividad es de 9:00 a.m. a 6:00 p.m.',
                'orden_seccion' => 55,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'Usar ropa y zapatos cómodos. Traer traje de baño, repelente y dinero en efectivo. ',
                'orden_seccion' => 56,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Senderismo-Caminata',
                'texto_es' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'orden_seccion' => 57,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => 'Esta actividad se puede realizar en el Parque Nacional Huatulco, Punta Cometa Mazunte, Bahía Cacaluta.',
                'orden_seccion' => 58,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Qué voy a hacer?',
                'texto_es' => 'Caminar sobre senderos a la orilla del mar, explorar caminos llenos de flora y fauna, o visitar fincas cafetaleras. ',
                'orden_seccion' => 59,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Qué empresas dan el servicio?',
                'texto_es' => ' Las empresas prestadoras de este servicio son Huatulco Salvaje, Oaxaca Expediciones y Aventura Mundo. ',
                'orden_seccion' => 60,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Cómo llegar?',
                'texto_es' => 'Del Parque Central de la Crucecita, Huatulco, se puede llegar a las empresas prestadoras del servicio, ya sea tomando un taxi colectivo, especial o en transporte privado.  Estas empresas ofrecen el tour y se encargan del traslado en ida y vuelta desde Bahías de Huatulco.',
                'orden_seccion' => 61,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Horarios',
                'texto_es' => 'El horario que manejan las empresas para realizar esta actividad es de 7:00 a.m. a 7:00 p.m.',
                'orden_seccion' => 62,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'Usar ropa y calzado para senderismo. Traer agua y alimentos. ',
                'orden_seccion' => 63,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Paseo a caballo',
                'texto_es' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'orden_seccion' => 64,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Dónde?',
                'texto_es' => ' Esta actividad se puede realizar en Tangolunda, Huatulco.',
                'orden_seccion' => 65,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Qué voy a hacer?',
                'texto_es' => 'Dar un paseo a caballo por senderos repletos de flora y fauna representativa de Huatulco, llegando a la orilla de un río y cruzándolo a caballo. ',
                'orden_seccion' => 66,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Qué empresas dan el servicio?',
                'texto_es' => ' Las empresas prestadoras de este servicio son  Rancho Caballo de Mar y Huatulco Activities. ',
                'orden_seccion' => 67,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => '¿Cómo llegar?',
                'texto_es' => 'Del Parque Central de la Crucecita, Huatulco, se puede llegar a las empresas prestadoras del servicio, ya sea tomando un taxi colectivo, especial o en transporte privado.  Estas empresas ofrecen el tour y se encargan del traslado en ida y vuelta desde Bahías de Huatulco.',
                'orden_seccion' => 68,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Horarios',
                'texto_es' => 'El horario que manejan las empresas para realizar esta actividad es de 10:00 a.m. a 3:00 p.m.',
                'orden_seccion' => 69,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Recomendaciones',
                'texto_es' => 'Usar jeans, tenis o sandalias cerradas, gorra, bloqueador, lentes y repelente. Traer traje de baño, toalla y agua. ',
                'orden_seccion' => 70,
                'pagina_id' => 10
            ],
            [
                'titulo_es' => 'Turismo Cultural',
                'texto_es' => 'La Costa central oaxaqueña es una región con una historia antiquísima y con evidencia de presencia humana desde el neolítico. En Huatulco, la relación del hombre con la naturaleza ha permitido el desarrollo de su cultura. Este espacio es caracterizado por una constante fluctuación de población debido a una posición geográfica estratégica; donde converge una geografía accidentada con tres nichos ecológicos y sus transiciones: costa, selva y 
                montaña. Esa peculiaridad y la confluencia de distintas cosmovisiones vuelven a Huatulco un lugar cosmopolita hasta la actualidad. Huatulco es un "destino" turístico con un gran bagaje cultural expresado en su historia, en los sitios arqueológicos, así como en los nombres de sus pueblos, playas y bahías; en su arquitectura implantada para las Bahías donde converge en la zona hotelera un estilo mediterráneo con el centro de la Crucecita de un estilo colonial 
                mexicano.',
                'orden_seccion' => 0,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Museos y galerias',
                'texto_es' => 'Los museos y las galerías de arte, espacios donde encontrarás  colecciones de objetos que dan significado a la cultura de un lugar.  Un lugar donde se pueder concer la historia y modos de vida de la región ,así como las expresiones artísticas que recrean las diversas formas de percibir el mundo.
                ',
                'orden_seccion' => 1,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Museos y galerias',
                'texto_es' => ' En Bahías de Huatulco, principalmente en la zona de La Bocana, Santa Cruz, La Crucecita y los alrededores, en Mazunte.
                ',
                'orden_seccion' => 2,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Museos y galerias',
                'texto_es' => ' En Huatulco existen diferentes instituciones y empresas que forman parte del atractivo cultural del destino como: Museo del Sitio del Parque Eco-arqueológico de Copalita,de manera temporal  en la Casa de la Cultura Macedonio Alcalá, Profa. Dula Amparo Carmona Coello y en el Colectivo Tilcoatle  se organizan exposiciones de pintura, escultura y fotografía. En Mazunte se ubica el  Museo de la Tortuga.  En lo que se refiere a galerías  se ubica Europa Galeria de Arte, Galeria Rubin  y Rafael Ortega.
                ',
                'orden_seccion' => 3,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Museos y galerias',
                'texto_es' => ' En la visita al museo de sitio de la Zona Arqueológica de Copalita recorrerás la sala con apoyo de un guía de turistas quien te ofrecerá una explicación de las culturas que se asentaron en la región de la costa.  En lo que se refiere a los eventos de la Casa de la Cultura y el colectivo Tilcoatle disfrutarás de las exposiciones de pintura, escultura y fotografía  temporales.  En Mazunte, en el Museo de la Tortuga  desde la  interpretación ambiental conocerás todo acerca de esta especie en peligro de extinción. Por otro lado, en las galerías de arte, disrutarás de las obras expuestas. 
                ',
                'orden_seccion' => 4,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Museos y galerias',
                'texto_es' => ' En Bahías de Huatulco, principalmente en la zona de La Bocana, Santa Cruz, La Crucecita y los alrededores, en Mazunte.
                ',
                'orden_seccion' => 5,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Museos y galerias',
                'texto_es' => ' Existen diferentes horarios en cada una de las actividades que varían de las 9:00- 21:00 horas.
                ',
                'orden_seccion' => 6,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Museos y galerias',
                'texto_es' => ' Se recomienda tener respeto por cada uno de los lugares que se visite, puesto que, son obras únicas que no deben ser tocadas ni maltratadas, asimismo, se recomienda llevar ropa cómoda y fresca, bloqueador solar ecológico y beber agua para hidratarse constantemente.
                ',
                'orden_seccion' => 7,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Arquitectura y urbanismo',
                'texto_es' => 'Bahías de Huatulco, Centro Turístico Integralmente Planeado mantiene una organización de sus edificios y espacios que forman parte del polígono trazado por el Fondo Nacional de Fomento al Turismo (FONATUR). En las cercanías se identifica arquitectura vernácula, es decir,   diseños arquitectónicos  con materiales típicos que caracterizan a la región.  Un contraste de formas  y colores que observarás al recorrer este destino turístico.
                ',
                'orden_seccion' => 8,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Arquitectura y urbanismo',
                'texto_es' => ' En Bahías de Huatulco y sus alrededores como Las Fincas Cafetaleras.
                ',
                'orden_seccion' => 9,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Arquitectura y urbanismo',
                'texto_es' => ' Visitarás los íconos arquitectónicos emblemáticos del destino, así como sus alrededores. Mismos que incluyen arquitectura prehispánica, colonial y contemporánea. Algunos de estos están diseñados para ser accesibles.
                ',
                'orden_seccion' => 10,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Arquitectura y urbanismo',
                'texto_es' => ' Existen diferentes instituciones y empresas que forman parte de la expresión de la arquitectura y urbanismo de Huatulco como: Fincas cafetaleras que muestran una arquitectura vernácula, la imagen urbana de la Crucecita se inspira en la época colonial administrada por FONATUR, Club de campo de golf que muestra una arquitectura pintoresca inspirada en las haciendas cafetaleras, diferentes parques y jardines que demuestran la belleza natural del destino, así como edificaciones urbanas como la iglesia de la Crucecita y el muelle de cruceros. Cada una de estas instituciones y empresas ofreciendo un excelente servicio a cada uno de los turistas que visitan Huatulco.                        
                ',
                'orden_seccion' => 11,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Arquitectura y urbanismo',
                'texto_es' => ' Puedes trasladarte mediante sitios en taxi o en automóvil propio.
                ',
                'orden_seccion' => 12,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Arquitectura y urbanismo',
                'texto_es' => ' Preguntar por los horarios de visita a los centros religiosos o instituciones.
                ',
                'orden_seccion' => 13,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Arquitectura y urbanismo',
                'texto_es' => ' Se recomienda tener respeto por cada uno de los lugares que se visite ya que son obras que no deben ser tocadas ni maltratadas. También se recomienda llevar ropa cómoda, así como bloqueador solar ecológico. Para mayor información llamar directamente a los lugares para consultar las recomendaciones previas a la visita.
                ',
                'orden_seccion' => 14,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Arte',
                'texto_es' => 'Bahías de Huatulco te invita a poner atención a los detalles. Te invito a jugar a la búsqueda del tesoro perdido, localizando pinturas, murales y  esculturas que se encuentran en algún rincón del destino turístico. 
                ',
                'orden_seccion' => 15,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Arte',
                'texto_es' => ' Existen diferentes lugares en Huatulco en donde podrás encontrar expresiones de arte como: espacios públicos (calles, jardines, parques, iglesias y edificios), también se pueden observar en algunos establecimientos de hospedaje y alimentación y en casas particulares que cuentan con pinturas y fotografías.
                ',
                'orden_seccion' => 16,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Arte',
                'texto_es' => ' A lo largo del complejo turístico Bahías de Huatulco existen diversas muestras de arte contemporáneo y regional, sus colores y formas imprimen un sello característico al lugar donde se localizan. De igual manera, en diversos puntos de Bahías de Huatulco se encuentran murales dignos de admirar. 
                ',
                'orden_seccion' => 17,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Arte',
                'texto_es' => ' Hay diferentes instituciones y empresas en donde se puede observar arte en Huatulco como: la pintura que ilustra la portada de la novela Huatulqueños por Leonardo Da Jandra que se encuentra en los pasillos del Hotel Dreams. En este mismo hotel se puede apreciar de igual manera el enorme Dragón Alebrije realizado en los talleres de don Jacobo y doña María Ángeles, en San Martín Tilcajete, Oaxaca.
                El Spa X-Quenda en la Bahía de Chahué tiene murales del pintor Rafael Ortega. 
                Así mismo se puede observar arte en la iglesia central de la Crucecita en donde se encuentra la Virgen de Guadalupe más grande del mundo pintada por José del Signo, sin duda una obra digna de admirar. 
                En el interior del palacio municipal de Santa María Huatulco se encuentra uno de los murales más importantes del destino: “Huatulco nuestro pasado, presente y futuro” realizado por el artista Rafael Ortega.                      
                ',
                'orden_seccion' => 18,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Arte',
                'texto_es' => ' Puedes llegar a cada uno de estos sitios facilmente en automóvil propio, trasladandote sobre el Blvd. Chahué y Blvd. Benito Juárez, o tomar un taxi de sitio que te lleve a cada uno de estas zonas.
                ',
                'orden_seccion' => 19,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Arte',
                'texto_es' => ' Hay diferentes horarios dependiendo los lugares a visitar por lo que es recomendable informarse directamente en dicho espacio.
                ',
                'orden_seccion' => 20,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Arte',
                'texto_es' => ' No tocar las obras de arte, utilice zapatos cómodos para poder contemplar el arte y tome fotografias sin flash.
                ',
                'orden_seccion' => 21,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Experiencias Gastronómicas',
                'texto_es' => 'Las  experiencias gastronómicas  no podían faltar en la costa oaxaqueña. Si eres extranjero  y quieres conocer más de la cocina mexicana, únete a la aventura. Desde un ambiente colaborativo, esta experiencia te  invita a  preparar  recetas tradicionales que se han transmitido de generación en generación.
                ',
                'orden_seccion' => 22,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Experiencias Gastronómicas (clases de cocina)',
                'texto_es' => ' Si eres extranjero y desear experimentar  la magia de la cocina mexicana: Wahaca Cooking   y Chiles & Chocolate  te permitirán  disfrutar  de la experiencia de elaborar platillos regionales.
                ',
                'orden_seccion' => 23,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Experiencias Gastronómicas (clases de cocina)',
                'texto_es' => ' Conocerán el procedimiento para la elaboración de ciertos platillos típicos mexicanos y de la región, teniendo una experiencia única.
                ',
                'orden_seccion' => 24,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Experiencias Gastronómicas (clases de cocina)',
                'texto_es' => ' Chiles & Chocolate Cooking Classes y Wahaca Cooking son los establecimientos que brindan el servicio de clases de comida mexicana y regional para los turistas principalmente extranjeros.
                ',
                'orden_seccion' => 25,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Experiencias Gastronómicas (clases de cocina)',
                'texto_es' => ' Puedes trasladarte en taxi o automóvil particular sobre Blvd. Benito Juárez a la altura de la Marina Chahué. Wahaca Cooking te transporta en su propio vehiculo desde la crucecita. 
                ',
                'orden_seccion' => 26,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Experiencias Gastronómicas (clases de cocina)',
                'texto_es' => ' El horario de servicio es de 9:00 a 17:00 hrs.
                ',
                'orden_seccion' => 27,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Experiencias Gastronómicas',
                'texto_es' => ' Para tener la mejor experiencia posible con las clases de cocina, favor de comunicarse directamente con las empresas para conocer sus requisitos, asi como el equipo apropiado que se estará utilizando para la realización de alimentos.
                ',
                'orden_seccion' => 28,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Gastronomía',
                'texto_es' => ' Las raíces culinarias han catalogado al estado de Oaxaca como uno de los destinos con una riqueza gastronómica capaz de satisfacer a los más exigentes paladares. Un mezcla de sabores, colores y olores en los platillos y bebidas que podrás degustar al venir a Huatulco.
                ',
                'orden_seccion' => 29,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Gastronomía',
                'texto_es' => ' Bahías de Huatulco es un destino turístico con espacios donde podrás degustar de la gastronomía regional. Además podrás disfrutar los distintos tipos de mezcal de la región y también de sus ricas cremas.
                ',
                'orden_seccion' => 30,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Gastronomía',
                'texto_es' => ' Podrás degustar diversos platillos típicos de la región como: tlayudas, mole negro, tacos diversos, sopes picadas y quesadillas, carnitas y barbacoa enchilada, Salsa y guisos con chicatana (hormiga voladora) solo en temporada, amarillo y caldo de gallina de rancho, tamales: de mole rojo, y de dulce de frutas diversas, tamales de elote, arroz con chepiles, molotes de plátano, Mariscos: Piña rellena, chacales (camarón de rio) y langosta (en temporada) camarones  y filetes de pescado preparados en una amplia variedad. Chocolate con pan de yema, atole de ajonjolí y café. Aguas y nieves de frutas varias. Cocadas, dulce de papaya.  En los alrededores de Bahías de Huatulco podras degustar platillos como: Agujón (pescado) frito o asado o en caldo,  enchilado de armadillo, huevos con tincuiches, caldo de chepiles con bolita de masa, caldo de quintoniles,  cocol, mole de fiesta, barbacoa de fiesta, pulque de palma. 
                ',
                'orden_seccion' => 31,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Gastronomía',
                'texto_es' => ' Las empresas locales que ofrecen servicios gastronómicos las podemos encontrar en diversos restaurantes de la crucecita, los mercados municipales "3 de Mayo" que se sitúa en Bahías de Huatulco y "Morelos” que se ubica en la cabecera municipal Santa María Huatulco. Asimismo, en el tianguis del sector T, o bien cada 15 días en el Mercado Orgánico de Bahías de Huatulco que se instala en Santa Cruz. Respecto a los pescados y mariscos, los restaurantes en playa pueden ofertar una variedad de platillos. 
                ',
                'orden_seccion' => 32,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Gastronomía',
                'texto_es' => ' Puedes trasladarte a cada uno de los establecimientos de alimentos y bebidas en taxi o automóvil particular. 
                ',
                'orden_seccion' => 33,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Gastronomía',
                'texto_es' => ' Los horarios de servicio varían entre las 7:00 am y las 9:00 pm.
                ',
                'orden_seccion' => 34,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Gastronomía',
                'texto_es' => ' Se recomienda llevar dinero en efectivo debido a que no todos los establecimientos de cocina tradicional aceptan tarjetas bancarias. Tome en cuenta que la comida de la Costa de Oaxaca tiene platillos que suelen ser un tanto condimentados y picantes.
                ',
                'orden_seccion' => 35,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Sitios arqueológicos',
                'texto_es' => 'Este asentamiento arqueológico fue ocupado entre los años 400 a 500 a.C. y posteriormente tuvo una re-ocupación entre los años 1000 al 1500 d.C.; figurillas de barro encontradas en el sitio lo comprueban. 
                ',
                'orden_seccion' => 36,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Sitios arqueológicos',
                'texto_es' => ' Boulevard Copalita-Tangolunda tramo 15, Bahías de Huatulco, Oaxaca, a 15 minutos del centro.
                ',
                'orden_seccion' => 37,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Sitios arqueológicos',
                'texto_es' => ' Vive una experiencia única en la zona arqueológica, donde podrás admirar un majestuoso centro ceremonial, una plaza rodeada de los vestigios de algunos edificios, así como apreciar una cancha de juego de pelota, la cual corresponde a uno de los rituales prehispánicos más emblemáticos de Mesoamérica. El juego de pelota ubicado en esta zona arqueológica es uno de los pocos en el país, edificados con tanta proximidad al mar, teniendo una experiencia increíble al poder visitar el lugar.
                ',
                'orden_seccion' => 38,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Sitios arqueológicos',
                'texto_es' => ' Ubicada a solo 15 minutos del destino turístico, donde puedes trasladarte de diferentes maneras, a través del servicio de taxis colectivos a Barra de Copalita o bien, un taxi especial hasta el parque Eco-Arqueológico o trasladarse en carro particular tomando el boulevard Copalita- Tagolunda.
                ',
                'orden_seccion' => 39,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Sitios arqueológicos',
                'texto_es' => ' 08:00–16:00 hrs.',
                'orden_seccion' => 40,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Sitios arqueológicos',
                'texto_es' => ' Para poder disfrutar de un día placentero recorriendo la zona arqueológica, es viable seguir las siguientes  recomendaciones como: llevar ropa cómoda y fresca, bloqueador solar ecológico, tener agua para hidratarse constantemente, también se recomienda no tocar los vestigios ni extraer pieza alguna de la zona arqueológica.',
                'orden_seccion' => 41,
                'pagina_id' => 11
            ],
            [
                'titulo_es' => 'Restaurantes',
                'texto_es' => 'La gastronomía de Oaxaca es una de las más famosas de México. En Bahías de Huatulco encontrarás una amplia gama de sabores, platillos y preparaciones para que tu experiencia sea única e irrepetible. Aquí podrás disfrutar de una enorme variedad de restaurantes, desde la auténtica cocina oaxaqueña hasta la cocina internacional más moderna. ¡Deleita a tu paladar con nuestra increíble oferta gastronómica!',
                'orden_seccion' => 1,
                'pagina_id' => 12
            ]
        ]);
    }
}
