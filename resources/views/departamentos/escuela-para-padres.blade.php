<x-layouts.app>
    <div class="bg-white min-h-screen pt-24 md:pt-32 pb-20">
        
        <section class="max-w-7xl mx-auto px-6 mb-16">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2 space-y-6">
                    <span class="inline-block px-4 py-1 bg-red-600 text-white rounded-full text-[10px] font-black uppercase tracking-widest shadow-md">
                        Alianza Familia-Escuela
                    </span>
                    <h1 class="text-5xl md:text-7xl font-black text-slate-900 uppercase tracking-tighter leading-none">
                        Escuela para <br><span class="text-blue-600">Padres</span>
                    </h1>
                    <p class="text-slate-600 text-lg leading-relaxed max-w-lg">
                        Un espacio para fortalecer el trinomio Escuela-Alumno-Familia, brindando herramientas que apoyen el proceso de enseñanza y el crecimiento humano.
                    </p>
                </div>
                <div class="md:w-1/2 w-full">
                    <div class="rounded-[3rem] overflow-hidden shadow-2xl border-4 border-slate-50">
                        <img src="{{ asset('images/escuela-padres.jpg') }}" alt="Formación Integral LITIN" class="w-full h-100 object-cover">
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-slate-50 py-24 mb-16">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <h2 class="text-3xl font-black text-slate-900 uppercase mb-2">Formación en Valores</h2>
                <p class="text-slate-500 mb-16 italic">"Disciplina y Éxito" aplicado al núcleo familiar.</p>

                <div class="grid md:grid-cols-3 gap-8 text-center">
                    <div class="bg-white p-10 rounded-[2.5rem] shadow-sm border border-slate-100 flex flex-col items-center">
                        <div class="w-16 h-16 bg-blue-600 text-white rounded-2xl flex items-center justify-center text-2xl mb-6 shadow-lg shadow-blue-600/30">
                            <i class="fas fa-comments"></i>
                        </div>
                        <h3 class="font-black uppercase text-slate-900 mb-4 tracking-tight">Comunicación Asertiva</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Fomentamos el diálogo, el respeto y la colaboración entre todos los miembros de la familia.</p>
                    </div>

                    <div class="bg-white p-10 rounded-[2.5rem] shadow-sm border border-slate-100 flex flex-col items-center">
                        <div class="w-16 h-16 bg-red-600 text-white rounded-2xl flex items-center justify-center text-2xl mb-6 shadow-lg shadow-red-600/30">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="font-black uppercase text-slate-900 mb-4 tracking-tight">Valores y Disciplina</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Reforzamos la responsabilidad y la honestidad como bases del éxito académico y profesional.</p>
                    </div>

                    <div class="bg-white p-10 rounded-[2.5rem] shadow-sm border border-slate-100 flex flex-col items-center">
                        <div class="w-16 h-16 bg-slate-900 text-white rounded-2xl flex items-center justify-center text-2xl mb-6">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="font-black uppercase text-slate-900 mb-4 tracking-tight">Era Digital</h3>
                        <p class="text-sm text-slate-600 leading-relaxed">Orientación sobre el uso responsable de las soluciones tecnológicas en la educación a distancia.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-6">
            <div class="bg-blue-900 rounded-[3rem] p-12 md:p-20 text-white relative overflow-hidden shadow-2xl">
                <div class="absolute top-0 right-0 w-64 h-full bg-white/5 skew-x-12 transform translate-x-20"></div>
                
                <div class="relative z-10 flex flex-col md:flex-row justify-between items-center gap-12 text-center md:text-left">
                    <div class="max-w-xl">
                        <h2 class="text-4xl md:text-5xl font-black uppercase tracking-tighter mb-6 leading-tight text-white">¿Cuándo es el próximo encuentro?</h2>
                        <p class="text-blue-200 text-lg">Las fechas se notifican a través de circulares internas y nuestros canales oficiales de Telegram e Instagram.</p>
                    </div>
                    <div class="w-full md:w-auto">
                        <a href="#" class="inline-block w-full md:w-auto px-12 py-5 bg-white text-blue-900 rounded-2xl font-black uppercase tracking-widest text-xs hover:bg-blue-50 transition-all shadow-xl">
                            Consulte con Coordinación
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.app>