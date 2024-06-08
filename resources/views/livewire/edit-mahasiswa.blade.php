<div>
    @if (session('success'))
        <div class="alert alert-warning">{{ session('success') }}</div>
    @endif


    <div class="row">
        <div class="col-6">

            <div class="card">
                <div class="card-header"><h4>EDIT Mahasiswa</h4></div>
                <div class="card-body">
                    <form wire:submit.prevent="update_mahasiswa">

                    <div class="mb-3">
                        <label for="">Nama</label>
                        <input wire:model="nama" type="text" class="form-control">
                        @error('nama')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="">Foto</label>
                        <input wire:model="foto" accept="image/png, image/jpeg" type="file" class="form-control">
                        @error('foto')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
        
                    <div class="mb-3">
        
        
                        @if ($foto)
                            @if (is_object($foto) && method_exists($foto, 'temporaryUrl'))
                                <img src="{{ $foto->temporaryUrl() }}" alt="Foto Mahasiswa" class="img-thumbnail">
                            @else
                                <img src="{{ url('storage/'.$mhs->foto) }}" alt="Foto Mahasiswa" class="img-thumbnail">
                            @endif
                        @endif
                       
        
                    </div>
                    
                    <button class="btn btn-primary my-3">Update</button>
                </form>
                </div>
            </div>


        </div>
    </div>
    
</div>

