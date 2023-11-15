<x-app>
    <x-slot name="content">
        <x-alert />
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title" style="font-size: 32px!important;">Arsip Surat >> Unggah</h3>
                        <p class="card-text">Unggah surat yang telah terbit pada form ini untuk diarsipkan. <br>Catatan:</p>
                        <ul>
                            <li><span class="text-danger">*</span> Gunakan file berformat PDF</li>
                        </ul>
                    </div>
                </div>
            </div>
            @slot('page')
                Arsip
            @endslot
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-validation">
                            <form action="{{ route('arsip.update', $id) }}" method="POST" enctype="multipart/form-data" class="form-valide">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="no_surat">Nomor Surat <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"
                                    name="no_surat" id="no_surat"
                                    placeholder="Masukkan Nomor Surat.." value="{{ $arsip->no_surat }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="kategori_id">Kategori <span class="text-danger">*</span></label>
                                    <div class="col-lg-6">
                                        <select class="form-control" name="kategori_id" id="kategori_id">
                                            @foreach ($kategori as $kategoris)
                                                <option value="{{ $kategoris->id }}" {{ old('kategori_id')==="$kategoris->id" ? 'selected'
                                                    : '' }}>
                                                    {{ $kategoris->nama_kategori }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="judul_arsip">Judul <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control"
                                    name="judul_arsip" id="judul_arsip"
                                    placeholder="Masukkan Judul Arsip.." value="{{ $arsip->judul_arsip }}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-username">File Surat (PDF) <span class="text-danger">*</span>
                                    </label>
                                    <div class="col-lg-6">
                                        <div class="custom-file">
                                            <input type="file" name="file_arsip" value="{{ $arsip->file_arsip}}" class="custom-file-input" accept=".pdf">
                                            <label class="custom-file-label">{{ $arsip->file_arsip }}</label>
                                        </div>
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
        @slot('script')
            <script></script>
        @endslot
    </x-slot>
</x-app>


