
<?php
$pdo = new PDO("mysql:host=localhost;dbname=seniorenzentrum", "root", "");
// Start session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seniorenzentrum Gundelfingen</title>
    <link rel="icon" type="image/x-icon" href="../imags/Hospital-PNG-HD (1).png">
    <link rel="stylesheet" href="login.css">
</head>

<body>

    <a href="../index.html" class="previous round">&#8249</a>
    <div class="all">
        <h2 id="titlle">Seniorenzentrum Gundelfingen</h2>
        <div class="login-box">
            <form method="post" action="loginadmin1.php">
                <h2>Login As Admin 1</h2>
                 <div class="user-box">
                    <input type="text" name="Username" required>
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="password" name="Password" required>
                    <label>Password</label>
                </div>
                <input type="submit" value="SIGN IN" class="buttonsignyp" name='submit' />
            </form>
        </div>
    </div>

    <?php

// Get username and password from form
if(isset($_POST['submit'])){
    $Username = $_POST['Username'];
    $Password = ($_POST['Password']);

    $stmt = $pdo->prepare("SELECT * FROM employees WHERE Type = 'Admin' AND Username = ?");
    $stmt->execute([$Username]);
    $employee = $stmt->fetch();
    if (!empty($employee['Username'])){
        if (hash_equals($employee['Password'], hash('sha256', $Password))) {

          $_SESSION['Nachname'] = $employee['Nachname'];
          $_SESSION['Type'] = $employee['Type'];
          header("Location: Home");

          exit();
        } else {
          echo'not matche';
        }

    }else {
          echo'no one selected';
        }




}



?>

</body>

</html>