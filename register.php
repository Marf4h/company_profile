<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Aurora Fashion</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body id="bg-login">
    <div class="box-login">
        <h2>Isi Data Anda</h2>
        <form action="" method="POST">
            <input type="text" name="name" placeholder="Nama Lengkap" class="input-control" required>
            <input type="text" name="address" placeholder="Alamat" class="input-control" required>
            <input type="text" name="telpon" placeholder="Telpon" class="input-control" required>
            <input type="text" name="email" placeholder="Email" class="input-control" required>
            <hr><br>
            <input type="text" name="username" placeholder="Username" class="input-control" required>
            <input type="text" name="password" placeholder="Password" class="input-control" required>
            <input type="submit" name="submit" value="Register" class="btn">
        </form>
        <?php
            include('db.php');
            if(isset($_POST['submit'])){
            $name   = $_POST ['name'];
            $address = $_POST ['address'];
            $telpon = $_POST ['telpon'];
            $email  = $_POST ['email'];
            $username = $_POST ['username'];
            $password = $_POST ['password'];


            $insert = mysqli_query($conn, "INSERT INTO tb_admin VALUES (
                                        null,
                                        '".$name."',
                                        '".$username."',
                                        '".$password."',
                                        '".$telpon."',
                                        '".$email."',
                                        '".$address."',
                                        'pelanggan'
                                            ) ");
            if($insert){
            echo "<script>alert('Berhasil, silakan login')</script>";
            echo '<script type="text/javascript">window.location="login.php"</script>';
            }else{
            echo "<script>alert('Gagal')</script>";
            echo '<script type="text/javascript">window.location="register.php"</script>';
            }
// include('db.php');

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// if(isset($_POST['submit'])){

//     $name     = $_POST['name'];
//     $address  = $_POST['address'];
//     $telpon   = $_POST['telpon'];
//     $email    = $_POST['email'];
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     $sql = "INSERT INTO tb_admin 
//             (admin_name, username, password, admin_telpon, admin_email, admin_address, level)
//             VALUES 
//             ('$name', '$username', '$password', '$telpon', '$email', '$address', 'pelanggan')";

//     $insert = mysqli_query($conn, $sql);

//     if(!$insert){
//         die("MySQL Error: " . mysqli_error($conn));
//     } else {
//         echo "INSERT SUCCESS";
//     }
// }

// FAHHHHHHHH

            }
        ?>
    </div>
</body>
</html>