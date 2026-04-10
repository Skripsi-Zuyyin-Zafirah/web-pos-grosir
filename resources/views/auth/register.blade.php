@extends('layouts.guest')

@section('title', 'Registrasi')

@section('content')
<div class="space-y-6">
    <div class="text-center">
        <h2 class="text-2xl font-bold text-on-surface mb-1">Registrasi Pembeli</h2>
        <p class="text-on-surface-variant text-sm">Bergabung dengan jaringan grosir digital kami.</p>
    </div>

    <form class="space-y-4" action="/register" method="POST">
        @csrf
        <div class="relative group">
            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant text-xl group-focus-within:text-primary transition-colors">person</span>
            <input class="w-full pl-12 pr-4 py-4 bg-surface-container-high border-none rounded-xl focus:ring-2 focus:ring-primary/20 text-sm" placeholder="Nama Lengkap" required type="text" name="name">
        </div>
        <div class="relative group">
            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant text-xl group-focus-within:text-primary transition-colors">mail</span>
            <input class="w-full pl-12 pr-4 py-4 bg-surface-container-high border-none rounded-xl focus:ring-2 focus:ring-primary/20 text-sm" placeholder="Alamat Email" required type="email" name="email">
        </div>
        <div class="relative group">
            <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant text-xl group-focus-within:text-primary transition-colors">lock</span>
            <input class="w-full pl-12 pr-12 py-4 bg-surface-container-high border-none rounded-xl focus:ring-2 focus:ring-primary/20 text-sm" placeholder="Kata Sandi" required type="password" name="password">
        </div>

        <div class="p-4 bg-blue-50/50 rounded-xl border border-blue-100 flex gap-3 items-start">
            <span class="material-symbols-outlined text-primary text-xl">info</span>
            <p class="text-[10px] text-on-surface-variant leading-relaxed">Dengan mendaftar, Anda menyetujui Syarat & Ketentuan sebagai pembeli institusional atau retail grosir.</p>
        </div>

        <button class="w-full py-4 bg-primary-gradient text-white font-bold rounded-xl shadow-indigo hover:opacity-90 active:scale-[0.98] transition-all" type="submit">
            Buat Akun
        </button>
    </form>

    <div class="pt-6 border-t border-slate-200 text-center">
        <p class="text-xs text-on-surface-variant mb-4">Sudah memiliki akun?</p>
        <a class="inline-flex items-center justify-center px-8 py-2.5 rounded-xl border border-primary text-primary font-bold text-xs hover:bg-primary/5 transition-all" href="{{ route('login') }}">
            Masuk Ke Akun
        </a>
    </div>
</div>
@endsection
