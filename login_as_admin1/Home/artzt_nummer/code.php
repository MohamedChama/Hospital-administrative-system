<?php

require 'dbcon.php';

if(isset($_POST['save_student']))
{
    $Vorname = mysqli_real_escape_string($con, $_POST['Vorname']);
    $Nachname = mysqli_real_escape_string($con, $_POST['Nachname']);
    $Strasse = mysqli_real_escape_string($con, $_POST['Strasse']);
    $Ort = mysqli_real_escape_string($con, $_POST['Ort']);
    $Tel = mysqli_real_escape_string($con, $_POST['Tel']);
    $Fax = mysqli_real_escape_string($con, $_POST['Fax']);


    if($Vorname == NULL || $Nachname == NULL )
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "INSERT INTO doctors (Vorname,Nachname,Strasse,Ort,Tel,Fax) VALUES ('$Vorname','$Nachname','$Strasse','$Ort','$Tel','$Fax')";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Student Created Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Student Not Created'
        ];
        echo json_encode($res);
        return;
    }?>
    <script>
      window.location.href = "http://localhost/SNzentrum/login_as_admin1/Home/artzt_nummer/index.php";
   </script>
   <?php
}


if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $Vorname = mysqli_real_escape_string($con, $_POST['VornameED']);
    $Nachname = mysqli_real_escape_string($con, $_POST['NachnameED']);
    $Strasse = mysqli_real_escape_string($con, $_POST['StrasseED']);
    $Ort = mysqli_real_escape_string($con, $_POST['OrtED']);
    $Tel = mysqli_real_escape_string($con, $_POST['TelED']);
    $Fax = mysqli_real_escape_string($con, $_POST['FaxED']);

    //$name = mysqli_real_escape_string($con, $_POST['name']);
  //  $email = mysqli_real_escape_string($con, $_POST['email']);
    //$phone = mysqli_real_escape_string($con, $_POST['phone']);
   // $course = mysqli_real_escape_string($con, $_POST['course']);

    if($Vorname == NULL || $Nachname == NULL )
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }

    $query = "UPDATE doctors SET Vorname='$Vorname', Nachname='$Nachname', Strasse='$Strasse', Ort='$Ort' , Tel='$Tel', Fax='$Fax'
                WHERE Id='$student_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Student Updated Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Student Not Updated'
        ];
        echo json_encode($res);
        return;
    }
    ?>
    <script>
    window.location.href = "http://localhost/SNzentrum/login_as_admin1/Home/artzt_nummer/index.php";
 </script>
 <?php
}


if(isset($_GET['student_id']))
{
    $student_id = mysqli_real_escape_string($con, $_GET['student_id']);

    $query = "SELECT * FROM doctors WHERE id='$student_id'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) == 1)
    {
        $student = mysqli_fetch_array($query_run);

        $res = [
            'status' => 200,
            'message' => 'Student Fetch Successfully by id',
            'data' => $student
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 404,
            'message' => 'Student Id Not Found'
        ];
        echo json_encode($res);
        return;
    }
}

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $query = "DELETE FROM doctors WHERE id='$student_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Student Deleted Successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Student Not Deleted'
        ];
        echo json_encode($res);
        return;
    }
    ?>
    <script>
    window.location.href = "http://localhost/SNzentrum/login_as_admin1/Home/artzt_nummer/index.php";
 </script>
 <?php
}

?>