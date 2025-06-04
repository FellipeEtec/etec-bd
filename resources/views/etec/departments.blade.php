@extends('layouts.default')

@section('title')
Departamentos | Etec da Zona Leste
@endsection

@section('content')
<main class="mb-24">
    <h1 class="text-sky-800 text-4xl text-center mt-8 mb-12 pb-2 border-b border-neutral-300">
        Lista de Departamentos
    </h1>

    <div class="flex">
        <section class="flex-1">
            <h2 class="text-3xl mb-4">
                Secretaria Acadêmica
            </h2>

            <div class="flex flex-col gap-4 ml-8">
                <div>
                    <h3 class="text-2xl text-sky-800 mb-2">
                        Horários de Atendimentos
                    </h3>

                    <div class="w-[560px] p-0.5 border border-neutral-300 rounded-sm overflow-hidden *:border-b *:border-neutral-300">
                        <div class="font-medium flex w-full border-b border-neutral-300 bg-stone-100 *:flex-1 *:px-3 *:py-2">
                            <div>
                                Segunda-feira
                            </div>
                            <div>
                                Terça-feira
                            </div>
                            <div>
                                Sexta-feira
                            </div>
                        </div>

                        <div class="flex w-full *:flex-1 *:px-3 *:py-2">
                            <div>
                                08h00min. às 09h30min.
                            </div>
                            <div>
                                08h00min. às 09h30min.
                            </div>
                            <div>
                                08h00min. às 09h30min.
                            </div>
                        </div>
                        <div class="flex w-full *:flex-1 *:px-3 *:py-2">
                            <div>
                                14h30min. às 15h30min.
                            </div>
                            <div>
                                14h30min. às 15h30min.
                            </div>
                            <div>
                                14h30min. às 15h30min.
                            </div>
                        </div>
                        <div class="flex w-full *:flex-1 *:px-3 *:py-2">
                            <div>
                                19h30min. às 20h30min.
                            </div>
                            <div>
                                19h30min. às 20h30min.
                            </div>
                            <div>
                                19h30min. às 20h30min.
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-2xl text-sky-800">
                        Equipe
                    </h3>

                    <ul class="ml-8 *:before:content-['-'] *:before:mr-2">
                        <li>Diretor de Serviços Acadêmicos – Ênio Ramos Araújo </li>
                        <li>Agente Técnico e Administrativo – Diva Neide Bortoli</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-2xl text-sky-800">
                        Contato
                    </h3>
                    <ul class="ml-8 *:before:content-['-'] *:before:mr-2">
                        <li>E-mail: e211acad@cps.sp.gov.br</li>
                        <li>Telefones: (11) 2045-4025 | (11) 2045-4026 | (11) 2045-4009 </li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="border-r border-neutral-300 mx-8"></div>

        <section class="flex-1">
            <h2 class="text-3xl mb-4">
                Coordenação de Cursos
            </h2>

            <div class="flex flex-col gap-4 ml-8">
                <p class="opacity-80">
                    As Coordenações de Curso são responsáveis pelo conjunto de ações destinadas ao planejamento do ensino, à supervisão de sua execução, ao controle das atividades docentes em relação às diretrizes didáticas pedagógicas e administrativas, bem como pela otimização dos recursos físicos e didáticos disponíveis para os cursos mantidos pelas Etecs.
                </p>

                <div>
                    <h3 class="text-2xl text-sky-800">
                        Coordenador Novotec
                    </h3>
                    <ul class="ml-8 *:before:content-['-'] *:before:mr-2">
                        <li>Giovanna Littiere (Novotec Administração)</li>
                        <li>Leandro (Novotec Logística)</li>
                        <li>Marcelo Collado (Novotec Desenvolvimento de Sistemas)</li>
                        <li>Cibelle Ferreria Francoso (Novotec RH)</li>
                        <li>Jeferson Roberto de Lima (Novotec Desenvolvimento de Sistemas AMS)</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-2xl text-sky-800">
                        Coordenador Curso Técnico
                    </h3>

                    <ul class="ml-8 *:before:content-['-'] *:before:mr-2">
                        <li>Monyse Tesser Panacci (Técnico em Adminstração)</li>
                        <li>Dainele (Técnico em Contabilidade)</li>
                        <li>Ediney Ciasi Barreto (Técnico em Desenvolvimento de Sistemas)</li>
                        <li>Silvano Lack de Brito (Técnico em Logística / Técnico em Serviços Jurídicos)</li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-2xl text-sky-800">
                        Contato
                    </h3>
                    <ul class="ml-8 *:before:content-['-'] *:before:mr-2">
                        <li>
                            Telefones: (11) 2045-4018
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection