@extends('layouts.app')

@section('title', 'Simulasi Min-Heap')

@section('content')
<!-- Header Section -->
<header class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
    <div class="space-y-1">
        <span class="text-primary font-bold text-[10px] tracking-widest uppercase">Laboratory</span>
        <h1 class="text-3xl font-extrabold tracking-tight text-on-surface font-headline">Simulasi Min-Heap & SJF</h1>
        <p class="text-on-surface-variant body-md max-w-2xl">Visualisasi edukatif untuk logika penjadwalan Shortest Job First (SJF) menggunakan struktur antrean prioritas.</p>
    </div>
    <div class="flex items-center gap-3">
        <button class="px-5 py-2.5 rounded-xl bg-surface-container-high text-on-surface-variant font-semibold text-xs hover:bg-surface-container-highest transition-colors flex items-center gap-2 border border-outline-variant/10">
            <span class="material-symbols-outlined text-sm">refresh</span> Reset
        </button>
        <button class="px-5 py-2.5 rounded-xl bg-primary-gradient text-white font-bold text-xs shadow-indigo hover:opacity-90 active:scale-95 transition-all flex items-center gap-2">
            <span class="material-symbols-outlined text-sm">play_arrow</span> Jalankan Dispatcher
        </button>
    </div>
</header>

<div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
    <!-- Left: Heap Visualization -->
    <section class="lg:col-span-8 space-y-6">
        <div class="bg-surface-container-lowest rounded-2xl p-8 shadow-indigo relative overflow-hidden border border-white/50">
            <div class="flex justify-between items-center mb-8">
                <h3 class="text-lg font-bold flex items-center gap-2 font-headline">
                    <span class="material-symbols-outlined text-primary">account_tree</span>
                    Struktur Binary Min-Heap
                </h3>
                <span class="text-[10px] font-bold text-on-surface-variant bg-surface-container-low px-3 py-1 rounded-full uppercase tracking-tighter">Smallest Job = High Priority</span>
            </div>

            <!-- Visual Tree -->
            <div class="flex flex-col items-center gap-12 py-10 relative">
                <!-- Node Level 0 -->
                <div class="relative z-10">
                    <div class="w-16 h-16 rounded-full bg-primary-gradient text-white flex flex-col items-center justify-center border-4 border-white shadow-xl">
                        <span class="text-[8px] font-bold opacity-80 uppercase">Job 4</span>
                        <span class="text-xl font-extrabold tracking-tighter">12s</span>
                    </div>
                </div>

                <!-- Node Level 1 -->
                <div class="flex gap-24 relative z-10">
                    <div class="w-14 h-14 rounded-full bg-secondary text-white flex flex-col items-center justify-center border-4 border-white shadow-lg">
                        <span class="text-[8px] font-bold opacity-80 uppercase">Job 7</span>
                        <span class="text-lg font-bold">45s</span>
                    </div>
                    <div class="w-14 h-14 rounded-full bg-secondary text-white flex flex-col items-center justify-center border-4 border-white shadow-lg">
                        <span class="text-[8px] font-bold opacity-80 uppercase">Job 2</span>
                        <span class="text-lg font-bold">52s</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Array Representation -->
        <div class="bg-surface-container-low rounded-2xl p-6 border border-outline-variant/10">
            <h4 class="text-[10px] font-bold text-on-surface-variant uppercase tracking-widest mb-4">Memory Index View (Array)</h4>
            <div class="flex flex-wrap gap-2">
                <div class="flex flex-col items-center">
                    <div class="w-12 h-12 bg-primary text-white flex items-center justify-center font-bold text-lg rounded-lg shadow-sm">12</div>
                    <span class="text-[8px] font-medium text-slate-400 mt-2">[0]</span>
                </div>
                <!-- More items can be added here -->
            </div>
        </div>
    </section>

    <!-- Right: Logs & Control -->
    <section class="lg:col-span-4 space-y-6">
        <div class="bg-primary-gradient text-white rounded-2xl p-6 shadow-indigo-200 shadow-xl overflow-hidden relative">
            <h4 class="text-[10px] font-bold uppercase opacity-80 tracking-widest mb-4">Dispatcher Status</h4>
            <div class="space-y-4 relative z-10">
                <span class="text-3xl font-black tracking-tighter block">Optimal</span>
                <p class="text-xs opacity-70">Shortest Job First priority active</p>
            </div>
        </div>

        <!-- Process Log Panel -->
        <div class="bg-surface-container-lowest rounded-2xl shadow-indigo border border-white/50 flex flex-col h-[400px]">
            <div class="p-4 border-b border-slate-100 flex justify-between items-center">
                <h4 class="font-bold text-sm flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary text-sm">history</span>
                    Riwayat Algoritma
                </h4>
            </div>
            <div class="flex-grow overflow-y-auto p-4 space-y-4">
                <div class="flex gap-3">
                    <div class="flex flex-col items-center">
                        <div class="w-2 h-2 rounded-full bg-tertiary"></div>
                        <div class="w-px flex-grow bg-slate-200 my-1"></div>
                    </div>
                    <div>
                        <p class="text-[11px] font-bold text-on-surface">EXTRACT_MIN triggered</p>
                        <p class="text-[10px] text-on-surface-variant">Job 4 (12s) removed from Root.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Instructional Footer -->
<section class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-8 border-t border-slate-200">
    <div class="bg-surface-container-low p-5 rounded-2xl flex items-start gap-4">
        <div class="w-10 h-10 rounded-xl bg-tertiary/10 text-tertiary flex items-center justify-center shrink-0">
            <span class="material-symbols-outlined">school</span>
        </div>
        <div>
            <h5 class="text-xs font-bold font-headline mb-1">Apa itu Min-Heap?</h5>
            <p class="text-[10px] text-on-surface-variant leading-relaxed">Struktur data pohon binary dimana setiap orang tua selalu lebih kecil dari anak-anaknya.</p>
        </div>
    </div>
</section>
@endsection
