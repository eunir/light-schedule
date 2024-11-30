<?php

namespace App\Livewire\Companies;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Update extends Component
{

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.companies.update');
    }
}
