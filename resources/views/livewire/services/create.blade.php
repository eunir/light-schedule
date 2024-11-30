<section>
    <livewire:layout.breadcrumb view="services-create"/>

    <div class="py-12">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">

            <header>
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __('Dados do serviço') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ __("Cadastre seus serviços de forma simples e rápida") }}
                </p>
            </header>

            <div class="mt-6 space-y-6">
                <form class="w-full mx-auto">
                    <div class="relative z-0 w-full mb-5 group">
                        <x-floating-input id="floating_name" type="text" wire:model.defer="name"/>
                        <x-floating-input-label for="floating_name"> Atribua um nome ao serviço</x-floating-input-label>
                        <x-input-error :messages="$errors->get('name')" class="mt-1"/>
                    </div>

                    <div class="grid md:grid-cols-2 md:gap-6">

                        <div class="relative z-0 w-full mb-5 group">
                            <x-floating-input id="floating_time" type="time" wire:model.defer="duration"/>
                            <x-floating-input-label for="floating_time"> Quanto tempo dura a execução em média?
                            </x-floating-input-label>
                            <x-input-error :messages="$errors->get('duration')" class="mt-1"/>
                        </div>

                        <div class="relative z-0 w-full mb-5 group">
                            <x-floating-input inputmode="numeric" class="money" id="price" value="0,00"
                                              wire:model.defer="price"/>
                            <x-floating-input-label for="price"> Quanto você cobra para realizar este serviço?
                            </x-floating-input-label>
                            <x-input-error :messages="$errors->get('price')" class="mt-1"/>
                        </div>

                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button wire:click.prevent="save">{{ __('Salvar') }}</x-primary-button>

                        <x-action-message class="me-3" on="profile-updated">
                            {{ __('Atualizado.') }}
                        </x-action-message>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


