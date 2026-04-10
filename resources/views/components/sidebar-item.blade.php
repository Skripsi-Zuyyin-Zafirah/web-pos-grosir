@props(['icon', 'label', 'route'])

@php
    $isActive = request()->routeIs($route);
    $activeClasses = 'bg-blue-50 text-primary font-semibold';
    $inactiveClasses = 'text-on-surface-variant hover:bg-slate-200/50 transition-all duration-200';
@endphp

<a href="{{ route($route) }}" 
   {{ $attributes->merge(['class' => 'flex items-center gap-3 px-4 py-3 rounded-lg ' . ($isActive ? $activeClasses : $inactiveClasses)]) }}>
    <span class="material-symbols-outlined">{{ $icon }}</span>
    <span>{{ $label }}</span>
</a>
