<x-app>
<x-slot name="content">
    <x-alert />
    <div class="row">
        @slot('page')
            Arsip
        @endslot
        <div class="col-md-6 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title" style="font-size: 32px!important;">Arsip Surat</h3>
                    <p class="card-text">Berikut ini adalah surat-surat yang telah terbit dan diarsipkan. <br>Klik "Lihat" pada kolom aksi untuk menampilkan surat.</p>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-sm w-100" id="datatable">
                            <thead>
                                <tr>
                                    <th scope=" col">Nomor Surat</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Waktu Pengarsipan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('arsip.create') }}" class="btn mb-1 btn-flat btn-primary">Arsipkan Surat</a>
                </div>
            </div>
        </div>
    </div>
</x-slot>

@slot('script')
    @include('arsip.script')
    <script></script>
@endslot

</x-app>
