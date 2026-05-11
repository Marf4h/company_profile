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
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <header>
            <div class="container">
                <h1><a href="index.php">Crimson Brew</a></h1>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Collection</a></li>
                    <li><a href="#">Testimony</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </header>

        <div class="search">
            <div class="container">
                <form action="produk_cari.php" method="POST">
                    <input type="text" name="search" placeholder="Cari Produk">
                    <input type="submit" name="cari" value="Search">
                </form>
            </div>

        </div>
        <!-- <div class="search">
            <div class="container">
                <p>Silahkan login untuk berbelanja</p> <a href="login.php"><b>Click Here To Login</b></a>
            </div>
        </div> -->

        <div class="section">
            <div class="container">
                <h3>Categori</h3>
                <div class="box">
                    <?php
                    $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
                    if(mysqli_num_rows($kategori) > 0) {
                        while($k = mysqli_fetch_array($kategori)){

                    ?>
                    <a href="index.php?kat=<?php echo $k['category_id'] ?>">
                        <div class="col-5">
                            <img src="img/CatDark.jpg" alt="error" width="50px" style="margin-bottom: 5px;">
                            <p><?php echo $k['category_name'] ?></p>
                        </div>
                    </a>   

                    <?php }} else { ?>
                        <p>Category Not Found!</p>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <h3>Produk Terbaru</h3>
                <div class="box">
                    <?php 
                        ini_set('error_reporting',0);
                        if($_GET['kat']==''){
                            $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 ORDER BY product_id DESC LIMIT 8");
                        }else
                        {
                            $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE category_id=$_GET[kat] AND product_status = 1 ORDER BY product_id DESC LIMIT 8");
                        }
                        if(mysqli_num_rows($produk) > 0){
                            while($p = mysqli_fetch_array($produk)){
                    ?>
                        <a href="detail_produk.php?id=<?php echo $p['product_id'] ?>">
                            <div class="col-4">
                                <img src="produk/<?php echo $p['product_image'] ?>">
                                <p class="nama"><?php echo substr($p['product_name'], 0, 30) ?></p>
                                <table width="100%">
                                    <tr>
                                        <td align="left">
                                            <p class="nama"><b>Stok <?php echo $p['stok'] ?></b></p></td>
                                        <td align="right">
                                            <p class="harga">Rp. <?php echo number_format($p['product_price']) ?></p></td>
                                    </tr>
                                </table>
                            </div>
                        </a>            
                        <?php }}else{ ?>                
                            <p>Produk Tidak ada</p>
                        <?php } ?>
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
                <small>Copyright &copy; 2023 - Bukawarung.</small>
            </div>
        </div>
    </body>
    </html>