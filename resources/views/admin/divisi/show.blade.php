<x-layout>
    <x-slot name="page_name">Halaman Divisi / Detail</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-primary">
                <th>Id</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Manager</th>
                <th>Data dibuat pada</th>
                <th>Data diupdate pada</th>
            </tr>
            <tr>
                <td>{{ $divisi->id }}</td>
                <td>{{ $divisi->kode }}</td>
                <td>{{ $divisi->nama }}</td>
                <td>{{ $divisi->manager }}</td>
                <td>{{ $divisi->created_at }}</td>
                <td>{{ $divisi->updated_at }}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>