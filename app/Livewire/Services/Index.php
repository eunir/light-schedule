<?php

namespace App\Livewire\Services;

use App\Actions\ServiceAction;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use Throwable;

class Index extends Component
{
    use WithPagination;
    protected ServiceAction $serviceAction;
    public int|null $deletingId = null;

    /**
     * @param ServiceAction $serviceAction
     * @return void
     */
    public function boot(ServiceAction $serviceAction): void
    {
        $this->serviceAction = $serviceAction;

        if (session()->has('success')) {
            $this->dispatch('notify', [
                'type' => 'success',
                'message' => session('success')
            ]);
        }
    }

    /**
     * @param int $id
     * @return void
     */
    public function setDeletingId(int $id): void
    {
        $this->deletingId = $id;

        $this->dispatch('open-modal', 'confirm-service-deletion');
    }

    /**
     * @return void
     */
    public function delete(): void
    {
        try {
            $this->serviceAction->delete($this->deletingId);
            $this->deletingId = null;

            $this->dispatch('notify', [
                'type' => 'success',
                'message' => 'Serviço removido com sucesso'
            ]);

        } catch (Throwable $t) {

            Log::error('Erro ao remover serviço', [$t->getMessage()]);

            $this->dispatch('notify', [
                'type' => 'error',
                'message' => 'Erro ao remover serviço'
            ]);
        }
    }

    #[Layout('layouts.app')]
    public function render(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $serviceList = $this->serviceAction->index();
        return view('livewire.services.index', compact('serviceList'));
    }

}
