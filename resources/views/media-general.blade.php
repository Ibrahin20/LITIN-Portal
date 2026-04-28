<x-layouts.app>
    <div class="bg-slate-950 text-white min-h-screen">
        <section class="relative py-24 overflow-hidden">
            <div class="absolute top-0 right-0 w-1/2 h-full bg-blue-600/10 blur-[120px] rounded-full"></div>
            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="md:w-3/5 space-y-8">
                        <span class="px-4 py-1 bg-red-600 rounded-full text-[10px] font-black uppercase tracking-widest">Nivel Profesionalizante</span>
                        <h1 class="text-5xl md:text-8xl font-black leading-none uppercase tracking-tighter">Media <br><span class="text-blue-500">General</span></h1>
                        <p class="text-slate-400 text-xl max-w-xl">Egresamos Bachilleres con mención técnica, preparados para el campo laboral industrial y la educación superior.</p>
                        
                        <div class="grid grid-cols-2 gap-4 pt-4">
                            <div class="border-l-2 border-blue-500 pl-4">
                                <h4 class="font-black text-2xl">30+ Años</h4>
                                <p class="text-xs uppercase text-slate-500 font-bold">Experiencia Técnica</p>
                            </div>
                            <div class="border-l-2 border-red-500 pl-4">
                                <h4 class="font-black text-2xl">Modelo Dual</h4>
                                <p class="text-xs uppercase text-slate-500 font-bold">Estudio y Práctica</p>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-2/5">
                    <div class="relative">
                        <img src="{{ asset('images/taller-tecnico.jpg') }}" 
                            class="rounded-4xl border-2 border-white/10 shadow-2xl relative z-10">
                        
                        <div class="absolute -bottom-6 -left-6 bg-blue-600 p-6 rounded-2xl z-20 hidden md:block">
                            <i class="fas fa-cog text-3xl animate-spin-slow"></i>
                        </div>
                    </div>
</div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-white text-slate-900 rounded-t-[3rem] md:rounded-t-[5rem]">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-black uppercase">Formación Industrial</h2>
                    <p class="text-slate-500 font-medium">Equipamiento tecnológico de última generación para prácticas reales.</p>
                </div>

                <div class="grid md:grid-cols-2 gap-12">
    <div class="group">
                    <div class="overflow-hidden rounded-3xl mb-6">
                        <img src="{{ asset('images/laboratorio-tecnologico.jpg') }}" 
                            class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500"
                            alt="Laboratorios Tecnológicos LITIN">
                    </div>
                    <h3 class="text-2xl font-black uppercase mb-3">Laboratorios Tecnológicos</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Contamos con la Plataforma Litiniana para Educación a Distancia (PLED) y laboratorios de hardware y software actualizados para el aprendizaje digital profundo.
                    </p>
                </div>

                <div class="group">
                    <div class="overflow-hidden rounded-3xl mb-6">
                        <img src="{{ asset('images/laboratorio-ciencias.jpg') }}" 
                            class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500"
                            alt="Laboratorio de Ciencias LITIN">
                    </div>
                    <h3 class="text-2xl font-black uppercase mb-3">Ciencias Aplicadas</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Laboratorios de Química, Biología y Física donde la teoría se convierte en práctica tangible, siguiendo los pilares de nuestra filosofía de "Disciplina y Éxito".
                    </p>
                </div>
            </div>
            </div>
        </section>
    </div>

    <style>
        .animate-spin-slow { animation: spin 8s linear infinite; }
        @keyframes spin { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
    </style>
</x-layouts.app>