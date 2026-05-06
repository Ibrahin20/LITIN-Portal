<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Portal LITIN</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-slate-100 text-slate-800 antialiased min-h-screen">
    
<nav x-data="{ open: false, academicOpen: false, deptOpen: false }" class="bg-white border-b border-slate-100 sticky top-0 z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Barra con altura equilibrada para que el logo respire -->
        <div class="flex justify-between items-center h-28 md:h-36">
            
            <!-- IDENTIDAD INSTITUCIONAL -->
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="flex items-center gap-6 group mr-8">
                    <div class="relative py-2">
                        <img src="{{ asset('images/logo-litin.png') }}" 
                             alt="Logo LITIN" 
                             class="h-20 md:h-24 w-auto transition-transform group-hover:scale-105">
                    </div>
                    
                    <div class="hidden md:flex flex-col border-l-2 border-slate-200 pl-6 py-2">
                        <h1 class="text-[15px] md:text-[17px] font-black text-blue-900 leading-tight uppercase tracking-tighter">
                            U.E. Liceo de Tecnología <br> Industrial
                        </h1>
                        <div class="flex items-center gap-2 mt-2">
                            <span class="h-px w-5 bg-red-600"></span>
                            <p class="text-[11px] md:text-[13px] font-bold text-red-600 uppercase tracking-[0.3em] italic">
                                ¡Inventamos o Erramos!
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- NAVEGACIÓN PRINCIPAL -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="{{ url('/') }}" class="text-[11px] font-bold text-slate-500 hover:text-blue-700 uppercase tracking-widest transition">Inicio</a>
                <a href="{{ url('/la-institucion') }}" class="text-[11px] font-bold text-slate-500 hover:text-blue-700 uppercase tracking-widest transition">Institución</a>
                <a href="{{ url('/testimonios') }}" class="text-[11px] font-bold text-slate-500 hover:text-blue-700 uppercase tracking-widest transition">Testimonios</a>

                <!-- Oferta Académica  -->
                <div class="relative">
                    <button @click="academicOpen = !academicOpen" @click.away="academicOpen = false" 
                            class="flex items-center gap-1 text-[11px] font-bold text-slate-500 hover:text-blue-700 uppercase tracking-widest transition">
                        Oferta Académica
                        <svg class="w-3 h-3 transition-transform" :class="academicOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="academicOpen" x-transition class="absolute left-0 mt-4 w-60 bg-white border border-slate-100 rounded-2xl shadow-2xl py-3 z-50">
                        <a href="{{ url('/primaria') }}" class="block px-5 py-3 text-[11px] text-slate-700 hover:bg-blue-50 font-bold uppercase transition">Educación Primaria</a>
                        <a href="{{ url('/media-general') }}" class="block px-5 py-3 text-[11px] text-slate-700 hover:bg-blue-50 font-bold uppercase transition">Media General</a>
                        <hr class="my-2 border-slate-50">
                        <a href="{{ url('/admision') }}" class="block px-5 py-3 text-[11px] text-red-600 hover:bg-red-50 font-black uppercase italic transition">Solicitud de Cupo</a>
                    </div>
                </div>

                <!-- Departamentos (Lista Restaurada) -->
                <div class="relative">
                    <button @click="deptOpen = !deptOpen" @click.away="deptOpen = false" 
                            class="flex items-center gap-1 text-[11px] font-bold text-slate-500 hover:text-blue-700 uppercase tracking-widest transition">
                        Departamentos
                        <svg class="w-3 h-3 transition-transform" :class="deptOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div x-show="deptOpen" x-transition class="absolute left-0 mt-4 w-64 bg-white border border-slate-100 rounded-2xl shadow-2xl py-3 z-50">
                        <a href="{{ route('dept.bienestar') }}" class="block px-5 py-2.5 text-[10px] text-slate-700 hover:bg-blue-50 font-bold uppercase transition">Bienestar Estudiantil</a>
                        <a href="{{ route('dept.admin') }}" class="block px-5 py-2.5 text-[10px] text-slate-700 hover:bg-blue-50 font-bold uppercase transition">Administración</a>
                        <a href="{{ route('dept.deporte') }}" class="block px-5 py-2.5 text-[10px] text-slate-700 hover:bg-blue-50 font-bold uppercase transition">Deporte y Recreación</a>
                        <a href="{{ route('dept.cultura') }}" class="block px-5 py-2.5 text-[10px] text-slate-700 hover:bg-blue-50 font-bold uppercase transition">Cultura</a>
                        <a href="{{ route('dept.padres') }}" class="block px-5 py-2.5 text-[10px] text-slate-700 hover:bg-blue-50 font-bold uppercase transition">Escuela para Padres</a>
                    </div>
                </div>

                <a href="{{ url('/admision') }}" class="text-[11px] font-bold text-slate-500 hover:text-blue-700 uppercase tracking-widest transition">Admisión</a>

                <!-- BOTÓN AULA VIRTUAL ) -->
                <a href="https://virtual.litin.edu.ve/moodle30/login/index.php" target="_blank" 
                   class="relative flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white px-9 py-4 rounded-xl shadow-xl shadow-blue-900/10 transition-all hover:-translate-y-0.5 group overflow-hidden min-w-40">
                    <span class="relative z-10 text-[11px] font-black uppercase tracking-[0.2em] text-center">
                        Aula Virtual
                    </span>
                    <div class="absolute inset-0 bg-linear-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                </a>
            </div>

            <!-- BOTÓN MÓVIL -->
            <div class="lg:hidden flex items-center">
                <button @click="open = !open" class="text-slate-600 p-2">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- MENÚ MÓVIL -->
    <div x-show="open" x-transition class="lg:hidden bg-white border-t border-slate-100 py-6 px-4 space-y-3">
        <a href="{{ url('/') }}" class="block px-4 py-3 text-base font-black text-slate-800 hover:bg-slate-50 rounded-xl uppercase">Inicio</a>
        <a href="{{ url('/la-institucion') }}" class="block px-4 py-3 text-base font-black text-slate-800 hover:bg-slate-50 rounded-xl uppercase">La Institución</a>
        <a href="https://virtual.litin.edu.ve/moodle30/login/index.php" target="_blank" class="block px-4 py-4 bg-blue-600 text-white text-center rounded-2xl font-black uppercase tracking-widest shadow-lg">Aula Virtual</a>
    </div>
