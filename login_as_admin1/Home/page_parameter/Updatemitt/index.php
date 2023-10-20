<?php include_once('processFormupdate.php');
session_start();
if(!isset($_SESSION['Nachname'])){
   ?>
   <script>
      window.location.href = "http://localhost/SNzentrum/login_as_admin1/loginadmin1.php";
   </script>
   
   <?php
   

}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seniorenzentrum Gundelfingen</title>
   <link rel="icon" type="image/x-icon" href="../../../../imags/Hospital-PNG-HD (1).png">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="mid">
        <div class="button4andback">
            <div><a href="../index.php" class="previous round">‹</a></div>
        </div>
        <div class="container">
            <div class="text">Mitarbeiten aktualisieren</div>
            <form action="index.php" method="post" enctype="multipart/form-data">
                <p id="p1"> <b>Wichtig :</b> Zuerst müssen Sie "Username" angeben, die Sie aktualisieren möchten, und
                    auf "Suchen" drücken.</p>
                <div class="form-row" id="formupdatetop">

                    <div class="input-data">
                        <input type="text" name="Usernamesuche" id="Usernamesuche" required>
                        <div class="underline"></div>
                        <label for="">User Name</label>
                    </div>
                    <div class="input-data">
                        <button type="submit" name="Suchen" class="buttonsuchen" id="Suchen">Suchen</button>
                    </div>
                </div>
                
            </form>

            <div id="divnone">
                <hr id="justhr">
                <form action="index.php" method="post" enctype="multipart/form-data">
                <div class="form-row">
                <input type="text" name="Idupdate" id="inputdisplaynon"  value='<?php echo $Id ?>'>
                    <div class="input-data">
                        <input type="text" name="Vorname" required  value='<?php echo $Vornameshow ?>'>
                        <div class="underline"></div>
                        <label for="">Vorname</label>
                    </div>
                    <div class="input-data">
                        <input type="text" name="Nachname" required value='<?php echo $Nachname ?>'>
                        <div class="underline"></div>
                        <label for="">Nachname</label>
                    </div>
                    <div class="input-data">
                        <input type="text" name="Email" required value='<?php echo $Email ?>'>
                        <div class="underline"></div>
                        <label for="">Email Address</label>
                    </div>
                    <div class="input-data">
                        <input type="text" name="Tel" required value='<?php echo $Tel ?>'>
                        <div class="underline"></div>
                        <label for="">Tel</label>
                    </div>
                </div>
                <div class="form-row">
                    <label id="labeeltype">Type*</label>

                    <div class="input-data">
                        <select name="Type" id="combo1">
                            <option  selected value="<?php echo $Type ?>" id="optionusers"><?php echo $Type ?></option>
                            <option value="Admin" id="optionusers">Admin</option>
                            <option value="Admin2" id="optionusers">Admin2</option>
                            <option value="User" id="optionusers">User</option>
                        </select>

                    </div>
                    <label id="labeeltype">Departement*</label>
                    <div class="input-data">
                        <select name="Departement" id="combo2" selected="selected">
                            <option  selected value="<?php echo $Departement ?>" id="optionusers"><?php echo $Departement ?></option>
                            <option value="Departement 1" id="optionusers">Departement 1</option>
                            <option value="Departement 2" id="optionusers">Departement 2</option>
                            <option value="Departement 3" id="optionusers">Departement 3</option>
                            <option value="Departement 4" id="optionusers">Departement 4</option>
                        </select>
                    </div>
                    <br>
                    <div class="input-data">
                        <input type="text" name="Username" required value='<?php echo $Username ?>'>
                        <div class="underline"></div>
                        <label for="">User Name</label>
                    </div>
                    <div class="input-data">
                        <input type="password" name="Password" required>
                        <div class="underline"></div>
                        <label for="">Password</label>
                    </div>
                    <div class="input-data">
                        <input type="password" name="Passwordck" required>
                        <div class="underline"></div>
                        <label for="">Password Confirmation*</label>
                    </div>
                   
                </div>
                <div class="justbtn">
                    <button type="submit" name="Update" class="btnnn4">Update</button>
                </div>
                </form>
            </div>

        </div>


    </div>





    <script src="src.js"></script>
</body>

</html>