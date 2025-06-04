@extends('layouts.default')

@section('title')
Cursos | Etec da Zona Leste
@endsection

@section('content')
<main class="mx-auto max-w-[1024px] mb-24">
    <div class="mb-6">
    <h1 class="text-sky-800 text-4xl">
        Cursos
    </h1>
    <hr class="my-2 border-neutral-300">
    <p class="indent-2 opacity-60">
        6 Cursos encontrados
    </p>
    </div>

    <section>
        <div class="grid grid-cols-3 gap-x-6 gap-y-12">
            @foreach ($courses as $course)
            <div class="flex-1 border border-neutral-200 rounded-md overflow-hidden shadow-md hover:shadow-lg transition-shadow cursor-pointer duration-300">
                <figure>
                    <img src="{{ $course['imagem'] }}" class="w-full aspect-video bg-neutral-300 object-cover" />
                    <figcaption class="px-4 pb-6">
                        <hr class="my-3 border-neutral-300">
                        <h2 class="font-medium text-lg text-sky-800 mb-2">
                            {{ $course['nome'] }}
                        </h2>
                        <p class="opacity-70">
                            {{ $course['descricao'] }}
                        </p>
                    </figcaption>
                </figure>
            </div>
            @endforeach
        </div>
    </section>
</main>
@endsection