<x-layouts.app>
    <div class="bg-white min-h-screen">
        <section class="py-20 bg-linear-to-r from-red-700 to-red-900 text-white relative overflow-hidden">
            <img src="{{ asset('images/cultura-actividad.jpg') }}" class="absolute inset-0 w-full h-full object-cover opacity-15">
            <div class="relative max-w-7xl mx-auto px-6 text-center">
                <span class="bg-white/20 px-4 py-1 rounded-full text-[10px] font-black uppercase tracking-[0.3em]">Expresión y Creatividad</span>
                <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tighter mt-4">Departamento de <span class="text-yellow-400">Cultura</span></h1>
                <p class="mt-4 text-red-100 max-w-2xl mx-auto font-medium text-lg">Impulsando el talento artístico y el sentido de pertenencia a través de nuestras tradiciones y la expresión moderna.</p>
            </div>
        </section>

        <section class="py-16 max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <div class="flex gap-6">
                        <div class="shrink-0 w-14 h-14 bg-red-100 text-red-600 rounded-2xl flex items-center justify-center text-2xl">
                            <i class="fas fa-music"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-black text-slate-900 uppercase">Música y Coro</h3>
                            <p class="text-slate-600 text-sm leading-relaxed mt-1">Desarrollo de habilidades auditivas y vocales, participando en los actos protocolares e institucionales de nuestra casa de estudios.</p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="shrink-0 w-14 h-14 bg-yellow-100 text-yellow-700 rounded-2xl flex items-center justify-center text-2xl">
                            <i class="fas fa-theater-masks"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-black text-slate-900 uppercase">Artes Escénicas</h3>
                            <p class="text-slate-600 text-sm leading-relaxed mt-1">Fomentamos la confianza y la oratoria a través del teatro, ayudando a los futuros técnicos a comunicarse con seguridad.</p>
                        </div>
                    </div>

                    <div class="flex gap-6">
                        <div class="shrink-0 w-14 h-14 bg-blue-100 text-blue-600 rounded-2xl flex items-center justify-center text-2xl">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-black text-slate-900 uppercase">Artes Plásticas</h3>
                            <p class="text-slate-600 text-sm leading-relaxed mt-1">Espacios para el dibujo y la pintura, donde la precisión técnica se encuentra con la visión artística.</p>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-slate-200 rounded-[3rem] overflow-hidden shadow-2xl rotate-3 group hover:rotate-0 transition-transform duration-500">
                        <img src="{{ asset('images/cultura-actividad.jpg') }}" alt="Actividad Cultural" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-red-600 rounded-full -z-10 animate-pulse"></div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-slate-50 border-y border-slate-100">
            <div class="max-w-4xl mx-auto text-center px-6">
                <i class="fas fa-quote-left text-slate-300 text-5xl mb-6"></i>
                <h2 class="text-2xl md:text-3xl font-serif italic text-slate-700">"El arte y la cultura son el alma de nuestra institución, recordándonos que somos humanos antes que técnicos."</h2>
            </div>
        </section>
    </div>
</x-layouts.app>