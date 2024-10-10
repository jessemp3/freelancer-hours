<?php

namespace App\Livewire\Projects;

use App\Models\projects;
use Livewire\Component;

class Proposals extends Component
{

    public projects $project;


    public function render()
    {
        return view('livewire.projects.proposals');
    }
}
