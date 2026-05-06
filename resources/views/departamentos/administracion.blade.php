<x-layouts.app>
    <div class="min-h-screen"> 
        
        <section class="py-20 bg-slate-900 text-white rounded-b-[3rem] shadow-xl">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <span class="inline-block py-1 px-3 rounded-full bg-blue-600/20 text-blue-400 text-[10px] font-black uppercase tracking-widest mb-4 border border-blue-500/30">
                    Atención al Representante
                </span>
                <h1 class="text-4xl md:text-5xl font-black uppercase tracking-tighter">Departamento de Administración</h1>
                <p class="text-slate-400 mt-4 max-w-2xl mx-auto font-medium">
                    Gestión de trámites, estados de cuenta y procesos administrativos de la comunidad Litiniana.
                </p>
            </div>
        </section>

        <div class="max-w-7xl mx-auto px-6 py-12">
            <div class="grid md:grid-cols-3 gap-8">
                
                <div class="md:col-span-1 space-y-6">
                    <div class="bg-white p-8 rounded-3xl shadow-lg border border-slate-100 sticky top-28">
                        <h3 class="font-black uppercase text-slate-900 mb-6 flex items-center gap-2">
                            <i class="fas fa-clock text-blue-600"></i> Horario de Atención
                        </h3>
                        <ul class="space-y-4 text-sm text-slate-600 font-medium">
                            <li class="flex justify-between border-b border-slate-50 pb-2">
                                <span>Lunes a Viernes</span>
                                <span class="text-slate-900">7:30 AM - 3:30 PM</span>
                            </li>
                            <li class="flex justify-between text-red-600">
                                <span>Sábados y Domingos</span>
                                <span>Cerrado</span>
                            </li>
                        </ul>
                        
                        <div class="mt-8 pt-8 border-t border-slate-50">
                            <h4 class="font-bold text-xs uppercase tracking-widest text-slate-400 mb-4">Contacto Directo</h4>
                            <div class="space-y-3">
                                <a href="mailto:administracion@litin.edu.ve" class="flex items-center gap-3 text-sm text-blue-600 hover:underline font-bold">
                                    <div class="w-8 h-8 rounded-lg bg-blue-50 flex items-center justify-center">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    adm@litin.edu.ve
                                </a>
                                <p class="flex items-center gap-3 text-sm text-slate-600 font-bold">
                                    <div class="w-8 h-8 rounded-lg bg-slate-50 flex items-center justify-center text-slate-400">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    Extensión 102 / 105
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-2 space-y-8">
                    <div class="bg-white p-8 rounded-3xl shadow-lg border border-slate-100">
                        <h3 class="text-2xl font-black uppercase text-slate-900 mb-6">Modalidades de Pago</h3>
                        <div class="grid sm:grid-cols-2 gap-6">
                            <div class="p-6 rounded-2xl bg-blue-50/50 border border-blue-100 group hover:bg-blue-50 transition">
                                <div class="bg-blue-600 text-white w-12 h-12 rounded-xl flex items-center justify-center mb-4 shadow-lg shadow-blue-200">
                                    <i class="fas fa-university text-xl"></i>
                                </div>
                                <h4 class="font-bold text-slate-900 text-lg">Transferencias</h4>
                                <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                                    Aceptamos pagos desde cualquier banco nacional. Solicite los datos actualizados en taquilla o vía correo.
                                </p>
                            </div>

                            <div class="p-6 rounded-2xl bg-emerald-50/50 border border-emerald-100 group hover:bg-emerald-50 transition">
                                <div class="bg-emerald-600 text-white w-12 h-12 rounded-xl flex items-center justify-center mb-4 shadow-lg shadow-emerald-200">
                                    <i class="fas fa-money-bill-wave text-xl"></i>
                                </div>
                                <h4 class="font-bold text-slate-900 text-lg">Taquilla Directa</h4>
                                <p class="text-xs text-slate-500 mt-2 leading-relaxed">
                                    Recepción de divisas y bolívares en efectivo directamente en nuestras oficinas administrativas.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-red-50 border-l-4 border-red-600 p-8 rounded-3xl shadow-sm">
                        <div class="flex flex-col sm:flex-row gap-6 items-start">
                            <div class="bg-red-600 text-white p-4 rounded-2xl shadow-lg">
                                <i class="fas fa-exclamation-triangle text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="font-black text-red-900 uppercase text-lg leading-none mb-2">Reporte de Pagos Obligatorio</h4>
                                <p class="text-sm text-red-700 leading-relaxed font-medium">
                                    Todo pago realizado vía transferencia debe ser reportado en un lapso <strong>no mayor a 48 horas</strong>. Debe enviar el comprobante digital al correo institucional o presentarlo en físico para la emisión de su recibo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>