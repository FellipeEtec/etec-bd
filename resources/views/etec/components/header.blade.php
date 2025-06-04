<header class="flex flex-col w-full shadow">
    <div class="flex justify-between border-b border-neutral-300">
        <div class="pl-[48px] py-[20px] pr-[48px] rounded-r-full bg-black">
            <a href="http://www.saopaulo.sp.gov.br/">
                <img
                    src="{{ Vite::asset('resources/images/logo-governo-do-estado-sp.png') }}"
                    alt="Governo do Estado de São Paulo"
                    decoding="async" fetchpriority="high"
                    class="h-[38px] object-cover">
            </a>
        </div>

        <div class="flex items-center h-full mr-[48px]">
            <!-- Redes Sociais -->
            <nav class="flex gap-[4px] pr-[16px] mr-[16px] border-r-2 border-neutral-500 *:transition-transform *:hover:-translate-y-0.5">
                <a class="govsp-social" href="https://www.flickr.com/governosp/" target="_blank">
                    <img class="govsp-icon-social" src="https://eteczonaleste.cps.sp.gov.br/wp-content/themes/tema-cps/images/sao-paulo/i-flickr.png" alt="Flickr Governo de São Paulo">
                </a>
                <a class="govsp-social" href="https://www.linkedin.com/company/governosp/" target="_blank">
                    <img class="govsp-icon-social" src="https://eteczonaleste.cps.sp.gov.br/wp-content/themes/tema-cps/images/sao-paulo/i-linkedin.png" alt="Linkedin Governo de São Paulo">
                </a>
                <a class="govsp-social" href="https://www.tiktok.com/@governosp" target="_blank">
                    <img class="govsp-icon-social" src="https://eteczonaleste.cps.sp.gov.br/wp-content/themes/tema-cps/images/sao-paulo/i-tiktok.png" alt="TikTok Governo de São Paulo">
                </a>
                <a class="govsp-social" href="https://www.youtube.com/governosp/" target="_blank">
                    <img class="govsp-icon-social" src="https://eteczonaleste.cps.sp.gov.br/wp-content/themes/tema-cps/images/sao-paulo/i-youtube.png" alt="Youtube Governo de São Paulo">
                </a>
                <a class="govsp-social" href="https://www.twitter.com/governosp/" target="_blank">
                    <img class="govsp-icon-social" src="https://eteczonaleste.cps.sp.gov.br/wp-content/themes/tema-cps/images/sao-paulo/i-twitter.png" alt="Facebook Governo de São Paulo">
                </a>
                <a class="govsp-social" href="https://www.instagram.com/governosp/" target="_blank">
                    <img class="govsp-icon-social" src="https://eteczonaleste.cps.sp.gov.br/wp-content/themes/tema-cps/images/sao-paulo/i-insta.png" alt="Instagram Governo de São Paulo">
                </a>
                <a class="govsp-social" href="https://www.facebook.com/governosp/" target="_blank">
                    <img class="govsp-icon-social" src="https://eteczonaleste.cps.sp.gov.br/wp-content/themes/tema-cps/images/sao-paulo/i-facebook.png" alt="Facebook Governo de São Paulo">
                </a>
            </nav>

            <!-- Acessibilidade -->
            <div>
                <script src="{{ Vite::asset('resources/js/accessibility/font_change.js') }}"></script>
                <button
                    type="button"
                    onclick="changeFont()"
                    class="font-semibold text-[16px] p-[4px] border border-neutral-500 aspect-square rounded-[6px] cursor-pointer transition-colors hover:bg-neutral-500 hover:text-white"
                    style="line-height: 0;">
                    Aa
                </button>
            </div>
        </div>
    </div>

    <div class="flex justify-center border-b border-neutral-200 py-4">
        <div class="flex justify-between items-center w-full max-w-[1280px]">
            <!-- Imagens -->
            <a href="https://eteczonaleste.cps.sp.gov.br/" class="h-[78px] w-[301px]">
                <img
                    src="{{ Vite::asset('resources/images/etec_zona_leste.png') }}"
                    alt="Etec da Zona Leste e Centro Paula Souza"
                    decoding="async" fetchpriority="high"
                    class="h-[78px] object-cover">
            </a>

            <!-- Navegação -->
            <nav>
                <ul class="text-white flex rounded-full overflow-hidden border border-red-700 *:transition-colors">
                    <li class="bg-red-700 hover:text-red-700 hover:bg-white">
                        <a href="{{ route('index') }}" class="block px-5 py-3">
                            Home
                        </a>
                    </li>
                    <li class="bg-red-700 hover:text-red-700 hover:bg-white">
                        <a href="{{ route('courses') }}" class="block px-5 py-3">
                            Cursos
                        </a>
                    </li>
                    <li class="bg-red-700 hover:text-red-700 hover:bg-white">
                        <a href="{{ route('departments') }}" class="block px-5 py-3">
                            Departamentos
                        </a>
                    </li>
                    <li class="bg-red-700 hover:text-red-700 hover:bg-white">
                        <a href="{{ route('contact') }}" class="block px-5 py-3">
                            Contato
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Pesquisa -->
            <form
                action=""
                class="flex divide-x divide-neutral-300 w-full max-w-[300px] border border-neutral-300 rounded-3xl overflow-hidden has-focus:border-neutral-400 has-focus:divide-neutral-400">
                <input
                    type="search"
                    name="procura"
                    placeholder="O que deseja procurar?"
                    class="flex-1 px-6 py-3 outline-none">
                <button
                    type="submit"
                    class="flex items-center justify-center size-12 pr-1 cursor-pointer stroke-red-700 hover:bg-red-700 hover:stroke-white transition-colors">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8" />
                        <path d="m21 21-4.3-4.3" />
                    </svg>
                </button>
            </form>
        </div>
    </div>
</header>