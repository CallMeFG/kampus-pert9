<?php 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <h2>Data Mahasiswa</h2>
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td colspan="3" align="center"><input type="submit" value="Kirim" name="kirim"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
    // if(isset($_POST['username']) && isset($_POST['pass'])) {
    //     $username = $_POST['username'];
    //     $pass = $_POST['pass'];

    //     echo 'username: ' . $username . '<br>';
    //     echo 'password: ' . $pass . '<br>';
    // }
    if(isset($_POST['kirim'])) {
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        echo 'username anda: ' . $username . '<br>';
        echo 'password anda: ' . $pass . '<br>';
    }


?>
