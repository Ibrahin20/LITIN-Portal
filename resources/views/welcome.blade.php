<x-layouts.app>
    <div class="flex flex-col w-full min-h-screen bg-white">
        
        <!-- HERO SECTION-->
        <section class="relative h-[65vh] md:h-[85vh] w-full overflow-hidden rounded-b-[3rem] md:rounded-b-[5rem] shadow-2xl bg-slate-900">
            <div class="absolute inset-0 z-0"
                 x-data="{ 
                    images: [
                        '{{ asset('images/planta-fisica-1.jpg') }}',
                        '{{ asset('images/taller-tecnico.jpg') }}',
                        '{{ asset('images/laboratorio-tecnologico.jpg') }}',
                        '{{ asset('images/planta-fisica-2.jpg') }}',
                        '{{ asset('images/cultura-actividad.jpg') }}'
                    ],
                    active: 0
                 }" 
                 x-init="setInterval(() => active = (active + 1) % images.length, 5000)">
                <template x-for="(image, index) in images" :key="index">
                    <img :src="image" 
                         class="absolute inset-0 w-full h-full object-cover transition-opacity duration-1500 ease-in-out"
                         :class="active === index ? 'opacity-70 z-0' : 'opacity-0 -z-10'"
                         alt="LITIN Talleres">
                </template>
                <div class="absolute inset-0 bg-linear-to-r from-slate-950 via-slate-900/40 to-transparent pointer-events-none z-10"></div>
            </div>

            <div class="relative z-20 max-w-7xl mx-auto px-6 md:px-12 h-full flex items-center">
                <div class="max-w-4xl space-y-6 md:space-y-8">
                    <div class="space-y-4">
                        <span class="inline-block py-1.5 px-3 rounded-full bg-red-600 text-white text-[10px] md:text-[11px] font-black uppercase tracking-widest shadow-lg">
                            Inscripciones Abiertas 2026
                        </span>
                        <h2 class="text-white text-4xl sm:text-6xl md:text-8xl font-black leading-tight md:leading-[0.85] tracking-tighter uppercase">
                            FORMAMOS LA <br>
                            <span class="text-transparent bg-clip-text bg-linear-to-r from-blue-400 to-blue-600">
                                Élite Academica
                            </span>
                        </h2>
                        <p class="text-slate-200 text-sm md:text-xl leading-relaxed max-w-xl font-medium">
                            Más de 30 años impulsando el ingenio en Carabobo. Educación industrial de alto nivel.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="{{ url('/admision') }}" 
                           class="bg-blue-600 hover:bg-blue-700 text-white px-8 md:px-10 py-4 md:py-5 rounded-2xl font-black uppercase tracking-widest text-[10px] md:text-xs transition-all text-center shadow-xl shadow-blue-900/20">
                            Solicitar Cupo
                        </a>
                        <a href="{{ url('/media-general') }}" 
                           class="bg-white/10 hover:bg-white/20 backdrop-blur-md text-white border border-white/30 px-8 md:px-10 py-4 md:py-5 rounded-2xl font-black uppercase tracking-widest text-[10px] md:text-xs transition-all text-center">
                            Ver Oferta Académica
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="max-w-7xl mx-auto px-4 md:px-8 py-12 space-y-20">
            
            <!-- OFERTA ACADÉMICA -->
            <section class="overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-center">
                    <div class="relative group order-2 lg:order-1">
                        <div class="relative">
                            <div class="absolute -inset-1 bg-linear-to-tr from-blue-600 to-transparent rounded-[2.5rem] blur opacity-25 group-hover:opacity-50 transition duration-500"></div>
                            <img src="{{ asset('images/primaria-referencia.png') }}" 
                                 class="relative rounded-4xl shadow-2xl w-full aspect-4/5 object-cover border border-white/20 transform group-hover:-translate-y-2 transition duration-500">
                            <div class="absolute bottom-6 -right-4 bg-white/90 backdrop-blur-md p-4 rounded-2xl shadow-xl border border-blue-100">
                                <p class="text-blue-900 font-black text-sm uppercase">Primaria</p>
                                <p class="text-slate-500 text-xs">Fundamentos Sólidos</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center space-y-6 order-1 lg:order-2">
                        <div class="space-y-2">
                            <span class="text-blue-600 font-bold tracking-[0.3em] uppercase text-[10px]">Formación Integral</span>
                            <h2 class="text-4xl md:text-5xl font-black text-slate-900 leading-none uppercase">
                                Oferta <br> <span class="text-red-600">Académica</span>
                            </h2>
                        </div>
                        <div class="flex flex-col gap-3">
                            <div class="flex items-center gap-4 bg-slate-50 p-4 rounded-2xl border border-slate-100 hover:shadow-md transition">
                                <div class="w-10 h-10 rounded-xl bg-blue-600 flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-book-open"></i>
                                </div>
                                <span class="text-base font-bold text-slate-700 uppercase">Primaria Básica</span>
                            </div>
                            <div class="flex items-center gap-4 bg-slate-50 p-4 rounded-2xl border border-slate-100 hover:shadow-md transition">
                                <div class="w-10 h-10 rounded-xl bg-red-600 flex items-center justify-center text-white shadow-lg">
                                    <i class="fas fa-microchip"></i>
                                </div>
                                <span class="text-base font-bold text-slate-700 uppercase">Educación Media</span>
                            </div>
                        </div>
                    </div>

                    <div class="relative group order-3">
                        <div class="relative">
                            <div class="absolute -inset-1 bg-linear-to-bl from-red-600 to-transparent rounded-[2.5rem] blur opacity-25 group-hover:opacity-50 transition duration-500"></div>
                            <img src="{{ asset('images/bachillerato-referencia.png') }}" 
                                 class="relative rounded-4xl shadow-2xl w-full aspect-4/5 object-cover border border-white/20 transform group-hover:-translate-y-2 transition duration-500">
                            <div class="absolute top-6 -left-4 bg-white/90 backdrop-blur-md p-4 rounded-2xl shadow-xl border border-red-100">
                                <p class="text-red-600 font-black text-sm uppercase">Bachillerato</p>
                                <p class="text-slate-500 text-xs">Técnico Industrial</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- HISTORIA -->
            <section class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center pt-10">
                <div class="space-y-6">
                    <h2 class="text-4xl md:text-5xl font-extrabold text-blue-900 leading-tight tracking-tighter">
                        Formando <span class="text-blue-500">Bachilleres</span> <br>
                        <span class="text-red-600 uppercase italic">Para el Nuevo Milenio</span>
                    </h2>
                    <p class="text-lg text-slate-600 leading-relaxed font-light italic border-l-4 border-red-600 pl-6">
                        "Desde el año 1991 recibimos en nuestras aulas a jóvenes ávidos de querer desarrollarse de manera técnica y humana..."
                    </p>
                    <p class="text-slate-700 text-base leading-relaxed">
                        Basado en el exitoso <strong>Modelo Dual Alemán</strong>, el LITIN integra el aprendizaje académico con la práctica industrial real.
                    </p>
                    <div class="flex gap-4">
                        <a href="{{ route('la-institucion') }}" class="bg-blue-700 hover:bg-blue-800 text-white px-6 py-3 rounded-xl font-bold transition shadow-lg text-sm uppercase">Nuestra Historia</a>
                        <a href="{{ route('testimonios') }}" class="bg-white border-2 border-slate-200 hover:border-red-600 text-slate-700 px-6 py-3 rounded-xl font-bold transition text-sm uppercase">Testimonios</a>
                    </div>
                </div>
                <div class="relative group">
                    <div class="absolute -inset-1 bg-linear-to-r from-blue-600 to-red-600 rounded-2xl blur opacity-20 group-hover:opacity-40 transition duration-1000"></div>
                    <div class="relative bg-white border border-slate-200 rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/foto-institucion.png') }}" alt="Instalaciones LITIN" class="w-full aspect-video object-cover">
                    </div>
                </div>
            </section>

            <!-- DIFERENCIA LITIN -->
            <section class="py-16 relative overflow-hidden">
    <!-- Decoración de fondo sutil -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-200 h-75 bg-blue-50/50 rounded-full blur-3xl -z-10"></div>

    <div class="text-center mb-16">
        <span class="text-red-600 font-black uppercase tracking-[0.4em] text-[10px] bg-red-50 px-4 py-1.5 rounded-full">
            ¿Por qué nosotros?
        </span>
        <h2 class="text-4xl md:text-5xl font-black text-blue-900 uppercase tracking-tighter mt-4">
            La Diferencia <span class="text-transparent bg-clip-text bg-linear-to-r from-blue-600 to-blue-800">LITIN</span>
        </h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- Tarjeta: Tecnología -->
        <div class="group relative bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/60 border border-slate-100 hover:border-blue-500/30 transition-all duration-500 hover:-translate-y-3">
            
            <div class="absolute inset-0 bg-linear-to-br from-blue-600/5 to-transparent opacity-0 group-hover:opacity-100 rounded-[2.5rem] transition-opacity"></div>
            
            <div class="relative z-10">
                <div class="w-16 h-16 bg-linear-to-br from-blue-600 to-blue-700 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-blue-200 group-hover:rotate-6 transition-transform">
                    <i class="fas fa-microchip text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Tecnología</h3>
                <p class="text-slate-600 leading-relaxed">
                    Laboratorios equipados con estándares industriales para un aprendizaje 100% práctico y aplicado.
                </p>
                <div class="mt-6 flex items-center text-blue-600 font-black text-[10px] uppercase tracking-widest opacity-0 group-hover:opacity-100 transition-opacity">
                    Excelencia Técnica <i class="fas fa-chevron-right ml-2 text-[8px]"></i>
                </div>
            </div>
            <!-- Borde inferior decorativo -->
            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-1/2 h-1.5 bg-blue-600 rounded-t-full scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
        </div>

        <!-- Tarjeta: Innovación -->
        <div class="group relative bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/60 border border-slate-100 hover:border-red-500/30 transition-all duration-500 hover:-translate-y-3">
            <div class="absolute inset-0 bg-linear-to-br from-red-600/5 to-transparent opacity-0 group-hover:opacity-100 rounded-[2.5rem] transition-opacity"></div>
            
            <div class="relative z-10">
                <div class="w-16 h-16 bg-linear-to-br from-red-600 to-red-700 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-red-200 group-hover:rotate-6 transition-transform">
                    <i class="fas fa-rocket text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Innovación</h3>
                <p class="text-slate-600 leading-relaxed">
                    Metodología de vanguardia que conecta la teoría académica con la realidad del mercado laboral.
                </p>
                <div class="mt-6 flex items-center text-red-600 font-black text-[10px] uppercase tracking-widest opacity-0 group-hover:opacity-100 transition-opacity">
                    Modelo Dual <i class="fas fa-chevron-right ml-2 text-[8px]"></i>
                </div>
            </div>
            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-1/2 h-1.5 bg-red-600 rounded-t-full scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
        </div>

        <!-- Tarjeta: Valores -->
        <div class="group relative bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/60 border border-slate-100 hover:border-slate-900/30 transition-all duration-500 hover:-translate-y-3">
            <div class="absolute inset-0 bg-linear-to-br from-slate-900/5 to-transparent opacity-0 group-hover:opacity-100 rounded-[2.5rem] transition-opacity"></div>
            
            <div class="relative z-10">
                <div class="w-16 h-16 bg-linear-to-br from-slate-800 to-slate-950 rounded-2xl flex items-center justify-center text-white mb-6 shadow-lg shadow-slate-200 group-hover:rotate-6 transition-transform">
                    <i class="fas fa-shield-alt text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-3">Valores</h3>
                <p class="text-slate-600 leading-relaxed">
                    Formación integral basada en la disciplina, la ética y la responsabilidad profesional constante.
                </p>
                <div class="mt-6 flex items-center text-slate-900 font-black text-[10px] uppercase tracking-widest opacity-0 group-hover:opacity-100 transition-opacity">
                    Ética Profesional <i class="fas fa-chevron-right ml-2 text-[8px]"></i>
                </div>
            </div>
            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-1/2 h-1.5 bg-slate-950 rounded-t-full scale-x-0 group-hover:scale-x-100 transition-transform duration-500"></div>
        </div>

    </div>
