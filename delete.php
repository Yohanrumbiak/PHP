<?php
include "config.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM mahasiswa WHERE id ='$id'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
        <html>
        <head>
            <title>User Update Form</title>
        </head>
        <body>
            <h2>information!!</h2>
            <form action="" method="post">
                <fieldset>
                    <p>Penting untuk diinformasikan bahwa data Anda telah berhasil dihapus dari sistem kami. 
                       Kami ingin memberitahukan bahwa langkah-langkah yang tepat telah diambil untuk memastikan penghapusan data yang aman dan permanen.
                    </p>
                </fieldset>
            </form>
        </body>
        </html>
