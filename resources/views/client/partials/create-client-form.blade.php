<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Crear Cliente') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Cree el nuevo cliente con la información solicitada.") }}
        </p>
    </header>

    <form method="POST" action="{{ route('clients.store') }}" class="mt-6 space-y-4" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre del cliente')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        {{-- Url Portal --}}
        <div class="mt-4">
            <x-input-label for="url_portal" :value="__('Url del cliente')" />
            <x-text-input id="url_portal" class="block mt-1 w-full" type="text" name="url_portal" :value="old('url_portal')" required autofocus autocomplete="url_portal" />
            <x-input-error :messages="$errors->get('url_portal')" class="mt-2" />
        </div>

        {{-- Contact Name & Email --}}
        <div class="flex mt-4 gap-2">
            <div>
                <x-input-label for="contact_name" :value="__('Nombre del contacto')" />
                <x-text-input id="contact_name" class="block mt-1 w-full" type="text" name="contact_name" :value="old('contact_name')" required autofocus autocomplete="contact_name" />
                <x-input-error :messages="$errors->get('contact_name')" class="mt-2" />
            </div>
            <div>
                <x-input-label for="contact_email" :value="__('Email del contacto')" />
                <x-text-input id="contact_email" class="block mt-1 w-full" type="email" name="contact_email" :value="old('contact_email')" required autocomplete="contact_email" />
                <x-input-error :messages="$errors->get('contact_email')" class="mt-2" />
            </div>
        </div>

        {{-- Contact Phone --}}
        <div class="mt-4">
            <x-input-label for="contact_phone" :value="__('Teléfono del contacto')" />
            <x-text-input id="contact_phone" class="block mt-1 w-full" type="text" name="contact_phone" :value="old('contact_phone')" required autofocus autocomplete="contact_phone" />
            <x-input-error :messages="$errors->get('contact_phone')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ms-4">
                {{ __('Crear Cliente') }}
            </x-primary-button>
        </div>
    </form>
</section>
