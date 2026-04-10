@extends('layouts.app')

@section('title', 'Pemesanan Digital')

@section('content')
<!-- Header Section -->
<div class="mb-8 flex flex-col md:flex-row md:items-end justify-between gap-4">
    <div>
        <h1 class="text-3xl font-extrabold tracking-tight text-on-surface mb-2 font-headline">Digital Ordering</h1>
        <p class="text-on-surface-variant body-md max-w-md">Manage your inventory orders and submit them to the fulfillment priority queue.</p>
    </div>
    <div class="flex gap-2 p-1 bg-surface-container-low rounded-xl border border-outline-variant/10">
        <button class="px-4 py-2 text-xs font-bold rounded-lg bg-primary text-white shadow-sm transition-all">All Items</button>
        <button class="px-4 py-2 text-xs font-medium text-on-surface-variant hover:bg-white/50 rounded-lg transition-all">Jajanan</button>
    </div>
</div>

<!-- Dashboard Layout: Bento Grid -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
    <!-- Left: Product Selection -->
    <div class="lg:col-span-8 space-y-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <!-- Product Card 1 -->
            <div class="bg-surface-container-lowest p-4 rounded-2xl border border-outline-variant/10 hover:ring-2 hover:ring-primary/10 transition-all flex gap-4 group shadow-indigo">
                <div class="w-24 h-24 rounded-xl overflow-hidden flex-shrink-0 bg-surface-container flex items-center justify-center">
                    <span class="material-symbols-outlined text-4xl text-slate-300 group-hover:scale-110 transition-transform">inventory_2</span>
                </div>
                <div class="flex flex-col justify-between flex-1">
                    <div>
                        <span class="text-[8px] font-bold uppercase tracking-wider text-tertiary bg-tertiary/10 px-2 py-0.5 rounded-full mb-1 inline-block">Jajanan</span>
                        <h3 class="font-bold text-on-surface font-headline text-sm">Krupuk Kaleng Putih</h3>
                        <p class="text-[10px] text-on-surface-variant">Pack Isi 20 Pcs</p>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="font-bold text-primary text-sm">Rp 45.000</span>
                        <button class="p-2 bg-primary-container text-white rounded-lg active:scale-95 transition-all">
                            <span class="material-symbols-outlined text-xs">add_shopping_cart</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- More cards can be added -->
        </div>

        <!-- Cart Table -->
        <div class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-indigo border border-white/50">
            <div class="p-6 border-b border-slate-100 flex justify-between items-center">
                <h2 class="text-xl font-bold text-on-surface font-headline">Ordering Cart</h2>
                <span class="text-[10px] font-bold text-secondary bg-secondary/10 px-3 py-1 rounded-full uppercase">3 Items Selected</span>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-surface-container-low">
                        <tr>
                            <th class="px-6 py-4 text-[10px] font-bold uppercase tracking-wider text-on-surface-variant">Product</th>
                            <th class="px-6 py-4 text-[10px] font-bold uppercase tracking-wider text-on-surface-variant">Price</th>
                            <th class="px-6 py-4 text-[10px] font-bold uppercase tracking-wider text-on-surface-variant text-center">Qty</th>
                            <th class="px-6 py-4 text-[10px] font-bold uppercase tracking-wider text-on-surface-variant text-right">Total</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        <tr class="hover:bg-slate-50 transition-colors">
                            <td class="px-6 py-5">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded bg-surface-container flex items-center justify-center">
                                        <span class="material-symbols-outlined text-sm text-on-surface-variant">inventory_2</span>
                                    </div>
                                    <p class="font-bold text-xs text-on-surface">Krupuk Kaleng Putih</p>
                                </div>
                            </td>
                            <td class="px-6 py-5 text-xs font-medium">Rp 45.000</td>
                            <td class="px-6 py-5">
                                <div class="flex items-center justify-center gap-3">
                                    <button class="w-6 h-6 rounded bg-surface-container-high flex items-center justify-center active:scale-90 transition-all">
                                        <span class="material-symbols-outlined text-[10px]">remove</span>
                                    </button>
                                    <span class="text-xs font-bold">2</span>
                                    <button class="w-6 h-6 rounded bg-surface-container-high flex items-center justify-center active:scale-90 transition-all">
                                        <span class="material-symbols-outlined text-[10px]">add</span>
                                    </button>
                                </div>
                            </td>
                            <td class="px-6 py-5 text-right font-bold text-xs text-primary">Rp 90.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Right: Summary Panel -->
    <div class="lg:col-span-4 sticky top-24">
        <div class="bg-white rounded-2xl p-6 shadow-indigo border border-white/50 space-y-6">
            <h2 class="text-xl font-bold text-on-surface font-headline">Order Summary</h2>
            <div class="space-y-3">
                <div class="flex justify-between text-xs">
                    <span class="text-on-surface-variant">Subtotal</span>
                    <span class="font-medium text-on-surface">Rp 1.490.000</span>
                </div>
                <div class="flex justify-between text-xs">
                    <span class="text-on-surface-variant">Tax (11%)</span>
                    <span class="font-medium text-on-surface">Rp 163.900</span>
                </div>
            </div>
            <div class="pt-6 border-t border-slate-100">
                <div class="flex justify-between items-end mb-6">
                    <div>
                        <p class="text-[10px] font-bold uppercase text-on-surface-variant/60 tracking-widest">Grand Total</p>
                        <p class="text-2xl font-extrabold text-primary font-headline tracking-tight">Rp 1.653.900</p>
                    </div>
                    <span class="text-[8px] font-bold text-white bg-primary px-2 py-1 rounded uppercase">VIP QUEUE</span>
                </div>
                <button class="w-full py-4 bg-primary-gradient text-white rounded-xl font-bold tracking-tight shadow-indigo active:scale-95 transition-all flex items-center justify-center gap-2">
                    <span>Confirm Order</span>
                    <span class="material-symbols-outlined text-sm">send</span>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
