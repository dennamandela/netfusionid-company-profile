@extends('layouts.app')

@section('title', 'Portfolio — Net FusionID')
@section('description', 'Selected client and academic projects presented by Net FusionID.')

@section('content')
<section class="relative overflow-hidden bg-deep px-5 pt-14 pb-16 text-white sm:px-7 sm:pt-20 sm:pb-20 lg:px-[max(56px,calc((100%-1280px)/2))]">
    <div class="contact-orb" aria-hidden="true"></div>
    <div class="relative z-10 mx-auto max-w-[1280px]">
        <x-section-title number="01" label="PORTFOLIO" class="text-[#a8bbb2] [&>span:last-child]:bg-white/15" />
        <div class="mt-12 grid gap-8 lg:mt-16 lg:grid-cols-[1fr_auto] lg:items-end">
            <div><p class="mb-5 text-[9px] font-semibold tracking-[1.6px] text-[#8de2bf]">SELECTED WORK</p><h1 class="font-display text-[clamp(45px,9vw,88px)] leading-[1.02] font-semibold tracking-[-4px] sm:tracking-[-6px]">Ideas into digital<br><em class="not-italic text-[#89dfbc]">experiences.</em></h1><p class="mt-6 max-w-[540px] text-[14px] leading-[1.85] text-[#c0d1ca]">A selection of client work and academic projects connected to digital experiences.</p></div>
            <a class="inline-flex w-fit items-center gap-6 rounded-sm bg-[#8ce0bb] px-5 py-4 text-[11px] font-bold text-[#183b33] transition hover:-translate-y-0.5 hover:bg-[#a9f1d1]" href="{{ route('contact') }}">Discuss Your Project <span>↗</span></a>
        </div>
    </div>
</section>

<section class="mx-auto w-[calc(100%-40px)] max-w-[1280px] py-14 sm:w-[calc(100%-56px)] sm:py-20 xl:w-[calc(100%-112px)]">
    <x-section-title number="02" label="CLIENT PROJECTS" />
    <div class="mt-9 grid gap-5 md:grid-cols-2 sm:mt-12 sm:gap-6">
        <x-project-card number="01" category="CLIENT PROJECT" title="Travel Booking Website" description="Website travel dengan fitur booking dan reservasi." tone="mint" />
        <x-project-card number="02" category="CLIENT PROJECT" title="Teras Qurban Berdikari" description="Website dengan fitur transaksi dan pemesanan." tone="dark" />
    </div>
</section>

<section class="bg-[#ebefec] px-5 py-14 sm:px-7 sm:py-20 lg:px-[max(56px,calc((100%-1280px)/2))]">
    <div class="mx-auto max-w-[1280px]">
        <x-section-title number="03" label="ACADEMIC PROJECTS" />
        <div class="mt-8 flex flex-col justify-between gap-4 sm:mt-10 sm:flex-row sm:items-end"><div><p class="mb-3 text-[9px] font-semibold tracking-[1.5px] text-[#38a982]">STUDENT WORK</p><h2 class="font-display text-[clamp(32px,6vw,52px)] font-semibold tracking-[-2.5px]">Academic Projects</h2></div><p class="max-w-[420px] text-xs leading-[1.8] text-[#738078]">Ditampilkan terpisah dari proyek klien. Detail proyek akademik belum tersedia.</p></div>
        <div class="mt-7 grid gap-5 md:grid-cols-2 sm:mt-9 sm:gap-6">
            <x-project-card number="A01" category="ACADEMIC PROJECT" title="Proyek Mahasiswa 01" description="Informasi proyek belum tersedia." tone="sand" detail="DETAIL BELUM TERSEDIA" />
            <x-project-card number="A02" category="ACADEMIC PROJECT" title="Proyek Mahasiswa 02" description="Informasi proyek belum tersedia." tone="blue" detail="DETAIL BELUM TERSEDIA" />
        </div>
    </div>
</section>

<section class="bg-deep px-5 py-[72px] text-white sm:px-7 sm:py-[90px] lg:px-[max(56px,calc((100%-1280px)/2))]">
    <div class="mx-auto flex max-w-[1280px] flex-col justify-between gap-7 sm:flex-row sm:items-end"><div><p class="mb-4 text-[9px] font-semibold tracking-[1.5px] text-[#8de2bf]">LET’S START A CONVERSATION</p><h2 class="font-display text-[clamp(32px,6vw,58px)] font-semibold leading-tight tracking-[-2.5px]">Have a project in mind?<br>Let's build it together.</h2></div><a class="inline-flex w-fit items-center gap-6 rounded-sm bg-[#8ce0bb] px-5 py-4 text-[11px] font-bold text-[#183b33] transition hover:bg-[#a9f1d1]" href="{{ route('contact') }}">Discuss Your Project <span>↗</span></a></div>
</section>
@endsection
