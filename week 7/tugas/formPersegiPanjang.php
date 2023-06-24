<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form Persegi Panjang</title>
</head>

<body>
    <div class="container my-5">
        <h3 class="text-center">Form Persegi Panjang</h3>
        <hr>
        <form method="POST" action="formPersegiPanjang.php" autocomplete="off">
            <div class="form-group row">
                <label for="panjang" class="col-4 col-form-label">Panjang</label>
                <div class="col-8">
                    <input id="panjang" name="panjang" type="number" class="form-control" autofocus>
                </div>
            </div>
            <div class="form-group row">
                <label for="lebar" class="col-4 col-form-label">Lebar</label>
                <div class="col-8">
                    <input id="lebar" name="lebar" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Hitung</button>
                </div>
            </div>
        </form>
        <?php
        if (isset($_POST["submit"])) {
            require_once "PersegiPanjang.php";

            // Set nilai properti pada objek dari nilai yang diisi pada form
            $panjang = $_POST["panjang"];
            $lebar = $_POST["lebar"];

            // Buat objek baru dari class bmiPasien
            $persegi_panjang = new PersegiPanjang($panjang, $lebar);
        ?>
            <h3 class="text-center mt-5">Luas dan Keliling Persegi Panjang</h3>
            <hr>
            <div class="table-responsive mt-4">
                <table class="table table-striped">
                    <tbody>
                        <tr>
                            <th>Panjang</th>
                            <td>:</td>
                            <td><?= $persegi_panjang->panjang ?> Cm</td>
                        </tr>
                        <tr>
                            <th>Lebar</th>
                            <td>:</td>
                            <td><?= $persegi_panjang->lebar ?> Cm</td>
                        </tr>
                        <tr>
                            <th>Luas</th>
                            <td>:</td>
                            <td><?= $persegi_panjang->luas() ?> Cm</td>
                        </tr>
                        <tr>
                            <th>Keliling</th>
                            <td>:</td>
                            <td><?= $persegi_panjang->keliling() ?> Cm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <?php
        }

        ?>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>