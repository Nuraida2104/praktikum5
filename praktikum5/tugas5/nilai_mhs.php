<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            width: 50%;
            height: 800px;
            margin: 50px;
        }
        
    </style>

    <title>Form Nilai Mahasiswa</title>
</head>
<body>
<fieldset>
    <div class="container">
        <fieldset>
    <h2> Form Nilai Mahasiswa </h2>

    </fieldset>
    <form method="post" action="nilai_mhs.php" >
        <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <input id="nim" name="nim" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
            <label for="matkul" class="col-4 col-form-label">Pilih MK</label>
                <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option value="Data Wherehouse">Data Wherehouse</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Bisnis Digital">Bisnis Digital</option>
                    </select>
                </div>
            </div>
        <div class="form-group row">
            <label for="nilai" class="col-4 col-form-label">Nilai</label> 
            <div class="col-8">
            <input id="nilai" name="nilai" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    </div>

</body>
</html>
<?php
    if (isset($_POST["submit"])) {
        require_once "class_mhs.php";

    //set nilai pada from
    $nim = $_POST["nim"];
    $matkul = $_POST["matkul"];
    $nilai = $_POST["nilai"];



    //objek baru
    $NilaiMahasiswa = new NilaiMahasiswa($nim, $matkul, $nilai);

    echo "<p> NIM : " . $NilaiMahasiswa->nim . "</p>";
    echo "</p>Mata Kuliah : " . $NilaiMahasiswa->matkul . "</p>";
    echo "<p> Nilai : " .$NilaiMahasiswa->grade() . "</p>";
    echo "<p> Hasil Ujian : " . $NilaiMahasiswa->hasil() . "</p>";
}


?>