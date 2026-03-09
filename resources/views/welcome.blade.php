@extends('layouts.app')

@section('content')
    <div class="glass-panel p-10 text-center space-y-8 max-w-2xl mx-auto shadow-sm border border-slate-200">
        <div class="flex flex-col items-center space-y-4">
            <div class="h-16 w-16 bg-emerald-50 rounded-full flex items-center justify-center text-emerald-600 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <h1 class="text-4xl font-extrabold text-slate-900 tracking-tight">
                Distribución de Propinas
            </h1>
            <p class="text-slate-500 text-lg max-w-lg mx-auto leading-relaxed">
                Optimiza la gestión de recompensas de tu equipo con nuestro motor algorítmico equitativo de <span
                    class="text-emerald-600 font-semibold italic text-emerald-600/80">Americo Labs</span>.
            </p>
        </div>

        <div class="pt-6">
            <a href="{{ route('tip-distribution.index') }}"
                class="inline-flex items-center justify-center bg-emerald-600 hover:bg-emerald-700 text-white font-bold py-4 px-10 rounded-2xl transition-all duration-300 shadow-xl shadow-emerald-500/20 group hover:scale-[1.02] active:scale-[0.98]">
                Comenzar Liquidación
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                    stroke="currentColor" class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>

        <div class="pt-10 border-t border-slate-100 flex flex-wrap justify-center gap-4">
            <div
                class="flex items-center text-sm text-slate-500 bg-slate-50 px-4 py-2 rounded-full border border-slate-200">
                <svg class="w-4 h-4 mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Algoritmo Real-Time
            </div>
            <div
                class="flex items-center text-sm text-slate-500 bg-slate-50 px-4 py-2 rounded-full border border-slate-200">
                <svg class="w-4 h-4 mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                Multi-Personal
            </div>
        </div>
    </div>
@endsection