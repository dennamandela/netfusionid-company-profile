@props(['number', 'label'])

<div {{ $attributes->class(['flex items-center gap-3 text-[7px] font-semibold tracking-[1.25px] text-[#8a9694] sm:gap-5 sm:text-[8px]']) }}>
    <span>{{ $number }} / {{ $label }}</span><span class="h-px flex-1 bg-line"></span>
</div>
