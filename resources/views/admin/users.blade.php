@extends('layouts.app')

@section('title', 'Kelola Pengguna')

@section('content')
<!-- Header Section -->
<div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
    <div>
        <h1 class="text-3xl font-extrabold tracking-tight font-headline text-on-surface mb-2">Kelola Pengguna</h1>
        <p class="text-on-surface-variant max-w-md">Manage institutional access, administrative roles, and customer registry for the Toko Jasa Grosir platform.</p>
    </div>
    <button class="bg-primary-gradient text-white px-6 py-3 rounded-xl font-semibold flex items-center gap-2 shadow-indigo hover:opacity-90 active:scale-[0.98] transition-all">
        <span class="material-symbols-outlined">person_add</span>
        Add User
    </button>
</div>

<!-- Bento Grid Stats -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-indigo">
        <p class="text-xs font-bold text-on-surface-variant uppercase tracking-widest mb-1">Total Users</p>
        <div class="flex items-baseline gap-2">
            <span class="text-3xl font-extrabold text-primary font-headline">1,284</span>
            <span class="text-xs text-tertiary font-semibold flex items-center">+12% <span class="material-symbols-outlined text-[14px]">trending_up</span></span>
        </div>
    </div>
    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-indigo border-l-4 border-secondary">
        <p class="text-xs font-bold text-on-surface-variant uppercase tracking-widest mb-1">Active Cashiers</p>
        <div class="flex items-baseline gap-2">
            <span class="text-3xl font-extrabold text-on-surface font-headline">24</span>
            <span class="text-xs text-on-surface-variant">Across 5 branches</span>
        </div>
    </div>
    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-indigo">
        <p class="text-xs font-bold text-on-surface-variant uppercase tracking-widest mb-1">System Status</p>
        <div class="flex items-center gap-2">
            <div class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></div>
            <span class="text-sm font-semibold text-on-surface">Secure & Optimized</span>
        </div>
    </div>
</div>

<!-- Main Data Table Container -->
<div class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-indigo border border-white/50">
    <div class="p-6 border-b border-surface-container">
        <div class="flex items-center justify-between">
            <h3 class="font-bold text-lg">Master User Registry</h3>
            <div class="flex items-center gap-3">
                <button class="flex items-center gap-2 text-sm font-medium px-3 py-1.5 rounded-lg border border-outline-variant/30 hover:bg-surface-container-low transition-colors">
                    <span class="material-symbols-outlined text-sm">filter_list</span>
                    Filter
                </button>
                <button class="flex items-center gap-2 text-sm font-medium px-3 py-1.5 rounded-lg border border-outline-variant/30 hover:bg-surface-container-low transition-colors text-primary">
                    <span class="material-symbols-outlined text-sm">download</span>
                    Export CSV
                </button>
            </div>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-surface-container-low/50">
                    <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Username</th>
                    <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Full Name</th>
                    <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Role</th>
                    <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider">Status</th>
                    <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-wider text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-surface-container">
                <!-- Sample Rows -->
                <tr class="hover:bg-surface-container-low/30 transition-colors">
                    <td class="px-6 py-5 font-medium text-primary">@budisudaryo</td>
                    <td class="px-6 py-5">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-primary-container text-white flex items-center justify-center text-xs font-bold">BS</div>
                            <span class="text-on-surface font-medium">Budi Sudaryo</span>
                        </div>
                    </td>
                    <td class="px-6 py-5">
                        <span class="px-3 py-1 bg-secondary-container/10 text-secondary text-xs font-bold rounded-full border border-secondary/20">CASHIER</span>
                    </td>
                    <td class="px-6 py-5">
                        <div class="flex items-center gap-2 text-tertiary font-semibold text-sm">
                            <span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                            Active
                        </div>
                    </td>
                    <td class="px-6 py-5 text-right">
                        <div class="flex justify-end gap-2">
                            <button class="p-2 text-on-surface-variant hover:text-primary hover:bg-primary/10 rounded-lg transition-all" title="Edit User">
                                <span class="material-symbols-outlined text-[20px]">edit</span>
                            </button>
                            <button class="p-2 text-on-surface-variant hover:text-error hover:bg-error/10 rounded-lg transition-all" title="Deactivate">
                                <span class="material-symbols-outlined text-[20px]">person_off</span>
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- More rows would go here -->
            </tbody>
        </table>
    </div>
    <!-- Table Pagination -->
    <div class="p-4 bg-surface-container-low/20 border-t border-surface-container flex items-center justify-between">
        <span class="text-xs text-on-surface-variant font-medium">Showing entries</span>
        <div class="flex items-center gap-1">
            <button class="p-2 rounded hover:bg-surface-container transition-colors disabled:opacity-30" disabled>
                <span class="material-symbols-outlined text-sm">chevron_left</span>
            </button>
            <button class="w-8 h-8 rounded bg-primary text-white text-xs font-bold">1</button>
            <button class="p-2 rounded hover:bg-surface-container transition-colors">
                <span class="material-symbols-outlined text-sm">chevron_right</span>
            </button>
        </div>
    </div>
</div>
@endsection
