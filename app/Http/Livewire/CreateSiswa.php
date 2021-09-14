<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Siswa;

class CreateSiswa extends Component
{
    public $siswa;
    public $siswaId;
    public $action;
    public $button;

    // Getting rules for input
    protected function getRules()
    {
        $rules =
            $this->action == 'updateSiswa'
                ? [
                    'siswa.nik' => 'required|unique:nik,' . $this->siswaId,
                ]
                : [
                    'user.password' => 'required|min:8|confirmed',
                    'user.password_confirmation' => 'required', // livewire need this
                    'user.role' => 'required',
                ];

        return array_merge(
            [
                'user.name' => 'required|min:3',
                'user.email' => 'required|email|unique:users,email',
                'user.role' => 'required',
            ],
            $rules
        );
    }

    // function create siswa
    public function createSiswa()
    {
        $this->resetErrorBag();
        $this->validate();

        Siswa::create();

        $this->emit('saved');
        $this->reset('user');
    }

    // function update siswa
    public function updateSiswa()
    {
        $this->resetErrorBag();
        $this->validate();

        Siswa::query()
            ->where('id', $this->userId)
            ->update([
                'name' => $this->user->name,
                'email' => $this->user->email,
                'role' => $this->user->role,
            ]);

        $this->emit('saved');
    }

    // mounting create button
    public function mount()
    {
        if (!$this->siswa && $this->siswaId) {
            $this->siswa = Siswa::find($this->siswaId);
        }

        $this->button = create_button($this->action, 'Siswa');
    }

    // render view
    public function render()
    {
        return view('livewire.create-siswa');
    }
}
