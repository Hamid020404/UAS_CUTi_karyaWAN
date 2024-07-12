@use(App\Models\User)
<x-layout>
    <x-slot name="page_name">Halaman Pengajuan</x-slot>
    <x-slot name="page_content">
    <h2>Data Pengajuan</h2>

    @if (session('pesan'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session('pesan') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif  

    <a href="{{url('dashboard/pengajuan/create')}}" class="btn btn-primary">+ Tambah Pengajuan</a>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Tanggal Awal</th>
                <th>Tanggal Akhir</th>
                <th>jumlah</th>
                <th>keterangan</th>
                <th>status</th>
                <th>NIP</th>
                <th>Aksi</th>
            </tr>
            @foreach ($list_pengajuan as $pengajuan)
            <tr>
                <td>{{ $pengajuan->tanggal_awal }}</td>
                <td>{{ $pengajuan->tanggal_akhir }}</td>
                <td>{{ $pengajuan->jumlah }}</td>
                <td>{{ $pengajuan->ket }}</td>
                <td>{{ $pengajuan->status }}</td>
                <td>{{ $pengajuan->nip }}</td>
                <td>
                    <a href="{{url('dashboard/pengajuan/show', $pengajuan->id)}}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a> |
                    <a href="{{url('dashboard/pengajuan/edit', $pengajuan->id)}}" class="btn btn-warning"><i class="far fa-edit"></i> Edit</a> |
                    @Auth
                    @if (Auth::user()->role == User:: ROLE_ADMIN)
                    <form action="{{url('dashboard/pengajuan/destroy', $pengajuan->id)}}" method="post" class="d-inline">
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