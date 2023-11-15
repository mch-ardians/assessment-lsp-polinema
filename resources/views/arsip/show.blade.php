<x-app>
@slot('content')
<section class="row">

    @slot('page')
    Arsip
    @endslot

    <div class="container">
        <x-alert />
        <div class="row">
            <div class="col card px-3 py-3">
                <h2>Arsip >> Lihat</h2>
				<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="mb-3">
                    <label for="no_surat" class="form-label">Nomor : {{ $arsip->no_surat }}</label> <br>
                    <label for="kategori_id" class="form-label">Kategori : {{ $arsip->kategori->nama_kategori }}</label><br>
                    <label for="judul_arsip" class="form-label">Judul : {{ $arsip->judul_arsip }}</label><br>
                    <label for="updated_at" class="form-label">Waktu Unggah : {{ $arsip->updated_at }}</label>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 col-md-12 col-lg-12">
                <div class="mb-3">
                    <iframe src="{{ asset('storage/assets/' . $arsip->file_arsip) }}" width="100%" height="600px"></iframe>
                </div>
            </div>
        </div>

                <div class="d-flex justify-content-start pb-3">
                    <div class="general-button">
                        <a href="{{ route('arsip.index') }}" class="btn btn-flat btn-warning">Kembali</a>
                        <a href="{{ route('arsip.download', $id) }}" class="btn btn-flat btn-primary">
                            Unduh
                        </a>
                        <a href="{{ route('arsip.edit', $id) }}" class="btn btn-flat btn-success">
                            Edit/Ganti File
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endslot

@slot('script')
@include('arsip.script')
<script></script>
@endslot

</x-app>
