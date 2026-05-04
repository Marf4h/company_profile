<?php
    include 'db.php';
    $kontak = mysqli_query($conn, "SELECT admin_telpon, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
    $a = mysqli_fetch_object($kontak);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crimson Brew</title>
</head>
<body>
    <header>
        <div class="container">
            <h1><a href="index.php">Crimson Brew</a></h1>
            <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="#">Our Product</a></li>
            </ul>
        </div>
    </header>

    <div class="search">
        <div class="container">
            <form action="produk_cari.php" method="POST">
                <input type="text" name="search" placeholder="Cari Produk">
                <input type="submit" name="cari" value="Cari Produk">
            </form>
        </div>

    </div>
    <div class="search">
        <div class="container">
            <p>Silahkan login untuk berbelanja</p> <a href="login.php"><b>Click Here To Login</b></a>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h3>Kategori</h3>
            <div class="box">
                <?php
                $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
                if(mysqli_num_rows($kategori) > 0) {
                    while($k = mysqli_fetch_array($kategori)){

                ?>
                <a href="produk.php?kat=<?php echo $k['category_id'] ?>">
                    <div class="col-5">
                        <img src="#" alt="error" width="20px" style="margin-bottom: 5px;">
                        <p><?php echo $k['category_name'] ?></p>
                    </div>
                </a>   

                <?php }} else { ?>
                    <p>Category, Not Found!</p>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container"></div>
    </div>

    <div class="footer">
        <div class="container"></div>
    </div>


</body>
</html>
