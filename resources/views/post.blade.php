<x-layout title="  ">
    <x-perfil :user="$user" />
    <div
        class="text-sm font-medium text-center text-gray-500 border-b-0 border-t border-gray-200 dark:text-gray-400 dark:border-gray-700">
        <ul class="flex flex-wrap -mb-px items-center justify-center sm:gap-2 gap-12" role="tablist" data-te-nav-ref>
            <x-forms.li route="#tabs-publications" target="#tabs-publications" controls="tabs-publications" selected="true"
                text="Publicaciones">
                <x-icons.publication-icon />
            </x-forms.li>
            @auth
                @if ($user->id === auth()->user()->id)
                    <li class="mr-2" role="presentation">
                        <a href="#tabs-saved"
                            class="flex gap-2 items-center my-0 border-x-0 border-b-0 border-t-2 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-gray-800 data-[te-nav-active]:text-gray-800 dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                            data-te-toggle="pill" data-te-target="#tabs-saved" role="tab" aria-controls="tabs-saved"
                            aria-selected="false">
                            <svg color="border-gray-800" fill="border-gray-800" height="12" role="img"
                                viewBox="0 0 24 24" width="12">
                                <polygon fill="none" points="20 21 12 13.44 4 21 4 3 20 3 20 21" stroke="currentColor"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polygon>
                            </svg>
                            <p class="hidden sm:block">Guardado</p>
                        </a>
                    </li>
                @endif
            @endauth
            <li class="mr-2" role="presentation">
                <a href="#tabs-tagged"
                    class="flex gap-2 items-center my-0 border-x-0 border-b-0 border-t-2 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-gray-800 data-[te-nav-active]:text-gray-800 dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400"
                    data-te-toggle="pill" data-te-target="#tabs-tagged" role="tab" aria-controls="tabs-tagged"
                    aria-selected="false">
                    <svg color="border-gray-800" fill="border-gray-800" height="12" role="img"
                        viewBox="0 0 24 24" width="12">
                        <path
                            d="M10.201 3.797 12 1.997l1.799 1.8a1.59 1.59 0 0 0 1.124.465h5.259A1.818 1.818 0 0 1 22 6.08v14.104a1.818 1.818 0 0 1-1.818 1.818H3.818A1.818 1.818 0 0 1 2 20.184V6.08a1.818 1.818 0 0 1 1.818-1.818h5.26a1.59 1.59 0 0 0 1.123-.465Z"
                            fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2"></path>
                        <path
                            d="M18.598 22.002V21.4a3.949 3.949 0 0 0-3.948-3.949H9.495A3.949 3.949 0 0 0 5.546 21.4v.603"
                            fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2"></path>
                        <circle cx="12.072" cy="11.075" fill="none" r="3.556" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                    </svg>
                    <p class="hidden sm:block">Etiquetadas</p>
                </a>
            </li>
        </ul>
    </div>
    <div class="mb-6">
        <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
            id="tabs-publications" role="tabpanel" aria-labelledby="tabs-publications-tab" data-te-tab-active>
            <div class="sm:container mx-auto sm:px-5 px-2 py-2 lg:px-32 lg:pt-12">
                <div class="-m-1 flex flex-wrap md:-m-2">
                    <x-publicaciones />
                </div>
            </div>
        </div>
        <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
            id="tabs-saved" role="tabpanel" aria-labelledby="tabs-saved-tab">
            <div class=" sm:justify-between sm:flex">
                <p class=" text-center text-xs font-semibold text-gray-500 mt-5">Solo tú puedes ver lo que guardaste</p>
                <a href="#" class="text-sky-700 cursor-pointer hidden sm:block">+ Nueva colección</a>
            </div>
            <div class="mt-20">
                <img class="m-auto justify-center items-center text-center" src="{{ asset('img/saved.png') }}"
                    alt="image saved">
            </div>
            <div class="text-center">
                <h1 class="text-4xl font-black font-sans">Guardar</h1>
                <p class="m-3 text-sm text-gray-800">Guarda fotos y videos que quieras volver a ver. Nadie recibirá una
                    notificación y solo tú podrás ver lo que guardaste.</p>
            </div>
        </div>
        <div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
            id="tabs-tagged" role="tabpanel" aria-labelledby="tabs-tagged">
            <div class="mt-20">
                <img class="m-auto text-center" src="{{ asset('img/target.png') }}" alt="image saved">
            </div>
            <div class="mt-5">
                <h1 class="text-2xl font-black font-sans text-center">Fotos en las que apareces</h1>
                <p class="m-3 text-sm text-gray-800 text-center">Cuando las personas te etiqueten en fotos, aparecerán
                    aquí.</p>
            </div>
        </div>
    </div>
</x-layout>
