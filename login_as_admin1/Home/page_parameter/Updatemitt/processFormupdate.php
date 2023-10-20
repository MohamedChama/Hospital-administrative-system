<?php
  $msg = "";
  $msg_class = "";
  $conn = mysqli_connect("localhost", "root", "", "seniorenzentrum");

  if (isset($_POST['Update'])) {
    
    $Id = stripslashes($_POST['Idupdate']);
    $Vorname = stripslashes($_POST['Vorname']);
    $Nachname = stripslashes($_POST['Nachname']);
    $Email = stripslashes($_POST['Email']);
    $Tel = stripslashes($_POST['Tel']);
    $Departement = stripslashes($_POST['Departement']);
    $Type = stripslashes($_POST['Type']);
    $Username = stripslashes($_POST['Username']);
    $Password = stripslashes($_POST['Password']);
    $Password2 = stripslashes($_POST['Passwordck']);

    
      if ($Password == $Password2){
        $Passwordhach =  hash('sha256', $Password);
             $sql = "UPDATE `employees` SET `Vorname`='$Vorname',`Nachname`='$Nachname',`Email`='$Email',`Tel`='$Tel',`Departement`='$Departement',`Type`='$Type',`Password`='$Passwordhach',`Username`='$Username' WHERE `Id`='$Id'";
             if(mysqli_query($conn, $sql)){
              echo '<script>alert("update good");
              window.location.href = "http://localhost/mitarbeiter/Updatemitt/index.php";
              </script>';
              } else {
                echo '<script>alert("update bad");
              window.location.href = "http://localhost/mitarbeiter/Updatemitt/index.php";
              </script>';
               } 
            } else {
              echo '<script>alert("The password is not equal!");
              window.location.href = "http://localhost/mitarbeiter/index.php";
              </script>';
             }
      
      }
  


      $Id = '';
      $Vornameshow = '';
      $Nachname = '';
      $Email = '';
      $Tel = ''; 
      $Departement = '';
      $Type = '';
      $Username = '';


if (isset($_POST['Suchen'])){

  


  $Usernamesuche = stripslashes($_POST['Usernamesuche']);
  $sql = "SELECT `Id`, `Vorname`, `Nachname`, `Email`, `Tel`, `Departement`, `Type`, `Username` FROM `employees` WHERE Username = '$Usernamesuche' ";
  $result = $conn->query($sql);
  if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      $Id = $row["Id"];
      $Vornameshow = $row["Vorname"];
      $Nachname = $row["Nachname"];
      $Email = $row["Email"];
      $Tel = $row["Tel"];
      $Departement = $row["Departement"];
      $Type = $row["Type"];
      $Username = $row["Username"];
    
    }
  }
    }













?>