<x-mi-layout>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="I5ezS8IqPF1RONrBQnfWMMdlNsr9m412gBz2GDJm">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&amp;display=swap" rel="stylesheet">

        <!-- Scripts -->
        <link href="{{ asset('assets/css/editarPerfil.css')}}" rel="stylesheet">
        <!-- Styles -->
        <!-- Livewire Styles --><style>[wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {display:none;}[wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}[x-cloak] {display: none;}</style>
        @livewireScripts
    </head>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

        <div 
        wire:snapshot="{&quot;data&quot;:{&quot;state&quot;:[{&quot;email&quot;:&quot;ejemplo@gmail.com&quot;,&quot;id&quot;:1,&quot;name&quot;:&quot;Daniel Mart\u00ednez&quot;,&quot;email_verified_at&quot;:null,&quot;two_factor_confirmed_at&quot;:null,&quot;current_team_id&quot;:1,&quot;profile_photo_path&quot;:null,&quot;created_at&quot;:&quot;2023-10-17T21:07:42.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-10-17T21:58:04.000000Z&quot;,&quot;profile_photo_url&quot;:&quot;https:\/\/ui-avatars.com\/api\/?name=D+M&amp;color=7F9CF5&amp;background=EBF4FF&quot;},{&quot;s&quot;:&quot;arr&quot;}],&quot;photo&quot;:null,&quot;verificationLinkSent&quot;:false},&quot;memo&quot;:{&quot;id&quot;:&quot;6IVvFdOn9iZHTTQoEKbs&quot;,&quot;name&quot;:&quot;profile.update-profile-information-form&quot;,&quot;path&quot;:&quot;user\/profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;es&quot;},&quot;checksum&quot;:&quot;75b1900a9d13bd82e8b921bfed6c8a8938bc13d9796dcd936836a154fd724a37&quot;}" 
        wire:effects="[]" wire:id="6IVvFdOn9iZHTTQoEKbs" class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1 flex justify-between w-[20]">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Información de perfil</h3>

                    <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                        Actualice la información de su cuenta y la dirección de correo electrónico.
                    </p>
                </div>

                <div class="px-4 sm:px-0">
                </div>
            </div>

            <div class="mt-5 md:mt-0 md:col-span-2 w-4/5">
                <form wire:submit="updateProfileInformation">
                    <div class="px-4 py-5 bg-white dark:bg-gray-800 sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                        <div class="grid grid-cols-6 gap-6">
                            <!-- Profile Photo -->
                            <!-- __BLOCK__ --> <!-- __ENDBLOCK__ -->

                            <!-- Name -->
                            <div class="col-span-6 sm:col-span-4">
                                <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="name">
                                    Nombre
                                </label>
                                <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" id="name" type="text" wire:model="state.name" required="required" autocomplete="name">
                                <!-- __BLOCK__ --> <!-- __ENDBLOCK__ -->
                            </div>

                            <!-- Email -->
                            <div class="col-span-6 sm:col-span-4">
                                <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="email">
                                Correo electrónico
                                </label>
                                <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" id="email" type="email" wire:model="state.email" required="required" autocomplete="username">
                                <!-- __BLOCK__ --> <!-- __ENDBLOCK__ -->

                                <!-- __BLOCK__ --> <!-- __ENDBLOCK__ -->
                            </div>
                        </div>
                    </div>

                    <!-- __BLOCK__ -->          
                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 dark:bg-gray-800 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                        <div x-data="{ shown: false, timeout: null }" x-init="window.Livewire.find('6IVvFdOn9iZHTTQoEKbs').on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000); })" x-show.transition.out.opacity.duration.1500ms="shown" x-transition:leave.opacity.duration.1500ms="" style="display: none;" class="text-sm text-gray-600 dark:text-gray-400 mr-3">
                            Guardado.
                        </div>

                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150" wire:loading.attr="disabled" wire:target="photo">
                            Guardar
                        </button>
                    </div>
                    <!-- __ENDBLOCK__ -->
                </form>
            </div>
        </div>

        <div class="hidden sm:block">
        <div class="py-8">
        <div class="border-t border-gray-200 dark:border-gray-700"></div>
        </div>
        </div>

        <div class="mt-10 sm:mt-0">
        <div wire:snapshot="{&quot;data&quot;:{&quot;state&quot;:[{&quot;current_password&quot;:&quot;&quot;,&quot;password&quot;:&quot;&quot;,&quot;password_confirmation&quot;:&quot;&quot;},{&quot;s&quot;:&quot;arr&quot;}]},&quot;memo&quot;:{&quot;id&quot;:&quot;kgoDSi7ZX3EPXj9bkAEa&quot;,&quot;name&quot;:&quot;profile.update-password-form&quot;,&quot;path&quot;:&quot;user\/profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;es&quot;},&quot;checksum&quot;:&quot;275b3ae11698bacde41cafe0e85b09c448ee80ff19b69012c3974a53df77f2ef&quot;}" wire:effects="[]" wire:id="kgoDSi7ZX3EPXj9bkAEa" class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1 flex justify-between">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Actualizar contraseña</h3>

                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    Asegúrese que su cuenta esté usando una contraseña larga y aleatoria para mantenerse seguro.
                </p>
            </div>

            <div class="px-4 sm:px-0">

            </div>
        </div>

            <div class="mt-5 md:mt-0 md:col-span-2">
                <form wire:submit="updatePassword">
                    <div class="px-4 py-5 bg-white dark:bg-gray-800 sm:p-6 shadow sm:rounded-tl-md sm:rounded-tr-md">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-4">
                                <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="current_password">
                                    Contraseña actual
                                </label>
                                <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" id="current_password" type="password" wire:model="state.current_password" autocomplete="current-password">
                                <!-- __BLOCK__ --> <!-- __ENDBLOCK__ -->
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="password">
                                Nueva Contraseña
                                </label>
                                <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" id="password" type="password" wire:model="state.password" autocomplete="new-password">
                                <!-- __BLOCK__ --> <!-- __ENDBLOCK__ -->
                            </div>

                            <div class="col-span-6 sm:col-span-4">
                                <label class="block font-medium text-sm text-gray-700 dark:text-gray-300" for="password_confirmation">
                                Confirmar contraseña
                                </label>
                                <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" id="password_confirmation" type="password" wire:model="state.password_confirmation" autocomplete="new-password">
                                <!-- __BLOCK__ --> <!-- __ENDBLOCK__ -->
                            </div>
                        </div>
                    </div>

                    <!-- __BLOCK__ -->                
                    <div class="flex items-center justify-end px-4 py-3 bg-gray-50 dark:bg-gray-800 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
                        <div x-data="{ shown: false, timeout: null }" x-init="window.Livewire.find('kgoDSi7ZX3EPXj9bkAEa').on('saved', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000); })" x-show.transition.out.opacity.duration.1500ms="shown" x-transition:leave.opacity.duration.1500ms="" style="display: none;" class="text-sm text-gray-600 dark:text-gray-400 mr-3">
                            Guardado.
                        </div>

                        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            Guardar
                        </button>
                    </div>
                    <!-- __ENDBLOCK__ -->
                </form>
            </div>
        </div>
        </div>

</x-mi-layout>