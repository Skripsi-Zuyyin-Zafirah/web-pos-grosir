@extends('layouts.app')

@section('title', 'Distribution & Receipt')

@section('content')
<!-- Header Section -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
    <div>
        <h1 class="text-3xl font-extrabold tracking-tight font-headline text-on-surface">Distribusi & Antrean</h1>
        <p class="text-on-surface-variant font-medium mt-1">Kelola penugasan staf dan cetak bukti transaksi grosir.</p>
    </div>
    <div class="flex gap-2">
        <div class="bg-surface-container-high px-4 py-2 rounded-xl flex items-center gap-3 border border-outline-variant/10">
            <span class="w-3 h-3 bg-tertiary rounded-full animate-pulse"></span>
            <span class="text-sm font-semibold">Sistem Distribusi Aktif</span>
        </div>
    </div>
</div>

<!-- Bento Grid Layout -->
<div class="grid grid-cols-1 xl:grid-cols-12 gap-6">
    <!-- Assignment Notification (Col 1-4) -->
    <div class="xl:col-span-4 space-y-6">
        <div class="bg-primary-container p-6 rounded-2xl shadow-indigo flex items-start gap-4 text-white relative overflow-hidden group">
            <div class="relative z-10 p-3 bg-white/20 rounded-xl backdrop-blur-md">
                <span class="material-symbols-outlined text-3xl">person_search</span>
            </div>
            <div class="relative z-10 flex-1">
                <h3 class="font-headline font-bold text-lg leading-tight">Penugasan Otomatis</h3>
                <p class="text-blue-50/80 text-sm mt-1 leading-relaxed">Sistem mendeteksi Pegawai yang tersedia untuk pesanan terbaru.</p>
                <div class="mt-4 bg-white/10 p-4 rounded-xl border border-white/20">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <div class="h-10 w-10 rounded-full border-2 border-white/50 overflow-hidden bg-white/30 flex items-center justify-center">
                                <span class="material-symbols-outlined text-white">person</span>
                            </div>
                            <div>
                                <p class="text-[8px] font-bold uppercase tracking-tighter opacity-80">Idle Employee Found</p>
                                <p class="font-bold text-base">Pegawai 3 (Ananda)</p>
                            </div>
                        </div>
                        <span class="material-symbols-outlined text-white/50 animate-bounce">arrow_forward</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Staff Availability Monitor -->
        <div class="bg-surface-container-lowest p-6 rounded-2xl border border-outline-variant/10 shadow-indigo">
            <h4 class="font-headline font-bold text-sm mb-4 tracking-tight flex items-center justify-between">
                Status Staff Hari Ini
                <span class="text-[10px] text-on-surface-variant font-mono">LIVE FEED</span>
            </h4>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-3 rounded-xl bg-surface-container-low transition-colors hover:bg-surface-container">
                    <div class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-error"></span>
                        <span class="text-sm font-semibold">Pegawai 1</span>
                    </div>
                </div>
                <div class="flex items-center justify-between p-3 rounded-xl bg-blue-50 border border-blue-100 ring-2 ring-blue-100/50">
                    <div class="flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-tertiary"></span>
                        <span class="text-sm font-bold text-blue-800">Pegawai 3</span>
                    </div>
                    <span class="text-[10px] font-bold text-tertiary">AVAILABLE</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Receipt Preview (Col 5-12) -->
    <div class="xl:col-span-8 flex flex-col">
        <div class="bg-surface-container-low rounded-2xl p-1 flex-1 flex flex-col overflow-hidden border border-outline-variant/10 shadow-indigo">
            <!-- Top Action Bar for Receipt -->
            <div class="flex items-center justify-between p-4 bg-surface-container-lowest rounded-t-2xl border-b border-outline-variant/20">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-primary">description</span>
                    <span class="font-headline font-bold">Preview Struk Pembelian</span>
                </div>
            </div>
            <!-- Real Receipt Container -->
            <div class="flex-1 flex items-center justify-center p-8 bg-slate-200/30 overflow-auto">
                <!-- The Thermal Receipt -->
                <div class="w-full max-w-[380px] bg-white shadow-2xl rounded-sm p-8 flex flex-col font-mono text-[13px] text-slate-800 border-t-8 border-primary relative">
                    <!-- Brand Header -->
                    <div class="text-center space-y-1 mb-6">
                        <h2 class="text-lg font-bold font-headline uppercase tracking-tighter">Toko Jasa Grosir</h2>
                        <p class="text-[10px] leading-tight">Jl. Niaga Utama No. 88, Surabaya 60221</p>
                    </div>
                    <div class="border-y border-dashed border-slate-300 py-3 mb-6 space-y-1">
                        <div class="flex justify-between">
                            <span>Order:</span>
                            <span class="font-bold">#ORD-0831</span>
                        </div>
                    </div>
                    <!-- Item List -->
                    <div class="flex-1 space-y-4 mb-8">
                        <div class="flex flex-col gap-1">
                            <div class="flex justify-between font-bold">
                                <span class="flex-1">Garam Industri (50kg)</span>
                                <span class="w-20 text-right">325.000</span>
                            </div>
                            <div class="flex justify-between text-slate-500 italic text-[11px]">
                                <span>Qty: 5 Karung x 65.000</span>
                            </div>
                        </div>
                    </div>
                    <!-- Financial Totals -->
                    <div class="border-t border-dashed border-slate-300 pt-4 space-y-2">
                        <div class="flex justify-between text-lg font-bold border-t border-double border-slate-300 pt-3 mt-2">
                            <span>GRAND TOTAL</span>
                            <span class="text-blue-800">Rp 1.279.250</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Action -->
            <div class="p-6 bg-white flex flex-col sm:flex-row items-center justify-between gap-4 border-t border-slate-200">
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-tertiary">print_connect</span>
                    <div class="text-sm">
                        <p class="font-bold text-on-surface">Thermal Printer #1</p>
                        <p class="text-[10px] text-on-surface-variant font-medium">Ready to print</p>
                    </div>
                </div>
                <button class="w-full sm:w-auto px-10 py-4 bg-primary-gradient text-white rounded-full font-headline font-extrabold text-lg flex items-center justify-center gap-3 shadow-indigo active:scale-95 duration-150 group">
                    <span class="material-symbols-outlined group-hover:rotate-12 transition-transform">print</span>
                    CETAK STRUK
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
