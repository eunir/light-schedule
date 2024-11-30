<section>

    <livewire:layout.breadcrumb view="services"/>

    <div class="py-12">
        <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">

            <header class="gap-1.5">
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __('Serviços') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ __("Cadastre seus serviços de forma simples e rápida") }}
                </p>

                <x-create-link href="{{ route('services.create') }}" class="float-end mt-2 mb-2">
                    {{ __('Novo serviço') }}
                </x-create-link>
            </header>

            <div class="mt-6 mb-1.5 gap-1.5 flex w-full content-between flex-col xl:flex-row">
                @foreach($serviceList as $item)
                    <div
                        class="p-3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-full xl:w-4/12">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $item->name }}</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Duração: {{ $item->duration }}</p>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Preço: R$ {{ $item->price }}</p>

                        <div class="flex w-full flex-col md:flex-row opacity-75 justify-end">
                            <x-edit-button href="{{ route('services.update', $item->id) }}"></x-edit-button>
                            <x-remove-button
                                wire:click.prevent="setDeletingId({{ $item->id }})">
                            </x-remove-button>
                        </div>
                    </div>
                @endforeach

            </div>
            {{ $serviceList->links() }}
        </div>

        <x-modal name="confirm-service-deletion" :show="$errors->isNotEmpty()" focusable>
            <form wire:submit="delete" class="p-6">

                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __('Tem certeza de que deseja excluir este serviço?') }}
                </h2>

                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('O serviço será removido de forma permanente, e todo o seu histórico será perdido.') }}
                </p>

                <div class="mt-6 flex justify-end">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        {{ __('Cancelar') }}
                    </x-secondary-button>

                    <x-danger-button class="ms-3" x-on:click="$dispatch('close')">
                        {{ __('Deletar o serviço de forma permanente') }}
                    </x-danger-button>
                </div>
            </form>
        </x-modal>
    </div>

</section>
