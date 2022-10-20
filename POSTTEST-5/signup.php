<?php 
require 'koneksi.php';
$username = $_POST["username"];
$email = $_POST["email"];
$phone_number = $_POST["phone_number"];
$password = $_POST["password"];

$sql = "INSERT INTO users VALUES ('$username', '$email', '$phone_number', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            echo "
            <script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'index.php';
            </script>
            ";
        }else{
            echo "
            <script>
                alert('Data Gagal Ditambahkan!');
                document.location.href = 'index.php';
            </script>
            ";
        }

?>

