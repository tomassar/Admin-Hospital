<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img style="max-width:100px;width:10vw;margin-bottom:15px;min-width:70px;"src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/Map_Icon_-_Hospital.png/900px-Map_Icon_-_Hospital.png" alt="">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('¿Olvidaste tu contraseña? Ningún problema. Solo escribe tu email y te enviaremos un correo con un link para que resetees tu contraseña.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('ENVIAR LINK') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
