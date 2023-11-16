<x-app>
    <x-slot name="content">
        @slot('page')
            Kategori
        @endslot
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title" style="font-size: 32px!important;">Kategori Surat >> Tambah</h3>
                        <p class="card-text">Tambahkan atau edit data kategori. Jika sudah selesai, jangan lupa untuk mengklik tombol *Simpan*</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <form class="form-valide" action="{{ route('kategori.update', $id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="id">ID (Auto Increment) <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="id" id="id" placeholder="Enter a username.." value="{{ $kategori->id }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="nama_kategori">Nama Kategori <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ $kategori->nama_kategori }}" placeholder="Nama Kategori">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="judul_kategori">Keterangan <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <textarea class="form-control"  name="judul_kategori" id="judul_kategori" rows="5" placeholder="Keterangan">{{ $kategori->judul_kategori }}</textarea>
                                    </div>
                                </div>
                                <div class="general-button">
                                    <a href="{{ url()->previous() }}" class="btn mb-1 btn-flat btn-warning">Kembali</a>
                                    <button type="submit" class="btn mb-1 btn-flat btn-success">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

@slot('script')
	<script></script>
@endslot
</x-app>
