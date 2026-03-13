<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Motor de distribución equitativa de propinas basado en algoritmos de tiempo por Americo Labs. Gestión eficiente y justa para equipos de servicio.">
    <meta name="keywords" content="propinas, distribución, restaurante, nómina, optimización RRHH, Americo Labs">
    <meta name="author" content="Americo Labs">

    <title>Calculadora de Propinas | Americo Labs</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Critical Light Theme Override (For immediate visual feedback) -->
    <style>
        body {
            background-color: #FFFFFF !important;
            background-image:
                radial-gradient(at 0% 0%, rgba(16, 185, 129, 0.05) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(16, 185, 129, 0.05) 0px, transparent 50%) !important;
            color: #1E293B !important;
        }

        .glass-panel {
            background-color: rgba(255, 255, 255, 0.7) !important;
            backdrop-filter: blur(20px) !important;
            border: 1px solid rgba(226, 232, 240, 0.8) !important;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05) !important;
        }

        @keyframes fade-in-right {
            from {
                opacity: 0;
                transform: translateX(20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fade-out-right {
            from {
                opacity: 1;
                transform: translateX(0);
            }

            to {
                opacity: 0;
                transform: translateX(20px);
            }
        }

        .animate-fade-in-right {
            animation: fade-in-right 0.4s ease-out forwards;
        }

        .animate-fade-out-right {
            animation: fade-out-right 0.3s ease-in forwards;
        }
    </style>
</head>

<body class="antialiased min-h-screen py-8 px-4 sm:px-6 lg:px-8 font-sans">

    <div class="max-w-3xl mx-auto">
        <header class="mb-10 text-center px-4">
            <a href="{{ url('/') }}" class="inline-block transition-transform hover:scale-105 duration-300">
                <img src="{{ asset('images/logo.png') }}" alt="Americo Labs Logo"
                    class="h-12 sm:h-16 w-auto mx-auto mb-4 max-w-full transition-opacity duration-300">
            </a>

            <p class="text-slate-500 font-medium text-sm sm:text-base">Distribución equitativa por tiempo trabajado</p>
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="mt-16 pb-8 border-t border-slate-200 pt-10">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 px-4">
                <div class="text-center md:text-left">
                    <p class="text-slate-500 text-sm font-medium">&copy; {{ date('Y') }} Americo Labs. Todos los
                        derechos reservados.</p>
                </div>

                <div
                    class="flex items-center gap-2 px-4 py-2 bg-emerald-50 rounded-full border border-emerald-100 hover:border-emerald-500/30 transition-all duration-300 group">
                    <span class="text-emerald-700/60 text-xs uppercase tracking-widest font-semibold">Diseñado
                        por</span>
                    <a href="https://portafolio.americolabs.com/" target="_blank"
                        class="text-slate-900 hover:text-emerald-600 font-bold transition-colors duration-300 flex items-center gap-1.5">
                        <span class="text-emerald-600">Americo</span>
                        <span>Labs</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            class="w-4 h-4 text-emerald-600 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform">
                            <path fill-rule="evenodd"
                                d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>