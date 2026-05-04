<?php 
include ('session.php'); 
$kontak = mysqli_query($conn, "SELECT admin_telpon, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
$a = mysqli_fetch_object($kontak);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    <header>
        <div class="container">
                <h1><a href="dashboard_user.php">Crimson Brew</a></h1>
                <ul>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="product.php">Our Product</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="../logout.php">Logout</a></li>
                </ul>
        </div>
    </header>

    <div class="section">
        <div class="container">
            <h3>About Us</h3>
            <div class="box">
                <h4>Perjalanan Awal Toko Ini</h4> <br>
                <img src="../img/Alhamdulillah.jpg" height="200px" width="200px" alt="">
                <p>Berikut Diatas adalah Foto CEO kami saat Company Kita Selamat dari Net Minus dengan menjual nar- ... Bubuk Teh kami yang Booming.</p>
                <p>Crimson Brew dimulai dari sebuah passion sederhana untuk menyajikan Bubuk Teh berkualitas premium kepada masyarakat. Dengan dedikasi dan kerja keras, kami terus berkembang menjadi pilihan utama pecinta Bubuk Teh di Indonesia.</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
                <h4>Alamat</h4>
                <p><?php echo $a->admin_address ?></p>

                <h4>Email</h4>
                <p><?php echo $a->admin_email ?></p>

                <h4>No. Hp</h4>
                <p><?php echo $a->admin_telpon ?></p>
                <small>Copyright &copy; 2026 - Bukawarung.</small>
        </div>
</div>
</body>
</html>