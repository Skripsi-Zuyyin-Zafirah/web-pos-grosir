@extends('layouts.app')

@section('title', 'Wholesale Admin - Produk & Stok')

@section('content')
<!-- Page Header -->
<header class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-8">
    <div>
        <h1 class="text-3xl font-extrabold text-on-surface mb-2">Manajemen Produk</h1>
        <p class="text-on-surface-variant max-w-xl">Kelola inventaris grosir Anda dengan presisi. Pantau stok, perbarui harga, dan atur katalog produk dalam satu tampilan efisien.</p>
    </div>
    <div class="flex flex-wrap gap-3">
        <button class="flex items-center gap-2 px-5 py-2.5 bg-surface-container-lowest text-primary border border-outline-variant/30 rounded-lg font-bold text-sm hover:bg-surface-container-low transition-all">
            <span class="material-symbols-outlined text-lg">file_download</span>
            Export CSV
        </button>
        <button class="flex items-center gap-2 px-5 py-2.5 bg-secondary-container text-on-secondary-container rounded-lg font-bold text-sm hover:opacity-90 transition-all">
            <span class="material-symbols-outlined text-lg">update</span>
            Bulk Update Stok
        </button>
        <button class="flex items-center gap-2 px-6 py-2.5 bg-primary-gradient text-white rounded-lg font-bold text-sm shadow-indigo hover:opacity-90 transition-all">
            <span class="material-symbols-outlined text-lg">add_box</span>
            Tambah Produk
        </button>
    </div>
</header>

<!-- Quick Stats Bento Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
    <div class="p-6 bg-surface-container-lowest rounded-xl flex items-center gap-4 shadow-indigo">
        <div class="w-12 h-12 rounded-full bg-blue-50 flex items-center justify-center text-primary">
            <span class="material-symbols-outlined text-2xl">inventory</span>
        </div>
        <div>
            <p class="text-xs font-bold text-on-surface-variant uppercase tracking-widest">Total SKU</p>
            <h3 class="text-2xl font-black text-on-surface">1,284</h3>
        </div>
    </div>
    <div class="p-6 bg-surface-container-lowest rounded-xl flex items-center gap-4 shadow-indigo">
        <div class="w-12 h-12 rounded-full bg-red-50 flex items-center justify-center text-error">
            <span class="material-symbols-outlined text-2xl">warning</span>
        </div>
        <div>
            <p class="text-xs font-bold text-on-surface-variant uppercase tracking-widest">Stok Menipis</p>
            <h3 class="text-2xl font-black text-on-surface">12</h3>
        </div>
    </div>
    <div class="p-6 bg-surface-container-lowest rounded-xl flex items-center gap-4 shadow-indigo">
        <div class="w-12 h-12 rounded-full bg-green-50 flex items-center justify-center text-tertiary">
            <span class="material-symbols-outlined text-2xl">trending_up</span>
        </div>
        <div>
            <p class="text-xs font-bold text-on-surface-variant uppercase tracking-widest">Penjualan (30H)</p>
            <h3 class="text-2xl font-black text-on-surface">+18.2%</h3>
        </div>
    </div>
    <div class="p-6 bg-surface-container-lowest rounded-xl flex items-center gap-4 shadow-indigo">
        <div class="w-12 h-12 rounded-full bg-indigo-50 flex items-center justify-center text-secondary">
            <span class="material-symbols-outlined text-2xl">category</span>
        </div>
        <div>
            <p class="text-xs font-bold text-on-surface-variant uppercase tracking-widest">Kategori Aktif</p>
            <h3 class="text-2xl font-black text-on-surface">24</h3>
        </div>
    </div>
</div>

