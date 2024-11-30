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

class Update extends Component
{
    public int $id;
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
     * @return void
     */
    public function mount(): void
    {
        $service = $this->serviceAction->find($this->id);

        $this->name = $service->name;
        $this->duration = $service->duration;
        $this->price = $service->price;
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
            $this->serviceAction->update($this->id,[
                'name' => $this->name,
                'duration' => $this->duration,
                'price' => $this->price
            ]);

            session()->flash('success', 'Serviço atualizado com sucesso');

            $this->redirect(route('services.index'));
        } catch (Throwable $t) {

            Log::error('Erro ao atualizar serviço', [$t->getMessage()]);

            $this->dispatch('notify', [
                'type' => 'error',
                'message' => 'Erro ao atualizar serviço'
            ]);
        }
    }


    #[Layout('layouts.app')]
    public function render(): View|Factory|Application
    {
        return view('livewire.services.update');
    }
}
