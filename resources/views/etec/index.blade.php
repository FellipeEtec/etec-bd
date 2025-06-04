@extends('layouts.default')

@section('title')
Etec da Zona Leste
@endsection

@section('content')
<main class="flex flex-col gap-16 mb-24">
    <!-- Apresentando a Etec -->
    <section>
        <figure class="relative h-[600px] rounded-xl overflow-hidden">
            <!-- Devia ser uma imagem -->
            <img src="{{ Vite::asset('resources/images/ds.jpg') }}" class="h-full w-full bg-neutral-300 object-cover" />
            <figcaption class="text-white absolute bottom-0 left-0 w-full px-16 pb-8 pt-24 bg-linear-to-t from-black/30 to-transparent">
                <h2 class="font-semibold text-4xl w-fit border-b-2 mb-4">
                    Desenvolvimento de Sistemas
                </h2>
                <p class="text-lg">
                    No curso técnico de Desenvolvimento de Sistemas, você aprenderá a programar, criar bancos de dados e desenvolver aplicações para web e desktop. Com alta demanda no mercado, essa formação permite atuar como programador, analista ou até empreender na área de tecnologia.
                </p>
            </figcaption>
        </figure>
    </section>

    <!-- Destaques / Cursos -->
    <section>
        <h2 class="text-sky-800 text-3xl mb-4 pb-2 border-b border-neutral-300">
            Cursos em Destaque
        </h2>

        <nav class="overflow-auto">
            <ul class="flex gap-8">
                @foreach ($destaques as $destaque)
                <li class="group min-w-[360px] w-[360px] h-[240px] mb-4">
                    <div class="w-full h-full border border-neutral-300 rounded-md overflow-hidden shadow transition-transform">
                        <a href="{{ route('courses') }}" class="w-full h-full">
                            <figure class="relative flex flex-col w-full h-full">
                                <img src="{{ $destaque['imagem'] }}" alt="" class="w-full h-full bg-neutral-300 object-cover transition-transform duration-500 group-hover:scale-105">
                                <figcaption class="text-white absolute bottom-0 left-0 w-full px-8 pb-6 pt-10 bg-linear-to-t from-black/50 to-transparent">
                                    <h2 class="font-semibold text-2xl">
                                        {{ $destaque['nome'] }}
                                    </h2>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>
        </nav>
    </section>

    <!-- Links úteis -->
    <section>
        <h2 class="text-sky-800 text-3xl mb-4 pb-2 border-b border-neutral-300">
            Links Úteis
        </h2>
        <ul class="flex gap-4 justify-between">
            <li class="flex-1 h-[250px] bg-stone-100 shadow hover:shadow-md transition-shadow">
                <a href="https://eteczonaleste.cps.sp.gov.br/oportunidades/" class="text-sky-600 flex flex-col gap-4 items-center justify-center w-full h-full px-2">
                    <svg class="size-12" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M128 184c0-30.879 25.122-56 56-56h136V56c0-13.255-10.745-24-24-24h-80.61C204.306 12.89 183.637 0 160 0s-44.306 12.89-55.39 32H24C10.745 32 0 42.745 0 56v336c0 13.255 10.745 24 24 24h104V184zm32-144c13.255 0 24 10.745 24 24s-10.745 24-24 24-24-10.745-24-24 10.745-24 24-24zm184 248h104v200c0 13.255-10.745 24-24 24H184c-13.255 0-24-10.745-24-24V184c0-13.255 10.745-24 24-24h136v104c0 13.2 10.8 24 24 24zm104-38.059V256h-96v-96h6.059a24 24 0 0 1 16.97 7.029l65.941 65.941a24.002 24.002 0 0 1 7.03 16.971z"></path>
                    </svg>
                    <p>
                        Oportunidades
                    </p>
                </a>
            </li>
            <li class="flex-1 h-[250px] bg-stone-100 shadow hover:shadow-md transition-shadow">
                <a href="https://eteczonaleste.cps.sp.gov.br/plano-plurianual-de-gestao/" class="text-sky-600 flex flex-col gap-4 items-center justify-center w-full h-full px-2">
                    <svg class="size-12" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M436 160c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h320c26.5 0 48-21.5 48-48v-48h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20zm-68 304H48V48h320v416zM208 256c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm-89.6 128h179.2c12.4 0 22.4-8.6 22.4-19.2v-19.2c0-31.8-30.1-57.6-67.2-57.6-10.8 0-18.7 8-44.8 8-26.9 0-33.4-8-44.8-8-37.1 0-67.2 25.8-67.2 57.6v19.2c0 10.6 10 19.2 22.4 19.2z"></path>
                    </svg>
                    <p>
                        PPG
                    </p>
                </a>
            </li>
            <li class="flex-1 h-[250px] bg-stone-100 shadow hover:shadow-md transition-shadow">
                <a href="https://eteczonaleste.cps.sp.gov.br/manual-do-aluno/" class="text-sky-600 flex flex-col gap-4 items-center justify-center w-full h-full px-2">
                    <svg class="size-12" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M247.6 8C389.4 8 496 118.1 496 256c0 147.1-118.5 248-248.4 248C113.6 504 0 394.5 0 256 0 123.1 104.7 8 247.6 8zm.8 44.7C130.2 52.7 44.7 150.6 44.7 256c0 109.8 91.2 202.8 203.7 202.8 103.2 0 202.8-81.1 202.8-202.8.1-113.8-90.2-203.3-202.8-203.3zm101 132.4c7.8 0 13.7 6.1 13.7 13.7v182.5c0 7.7-6.1 13.7-13.7 13.7H214.3c-7.7 0-13.7-6-13.7-13.7v-54h-54c-7.8 0-13.7-6-13.7-13.7V131.1c0-8.2 6.6-12.7 12.4-13.7h136.4c7.7 0 13.7 6 13.7 13.7v54h54zM159.9 300.3h40.7V198.9c0-7.4 5.8-12.6 12-13.7h55.8v-40.3H159.9v155.4zm176.2-88.1H227.6v155.4h108.5V212.2z"></path>
                    </svg>
                    <p>
                        Manual Do Aluno
                    </p>
                </a>
            </li>
            <li class="flex-1 h-[250px] bg-stone-100 shadow hover:shadow-md transition-shadow">
                <a href="https://eteczonaleste.cps.sp.gov.br/vestibulinho/" class="text-sky-600 flex flex-col gap-4 items-center justify-center w-full h-full px-2">
                    <svg class="size-12" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M436 160c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20V48c0-26.5-21.5-48-48-48H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h320c26.5 0 48-21.5 48-48v-48h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20c6.6 0 12-5.4 12-12v-40c0-6.6-5.4-12-12-12h-20v-64h20zm-228-32c35.3 0 64 28.7 64 64s-28.7 64-64 64-64-28.7-64-64 28.7-64 64-64zm112 236.8c0 10.6-10 19.2-22.4 19.2H118.4C106 384 96 375.4 96 364.8v-19.2c0-31.8 30.1-57.6 67.2-57.6h5c12.3 5.1 25.7 8 39.8 8s27.6-2.9 39.8-8h5c37.1 0 67.2 25.8 67.2 57.6v19.2z"></path>
                    </svg>
                    <p>
                        Vestibulinho
                    </p>
                </a>
            </li>
            <li class="flex-1 h-[250px] bg-stone-100 shadow hover:shadow-md transition-shadow">
                <a href="https://eteczonaleste.cps.sp.gov.br/regimento-comum-das-etecs/" class="text-sky-600 text-center flex flex-col gap-4 items-center justify-center w-full h-full px-2">
                    <svg class="size-12" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"></path>
                    </svg>
                    <p>
                        Regimento Comum
                    </p>
                </a>
            </li>
            <li class="flex-1 h-[250px] bg-stone-100 shadow hover:shadow-md transition-shadow">
                <a href="https://nsa.cps.sp.gov.br/" class="text-sky-600 flex flex-col gap-4 items-center justify-center w-full h-full px-2">
                    <svg class="size-12" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M415.44 512h-95.11L212.12 357.46v91.1L125.69 512H28V29.82L68.47 0h108.05l123.74 176.13V63.45L386.69 0h97.69v461.5zM38.77 35.27V496l72-52.88V194l215.5 307.64h84.79l52.35-38.17h-78.27L69 13zm82.54 466.61l80-58.78v-101l-79.76-114.4v220.94L49 501.89h72.34zM80.63 10.77l310.6 442.57h82.37V10.77h-79.75v317.56L170.91 10.77zM311 191.65l72 102.81V15.93l-72 53v122.72z"></path>
                    </svg>
                    <p>
                        NSA
                    </p>
                </a>
            </li>
            <li class="flex-1 h-[250px] bg-stone-100 shadow hover:shadow-md transition-shadow">
                <a href="http://www.etec.sp.gov.br/view/Default.aspx" class="text-sky-600 text-center flex flex-col gap-4 items-center justify-center w-full h-full px-2">
                    <svg class="size-12" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M176 216h160c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16H176c-8.84 0-16 7.16-16 16v16c0 8.84 7.16 16 16 16zm-16 80c0 8.84 7.16 16 16 16h160c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16H176c-8.84 0-16 7.16-16 16v16zm96 121.13c-16.42 0-32.84-5.06-46.86-15.19L0 250.86V464c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V250.86L302.86 401.94c-14.02 10.12-30.44 15.19-46.86 15.19zm237.61-254.18c-8.85-6.94-17.24-13.47-29.61-22.81V96c0-26.51-21.49-48-48-48h-77.55c-3.04-2.2-5.87-4.26-9.04-6.56C312.6 29.17 279.2-.35 256 0c-23.2-.35-56.59 29.17-73.41 41.44-3.17 2.3-6 4.36-9.04 6.56H96c-26.51 0-48 21.49-48 48v44.14c-12.37 9.33-20.76 15.87-29.61 22.81A47.995 47.995 0 0 0 0 200.72v10.65l96 69.35V96h320v184.72l96-69.35v-10.65c0-14.74-6.78-28.67-18.39-37.77z"></path>
                    </svg>
                    <p>
                        E-mail Institucional
                    </p>
                </a>
            </li>
            <li class="flex-1 h-[250px] bg-stone-100 shadow hover:shadow-md transition-shadow">
                <a href="https://eteczonaleste.cps.sp.gov.br/contato/" class="text-sky-600 flex flex-col gap-4 items-center justify-center w-full h-full px-2">
                    <svg class="size-12" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M192 208c0-17.67-14.33-32-32-32h-16c-35.35 0-64 28.65-64 64v48c0 35.35 28.65 64 64 64h16c17.67 0 32-14.33 32-32V208zm176 144c35.35 0 64-28.65 64-64v-48c0-35.35-28.65-64-64-64h-16c-17.67 0-32 14.33-32 32v112c0 17.67 14.33 32 32 32h16zM256 0C113.18 0 4.58 118.83 0 256v16c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-16c0-114.69 93.31-208 208-208s208 93.31 208 208h-.12c.08 2.43.12 165.72.12 165.72 0 23.35-18.93 42.28-42.28 42.28H320c0-26.51-21.49-48-48-48h-32c-26.51 0-48 21.49-48 48s21.49 48 48 48h181.72c49.86 0 90.28-40.42 90.28-90.28V256C507.42 118.83 398.82 0 256 0z"></path>
                    </svg>
                    <p>
                        Contato
                    </p>
                </a>
            </li>
        </ul>
    </section>
</main>
@endsection