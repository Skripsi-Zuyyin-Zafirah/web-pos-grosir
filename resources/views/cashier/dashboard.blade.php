@extends('layouts.app')

@section('title', 'Priority Queue Dashboard')

@section('content')
<!-- Hero Header -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
    <div>
        <h1 class="text-3xl font-extrabold text-on-surface tracking-tight">Priority Queue Dashboard</h1>
        <p class="text-on-surface-variant mt-1">Level Kasir: Monitoring Antrian Real-time Berdasarkan EWP (Min-Heap)</p>
    </div>
    <div class="flex gap-3">
        <button class="bg-surface-container-lowest text-primary px-4 py-2.5 rounded-xl text-sm font-bold flex items-center gap-2 hover:bg-primary/5 transition-all shadow-indigo">
            <span class="material-symbols-outlined text-sm">download</span> Export CSV
        </button>
        <button class="bg-primary-gradient text-white px-6 py-2.5 rounded-xl text-sm font-bold shadow-indigo hover:scale-[1.02] active:scale-95 transition-all">
            Panggil Antrian Berikutnya
        </button>
    </div>
</div>

<!-- Bento Grid Layout -->
<div class="grid grid-cols-12 gap-6">
    <!-- Left Column: Queue Table -->
    <div class="col-span-12 lg:col-span-8 space-y-6">
        <div class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-indigo border border-white/50">
            <div class="px-6 py-4 flex justify-between items-center bg-surface-container-low/50">
                <h3 class="font-bold text-on-surface flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">list_alt</span>
                    Tabel Antrian (Min-Heap)
                </h3>
                <span class="text-xs font-semibold text-primary bg-primary-container/10 px-2.5 py-1 rounded-full">8 Pelanggan Menunggu</span>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full border-collapse">
                    <thead class="bg-surface-container-low">
                        <tr>
                            <th class="text-left px-6 py-4 text-[11px] font-bold uppercase tracking-widest text-on-surface-variant">No Antrian</th>
                            <th class="text-left px-6 py-4 text-[11px] font-bold uppercase tracking-widest text-on-surface-variant">Nama Pembeli</th>
                            <th class="text-left px-6 py-4 text-[11px] font-bold uppercase tracking-widest text-on-surface-variant">EWP (Estimasi)</th>
                            <th class="text-left px-6 py-4 text-[11px] font-bold uppercase tracking-widest text-on-surface-variant">Jam Datang</th>
                            <th class="text-left px-6 py-4 text-[11px] font-bold uppercase tracking-widest text-on-surface-variant">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-surface-container-low">
                        <tr class="hover:bg-primary/5 transition-colors group">
                            <td class="px-6 py-4"><span class="font-bold text-primary">PQ-042</span></td>
                            <td class="px-6 py-4 font-semibold">Agus Setiawan</td>
                            <td class="px-6 py-4">5 Menit</td>
                            <td class="px-6 py-4 text-sm text-on-surface-variant">09:12:45</td>
                            <td class="px-6 py-4">
                                <span class="bg-tertiary/10 text-tertiary px-3 py-1 rounded-full text-xs font-bold">NEXT IN LINE</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Staff Monitoring -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach(['Pegawai 1', 'Pegawai 2', 'Pegawai 3', 'Pegawai 4'] as $staff)
                <div class="bg-surface-container-lowest p-5 rounded-2xl border-l-4 {{ $loop->even ? 'border-error' : 'border-tertiary' }} shadow-indigo">
                    <div class="flex justify-between items-start mb-3">
                        <span class="px-2 py-0.5 rounded-full text-[10px] font-bold uppercase {{ $loop->even ? 'bg-error/10 text-error' : 'bg-tertiary/10 text-tertiary' }}">
                            {{ $loop->even ? 'SIBUK' : 'IDLE' }}
                        </span>
                        <span class="material-symbols-outlined text-on-surface-variant text-sm">person</span>
                    </div>
                    <h4 class="font-bold text-on-surface text-sm">{{ $staff }}</h4>
                    <p class="text-[10px] text-on-surface-variant">{{ $loop->even ? 'Processing Order...' : 'Ready for Call' }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Right Column: Visualization -->
    <div class="col-span-12 lg:col-span-4 space-y-6">
        <div class="bg-surface-container-lowest p-6 rounded-2xl relative overflow-hidden shadow-indigo border border-white/50">
            <h3 class="font-bold text-on-surface mb-8 flex items-center gap-2 font-headline">
                <span class="material-symbols-outlined text-primary">account_tree</span>
                Min-Heap Structure
            </h3>
            
            <div class="flex flex-col items-center space-y-8 relative py-4">
                <!-- Simple Binary Tree Visualization with CSS -->
                <div class="relative z-10">
                    <div class="w-16 h-16 rounded-full bg-primary-gradient text-white flex flex-col items-center justify-center shadow-lg border-4 border-white">
                        <span class="text-[8px] font-bold">ROOT</span>
                        <span class="text-base font-bold">5m</span>
                    </div>
                </div>
                
                <div class="flex justify-between w-full max-w-[200px]">
                    <div class="w-12 h-12 rounded-full bg-secondary-container/20 text-secondary flex items-center justify-center shadow-sm font-bold text-xs border border-secondary/20">12m</div>
                    <div class="w-12 h-12 rounded-full bg-secondary-container/20 text-secondary flex items-center justify-center shadow-sm font-bold text-xs border border-secondary/20">18m</div>
                </div>
            </div>

            <div class="mt-8 p-4 bg-slate-50 rounded-xl border border-slate-200/50">
                <p class="text-[10px] uppercase font-black text-on-surface-variant tracking-widest mb-2 font-headline">Priority Logic</p>
                <p class="text-xs text-on-surface-variant leading-relaxed">
                    Pelanggan dengan <strong>EWP</strong> (Estimasi Waktu Proses) terkecil diprioritaskan untuk mengoptimalkan throughput kasir.
                </p>
            </div>
        </div>

        <!-- Health Card -->
        <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-indigo border border-white/50">
            <div class="flex justify-between mb-4">
                <h3 class="font-bold text-on-surface text-sm">Queue Health</h3>
                <span class="material-symbols-outlined text-tertiary">bolt</span>
            </div>
            <div class="space-y-4">
                <p class="text-xs text-on-surface-variant font-medium">Avg. Wait Time</p>
                <p class="text-2xl font-black text-on-surface">14.2m</p>
                <div class="w-full bg-slate-100 h-1.5 rounded-full">
                    <div class="bg-primary h-full rounded-full" style="width: 75%;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
