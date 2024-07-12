@use(App\Models\User)
<x-layout>
    <x-slot name="page_name">Halaman Cuti</x-slot>
    <x-slot name="page_content">
    <h2>Data Cuti</h2>

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
    <a href="{{url('dashboard/jatahcuti/create')}}" class="btn btn-primary">+ Tambah Data</a>
    @endif
    @endauth
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Tahun</th>
                <th>jumlah</th>
                <th>NIP</th>
                <th>Aksi</th>
            </tr>
            @foreach ($list_jatahcuti as $jatahcuti)
            <tr>
                <td>{{ $jatahcuti->tahun }}</td>
                <td>{{ $jatahcuti->jumlah }}</td>
                <td>{{ $jatahcuti->nip }}</td>
                <td>
                    <a href="{{url('dashboard/jatahcuti/show', $jatahcuti->id)}}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a> |
                    @Auth
                    @if (Auth::user()->role == User:: ROLE_ADMIN)
                    <a href="{{url('dashboard/jatahcuti/edit', $jatahcuti->id)}}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a> |
                    <form action="{{url('dashboard/jatahcuti/destroy', $jatahcuti->id)}}" method="post" class="d-inline">
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