<x-layout>
    <x-slot name="page_name">Halaman Divisi / Detail</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-primary">
                <th>Id</th>
                <th>NIP</th>
                <th>Keterangan</th>
                <th>Status</th>
                <th>Data dibuat pada</th>
                <th>Data diupdate pada</th>
            </tr>
            <tr>
                <td>{{ $pengajuan->id }}</td>
                <td>{{ $pengajuan->nip }}</td>
                <td>{{ $pengajuan->ket }}</td>
                <td>{{ $pengajuan->status }}</td>
                <td>{{ $pengajuan->created_at }}</td>
                <td>{{ $pengajuan->updated_at }}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>