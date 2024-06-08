<?php

namespace App\Livewire;

use App\Models\Mahasiswa;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateMahasiswa extends Component
{
    use WithFileUploads;
    
    public $nama;

    public $foto;

    public function create_mahasiswa()
    {
        $validated = $this->validate([
            'nama' => 'required',
            'foto' => 'required|image|sometimes|max:1024',
        ]);

        if($this->foto){
            $validated['foto'] = $this->foto->store('uploads', 'public');
        }

        Mahasiswa::create($validated);

        session()->flash('success', 'berhasil dibuat..');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.create-mahasiswa');
    }
}
