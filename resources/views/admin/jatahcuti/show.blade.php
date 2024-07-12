<x-layout>
    <x-slot name="page_name">Halaman Divisi / Detail</x-slot>
    <x-slot name="page_content">
        <table class="table table-bordered">
            <tr class="table-primary">
                <th>Id</th>
                <th>NIP</th>
                <th>Tahun</th>
                <th>Jumlah</th>
                <th>Data dibuat pada</th>
                <th>Data diupdate pada</th>
            </tr>
            <tr>
                <td>{{ $jatahcuti->id }}</td>
                <td>{{ $jatahcuti->nip }}</td>
                <td>{{ $jatahcuti->tahun }}</td>
                <td>{{ $jatahcuti->jumlah }}</td>
                <td>{{ $jatahcuti->created_at }}</td>
                <td>{{ $jatahcuti->updated_at }}</td>
            </tr>
        </table>
    </x-slot>
</x-layout>