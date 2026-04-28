<x-layouts.app>
    <div class="flex flex-col w-full min-h-screen">
        
        <section class="relative h-[65vh] md:h-[85vh] w-full overflow-hidden rounded-b-[3rem] md:rounded-b-[5rem] shadow-2xl bg-slate-900">
            <div class="absolute inset-0 z-0">
                <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?auto=format&fit=crop&q=80&w=2070" 
                     class="w-full h-full object-cover opacity-60" 
                     alt="LITIN Talleres">
                <div class="absolute inset-0 bg-linear-to-r from-slate-950 via-slate-900/40 to-transparent"></div>
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
                                Élite Técnica.
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

        <div class="max-w-7xl mx-auto px-4 md:px-8 py-16 space-y-32">
            
            <section class="overflow-hidden">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 lg:gap-16 items-center">
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

                    <div class="text-center space-y-8 order-1 lg:order-2">
                        <div class="space-y-2">
                            <span class="text-blue-600 font-bold tracking-[0.3em] uppercase text-xs">Formación Integral</span>
                            <h2 class="text-4xl md:text-6xl font-black text-slate-900 leading-none uppercase">
                                Oferta <br> <span class="text-red-600">Académica</span>
                            </h2>
                        </div>
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center gap-4 bg-slate-50 p-4 rounded-2xl border border-slate-100 hover:shadow-lg transition">
                                <div class="w-10 h-10 rounded-xl bg-blue-600 flex items-center justify-center text-white shadow-lg shadow-blue-200">
                                    <i class="fas fa-book-open"></i>
                                </div>
                                <span class="text-lg font-bold text-slate-700 uppercase tracking-tight">Primaria Básica</span>
                            </div>
                            <div class="flex items-center gap-4 bg-slate-50 p-4 rounded-2xl border border-slate-100 hover:shadow-lg transition">
                                <div class="w-10 h-10 rounded-xl bg-red-600 flex items-center justify-center text-white shadow-lg shadow-red-200">
                                    <i class="fas fa-microchip"></i>
                                </div>
                                <span class="text-lg font-bold text-slate-700 uppercase tracking-tight">Educación Media</span>
                            </div>
                        </div>
                        <button class="text-slate-400 text-sm font-bold hover:text-blue-600 transition underline underline-offset-8">
                            Ver requisitos de inscripción
                        </button>
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

            <section class="bg-slate-950 rounded-[3rem] p-8 md:p-16 text-white relative overflow-hidden shadow-2xl border border-blue-500/20">
                <div class="absolute top-0 right-0 w-96 h-96 bg-blue-600/10 blur-[120px] -mr-32 -mt-32"></div>
                <div class="relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <div class="space-y-6">
                        <div class="flex items-center gap-3">
                            <span class="h-px w-12 bg-blue-500"></span>
                            <span class="text-blue-400 font-bold tracking-[0.3em] uppercase text-xs">Continuidad Académica</span>
                        </div>
                        <h2 class="text-4xl md:text-5xl font-black tracking-tighter leading-none">
                            LLEVA TU TALENTO AL <br>
                            <span class="text-transparent bg-clip-text bg-linear-to-r from-blue-400 to-blue-600">NIVEL UNIVERSITARIO</span>
                        </h2>
                        <p class="text-slate-400 text-lg">
                            Gracias al convenio LITIN - IUTEPI, accede a carreras de TSU diseñadas para la industria moderna.
                        </p>
                    </div>
                    <div class="bg-linear-to-br from-blue-600 to-blue-800 p-8 rounded-3xl shadow-xl">
                        <h4 class="text-2xl font-black mb-4 italic uppercase">Beneficios LITIN</h4>
                        <ul class="space-y-3 font-bold text-blue-50">
                            <li class="flex items-center gap-2"><i class="fas fa-check-circle text-emerald-400"></i> Inscripción Preferencial</li>
                            <li class="flex items-center gap-2"><i class="fas fa-check-circle text-emerald-400"></i> Reconocimiento de Unidades</li>
                            <li class="flex items-center gap-2"><i class="fas fa-check-circle text-emerald-400"></i> Becas por Rendimiento</li>
                        </ul>
                    </div>
                </div>
            </section>

            <div class="text-center py-10">
                <button class="bg-red-600 hover:bg-red-700 text-white font-black px-12 py-6 rounded-2xl shadow-2xl transition-all transform hover:scale-105 uppercase tracking-widest text-lg">
                    Iniciar Pre-Inscripción 2026
                </button>
            </div>
        </div>
    </div>
</x-layouts.app>