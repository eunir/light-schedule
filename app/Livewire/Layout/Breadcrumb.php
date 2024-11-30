<?php

namespace App\Livewire\Layout;

use Livewire\Component;

class Breadcrumb extends Component
{
    public string $view = '';
    public array $links = [];

    protected array $viewLinks = [
        'services' => [
            [
                'label' => 'Serviços',
                'href' => '#',
                'active' => true
            ]
        ],
        'services-create' => [
            [
                'label' => 'Serviços',
                'href' => 'services.index',
                'active' => false
            ],
            [
                'label' => 'Cadastro',
                'href' => '#',
                'active' => true
            ]
        ],
        'services-update' => [
            [
                'label' => 'Serviços',
                'href' => 'services.index',
                'active' => false
            ],
            [
                'label' => 'Atualizar',
                'href' => '#',
                'active' => true
            ]
        ],
        'companies-update' => [
            [
                'label' => 'Meus dados',
                'href' => '#',
                'active' => true
            ]
        ]
    ];

    public function mount()
    {
        $this->links = $this->viewLinks[$this->view];
    }

    public function render()
    {
        return view('livewire.layout.breadcrumb');
    }
}
