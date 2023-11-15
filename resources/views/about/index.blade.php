<x-app>
    @slot('content')
    @slot('page')
        About
    @endslot
    <section>
        <div class="card">
            <div class="card-body">
                <div class="card-title">About</div>
                <div class="row">
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <div class="mb-3 ms-5">
                            <img src="{{ asset('assets/images/profile/profile.png') }}" alt="" style="width: 120px;">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <label class="form-label">Aplikasi ini dibuat oleh : </label><br>
                        <div class="row">
                        <div class="col-sm-3 col-md-3 col-lg-3">
                            <label class="form-label">Nama </label><br>
                            <label class="form-label">Prodi </label><br>
                            <label class="form-label">Nim </label><br>
                            <label class="form-label">Tanggal</label>
                        </div>
                        <div class="col-sm-4 col-md-4 col-lg-4">
                            <label class="form-label">: Mochammad Ardiansyah</label><br>
                            <label class="form-label">: D3-MI PSDKU Kediri</label><br>
                            <label class="form-label">: 2131730016</label><br>
                            <label class="form-label">: 13-11-2023</label><br>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endslot
    @slot('script')
    <script>
    </script>
    @endslot
</x-app>
