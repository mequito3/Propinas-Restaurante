@extends('layouts.app')

@section('content')
    <div class="space-y-8 relative max-w-4xl mx-auto">

        <!-- Alerta de Mensaje de Éxito -->
        @if(session('success'))
            <div
                class="glass-panel p-4 bg-emerald-50 border-emerald-200 text-emerald-700 flex items-center justify-center space-x-3 shadow-sm animate-fade-in-down">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span class="font-medium tracking-wide">{{ session('success') }}</span>
            </div>
        @endif

        <!-- Sección Superior: Entrada de Total de Propinas -->
        <div class="glass-panel p-8 flex flex-col items-center relative overflow-hidden group">
            <!-- Subtle Glow Effect Behind -->
            <div
                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3/4 h-3/4 bg-emerald-500/5 blur-[80px] rounded-full point-events-none transition-opacity duration-700 opacity-50 group-hover:opacity-100">
            </div>

            <label for="totalTips"
                class="text-xs font-bold text-slate-500 mb-3 uppercase tracking-[0.2em] relative z-10">Total Recaudado en
                Turno</label>

            <div class="relative w-full max-w-sm z-10">
                <div class="absolute inset-y-0 left-0 pl-6 flex items-center pointer-events-none">
                    <span class="text-emerald-600/80 font-medium text-lg sm:text-2xl">Bs.</span>
                </div>
                <input type="number" id="totalTips" name="totalTips" min="0" step="0.01" placeholder="0.00"
                    class="block w-full pl-20 pr-6 py-6 bg-white border border-slate-200 rounded-[1.25rem] text-slate-900 text-5xl font-extrabold text-center focus:outline-none focus:ring-1 focus:ring-emerald-500/50 focus:border-emerald-500/50 transition-all shadow-sm placeholder-slate-300 hover:bg-slate-50"
                    autocomplete="off">
            </div>
        </div>

        <!-- Nueva Sección: Añadir Personal Dinámicamente -->
        <div class="glass-panel p-6">
            <h2
                class="text-xs font-bold text-slate-400 mb-5 uppercase tracking-[0.15em] flex items-center border-b border-white/5 pb-3">
                <svg class="w-4 h-4 mr-2 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                </svg>
                Añadir Miembro del Equipo
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-5 items-end">
                <div class="md:col-span-4 relative group">
                    <label
                        class="block text-[11px] font-semibold text-slate-500 mb-1.5 uppercase tracking-wider">Nombre</label>
                    <input type="text" id="newStaffName" placeholder="Ej. Juan Pérez"
                        class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-emerald-500/50 focus:ring-1 focus:ring-emerald-500/50 transition-all">
                </div>

                <div class="md:col-span-3 relative group">
                    <label
                        class="block text-[11px] font-semibold text-slate-500 mb-1.5 uppercase tracking-wider">Rol</label>
                    <div class="relative">
                        <select id="newStaffRole"
                            class="appearance-none w-full bg-white border border-slate-200 rounded-xl px-4 py-3 text-slate-900 focus:outline-none focus:border-emerald-500/50 focus:ring-1 focus:ring-emerald-500/50 transition-all cursor-pointer">
                            <option value="" disabled selected class="text-slate-400">Seleccionar Rol...</option>
                            <option value="Mesero">Mesero</option>
                            <option value="Mesera">Mesera</option>
                            <option value="Cocinero">Cocinero</option>
                            <option value="Ayudante Cocina">Ayudante Cocina</option>
                            <option value="Bartender">Bartender</option>
                            <option value="Cajero">Cajero</option>
                            <option value="Administrador">Administrador</option>
                            <option value="Personal Limpieza">Personal Limpieza</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-2 relative group">
                    <label
                        class="block text-[11px] font-semibold text-slate-500 mb-1.5 uppercase tracking-wider">Horas</label>
                    <input type="number" id="newStaffHours" step="0.5" min="0.5" placeholder="8.0"
                        class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 text-slate-900 text-center font-mono placeholder-slate-400 focus:outline-none focus:border-emerald-500/50 focus:ring-1 focus:ring-emerald-500/50 transition-all">
                </div>

                <div class="md:col-span-3">
                    <button type="button" id="addStaffBtn"
                        class="w-full h-[46px] bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-xl transition-all duration-300 flex items-center justify-center space-x-2 shadow-lg shadow-emerald-500/20 active:scale-[0.98]">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <span>Añadir</span>
                    </button>
                </div>
            </div>

            <!-- Acciones Rápidas (Quick Add) -->
            <div class="mt-5 pt-4 border-t border-slate-700/50 flex flex-col sm:flex-row items-center justify-between">
                <span class="text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-3 sm:mb-0">Añadir
                    Rápidamente:</span>
                <div class="flex flex-wrap gap-2">
                    <button type="button" onclick="addQuickStaff('Meser@')"
                        class="bg-white hover:bg-emerald-50 border border-slate-200 hover:border-emerald-500/50 text-slate-600 hover:text-emerald-600 text-xs font-medium py-1.5 px-3 rounded-lg transition-colors flex items-center shadow-sm">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Meser@
                    </button>
                    <button type="button" onclick="addQuickStaff('Cociner@')"
                        class="bg-white hover:bg-emerald-50 border border-slate-200 hover:border-emerald-500/50 text-slate-600 hover:text-emerald-600 text-xs font-medium py-1.5 px-3 rounded-lg transition-colors flex items-center shadow-sm">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Cociner@
                    </button>
                    <button type="button" onclick="addQuickStaff('Bacher@')"
                        class="bg-white hover:bg-emerald-50 border border-slate-200 hover:border-emerald-500/50 text-slate-600 hover:text-emerald-600 text-xs font-medium py-1.5 px-3 rounded-lg transition-colors flex items-center shadow-sm">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Bacher@
                    </button>
                </div>
            </div>
        </div>

        <!-- FORMULARIO PRINCIPAL: Envío de total y lista de personal -->
        <form action="{{ route('tip-distribution.store') }}" method="POST" id="tipDistributionForm">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="final_total_tips" id="hiddenTotalTips" value="0">

            <!-- Contenedor para Inputs Dinámicos Ocultos -->
            <div id="hiddenStaffInputs"></div>

            <!-- Sección Media: Lista de Procesamiento de Personal -->
            <div class="space-y-4 min-h-[120px]" id="staffList">
                <!-- Tarjetas de personal dinámicas inyectadas aquí -->
                <div id="emptyStateMsg"
                    class="flex flex-col items-center justify-center py-12 px-4 border border-dashed border-slate-200 rounded-2xl bg-white/40 mt-4">
                    <div class="bg-slate-50 p-4 rounded-full mb-3 shadow-inner">
                        <svg class="w-8 h-8 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <p class="text-slate-500 font-medium">El turno actual no tiene personal</p>
                    <p class="text-slate-400 text-sm mt-1">Añade empleados arriba para comenzar la distribución</p>
                </div>
            </div>

            <!-- Estadísticas de Resumen -->
            <div
                class="glass-panel mt-6 px-6 py-4 flex flex-col sm:flex-row justify-between items-center text-sm border-t-2 border-t-emerald-500">
                <div class="flex items-center space-x-3 mb-3 sm:mb-0">
                    <span class="text-slate-500 font-medium uppercase tracking-wider text-[11px]">Horas Totales
                        Computadas</span>
                    <span
                        class="font-extrabold text-emerald-700 text-xl bg-emerald-50 px-3 py-1 rounded-lg border border-emerald-100 shadow-sm"
                        id="totalGroupHoursDisplay">0.00</span>
                </div>
                <div class="flex items-center bg-emerald-50 border border-emerald-100 px-4 py-2 rounded-lg">
                    <svg class="w-4 h-4 text-emerald-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <span class="font-mono text-[11px] text-emerald-700 tracking-tight text-center sm:text-left">PAGO = (HRS / TOTAL) × FONDOS</span>
                </div>
            </div>

            <!-- Sección Inferior: Botón de Acción -->
            <div class="mt-8">
                <button type="submit" id="closeShiftBtn" disabled
                    class="w-full relative overflow-hidden group bg-emerald-600 border border-emerald-500 text-white font-extrabold py-5 px-6 rounded-2xl shadow-[0_10px_30px_-10px_rgba(5,150,105,0.4)] transition-all duration-300 disabled:opacity-30 disabled:cursor-not-allowed hover:bg-emerald-700 active:scale-[0.98]">

                    <!-- Efecto de brillo -->
                    <div
                        class="absolute top-0 -inset-full h-full w-1/2 z-5 block transform -skew-x-12 bg-gradient-to-r from-transparent to-white opacity-20 group-hover:animate-shine">
                    </div>

                    <span class="relative z-10 flex items-center justify-center space-x-3 text-lg uppercase tracking-wider">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>Ejecutar Liquidación</span>
                    </span>
                </button>
            </div>
        </form>

    </div>

    <style>
        @keyframes shine {
            100% {
                left: 200%;
            }
        }

        .animate-shine {
            animation: shine 1.5s infinite;
        }
    </style>

    <!-- JavaScript para DOM Dinámico y Cálculo en Tiempo Real -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const totalTipsInput = document.getElementById('totalTips');
            const hiddenTotalTips = document.getElementById('hiddenTotalTips');
            const closeShiftBtn = document.getElementById('closeShiftBtn');
            const staffListContainer = document.getElementById('staffList');
            const emptyStateMsg = document.getElementById('emptyStateMsg');
            const totalGroupHoursDisplay = document.getElementById('totalGroupHoursDisplay');
            const hiddenStaffInputsContainer = document.getElementById('hiddenStaffInputs');

            // Inputs para Añadir Personal
            const btnAddStaff = document.getElementById('addStaffBtn');
            const inName = document.getElementById('newStaffName');
            const inRole = document.getElementById('newStaffRole');
            const inHours = document.getElementById('newStaffHours');

            let staffData = [];
            let totalGroupHours = 0;

            const formatter = new Intl.NumberFormat('es-BO', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2,
            });

            btnAddStaff.addEventListener('click', function () {
                const name = inName.value.trim();
                const role = inRole.value; // Now it's a select value
                const hours = parseFloat(inHours.value);

                if (!name || !role || isNaN(hours) || hours <= 0) {
                    // Focus styling for visual feedback instead of alert if possible, but alert is fine for now
                    alert('Faltan datos: Asegúrate de ingresar Nombre, seleccionar un Rol, y definir Horas válidas.');
                    return;
                }

                const staffId = Date.now();
                staffData.push({ id: staffId, name, role, hours, payment: 0 });

                inName.value = '';
                inRole.value = ''; // Reset select
                inHours.value = '';
                inName.focus();

                renderStaffList();
                updateCalculations();
            });

            // Función de Añadido Rápido mapeada al objeto window global
            window.addQuickStaff = function (role) {
                const genericNames = ['Alex', 'Sam', 'Cris', 'Dani', 'Pat', 'Leo', 'Max', 'Eli'];
                const randomName = genericNames[Math.floor(Math.random() * genericNames.length)];
                const staffId = Date.now() + Math.floor(Math.random() * 1000);

                // "Sin horas" se añade como 'una sola' (1 cuota/turno)
                staffData.push({
                    id: staffId,
                    name: `${role} ${randomName}`,
                    role: role,
                    hours: 1,
                    payment: 0
                });

                renderStaffList();
                updateCalculations();
            };

            function renderStaffList() {
                staffListContainer.innerHTML = '';
                hiddenStaffInputsContainer.innerHTML = '';
                totalGroupHours = 0;

                if (staffData.length === 0) {
                    staffListContainer.appendChild(emptyStateMsg);
                    emptyStateMsg.style.display = 'flex';
                    return;
                }

                emptyStateMsg.style.display = 'none';

                staffData.forEach((employee, index) => {
                    totalGroupHours += employee.hours;

                    const card = document.createElement('div');
                    card.className = "glass-panel p-5 relative overflow-hidden group hover:bg-slate-50 transition-colors duration-300 border-l-4 border-l-emerald-500";

                    // Añadir resaltado sutil al crear
                    card.style.animation = "fade-in 0.3s ease-out forwards";

                    card.innerHTML = `
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">

                            <!-- Identificación -->
                            <div class="flex items-start space-x-4">
                                <div class="mt-1 relative flex h-2.5 w-2.5 flex-shrink-0">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500 shadow-[0_0_8px_rgba(16,185,129,0.3)]"></span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-slate-900 tracking-tight leading-tight">${employee.name}</h3>
                                    <div class="flex items-center mt-1 space-x-2">
                                        <span class="inline-flex items-center px-2 py-0.5 rounded text-[10px] font-medium bg-slate-100 text-slate-600 border border-slate-200">
                                            ${employee.role}
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <!-- Cálculos -->
                            <div class="flex flex-row items-center justify-end flex-grow sm:flex-grow-0 space-x-6 sm:space-x-8">

                                <!-- Horas -->
                                <div class="text-right">
                                    <p class="text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-1">Jornada</p>
                                    <p class="text-lg font-mono text-emerald-400/90 leading-none">${Number(employee.hours).toFixed(2)}<span class="text-xs text-slate-500 ml-1 font-sans">hrs</span></p>
                                </div>

                                <!-- Cálculo Algorítmico -->
                                <div class="text-right pl-6 border-l border-slate-100 relative">
                                    <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">Retribución</p>
                                    <div class="text-3xl font-extrabold text-slate-900 tracking-tighter flex items-baseline justify-end">
                                        <span class="text-[10px] sm:text-sm font-medium text-emerald-600 mr-1 translate-y-[-2px]">Bs.</span>
                                        <span class="calculated-payment transition-all duration-300" id="pay-${employee.id}">0.00</span>
                                    </div>
                                </div>

                                <!-- Acción de Eliminar -->
                                <div class="pl-2 flex items-center h-full">
                                    <button type="button" class="remove-staff-btn bg-slate-50 hover:bg-rose-50 text-slate-400 hover:text-rose-500 p-2 rounded-lg transition-colors border border-slate-100 hover:border-rose-200" data-id="${employee.id}" title="Eliminar del turno">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    `;
                    staffListContainer.appendChild(card);

                    const hiddenInputs = `
                        <input type="hidden" name="staff[${index}][name]" value="${employee.name}">
                        <input type="hidden" name="staff[${index}][hours]" value="${employee.hours}">
                        <input type="hidden" name="staff[${index}][payment]" id="hidden-pay-${employee.id}" value="0">
                    `;
                    hiddenStaffInputsContainer.insertAdjacentHTML('beforeend', hiddenInputs);
                });

                totalGroupHoursDisplay.innerText = totalGroupHours.toFixed(2);

                document.querySelectorAll('.remove-staff-btn').forEach(btn => {
                    btn.addEventListener('click', function () {
                        const idToRemove = parseInt(this.getAttribute('data-id'));
                        staffData = staffData.filter(s => s.id !== idToRemove);
                        renderStaffList();
                        updateCalculations();
                    });
                });
            }

            function updateCalculations() {
                const totalAmount = parseFloat(totalTipsInput.value);

                if (isNaN(totalAmount) || totalAmount <= 0 || staffData.length === 0) {
                    staffData.forEach(employee => {
                        const payDisplay = document.getElementById(`pay-${employee.id}`);
                        const hiddenPay = document.getElementById(`hidden-pay-${employee.id}`);
                        if (payDisplay) {
                            payDisplay.innerText = '0.00';
                            payDisplay.classList.remove('text-emerald-300');
                        }
                        if (hiddenPay) hiddenPay.value = '0';
                    });
                    closeShiftBtn.disabled = true;
                    hiddenTotalTips.value = '0';
                    return;
                }

                closeShiftBtn.disabled = false;
                hiddenTotalTips.value = totalAmount;

                staffData.forEach(employee => {
                    const payment = (employee.hours / totalGroupHours) * totalAmount;

                    const payDisplay = document.getElementById(`pay-${employee.id}`);
                    const hiddenPay = document.getElementById(`hidden-pay-${employee.id}`);

                    if (payDisplay && hiddenPay) {
                        payDisplay.classList.add('text-emerald-400', 'scale-[1.05]');
                        payDisplay.innerText = formatter.format(payment);
                        hiddenPay.value = payment.toFixed(2);

                        setTimeout(() => {
                            payDisplay.classList.remove('text-emerald-400', 'scale-[1.05]');
                        }, 200);
                    }
                });
            }

            totalTipsInput.addEventListener('input', updateCalculations);

            // Configuración inicial para estado vacío
            renderStaffList();
        });
    </script>
    <style>
        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
@endsection