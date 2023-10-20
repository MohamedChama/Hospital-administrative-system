<?php
  $msg = "";
  $msg_class = "";
  $conn = mysqli_connect("localhost", "root", "", "seniorenzentrum");

  if (isset($_POST['save_profile'])) {
    // for the database
    $profileImageName = time() . '-' . $_FILES["profileImage"]["name"];
    $Vorname = stripslashes($_POST['Vorname']);
    $Nachname = stripslashes($_POST['Nachname']);
    $Email = stripslashes($_POST['Email']);
    $Tel = stripslashes($_POST['Tel']);
    $departement = stripslashes($_POST['departement']);
    $Type = stripslashes($_POST['Type']);
    $User = stripslashes($_POST['User']);
    $Password = stripslashes($_POST['Password']);
    $Password2 = stripslashes($_POST['Passwordck']);


    if(empty($profileImageName) || empty($departement) ||  empty($Type) ) {
      echo '<script>alert("Vorname is empty!");
      window.location.href = "http://localhost/mitarbeiter/index.php";
      </script>';
    }else{

      if ($Password == $Password2){
        $Passwordhach =  hash('sha256', $Password);
        // For image upload
          $target_dir = "../page_persons/imags/";
          $target_file = $target_dir . basename($profileImageName);
        // VALIDATION
        // validate image size. Size is calculated in Bytes
        if($_FILES['profileImage']['size'] > 200000) {
          $msg = "Image size should not be greated than 200Kb";
          $msg_class = "alert-danger";
          }
            // check if file exists
          if(file_exists($target_file)) {
           $msg = "File already exists";
            $msg_class = "alert-danger";
          }
               // Upload image only if no errors
     
         if(move_uploaded_file($_FILES["profileImage"]["tmp_name"], $target_file)) {
             $sql = "INSERT INTO `employees`(`Vorname`, `Nachname`, `Email`, `Tel`, `Departement`, `Photo`, `Type`, `Password`, `Username`) VALUES ('$Vorname','$Nachname','$Email','$Tel','$departement','$profileImageName','$Type','$Passwordhach','$User')";
              if(mysqli_query($conn, $sql)){
               $msg = "Image uploaded and saved in the Database";
               $msg_class = "alert-success";
               } else {
                $msg = "There was an error in the database";
                $msg_class = "alert-danger";
                }
             } else {
             $error = "There was an erro uploading the file";
             $msg = "wa3afak";
            }
      
      }else {
        echo '<script>alert("The password is not equal!");
        window.location.href = "http://localhost/mitarbeiter/index.php";
        </script>';
       }
    }

    

  }





if (isset($_POST['Delete'])){
  $Username = stripslashes($_POST['Username']);
  //echo  $Username;
    $sql = "DELETE FROM `employees` WHERE Username = '$Username'";
    mysqli_query($conn, $sql);
     echo '<script>alert("Operation accomplished successfully");
        
        </script>';
    
 
}



?>