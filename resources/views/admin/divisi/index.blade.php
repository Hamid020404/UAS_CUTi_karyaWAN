@use(App\Models\User)
<x-layout>
    <x-slot name="page_name">Halaman Divisi</x-slot>
    <x-slot name="page_content">
    <h2>Data Divisi</h2>

    @if (session('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('pesan') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif  
    
    @Auth
    @if (Auth::user()->role == User:: ROLE_ADMIN)
    <a href="{{url('dashboard/divisi/create')}}" class="btn btn-primary">+ Tambah Divisi</a>
    @endif
    @endauth
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Kode</th>
                <th>Nama</th>
                <th>Manager</th>
                <th>Aksi</th>
            </tr>
            @foreach ($list_divisi as $divisi)
            <tr>
                <td>{{ $divisi->kode }}</td>
                <td>{{ $divisi->nama }}</td>
                <td>{{ $divisi->manager }}</td>
                <td>
                    <a href="{{url('dashboard/divisi/show', $divisi->id)}}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a> |
                    @Auth
                    @if (Auth::user()->role == User:: ROLE_ADMIN)
                    <a href="{{url('dashboard/divisi/edit', $divisi->id)}}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a> |
                    <form action="{{url('dashboard/divisi/destroy', $divisi->id)}}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')"><i class="far fa-trash-alt"></i>Hapus</button>
                    </form>
                    </td>
                    @endif
                    @endauth
                </tr>

            
            @endforeach
        </table>
    </x-slot>
</x-layout>