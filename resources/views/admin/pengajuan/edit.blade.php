<x-layout>
    <x-slot name="page_name">Halaman Pengajuan / Edit</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ url('dashboard/pengajuan/update', $pengajuan->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="tanggal_awal" class="col-sm-4 col-form-label">Tanggal Awal</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tanggal_awal" name="tanggal_awal"
                        placeholder="Masukkan Tanggal Awal" value="{{ $pengajuan->tanggal_awal }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal_akhir" class="col-sm-4 col-form-label">Tanggal Akhir</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tanggal_akhir" name="tanggal_akhir"
                        placeholder="Masukkan Tanggal Akhir" value="{{ $pengajuan->tanggal_akhir }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-sm-4 col-form-label">Jumlah</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="jumlah" name="jumlah"
                        placeholder="Masukkan Jumlah" value="{{ $pengajuan->jumlah }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="ket" class="col-sm-4 col-form-label">Keterangan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="ket" name="ket"
                        placeholder="Masukkan Keterangan" value="{{ $pengajuan->ket }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-4 col-form-label">Status</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="status" name="status"
                        placeholder="Masukkan Status" value="{{ $pengajuan->status }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nip" class="col-sm-4 col-form-label">NIP</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nip" name="nip"
                        placeholder="Masukkan NIP" value="{{ $pengajuan->nip }}">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </div>
            </div>
        </form>
    </x-slot>
</x-layout>