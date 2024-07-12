<x-layout>
    <x-slot name="page_name">Halaman Pegawai / Detail</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-primary">
                <th>NIP</th>
                <th>Gender</th>
                <th>Alamat</th>
                <th>Data dibuat pada</th>
                <th>Data diupdate pada</th>
            </tr>
            <tr>
                <td>{{ $pegawai->nip }}</td>
                <td>{{ $pegawai->gender }}</td>
                <td>{{ $pegawai->alamat }}</td>
                <td>{{ $pegawai->created_at }}</td>
                <td>{{ $pegawai->updated_at }}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>