<x-layouts.app>
    <div class="bg-slate-50 min-h-screen">
        <section class="relative py-20 bg-blue-900 overflow-hidden">
            <div class="absolute inset-0 opacity-20">
                <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80" class="w-full h-full object-cover">
            </div>
            <div class="relative max-w-7xl mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-6xl font-black text-white uppercase tracking-tighter">La Institución</h1>
                <p class="text-blue-200 mt-4 font-medium max-w-2xl mx-auto">Más de 32 años formando líderes técnicos con valores humanistas y excelencia académica en Carabobo.</p>
            </div>
        </section>

        <section class="py-16 max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-8">
                <div class="bg-white p-8 rounded-3xl shadow-xl border-t-4 border-red-600">
                    <div class="h-12 w-12 bg-red-100 rounded-xl flex items-center justify-center mb-6 text-red-600">
                        <i class="fas fa-bullseye text-2xl"></i>
                    </div>
                    <h2 class="text-2xl font-black text-slate-900 uppercase mb-4">Nuestra Misión</h2>
                    <p class="text-slate-600 leading-relaxed italic">
                        "La formación integral de bachilleres en nuestra región, con un amplio entendimiento de la importancia del trabajo duro, educación ciudadana y valores humanistas."
                    </p>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-xl border-t-4 border-blue-600">
                    <div class="h-12 w-12 bg-blue-100 rounded-xl flex items-center justify-center mb-6 text-blue-600">
                        <i class="fas fa-eye text-2xl"></i>
                    </div>
                    <h2 class="text-2xl font-black text-slate-900 uppercase mb-4">Nuestra Visión</h2>
                    <p class="text-slate-600 leading-relaxed italic">
                        "Proyectarnos como el colegio más completo del estado Carabobo, donde nuestros estudiantes tendrán una educación integral que les permitirá seguir creciendo como profesionales y ciudadanos de bien."
                    </p>
                </div>
            </div>
        </section>

        <section class="py-16 bg-slate-900 text-white">
            <div class="max-w-7xl mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl font-black uppercase tracking-widest">Nuestra Filosofía</h2>
                    <p class="text-slate-400 mt-2">Valores que rigen nuestra comunidad educativa</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    @php
                        $valores = [
                            ['icon' => 'fa-hands-helping', 'titulo' => 'Solidaridad', 'desc' => 'Respeto y colaboración con nuestros compañeros.'],
                            ['icon' => 'fa-check-double', 'titulo' => 'Responsabilidad', 'desc' => 'Lealtad a nuestro trabajo y profesión.'],
                            ['icon' => 'fa-heart', 'titulo' => 'Honestidad', 'desc' => 'Transparencia con familias y comunidad.'],
                            ['icon' => 'fa-user-tie', 'titulo' => 'Ética Profesional', 'desc' => 'Cumplimiento cabal de deberes laborales.'],
                            ['icon' => 'fa-handshake', 'titulo' => 'Compromiso', 'desc' => 'Mantenemos nuestras promesas y obligaciones.'],
                            ['icon' => 'fa-home', 'titulo' => 'Pertenencia', 'desc' => 'Identidad con nuestra institución.'],
                            ['icon' => 'fa-star', 'titulo' => 'Dedicación', 'desc' => 'Entrega sin condición al deber.'],
                            ['icon' => 'fa-balance-scale', 'titulo' => 'Ecuanimidad', 'desc' => 'Juicios imparciales y justos.'],
                        ];
                    @endphp

                    @foreach($valores as $valor)
                        <div class="bg-slate-800 p-6 rounded-2xl border border-slate-700 hover:border-blue-500 transition-colors group text-center">
                            <i class="fas {{ $valor['icon'] }} text-blue-500 text-2xl mb-4 group-hover:scale-110 transition-transform"></i>
                            <h3 class="font-bold uppercase text-xs tracking-widest mb-2">{{ $valor['titulo'] }}</h3>
                            <p class="text-[10px] text-slate-400 leading-tight">{{ $valor['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="py-20 max-w-7xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2 space-y-6">
                    <h2 class="text-3xl font-black text-slate-900 uppercase">Infraestructura de <span class="text-blue-600">Vanguardia</span></h2>
                    <p class="text-slate-600">Nuestra planta física cuenta con más de 5.000 m² de construcción en un terreno de 10.000 m², diseñados para el aprendizaje técnico y deportivo.</p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-sm font-bold text-slate-700">
                            <i class="fas fa-microchip text-blue-600"></i> Laboratorios Tecnológicos (PLED)
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-slate-700">
                            <i class="fas fa-flask text-blue-600"></i> Laboratorios de Química y Biología
                        </li>
                        <li class="flex items-center gap-3 text-sm font-bold text-slate-700">
                            <i class="fas fa-basketball-ball text-blue-600"></i> Áreas verdes y Cancha Múltiple
                        </li>
                    </ul>
                </div>
                <div class="md:w-1/2 grid grid-cols-2 gap-4">
                    <div class="h-48 bg-slate-200 rounded-3xl overflow-hidden shadow-lg">
                        <img src="{{ asset('images/planta-fisica-1.jpg') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="h-48 bg-slate-200 rounded-3xl translate-y-8 overflow-hidden shadow-lg">
                        <img src="{{ asset('images/planta-fisica-2.jpg') }}" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-layouts.app>