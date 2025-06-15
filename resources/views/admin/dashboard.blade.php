<x-admin-layout>
    <div class="flex gap-6">
        <div class="bg-white dark:bg-zinc-800 rounded-lg shadow-lg p-6 flex-1">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-semibold text-zinc-900 dark:text-zinc-100">
                        {{ __('Welcome') }}, {{ auth()->user()->name }}
                    </h2>
                </div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <flux:button type="submit">{{ __('Logout') }}</flux:button>
                </form>
            </div>
        </div>
        <div class="bg-white dark:bg-zinc-800 rounded-lg shadow-lg p-6 flex-1 flex justify-center items-center">
            <h2 class="text-xl font-semibold text-zinc-900 dark:text-zinc-100">
                {{ __('Ecommerce') }}
            </h2>
        </div>
    </div>
</x-admin-layout>
