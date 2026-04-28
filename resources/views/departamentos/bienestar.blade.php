<x-layouts.app>
    <div class="max-w-7xl mx-auto py-12 px-6 space-y-24">
        
            <section class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1 space-y-6">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 text-blue-700 text-xs font-bold uppercase tracking-widest">
                    Atención · Profesional · Apoyo Integral
                </div>
                <h1 class="text-5xl lg:text-7xl font-black text-slate-900 leading-[0.9] tracking-tighter">
                    BIENESTAR <br>
                    <span class="text-blue-600">ESTUDIANTIL</span>
                </h1>
                <p class="text-xl text-slate-600 leading-relaxed max-w-md">
                    Contamos con un departamento donde nuestros estudiantes acuden en búsqueda de apoyo emocional y mental.
                </p>
                <div class="flex flex-wrap gap-4 pt-4">
                    <span class="px-4 py-2 bg-slate-100 rounded-xl text-slate-700 font-bold text-sm">Orientación Psicopedagógica</span>
                    <span class="px-4 py-2 bg-slate-100 rounded-xl text-slate-700 font-bold text-sm">Desarrollo Humano</span>
                </div>
            </div>

            <div class="order-1 lg:order-2 relative overflow-hidden rounded-[3rem]">
                <div class="absolute -inset-4 bg-blue-100 rounded-full blur-3xl opacity-30"></div>
                <img src="{{ asset('images/bienestar-estudiantil.png') }}" 
                    alt="Estudiantes LITIN" 
                    class="relative w-full h-auto rounded-[3rem] object-cover drop-shadow-2xl transform hover:scale-105 transition duration-500">
            </div>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-4xl border border-slate-200 shadow-sm hover:shadow-xl transition">
                <div class="w-12 h-12 bg-blue-600 rounded-2xl flex items-center justify-center text-white mb-6">
                    <i class="fas fa-brain"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-3">Apoyo Mental</h3>
                <p class="text-slate-500">Atención profesional para diagnosticar y orientar en el contexto educativo.</p>
            </div>

            <div class="bg-white p-8 rounded-4xl border border-slate-200 shadow-sm hover:shadow-xl transition">
                <div class="w-12 h-12 bg-red-600 rounded-2xl flex items-center justify-center text-white mb-6">
                    <i class="fas fa-heart"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-3">Desarrollo Humano</h3>
                <p class="text-slate-500">Programas diseñados para fortalecer los valores y la empatía en nuestra comunidad.</p>
            </div>

            <div class="bg-white p-8 rounded-4xl border border-slate-200 shadow-sm hover:shadow-xl transition">
                <div class="w-12 h-12 bg-emerald-600 rounded-2xl flex items-center justify-center text-white mb-6">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-3">Éxito Académico</h3>
                <p class="text-slate-500">Herramientas psicopedagógicas para mejorar el rendimiento escolar.</p>
            </div>
        </section>

    </div>
</x-layouts.app>