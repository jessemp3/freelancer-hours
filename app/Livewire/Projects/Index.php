<?php

namespace App\Livewire\Projects;

use App\Models\projects;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.projects.index');
    }

    #[Computed()]
    public function projects()
    {
        return projects::query()->inRandomOrder()->get();
    }
}
