<?php
// Tangkap hasil inputan
$proses = $_POST["kirim"];
$nama_mahasiswa = $_POST["nama"];
$mata_kuliah = $_POST["matkul"];
$nilai_uts = $_POST["nilai_uts"];
$nilai_uas = $_POST["nilai_uas"];
$nilai_tugas = $_POST["nilai_tugas"];

$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
$grade;
$status;
$predikat;

// Buat Logic status
if ($total_nilai >= 55) {
    $status = "Lulus";
} else {
    $status = "Tidak Lulus";
}

// Buat logic grade
if ($total_nilai >= 85 && $total_nilai <= 100) {
    $grade = "A";
} elseif ($total_nilai >= 70 && $total_nilai < 85) {
    $grade = "B";
} elseif ($total_nilai >= 56 && $total_nilai < 70) {
    $grade = "C";
} elseif ($total_nilai >= 36 && $total_nilai < 56) {
    $grade = "D";
} elseif ($total_nilai >= 0 && $total_nilai < 36) {
    $grade = "E";
} else {
    $grade = "I";
}

// Buat logic predikat
switch ($grade) {
    case 'A':
        $predikat = "Sangat Memuaskan";
        break;
    case "B":
        $predikat = "Memuaskan";
        break;
    case "C":
        $predikat = "Cukup";
        break;
    case "D":
        $predikat = "Kurang";
        break;
    case "E":
        $predikat = "Sangat Kurang";
        break;
    default:
        $predikat = "Tidak Ada";
        break;
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

    <title>Nilai Mahasiswa</title>
</head>

<body>
    <div class="container">
        <h2 class="my-5 text-center">Daftar Nilai Mahasiswa</h2>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Mata Kuliah</th>
                        <th scope="col">Nilai UTS</th>
                        <th scope="col">Nilai UAS</th>
                        <th scope="col">Nilai Tugas</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Predikat</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><?= $nama_mahasiswa ?></td>
                        <td><?= $mata_kuliah ?></td>
                        <td><?= $nilai_uts ?></td>
                        <td><?= $nilai_uas ?></td>
                        <td><?= $nilai_tugas ?></td>
                        <td><?= $grade ?></td>
                        <td><?= $predikat ?></td>
                        <td><?= $status ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>