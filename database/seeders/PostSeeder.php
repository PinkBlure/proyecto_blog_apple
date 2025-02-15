<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Post;

class PostSeeder extends Seeder
{
  public function run()
  {
    // Reseñas de productos
    Post::create([
      'title' => 'Reseña del nuevo iPhone 15',
      'slug' => Str::slug('Reseña del nuevo iPhone 15'),
      'body' => 'Este es un análisis detallado sobre las características del nuevo iPhone 15, incluyendo su pantalla Super Retina XDR, chip A17 Bionic, cámara mejorada y mucho más. La experiencia general ha mejorado mucho en comparación con versiones anteriores, y hemos probado todas sus nuevas características. En esta reseña profundizamos en cada aspecto y brindamos nuestra opinión sobre si realmente vale la pena comprarlo.',
      'type' => 'Reseñas de productos',
    ]);

    Post::create([
      'title' => 'Reseña del Apple Watch Ultra',
      'slug' => Str::slug('Reseña del Apple Watch Ultra'),
      'body' => 'El Apple Watch Ultra es el reloj inteligente más avanzado que Apple ha lanzado hasta la fecha. En esta reseña, exploramos sus nuevas funciones, como su mayor pantalla, la resistencia mejorada para deportes extremos y la duración extendida de la batería. Además, analizamos la experiencia del usuario con las aplicaciones, los nuevos sensores y el diseño robusto que promete ser el compañero ideal para los atletas y aventureros.',
      'type' => 'Reseñas de productos',
    ]);

    Post::create([
      'title' => 'Reseña de los AirPods Pro 2',
      'slug' => Str::slug('Reseña de los AirPods Pro 2'),
      'body' => 'Los AirPods Pro 2 de Apple vienen con una serie de mejoras significativas, como una mejor cancelación activa de ruido, mayor duración de batería y un sonido de calidad superior. En esta reseña, te contamos nuestra experiencia usando estos nuevos auriculares, tanto en ambientes ruidosos como en situaciones de descanso. Además, analizamos su integración con otros productos Apple, como el iPhone y el Apple Watch.',
      'type' => 'Reseñas de productos',
    ]);

    Post::create([
      'title' => 'Reseña de MacBook Pro 2025 con M2 Pro',
      'slug' => Str::slug('Reseña de MacBook Pro 2025 con M2 Pro'),
      'body' => 'El MacBook Pro 2025 con el chip M2 Pro ha mejorado significativamente en términos de rendimiento y eficiencia energética. En esta reseña, hablamos sobre sus nuevas características, como la pantalla Liquid Retina XDR, el procesador M2 Pro de 12 núcleos, y cómo se desempeña con tareas exigentes como edición de video y desarrollo de software. Además, analizamos la duración de la batería y la capacidad de almacenamiento.',
      'type' => 'Reseñas de productos',
    ]);

    Post::create([
      'title' => 'Reseña de los AirTags: ¿Vale la pena?',
      'slug' => Str::slug('Reseña de los AirTags: ¿Vale la pena?'),
      'body' => 'Los AirTags de Apple son pequeños dispositivos que te permiten rastrear tus pertenencias con la aplicación "Buscar". En esta reseña, te explicamos cómo funcionan, sus ventajas, cómo se conectan con otros dispositivos Apple y las posibles preocupaciones de privacidad. Hablamos sobre su uso práctico en la vida diaria y si realmente justifica su precio.',
      'type' => 'Reseñas de productos',
    ]);

    // Noticias de Apple
    Post::create([
      'title' => 'Novedades de Apple para 2025',
      'slug' => Str::slug('Novedades de Apple para 2025'),
      'body' => 'Apple está preparando una serie de lanzamientos para el año 2025, que incluyen innovaciones en dispositivos como el iPhone 16, nuevas versiones de los AirPods, y actualizaciones en su línea de software. En esta noticia, cubrimos todo lo que sabemos sobre los próximos lanzamientos y las expectativas en torno a estas novedades. Se espera que Apple continúe mejorando la integración entre su ecosistema de dispositivos, trayendo nuevas funcionalidades que revolucionen la forma en que usamos la tecnología.',
      'type' => 'Noticias de Apple',
    ]);

    Post::create([
      'title' => 'Apple lanza su primera tienda en realidad aumentada',
      'slug' => Str::slug('Apple lanza su primera tienda en realidad aumentada'),
      'body' => 'Apple ha dado un paso audaz al inaugurar su primera tienda en realidad aumentada. Los clientes pueden visitar la tienda desde sus dispositivos Apple y explorar productos como el iPhone, Mac y accesorios de una forma completamente nueva. Este movimiento es un avance significativo en la experiencia de compra, ofreciendo un espacio virtual para probar productos antes de tomar una decisión de compra. Te contamos todos los detalles sobre esta tienda innovadora y cómo cambiará la forma en que compramos tecnología.',
      'type' => 'Noticias de Apple',
    ]);

    Post::create([
      'title' => 'Apple trabaja en un coche autónomo',
      'slug' => Str::slug('Apple trabaja en un coche autónomo'),
      'body' => 'Apple ha confirmado que está desarrollando un coche autónomo con capacidades avanzadas de conducción sin intervención humana. Este proyecto secreto, conocido como "Titan", podría revolucionar la industria automotriz. En este artículo, analizamos las últimas filtraciones sobre el proyecto, las tecnologías involucradas y lo que significa este desarrollo para el futuro de Apple y su incursión en nuevas áreas de negocio.',
      'type' => 'Noticias de Apple',
    ]);

    Post::create([
      'title' => 'Apple supera los 2 billones de dólares en capitalización de mercado',
      'slug' => Str::slug('Apple supera los 2 billones de dólares en capitalización de mercado'),
      'body' => 'Apple ha alcanzado un hito histórico al superar los 2 billones de dólares en capitalización de mercado. Este logro la convierte en una de las empresas más valiosas del mundo, y es el resultado de años de innovación y crecimiento constante. En este artículo, exploramos cómo Apple llegó a este punto, qué significa para su futuro y qué factores clave han contribuido a su éxito continuo.',
      'type' => 'Noticias de Apple',
    ]);

    Post::create([
      'title' => 'Apple anuncia un nuevo sistema operativo con funciones revolucionarias',
      'slug' => Str::slug('Apple anuncia un nuevo sistema operativo con funciones revolucionarias'),
      'body' => 'Apple ha revelado su nuevo sistema operativo, con una serie de funciones revolucionarias que mejorarán la experiencia del usuario en dispositivos iPhone, iPad y Mac. Algunas de las características incluyen mejoras en la privacidad, nuevas opciones de personalización y herramientas innovadoras para desarrolladores. En este artículo, te contamos todas las novedades y cómo este sistema operativo cambiará la forma en que interactuamos con los dispositivos Apple.',
      'type' => 'Noticias de Apple',
    ]);

    // Consejos y trucos
    Post::create([
      'title' => 'Cómo mejorar tu productividad con Apple',
      'slug' => Str::slug('Cómo mejorar tu productividad con Apple'),
      'body' => 'En este artículo, te damos algunos consejos y trucos para maximizar tu productividad utilizando los dispositivos Apple. Desde aprovechar las funcionalidades de Siri y la integración con la nube, hasta la organización avanzada en el sistema operativo macOS. Descubre cómo usar las herramientas de Apple para organizar tu tiempo, gestionar tus proyectos y aumentar tu eficiencia en el trabajo.',
      'type' => 'Consejos y trucos',
    ]);

    Post::create([
      'title' => 'Optimiza tu trabajo con iCloud: Trucos esenciales',
      'slug' => Str::slug('Optimiza tu trabajo con iCloud: Trucos esenciales'),
      'body' => 'iCloud es mucho más que solo almacenamiento en la nube. Aprende a usar iCloud Drive, iCloud Fotos y las funciones de colaboración para optimizar tu flujo de trabajo y mantener todos tus dispositivos Apple sincronizados. En este artículo, exploramos consejos avanzados sobre cómo aprovechar al máximo iCloud para mejorar tu productividad diaria.',
      'type' => 'Consejos y trucos',
    ]);

    Post::create([
      'title' => 'Los mejores atajos de teclado en macOS',
      'slug' => Str::slug('Los mejores atajos de teclado en macOS'),
      'body' => 'Dominar los atajos de teclado en macOS es una de las formas más efectivas de aumentar tu productividad. En este artículo, recopilamos una lista de los mejores atajos que puedes usar para navegar rápidamente por el sistema operativo, gestionar ventanas, tomar capturas de pantalla y mucho más. Aprende cómo estos atajos pueden hacer que tu trabajo sea mucho más eficiente.',
      'type' => 'Consejos y trucos',
    ]);

    Post::create([
      'title' => 'Cómo hacer copias de seguridad automáticas en tu iPhone',
      'slug' => Str::slug('Cómo hacer copias de seguridad automáticas en tu iPhone'),
      'body' => 'En este tutorial, te enseñamos cómo configurar las copias de seguridad automáticas en tu iPhone usando iCloud y iTunes. Asegúrate de nunca perder tus datos personales y fotos importantes, configurando correctamente estas opciones de seguridad. Este artículo cubre todos los pasos necesarios para mantener tu dispositivo seguro y respaldado sin tener que preocuparte.',
      'type' => 'Consejos y trucos',
    ]);

    Post::create([
      'title' => 'Cómo usar la app Recordatorios para organizar tu día',
      'slug' => Str::slug('Cómo usar la app Recordatorios para organizar tu día'),
      'body' => 'La aplicación Recordatorios de Apple es una herramienta poderosa para gestionar tus tareas diarias. En este artículo, te mostramos cómo crear listas, agregar alertas y sincronizar tus recordatorios entre todos tus dispositivos. Aprende a organizar tu día con facilidad y no olvides nada importante.',
      'type' => 'Consejos y trucos',
    ]);

    // Comparativas
    Post::create([
      'title' => 'Comparativa entre el iPhone 15 y el Galaxy S23',
      'slug' => Str::slug('Comparativa entre el iPhone 15 y el Galaxy S23'),
      'body' => 'En este artículo comparamos dos de los smartphones más avanzados del mercado: el iPhone 15 y el Galaxy S23. Analizamos su rendimiento, cámaras, diseño, duración de batería y el ecosistema de cada uno. ¿Cuál de estos dispositivos es el mejor para ti? Te ayudamos a decidir con esta comparativa exhaustiva.',
      'type' => 'Comparativas',
    ]);

    Post::create([
      'title' => 'MacBook Pro 2025 vs Dell XPS 15: ¿Cuál es el mejor para trabajar?',
      'slug' => Str::slug('MacBook Pro 2025 vs Dell XPS 15: ¿Cuál es el mejor para trabajar?'),
      'body' => 'Comparamos dos de los portátiles más potentes en el mercado: el MacBook Pro 2025 con el chip M2 Pro y el Dell XPS 15 con un procesador Intel Core i9. En este artículo, analizamos su rendimiento en tareas exigentes, su diseño, pantallas, y la experiencia general de uso para determinar cuál es el mejor para profesionales.',
      'type' => 'Comparativas',
    ]);

    Post::create([
      'title' => 'Apple Watch Ultra vs Garmin Fenix 7: Comparativa de relojes deportivos',
      'slug' => Str::slug('Apple Watch Ultra vs Garmin Fenix 7: Comparativa de relojes deportivos'),
      'body' => 'Si eres un atleta o entusiasta del deporte, seguramente te has preguntado qué reloj deportivo elegir entre el Apple Watch Ultra y el Garmin Fenix 7. En esta comparativa, analizamos sus características, precisión en el seguimiento de actividad, duración de batería, y más.',
      'type' => 'Comparativas',
    ]);

    Post::create([
      'title' => 'AirPods Pro 2 vs Sony WH-1000XM5: ¿Cuál tiene mejor sonido?',
      'slug' => Str::slug('AirPods Pro 2 vs Sony WH-1000XM5: ¿Cuál tiene mejor sonido?'),
      'body' => 'Los AirPods Pro 2 de Apple y los Sony WH-1000XM5 son dos de los mejores auriculares del mercado. ¿Pero cuál ofrece mejor calidad de sonido y cancelación de ruido? En este artículo comparamos ambos auriculares en detalle para que puedas elegir el que más se adapta a tus necesidades.',
      'type' => 'Comparativas',
    ]);

    Post::create([
      'title' => 'Comparativa entre iPad Air y iPad Pro',
      'slug' => Str::slug('Comparativa entre iPad Air y iPad Pro'),
      'body' => 'En este artículo analizamos las diferencias entre el iPad Air y el iPad Pro, dos de las tabletas más populares de Apple. Comparamos su rendimiento, pantallas, capacidades de almacenamiento y características adicionales para ayudarte a decidir cuál es el mejor para ti.',
      'type' => 'Comparativas',
    ]);

    // Tutoriales
    Post::create([
      'title' => 'Cómo configurar un nuevo iPhone desde cero',
      'slug' => Str::slug('Cómo configurar un nuevo iPhone desde cero'),
      'body' => '¿Acabas de comprar un nuevo iPhone? Aquí te mostramos paso a paso cómo configurarlo correctamente. Desde la activación del dispositivo hasta la transferencia de datos y la personalización de la pantalla de inicio, cubrimos todos los pasos para que tu nuevo iPhone esté listo para usar.',
      'type' => 'Tutoriales',
    ]);

    Post::create([
      'title' => 'Cómo usar macOS como un profesional',
      'slug' => Str::slug('Cómo usar macOS como un profesional'),
      'body' => 'Si eres nuevo en macOS o quieres aprender algunos trucos avanzados, este tutorial es para ti. Te enseñamos cómo dominar las funciones más útiles, desde el uso de atajos de teclado hasta la personalización de las preferencias del sistema y la integración de aplicaciones.',
      'type' => 'Tutoriales',
    ]);

    Post::create([
      'title' => 'Cómo optimizar tu iPhone para un rendimiento más rápido',
      'slug' => Str::slug('Cómo optimizar tu iPhone para un rendimiento más rápido'),
      'body' => 'Tu iPhone puede volverse más lento con el tiempo, pero hay algunas configuraciones que puedes ajustar para mejorar su rendimiento. En este tutorial, te mostramos cómo liberar espacio de almacenamiento, optimizar la batería y ajustar la configuración de rendimiento para que tu dispositivo funcione como nuevo.',
      'type' => 'Tutoriales',
    ]);

    Post::create([
      'title' => 'Cómo crear un respaldo de tu iPhone usando iCloud',
      'slug' => Str::slug('Cómo crear un respaldo de tu iPhone usando iCloud'),
      'body' => 'Las copias de seguridad son fundamentales para proteger tu iPhone de la pérdida de datos. En este tutorial, te mostramos cómo hacer una copia de seguridad de tu iPhone usando iCloud, incluyendo la configuración de copias automáticas y cómo restaurar tus datos cuando sea necesario.',
      'type' => 'Tutoriales',
    ]);

    Post::create([
      'title' => 'Cómo usar Apple Pay en tu iPhone',
      'slug' => Str::slug('Cómo usar Apple Pay en tu iPhone'),
      'body' => 'Apple Pay es una forma rápida y segura de hacer pagos con tu iPhone. En este tutorial, te explicamos cómo configurar Apple Pay, agregar tarjetas de crédito y débito, y realizar pagos en tiendas físicas y en línea. Además, te damos algunos consejos de seguridad para usarlo con tranquilidad.',
      'type' => 'Tutoriales',
    ]);

    // Accesorios Apple
    Post::create([
      'title' => 'Los mejores accesorios para tu iPhone 15',
      'slug' => Str::slug('Los mejores accesorios para tu iPhone 15'),
      'body' => 'Si acabas de adquirir un iPhone 15, probablemente quieras algunos accesorios para mejorar tu experiencia. En este artículo, te recomendamos los mejores accesorios, como fundas, cargadores inalámbricos, protectores de pantalla y más.',
      'type' => 'Accesorios Apple',
    ]);

    Post::create([
      'title' => 'Los mejores accesorios para MacBook Pro 2025',
      'slug' => Str::slug('Los mejores accesorios para MacBook Pro 2025'),
      'body' => 'El MacBook Pro 2025 es una máquina poderosa, pero con los accesorios adecuados, puedes mejorar aún más su rendimiento. En este artículo, te mostramos los mejores accesorios para tu MacBook Pro, desde teclados externos hasta estaciones de acoplamiento y mochilas especialmente diseñadas para proteger tu equipo.',
      'type' => 'Accesorios Apple',
    ]);

    Post::create([
      'title' => 'Accesorios imprescindibles para el Apple Watch Ultra',
      'slug' => Str::slug('Accesorios imprescindibles para el Apple Watch Ultra'),
      'body' => 'El Apple Watch Ultra es un reloj increíblemente robusto, pero con los accesorios adecuados puedes llevar tu experiencia al siguiente nivel. En este artículo, te recomendamos las mejores correas, cargadores y estuches para tu reloj.',
      'type' => 'Accesorios Apple',
    ]);

    Post::create([
      'title' => 'Los mejores auriculares para usar con tu iPhone',
      'slug' => Str::slug('Los mejores auriculares para usar con tu iPhone'),
      'body' => 'Si buscas unos auriculares de alta calidad para acompañar tu iPhone, este artículo es para ti. Te presentamos las mejores opciones disponibles, desde los AirPods hasta los modelos de terceros con cancelación de ruido y sonido de alta fidelidad.',
      'type' => 'Accesorios Apple',
    ]);

    Post::create([
      'title' => 'Mejores accesorios para iPad Pro',
      'slug' => Str::slug('Mejores accesorios para iPad Pro'),
      'body' => 'El iPad Pro es un dispositivo versátil, pero con los accesorios correctos, puede convertirse en una herramienta aún más poderosa. En este artículo, te recomendamos teclados, fundas y lápices ópticos para aprovechar al máximo tu iPad Pro.',
      'type' => 'Accesorios Apple',
    ]);

    // Apple en el trabajo y productividad
    Post::create([
      'title' => 'Cómo usar tu MacBook Pro para mejorar tu productividad',
      'slug' => Str::slug('Cómo usar tu MacBook Pro para mejorar tu productividad'),
      'body' => 'Si eres un profesional que busca aumentar su productividad, el MacBook Pro es una excelente herramienta. En este artículo, exploramos cómo puedes optimizar tu flujo de trabajo con macOS y las mejores aplicaciones para ser más eficiente.',
      'type' => 'Apple en el trabajo y productividad',
    ]);

    Post::create([
      'title' => 'Usando el iPad Pro para presentaciones efectivas',
      'slug' => Str::slug('Usando el iPad Pro para presentaciones efectivas'),
      'body' => 'El iPad Pro es una herramienta poderosa para presentaciones, con la ayuda de aplicaciones como Keynote, PowerPoint y otras. Aprende cómo usarlo para crear presentaciones profesionales, hacer anotaciones en tiempo real y gestionar tus presentaciones con facilidad.',
      'type' => 'Apple en el trabajo y productividad',
    ]);

    Post::create([
      'title' => 'Mejora tu productividad con la integración de Apple en el trabajo',
      'slug' => Str::slug('Mejora tu productividad con la integración de Apple en el trabajo'),
      'body' => 'Apple ofrece una integración perfecta entre sus dispositivos que mejora la productividad en el trabajo. En este artículo, te mostramos cómo sincronizar tu iPhone, Mac y iPad para tener acceso a tus documentos y tareas en todos los dispositivos. Aprende a usar herramientas como iCloud, Handoff y Continuity.',
      'type' => 'Apple en el trabajo y productividad',
    ]);

    Post::create([
      'title' => 'Cómo usar Siri para mejorar la eficiencia en el trabajo',
      'slug' => Str::slug('Cómo usar Siri para mejorar la eficiencia en el trabajo'),
      'body' => 'Siri puede ser una gran aliada en tu trabajo diario. En este artículo, te mostramos cómo usar Siri para tareas cotidianas como enviar correos electrónicos, crear recordatorios, organizar tu calendario y mucho más.',
      'type' => 'Apple en el trabajo y productividad',
    ]);

    Post::create([
      'title' => 'Organiza tu día con la app Calendario de Apple',
      'slug' => Str::slug('Organiza tu día con la app Calendario de Apple'),
      'body' => 'La aplicación Calendario de Apple es una herramienta poderosa para organizar tu día. En este tutorial, te enseñamos cómo usarla para gestionar tus citas, tareas y reuniones, y cómo integrarla con otras aplicaciones para mejorar tu productividad.',
      'type' => 'Apple en el trabajo y productividad',
    ]);
  }
}
