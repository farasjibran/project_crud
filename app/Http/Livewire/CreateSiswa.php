<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Siswa;

class CreateSiswa extends Component
{
    public $action;
    public $button;

    public function createSiswa()
    {
        $this->resetErrorBag();
        $this->validate();

        Siswa::create();

        $this->emit('saved');
        $this->reset('user');
    }

    public function render()
    {
        return view('livewire.create-siswa');
    }
}
