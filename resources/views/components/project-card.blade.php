@props([
    'number',
    'title',
    'description',
    'category',
    'tone' => 'mint',
    'detail' => 'PROJECT DETAILS',
])

@php
    $toneClasses = [
        'mint' => 'bg-[#d9f2e7] text-[#183a38]',
        'dark' => 'bg-[#183a38] text-[#e4fff3]',
        'sand' => 'bg-[#ece8dc] text-[#3e493e]',
        'blue' => 'bg-[#e0ebec] text-[#253c42]',
    ];
@endphp

<article {{ $attributes->class(['group overflow-hidden rounded-sm border border-line bg-white']) }}>
    <div class="relative grid min-h-[220px] place-items-center overflow-hidden {{ $toneClasses[$tone] ?? $toneClasses['mint'] }} sm:min-h-[250px]" role="img" aria-label="Preview visual proyek belum tersedia">
        <div class="absolute size-52 rounded-full border border-current/15 transition duration-500 group-hover:scale-110 sm:size-60"></div>
        <div class="absolute size-36 rotate-45 border border-current/15 transition duration-500 group-hover:rotate-[60deg] sm:size-44"></div>
        <div class="relative z-10 flex flex-col items-center gap-3 text-center">
            <span class="font-display text-[9px] font-semibold tracking-[1.6px] opacity-70">{{ $category }}</span>
            <span class="rounded-full border border-current/20 px-3 py-1.5 font-display text-[8px] font-semibold tracking-[1.4px]">VISUAL PREVIEW</span>
            <span class="text-[10px] opacity-60">Belum tersedia</span>
        </div>
        <span class="absolute top-5 left-5 font-display text-[9px] font-semibold tracking-[1.4px] opacity-60">{{ $number }}</span>
        <span class="absolute right-5 bottom-5 font-display text-[8px] font-semibold tracking-[1.2px] opacity-60">NET FUSIONID</span>
    </div>
    <div class="p-5 sm:p-7">
        <div class="flex flex-wrap items-center justify-between gap-3">
            <p class="m-0 text-[8px] font-semibold tracking-[1.5px] text-[#38a982]">{{ $category }}</p>
            <span class="text-[8px] font-semibold tracking-[1px] text-[#8a9694]">{{ $detail }}</span>
        </div>
        <h3 class="mt-4 font-display text-[21px] font-semibold tracking-[-.7px] sm:text-2xl">{{ $title }}</h3>
        <p class="mt-2 mb-0 text-xs leading-[1.8] text-[#738078]">{{ $description }}</p>
    </div>
</article>
