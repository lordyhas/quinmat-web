<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tableau de bord') ." | ". config('app.name') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl"><b>{{ __("Les produits enregistrés") }}</b></h3>
                    <br>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni quos esse tenetur illo
                        qui, nostrum ipsum dolor sit amet, consectetur adipisicing elit. Magni quos esse tenetur illo
                    </p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
