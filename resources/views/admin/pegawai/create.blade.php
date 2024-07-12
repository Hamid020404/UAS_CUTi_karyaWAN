<x-layout>
    <x-slot name="page_name">Halaman Pegawai / Create</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ url('dashboard/pegawai/store') }}" method="post">
            @csrf
            <div class="form-group row">
                <label for="nip" class="col-sm-4 col-form-label">NIP</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nip" name="nip"
                        placeholder="Masukkan NIP">
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-sm-4 col-form-label">Gender</label>
                <div class="col-sm-8 I">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="genderLakiLaki" value="Laki-Laki">
                        <label class="form-check-label" for="genderLakiLaki">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="genderPerempuan" value="Perempuan">
                        <label class="form-check-label" for="genderPerempuan">
                            Perempuan
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="tmp_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir"
                        placeholder="Masukkan Tempat Lahir">
                </div>
            </div>
            <div class="form-group row">
                <label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                        placeholder="Masukkan Tanggal Lahir">
                </div>
            </div>
            <div class="form-group row">
                <label for="telpon" class="col-sm-4 col-form-label">Telepon</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="telpon" name="telpon"
                        placeholder="Masukkan Nomor Telepon">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="alamat" name="alamat"
                        placeholder="Masukkan Alamat">
                </div>
            </div>
            <div class="form-group row">
                <label for="divisi_id" class="col-sm-4 col-form-label">Divisi</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="divisi_id" name="divisi_id"
                        placeholder="Masukkan Divisi">
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