</section>
            <!-- CALL TO ACTION -->
            <section class="relative group"> 
    <div class="relative bg-blue-900 rounded-[3rem] overflow-hidden shadow-2xl min-h-100 flex items-center">
        
       
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/planta-fisica-1.jpg') }}" 
                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" 
                 alt="Instalaciones LITIN">
            
            <div class="absolute inset-0 bg-linear-to-r from-blue-900 via-blue-900/80 to-blue-800/40"></div>
        </div>

        <!-- Contenido -->
        <div class="relative z-10 py-16 px-6 md:px-20 w-full grid md:grid-cols-2 gap-8 items-center">
            <div class="text-left">
                <span class="inline-block py-1 px-3 rounded-full bg-red-600 text-white text-[10px] font-black uppercase tracking-[0.2em] mb-4 shadow-lg">
                    Admisiones 2026
                </span>
                <h2 class="text-3xl md:text-5xl font-black text-white mb-4 leading-tight uppercase tracking-tighter">
                    Tu futuro <br> <span class="text-transparent bg-clip-text bg-linear-to-r from-red-500 to-orange-400">empieza hoy</span>
                </h2>
                <p class="text-blue-100 text-base md:text-lg mb-8 max-w-md font-medium leading-relaxed">
                    Únete a la comunidad técnica más importante de la región. Cupos limitados para el nuevo periodo escolar.
                </p>
                <a href="{{ route('admision') }}" class="group inline-flex items-center bg-red-600 text-white text-sm md:text-base font-black px-8 py-4 rounded-2xl hover:bg-red-700 transition-all shadow-2xl shadow-red-900/50 uppercase tracking-widest">
                    <span class="mr-3">Pre-Inscribirme</span>
                    <i class="fas fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                </a>
            </div>

            <!-- Elemento decorativo - información extra -->
            <div class="hidden md:flex justify-end">
                <div class="bg-white/10 backdrop-blur-md border border-white/20 p-8 rounded-3xl rotate-3 hover:rotate-0 transition-transform duration-500">
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 text-white">
                            <div class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div>
                                <p class="text-[10px] uppercase font-bold text-blue-300">Trayectoria</p>
                                <p class="text-lg font-black">+30 Años</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 text-white">
                            <div class="w-10 h-10 rounded-full bg-red-500 flex items-center justify-center">
                                <i class="fas fa-users"></i>
                            </div>
                            <div>
                                <p class="text-[10px] uppercase font-bold text-red-300">Comunidad</p>
                                <p class="text-lg font-black">Líder Regional</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            <!-- CONVENIO IUTEPI -->
           <section class="bg-slate-950 rounded-[3rem] p-8 md:p-14 text-white relative overflow-hidden shadow-2xl border border-blue-500/20 group">
    <!-- Efectos de luz de fondo -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-600/10 blur-[120px] -mr-32 -mt-32 transition-colors group-hover:bg-blue-600/20"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 bg-red-600/5 blur-[100px] -ml-32 -mb-32"></div>

    <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
        
        <!-- Bloque del Logo e Identidad  -->
        <div class="lg:col-span-4 flex flex-col items-center lg:items-start space-y-6">
            <div class="relative">
                <div class="absolute -inset-4 bg-white/5 rounded-full blur-xl group-hover:bg-white/10 transition"></div>
                <!-- Asegúrate de que la ruta del logo sea correcta -->
                <img src="{{ asset('images/logo-iutepi.png') }}" 
                     alt="Logo IUTEPI" 
                     class="relative w-40 md:w-48 h-auto drop-shadow-[0_0_15px_rgba(255,255,255,0.3)] transform group-hover:scale-105 transition duration-500">
            </div>
            <div class="text-center lg:text-left">
                <p class="text-blue-400 font-black tracking-[0.3em] uppercase text-[10px] mb-2">Alianza Estratégica</p>
                <h3 class="text-xl font-bold text-slate-200">Convenio de Cooperación Interinstitucional</h3>
            </div>
        </div>

        <div class="lg:col-span-4 space-y-4 border-l-0 lg:border-l lg:border-white/10 lg:pl-10">
            <h2 class="text-3xl md:text-4xl font-black tracking-tighter uppercase leading-none">
                Talento a nivel <br>
                <span class="text-blue-500 underline decoration-red-600 underline-offset-8">Universitario</span>
            </h2>
            <p class="text-slate-400 text-sm md:text-base leading-relaxed">
                Nuestros egresados cuentan con el respaldo del IUTEPI para continuar su formación profesional en carreras tecnológicas de alta demanda industrial.
            </p>
        </div>

        <!-- Bloque de Beneficios-->
        <div class="lg:col-span-4">
            <div class="bg-linear-to-br from-blue-600 to-blue-900 p-6 rounded-3xl shadow-2xl transform group-hover:-translate-y-1 transition">
                <h4 class="text-lg font-black mb-4 italic uppercase flex items-center gap-2">
                    <i class="fas fa-star text-yellow-400 text-xs"></i> Beneficios LITIN
                </h4>
                <ul class="space-y-3 font-bold text-blue-50 text-[11px] md:text-xs">
                    <li class="flex items-center gap-3 bg-white/10 p-2 rounded-xl border border-white/5">
                        <i class="fas fa-check-circle text-emerald-400"></i> Inscripción Preferencial
                    </li>
                    <li class="flex items-center gap-3 bg-white/10 p-2 rounded-xl border border-white/5">
                        <i class="fas fa-check-circle text-emerald-400"></i> Reconocimiento de Unidades
                    </li>
                    <li class="flex items-center gap-3 bg-white/10 p-2 rounded-xl border border-white/5">
                        <i class="fas fa-check-circle text-emerald-400"></i> Becas por Rendimiento
                    </li>
                    <li class="flex items-center gap-3 bg-white/10 p-2 rounded-xl border border-white/5">
                        <i class="fas fa-check-circle text-emerald-400"></i> Pasantías Directas
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>
        </div> 
    </div>
</x-layouts.app>