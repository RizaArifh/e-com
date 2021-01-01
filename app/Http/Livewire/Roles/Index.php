<?php

namespace App\Http\Livewire\Roles;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    public function render()
    {

        return view('livewire.roles.index',['permissions'=>Permission::all()]);
    }
}
