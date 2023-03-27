<?php
$choice_of_study_program = ["SI" => "Sistem Informasi", "TI" => "Teknik Informatika", "BD" => "Bisnis Digital"];
$skills = [
    "HTML" => 10, "CSS" => 10, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30,
    "Pyhon" => 30, "Java" => 50
];
$choise_domicile = ["Jakarta", "Depok", "Bogor", "Tanggerang", "Bekasi", "Lainnya"];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form Registrasi</title>
</head>

<body>
    <div class="container my-5">

        <form method="POST" action="pendaftaran/proses_registrasi.php" autocomplete="off">
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" name="nim" class="form-control" id="nim" autofocus>
            </div>
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" id="nama_lengkap">
            </div>
            <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="Laki-Laki">
                    <label class="form-check-label" for="laki-laki">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="Perempuan">
                    <label class="form-check-label" for="perempuan">
                        Perempuan
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="program_study">Program Study</label>
                <select class="form-control" id="program_study" name="program_study">
                    <option disabled selected>--- Select One ---</option>
                    <?php foreach ($choice_of_study_program as $kunci => $nilai) { ?>
                        <option value="<?php echo $nilai ?>"><?= $nilai; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="skill">Skill Web & Programming</label>
                <?php foreach ($skills as $kunci => $nilai) { ?>
                    <div class="form-check">
                        <input class="form-check-input" name="skills[]" type="checkbox" value="<?= $kunci ?>" id="<?= $kunci ?>">
                        <label class="form-check-label" for="<?= $kunci ?>">
                            <?= $kunci  ?>
                        </label>
                    </div>
                <?php } ?>
            </div>
            <div class="form-group">
                <label for="tempat_domisili">Tempat Domisili</label>
                <select class="form-control" id="domisili" name="domisili">
                    <option disabled selected>--- Select One ---</option>
                    <?php foreach ($choise_domicile as $kunci => $nilai) { ?>
                        <option value="<?php $kunci ?>"><?= $nilai; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <button type="submit" name="proses" class="btn btn-primary">Submit</button>
        </form>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>