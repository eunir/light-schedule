<?php

namespace App\Livewire\Services;

use App\Actions\ServiceAction;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Throwable;

class Create extends Component
{

    private ServiceAction $serviceAction;
    public string $name = '';
    public string $duration = '';
    public string $price = '';

    /**
     * @param ServiceAction $serviceAction
     * @return void
     */
    public function boot(ServiceAction $serviceAction): void
    {
        $this->serviceAction = $serviceAction;
    }

    /**
     * @return string[]
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'duration' => 'required',
            'price' => 'required'
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'name.required' => 'O nome do serviço precisa ser informado',
            'name.max' => 'O nome ultrapassou o tamanho máximo de 255 caracteres',
            'duration.required' => 'Informe o tempo de duração aproximado',
            'price.required' => 'Você precisa informar o preço do serviço'
        ];
    }

    /**
     * @return void
     */
    public function save(): void
    {
        $this->validate();

        try {
            $this->serviceAction->create([
                'name' => $this->name,
                'duration' => $this->duration,
                'price' => $this->price
            ]);

            session()->flash('success', 'Serviço cadastrado com sucesso');

            $this->redirect(route('services.index'));
        } catch (Throwable $t) {

            Log::error('Erro ao salvar serviço', [$t->getMessage()]);

            $this->dispatch('notify', [
                'type' => 'error',
                'message' => 'Erro ao cadastrar novo serviço'
            ]);
        }
    }

    #[Layout('layouts.app')]
    public function render(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.services.create');
    }
}
