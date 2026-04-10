@extends('layouts.guest')

@section('title', 'Login')

@section('content')
    <div class="space-y-6">
        <div class="text-center">
            <h2 class="text-2xl font-bold text-on-surface mb-1">Selamat Datang</h2>
            <p class="text-on-surface-variant text-sm">Silakan masuk untuk melanjutkan operasional Anda.</p>
        </div>

        @if(session('success'))
            <div style="color: green; margin-bottom: 10px;">
                {{ session('success') }}
            </div>
        @endif

        <form class="space-y-6" action="/login" method="POST">
            @csrf
            <div class="space-y-2">
                <label class="text-[10px] font-bold uppercase tracking-widest text-on-surface-variant">Pilih Akses</label>
                <div class="grid grid-cols-3 gap-2 p-1 bg-surface-container-high rounded-xl">
                    <label class="cursor-pointer">
                        <input checked class="hidden peer" name="role" type="radio" value="pembeli">
                        <div
                            class="text-center py-2 rounded-lg text-xs font-bold transition-all peer-checked:bg-white peer-checked:text-primary peer-checked:shadow-sm text-on-surface-variant hover:bg-white/50">
                            Pembeli
                        </div>
                    </label>
                    <label class="cursor-pointer">
                        <input class="hidden peer" name="role" type="radio" value="kasir">
                        <div
                            class="text-center py-2 rounded-lg text-xs font-bold transition-all peer-checked:bg-white peer-checked:text-primary peer-checked:shadow-sm text-on-surface-variant hover:bg-white/50">
                            Kasir
                        </div>
                    </label>
                    <label class="cursor-pointer">
                        <input class="hidden peer" name="role" type="radio" value="admin">
                        <div
                            class="text-center py-2 rounded-lg text-xs font-bold transition-all peer-checked:bg-white peer-checked:text-primary peer-checked:shadow-sm text-on-surface-variant hover:bg-white/50">
                            Admin
                        </div>
                    </label>
                </div>
            </div>

            <div class="space-y-4">
                <div class="relative group">
                    <span
                        class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant text-xl group-focus-within:text-primary transition-colors">person</span>
                    <input
                        class="w-full pl-12 pr-4 py-4 bg-surface-container-high border-none rounded-xl focus:ring-2 focus:ring-primary/20 text-sm"
                        placeholder="Username atau Email" required type="text">
                </div>
                <div class="relative group">
                    <span
                        class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant text-xl group-focus-within:text-primary transition-colors">lock</span>
                    <input
                        class="w-full pl-12 pr-12 py-4 bg-surface-container-high border-none rounded-xl focus:ring-2 focus:ring-primary/20 text-sm"
                        placeholder="Kata Sandi" required type="password">
                </div>
            </div>

            <div class="flex items-center justify-between">
                <label class="flex items-center gap-2 cursor-pointer">
                    <input class="w-4 h-4 rounded text-primary border-outline focus:ring-primary/20" type="checkbox">
                    <span class="text-xs font-medium text-on-surface-variant">Ingat saya</span>
                </label>
                <a class="text-xs font-bold text-primary hover:underline transition-all" href="#">Lupa Sandi?</a>
            </div>

            <button
                class="w-full py-4 bg-primary-gradient text-white font-bold rounded-xl shadow-indigo hover:opacity-90 active:scale-[0.98] transition-all"
                type="submit">
                Masuk Sekarang
            </button>
        </form>

        <div class="pt-6 border-t border-slate-200 text-center">
            <p class="text-xs text-on-surface-variant mb-4">Belum memiliki akun grosir?</p>
            <a class="inline-flex items-center justify-center px-8 py-2.5 rounded-xl border border-primary text-primary font-bold text-xs hover:bg-primary/5 transition-all"
                href="{{ route('register') }}">
                Daftar Akun Pembeli
            </a>
        </div>
    </div>
@endsection