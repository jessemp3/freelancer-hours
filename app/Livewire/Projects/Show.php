<?php

namespace App\Livewire\Projects;

use App\Models\projects;
use Livewire\Component;

class Show extends Component
{

    public projects $project;


    public function render()
    {
        return view('livewire.projects.show');
    }
}
