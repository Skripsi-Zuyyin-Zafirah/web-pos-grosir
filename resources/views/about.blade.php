@extends('layouts.app')

@section('title', 'Tentang Sistem')

@section('content')
<!-- Hero Section -->
<section class="grid grid-cols-1 md:grid-cols-12 gap-8 items-center mb-16">
    <div class="md:col-span-7 space-y-6">
        <div class="inline-flex items-center gap-2 bg-primary/10 text-primary px-4 py-1.5 rounded-full">
            <span class="material-symbols-outlined text-sm">verified</span>
            <span class="text-[10px] font-bold uppercase tracking-wider">Official System Profile</span>
        </div>
        <h1 class="text-5xl font-extrabold font-headline tracking-tighter text-on-surface leading-tight">
            Toko Jasa Grosir <br>
            <span class="text-primary">Aceh Timur</span>
        </h1>
        <p class="text-lg text-on-surface-variant max-w-xl leading-relaxed">
            Pusat distribusi grosir terkemuka yang melayani kebutuhan logistik dan supply chain di wilayah Aceh Timur. Kami mengintegrasikan teknologi manajemen modern untuk memastikan efisiensi dan keadilan bagi seluruh mitra bisnis.
        </p>
        <div class="flex gap-4">
            <button class="bg-primary-gradient text-white px-8 py-3 rounded-xl font-semibold shadow-indigo active:scale-95 transition-transform">
                Hubungi Kami
            </button>
            <button class="px-8 py-3 rounded-xl border-2 border-outline-variant/30 text-primary font-semibold hover:bg-surface-container-low transition-colors">
                Lihat Katalog
            </button>
        </div>
    </div>
    <div class="md:col-span-5 relative">
        <div class="aspect-square rounded-[3rem] overflow-hidden rotate-3 shadow-2xl shadow-indigo-200 bg-surface-container flex items-center justify-center text-slate-300">
            <span class="material-symbols-outlined text-9xl">warehouse</span>
        </div>
        <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-3xl shadow-xl flex items-center gap-4">
            <div class="h-12 w-12 rounded-full bg-tertiary/10 flex items-center justify-center">
                <span class="material-symbols-outlined text-tertiary">package_2</span>
            </div>
            <div>
                <p class="text-2xl font-bold font-headline">5,000+</p>
                <p class="text-[10px] text-on-surface-variant font-medium uppercase tracking-tight">Orders Monthly</p>
            </div>
        </div>
    </div>
</section>

<!-- Algorithm Explanation -->
<section class="space-y-8 mb-16">
    <div class="text-center space-y-2">
        <h2 class="text-3xl font-bold font-headline tracking-tight">Keadilan Beban Kerja Otomatis</h2>
        <p class="text-on-surface-variant">Bagaimana algoritma kami mengelola distribusi secara cerdas.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Priority Queue -->
        <div class="bg-surface-container-lowest p-8 rounded-3xl border border-slate-100 shadow-indigo transition-all duration-300">
            <div class="h-14 w-14 rounded-2xl bg-primary/5 flex items-center justify-center mb-6">
                <span class="material-symbols-outlined text-primary text-3xl">priority_high</span>
            </div>
            <h3 class="text-xl font-bold font-headline mb-3 text-on-surface">Priority Queue</h3>
            <p class="text-sm text-on-surface-variant leading-relaxed mb-6">
                Sistem antrian yang memastikan pesanan mendesak atau pelanggan prioritas mendapatkan penanganan lebih awal.
            </p>
            <ul class="space-y-3">
                <li class="flex items-center gap-3 text-xs font-semibold text-slate-600">
                    <span class="material-symbols-outlined text-primary text-sm">check_circle</span>
                    Efisiensi Waktu Tunggu
                </li>
            </ul>
        </div>

        <!-- Min-Heap -->
        <div class="bg-surface-container-lowest p-8 rounded-3xl border border-slate-100 shadow-indigo transition-all duration-300">
            <div class="h-14 w-14 rounded-2xl bg-tertiary/5 flex items-center justify-center mb-6">
                <span class="material-symbols-outlined text-tertiary text-3xl">account_tree</span>
            </div>
            <h3 class="text-xl font-bold font-headline mb-3 text-on-surface">Min-Heap Optimization</h3>
            <p class="text-sm text-on-surface-variant leading-relaxed mb-6">
                Struktur data yang digunakan untuk mengambil beban kerja minimum secara instan untuk alokasi kurir.
            </p>
            <ul class="space-y-3">
                <li class="flex items-center gap-3 text-xs font-semibold text-slate-600">
                    <span class="material-symbols-outlined text-tertiary text-sm">check_circle</span>
                    Alokasi Tugas Tercepat
                </li>
            </ul>
        </div>

        <!-- SJF Algorithm -->
        <div class="bg-surface-container-lowest p-8 rounded-3xl border border-slate-100 shadow-indigo transition-all duration-300">
            <div class="h-14 w-14 rounded-2xl bg-secondary/5 flex items-center justify-center mb-6">
                <span class="material-symbols-outlined text-secondary text-3xl">speed</span>
            </div>
            <h3 class="text-xl font-bold font-headline mb-3 text-on-surface">Shortest Job First</h3>
            <p class="text-sm text-on-surface-variant leading-relaxed mb-6">
                Strategi penjadwalan yang memprioritaskan tugas-tugas kecil untuk diselesaikan terlebih dahulu.
            </p>
            <ul class="space-y-3">
                <li class="flex items-center gap-3 text-xs font-semibold text-slate-600">
                    <span class="material-symbols-outlined text-secondary text-sm">check_circle</span>
                    Meminimalisir Antrian
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Footer Details -->
<footer class="pt-12 border-t border-slate-200 grid grid-cols-1 md:grid-cols-3 gap-8">
    <div class="space-y-4">
        <h4 class="text-lg font-bold font-headline text-blue-800">Toko Jasa Grosir</h4>
        <p class="text-xs text-on-surface-variant leading-relaxed">
            Memberikan solusi grosir terbaik untuk Aceh Timur dengan komitmen pada kecepatan, akurasi, dan integritas sistem.
        </p>
    </div>
    <div class="space-y-2">
        <h4 class="text-sm font-bold uppercase tracking-widest text-on-surface">Lokasi</h4>
        <p class="text-xs text-on-surface-variant">Idi Rayeuk, Aceh Timur, Indonesia</p>
    </div>
</footer>
@endsection