</nav>

    <main>
        {{ $slot }}
    </main>

    <footer class="bg-slate-900 text-white pt-16 pb-8 mt-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
                
                <div class="space-y-6">
                    <div class="flex items-center gap-3">
                        <div class="bg-white p-2 rounded-xl"> 
                            <img src="{{ asset('images/logo-litin.png') }}" alt="Logo LITIN" class="h-12 w-auto object-contain">
                        </div>
                        <div>
                            <h4 class="text-2xl font-black tracking-tighter leading-none text-white">LITIN</h4>
                            <p class="text-[10px] text-red-500 font-bold uppercase tracking-widest mt-1">Fundado en 1991</p>
                        </div>
                    </div>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Formando líderes técnicos industriales en Carabobo por más de 30 años. Disciplina, Compromiso y Éxito.
                    </p>
                    <div class="flex gap-4">
                        <a href="#" class="h-10 w-10 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="h-10 w-10 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition text-white">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="h-10 w-10 bg-slate-800 rounded-lg flex items-center justify-center hover:bg-blue-600 transition text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                </div>

                <div class="space-y-6">
                    <h5 class="text-xs font-black uppercase tracking-[0.3em] text-red-500">Contacto Directo</h5>
                    <ul class="space-y-4 text-sm text-slate-300">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-map-marker-alt mt-1 text-blue-500"></i>
                            <span>Av. Industrial, cruce con calle 99, Edif. LITIN. Valencia, Carabobo.</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-phone-alt text-blue-500"></i>
                            <span>+58 (241) 832.XX.XX</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fas fa-envelope text-blue-500"></i>
                            <span>info@litin.edu.ve</span>
                        </li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <h5 class="text-xs font-black uppercase tracking-[0.3em] text-red-500">Ubícanos</h5>
                    <div class="rounded-2xl overflow-hidden shadow-2xl border-2 border-slate-800 h-48">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3926.837887756195!2d-67.9788!3d10.1533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDA5JzExLjkiTiA2N8KwNTgnNDMuNyJX!5e0!3m2!1ses!2sve!4v1713600000000!5m2!1ses!2sve" 
                            class="w-full h-full border-0" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

            </div>

            <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-[10px] font-bold text-slate-500 uppercase tracking-widest">
                <p>© 2026 U.E. LITIN - Todos los derechos reservados</p>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-white transition">Política de Privacidad</a>
                    <a href="#" class="hover:text-white transition">Términos de Uso</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>