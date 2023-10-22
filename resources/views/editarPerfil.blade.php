<x-mi-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div wire:snapshot="{&quot;data&quot;:{&quot;state&quot;:[{&quot;email&quot;:&quot;ejemplo@gmail.com&quot;,&quot;id&quot;:1,&quot;name&quot;:&quot;Daniel Mart\u00ednez&quot;,&quot;email_verified_at&quot;:null,&quot;two_factor_confirmed_at&quot;:null,&quot;current_team_id&quot;:1,&quot;profile_photo_path&quot;:null,&quot;created_at&quot;:&quot;2023-10-17T21:07:42.000000Z&quot;,&quot;updated_at&quot;:&quot;2023-10-17T21:58:04.000000Z&quot;,&quot;profile_photo_url&quot;:&quot;https:\/\/ui-avatars.com\/api\/?name=D+M&amp;color=7F9CF5&amp;background=EBF4FF&quot;},{&quot;s&quot;:&quot;arr&quot;}],&quot;photo&quot;:null,&quot;verificationLinkSent&quot;:false},&quot;memo&quot;:{&quot;id&quot;:&quot;6IVvFdOn9iZHTTQoEKbs&quot;,&quot;name&quot;:&quot;profile.update-profile-information-form&quot;,&quot;path&quot;:&quot;user\/profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;es&quot;},&quot;checksum&quot;:&quot;75b1900a9d13bd82e8b921bfed6c8a8938bc13d9796dcd936836a154fd724a37&quot;}" wire:effects="[]" wire:id="6IVvFdOn9iZHTTQoEKbs" class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1 flex justify-between">
        <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Información de perfil</h3>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
        Actualice la información de su cuenta y la dirección de correo electrónico.
        </p>
        </div>

        <div class="px-4 sm:px-0">

        </div>
        </div>

        <div class="mt-5 md:mt-0 md:col-span-2">
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

        <!-- __BLOCK__ -->                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 dark:bg-gray-800 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
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

        <!-- __BLOCK__ -->                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 dark:bg-gray-800 text-right sm:px-6 shadow sm:rounded-bl-md sm:rounded-br-md">
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

        <div class="hidden sm:block">
        <div class="py-8">
        <div class="border-t border-gray-200 dark:border-gray-700"></div>
        </div>
        </div>

                <div class="mt-10 sm:mt-0">
        <div wire:snapshot="{&quot;data&quot;:{&quot;showingQrCode&quot;:false,&quot;showingConfirmation&quot;:false,&quot;showingRecoveryCodes&quot;:false,&quot;code&quot;:null,&quot;confirmingPassword&quot;:false,&quot;confirmableId&quot;:null,&quot;confirmablePassword&quot;:&quot;&quot;},&quot;memo&quot;:{&quot;id&quot;:&quot;KUgVNeiYlKYW99GgXrUW&quot;,&quot;name&quot;:&quot;profile.two-factor-authentication-form&quot;,&quot;path&quot;:&quot;user\/profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;es&quot;},&quot;checksum&quot;:&quot;83c2ca595a3184f909c955a61b740a0e7655dd13ca7c6de32a6a4623946fcba1&quot;}" wire:effects="[]" wire:id="KUgVNeiYlKYW99GgXrUW" class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1 flex justify-between">
        <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Autenticación de dos factores</h3>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
        Agregue seguridad adicional a su cuenta mediante la autenticación de dos factores.
        </p>
        </div>

        <div class="px-4 sm:px-0">

        </div>
        </div>

        <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 sm:p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">
        <!-- __BLOCK__ -->                No ha habilitado la autenticación de dos factores.
        <!-- __ENDBLOCK__ -->
        </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-600 dark:text-gray-400">
        <p>
        Cuando la autenticación de dos factores esté habilitada, le pediremos un token aleatorio seguro durante la autenticación. Puede recuperar este token desde la aplicación Google Authenticator de su teléfono.
        </p>
        </div>

        <!-- __BLOCK__ --> <!-- __ENDBLOCK__ -->

        <div class="mt-5">
        <!-- __BLOCK__ -->                <span wire:then="enableTwoFactorAuthentication" x-data="" x-ref="span" x-on:click="$wire.startConfirmingPassword('ab2d1de5297198533ed96f794eb99eac')" x-on:password-confirmed.window="setTimeout(() => $event.detail.id === 'ab2d1de5297198533ed96f794eb99eac' &amp;&amp; $refs.span.dispatchEvent(new CustomEvent('then', { bubbles: false })), 250);">
        <button type="button" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150" wire:loading.attr="disabled">
        Habilitar
        </button>
        </span>

        <div x-data="{ show: window.Livewire.find('KUgVNeiYlKYW99GgXrUW').entangle('confirmingPassword').live }" x-on:close.stop="show = false" x-on:keydown.escape.window="show = false" x-show="show" id="506a8cb247bad8f18658bdb3f794fabc" class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50" style="display: none;">
        <div x-show="show" class="fixed inset-0 transform transition-all" x-on:click="show = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display: none;">
        <div class="absolute inset-0 bg-gray-500 dark:bg-gray-900 opacity-75"></div>
        </div>

        <div x-show="show" class="mb-6 bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-2xl sm:mx-auto" x-trap.inert.noscroll="show" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" style="display: none;">
        <div class="px-6 py-4">
        <div class="text-lg font-medium text-gray-900 dark:text-gray-100">
        Confirmar contraseña
        </div>

        <div class="mt-4 text-sm text-gray-600 dark:text-gray-400">
        Por su seguridad, confirme su contraseña para continuar.

        <div class="mt-4" x-data="{}" x-on:confirming-password.window="setTimeout(() => $refs.confirmable_password.focus(), 250)">
        <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-3/4" type="password" placeholder="Contraseña" autocomplete="current-password" x-ref="confirmable_password" wire:model="confirmablePassword" wire:keydown.enter="confirmPassword">

        <!-- __BLOCK__ --> <!-- __ENDBLOCK__ -->
        </div>
        </div>
        </div>

        <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 dark:bg-gray-800 text-right">
        <button type="button" class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150" wire:click="stopConfirmingPassword" wire:loading.attr="disabled">
        Cancelar
        </button>

        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 ml-3" dusk="confirm-password-button" wire:click="confirmPassword" wire:loading.attr="disabled">
        Confirmar
        </button>
        </div>
        </div>
        </div>
        <!-- __ENDBLOCK__ -->
        </div>
        </div>
        </div>
        </div>
        </div>

        <div class="hidden sm:block">
        <div class="py-8">
        <div class="border-t border-gray-200 dark:border-gray-700"></div>
        </div>
        </div>

        <div class="mt-10 sm:mt-0">
        <div wire:snapshot="{&quot;data&quot;:{&quot;confirmingLogout&quot;:false,&quot;password&quot;:&quot;&quot;},&quot;memo&quot;:{&quot;id&quot;:&quot;5Pqf1sqvrOzkUTyVxPMz&quot;,&quot;name&quot;:&quot;profile.logout-other-browser-sessions-form&quot;,&quot;path&quot;:&quot;user\/profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;es&quot;},&quot;checksum&quot;:&quot;e584f293b675c22c59de8b472fcca8cc62eaba658802a46ba8ac43d01d9e1835&quot;}" wire:effects="[]" wire:id="5Pqf1sqvrOzkUTyVxPMz" class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1 flex justify-between">
        <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Sesiones del navegador</h3>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
        Administre y cierre sus sesiones activas en otros navegadores y dispositivos.
        </p>
        </div>

        <div class="px-4 sm:px-0">

        </div>
        </div>

        <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 sm:p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
        <div class="max-w-xl text-sm text-gray-600 dark:text-gray-400">
        Si es necesario, puede salir de todas las demás sesiones de otros navegadores en todos sus dispositivos. Algunas de sus sesiones recientes se enumeran a continuación; sin embargo, es posible que esta lista no sea exhaustiva. Si cree que su cuenta se ha visto comprometida, también debería actualizar su contraseña.
        </div>

        <div class="mt-5 space-y-6">
        <!-- Other Browser Sessions -->
        <!-- __BLOCK__ -->                    <div class="flex items-center">
            <div>
                <!-- __BLOCK__ -->                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25"></path>
                    </svg>
                <!-- __ENDBLOCK__ -->
            </div>

            <div class="ml-3">
                <div class="text-sm text-gray-600 dark:text-gray-400">
                    Windows - Chrome
                </div>

                <div>
                    <div class="text-xs text-gray-500">
                        127.0.0.1,

                        <!-- __BLOCK__ -->                                        <span class="text-green-500 font-semibold">Este dispositivo</span>
                        <!-- __ENDBLOCK__ -->
                    </div>
                </div>
            </div>
        </div>
        <!-- __ENDBLOCK__ -->
        </div>
        <!-- __ENDBLOCK__ -->

        <div class="flex items-center mt-5">
        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150" wire:click="confirmLogout" wire:loading.attr="disabled">
        Cerrar las demás sesiones
        </button>

        <div x-data="{ shown: false, timeout: null }" x-init="window.Livewire.find('5Pqf1sqvrOzkUTyVxPMz').on('loggedOut', () => { clearTimeout(timeout); shown = true; timeout = setTimeout(() => { shown = false }, 2000); })" x-show.transition.out.opacity.duration.1500ms="shown" x-transition:leave.opacity.duration.1500ms="" style="display: none;" class="text-sm text-gray-600 dark:text-gray-400 ml-3">
        Hecho.
        </div>
        </div>

        <!-- Log Out Other Devices Confirmation Modal -->
        <div x-data="{ show: window.Livewire.find('5Pqf1sqvrOzkUTyVxPMz').entangle('confirmingLogout').live }" x-on:close.stop="show = false" x-on:keydown.escape.window="show = false" x-show="show" id="7bfef3bbc87b550e8528db202ce06cfb" class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50" style="display: none;">
        <div x-show="show" class="fixed inset-0 transform transition-all" x-on:click="show = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display: none;">
        <div class="absolute inset-0 bg-gray-500 dark:bg-gray-900 opacity-75"></div>
        </div>

        <div x-show="show" class="mb-6 bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-2xl sm:mx-auto" x-trap.inert.noscroll="show" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" style="display: none;">
        <div class="px-6 py-4">
        <div class="text-lg font-medium text-gray-900 dark:text-gray-100">
        Cerrar las demás sesiones
        </div>

        <div class="mt-4 text-sm text-gray-600 dark:text-gray-400">
        Por favor ingrese su contraseña para confirmar que desea cerrar las demás sesiones de otros navegadores en todos sus dispositivos.

        <div class="mt-4" x-data="{}" x-on:confirming-logout-other-browser-sessions.window="setTimeout(() => $refs.password.focus(), 250)">
        <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-3/4" type="password" autocomplete="current-password" placeholder="Contraseña" x-ref="password" wire:model="password" wire:keydown.enter="logoutOtherBrowserSessions">

        <!-- __BLOCK__ --> <!-- __ENDBLOCK__ -->
        </div>
        </div>
        </div>

        <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 dark:bg-gray-800 text-right">
        <button type="button" class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150" wire:click="$toggle('confirmingLogout')" wire:loading.attr="disabled">
        Cancelar
        </button>

        <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 ml-3" wire:click="logoutOtherBrowserSessions" wire:loading.attr="disabled">
        Cerrar las demás sesiones
        </button>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>

                <div class="hidden sm:block">
        <div class="py-8">
        <div class="border-t border-gray-200 dark:border-gray-700"></div>
        </div>
        </div>

        <div class="mt-10 sm:mt-0">
        <div wire:snapshot="{&quot;data&quot;:{&quot;confirmingUserDeletion&quot;:false,&quot;password&quot;:&quot;&quot;},&quot;memo&quot;:{&quot;id&quot;:&quot;mQj8biHOYXFJB2CEhRKy&quot;,&quot;name&quot;:&quot;profile.delete-user-form&quot;,&quot;path&quot;:&quot;user\/profile&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;es&quot;},&quot;checksum&quot;:&quot;828fd2228d9a337553f4ea137ad1c0059db1978db4c8489bc2652f746ac0f690&quot;}" wire:effects="[]" wire:id="mQj8biHOYXFJB2CEhRKy" class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1 flex justify-between">
        <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium text-gray-900 dark:text-gray-100">Borrar cuenta</h3>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
        Eliminar su cuenta de forma permanente.
        </p>
        </div>

        <div class="px-4 sm:px-0">

        </div>
        </div>

        <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 sm:p-6 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
        <div class="max-w-xl text-sm text-gray-600 dark:text-gray-400">
        Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán de forma permanente. Antes de borrar su cuenta, por favor descargue cualquier dato o información que desee conservar.
        </div>

        <div class="mt-5">
        <button type="button" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150" wire:click="confirmUserDeletion" wire:loading.attr="disabled">
        Borrar cuenta
        </button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <div x-data="{ show: window.Livewire.find('mQj8biHOYXFJB2CEhRKy').entangle('confirmingUserDeletion').live }" x-on:close.stop="show = false" x-on:keydown.escape.window="show = false" x-show="show" id="36ac91a8122577c7b197539ebb1a5123" class="jetstream-modal fixed inset-0 overflow-y-auto px-4 py-6 sm:px-0 z-50" style="display: none;">
        <div x-show="show" class="fixed inset-0 transform transition-all" x-on:click="show = false" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" style="display: none;">
        <div class="absolute inset-0 bg-gray-500 dark:bg-gray-900 opacity-75"></div>
        </div>

        <div x-show="show" class="mb-6 bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-xl transform transition-all sm:w-full sm:max-w-2xl sm:mx-auto" x-trap.inert.noscroll="show" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" style="display: none;">
        <div class="px-6 py-4">
        <div class="text-lg font-medium text-gray-900 dark:text-gray-100">
        Borrar cuenta
        </div>

        <div class="mt-4 text-sm text-gray-600 dark:text-gray-400">
        ¿Está seguro que desea eliminar su cuenta? Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán de forma permanente. Ingrese su contraseña para confirmar que desea eliminar su cuenta de forma permanente.

        <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
        <input class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-3/4" type="password" autocomplete="current-password" placeholder="Contraseña" x-ref="password" wire:model="password" wire:keydown.enter="deleteUser">

        <!-- __BLOCK__ --> <!-- __ENDBLOCK__ -->
        </div>
        </div>
        </div>

        <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 dark:bg-gray-800 text-right">
        <button type="button" class="inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150" wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
        Cancelar
        </button>

        <button type="button" class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 ml-3" wire:click="deleteUser" wire:loading.attr="disabled">
        Borrar cuenta
        </button>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
</x-mi-layout>