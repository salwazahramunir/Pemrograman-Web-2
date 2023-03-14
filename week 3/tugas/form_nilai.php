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
        <div class="card">
            <div class="card-header">
                Registrasi
            </div>
            <div class="card-body p-5">
                <h4 class="card-title">Form Registrasi IT Club Data Science</h4>
                <hr>
                <form method="POST" action="form_nilai.php">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim">
                    </div>
                    <div class="form-group">
                        <label for="nama_lengkap">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_lengkap">
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
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Bisnis Digital">Bisnis Digital</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="skill">Skill Web & Programming</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="HTML" id="HTML">
                            <label class="form-check-label" for="HTML">
                                HTML
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="CSS" id="CSS">
                            <label class="form-check-label" for="CSS">
                                CSS
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="JavaScript" id="JavaScript">
                            <label class="form-check-label" for="JavaScript">
                                JavaScript
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="RWD Bootstrap" id="RWD Bootstrap">
                            <label class="form-check-label" for="RWD Bootstrap">
                                RWD Bootstrap
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="PHP" id="PHP">
                            <label class="form-check-label" for="PHP">
                                PHP
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Phyton" id="Phyton">
                            <label class="form-check-label" for="Phyton">
                                Phyton
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="Java" id="Java">
                            <label class="form-check-label" for="Java">
                                Java
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tempat_domisili">Tempat Domisili</label>
                        <input type="text" class="form-control" id="tempat_domisili">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>


            </div>
            <div class="card-footer text-muted">
                Develop by Salwa Az-Zahra Munir
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