<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pendaftaran Properti</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>

    <!-- Banner Start -->
    <body>
    <div class="jumbotron jumbotron-fluid jumbotron-custom p-5" style="background:url(assets/img/properti.jpg); background-size: 300px; color: #000000; margin-bottom: 0;">
        <div class="container py-5">
            <h1 class="display-5 fw-bold" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Juliana Silva Properti</h1>
            <p class="col-md-8 fs-4">Jl. Kawi Kawi Bawah No.A-34, RT.5/RW.8, Johar Baru, Kec. Johar Baru, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10560.</p>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-custom" style="background-color: #7c75ab">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html" style="color: rgb(0, 0, 0) !important;">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="pendaftaran_properti.php" style="color: rgb(0, 0, 0) !important;">Pendaftaran Pemesanan Properti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="daftar_pesanan.php" style="color: rgb(0, 0, 0) !important;">Daftar Pemesanan Properti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Form Start -->
        <div class="container">
            <h1 class="text-center mt-4">
                Form Sewa
            </h1>
            <div class="row">
                <div class="col">
                    <form class="p4" method= "POST" action="db.php">
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Nama</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="nama_pemesanan" name="nama_pemesanan">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Nomor HP</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="no_hp" name="no_hp">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Tanggal Pemesanan</label>
                        <div class="col-sm-8">
                        <input type="date" class = "form-control" name="tanggal" id="tanggal">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Durasi Sewa (Hari)</label>
                        <div class="col-sm-8">
                        <input type="number" name="durasi_sewa" class="form-control" id="durasi_sewa" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Pilih Jenis Properti</label>
                        <div class="col-sm-8">
                            <select class="form-select" id="unit_properti" name="unit_properti">
                                <option id="kamar" name="kamar" value="500000">Kamar (Rp.500.000/hari)</option>
                                <option id="pavilion" name="pavilion" value="1500000">Pavilion (Rp.1.500.000/hari)</option>
                                <option id="rumah" name="rumah" value="2000000">Rumah (Rp.2.000.000/hari)</option>
                                <option id="kios" name="kios" value="1500000">Kios (Rp.1.500.000/hari)</option>
                                <option id="ruko" name="ruko" value="2500000">Ruko (Rp.2.500.000/hari)</option>
                            </select>
                        </div>
                    </div>

                        <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Harga Sewa</label>
                        <div class="col-sm-8">
                        <input type="number" class="form-control" id="harga_paket" name = "harga_paket" required  readonly>
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Jumlah Tagihan</label>
                        <div class="col-sm-8">
                        <input type="number" class="form-control" id="jml_tagihan" name="jml_tagihan" required  readonly>
                    </div>
                    </div>
                    <input class="btn btn-warning" id = "cek_tagihan" name ="cek_tagihan" type="button" value="Cek Tagihan">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <!-- Form End -->
<!-- image -->
                <div class="col">
                    <img src="assets/img/logo.png" alt="" style="height: 600px; width: 600px;">
                        </div>
                    </div>
                </div>       
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="1" d="M0,0L0,224L36.9,224L36.9,128L73.8,128L73.8,224L110.8,224L110.8,288L147.7,288L147.7,160L184.6,160L184.6,96L221.5,96L221.5,160L258.5,160L258.5,288L295.4,288L295.4,128L332.3,128L332.3,128L369.2,128L369.2,192L406.2,192L406.2,32L443.1,32L443.1,192L480,192L480,224L516.9,224L516.9,32L553.8,32L553.8,32L590.8,32L590.8,128L627.7,128L627.7,288L664.6,288L664.6,128L701.5,128L701.5,128L738.5,128L738.5,160L775.4,160L775.4,192L812.3,192L812.3,320L849.2,320L849.2,0L886.2,0L886.2,64L923.1,64L923.1,64L960,64L960,224L996.9,224L996.9,320L1033.8,320L1033.8,320L1070.8,320L1070.8,32L1107.7,32L1107.7,224L1144.6,224L1144.6,288L1181.5,288L1181.5,160L1218.5,160L1218.5,256L1255.4,256L1255.4,64L1292.3,64L1292.3,32L1329.2,32L1329.2,224L1366.2,224L1366.2,160L1403.1,160L1403.1,32L1440,32L1440,320L1403.1,320L1403.1,320L1366.2,320L1366.2,320L1329.2,320L1329.2,320L1292.3,320L1292.3,320L1255.4,320L1255.4,320L1218.5,320L1218.5,320L1181.5,320L1181.5,320L1144.6,320L1144.6,320L1107.7,320L1107.7,320L1070.8,320L1070.8,320L1033.8,320L1033.8,320L996.9,320L996.9,320L960,320L960,320L923.1,320L923.1,320L886.2,320L886.2,320L849.2,320L849.2,320L812.3,320L812.3,320L775.4,320L775.4,320L738.5,320L738.5,320L701.5,320L701.5,320L664.6,320L664.6,320L627.7,320L627.7,320L590.8,320L590.8,320L553.8,320L553.8,320L516.9,320L516.9,320L480,320L480,320L443.1,320L443.1,320L406.2,320L406.2,320L369.2,320L369.2,320L332.3,320L332.3,320L295.4,320L295.4,320L258.5,320L258.5,320L221.5,320L221.5,320L184.6,320L184.6,320L147.7,320L147.7,320L110.8,320L110.8,320L73.8,320L73.8,320L36.9,320L36.9,320L0,320L0,320Z"></path></svg>
    
    <!-- Footer Start -->
    <div class="mx-0 px-0">
        <footer style="background-color: #273036" class="px-5 d-flex flex-wrap justify-content-between align-items-center py-3 my-50">
            <div class="col-md-4 d-flex align-items-center">
                <img src="assets/img/22.png" alt="" style="width: 50px;">
                <span class="mb-3 mb-md-0 text-white px-2">© 2024 Copyright </span>
            </div>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3">
                    <a class="text-white" href="#">
                        <i class="bi bi-instagram"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a class="text-white" href="#">
                        <i class="bi bi-messenger"></i>
                    </a>
                </li>
                <li class="ms-3">
                    <a class="text-white" href="#">
                        <i class="bi bi-facebook"></i>
                    </a>
                </li>
            </ul>
        </footer>
        </div>
        <!-- Footer End -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

        <!-- Javascript Logic -->
        <script>
                function calculateTotal() {
                    const durasiSewa = parseInt(document.getElementById('durasi_sewa').value);
                    const hargaProperti = parseInt(document.getElementById('unit_properti').value);
                    // Penambahan Fitur
                    let totalHargaSewa = durasiSewa * hargaProperti;
                    let hargaSewa = totalHargaSewa;

                    if (totalHargaSewa >= 10000000) {
                    const biayaDiskon = totalHargaSewa * 0.1;
                    totalHargaSewa -= biayaDiskon; // Mendiskon harga sewa menjadi 10%
                    }
                    // End
                    document.getElementById('harga_paket').value = hargaSewa.toFixed(2);
                    document.getElementById('jml_tagihan').value = totalHargaSewa.toFixed(2);
                    }

                    document.addEventListener('DOMContentLoaded', function() {
                    document.getElementById('cek_tagihan').addEventListener('click', calculateTotal);
                });

                function formatNumber(number) {
                    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                }
        </script>

    </body>
</html>