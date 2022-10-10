<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lintasmedia.id</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>    
    <nav>
        <div class ="wrapper">
            <div class = "logo"><a href = ""> Lintasmedia.id</a> </div>
            <div class = "menu">
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#aboutme">About Us</a></li>
                    <li><a href="#signup">Register</a></li>
                    <li><img src="images/moon.png" alt="logo" id="icon"></li>
                    <script src="script.js"></script>
                </ul>                
            </div>
    </nav>
    <div class = "wrapper">
    <?php 
    //proses yang dapat terjadi
    //mengambil data dari parameter input halaman  biodata
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $nomorhp= $_POST['nomorhp'];
    $tanggallahir = $_POST['tanggallahir'];    
    $jk = $_POST['jk'];    
    $kategori = $_POST['kategori'];    
    $alamat = $_POST['alamat'];    
    ?>
    </div>
    <table id="tabelphp">
        <tr>
            <td width="120">Nama</td>
            <td> <?php echo ": $nama" ?> </td>
        </tr>                                                              
        <tr>
            <td>Password</td>
            <td> <?php echo ": $password" ?> </td>
        </tr>
        <tr>
            <td>Email</td>
            <td> <?php echo ": $email" ?> </td>
        </tr>                                        
        <tr>
            <td>Nomor HP</td>
            <td> <?php echo ": $nomorhp" ?> </td>
        </tr>                    
        <tr>
            <td>Tanggal Lahir</td>
            <td> <?php echo ": $tanggallahir" ?> </td>                            
        </tr>                    
        <tr>
            <td>Jenis Kelamin</td>
            <td> <?php echo ": $jk" ?> </td>
        </tr>
        <tr>
            <td>Keperluan</td>
            <td> <?php 
                    if (isset($_POST['keperluan'])) {
                        echo ": ";
                        $keperluan=$_POST['keperluan'];                        
                        for ($i=0; $i < count($keperluan) ; $i++){
                            echo $keperluan[$i].",";
                        }
                    }
                ?>
            </td>
            
        </tr>
        <tr>
            <td>Kategori</td>
            <td> <?php echo ": $kategori" ?> </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td> <?php echo ": $alamat" ?> </td>
        </tr>                                        
        </table>
    <div class="footer">
		<p>Copyright © 2022 Designed by Fasa</p>
	</div>
</body>
</html>