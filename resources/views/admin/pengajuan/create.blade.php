<x-layout>
    <x-slot name="page_name">Halaman Pengajuan / Create</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ url('dashboard/pengajuan/store') }}" method="post">
            @csrf
            <div class="form-group row">
                <label for="tanggal_awal" class="col-sm-4 col-form-label">Tanggal Awal</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tanggal_awal" name="tanggal_awal"
                    placeholder="Masukkan Tanggal Awal">
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal_akhir" class="col-sm-4 col-form-label">Tanggal Akhir</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir"
                    placeholder="Masukkan Tanggal Akhir">
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-sm-4 col-form-label">Jumlah</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="jumlah" name="jumlah"
                    placeholder="Masukkan Jumlah">
                </div>
            </div>
            <div class="form-group row">
                <label for="Keterangan" class="col-sm-4 col-form-label">Keterangan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="ket" name="ket"
                    placeholder="Masukkan Keterangan">
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-4 col-form-label">Status</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="status" name="status"
                    placeholder="Masukkan Status">
                </div>
            </div>
            <div class="form-group row">
                <label for="nip" class="col-sm-4 col-form-label">NIP</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nip" name="nip"
                        placeholder="Masukkan NIP">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </div>
        </form>
    </x-slot>
</x-layout>