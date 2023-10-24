<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> LOGIN MULTILEVEL </title>
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

        .panel_login {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        .tulisan_atas {
            font-size: 18px;
            margin-bottom: 20px;
            color: #333;
        }

        .form_login {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .tombol_login {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .tombol_login:hover {
            background-color: #45a049;
        }

        .alert {
            background-color: #f44336;
            color: white;
            padding: 14px 20px;
            margin: 10px 0;
            border: none;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <?php
    if(isset($_GET['pesan'])){
        if($_GET['pesan']=="gagal"){
            echo "<div class='alert'>Username dan Password Salah !</div>";
        }
    }
    ?>

    <div class="panel_login">
        <p class="tulisan_atas">Silahkan Masuk</p>

        <form action="cek_login.php" method="post">
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username" required="required">

            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password" required="required">

            <input type="submit" class="tombol_login" value="LOGIN">

            <br/>
            <br/>
        </form>
    </div>

</body>
</html>
