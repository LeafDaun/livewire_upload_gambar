<div>
    @if (session('success'))
        <div class="alert alert-warning">{{ session('success') }}</div>
    @endif

<h3>Show Mahasiswa</h3>
<a wire:navigate class="btn btn-primary my-3" href="/create">Tambah Baru</a>
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Foto</th>
        <th>Aksi</th>
    </tr>
    @foreach ($mahasiswa as $mhs)

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $mhs->nama }}</td>
            <td><img  src="{{ asset('storage/'. $mhs->foto)}}" alt="" style="width:100px;height:100px;"></td>
            <td>
                <a wire:navigate class="btn btn-warning btn-sm" href="{{ $mhs->id }}/edit">Edit</a>
                <button wire:click="hapus({{ $mhs->id }})" class="btn btn-danger btn-sm">Delete</button>
            </td>
            
        </tr>
    @endforeach
</table>
</div>
