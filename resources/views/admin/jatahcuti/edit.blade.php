<x-layout>
    <x-slot name="page_name">Halaman Jatah Cuti / Edit</x-slot>
    <x-slot name="page_content">
        <form class="forms-sample" action="{{ url('dashboard/jatahcuti/update', $jatahcuti->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="tahun" class="col-sm-4 col-form-label">Tahun</label>
                <div class="col-sm-8">
                    <input type="numer==ber" class="form-control" id="tahun" name="tahun"
                        placeholder="Masukkan Tahun" value="{{ $jatahcuti->tahun }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-sm-4 col-form-label">Jumlah</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="jumlah" name="jumlah"
                        placeholder="Masukkan Jumlah" value="{{ $jatahcuti->jumlah }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="nip" class="col-sm-4 col-form-label">NIP</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nip" name="nip"
                        placeholder="Masukkan NIP" value="{{ $jatahcuti->nip }}">
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