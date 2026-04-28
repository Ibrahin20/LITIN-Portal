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
    
    <nav x-data="{ open: false, academicOpen: false, deptOpen: false }" class="bg-white border-b-4 border-blue-600 sticky top-0 z-50 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-24">
                
                <div class="flex items-center gap-3">
                    <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                        <img src="{{ asset('images/logo-litin.png') }}" alt="Logo LITIN" class="h-16 w-auto transition-transform group-hover:scale-105">
                        <div class="hidden md:block">
                            <h1 class="text-2xl font-black text-blue-900 tracking-tighter uppercase leading-none">LITIN</h1>
                            <p class="text-[9px] text-red-600 tracking-[0.2em] uppercase font-bold mt-1">¡Inventamos o Erramos!</p>
                        </div>
                    </a>
                </div>

                <div class="hidden lg:flex items-center space-x-8">
                    <a href="{{ url('/') }}" class="text-xs font-bold text-slate-600 hover:text-blue-600 uppercase tracking-widest transition">Inicio</a>
                    <a href="{{ url('/la-institucion') }}" class="text-xs font-bold text-slate-600 hover:text-blue-600 uppercase tracking-widest transition">La Institución</a>
                    <a href="{{ url('/testimonios') }}" class="text-xs font-bold text-slate-600 hover:text-blue-600 uppercase tracking-widest transition">Testimonios</a>

                    <div class="relative">
                        <button @click="academicOpen = !academicOpen" @click.away="academicOpen = false" class="flex items-center gap-1 text-xs font-bold text-slate-600 hover:text-blue-600 uppercase tracking-widest transition">
                            Oferta Académica
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div x-show="academicOpen" x-transition class="absolute left-0 mt-2 w-56 bg-white border border-slate-100 rounded-xl shadow-xl py-2 z-50">
                            <a href="{{ url('/primaria') }}" class="block px-4 py-3 text-sm text-slate-700 hover:bg-blue-50 hover:text-blue-700 font-semibold transition">Educación Primaria</a>
                            <a href="{{ url('/media-general') }}" class="block px-4 py-3 text-sm text-slate-700 hover:bg-blue-50 hover:text-blue-700 font-semibold transition">Media General</a>
                            <hr class="my-1 border-slate-100">
                            <a href="{{ url('/admision') }}" class="block px-4 py-3 text-sm text-red-600 hover:bg-red-50 font-bold transition">Solicitud de Cupo</a>
                        </div>
                    </div>

                    <div class="relative">
                        <button @click="deptOpen = !deptOpen" @click.away="deptOpen = false" class="flex items-center gap-1 text-xs font-bold text-slate-600 hover:text-blue-600 uppercase tracking-widest transition">
                            Departamentos
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                        <div x-show="deptOpen" x-transition class="absolute left-0 mt-2 w-56 bg-white border border-slate-100 rounded-xl shadow-xl py-2 z-50">
                            <a href="{{ url('/bienestar-estudiantil') }}" class="block px-4 py-3 text-sm text-slate-700 hover:bg-blue-50 hover:text-blue-700 font-semibold transition">Bienestar Estudiantil</a>
                            <a href="{{ url('/administracion') }}" class="block px-4 py-3 text-sm text-slate-700 hover:bg-blue-50 hover:text-blue-700 font-semibold transition">Administración</a>
                            <a href="{{ url('/deporte-recreacion') }}" class="block px-4 py-3 text-sm text-slate-700 hover:bg-blue-50 hover:text-blue-700 font-semibold transition">Deporte y Recreación</a>
                            <a href="{{ url('/cultura') }}" class="block px-4 py-3 text-sm text-slate-700 hover:bg-blue-50 hover:text-blue-700 font-semibold transition">Cultura</a>
                            <a href="{{ url('/escuela-para-padres') }}" class="block px-4 py-3 text-sm text-slate-700 hover:bg-blue-50 hover:text-blue-700 font-semibold transition">Escuela para Padres</a>
                        </div>
                    </div>

                    <a href="{{ url('/admision') }}" class="text-xs font-bold text-slate-600 hover:text-blue-600 uppercase tracking-widest transition">Admisión</a>

                    <a href="https://virtual.litin.edu.ve/moodle30/login/index.php" target="_blank" class="bg-blue-700 hover:bg-blue-800 text-white px-6 py-3 rounded-xl text-xs font-black uppercase tracking-widest transition shadow-lg shadow-blue-900/20">
                        Aula Virtual
                    </a>
                </div>

                <div class="lg:hidden flex items-center">
                    <button @click="open = !open" class="text-slate-600 hover:text-blue-600 p-2 transition">
                        <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div x-show="open" x-transition class="lg:hidden bg-white border-t border-slate-100 py-4 px-4 space-y-2 shadow-inner">
            <a href="{{ url('/') }}" class="block px-3 py-2 text-base font-bold text-slate-700 hover:bg-slate-50 rounded-lg">Inicio</a>
            <a href="{{ url('/la-institucion') }}" class="block px-3 py-2 text-base font-bold text-slate-700 hover:bg-slate-50 rounded-lg">La Institución</a>
            <a href="{{ url('/testimonios') }}" class="block px-3 py-2 text-base font-bold text-slate-700 hover:bg-slate-50 rounded-lg">Testimonios</a>
            <div class="px-3 py-2 font-bold text-slate-400 text-xs uppercase tracking-widest">Oferta Académica</div>
            <a href="{{ url('/primaria') }}" class="block px-6 py-2 text-sm font-medium text-slate-600">Primaria</a>
            <a href="{{ url('/media-general') }}" class="block px-6 py-2 text-sm font-medium text-slate-600">Media General</a>
            <hr class="border-slate-100">
            <a href="https://virtual.litin.edu.ve/moodle30/login/index.php" target="_blank" class="block px-3 py-4 bg-blue-700 text-white text-center rounded-xl font-black uppercase tracking-widest">Aula Virtual</a>
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