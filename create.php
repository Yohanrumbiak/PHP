<?php
include "config.php";

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jk = $_POST['jk'];
    
    $sql = "INSERT INTO mahasiswa (nama, tempat_lahir, tanggal_lahir, jenis_kelamin) VALUES 
    ('$nama', '$tempat_lahir', '$tanggal_lahir', '$jk')";
    
    if ($conn->query($sql) === TRUE) {
        header('Location: view.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bulma/css/bulma.min.css">
</head>
<body>
    <div class="row" style="margin-left: 30px; margin-right: 30px;">
        <h2>Tambah Data</h2>
        <form action="" method="POST">
            <div class="mb-3" style="margin-top: 20px;">
                <label for="exampleFormControlInput1" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama Anda" name="nama">
            </div>

            <div class="mb-3" style="margin-top: 20px;">
                <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tempat Lahir" name="tempat_lahir">
            </div>

            <div class="mb-3" style="margin-top: 20px;">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Tanggal Lahir" name="tanggal_lahir">
            </div>

            <label style="margin-top: 20px;">Jenis Kelamin</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jk" id="flexRadioDefault1" value="Laki-laki" checked>
                <label class="form-check-label" for="flexRadioDefault1">Laki-laki</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="jk" id="flexRadioDefault1" value="Perempuan">
                <label class="form-check-label" for="flexRadioDefault1">Perempuan</label>
            </div>

            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
