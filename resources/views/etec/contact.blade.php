@extends('layouts.default')

@section('title')
Contato | Etec da Zona Leste
@endsection

@section('content')
<main class="mx-auto max-w-[720px] mt-8 mb-24">
    <h1 class="text-sky-800 text-4xl mb-6 pb-2 border-b border-neutral-300">
        Contato
    </h1>
    <p class="opacity-80 text-lg">
        Entre em contato com a Etec da Zona Leste.
    </p>

    <form action="" class="flex flex-col gap-4 p-8 mt-8 border-sky-600/50 border rounded-xl shadow-sm">
        <div class="grid grid-cols-3 gap-y-1">
            <label for="">Nome Completo</label>
            <input type="text" placeholder="Nome" class="col-span-2 px-2 py-1 bg-white rounded-md border border-neutral-200">

            <label for="">E-mail para Contato</label>
            <input type="email" placeholder="E-mail" class="col-span-2 px-2 py-1 bg-white rounded-md border border-neutral-200">

            <label for="">Assunto</label>
            <input type="text" placeholder="Assunto" class="col-span-2 px-2 py-1 bg-white rounded-md border border-neutral-200">
        </div>

        <hr class="border-neutral-300">

        <div class="flex flex-col gap-2">
            <label for="">Mensagem</label>
            <textarea
                name=""
                id=""
                placeholder="Digite sua mensagem" class="p-2 bg-white rounded-md border border-neutral-200"></textarea>
        </div>

        <hr class="border-neutral-300 my-4">

        <button type="submit" class="block text-white mx-auto w-1/3 p-2 bg-sky-700 rounded-md cursor-pointer">
            Enviar
        </button>
    </form>
</main>
@endsection