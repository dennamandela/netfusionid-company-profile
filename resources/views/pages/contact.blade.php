@extends('layouts.app')

@section('title', 'Contact Net FusionID — Let’s Build Your Digital Future')
@section('description', 'Tell Net FusionID about your idea. Explore website development, IT workshop, and IT training for your business or team.')

@section('content')
<section class="relative overflow-hidden bg-deep px-5 pt-14 pb-16 text-white sm:px-7 sm:pt-20 sm:pb-20 lg:px-[max(56px,calc((100%-1280px)/2))]">
    <div class="contact-orb" aria-hidden="true"></div>
    <div class="relative z-10 mx-auto max-w-[1280px]">
        <x-section-title number="01" label="CONTACT NET FUSIONID" class="text-[#a8bbb2] [&>span:last-child]:bg-white/15" />
        <div class="mt-12 max-w-4xl sm:mt-16">
            <p class="mb-5 text-[9px] font-semibold tracking-[1.6px] text-[#8de2bf]">WEBSITE · WORKSHOP · TRAINING</p>
            <h1 class="font-display text-[clamp(44px,9vw,88px)] leading-[1.02] font-semibold tracking-[-4px] sm:tracking-[-6px]">Let's build your<br>digital <em class="not-italic text-[#89dfbc]">future.</em></h1>
            <p class="mt-6 max-w-[580px] text-[14px] leading-[1.85] text-[#c0d1ca] sm:text-base">Tell us about your idea. We'll help you explore the right digital solution.</p>
        </div>
        <div class="mt-12 flex flex-wrap items-center gap-4 sm:mt-14">
            <a class="inline-flex items-center gap-6 rounded-sm bg-[#8ce0bb] px-5 py-4 text-[11px] font-bold text-[#183b33] transition hover:-translate-y-0.5 hover:bg-[#a9f1d1]" href="#consultation-form">Start a consultation <span>↓</span></a>
            <a class="text-[11px] font-semibold text-[#d4e1db] underline decoration-[#709586] underline-offset-4 transition hover:text-white" href="https://www.instagram.com/netfusionid" target="_blank" rel="noopener noreferrer">Instagram @netfusionid <span class="ml-1 text-[#8de2bf]">↗</span></a>
        </div>
    </div>
</section>

