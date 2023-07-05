<?php
include "config.php";

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jk = $_POST['jk'];

    $sql = "UPDATE mahasiswa SET nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jk' WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        echo "Record updated successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM mahasiswa WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $nama = $row['nama'];
            $tempat_lahir = $row['tempat_lahir'];
            $tanggal_lahir = $row['tanggal_lahir'];
            $jk = $row['jenis_kelamin'];
            $id = $row['id'];
        }
        ?>

        <!DOCTYPE html>
        <html>
        <head>
            <title>User Update Form</title>
        </head>
        <body>
            <h2>Update Data</h2>
            <form action="" method="post">
                <fieldset>
                    <legend>Personal information:</legend>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">

                    <br>Nama:<br>
                    <input type="text" name="nama" value="<?php echo $nama; ?>">

                    <br>Tempat Lahir:<br>
                    <input type="text" name="tempat_lahir" value="<?php echo $tempat_lahir; ?>">

                    <br>Tanggal Lahir:<br>
                    <input type="date" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>">

                    <br>Jenis Kelamin:<br>
                    <input type="radio" name="jk" value="Laki-laki" <?php if($jk == 'Laki-laki'){ echo "checked";} ?>>Laki-laki
                    <input type="radio" name="jk" value="Perempuan" <?php if($jk == 'Perempuan'){ echo "checked";} ?>>Perempuan
                    <br><br>
                    <input type="submit" value="Update" name="update">
                </fieldset>
            </form>
        </body>
        </html>

        <?php
    } else {
        header('Location: view.php');
        exit();
    }
}
?>
