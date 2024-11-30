<?php

use function Livewire\Volt\{state};

$company = auth()->user()->company()->first();

state([
    'companyName' => $company->name ?? '',
    'companyEmail' => $company->email ?? '',
    'companyDocument' => $company->document ?? '',
    'companyPhone' => $company->phone ?? ''
])

?>

<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Informação da Empresa') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Dados de cadastro da minha empresa.") }}
        </p>
    </header>

    <form class="mt-6 space-y-6">
        <div>
            <x-input-label for="companyName" :value="__('Nome')" />
            <x-text-input  id="companyName" wire:model="companyName" name="companyName" type="text" class="mt-1 block w-full" required autofocus autocomplete="companyName" disabled/>
            <x-input-error class="mt-2" :messages="$errors->get('companyName')" />
        </div>

        <div>
            <x-input-label for="companyEmail" :value="__('E-mail')" />
            <x-text-input  id="companyEmail" wire:model="companyEmail" name="companyEmail" type="text" class="mt-1 block w-full" required autofocus autocomplete="companyEmail" disabled/>
            <x-input-error class="mt-2" :messages="$errors->get('companyEmail')" />
        </div>

        <div>
            <x-input-label for="companyDocument" :value="__('Documento')" />
            <x-text-input  id="companyDocument" wire:model="companyDocument" name="companyDocument" type="text" class="mt-1 block w-full" required autofocus autocomplete="companyDocument" disabled/>
            <x-input-error class="mt-2" :messages="$errors->get('companyDocument')" />
        </div>

        <div>
            <x-input-label for="companyPhone" :value="__('Telefone')" />
            <x-text-input  id="companyPhone" wire:model="companyPhone" name="companyPhone" type="text" class="mt-1 block w-full" required autofocus autocomplete="companyPhone" disabled/>
            <x-input-error class="mt-2" :messages="$errors->get('companyPhone')" />
        </div>
    </form>
</section>
