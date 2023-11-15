<x-app>
    <x-slot name="content">
        @slot('page')
            Kategori
        @endslot
        <div class="row">
            <div class="col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title" style="font-size: 32px!important;">Kategori Surat</h3>
                        <p class="card-text">Berikut ini adalah kategori yang bisa digunakan untuk melabeli surat. <br>Klik "Tambah" pada kolom aksi untuk menambahkan kategori baru.</p>
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
                                        <th scope="col">ID Kategori</th>
                                        <th scope="col">Nama Kategori</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('kategori.create') }}" class="btn mb-1 btn-flat btn-primary">[+] Tambah Kategori Baru</a>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

@slot('script')
	@include('kategori.script')
@endslot

</x-app>
