@extends('layouts.app')

@section('title', 'Katalog Grosir')

@section('content')
<!-- Header Section -->
<header class="mb-10">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
            <h1 class="text-4xl font-extrabold tracking-tight text-on-surface mb-2 font-headline">Katalog Grosir</h1>
            <p class="text-on-surface-variant max-w-xl">Penuhi stok toko Anda dengan harga terbaik. Pembaruan stok dilakukan secara real-time setiap 5 menit.</p>
        </div>
        <div class="flex flex-wrap gap-2">
            <button class="px-5 py-2.5 rounded-full bg-primary text-white font-semibold text-sm flex items-center gap-2 shadow-indigo">
                Semua Produk
            </button>
            <button class="px-5 py-2.5 rounded-full bg-surface-container-low text-on-surface-variant font-semibold text-sm hover:bg-surface-container-high transition-colors flex items-center gap-2 border border-outline-variant/10">
                <span class="material-symbols-outlined text-[18px]">cookie</span>
                Jajanan
            </button>
            <button class="px-5 py-2.5 rounded-full bg-surface-container-low text-on-surface-variant font-semibold text-sm hover:bg-surface-container-high transition-colors flex items-center gap-2 border border-outline-variant/10">
                <span class="material-symbols-outlined text-[18px]">kitchen</span>
                Sembako
            </button>
        </div>
    </div>
</header>

<!-- Product Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
    <!-- Product Card 1 -->
    <div class="bg-surface-container-lowest rounded-2xl overflow-hidden group hover:ring-2 hover:ring-primary/10 transition-all shadow-indigo border border-white/50">
        <div class="relative aspect-square overflow-hidden bg-surface-container-low">
            <div class="w-full h-full flex items-center justify-center text-on-surface-variant opacity-20 group-hover:scale-110 transition-transform duration-500">
                <span class="material-symbols-outlined text-6xl">inventory_2</span>
            </div>
            <div class="absolute top-3 right-3">
                <span class="bg-tertiary text-white px-3 py-1 rounded-full text-[10px] font-bold shadow-lg">Stok: 124</span>
            </div>
        </div>
        <div class="p-5">
            <span class="text-[10px] font-bold uppercase tracking-wider text-primary mb-1 block">Jajanan</span>
            <h3 class="font-bold text-lg text-on-surface mb-1 font-headline">Keripik Kentang Balado 200g</h3>
            <p class="text-on-surface-variant text-sm mb-4">Grosir per dus (Isi 24 bungkus)</p>
            <div class="flex items-center justify-between mt-auto">
                <div class="flex flex-col">
                    <span class="text-xs text-on-surface-variant line-through">Rp 245.000</span>
                    <span class="text-xl font-black text-on-surface">Rp 210.000</span>
                </div>
                <button class="bg-primary-gradient p-3 rounded-xl text-white hover:opacity-90 transition-all shadow-indigo active:scale-90">
                    <span class="material-symbols-outlined">add_shopping_cart</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Product Card 2 -->
    <div class="bg-surface-container-lowest rounded-2xl overflow-hidden group hover:ring-2 hover:ring-primary/10 transition-all shadow-indigo border border-white/50">
        <div class="relative aspect-square overflow-hidden bg-surface-container-low">
            <div class="w-full h-full flex items-center justify-center text-on-surface-variant opacity-20 group-hover:scale-110 transition-transform duration-500">
                <span class="material-symbols-outlined text-6xl">oil_barrel</span>
            </div>
            <div class="absolute top-3 right-3">
                <span class="bg-tertiary text-white px-3 py-1 rounded-full text-[10px] font-bold shadow-lg">Stok: 42</span>
            </div>
        </div>
        <div class="p-5">
            <span class="text-[10px] font-bold uppercase tracking-wider text-primary mb-1 block">Sembako</span>
            <h3 class="font-bold text-lg text-on-surface mb-1 font-headline">Minyak Goreng Sawit 2L</h3>
            <p class="text-on-surface-variant text-sm mb-4">Karton isi 6 botol</p>
            <div class="flex items-center justify-between mt-auto">
                <div class="flex flex-col">
                    <span class="text-xs text-on-surface-variant opacity-0">.</span>
                    <span class="text-xl font-black text-on-surface">Rp 198.500</span>
                </div>
                <button class="bg-primary-gradient p-3 rounded-xl text-white hover:opacity-90 transition-all shadow-indigo active:scale-90">
                    <span class="material-symbols-outlined">add_shopping_cart</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Floating Cart Button -->
<div class="fixed bottom-10 right-10 z-50">
    <button class="bg-primary-gradient text-white p-4 rounded-full shadow-2xl flex items-center gap-3 hover:scale-105 active:scale-95 transition-all group">
        <span class="material-symbols-outlined text-2xl">shopping_bag</span>
        <div class="flex flex-col items-start pr-2">
            <span class="text-[8px] font-bold uppercase">Keranjang</span>
            <span class="font-bold text-sm">3 Item - Rp 1.250k</span>
        </div>
    </button>
</div>
@endsection
