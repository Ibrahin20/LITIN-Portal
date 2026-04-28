<x-layouts.app>
    <div class="bg-white min-h-screen">
        <section class="py-20 bg-slate-900 text-white relative overflow-hidden">
            <div class="absolute inset-0 opacity-30">
                <img src="{{ asset('images/deporte-hero.jpg') }}" class="w-full h-full object-cover">
            </div>
            <div class="relative max-w-7xl mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tighter italic">Deporte y <span class="text-blue-500">Recreación</span></h1>
                <p class="mt-4 text-slate-400 max-w-2xl mx-auto font-medium">Mente sana en cuerpo sano. Fomentamos la disciplina y el trabajo en equipo a través del deporte.</p>
            </div>
        </section>

        <section class="py-16 max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 hover:shadow-xl transition-shadow">
                    <div class="w-12 h-12 bg-blue-600 text-white rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-basketball-ball text-xl"></i>
                    </div>
                    <h3 class="font-black uppercase text-slate-900 mb-2">Baloncesto,Futbol,Voleibol</h3>
                    <p class="text-sm text-slate-600">Entrenamientos enfocados en la técnica y la competencia sana en nuestra cancha múltiple.</p>
                </div>

                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 hover:shadow-xl transition-shadow">
                    <div class="w-12 h-12 bg-red-600 text-white rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-running text-xl"></i>
                    </div>
                    <h3 class="font-black uppercase text-slate-900 mb-2">Educación Física</h3>
                    <p class="text-sm text-slate-600">Programas adaptados a cada nivel educativo para garantizar un desarrollo motriz óptimo.</p>
                </div>

                <div class="bg-slate-50 p-8 rounded-3xl border border-slate-100 hover:shadow-xl transition-shadow">
                    <div class="w-12 h-12 bg-green-600 text-white rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-chess text-xl"></i>
                    </div>
                    <h3 class="font-black uppercase text-slate-900 mb-2">Juegos de Estrategia</h3>
                    <p class="text-sm text-slate-600">Espacios de recreación que incluyen ajedrez y actividades que estimulan el pensamiento lógico.</p>
                </div>
            </div>
        </section>

        <section class="py-16 bg-blue-50">
            <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <h2 class="text-3xl font-black text-slate-900 uppercase mb-6">Nuestras Instalaciones</h2>
                    <p class="text-slate-600 leading-relaxed">Contamos con amplias áreas verdes y canchas deportivas diseñadas para el máximo desempeño de nuestros estudiantes, integrando la actividad física como un pilar fundamental de la formación Litiniana.</p>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('images/planta-fisica-2.jpg') }}" class="rounded-3xl shadow-2xl">
                </div>
            </div>
        </section>
    </div>
</x-layouts.app>