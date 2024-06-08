<div>
    @if (session('success'))
        <div class="alert alert-warning">{{ session('success') }}</div>
    @endif


    <div class="row">
        <div class="col-6">

            <div class="card">
                <div class="card-header"><h4>Create Mahasiswa</h4></div>
                <div class="card-body">
                    <form wire:submit.prevent="create_mahasiswa">

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
                            <img src="{{ $foto->temporaryUrl() }}" class="rounded img-thumbnail" alt="">
                        @endif
        
                    </div>
                    
                    <button class="btn btn-primary my-3">Simpan</button>
                </form>
                </div>
            </div>


        </div>
    </div>
    
</div>
