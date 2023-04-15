<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tableau de bord') ." | ". config('app.name') }}
        </h2>
    </x-slot>

    <div class="py-2 mt-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="card mb-3 mt-3">
                        <img class="rounded-circle flex-wrap w-20 h-20"
                             src="{{asset("assets/imgs/avatar_1.png")}}" alt="profile images">
                    </div>
                    <div class="mb-3 mt-3 text-gray-900 dark:text-gray-100">
                        {{ Auth::user()->first_name ." ". Auth::user()->name }} <br>
                        {{Auth::user()->email}}
                    </div>
                    <hr>
                    @if(Auth::user()->is_authorized)
                        <div class="mb-3 mt-3 text-gray-900 dark:text-gray-100">
                            Niveau d'autorisation : {{Auth::user()->level}}
                        </div>
                    @else
                        <div class="mb-3 mt-3 text-gray-900 dark:text-gray-100">
                            Veuillez contacter l’<b>administrateur</b> pour obtenir les autorisations nécessaires
                            afin d’accéder aux ressources du site web. <br>
                            Pour des raisons de sécurité, sans les autorisations nécessaires,
                            ce compte sera automatiquement supprimé dans les 24 heures qui suivent.
                        </div>

                    @endif


                </div>

            </div>
        </div>
    </div>
    <div class="py-2">
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
