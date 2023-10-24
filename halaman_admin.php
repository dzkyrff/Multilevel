<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .halaman_admin {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }

        a {
            text-decoration: none;
            color: #fff;
            background-color: #4CAF50;
            padding: 10px 15px;
            border-radius: 4px;
            display: inline-block;
            margin-top: 20px;
        }

        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <?php
    session_start();

    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
        header("location:index.php?pesan=gagal");
    }
    ?>

    <div class="halaman_admin">
        <h1>Ini Halaman Admin</h1>
        <p>Halo <b><?php echo $_SESSION['username']; ?></b>, Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
        <a href="logout.php">LOGOUT</a>
    </div>

</body>
</html>
