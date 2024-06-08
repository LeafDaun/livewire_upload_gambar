<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Mahasiswa;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditMahasiswa extends Component
{
    use WithFileUploads;

    public $mhs;
    public $nama;
    public $foto;

    public function mount(Mahasiswa $mhs)
    {
        $this->mhs = $mhs;
        $this->nama = $mhs->nama;
        $this->foto = $mhs->foto;
    }

    public function update_mahasiswa()
    {
        $validated = $this->validate([
            'nama' => 'required',
            'foto' => 'required|image|sometimes|max:1024',
        ]);

        if($this->foto){
            Storage::disk('public')->delete($this->mhs->foto);
            $validated['foto'] = $this->foto->store('uploads', 'public');
        }

        $this->mhs->update($validated);

        redirect('/')->with('success', 'berhasil di UPDATE..');
        $this->reset();
    }


    public function render()
    {
        return view('livewire.edit-mahasiswa');
    }
}
