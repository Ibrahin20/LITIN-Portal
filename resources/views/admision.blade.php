<x-layouts.app>
    <div class="bg-slate-50 min-h-screen pb-20">
        <section class="bg-blue-900 py-16 text-white">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tighter">Admisiones 2026</h1>
                <p class="text-blue-200 mt-4 text-lg">Forma parte de la élite técnica de Carabobo. Inicia tu proceso aquí.</p>
            </div>
        </section>

        <div class="max-w-4xl mx-auto px-6 -mt-10">
            <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-slate-200">
                <div class="p-8 md:p-12">
                    <h2 class="text-2xl font-black text-slate-900 uppercase mb-8 flex items-center gap-3">
                        <span class="w-8 h-8 bg-red-600 text-white rounded-full flex items-center justify-center text-sm">1</span>
                        Formulario de solicitud.
                    </h2>

                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-4">
                                <label class="block text-sm font-bold text-slate-700 uppercase tracking-wider">Nombres del Estudiante</label>
                                <input type="text" name="nombres" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all" placeholder="Ej. Juan Pérez">
                            </div>

                            <div class="space-y-4">
                                <label class="block text-sm font-bold text-slate-700 uppercase tracking-wider">Nivel a Cursar</label>
                                <select name="nivel" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all">
                                    <option value="primaria">Primaria</option>
                                    <option value="media">Media General (Bachillerato Técnico)</option>
                                </select>
                            </div>

                            <div class="space-y-4">
                                <label class="block text-sm font-bold text-slate-700 uppercase tracking-wider">Correo Electrónico</label>
                                <input type="email" name="email" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all" placeholder="contacto@ejemplo.com">
                            </div>

                            <div class="space-y-4">
                                <label class="block text-sm font-bold text-slate-700 uppercase tracking-wider">Teléfono de Contacto</label>
                                <input type="text" name="telefono" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-2 focus:ring-blue-500 outline-none transition-all" placeholder="0412-0000000">
                            </div>
                        </div>

                        <div class="pt-6">
                            <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-black py-4 rounded-xl uppercase tracking-widest transition-all transform hover:scale-[1.02] shadow-lg shadow-red-600/20">
                                Enviar Solicitud de Cupo
                            </button>
                        </div>
                    </form>
                </div>

                <div class="bg-slate-900 p-8 md:p-12 text-white">
                    <h3 class="text-xl font-black uppercase mb-6 text-blue-400">Requisitos Próximos</h3>
                    <div class="grid md:grid-cols-2 gap-6 text-sm text-slate-400">
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3"><i class="fas fa-check-circle text-blue-500"></i> Partida de Nacimiento (Original y Copia)</li>
                            <li class="flex items-center gap-3"><i class="fas fa-check-circle text-blue-500"></i> Notas Certificadas</li>
                            <li class="flex items-center gap-3"><i class="fas fa-check-circle text-blue-500"></i> Copia de Cédula de Identidad</li>
                        </ul>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3"><i class="fas fa-check-circle text-blue-500"></i> 4 Fotos tipo carnet</li>
                            <li class="flex items-center gap-3"><i class="fas fa-check-circle text-blue-500"></i> Carta de Buena Conducta</li>
                            <li class="flex items-center gap-3"><i class="fas fa-info-circle text-red-500"></i> Prueba de conocimiento técnica</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>