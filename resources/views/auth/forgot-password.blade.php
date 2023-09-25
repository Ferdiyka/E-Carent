<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-logo-login />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Anda lupa password Anda? Apalagi saya. Tenang tidak perlu panik. Coba diingat-ingat kembali') }}
        </div>

        @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="flex items-center justify-end mt-4">
        <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
            {{ __('Developer Sialan') }}
        </a>
    </div>

        </form>
    </x-authentication-card>
</x-guest-layout>
