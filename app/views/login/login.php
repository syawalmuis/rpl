<div class="container">
    <!-- kop -->
    <div class="mt-3">
        <center>
            <h3 class="my-0">SISTEM INFORMASI MANAJEMEN</h3>
            <h4 class="my-0"><small>Universitas Muhamdiyah Parepare (UMPAR)</small></h4>
        </center>
    </div>
    <!-- end kop -->
    <hr>
    <h5>SELAMAT DATANG <small>civitas akedemika</small></h5>


    <div class="my-5">
        <div class="row px-3">
            <!-- form penerimaan mahasiswa baru -->
            <div class="col-sm-4">
                <div class="card bg-secondary text-white">
                    <div class="card-header" align="center">Penerimaan Mahasiswa baru</div>
                    <div class="card-body" align="left">
                        <div class="ps-5">
                            <span><small>Klik</small> <a href="<?= BASEURL ?>/register/" class="btn btn-light" style="padding-top:0.1rem; padding-bottom:0.1rem;padding-left:0.5rem ;padding-right:0.5rem ; font-size:x-small">DAFTAR</a></span><br>
                            <span><small>Untuk Pendaftaran <br> dan Pengisian Biodata</small></span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <form action="">
                            <div class="row g-2">
                                <div class="col-sm-3">
                                    <small><label for="username" class="col-form-label">Username</label></small>
                                </div>
                                <div class="col-sm-8">
                                    <div class="ps-2">
                                        <input type="text" class="form-control form-control-sm" autocomplete="on">
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-sm-3">
                                    <small><label for="username" class="col-form-label">Password</label></small>
                                </div>
                                <div class="col-sm-8">
                                    <div class="ps-2">
                                        <div class="input-group">
                                            <input type="password" class="form-control form-control-sm" autocomplete="on" id="pw-input">
                                            <button id="btn-input" type="button" class="input-group-text "><i id="icon-change" class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="ps-5">
                            <span><small>klik</small> <button class="btn btn-light" style="padding-top:0.1rem; padding-bottom:0.1rem;padding-left:0.5rem ;padding-right:0.5rem ; font-size:x-small">LOGIN</button></span><br>
                            <span><small>Untuk Upload Berkas, Foto <br> dan Pencetakan Kartu Ujian</small></span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end form penerimaan mahasiswa baru -->

            <!-- form login mahasiswa, fakultas & pascasarjana, lembaga & biro, admin -->
            <div class="col-sm-8">
                <div class="py-5" align="center">
                    <a href="<?= BASEURL ?>/login/auth" class="btn btn-secondary btn-sm my-2" style="padding-right: 3.9rem; padding-left: 3.9rem;">MAHASISWA</a><br>
                    <a href="<?= BASEURL ?>/login/auth" class="btn btn-secondary btn-sm my-2" style="padding-right: 5rem; padding-left: 5rem;">ADMIN</a><br>
                    <a href="<?= BASEURL ?>/login/auth" class="btn btn-secondary btn-sm my-2" style="padding-right: 0.7rem; padding-left: 0.7rem;">FAKULTAS & PASCASARJANA</a><br>
                    <a href="<?= BASEURL ?>/login/auth" class="btn btn-secondary btn-sm my-2" style="padding-right: 3rem; padding-left: 3rem;">LEMBAGA & BIRO</a><br>
                </div>
            </div>
            <!-- end form login mahasiswa, fakultas & pascasarjana, lembaga & biro, admin -->
        </div>
    </div>

</div>
<script>
    let button = document.getElementById("btn-input")
    let input = document.getElementById("pw-input")
    let icon = document.getElementById("icon-change")

    button.addEventListener('click', function() {
        let attr = icon.getAttribute("class")

        if (attr == "fas fa-eye") {
            icon.setAttribute("class", "fas fa-eye-slash")
            input.setAttribute("type", "text")
        } else {
            icon.setAttribute("class", "fas fa-eye")
            input.setAttribute("type", "password")
        }
    })
</script>