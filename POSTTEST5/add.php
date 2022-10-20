
<?php

    include 'koneksi.php';    
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nomorhp = $_POST['nomorhp'];                
    $alamat = $_POST['alamat'];
    $pembayaran = $_POST['kategori'];    
       
    $sql = "INSERT INTO datapemasangan VALUES ('$nama', '$email', '$nomorhp', '$alamat', '$pembayaran')";
    $result = mysqli_query($conn, $sql);
    if ($result){
        echo "
        <script>
            alert('Data Berhasil Ditambahkan!');
            document.location.href = 'dashboard.php';
        </script>
        ";
    }else{
        echo "
        <script>
            alert('Data Gagal Ditambahkan!');
            document.location.href = 'dashboard.php';
        </script>
        ";
    }

?>