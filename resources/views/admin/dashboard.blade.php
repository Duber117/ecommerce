<x-admin-layout>
    <div class="flex gap-6">
        <div class="bg-white rounded-lg shadow-lg p-6 flex-1">
            <div class="flex items-center">
                <div class="ml-4 flex-1 ">
                    <h2 class="text-lg font-semibold">Bienvenido, {{ auth()->user()->name }}</h2>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="text-sm hover:text-blue-500">
                            Cerrar sesion
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-6 flex-1 flex justify-center items-center">
            <h2 class="text-xl font-semibold">
                Ecommerce
            </h2>
        </div>
    </div>
</x-admin-layout>
