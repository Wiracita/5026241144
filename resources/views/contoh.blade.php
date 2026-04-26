<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Web</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <style>
        .open-sans-title {
            font-family: "Open Sans", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: light;
            font-size: xx-large;
            font-variation-settings:
                "wdth" 100;
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <div id="placeAlert"></div>

        <div class="jumbotron text-center shadow-sm">
            <h1 class="display-4">Login Classroom</h1>
            <p class="lead">Silahkan Masukan Username dan Password yang Tertera</p>
            <hr class="my-4">

            <div class="alert alert-info alert-dismissible fade show text-left">
                <strong>Informasi:</strong> Silakan login menggunakan akun <a href="#" class="alert-link">Mahasiswa</a>.
                <button type="button" class="close" data-dismiss="alert">&times;</button>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-md-6 text-left">
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" id="username" class="form-control" placeholder="wiracita">
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" id="password" class="form-control" placeholder="5026241144">
                    </div>
                    <button class="btn btn-primary" onclick="prosesLogin()">Login</button>

                    <div class="alert alert-secondary mt-3">
                        Lupa password? <a href="#" class="alert-link">Klik bantuan</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function prosesLogin() {
            const user = document.getElementById('username').value;
            const pass = document.getElementById('password').value;
            const area = document.getElementById('placeAlert');


            if (user === "" || pass === "") {
                area.innerHTML = `
                    <div class="alert alert-warning alert-dismissible fade show" id="myAlert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Peringatan!</strong> Username dan password tidak boleh kosong.
                    </div>`;
            }

            else if (user === "wiracita" && pass === "5026241144") {
                area.innerHTML = `
                    <div class="alert alert-success alert-dismissible fade show" id="myAlert">
                        <h4 class="alert-heading">Berhasil!</h4>
                        <p>Selamat datang <strong>${user}</strong>. Login sukses.</p>
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>`;
            }

            else {
                area.innerHTML = `
                    <div class="alert alert-danger alert-dismissible fade show" id="myAlert">
                        <strong>Gagal!</strong> Data tidak ditemukan.
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                    </div>`;
            }


            setTimeout(function() {
                $("#myAlert").alert("close");
            }, 4000);


            $("#myAlert").on('close.bs.alert', function () {
                console.log("Alert sedang dalam proses penutupan...");
            });


            $("#myAlert").on('closed.bs.alert', function () {
                console.log("Alert telah benar-benar tertutup dan dihapus dari halaman.");
            });
        }
    </script>

</body>

</html>
