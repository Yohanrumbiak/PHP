<?php
include "config.php";

$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bulma/css/bulma.min.css">
</head>
<body>
    <div class="container">
        <h2 style="font-weight: bold; text-align:center;">Mahasiswa</h2>
        <a class="button is-primary" href="create.php">Tambah</a><br><br>
        <table class="table" border="1">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    $id = 1;
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['tempat_lahir']; ?></td>
                            <td><?php echo $row['tanggal_lahir']; ?></td>
                            <td><?php echo $row['jenis_kelamin']; ?></td>
                            <td>
                                <a class="button is-warning" href="update.php?id=<?php echo $row['id']; ?>">Update</a>
                                <a class="button is-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php
                        $id++;
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
