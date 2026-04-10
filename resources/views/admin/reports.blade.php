@extends('layouts.app')

@section('title', 'Laporan Penjualan')

@section('content')
<!-- Header & Filter Section -->
<div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 mb-10">
    <div>
        <h1 class="text-3xl font-extrabold tracking-tight text-on-surface">Laporan Penjualan</h1>
        <p class="text-on-surface-variant mt-1 font-body">Analisis data performa bisnis secara real-time.</p>
    </div>
    <div class="flex flex-wrap items-center gap-4">
        <div class="bg-surface-container-high p-1 rounded-full flex">
            <button class="px-4 py-2 text-xs font-bold rounded-full bg-white shadow-sm text-primary">Daily</button>
            <button class="px-4 py-2 text-xs font-medium text-on-surface-variant hover:text-on-surface transition-colors">Weekly</button>
            <button class="px-4 py-2 text-xs font-medium text-on-surface-variant hover:text-on-surface transition-colors">Monthly</button>
        </div>
        <button class="flex items-center gap-2 px-5 py-2.5 bg-primary-gradient text-white rounded-lg font-semibold text-sm shadow-indigo hover:opacity-90 active:scale-95 transition-all">
            <span class="material-symbols-outlined !text-lg">download</span>
            Export CSV
        </button>
    </div>
</div>

<!-- Bento Grid Stats -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
    <!-- Total Orders Card -->
    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-indigo border border-transparent hover:border-outline-variant/15 transition-all">
        <div class="flex justify-between items-start mb-4">
            <div class="p-3 bg-blue-50 rounded-lg">
                <span class="material-symbols-outlined text-primary">shopping_basket</span>
            </div>
            <span class="text-tertiary text-xs font-bold bg-tertiary/10 px-2 py-1 rounded">+12.5%</span>
        </div>
        <h3 class="text-on-surface-variant text-sm font-medium tracking-tight">Total Orders</h3>
        <p class="text-3xl font-extrabold text-on-surface mt-1">1,284</p>
        <p class="text-xs text-slate-400 mt-2">vs 1,142 bulan lalu</p>
    </div>
    <!-- Gross Revenue Card -->
    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-indigo border border-transparent hover:border-outline-variant/15 transition-all">
        <div class="flex justify-between items-start mb-4">
            <div class="p-3 bg-blue-50 rounded-lg">
                <span class="material-symbols-outlined text-primary">payments</span>
            </div>
            <span class="text-tertiary text-xs font-bold bg-tertiary/10 px-2 py-1 rounded">+8.2%</span>
        </div>
        <h3 class="text-on-surface-variant text-sm font-medium tracking-tight">Gross Revenue</h3>
        <p class="text-3xl font-extrabold text-on-surface mt-1">Rp 482,5M</p>
        <p class="text-xs text-slate-400 mt-2">Target tercapai 92%</p>
    </div>
    <!-- Best Seller Card -->
    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-indigo border border-transparent hover:border-outline-variant/15 transition-all md:row-span-2">
        <div class="flex items-center gap-2 mb-6">
            <div class="p-2 bg-tertiary/10 rounded-lg">
                <span class="material-symbols-outlined text-tertiary">trending_up</span>
            </div>
            <h3 class="font-bold text-on-surface tracking-tight">Best Selling Products</h3>
        </div>
        <div class="space-y-6">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-lg bg-surface-container overflow-hidden flex items-center justify-center text-on-surface-variant">
                    <span class="material-symbols-outlined">image</span>
                </div>
                <div class="flex-grow">
                    <p class="text-sm font-bold text-on-surface line-clamp-1">Kopi Arabika Java 1kg</p>
                    <p class="text-xs text-on-surface-variant">420 Sold</p>
                </div>
                <div class="text-right">
                    <p class="text-xs font-bold text-primary">Rp 12,6jt</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-lg bg-surface-container overflow-hidden flex items-center justify-center text-on-surface-variant">
                    <span class="material-symbols-outlined">image</span>
                </div>
                <div class="flex-grow">
                    <p class="text-sm font-bold text-on-surface line-clamp-1">Kain Katun Premium</p>
                    <p class="text-xs text-on-surface-variant">385 Sold</p>
                </div>
                <div class="text-right">
                    <p class="text-xs font-bold text-primary">Rp 9,8jt</p>
                </div>
            </div>
        </div>
        <button class="w-full mt-8 py-3 text-sm font-bold text-primary hover:bg-primary/5 rounded-lg transition-colors border border-primary/20">
            View Full Inventory
        </button>
    </div>
    <!-- Average Order Value -->
    <div class="md:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-6">
        <div class="bg-surface-container-high/40 p-6 rounded-xl border border-outline-variant/15 flex items-center gap-4 shadow-indigo">
            <div class="w-2 h-12 bg-secondary rounded-full"></div>
            <div>
                <p class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Average Order Value</p>
                <p class="text-xl font-bold text-on-surface mt-1">Rp 3,75Jt</p>
            </div>
        </div>
        <div class="bg-surface-container-high/40 p-6 rounded-xl border border-outline-variant/15 flex items-center gap-4 shadow-indigo">
            <div class="w-2 h-12 bg-tertiary rounded-full"></div>
            <div>
                <p class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Active Distributors</p>
                <p class="text-xl font-bold text-on-surface mt-1">42 Teams</p>
            </div>
        </div>
    </div>
</div>

<!-- Recent Sales Table -->
<div class="bg-surface-container-lowest rounded-2xl shadow-indigo overflow-hidden border border-white/50">
    <div class="p-6 border-b border-surface-container flex justify-between items-center bg-white">
        <h2 class="text-lg font-bold text-on-surface">Recent Completed Sales</h2>
        <div class="relative">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant !text-lg">search</span>
            <input class="pl-10 pr-4 py-2 bg-surface-container-low border-none rounded-lg text-sm focus:ring-2 focus:ring-primary/20 w-64" placeholder="Search orders..." type="text">
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-surface-container-low">
                    <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Order ID</th>
                    <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Customer / Store</th>
                    <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider text-right">Total Amount</th>
                    <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Status</th>
                    <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider text-right">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-surface-container">
                <tr class="hover:bg-surface-container-low/50 transition-colors">
                    <td class="px-6 py-4 text-sm font-mono font-bold text-primary">#ORD-90211</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 bg-blue-100 rounded text-primary flex items-center justify-center font-bold text-xs">SM</div>
                            <div>
                                <p class="text-sm font-bold text-on-surface">Sinar Makmur Abadi</p>
                                <p class="text-xs text-on-surface-variant">Surabaya, ID</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm font-bold text-on-surface text-right">Rp 15.420.000</td>
                    <td class="px-6 py-4">
                        <span class="inline-flex items-center gap-1.5 py-1 px-2.5 rounded-full text-xs font-bold bg-tertiary/10 text-tertiary">
                            <span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                            Completed
                        </span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <button class="p-2 text-on-surface-variant hover:text-primary transition-colors">
                            <span class="material-symbols-outlined !text-lg">visibility</span>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
