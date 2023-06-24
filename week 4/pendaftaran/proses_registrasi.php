<?php
$proses = $_POST["proses"];
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$program_study = $_POST["program_study"];
$skills = $_POST["skills"];
$domisili = $_POST["domisili"];
$email = $_POST["email"];

if (isset($proses)) {
    function skor_skill($skills)
    {
        $points = 0;
        $choise_skill = [
            "HTML" => 10, "CSS" => 10, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30,
            "Pyhon" => 30, "Java" => 50
        ];

        foreach ($skills as $key => $skill) {
            $points += $choise_skill[$skill];
        }

        return $points;
    }

    $totalPoint = skor_skill($skills); // total skor

    function print_skill($skills)
    {
        $text = "";
        $countSkill = count($skills) - 1;

        foreach ($skills as $key => $skill) {
            if ($countSkill === $key) {
                $text .= $skill;
            } else {
                $text .= $skill . ", ";
            }
        }

        return $text;
    }

    $textSkill = print_skill($skills); // print text skill

    function category($totalPoint)
    {
        if ($totalPoint === 0) {
            return "Tidak Memadai";
        } else if ($totalPoint <= 40) {
            return "Kurang";
        } else if ($totalPoint <= 60) {
            return "Cukup";
        } else if ($totalPoint <= 100) {
            return "Baik";
        } else if ($totalPoint <= 150) {
            return "Sangat Baik";
        }
    }

    $category_skill = category($totalPoint); // category skor
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

    <title>Output</title>
</head>

<body>
    <div class="container my-5">
        <div class="card">
            <div class="card-header">
                Output yang dihasilkan dari form:
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-stripped">
                        <tr>
                            <th>NIM</th>
                            <td>:</td>
                            <td><?= $nim ?></td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>:</td>
                            <td><?= $nama ?></td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td>:</td>
                            <td><?= $jenis_kelamin ?></td>
                        </tr>
                        <tr>
                            <th>Program Study</th>
                            <td>:</td>
                            <td><?= $program_study ?></td>
                        </tr>
                        <tr>
                            <th>Skill</th>
                            <td>:</td>
                            <td><?= $textSkill ?></td>
                        </tr>
                        <tr>
                            <th>Skor Skill</th>
                            <td>:</td>
                            <td><?= $totalPoint ?></td>
                        </tr>
                        <tr>
                            <th>Kategori Skill</th>
                            <td>:</td>
                            <td><?= $category_skill ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td><?= $email ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>