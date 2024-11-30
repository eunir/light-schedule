<?php

use App\Livewire\Actions\Logout;

$logout = function (Logout $logout) {
    $logout();

    $this->redirect('/', navigate: true);
};

?>

<div
    class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
    id="dropdown-user">
    <div class="px-4 py-3" role="none">
        <p class="text-sm text-gray-900 dark:text-white" role="none">
            {{ auth()->user()->name }}
        </p>
        <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
            {{ auth()->user()->email }}
        </p>
    </div>
    <ul class="py-1" role="none">
        <li>
            <x-responsive-nav-link :href="route('profile')" wire:navigate>
                {{ __('Perfil') }}
            </x-responsive-nav-link>
        </li>
        <li>
            <!-- Authentication -->
            <button wire:click="logout" class="w-full text-start">
                <x-responsive-nav-link>
                    {{ __('Sair') }}
                </x-responsive-nav-link>
            </button>
        </li>
    </ul>
</div>

