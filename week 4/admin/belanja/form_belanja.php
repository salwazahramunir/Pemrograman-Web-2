<?php
$proses = $_POST["proses"];
$cancel = $_POST["cancel"];
$customer = $_POST["customer"];
$produk = $_POST["produk"];
$jumlah = $_POST["jumlah"];

$check = false;
$price = 0;
$total = 0;

if (isset($proses)) {
    $check = true;

    switch ($produk) {
        case "TV":
            $price = 4_200_000;
            break;
        case "Kulkas":
            $price = 3_100_000;
            break;
        case "Mesin Cuci":
            $price = 3_800_000;
            break;
    }

    $total = $price * $jumlah;
}

if (isset($cancel)) {
    $check = false;
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form Belanja</title>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <form method="POST" action="form_belanja.php" autocomplete="off">
                    <div class="form-group">
                        <label for="customer_name">Customer</label>
                        <input type="text" name="customer" class="form-control" id="customer_name" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="produk">Pilih Produk</label>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="produk" id="tv" value="TV">
                            <label class="form-check-label" for="tv">TV</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="produk" id="kulkas" value="Kulkas">
                            <label class="form-check-label" for="kulkas">Kulkas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="produk" id="mesin_cuci" value="Mesin Cuci">
                            <label class="form-check-label" for="mesin_cuci">Mesin Cuci</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" id="jumlah">
                    </div>
                    <button type="submit" class="btn btn-success" name="proses">Simpan</button>
                    <button type="submit" class="btn btn-danger float-right" name="cancel">Cancel</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="card float-right" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                        Daftar Harga
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">TV : 4.200.000,00</li>
                        <li class="list-group-item">KULKAS : 3.100.000,00</li>
                        <li class="list-group-item">MESIN CUCI : 3.800.000,00</li>
                    </ul>
                    <div class="card-footer bg-primary text-white">
                        Harga dapat berubah setiap saat
                    </div>
                </div>
            </div>
        </div>

        <?php if ($check) { ?>
            <div class="row mt-5">
                <div class="col-md-6">
                    <h4 class="mb-4 text-center">Rincian Order</h4>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th scope="row">Nama Customer</th>
                                <td>:</td>
                                <td><?= $customer; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Produk Pilihan</th>
                                <td>:</td>
                                <td><?= $produk; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Jumlah Beli</th>
                                <td>:</td>
                                <td><?= $jumlah; ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Total Belanja</th>
                                <td>:</td>
                                <td><?= number_format($total, 2, ',', '.'); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>