<x-layouts.app>
    <div class="bg-slate-50 min-h-screen">
        <section class="py-16 bg-slate-900 text-white">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <h1 class="text-4xl md:text-5xl font-black uppercase tracking-tighter">Departamento de Administración</h1>
                <p class="text-slate-400 mt-4 max-w-2xl mx-auto">Gestión de trámites, estados de cuenta y procesos administrativos de la comunidad Litiniana.</p>
            </div>
        </section>

        <div class="max-w-7xl mx-auto px-6 py-12">
            <div class="grid md:grid-cols-3 gap-8">
                
                <div class="md:col-span-1 space-y-6">
                    <div class="bg-white p-8 rounded-3xl shadow-lg border border-slate-100">
                        <h3 class="font-black uppercase text-slate-900 mb-6 flex items-center gap-2">
                            <i class="fas fa-clock text-blue-600"></i> Horario de Atención
                        </h3>
                        <ul class="space-y-4 text-sm text-slate-600 font-medium">
                            <li class="flex justify-between border-b pb-2">
                                <span>Lunes a Viernes</span>
                                <span class="text-slate-900">7:30 AM - 3:30 PM</span>
                            </li>
                            <li class="flex justify-between text-red-600">
                                <span>Sábados y Domingos</span>
                                <span>Cerrado</span>
                            </li>
                        </ul>
                        
                        <div class="mt-8 pt-8 border-t">
                            <h4 class="font-bold text-xs uppercase tracking-widest text-slate-400 mb-4">Contacto Directo</h4>
                            <div class="space-y-3">
                                <a href="mailto:administracion@litin.edu.ve" class="flex items-center gap-3 text-sm text-blue-600 hover:underline">
                                    <i class="fas fa-envelope"></i> adm@litin.edu.ve
                                </a>
                                <p class="flex items-center gap-3 text-sm text-slate-600">
                                    <i class="fas fa-phone-alt"></i> Extensión 102 / 105
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-2 space-y-8">
                    <div class="bg-white p-8 rounded-3xl shadow-lg border border-slate-100">
                        <h3 class="font-black uppercase text-slate-900 mb-6">Modalidades de Pago</h3>
                        <div class="grid sm:grid-cols-2 gap-4">
                            <div class="p-4 rounded-2xl bg-blue-50 border border-blue-100 flex items-start gap-4">
                                <div class="bg-blue-600 text-white p-3 rounded-xl">
                                    <i class="fas fa-university"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900">Transferencias / Pago Móvil</h4>
                                    <p class="text-[11px] text-slate-500">Bancos Nacionales (Consultar datos en taquilla)</p>
                                </div>
                            </div>
                            <div class="p-4 rounded-2xl bg-green-50 border border-green-100 flex items-start gap-4">
                                <div class="bg-green-600 text-white p-3 rounded-xl">
                                    <i class="fas fa-money-bill-wave"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900">Taquilla (Efectivo)</h4>
                                    <p class="text-[11px] text-slate-500">Divisas y Bolívares directamente en el colegio.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-red-50 border-l-4 border-red-600 p-6 rounded-2xl">
                        <div class="flex gap-4">
                            <i class="fas fa-exclamation-triangle text-red-600 text-xl"></i>
                            <div>
                                <h4 class="font-black text-red-900 uppercase text-sm">Reporte de Pagos</h4>
                                <p class="text-sm text-red-700 mt-1 leading-relaxed">
                                    Recuerde que todo pago realizado vía transferencia debe ser reportado en un lapso no mayor a 48 horas enviando el comprobante al correo institucional o presentándolo en físico.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>