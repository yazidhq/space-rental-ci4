<style>
    .navbar-fixed {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        background-color: #fff;
        /* Atur warna latar belakang sesuai kebutuhan */
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        /* Atur bayangan (shadow) sesuai kebutuhan */
        z-index: 1000;
        /* Pastikan navbar tampil di atas konten lain */
        padding: 25px 0;
        /* Atur jarak padding di atas dan bawah navbar */
        display: block;
        /* Tampilkan navbar secara default */
        transition: top 0.3s;
        /* Animasi transisi saat muncul/hilang */
    }
</style>

<nav class="navbar-fixed">
    <div class="row">
        <div class="container">
            <div class="logo">
                <img src="images/logo.png" alt="">
            </div>
            <div class="responsive"><i data-icon="m" class="icon"></i></div>
            <ul class="nav-menu">
                <li><a href="/" class="smoothScroll">Home</a></li>
                <li><a href="/#about" class="smoothScroll">About</a></li>
                <li><a href="/#blog" class="smoothScroll">Lahan</a></li>
                <li><a href="/#contact" class="smoothScroll">Contact</a></li>
                <?php if (session()->get('id_user')) : ?>
                    <li><a href="/Penyewaan/riwayat_sewa" class="text-dark">Sewaan</a></li>
                    <li><a href="" class="text-dark">Hallo, <?= ucfirst(session()->get('nama_user')) ?></a></li>
                    <li><a href="/AuthUser/logout_user" class="text-dark">Logout</a></li>
                <?php else : ?>
                    <a href="#" id="myBtn" class="text-dark">Login</a>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

<!-- The Modal Login -->
<div id="myModal" class="modal container">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <h3 class="h2 text-center mt-3"><strong>Login</strong></h3>

        <form action="/AuthUser/proses_login" method="post">
            <div class="form-outline mb-4">
                <label class="form-label" for="form5Example2">Username</label>
                <input type="text" id="form5Example2" class="form-control" name="username_user" />
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" for="form5Example2">Password</label>
                <input type="password" id="form5Example2" class="form-control" name="password_user" />
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="#" class="btn btn-success" id="registerBtn">Register</a>
            </div>
        </form>

    </div>
</div>

<!-- The Registration Modal -->
<div id="registerModal" class="modal container">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <h3 class="h2 text-center mt-3"><strong>Register</strong></h3>

        <form action="/AuthUser/simpan_user" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form5Example2">Nama Lengkap</label>
                        <input type="text" id="form5Example2" class="form-control" name="nama_user" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form5Example2">NIK</label>
                        <input type="text" id="form5Example2" class="form-control" name="nik_user" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form5Example2">Jenis Kelamin</label>
                        <select name="jkel_user" class="form-select" aria-label="Default select example">
                            <option hidden>Pilih Opsi</option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form5Example2">Alamat Lengkap</label>
                        <input type="text" id="form5Example2" class="form-control" name="alamat_user" />
                    </div>
                    <!-- More fields for the first column -->
                </div>
                <div class="col-md-6">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form5Example2">Email</label>
                        <input type="text" id="form5Example2" class="form-control" name="email_user" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form5Example2">Nomor WhatsApp</label>
                        <input type="text" id="form5Example2" class="form-control" name="wa_user" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form5Example2">Username</label>
                        <input type="text" id="form5Example2" class="form-control" name="username_user" />
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form5Example2">Password</label>
                        <input type="password" id="form5Example2" class="form-control" name="password_user" />
                    </div>
                    <!-- More fields for the second column -->
                </div>
            </div>

            <!-- Continue adding the rest of the fields similarly -->

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success">Register</button>
            </div>
        </form>

    </div>
</div>


<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks on the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<script>
    // Get the registration modal
    var registerModal = document.getElementById("registerModal");

    // Get the registration button
    var registerBtn = document.getElementById("registerBtn");

    // Get the <span> element that closes the registration modal
    var registerClose = registerModal.getElementsByClassName("close")[0];

    // When the user clicks on the registration button, open the registration modal
    registerBtn.onclick = function() {
        registerModal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the registration modal
    registerClose.onclick = function() {
        registerModal.style.display = "none";
    }

    // When the user clicks anywhere outside of the registration modal, close it
    window.onclick = function(event) {
        if (event.target == registerModal) {
            registerModal.style.display = "none";
        }
    }
</script>

<script>
    let prevScrollPos = window.pageYOffset;

    window.onscroll = function() {
        const currentScrollPos = window.pageYOffset;

        if (prevScrollPos > currentScrollPos) {
            document.querySelector(".navbar-fixed").style.top = "0";
        } else {
            document.querySelector(".navbar-fixed").style.top = "-100px"; /* Menghilangkan navbar saat menggulir ke bawah */
        }

        prevScrollPos = currentScrollPos;
    };
</script>