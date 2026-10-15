@extends('layouts.app')

@section('title', 'Tentang Kami — Net FusionID')
@section('description', 'Net FusionID membantu bisnis membangun website dan backend, mengintegrasikan API, serta menangani DevOps, deployment, dan infrastruktur IT.')

@section('content')
<section class="mx-auto w-[calc(100%-40px)] max-w-[1280px] py-14 sm:w-[calc(100%-56px)] sm:py-20 xl:w-[calc(100%-112px)]">
    <x-section-title number="01" label="TENTANG KAMI" class="[&>span:first-child]:text-[#59666b] [&>span:first-child]:text-[10px] sm:[&>span:first-child]:text-[11px]" />
    <div class="mt-12 grid gap-10 lg:mt-20 lg:grid-cols-2 lg:gap-16">
        <div>
            <p class="mb-5 text-xs font-semibold tracking-[1.5px] text-[#237e60]">PARTNER TEKNOLOGI DIGITAL</p>
            <h1 class="font-display text-[clamp(42px,7vw,68px)] leading-[1.08] font-semibold tracking-[-3px] sm:tracking-[-4px]">Teknologi untuk<br>ide yang <em class="not-italic text-[#3fb88f]">berkembang.</em></h1>
        </div>
        <div class="self-end lg:max-w-[600px]">
            <p class="text-base leading-7 text-[#59666b] sm:text-lg sm:leading-8">Net FusionID adalah partner teknologi digital yang membantu bisnis membangun, mengembangkan, dan mengelola solusi digital. Kami berfokus pada Pengembangan Website dan Aplikasi, Backend Development, API Integration, DevOps, Deployment, serta IT Infrastructure yang disesuaikan dengan kebutuhan bisnis.</p>
            <p class="mt-5 text-base leading-7 text-[#59666b] sm:text-lg sm:leading-8">Kami percaya bahwa solusi teknologi yang baik tidak hanya memenuhi kebutuhan saat ini, tetapi juga dirancang agar mudah dikelola, dikembangkan, dan dipelihara. Karena itu, kami mengutamakan pemahaman kebutuhan, kualitas implementasi, efisiensi, dan kolaborasi yang berkelanjutan.</p>
            <a class="mt-6 inline-flex min-h-12 items-center gap-3 rounded-sm bg-deep px-5 py-3 text-sm font-semibold text-white transition hover:bg-[#21443e]" href="{{ route('services') }}">Lihat layanan kami <span class="text-mint">↗</span></a>
        </div>
    </div>
</section>

<section class="bg-[#ebefec] px-5 py-14 sm:px-7 sm:py-20 lg:px-[max(56px,calc((100%-1280px)/2))]">
    <div class="mx-auto max-w-[1280px]">
        <x-section-title number="02" label="NILAI KAMI" class="[&>span:first-child]:text-[#59666b] [&>span:first-child]:text-[10px] sm:[&>span:first-child]:text-[11px]" />
        <div class="mt-10 max-w-2xl sm:mt-14">
            <p class="mb-4 text-xs font-semibold tracking-[1.5px] text-[#237e60]">PRINSIP KERJA KAMI</p>
            <h2 class="font-display text-[clamp(34px,6vw,58px)] leading-[1.1] font-semibold tracking-[-2px]">Membangun solusi melalui <em class="not-italic text-[#3fb88f]">teknologi dan kolaborasi.</em></h2>
        </div>
        <div class="mt-10 grid gap-3 sm:mt-14 sm:grid-cols-2 lg:grid-cols-5">
            @foreach ([['01','Innovation','Mengembangkan solusi yang relevan dengan kebutuhan dan tantangan bisnis.','✳'],['02','Reliability','Membangun dan mengelola sistem yang stabil, terukur, dan dapat diandalkan.','↗'],['03','Quality','Menjaga kualitas kode, implementasi, dan proses pengerjaan.','◈'],['04','Partnership','Membangun hubungan kerja yang terbuka, kolaboratif, dan berkelanjutan.','◎'],['05','Continuous Improvement','Terus mengevaluasi dan meningkatkan kualitas solusi, proses, dan teknologi yang digunakan.','＋']] as $value)
                <article class="rounded-sm border border-[#d8dedc] bg-white/70 p-5 transition hover:-translate-y-1 hover:bg-white sm:p-6">
                    <div class="mb-8 flex items-start justify-between sm:mb-9">
                        <span class="font-display text-xs font-semibold tracking-[1.3px] text-[#667d72]">{{ $value[0] }}</span>
                        <span class="font-display text-2xl text-[#3fb88f]" aria-hidden="true">{{ $value[3] }}</span>
                    </div>
                    <h3 class="mb-2 font-display text-lg leading-snug font-semibold sm:text-xl">{{ $value[1] }}</h3>
                    <p class="m-0 text-base leading-7 text-[#59666b]">{{ $value[2] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>

<section class="mx-auto flex w-[calc(100%-40px)] max-w-[1280px] flex-col gap-6 py-14 sm:w-[calc(100%-56px)] sm:flex-row sm:items-center sm:justify-between sm:py-20 xl:w-[calc(100%-112px)]">
    <div class="max-w-2xl">
        <p class="text-xs font-semibold tracking-[1.5px] text-[#237e60]">KOLABORASI DIMULAI DENGAN PERCAKAPAN</p>
        <h2 class="mt-3 font-display text-3xl leading-tight font-semibold tracking-[-1px] sm:text-4xl">Mari wujudkan solusi digital Anda.</h2>
        <p class="mt-4 text-base leading-7 text-[#59666b] sm:text-lg sm:leading-8">Ceritakan kebutuhan dan tantangan bisnis Anda. Kami siap membantu merancang dan mengimplementasikan solusi teknologi yang sesuai dengan kebutuhan Anda.</p>
    </div>
    <a class="inline-flex min-h-12 w-fit shrink-0 items-center gap-5 rounded-sm bg-deep px-5 py-3 text-sm font-semibold text-white transition hover:bg-[#21443e]" href="{{ route('contact') }}">Hubungi Net FusionID <span class="text-mint">↗</span></a>
</section>
@endsection
