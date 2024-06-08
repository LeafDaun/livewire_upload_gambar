<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ShowMahasiswa extends Component
{
 
   
    public function hapus($id)
    {   
        $image = Mahasiswa::find($id);
        Storage::disk('public')->delete($image->foto);
        Mahasiswa::destroy($id);
    }

    public function render()
    {
        return view('livewire.show-mahasiswa', [
            'mahasiswa' => Mahasiswa::all(),
        ]);
    }
}