<section class="mx-auto grid w-[calc(100%-40px)] max-w-[1280px] gap-12 py-14 sm:w-[calc(100%-56px)] sm:py-20 lg:grid-cols-[.8fr_1.2fr] lg:gap-20 xl:w-[calc(100%-112px)]">
    <aside class="space-y-12">
        <div>
            <x-section-title number="02" label="CONTACT INFORMATION" />
            <div class="mt-8">
                <p class="text-[9px] font-semibold tracking-[1.5px] text-[#38a982]">INSTAGRAM</p>
                <a class="mt-3 inline-flex items-center gap-3 font-display text-xl font-semibold transition hover:text-[#258969]" href="https://www.instagram.com/netfusionid" target="_blank" rel="noopener noreferrer" aria-label="Kunjungi Instagram @netfusionid">@netfusionid <span class="text-sm text-[#38a982]">↗</span></a>
                <p class="mt-2 max-w-[330px] text-xs leading-[1.8] text-[#738078]">Kunjungi akun Instagram resmi untuk menyapa dan memulai percakapan.</p>
            </div>
        </div>

        <div>
            <x-section-title number="03" label="SERVICE OPTIONS" />
            <div class="mt-5 divide-y divide-line">
                <article class="py-5 first:pt-0"><div class="flex items-center gap-3"><span class="grid size-9 place-items-center rounded-full bg-[#def7eb] text-[#258969]" aria-hidden="true"><svg viewBox="0 0 24 24" class="size-5" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2.5" y="4" width="19" height="15" rx="1.5"/><path d="M8 22h8m-4-3v3M3 8h18"/></svg></span><h2 class="font-display text-[15px] font-semibold">Website Development</h2></div><p class="mt-3 pl-12 text-[11px] leading-[1.8] text-[#738078]">Website bisnis, company profile, dan kebutuhan pengembangan web.</p></article>
                <article class="py-5"><div class="flex items-center gap-3"><span class="grid size-9 place-items-center rounded-full bg-[#183a38] text-[#9ae5c2]" aria-hidden="true"><svg viewBox="0 0 24 24" class="size-5" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 20V7l9-4 9 4v13H3Z"/><path d="M7 20v-6h10v6m-5-17v8m-3-3 3 3 3-3"/></svg></span><h2 class="font-display text-[15px] font-semibold">IT Workshop</h2></div><p class="mt-3 pl-12 text-[11px] leading-[1.8] text-[#738078]">Workshop teknis untuk tim dan organisasi.</p></article>
                <article class="py-5 last:pb-0"><div class="flex items-center gap-3"><span class="grid size-9 place-items-center rounded-full bg-[#d9f2e7] text-[#258969]" aria-hidden="true"><svg viewBox="0 0 24 24" class="size-5" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 3h16v18H4zM8 8h8m-8 4h8m-8 4h5"/></svg></span><h2 class="font-display text-[15px] font-semibold">IT Training</h2></div><p class="mt-3 pl-12 text-[11px] leading-[1.8] text-[#738078]">Pelatihan keterampilan teknologi dan digital dengan pendekatan praktis.</p></article>
            </div>
        </div>
    </aside>

    <div class="rounded-sm border border-line bg-white p-5 shadow-[0_18px_60px_#18362b0a] sm:p-8 lg:p-10">
        <div class="mb-8"><p class="text-[9px] font-semibold tracking-[1.5px] text-[#38a982]">PROJECT CONSULTATION</p><h2 class="mt-3 font-display text-3xl font-semibold tracking-[-1.5px] sm:text-[36px]">Tell us what you have in mind.</h2><p class="mt-3 text-xs leading-relaxed text-[#738078]">Isi detail berikut untuk membantu menyusun kebutuhan konsultasi Anda.</p></div>

        <form id="consultation-form" class="space-y-5" novalidate>
            <div class="grid gap-5 sm:grid-cols-2">
                <div>
                    <label class="mb-2 block text-[11px] font-semibold" for="full-name">Full Name <span class="text-[#c84d4d]" aria-hidden="true">*</span></label>
                    <input class="w-full rounded-sm border border-line bg-paper px-3.5 py-3 text-xs text-ink outline-none transition placeholder:text-[#9aa49e] focus:border-[#3fb88f] focus:ring-4 focus:ring-[#3fb88f]/10" id="full-name" name="full_name" type="text" autocomplete="name" placeholder="Your full name" required aria-describedby="full-name-error">
                    <p class="mt-1.5 hidden text-[10px] text-[#b23b3b]" id="full-name-error" data-error-for="full-name"></p>
                </div>
                <div>
                    <label class="mb-2 block text-[11px] font-semibold" for="email-address">Email Address <span class="text-[#c84d4d]" aria-hidden="true">*</span></label>
                    <input class="w-full rounded-sm border border-line bg-paper px-3.5 py-3 text-xs text-ink outline-none transition placeholder:text-[#9aa49e] focus:border-[#3fb88f] focus:ring-4 focus:ring-[#3fb88f]/10" id="email-address" name="email" type="email" autocomplete="email" placeholder="you@company.com" required aria-describedby="email-address-error">
                    <p class="mt-1.5 hidden text-[10px] text-[#b23b3b]" id="email-address-error" data-error-for="email-address"></p>
                </div>
            </div>

            <div class="grid gap-5 sm:grid-cols-2">
                <div><label class="mb-2 block text-[11px] font-semibold" for="company">Company / Organization <span class="font-normal text-[#8a9694]">(Optional)</span></label><input class="w-full rounded-sm border border-line bg-paper px-3.5 py-3 text-xs text-ink outline-none transition placeholder:text-[#9aa49e] focus:border-[#3fb88f] focus:ring-4 focus:ring-[#3fb88f]/10" id="company" name="company" type="text" autocomplete="organization" placeholder="Your company name"></div>
                <div><label class="mb-2 block text-[11px] font-semibold" for="service">Service You're Interested In</label><select class="w-full rounded-sm border border-line bg-paper px-3.5 py-3 text-xs text-ink outline-none transition focus:border-[#3fb88f] focus:ring-4 focus:ring-[#3fb88f]/10" id="service" name="service"><option value="">Select a service</option><option value="website-development">Website Development</option><option value="it-workshop">IT Workshop</option><option value="it-training">IT Training</option></select></div>
            </div>

            <div><label class="mb-2 block text-[11px] font-semibold" for="budget">Estimated Budget <span class="font-normal text-[#8a9694]">(Optional)</span></label><input class="w-full rounded-sm border border-line bg-paper px-3.5 py-3 text-xs text-ink outline-none transition placeholder:text-[#9aa49e] focus:border-[#3fb88f] focus:ring-4 focus:ring-[#3fb88f]/10" id="budget" name="budget" type="text" inputmode="text" placeholder="Share a range or leave blank if undecided"></div>

            <div>
                <label class="mb-2 block text-[11px] font-semibold" for="project-details">Project Details <span class="text-[#c84d4d]" aria-hidden="true">*</span></label>
                <textarea class="min-h-32 w-full resize-y rounded-sm border border-line bg-paper px-3.5 py-3 text-xs text-ink outline-none transition placeholder:text-[#9aa49e] focus:border-[#3fb88f] focus:ring-4 focus:ring-[#3fb88f]/10" id="project-details" name="project_details" rows="5" placeholder="Tell us about your project, goals, and timeline..." required aria-describedby="project-details-error"></textarea>
                <p class="mt-1.5 hidden text-[10px] text-[#b23b3b]" id="project-details-error" data-error-for="project-details"></p>
            </div>

            <div class="pt-1"><button class="inline-flex w-full items-center justify-center gap-4 rounded-sm bg-deep px-5 py-4 text-xs font-semibold text-white transition hover:bg-[#21443e] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#3fb88f] sm:w-auto sm:min-w-44" type="submit">Send Inquiry <span class="text-mint">↗</span></button></div>
            <p class="hidden rounded-sm border border-[#e8d6a7] bg-[#fff9e9] px-4 py-3 text-[11px] leading-relaxed text-[#6e5929]" id="form-status" role="status" aria-live="polite"></p>
        </form>
    </div>
</section>
@endsection
