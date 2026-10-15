<header class="relative z-20 flex h-[70px] items-center border-b border-ink/10 sm:h-[76px] lg:h-[88px]">
    <div class="mx-auto flex w-[calc(100%-40px)] max-w-[1280px] items-center justify-between sm:w-[calc(100%-56px)] lg:w-[calc(100%-112px)]">
        <a class="flex items-center gap-[11px] font-display text-[15px] font-bold tracking-[-.7px] sm:text-base" href="{{ route('home') }}" aria-label="Net FusionID, ke beranda">
            <span class="brand-mark" aria-hidden="true"><i></i><i></i><i></i><i></i></span><span>net fusion<span class="ml-0.5 text-[#36aa86]">ID</span></span>
        </a>
        <button class="menu-toggle flex size-[42px] flex-col items-center justify-center gap-[5px] rounded-full border border-[#d6dfda] bg-transparent sm:size-11 lg:hidden" type="button" aria-expanded="false" aria-controls="primary-nav" aria-label="Buka navigasi"><span></span><span></span></button>
        <nav id="primary-nav" class="nav-links hidden items-center gap-5 text-xs font-semibold text-[#5c686e] lg:flex lg:gap-[30px]" aria-label="Navigasi utama">
            @foreach ([['home', 'Beranda'], ['about', 'Tentang'], ['services', 'Layanan'], ['portfolio', 'Portofolio'], ['contact', 'Kontak']] as [$routeName, $label])
                <a href="{{ route($routeName) }}" @if (request()->routeIs($routeName)) aria-current="page" @endif class="rounded-sm py-2 transition-colors hover:text-[#229875] {{ request()->routeIs($routeName) ? 'font-bold text-[#229875]' : '' }}">{{ $label }}</a>
            @endforeach
            <a class="rounded bg-deep px-[18px] py-[13px] text-white transition-colors hover:bg-[#21443e]" href="{{ route('contact') }}">Konsultasikan proyek <span class="ml-3.5 text-mint">↗</span></a>
        </nav>
    </div>
</header>
