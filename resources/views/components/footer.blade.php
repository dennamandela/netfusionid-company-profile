<footer class="bg-[#e8ece9] px-5 pt-12 pb-5 sm:px-7 sm:pt-14 sm:pb-6 lg:px-[max(56px,calc((100%-1280px)/2)]">
    <div class="mx-auto grid max-w-[1280px] grid-cols-1 gap-x-10 gap-y-10 pb-10 sm:grid-cols-2 sm:gap-y-9 sm:pb-12 lg:grid-cols-4 lg:gap-x-12">
        <div class="sm:col-span-2">
            <a class="inline-flex items-start gap-[11px] font-display text-[15px] font-bold tracking-[-.7px] sm:text-base" href="{{ route('home') }}" aria-label="Net FusionID, ke beranda">
                <span class="brand-mark" aria-hidden="true"><i></i><i></i><i></i><i></i></span>
                <span class="mt-1">net fusion<span class="ml-0.5 text-[#36aa86]">ID</span></span>
            </a>
            <p class="mt-5 max-w-[420px] font-display text-lg leading-snug text-[#42514a]">Partner teknologi untuk berkembang.</p>
            <p class="mt-3 max-w-[460px] text-sm leading-6 text-[#59665f] sm:text-[15px]">Membantu bisnis mengembangkan software, serta mendukung kebutuhan DevOps dan infrastruktur IT.</p>
            <a class="mt-5 inline-flex min-h-10 items-center gap-2 text-sm font-semibold text-[#315c4a] transition-colors hover:text-[#167c5a]" href="https://www.instagram.com/netfusionid" target="_blank" rel="noopener noreferrer">Instagram <span class="text-[#258969]" aria-hidden="true">↗</span></a>
        </div>

        <nav aria-label="Navigasi footer">
            <h2 class="mb-4 text-xs font-bold tracking-[1.1px] text-[#40534a]">NAVIGASI</h2>
            <ul class="m-0 grid list-none gap-2.5 p-0 text-sm text-[#59665f]">
                @foreach ([['home', 'Beranda'], ['about', 'Tentang'], ['services', 'Layanan'], ['portfolio', 'Portofolio'], ['contact', 'Kontak']] as [$routeName, $label])
                    <li><a class="inline-flex min-h-7 items-center transition-colors hover:text-[#167c5a]" href="{{ route($routeName) }}">{{ $label }}</a></li>
                @endforeach
            </ul>
        </nav>

        <div>
            <h2 class="mb-4 text-xs font-bold tracking-[1.1px] text-[#40534a]">LAYANAN KAMI</h2>
            <ul class="m-0 grid list-none gap-2.5 p-0 text-sm leading-6 text-[#59665f]">
                <li>Web Development</li>
                <li>Backend &amp; API Integration</li>
                <li>DevOps &amp; CI/CD</li>
                <li>Deployment</li>
                <li>IT Infrastructure</li>
            </ul>
        </div>
    </div>

    <div class="mx-auto flex max-w-[1280px] flex-col gap-3 border-t border-[#cbd5ce] pt-5 text-xs font-medium text-[#59665f] sm:flex-row sm:items-center sm:justify-between">
        <span>© 2026 Net FusionID</span>
        <a class="inline-flex min-h-8 w-fit items-center font-semibold transition-colors hover:text-[#167c5a]" href="{{ route('home') }}">Kembali ke Beranda ↑</a>
    </div>
</footer>
