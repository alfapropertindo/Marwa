<?php

include "layout/database.php";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM users WHERE username ='$username' AND password ='$password'
    ";

    $result = $db->query($sql);

    if($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        
       header("lacation: dashboard.php");
    } else {
    
        echo "akun tidak ditemukan";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php include "layout/header.html" ?>
    <h3>MASUK AKUN</h3>
    <form action="login.php" method="POST">
        <input type="text" placeholder="username" name="username" />
        <input type="password" placeholder="password" name="password" />
        <button type="submit" name="login">Masuk Sekarang</button>
    </form>
    <?php include "layout/footer.html" ?>
</body>

</html>