<!-- Table Section -->
<div class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-indigo border border-white/50">
    <!-- Filters Bar -->
    <div class="p-6 bg-surface-container-low/50 flex flex-wrap items-center justify-between gap-4">
        <div class="flex flex-wrap items-center gap-3">
            <div class="relative">
                <span class="absolute left-3 top-1/2 -translate-y-1/2 material-symbols-outlined text-on-surface-variant text-sm">filter_list</span>
                <select class="pl-10 pr-8 py-2 bg-white border border-outline-variant/30 rounded-lg text-sm font-semibold text-on-surface-variant appearance-none focus:ring-2 focus:ring-primary">
                    <option>Semua Kategori</option>
                    <option>Sembako</option>
                    <option>Minuman</option>
                    <option>Alat Tulis</option>
                </select>
            </div>
        </div>
        <div class="flex items-center gap-2">
            <p class="text-sm text-on-surface-variant mr-2">Menampilkan 1-10 dari 1,284 produk</p>
        </div>
    </div>

    <!-- Product Table -->
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-surface-container-low">
                    <th class="px-6 py-4 text-[11px] font-black uppercase tracking-[0.1em] text-on-surface-variant w-12">
                        <input class="rounded-sm border-outline-variant text-primary focus:ring-primary" type="checkbox">
                    </th>
                    <th class="px-6 py-4 text-[11px] font-black uppercase tracking-[0.1em] text-on-surface-variant">ID Produk</th>
                    <th class="px-6 py-4 text-[11px] font-black uppercase tracking-[0.1em] text-on-surface-variant">Nama Produk</th>
                    <th class="px-6 py-4 text-[11px] font-black uppercase tracking-[0.1em] text-on-surface-variant">Kategori</th>
                    <th class="px-6 py-4 text-[11px] font-black uppercase tracking-[0.1em] text-on-surface-variant text-right">Harga (IDR)</th>
                    <th class="px-6 py-4 text-[11px] font-black uppercase tracking-[0.1em] text-on-surface-variant text-right">Stok</th>
                    <th class="px-6 py-4 text-[11px] font-black uppercase tracking-[0.1em] text-on-surface-variant">Status</th>
                    <th class="px-6 py-4 text-[11px] font-black uppercase tracking-[0.1em] text-on-surface-variant text-right">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-outline-variant/10">
                <tr class="hover:bg-surface-container-low/30 transition-colors group">
                    <td class="px-6 py-4"><input class="rounded-sm border-outline-variant text-primary focus:ring-primary" type="checkbox"></td>
                    <td class="px-6 py-4 font-mono text-xs text-on-surface-variant">SKU-00821</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg bg-surface-container-high overflow-hidden flex items-center justify-center text-on-surface-variant">
                                <span class="material-symbols-outlined">image</span>
                            </div>
                            <span class="font-bold text-on-surface">Kopi Arabika Toraja 500g</span>
                        </div>
                    </td>
                    <td class="px-6 py-4"><span class="px-2 py-1 bg-surface-container-high rounded text-xs font-semibold text-on-surface-variant">Minuman</span></td>
                    <td class="px-6 py-4 text-right font-bold">125.000</td>
                    <td class="px-6 py-4 text-right">
                        <span class="font-mono font-bold">42</span>
                        <span class="text-[10px] text-on-surface-variant ml-1">CTN</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="flex items-center gap-1.5 text-tertiary text-xs font-bold">
                            <span class="w-2 h-2 rounded-full bg-tertiary"></span> In Stock
                        </span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex items-center justify-end gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                            <button class="p-2 text-on-surface-variant hover:text-primary hover:bg-primary/5 rounded-lg transition-colors"><span class="material-symbols-outlined text-lg">edit</span></button>
                            <button class="p-2 text-on-surface-variant hover:text-error hover:bg-error/5 rounded-lg transition-colors"><span class="material-symbols-outlined text-lg">delete</span></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Insight Banner -->
<div class="mt-8 p-6 bg-primary-fixed border border-primary/10 rounded-2xl flex flex-col md:flex-row items-center justify-between gap-6 shadow-indigo">
    <div class="flex items-center gap-4">
        <div class="w-14 h-14 bg-white rounded-full flex items-center justify-center text-primary shadow-sm">
            <span class="material-symbols-outlined text-3xl">batch_prediction</span>
        </div>
        <div>
            <h4 class="text-lg font-black text-on-primary-fixed leading-tight">Insight Inventaris</h4>
            <p class="text-on-primary-fixed-variant text-sm">Ada 5 produk dengan perputaran cepat yang stoknya akan habis dalam 3 hari.</p>
        </div>
    </div>
    <button class="whitespace-nowrap px-6 py-3 bg-primary text-white rounded-xl font-bold hover:bg-primary/90 transition-colors shadow-lg">Lihat Rekomendasi Restock</button>
</div>
@endsection
