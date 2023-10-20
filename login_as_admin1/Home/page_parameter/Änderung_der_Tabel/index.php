
<?php 

    $servername = "localhost"; //servername
    $username = "root";  //username
    $password = ""; //password
    $databasenem = "seniorenzentrum"; //databasenem

    $conn = new mysqli($servername, $username, $password ,$databasenem);
    
    // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  
  session_start();
if(!isset($_SESSION['Nachname'])){
   ?>
   <script>
      window.location.href = "http://localhost/SNzentrum/login_as_admin1/loginadmin1.php";
   </script>
   
   <?php
   
   exit();
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
            <div>
                <!--
         <form action="index.php" method="POST">
            <input type="submit" value="Woche 1" class="buttonwoche" name="btnwoche1">
            <input class="buttonwoche" type="submit" value="Woche 2" name="btnwoche2">
            <input class="buttonwoche" type="submit" value="Woche 3" name="btnwoche3">
            <input class="buttonwoche" type="submit" value="Woche 4" name="btnwoche4">

            </form>-->
            </div>
        </div>


        
    <?php
if(isset($_POST["Datenspeichern"])){

    $x1 = $_POST["montagd1_1"];
    $x2 = $_POST["dienstagd1_1"];
    $x3 = $_POST["mittwochd1_1"];
    $x4 = $_POST["donnerstagd1_1"];
    $x5 = $_POST["freitagd1_1"];
    $x6 = $_POST["samsatgd1_1"];
    $x7 = $_POST["sonntagd1_1"];

    $x8 = $_POST["montagd1_2"];
    $x9 = $_POST["dienstagd1_2"];
    $x10 = $_POST["mittwochd1_2"];
    $x11= $_POST["donnerstagd1_2"];
    $x12 = $_POST["freitagd1_2"];
    $x13 = $_POST["samsatgd1_2"];
    $x14 = $_POST["sonntagd1_2"];

    $x15 = $_POST["montagd1_3"];
    $x16 = $_POST["dienstagd1_3"];
    $x17 = $_POST["mittwochd1_3"];
    $x18 = $_POST["donnerstagd1_3"];
    $x19 = $_POST["freitagd1_3"];
    $x20 = $_POST["samsatgd1_3"];
    $x21 = $_POST["sonntagd1_3"];

    $x22 = $_POST["montagd2_1"];
    $x23 = $_POST["dienstagd2_1"];
    $x24 = $_POST["mittwochd2_1"];
    $x25 = $_POST["donnerstagd2_1"];
    $x26 = $_POST["freitagd2_1"];
    $x27 = $_POST["samsatgd2_1"];
    $x28 = $_POST["sonntagd2_1"];

    $x29 = $_POST["montagd2_2"];
    $x30 = $_POST["dienstagd2_2"];
    $x31 = $_POST["mittwochd2_2"];
    $x32 = $_POST["donnerstagd2_2"];
    $x33 = $_POST["freitagd2_2"];
    $x34 = $_POST["samsatgd2_2"];
    $x35 = $_POST["sonntagd2_2"];

    $x36 = $_POST["montaga4_1"];
    $x37 = $_POST["dienstaga4_1"];
    $x38 = $_POST["mittwocha4_1"];
    $x39 = $_POST["donnerstaga4_1"];
    $x40 = $_POST["freitaga4_1"];
    $x41 = $_POST["samsatga4_1"];
    $x42 = $_POST["sonntaga4_1"];

    $x43 = $_POST["montag22_1"];
    $x44 = $_POST["dienstag22_1"];
    $x45 = $_POST["mittwoch22_1"];
    $x46 = $_POST["donnerstag22_1"];
    $x47 = $_POST["freitag22_1"];
    $x48 = $_POST["samsatg22_1"];
    $x49 = $_POST["sonntag22_1"];

    $x50 = $_POST["montagd5_1"];
    $x51 = $_POST["dienstagd5_1"];
    $x52 = $_POST["mittwochd5_1"];
    $x53 = $_POST["donnerstagd5_1"];
    $x54 = $_POST["freitagd5_1"];
    $x55 = $_POST["samsatgd5_1"];
    $x56 = $_POST["sonntagd5_1"];

    $x57 = $_POST["montagd5_2"];
    $x58 = $_POST["dienstagd5_2"];
    $x59 = $_POST["mittwochd5_2"];
    $x60 = $_POST["donnerstagd5_2"];
    $x61 = $_POST["freitagd5_2"];
    $x62 = $_POST["samsatgd5_2"];
    $x63 = $_POST["sonntagd5_2"];

    $x64 = $_POST["montagd5_3"];
    $x65 = $_POST["dienstagd5_3"];
    $x66 = $_POST["mittwochd5_3"];
    $x67 = $_POST["donnerstagd5_3"];
    $x68 = $_POST["freitagd5_3"];
    $x69 = $_POST["samsatgd5_3"];
    $x70 = $_POST["sonntagd5_3"];

    $x71 = $_POST["montag7a_1"];
    $x72 = $_POST["dienstag7a_1"];
    $x73 = $_POST["mittwoch7a_1"];
    $x74 = $_POST["donnerstag7a_1"];
    $x75 = $_POST["freitag7a_1"];
    $x76 = $_POST["samsatg7a_1"];
    $x77 = $_POST["sonntag7a_1"];

    $x78 = $_POST["montagd4_1"];
    $x79 = $_POST["dienstagd4_1"];
    $x80 = $_POST["mittwochd4_1"];
    $x81 = $_POST["donnerstagd4_1"];
    $x82 = $_POST["freitagd4_1"];
    $x83 = $_POST["samsatgd4_1"];
    $x84 = $_POST["sonntagd4_1"];

    $x85 = $_POST["montagd4_2"];
    $x86 = $_POST["dienstagd4_2"];
    $x87 = $_POST["mittwochd4_2"];
    $x88 = $_POST["donnerstagd4_2"];
    $x89 = $_POST["freitagd4_2"];
    $x90 = $_POST["samsatgd4_2"];
    $x91 = $_POST["sonntagd4_2"];
    


    $sql4 = "UPDATE `calendar` SET `Name`='$x1' WHERE `Tag` = 'Montag' AND `Zeit` = 'D1' AND `welche`='1'  ";
    $sql5 = "UPDATE `calendar` SET `Name`='$x2' WHERE `Tag` = 'Dienstag' AND `Zeit` = 'D1' AND `welche`='1'  ";
    $sql6 = "UPDATE `calendar` SET `Name`='$x3' WHERE `Tag` = 'Mitwoch' AND `Zeit` = 'D1' AND `welche`='1'  ";
    $sql7 = "UPDATE `calendar` SET `Name`='$x4' WHERE `Tag` = 'Donnerstag' AND `Zeit` = 'D1' AND `welche`='1'  ";
    $sql8 = "UPDATE `calendar` SET `Name`='$x5' WHERE `Tag` = 'Freitag' AND `Zeit` = 'D1' AND `welche`='1'  ";
    $sql9 = "UPDATE `calendar` SET `Name`='$x6' WHERE `Tag` = 'Samstag' AND `Zeit` = 'D1' AND `welche`='1'  ";
    $sql10 = "UPDATE `calendar` SET `Name`='$x7' WHERE `Tag` = 'Sonntag' AND `Zeit` = 'D1' AND `welche`='1'  ";


    $sql11 = "UPDATE `calendar` SET `Name`='$x8' WHERE `Tag` = 'Montag' AND `Zeit` = 'D1' AND `welche`='2'  ";
    $sql12 = "UPDATE `calendar` SET `Name`='$x9' WHERE `Tag` = 'Dienstag' AND `Zeit` = 'D1' AND `welche`='2'  ";
    $sql13 = "UPDATE `calendar` SET `Name`='$x10' WHERE `Tag` = 'Mitwoch' AND `Zeit` = 'D1' AND `welche`='2'  ";
    $sql14 = "UPDATE `calendar` SET `Name`='$x11' WHERE `Tag` = 'Donnerstag' AND `Zeit` = 'D1' AND `welche`='2'  ";
    $sql15 = "UPDATE `calendar` SET `Name`='$x12' WHERE `Tag` = 'Freitag' AND `Zeit` = 'D1' AND `welche`='2'  ";
    $sql16 = "UPDATE `calendar` SET `Name`='$x13' WHERE `Tag` = 'Samstag' AND `Zeit` = 'D1' AND `welche`='2'  ";
    $sql17 = "UPDATE `calendar` SET `Name`='$x14' WHERE `Tag` = 'Sonntag' AND `Zeit` = 'D1' AND `welche`='2'  ";

    $sql18 = "UPDATE `calendar` SET `Name`='$x15' WHERE `Tag` = 'Montag' AND `Zeit` = 'D1' AND `welche`='3'  ";
    $sql19 = "UPDATE `calendar` SET `Name`='$x16' WHERE `Tag` = 'Dienstag' AND `Zeit` = 'D1' AND `welche`='3'  ";
    $sql20 = "UPDATE `calendar` SET `Name`='$x17' WHERE `Tag` = 'Mitwoch' AND `Zeit` = 'D1' AND `welche`='3'  ";
    $sql21 = "UPDATE `calendar` SET `Name`='$x18' WHERE `Tag` = 'Donnerstag' AND `Zeit` = 'D1' AND `welche`='3'  ";
    $sql22 = "UPDATE `calendar` SET `Name`='$x19' WHERE `Tag` = 'Freitag' AND `Zeit` = 'D1' AND `welche`='3'  ";
    $sql23 = "UPDATE `calendar` SET `Name`='$x20' WHERE `Tag` = 'Samstag' AND `Zeit` = 'D1' AND `welche`='3'  ";
    $sql24 = "UPDATE `calendar` SET `Name`='$x21' WHERE `Tag` = 'Sonntag' AND `Zeit` = 'D1' AND `welche`='3'  ";

    $sql25 = "UPDATE `calendar` SET `Name`='$x22' WHERE `Tag` = 'Montag' AND `Zeit` = 'D2' AND `welche`='1'  ";
    $sql26 = "UPDATE `calendar` SET `Name`='$x23' WHERE `Tag` = 'Dienstag' AND `Zeit` = 'D2' AND `welche`='1'  ";
    $sql27 = "UPDATE `calendar` SET `Name`='$x24' WHERE `Tag` = 'Mitwoch' AND `Zeit` = 'D2' AND `welche`='1'  ";
    $sql28 = "UPDATE `calendar` SET `Name`='$x25' WHERE `Tag` = 'Donnerstag' AND `Zeit` = 'D2' AND `welche`='1'  ";
    $sql29 = "UPDATE `calendar` SET `Name`='$x26' WHERE `Tag` = 'Freitag' AND `Zeit` = 'D2' AND `welche`='1'  ";
    $sql30 = "UPDATE `calendar` SET `Name`='$x27' WHERE `Tag` = 'Samstag' AND `Zeit` = 'D2' AND `welche`='1'  ";
    $sql31 = "UPDATE `calendar` SET `Name`='$x28' WHERE `Tag` = 'Sonntag' AND `Zeit` = 'D2' AND `welche`='1'  ";
    
    $sql32 = "UPDATE `calendar` SET `Name`='$x29' WHERE `Tag` = 'Montag' AND `Zeit` = 'D2' AND `welche`='2'  ";
    $sql33 = "UPDATE `calendar` SET `Name`='$x30' WHERE `Tag` = 'Dienstag' AND `Zeit` = 'D2' AND `welche`='2'  ";
    $sql34 = "UPDATE `calendar` SET `Name`='$x31' WHERE `Tag` = 'Mitwoch' AND `Zeit` = 'D2' AND `welche`='2'  ";
    $sql35 = "UPDATE `calendar` SET `Name`='$x32' WHERE `Tag` = 'Donnerstag' AND `Zeit` = 'D2' AND `welche`='2'  ";
    $sql36 = "UPDATE `calendar` SET `Name`='$x33' WHERE `Tag` = 'Freitag' AND `Zeit` = 'D2' AND `welche`='2'  ";
    $sql37 = "UPDATE `calendar` SET `Name`='$x34' WHERE `Tag` = 'Samstag' AND `Zeit` = 'D2' AND `welche`='2'  ";
    $sql38 = "UPDATE `calendar` SET `Name`='$x35' WHERE `Tag` = 'Sonntag' AND `Zeit` = 'D2' AND `welche`='2'  ";

    $sql39 = "UPDATE `calendar` SET `Name`='$x36' WHERE `Tag` = 'Montag' AND `Zeit` = 'A4' AND `welche`='1'  ";
    $sql40 = "UPDATE `calendar` SET `Name`='$x37' WHERE `Tag` = 'Dienstag' AND `Zeit` = 'A4' AND `welche`='1'  ";
    $sql41 = "UPDATE `calendar` SET `Name`='$x38' WHERE `Tag` = 'Mitwoch' AND `Zeit` = 'A4' AND `welche`='1'  ";
    $sql42 = "UPDATE `calendar` SET `Name`='$x39' WHERE `Tag` = 'Donnerstag' AND `Zeit` = 'A4' AND `welche`='1'  ";
    $sql43 = "UPDATE `calendar` SET `Name`='$x40' WHERE `Tag` = 'Freitag' AND `Zeit` = 'A4' AND `welche`='1'  ";
    $sql44 = "UPDATE `calendar` SET `Name`='$x41' WHERE `Tag` = 'Samstag' AND `Zeit` = 'A4' AND `welche`='1'  ";
    $sql45 = "UPDATE `calendar` SET `Name`='$x42' WHERE `Tag` = 'Sonntag' AND `Zeit` = 'A4' AND `welche`='1'  ";

    $sql46 = "UPDATE `calendar` SET `Name`='$x43' WHERE `Tag` = 'Montag' AND `Zeit` = '22' AND `welche`='1'  ";
    $sql47 = "UPDATE `calendar` SET `Name`='$x44' WHERE `Tag` = 'Dienstag' AND `Zeit` = '22' AND `welche`='1'  ";
    $sql48 = "UPDATE `calendar` SET `Name`='$x45' WHERE `Tag` = 'Mitwoch' AND `Zeit` = '22' AND `welche`='1'  ";
    $sql49 = "UPDATE `calendar` SET `Name`='$x46' WHERE `Tag` = 'Donnerstag' AND `Zeit` = '22' AND `welche`='1'  ";
    $sql50 = "UPDATE `calendar` SET `Name`='$x47' WHERE `Tag` = 'Freitag' AND `Zeit` = '22' AND `welche`='1'  ";
    $sql51 = "UPDATE `calendar` SET `Name`='$x48' WHERE `Tag` = 'Samstag' AND `Zeit` = '22' AND `welche`='1'  ";
    $sql52 = "UPDATE `calendar` SET `Name`='$x49' WHERE `Tag` = 'Sonntag' AND `Zeit` = '22' AND `welche`='1'  ";



    $sql53 = "UPDATE `calendar` SET `Name`='$x50' WHERE `Tag` = 'Montag' AND `Zeit` = 'D5' AND `welche`='1'  ";
    $sql54 = "UPDATE `calendar` SET `Name`='$x51' WHERE `Tag` = 'Dienstag' AND `Zeit` = 'D5' AND `welche`='1'  ";
    $sql55 = "UPDATE `calendar` SET `Name`='$x52' WHERE `Tag` = 'Mitwoch' AND `Zeit` = 'D5' AND `welche`='1'  ";
    $sql56 = "UPDATE `calendar` SET `Name`='$x53' WHERE `Tag` = 'Donnerstag' AND `Zeit` = 'D5' AND `welche`='1'  ";
    $sql57 = "UPDATE `calendar` SET `Name`='$x54' WHERE `Tag` = 'Freitag' AND `Zeit` = 'D5' AND `welche`='1'  ";
    $sql58 = "UPDATE `calendar` SET `Name`='$x55' WHERE `Tag` = 'Samstag' AND `Zeit` = 'D5' AND `welche`='1'  ";
    $sql59 = "UPDATE `calendar` SET `Name`='$x56' WHERE `Tag` = 'Sonntag' AND `Zeit` = 'D5' AND `welche`='1'  ";


    $sql60 = "UPDATE `calendar` SET `Name`='$x57' WHERE `Tag` = 'Montag' AND `Zeit` = 'D5' AND `welche`='2'  ";
    $sql61 = "UPDATE `calendar` SET `Name`='$x58' WHERE `Tag` = 'Dienstag' AND `Zeit` = 'D5' AND `welche`='2'  ";
    $sql62 = "UPDATE `calendar` SET `Name`='$x59' WHERE `Tag` = 'Mitwoch' AND `Zeit` = 'D5' AND `welche`='2'  ";
    $sql63 = "UPDATE `calendar` SET `Name`='$x60' WHERE `Tag` = 'Donnerstag' AND `Zeit` = 'D5' AND `welche`='2'  ";
    $sql64 = "UPDATE `calendar` SET `Name`='$x61' WHERE `Tag` = 'Freitag' AND `Zeit` = 'D5' AND `welche`='2'  ";
    $sql65 = "UPDATE `calendar` SET `Name`='$x62' WHERE `Tag` = 'Samstag' AND `Zeit` = 'D5' AND `welche`='2'  ";
    $sql66 = "UPDATE `calendar` SET `Name`='$x63' WHERE `Tag` = 'Sonntag' AND `Zeit` = 'D5' AND `welche`='2'  ";

    $sql67 = "UPDATE `calendar` SET `Name`='$x64' WHERE `Tag` = 'Montag' AND `Zeit` = 'D5' AND `welche`='3'  ";
    $sql68 = "UPDATE `calendar` SET `Name`='$x65' WHERE `Tag` = 'Dienstag' AND `Zeit` = 'D5' AND `welche`='3'  ";
    $sql69 = "UPDATE `calendar` SET `Name`='$x66' WHERE `Tag` = 'Mitwoch' AND `Zeit` = 'D5' AND `welche`='3'  ";
    $sql70 = "UPDATE `calendar` SET `Name`='$x67' WHERE `Tag` = 'Donnerstag' AND `Zeit` = 'D5' AND `welche`='3'  ";
    $sql71 = "UPDATE `calendar` SET `Name`='$x68' WHERE `Tag` = 'Freitag' AND `Zeit` = 'D5' AND `welche`='3'  ";
    $sql72 = "UPDATE `calendar` SET `Name`='$x69' WHERE `Tag` = 'Samstag' AND `Zeit` = 'D5' AND `welche`='3'  ";
    $sql73 = "UPDATE `calendar` SET `Name`='$x70' WHERE `Tag` = 'Sonntag' AND `Zeit` = 'D5' AND `welche`='3'  ";


    $sql74 = "UPDATE `calendar` SET `Name`='$x71' WHERE `Tag` = 'Montag' AND `Zeit` = 'A7' AND `welche`='1'  ";
    $sql75 = "UPDATE `calendar` SET `Name`='$x72' WHERE `Tag` = 'Dienstag' AND `Zeit` = 'A7' AND `welche`='1'  ";
    $sql76 = "UPDATE `calendar` SET `Name`='$x73' WHERE `Tag` = 'Mitwoch' AND `Zeit` = 'A7' AND `welche`='1'  ";
    $sql77 = "UPDATE `calendar` SET `Name`='$x74' WHERE `Tag` = 'Donnerstag' AND `Zeit` = 'A7' AND `welche`='1'  ";
    $sql78 = "UPDATE `calendar` SET `Name`='$x75' WHERE `Tag` = 'Freitag' AND `Zeit` = 'A7' AND `welche`='1'  ";
    $sql79 = "UPDATE `calendar` SET `Name`='$x76' WHERE `Tag` = 'Samstag' AND `Zeit` = 'A7' AND `welche`='1'  ";
    $sql80 = "UPDATE `calendar` SET `Name`='$x77' WHERE `Tag` = 'Sonntag' AND `Zeit` = 'A7' AND `welche`='1'  ";


    $sql81 = "UPDATE `calendar` SET `Name`='$x78' WHERE `Tag` = 'Montag' AND `Zeit` = 'D4' AND `welche`='1'  ";
    $sql82 = "UPDATE `calendar` SET `Name`='$x79' WHERE `Tag` = 'Dienstag' AND `Zeit` = 'D4' AND `welche`='1'  ";
    $sql83 = "UPDATE `calendar` SET `Name`='$x80' WHERE `Tag` = 'Mitwoch' AND `Zeit` = 'D4' AND `welche`='1'  ";
    $sql84 = "UPDATE `calendar` SET `Name`='$x81' WHERE `Tag` = 'Donnerstag' AND `Zeit` = 'D4' AND `welche`='1'  ";
    $sql85 = "UPDATE `calendar` SET `Name`='$x82' WHERE `Tag` = 'Freitag' AND `Zeit` = 'D4' AND `welche`='1'  ";
    $sql86 = "UPDATE `calendar` SET `Name`='$x83' WHERE `Tag` = 'Samstag' AND `Zeit` = 'D4' AND `welche`='1'  ";
    $sql87 = "UPDATE `calendar` SET `Name`='$x84' WHERE `Tag` = 'Sonntag' AND `Zeit` = 'D4' AND `welche`='1'  ";

    $sql88 = "UPDATE `calendar` SET `Name`='$x85' WHERE `Tag` = 'Montag' AND `Zeit` = 'D4' AND `welche`='2'  ";
    $sql89 = "UPDATE `calendar` SET `Name`='$x86' WHERE `Tag` = 'Dienstag' AND `Zeit` = 'D4' AND `welche`='2'  ";
    $sql90 = "UPDATE `calendar` SET `Name`='$x87' WHERE `Tag` = 'Mitwoch' AND `Zeit` = 'D4' AND `welche`='2'  ";
    $sql91 = "UPDATE `calendar` SET `Name`='$x88' WHERE `Tag` = 'Donnerstag' AND `Zeit` = 'D4' AND `welche`='2'  ";
    $sql92 = "UPDATE `calendar` SET `Name`='$x89' WHERE `Tag` = 'Freitag' AND `Zeit` = 'D4' AND `welche`='2'  ";
    $sql93 = "UPDATE `calendar` SET `Name`='$x90' WHERE `Tag` = 'Samstag' AND `Zeit` = 'D4' AND `welche`='2'  ";
    $sql94 = "UPDATE `calendar` SET `Name`='$x91' WHERE `Tag` = 'Sonntag' AND `Zeit` = 'D4' AND `welche`='2'  ";

    $stmt4 = $conn->prepare($sql4);
    $stmt5 = $conn->prepare($sql5);
    $stmt6 = $conn->prepare($sql6);
    $stmt7 = $conn->prepare($sql7);
    $stmt8 = $conn->prepare($sql8);
    $stmt9 = $conn->prepare($sql9);
    $stmt10 = $conn->prepare($sql10);

    $stmt11 = $conn->prepare($sql11);
    $stmt12 = $conn->prepare($sql12);
    $stmt13 = $conn->prepare($sql13);
    $stmt14 = $conn->prepare($sql14);
    $stmt15 = $conn->prepare($sql15);
    $stmt16 = $conn->prepare($sql16);
    $stmt17 = $conn->prepare($sql17);

    $stmt18 = $conn->prepare($sql18);
    $stmt19 = $conn->prepare($sql19);
    $stmt20 = $conn->prepare($sql20);
    $stmt21 = $conn->prepare($sql21);
    $stmt22 = $conn->prepare($sql22);
    $stmt23 = $conn->prepare($sql23);
    $stmt24 = $conn->prepare($sql24);

    $stmt25 = $conn->prepare($sql25);
    $stmt26 = $conn->prepare($sql26);
    $stmt27 = $conn->prepare($sql27);
    $stmt28 = $conn->prepare($sql28);
    $stmt29 = $conn->prepare($sql29);
    $stmt30 = $conn->prepare($sql30);
    $stmt31 = $conn->prepare($sql31);

    $stmt32 = $conn->prepare($sql32);
    $stmt33 = $conn->prepare($sql33);
    $stmt34 = $conn->prepare($sql34);
    $stmt35 = $conn->prepare($sql35);
    $stmt36 = $conn->prepare($sql36);
    $stmt37 = $conn->prepare($sql37);
    $stmt38 = $conn->prepare($sql38);

    $stmt39 = $conn->prepare($sql39);
    $stmt40 = $conn->prepare($sql40);
    $stmt41 = $conn->prepare($sql41);
    $stmt42 = $conn->prepare($sql42);
    $stmt43 = $conn->prepare($sql43);
    $stmt44 = $conn->prepare($sql44);
    $stmt45 = $conn->prepare($sql45);

    $stmt46 = $conn->prepare($sql46);
    $stmt47 = $conn->prepare($sql47);
    $stmt48 = $conn->prepare($sql48);
    $stmt49 = $conn->prepare($sql49);
    $stmt50 = $conn->prepare($sql50);
    $stmt51 = $conn->prepare($sql51);
    $stmt52 = $conn->prepare($sql52);

    $stmt53 = $conn->prepare($sql53);
    $stmt54 = $conn->prepare($sql54);
    $stmt55 = $conn->prepare($sql55);
    $stmt56 = $conn->prepare($sql56);
    $stmt57 = $conn->prepare($sql57);
    $stmt58 = $conn->prepare($sql58);
    $stmt59 = $conn->prepare($sql59);

    $stmt60 = $conn->prepare($sql60);
    $stmt61 = $conn->prepare($sql61);
    $stmt62 = $conn->prepare($sql62);
    $stmt63 = $conn->prepare($sql63);
    $stmt64 = $conn->prepare($sql64);
    $stmt65 = $conn->prepare($sql65);
    $stmt66 = $conn->prepare($sql66);

    $stmt67 = $conn->prepare($sql67);
    $stmt68 = $conn->prepare($sql68);
    $stmt69 = $conn->prepare($sql69);
    $stmt70 = $conn->prepare($sql70);
    $stmt71 = $conn->prepare($sql71);
    $stmt72 = $conn->prepare($sql72);
    $stmt73 = $conn->prepare($sql73);

    $stmt74 = $conn->prepare($sql74);
    $stmt75 = $conn->prepare($sql75);
    $stmt76 = $conn->prepare($sql76);
    $stmt77 = $conn->prepare($sql77);
    $stmt78 = $conn->prepare($sql78);
    $stmt79 = $conn->prepare($sql79);
    $stmt80 = $conn->prepare($sql80);

    $stmt81 = $conn->prepare($sql81);
    $stmt82 = $conn->prepare($sql82);
    $stmt83 = $conn->prepare($sql83);
    $stmt84 = $conn->prepare($sql84);
    $stmt85 = $conn->prepare($sql85);
    $stmt86 = $conn->prepare($sql86);
    $stmt87 = $conn->prepare($sql87);

    $stmt88 = $conn->prepare($sql88);
    $stmt89 = $conn->prepare($sql89);
    $stmt90 = $conn->prepare($sql90);
    $stmt91 = $conn->prepare($sql91);
    $stmt92 = $conn->prepare($sql92);
    $stmt93 = $conn->prepare($sql93);
    $stmt94 = $conn->prepare($sql94);
    

    $stmt4->execute();
    $stmt5->execute();
    $stmt6->execute();
    $stmt7->execute();
    $stmt8->execute();
    $stmt9->execute();
    $stmt10->execute();

    $stmt11->execute();
    $stmt12->execute();
    $stmt13->execute();
    $stmt14->execute();
    $stmt15->execute();
    $stmt16->execute();
    $stmt17->execute();

    $stmt18->execute();
    $stmt19->execute();
    $stmt20->execute();
    $stmt21->execute();
    $stmt22->execute();
    $stmt23->execute();
    $stmt24->execute();

    $stmt25->execute();
    $stmt26->execute();
    $stmt27->execute();
    $stmt28->execute();
    $stmt29->execute();
    $stmt30->execute();
    $stmt31->execute();

    $stmt32->execute();
    $stmt33->execute();
    $stmt34->execute();
    $stmt35->execute();
    $stmt36->execute();
    $stmt37->execute();
    $stmt38->execute();

    $stmt39->execute();
    $stmt40->execute();
    $stmt41->execute();
    $stmt42->execute();
    $stmt43->execute();
    $stmt44->execute();
    $stmt45->execute();

    $stmt46->execute();
    $stmt47->execute();
    $stmt48->execute();
    $stmt49->execute();
    $stmt50->execute();
    $stmt51->execute();
    $stmt52->execute();

    $stmt53->execute();
    $stmt54->execute();
    $stmt55->execute();
    $stmt56->execute();
    $stmt57->execute();
    $stmt58->execute();
    $stmt59->execute();

    $stmt60->execute();
    $stmt61->execute();
    $stmt62->execute();
    $stmt63->execute();
    $stmt64->execute();
    $stmt65->execute();
    $stmt66->execute();

    $stmt67->execute();
    $stmt68->execute();
    $stmt69->execute();
    $stmt70->execute();
    $stmt71->execute();
    $stmt72->execute();
    $stmt73->execute();

    $stmt74->execute();
    $stmt75->execute();
    $stmt76->execute();
    $stmt77->execute();
    $stmt78->execute();
    $stmt79->execute();
    $stmt80->execute();

    $stmt81->execute();
    $stmt82->execute();
    $stmt83->execute();
    $stmt84->execute();
    $stmt85->execute();
    $stmt86->execute();
    $stmt87->execute();

    $stmt88->execute();
    $stmt89->execute();
    $stmt90->execute();
    $stmt91->execute();
    $stmt92->execute();
    $stmt93->execute();
    $stmt94->execute();



    

}
   // $x1 = "ayoub";
    
   // $sql4 = "UPDATE `calendar` SET `Name`='$x1' WHERE `Tag` = 'Montag' AND `Zeit` = 'D1' AND `welche`='1'  ";
   // $sql5 = "UPDATE `calendar` SET `Name`='chama' WHERE `Tag` = 'Montag' AND `Zeit` = 'D1' AND `welche`='2'  ";
   // $stmt4 = $conn->prepare($sql4);
   // $stmt5 = $conn->prepare($sql5);

  //// execute the query
 // $stmt4->execute();
  //$stmt5->execute();
  //// echo a message to say the UPDATE succeeded
 

 

?>





        <div class="table-wrapper">
            <div class="tablemargleft">


                <table>
                    <thead class="Tagss">
                        <th id="ntg"></th>
                        <th id="tablelefttop">Montag</th>
                        <th>Dienstag</th>
                        <th>Mittwoch </th>
                        <th class="donstage">Donnerstag</th>
                        <th>Freitag</th>
                        <th>Samstag</th>
                        <th id="tablerighttop">Sonntag</th>


                    </thead>
                    
                    <?php


      $sql3 = "SELECT * FROM calendar WHERE Woche = '1'";
      if(isset($_POST["btnwoche1"])){
         $sql3 = "SELECT * FROM calendar WHERE Woche = '1'";
         
     
      
      
      }
      if(isset($_POST["btnwoche2"])){
         $sql3 = "SELECT * FROM calendar WHERE Woche = '2'";}
      if(isset($_POST["btnwoche3"])){
         $sql3 = "SELECT * FROM calendar WHERE Woche = '3'";}
      if(isset($_POST["btnwoche4"])){
         $sql3 = "SELECT * FROM calendar WHERE Woche = '4'";
         }
        
            
   
   $result3 = $conn->query($sql3);
      if ($result3->num_rows > 0){

         while($row3 = $result3->fetch_assoc()){
              if(($row3["Tag"]=='Montag')&&($row3["Zeit"]=='D1')&&($row3["welche"]=='1') ){
                 $montagd1_1 = $row3["Name"];}
               if(($row3["Tag"]=='Montag')&&($row3["Zeit"]=='D1')&&($row3["welche"]=='2') ){
                              $montagd1_2 = $row3["Name"];} 
               if(($row3["Tag"]=='Montag')&&($row3["Zeit"]=='D1')&&($row3["welche"]=='3') ){
                        $montagd1_3 = $row3["Name"];} 


               if(($row3["Tag"]=='Montag')&&($row3["Zeit"]=='D2')&&($row3["welche"]=='1')){
                        $montagd2_1 = $row3["Name"];}   
               if(($row3["Tag"]=='Montag')&&($row3["Zeit"]=='D2')&&($row3["welche"]=='2') ){
                           $montagd2_2 = $row3["Name"];}

               
               if(($row3["Tag"]=='Montag')&&($row3["Zeit"]=='A4')){
                           $montaga4_1 = $row3["Name"];}            
                              

               if(($row3["Tag"]=='Montag')&&($row3["Zeit"]=='22')){
                           $montag22_1 = $row3["Name"];}
                  

               if(($row3["Tag"]=='Montag')&&($row3["Zeit"]=='D5') &&($row3["welche"]=='1')){
                 $montagd5_1 = $row3["Name"];}
               if(($row3["Tag"]=='Montag')&&($row3["Zeit"]=='D5')&&($row3["welche"]=='2') ){
                              $montagd5_2 = $row3["Name"];} 
               if(($row3["Tag"]=='Montag')&&($row3["Zeit"]=='D5')&&($row3["welche"]=='3') ){
                        $montagd5_3 = $row3["Name"];} 

               if(($row3["Tag"]=='Montag')&&($row3["Zeit"]=='A7')){
                           $montag7a_1 = $row3["Name"];}
 

               if(($row3["Tag"]=='Montag')&&($row3["Zeit"]=='D4')&&($row3["welche"]=='1')){
                           $montagd4_1 = $row3["Name"];}
               if(($row3["Tag"]=='Montag')&&($row3["Zeit"]=='D4')&&($row3["welche"]=='2') ){
                           $montagd4_2 = $row3["Name"];}
                           
                           






                           
               if(($row3["Tag"]=='Dienstag')&&($row3["Zeit"]=='D1')&&($row3["welche"]=='1')){
                              $dienstagd1_1 = $row3["Name"];}
                  if(($row3["Tag"]=='Dienstag')&&($row3["Zeit"]=='D1')&&($row3["welche"]=='2') ){
                                           $dienstagd1_2 = $row3["Name"];} 
                  if(($row3["Tag"]=='Dienstag')&&($row3["Zeit"]=='D1')&&($row3["welche"]=='3') ){
                                     $dienstagd1_3 = $row3["Name"];} 
             
             
                  if(($row3["Tag"]=='Dienstag')&&($row3["Zeit"]=='D2') &&($row3["welche"]=='1')){
                                     $dienstagd2_1 = $row3["Name"];}   
                  if(($row3["Tag"]=='Dienstag')&&($row3["Zeit"]=='D2')&&($row3["welche"]=='2') ){
                                        $dienstagd2_2 = $row3["Name"];}
             
                            
                  if(($row3["Tag"]=='Dienstag')&&($row3["Zeit"]=='A4')){
                                        $dienstaga4_1 = $row3["Name"];}            
                                           
             
                  if(($row3["Tag"]=='Dienstag')&&($row3["Zeit"]=='22')){
                                        $dienstag22_1 = $row3["Name"];}
                               
             
                  if(($row3["Tag"]=='Dienstag')&&($row3["Zeit"]=='D5') &&($row3["welche"]=='1')){
                              $dienstagd5_1 = $row3["Name"];}
                  if(($row3["Tag"]=='Dienstag')&&($row3["Zeit"]=='D5')&&($row3["welche"]=='2') ){
                                           $dienstagd5_2 = $row3["Name"];} 
                  if(($row3["Tag"]=='Dienstag')&&($row3["Zeit"]=='D5')&&($row3["welche"]=='3') ){
                                     $dienstagd5_3 = $row3["Name"];} 
             
                  if(($row3["Tag"]=='Dienstag')&&($row3["Zeit"]=='A7')){
                                        $dienstag7a_1 = $row3["Name"];}
              
             
                  if(($row3["Tag"]=='Dienstag')&&($row3["Zeit"]=='D4') &&($row3["welche"]=='1')){
                                        $dienstagd4_1 = $row3["Name"];}
                  if(($row3["Tag"]=='Dienstag')&&($row3["Zeit"]=='D4')&&($row3["welche"]=='2') ){
                                        $dienstagd4_2 = $row3["Name"];}






                                        
                  if(($row3["Tag"]=='Mitwoch')&&($row3["Zeit"]=='D1') &&($row3["welche"]=='1')){
                     $mittwochd1_1 = $row3["Name"];}
                  if(($row3["Tag"]=='Mitwoch')&&($row3["Zeit"]=='D1')&&($row3["welche"]=='2') ){
                                 $mittwochd1_2 = $row3["Name"];} 
                  if(($row3["Tag"]=='Mitwoch')&&($row3["Zeit"]=='D1')&&($row3["welche"]=='3') ){
                           $mittwochd1_3 = $row3["Name"];} 
                         
                         
                  if(($row3["Tag"]=='Mitwoch')&&($row3["Zeit"]=='D2') &&($row3["welche"]=='1')){
                           $mittwochd2_1 = $row3["Name"];}   
                  if(($row3["Tag"]=='Mitwoch')&&($row3["Zeit"]=='D2')&&($row3["welche"]=='2') ){
                              $mittwochd2_2 = $row3["Name"];}
                         
                                        
                  if(($row3["Tag"]=='Mitwoch')&&($row3["Zeit"]=='A4')){
                              $mittwocha4_1 = $row3["Name"];}            
                                                       
                         
                   if(($row3["Tag"]=='Mitwoch')&&($row3["Zeit"]=='22')){
                         $mittwoch22_1 = $row3["Name"];}
                                           
                         
                  if(($row3["Tag"]=='Mitwoch')&&($row3["Zeit"]=='D5') &&($row3["welche"]=='1')){
                  $mittwochd5_1 = $row3["Name"];}
                  if(($row3["Tag"]=='Mitwoch')&&($row3["Zeit"]=='D5')&&($row3["welche"]=='2') ){
                                 $mittwochd5_2 = $row3["Name"];} 
                  if(($row3["Tag"]=='Mitwoch')&&($row3["Zeit"]=='D5')&&($row3["welche"]=='3') ){
                           $mittwochd5_3 = $row3["Name"];} 
                         
                  if(($row3["Tag"]=='Mitwoch')&&($row3["Zeit"]=='A7')){
                              $mittwoch7a_1 = $row3["Name"];}
                          
                         
                  if(($row3["Tag"]=='Mitwoch')&&($row3["Zeit"]=='D4') &&($row3["welche"]=='1')){
                              $mittwochd4_1 = $row3["Name"];}
                  if(($row3["Tag"]=='Mitwoch')&&($row3["Zeit"]=='D4')&&($row3["welche"]=='2') ){
                              $mittwochd4_2 = $row3["Name"];}





                  if(($row3["Tag"]=='Donnerstag')&&($row3["Zeit"]=='D1') &&($row3["welche"]=='1')){
                  $donnerstagd1_1 = $row3["Name"];}
                  if(($row3["Tag"]=='Donnerstag')&&($row3["Zeit"]=='D1')&&($row3["welche"]=='2') ){
                                 $donnerstagd1_2 = $row3["Name"];} 
                  if(($row3["Tag"]=='Donnerstag')&&($row3["Zeit"]=='D1')&&($row3["welche"]=='3') ){
                           $donnerstagd1_3 = $row3["Name"];} 
                                     
                                     
                  if(($row3["Tag"]=='Donnerstag')&&($row3["Zeit"]=='D2') &&($row3["welche"]=='1')){
                         $donnerstagd2_1 = $row3["Name"];}   
                  if(($row3["Tag"]=='Donnerstag')&&($row3["Zeit"]=='D2')&&($row3["welche"]=='2') ){
                                                                $donnerstagd2_2 = $row3["Name"];}
                                     
                                                    
                  if(($row3["Tag"]=='Donnerstag')&&($row3["Zeit"]=='A4')){
                              $donnerstaga4_1 = $row3["Name"];}            
                                                                   
                                     
                  if(($row3["Tag"]=='Donnerstag')&&($row3["Zeit"]=='22')){
                             $donnerstag22_1 = $row3["Name"];}
                                                       
                                     
                  if(($row3["Tag"]=='Donnerstag')&&($row3["Zeit"]=='D5') &&($row3["welche"]=='1')){
                  $donnerstagd5_1 = $row3["Name"];}
                  if(($row3["Tag"]=='Donnerstag')&&($row3["Zeit"]=='D5')&&($row3["welche"]=='2') ){
                                 $donnerstagd5_2 = $row3["Name"];} 
                  if(($row3["Tag"]=='Donnerstag')&&($row3["Zeit"]=='D5')&&($row3["welche"]=='3') ){
                           $donnerstagd5_3 = $row3["Name"];} 
                                     
                  if(($row3["Tag"]=='Donnerstag')&&($row3["Zeit"]=='A7')){
                            $donnerstag7a_1 = $row3["Name"];}
                                      
                                     
                  if(($row3["Tag"]=='Donnerstag')&&($row3["Zeit"]=='D4') &&($row3["welche"]=='1')){
                              $donnerstagd4_1 = $row3["Name"];}
                  if(($row3["Tag"]=='Donnerstag')&&($row3["Zeit"]=='D4')&&($row3["welche"]=='2') ){
                              $donnerstagd4_2 = $row3["Name"];}





                  if(($row3["Tag"]=='Freitag')&&($row3["Zeit"]=='D1')&&($row3["welche"]=='1')){
                  $freitagd1_1 = $row3["Name"];}
                  if(($row3["Tag"]=='Freitag')&&($row3["Zeit"]=='D1')&&($row3["welche"]=='2') ){
                               $freitagd1_2 = $row3["Name"];} 
                  if(($row3["Tag"]=='Freitag')&&($row3["Zeit"]=='D1')&&($row3["welche"]=='3') ){
                            $freitagd1_3 = $row3["Name"];} 
                                                 
                                                 
                  if(($row3["Tag"]=='Freitag')&&($row3["Zeit"]=='D2') &&($row3["welche"]=='1')){
                           $freitagd2_1 = $row3["Name"];}   
                  if(($row3["Tag"]=='Freitag')&&($row3["Zeit"]=='D2')&&($row3["welche"]=='2') ){
                            $freitagd2_2 = $row3["Name"];}
                                                 
                                                                
                  if(($row3["Tag"]=='Freitag')&&($row3["Zeit"]=='A4')){
                              $freitaga4_1 = $row3["Name"];}            
                                                                               
                                                 
                  if(($row3["Tag"]=='Freitag')&&($row3["Zeit"]=='22')){
                              $freitag22_1 = $row3["Name"];}
                                                                   
                                                 
                  if(($row3["Tag"]=='Freitag')&&($row3["Zeit"]=='D5')&&($row3["welche"]=='1')){
                  $freitagd5_1 = $row3["Name"];}
                  if(($row3["Tag"]=='Freitag')&&($row3["Zeit"]=='D5')&&($row3["welche"]=='2') ){
                                $freitagd5_2 = $row3["Name"];} 
                  if(($row3["Tag"]=='Freitag')&&($row3["Zeit"]=='D5')&&($row3["welche"]=='3') ){
                         $freitagd5_3 = $row3["Name"];} 
                                                 
                  if(($row3["Tag"]=='Freitag')&&($row3["Zeit"]=='A7')){
                              $freitag7a_1 = $row3["Name"];}
                                                  
                                                 
                  if(($row3["Tag"]=='Freitag')&&($row3["Zeit"]=='D4')&&($row3["welche"]=='1')){
                            $freitagd4_1 = $row3["Name"];}
                  if(($row3["Tag"]=='Freitag')&&($row3["Zeit"]=='D4')&&($row3["welche"]=='2') ){
                              $freitagd4_2 = $row3["Name"];}





                  if(($row3["Tag"]=='Samstag')&&($row3["Zeit"]=='D1')&&($row3["welche"]=='1')){
                  $samsatgd1_1 = $row3["Name"];}
                  if(($row3["Tag"]=='Samstag')&&($row3["Zeit"]=='D1')&&($row3["welche"]=='2') ){
                                 $samsatgd1_2 = $row3["Name"];} 
                  if(($row3["Tag"]=='Samstag')&&($row3["Zeit"]=='D1')&&($row3["welche"]=='3') ){
                           $samsatgd1_3 = $row3["Name"];} 
                                                             
                                                             
                  if(($row3["Tag"]=='Samstag')&&($row3["Zeit"]=='D2')&&($row3["welche"]=='1')){
                           $samsatgd2_1 = $row3["Name"];}   
                  if(($row3["Tag"]=='Samstag')&&($row3["Zeit"]=='D2')&&($row3["welche"]=='2') ){
                              $samsatgd2_2 = $row3["Name"];}
                                                             
                                                                            
                  if(($row3["Tag"]=='Samstag')&&($row3["Zeit"]=='A4')){
                              $samsatga4_1 = $row3["Name"];}            
                                                                                           
                                                             
                  if(($row3["Tag"]=='Samstag')&&($row3["Zeit"]=='22')){
                            $samsatg22_1 = $row3["Name"];}
                                                                               
                                                             
                  if(($row3["Tag"]=='Samstag')&&($row3["Zeit"]=='D5')&&($row3["welche"]=='1')){
                  $samsatgd5_1 = $row3["Name"];}
                  if(($row3["Tag"]=='Samstag')&&($row3["Zeit"]=='D5')&&($row3["welche"]=='2') ){
                                 $samsatgd5_2 = $row3["Name"];} 
                  if(($row3["Tag"]=='Samstag')&&($row3["Zeit"]=='D5')&&($row3["welche"]=='3') ){
                           $samsatgd5_3 = $row3["Name"];} 
                                                             
                  if(($row3["Tag"]=='Samstag')&&($row3["Zeit"]=='A7')){
                              $samsatg7a_1 = $row3["Name"];}
                                                              
                                                             
                  if(($row3["Tag"]=='Samstag')&&($row3["Zeit"]=='D4')&&($row3["welche"]=='1')){
                            $samsatgd4_1 = $row3["Name"];}
                  if(($row3["Tag"]=='Samstag')&&($row3["Zeit"]=='D4')&&($row3["welche"]=='2') ){
                            $samsatgd4_2 = $row3["Name"];}
                 
                 



                  if(($row3["Tag"]=='Sonntag')&&($row3["Zeit"]=='D1')&&($row3["welche"]=='1')){
                  $sonntagd1_1 = $row3["Name"];}
                  if(($row3["Tag"]=='Sonntag')&&($row3["Zeit"]=='D1')&&($row3["welche"]=='2') ){
                                 $sonntagd1_2 = $row3["Name"];} 
                  if(($row3["Tag"]=='Sonntag')&&($row3["Zeit"]=='D1')&&($row3["welche"]=='3') ){
                          $sonntagd1_3 = $row3["Name"];} 
                                                                         
                                                                         
                  if(($row3["Tag"]=='Sonntag')&&($row3["Zeit"]=='D2')&&($row3["welche"]=='1')){
                         $sonntagd2_1 = $row3["Name"];}   
                  if(($row3["Tag"]=='Sonntag')&&($row3["Zeit"]=='D2')&&($row3["welche"]=='2') ){
                            $sonntagd2_2 = $row3["Name"];}
                                                                         
                                                                                        
                  if(($row3["Tag"]=='Sonntag')&&($row3["Zeit"]=='A4')&&($row3["welche"]=='1')){
                            $sonntaga4_1 = $row3["Name"];}            
                                                                                                       
                                                                         
                  if(($row3["Tag"]=='Sonntag')&&($row3["Zeit"]=='22')){
                            $sonntag22_1 = $row3["Name"];}
                                                                                           
                                                                         
                  if(($row3["Tag"]=='Sonntag')&&($row3["Zeit"]=='D5')&&($row3["welche"]=='1')){
                  $sonntagd5_1 = $row3["Name"];}
                  if(($row3["Tag"]=='Sonntag')&&($row3["Zeit"]=='D5')&&($row3["welche"]=='2') ){
                                 $sonntagd5_2 = $row3["Name"];} 
                  if(($row3["Tag"]=='Sonntag')&&($row3["Zeit"]=='D5')&&($row3["welche"]=='3') ){
                         $sonntagd5_3 = $row3["Name"];} 
                                                                         
                  if(($row3["Tag"]=='Sonntag')&&($row3["Zeit"]=='A7')){
                              $sonntag7a_1 = $row3["Name"];}
                                                                          
                                                                         
                  if(($row3["Tag"]=='Sonntag')&&($row3["Zeit"]=='D4')&&($row3["welche"]=='1')){
                              $sonntagd4_1 = $row3["Name"];}
                  if(($row3["Tag"]=='Sonntag')&&($row3["Zeit"]=='D4')&&($row3["welche"]=='2') ){
                            $sonntagd4_2 = $row3["Name"];}
           
                 
               
         

      
               }
            }




?>
                    <form action="index.php" method="POST">
                        <div class="buttonsave"><input type="submit" name="Datenspeichern" class="buttonsave2"
                                value="Data speichern" /> </div>
                        <tbody>


                            <tr>

                                <td rowspan="3" class="jajajaja D1">
                                    <p>D1</p>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($montagd1_1)?>" class="depart" id="myBtn"
                                        name="montagd1_1">
                                </td>


                                <td>
                                    <input type="text" value="<?php echo($dienstagd1_1)?>" class="depart" id="myBtn"
                                        name="dienstagd1_1">
                                </td>

                                <td>
                                    <input type="text" value="<?php echo($mittwochd1_1)?>" class="depart" id="myBtn"
                                        name="mittwochd1_1">
                                </td>

                                <td>

                                    <input type="text" value="<?php echo($donnerstagd1_1)?>" class="depart" id="myBtn"
                                        name="donnerstagd1_1">
                                </td>

                                <td>
                                    <input type="text" value="<?php echo($freitagd1_1)?>" class="depart" id="myBtn"
                                        name="freitagd1_1">
                                </td>

                                <td>
                                    <input type="text" value="<?php echo($samsatgd1_1)?>" class="depart" id="myBtn"
                                        name="samsatgd1_1">
                                </td>

                                <td>
                                    <input type="text" value="<?php echo($sonntagd1_1)?>" class="depart" id="myBtn"
                                        name="sonntagd1_1">
                                </td>



                            </tr>

                            <tr>
                                <td>
                                    <input type="text" value="<?php echo($montagd1_2)?>" class="depart" id="myBtn"
                                        name="montagd1_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($dienstagd1_2)?>" class="depart" id="myBtn"
                                        name="dienstagd1_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($mittwochd1_2)?>" class="depart" id="myBtn"
                                        name="mittwochd1_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($donnerstagd1_2)?>" class="depart" id="myBtn"
                                        name="donnerstagd1_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($freitagd1_2)?>" class="depart" id="myBtn"
                                        name="freitagd1_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($samsatgd1_2)?>" class="depart" id="myBtn"
                                        name="samsatgd1_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($sonntagd1_2)?>" class="depart" id="myBtn"
                                        name="sonntagd1_2">
                                </td>

                            </tr>


                            <tr>
                                <td>
                                    <input type="text" value="<?php echo($montagd1_3)?>" class="depart" id="myBtn"
                                        name="montagd1_3">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($dienstagd1_3)?>" class="depart" id="myBtn"
                                        name="dienstagd1_3">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($mittwochd1_3)?>" class="depart" id="myBtn"
                                        name="mittwochd1_3">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($donnerstagd1_3)?>" class="depart" id="myBtn"
                                        name="donnerstagd1_3">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($freitagd1_3)?>" class="depart" id="myBtn"
                                        name="freitagd1_3">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($samsatgd1_3)?>" class="depart" id="myBtn"
                                        name="samsatgd1_3">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($sonntagd1_3)?>" class="depart" id="myBtn"
                                        name="sonntagd1_3">
                                </td>
                            </tr>






                            <tr>
                                <td rowspan="2" class="jajajaja D2">
                                    <p>D2</p>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($montagd2_1)?>" class="depart" id="myBtn"
                                        name="montagd2_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($dienstagd2_1)?>" class="depart" id="myBtn"
                                        name="dienstagd2_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($mittwochd2_1)?>" class="depart" id="myBtn"
                                        name="mittwochd2_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($donnerstagd2_1)?>" class="depart" id="myBtn"
                                        name="donnerstagd2_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($freitagd2_1)?>" class="depart" id="myBtn"
                                        name="freitagd2_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($samsatgd2_1)?>" class="depart" id="myBtn"
                                        name="samsatgd2_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($sonntagd2_1)?>" class="depart" id="myBtn"
                                        name="sonntagd2_1">
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <input type="text" value="<?php echo($montagd2_2)?>" class="depart" id="myBtn"
                                        name="montagd2_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($dienstagd2_2)?>" class="depart" id="myBtn"
                                        name="dienstagd2_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($mittwochd2_2)?>" class="depart" id="myBtn"
                                        name="mittwochd2_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($donnerstagd2_2)?>" class="depart" id="myBtn"
                                        name="donnerstagd2_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($freitagd2_2)?>" class="depart" id="myBtn"
                                        name="freitagd2_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($samsatgd2_2)?>" class="depart" id="myBtn"
                                        name="samsatgd2_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($sonntagd2_2)?>" class="depart" id="myBtn"
                                        name="sonntagd2_2">
                                </td>
                            </tr>







                            <tr>
                                <td class="jajajaja A4">
                                    <p>A4</p>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($montaga4_1)?>" class="depart" id="myBtn"
                                        name="montaga4_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($dienstaga4_1)?>" class="depart" id="myBtn"
                                        name="dienstaga4_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($mittwocha4_1)?>" class="depart" id="myBtn"
                                        name="mittwocha4_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($donnerstaga4_1)?>" class="depart" id="myBtn"
                                        name="donnerstaga4_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($freitaga4_1)?>" class="depart" id="myBtn"
                                        name="freitaga4_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($samsatga4_1)?>" class="depart" id="myBtn"
                                        name="samsatga4_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($sonntaga4_1)?>" class="depart" id="myBtn"
                                        name="sonntaga4_1">
                                </td>
                            </tr>






                            <tr>
                                <td class="jajajaja A22">
                                    <p>22</p>
                                </td>
                                <td id="borderbottom">
                                    <input type="text" value="<?php echo($montag22_1)?>" class="depart" id="myBtn"
                                        name="montag22_1">
                                </td>
                                <td id="borderbottom">
                                    <input type="text" value="<?php echo($dienstag22_1)?>" class="depart" id="myBtn"
                                        name="dienstag22_1">
                                </td>
                                <td id="borderbottom">
                                    <input type="text" value="<?php echo($mittwoch22_1)?>" class="depart" id="myBtn"
                                        name="mittwoch22_1">
                                </td>
                                <td id="borderbottom">
                                    <input type="text" value="<?php echo($donnerstag22_1)?>" class="depart" id="myBtn"
                                        name="donnerstag22_1">
                                </td>
                                <td id="borderbottom">
                                    <input type="text" value="<?php echo($freitag22_1)?>" class="depart" id="myBtn"
                                        name="freitag22_1">
                                </td>
                                <td id="borderbottom">
                                    <input type="text" value="<?php echo($samsatg22_1)?>" class="depart" id="myBtn"
                                        name="samsatg22_1">
                                </td>
                                <td id="borderbottom">
                                    <input type="text" value="<?php echo($sonntag22_1)?>" class="depart" id="myBtn"
                                        name="sonntag22_1">
                                </td>
                            </tr>





                            <tr>
                                <td rowspan="3" class="jajajaja D5">
                                    <p>D5</p>
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($montagd5_1)?>" class="depart" id="myBtn"
                                        name="montagd5_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($dienstagd5_1)?>" class="depart" id="myBtn"
                                        name="dienstagd5_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($mittwochd5_1)?>" class="depart" id="myBtn"
                                        name="mittwochd5_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($donnerstagd5_1)?>" class="depart" id="myBtn"
                                        name="donnerstagd5_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($freitagd5_1)?>" class="depart" id="myBtn"
                                        name="freitagd5_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($samsatgd5_1)?>" class="depart" id="myBtn"
                                        name="samsatgd5_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($sonntagd5_1)?>" class="depart" id="myBtn"
                                        name="sonntagd5_1">
                                </td>

                            <tr>
                                <td>
                                    <input type="text" value="<?php echo($montagd5_2)?>" class="depart" id="myBtn"
                                        name="montagd5_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($dienstagd5_2)?>" class="depart" id="myBtn"
                                        name="dienstagd5_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($mittwochd5_2)?>" class="depart" id="myBtn"
                                        name="mittwochd5_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($donnerstagd5_2)?>" class="depart" id="myBtn"
                                        name="donnerstagd5_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($freitagd5_2)?>" class="depart" id="myBtn"
                                        name="freitagd5_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($samsatgd5_2)?>" class="depart" id="myBtn"
                                        name="samsatgd5_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($sonntagd5_2)?>" class="depart" id="myBtn"
                                        name="sonntagd5_2">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" value="<?php echo($montagd5_3)?>" class="depart" id="myBtn"
                                        name="montagd5_3">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($dienstagd5_3)?>" class="depart" id="myBtn"
                                        name="dienstagd5_3">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($mittwochd5_3)?>" class="depart" id="myBtn"
                                        name="mittwochd5_3">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($donnerstagd5_3)?>" class="depart" id="myBtn"
                                        name="donnerstagd5_3">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($freitagd5_3)?>" class="depart" id="myBtn"
                                        name="freitagd5_3">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($samsatgd5_3)?>" class="depart" id="myBtn"
                                        name="samsatgd5_3">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($sonntagd5_3)?>" class="depart" id="myBtn"
                                        name="sonntagd5_3">
                                </td>
                            </tr>




                            <tr>
                                <td class="jajajaja A7">
                                    <p>7A</p>
                                </td>
                                <td id="borderbottom">
                                    <input type="text" value="<?php echo($montag7a_1)?>" class="depart" id="myBtn"
                                        name="montag7a_1">
                                </td>
                                <td id="borderbottom">
                                    <input type="text" value="<?php echo($dienstag7a_1)?>" class="depart" id="myBtn"
                                        name="dienstag7a_1">
                                </td>
                                <td id="borderbottom">
                                    <input type="text" value="<?php echo($mittwoch7a_1)?>" class="depart" id="myBtn"
                                        name="mittwoch7a_1">
                                </td>
                                <td id="borderbottom">
                                    <input type="text" value="<?php echo($donnerstag7a_1)?>" class="depart" id="myBtn"
                                        name="donnerstag7a_1">
                                </td>
                                <td id="borderbottom">
                                    <input type="text" value="<?php echo($freitag7a_1)?>" class="depart" id="myBtn"
                                        name="freitag7a_1">
                                </td>
                                <td id="borderbottom">
                                    <input type="text" value="<?php echo($samsatg7a_1)?>" class="depart" id="myBtn"
                                        name="samsatg7a_1">
                                </td>
                                <td id="borderbottom">
                                    <input type="text" value="<?php echo($sonntag7a_1)?>" class="depart" id="myBtn"
                                        name="sonntag7a_1">
                                </td>
                            </tr>





                            <tr>
                                <td rowspan="2" class="jajajaja WN"><p>D28</p></td>
                                <td>
                                    <input type="text" value="<?php echo($montagd4_1)?>" class="depart" id="myBtn"
                                        name="montagd4_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($dienstagd4_1)?>" class="depart" id="myBtn"
                                        name="dienstagd4_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($mittwochd4_1)?>" class="depart" id="myBtn"
                                        name="mittwochd4_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($donnerstagd4_1)?>" class="depart" id="myBtn"
                                        name="donnerstagd4_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($freitagd4_1)?>" class="depart" id="myBtn"
                                        name="freitagd4_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($samsatgd4_1)?>" class="depart" id="myBtn"
                                        name="samsatgd4_1">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($sonntagd4_1)?>" class="depart" id="myBtn"
                                        name="sonntagd4_1">
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <input type="text" value="<?php echo($montagd4_2)?>" class="depart" id="myBtn"
                                        name="montagd4_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($dienstagd4_2)?>" class="depart" id="myBtn"
                                        name="dienstagd4_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($mittwochd4_2)?>" class="depart" id="myBtn"
                                        name="mittwochd4_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($donnerstagd4_2)?>" class="depart" id="myBtn"
                                        name="donnerstagd4_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($freitagd4_2)?>" class="depart" id="myBtn"
                                        name="freitagd4_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($samsatgd4_2)?>" class="depart" id="myBtn"
                                        name="samsatgd4_2">
                                </td>
                                <td>
                                    <input type="text" value="<?php echo($sonntagd4_2)?>" class="depart" id="myBtn"
                                        name="sonntagd4_2">
                                </td>

                            </tr>
                    </form>

                    </tbody>
                </table>
            </div>
        </div>
    </div>




</body>
<script src="script.js"></script>
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="close">&times;</span>
            <h2>Modal Header</h2>
        </div>
        <div class="modal-body">
            <div>
                <span id="justspan">Der Tag : </span> <label id="day"></label>
            </div>
            <div> <span id="justspan">Die Zeit : </span><label id="any"></label></div>

        </div>
        <div class="modal-body">

            <div class="dropdown">
                <div class="select" id="selectall"> <span class="selected" id="selecteddd">.</span> </div>
                <ul class="menu">
                    <li class="mennu" id="displaynoneindiv">
                        <div class="dropdown1">
                            <div class="select1" id="ntgggggg"><span></span> </div>
                        </div>
                    </li>
                    <li class="mennuu">
                        <div class="dropdown1">
                            <div class="select1" id="Departementa"> <span class="selected1">Departement A</span> </div>
                            <ul class="menu1" id="menudepA">
                                <li id="depsa">S_chama</li>
                                <li class="depsa">Person1</li>
                                <li class="depsa">person2</li>
                                <li class="depsa">person3</li>
                                <li class="depsa">person4</li>
                                <li class="depsa">person5</li>
                                <li class="depsa">person6</li>
                            </ul>
                        </div>
                    </li>
                    <li class="mennuu">
                        <div class="dropdown1">
                            <div class="select1" id="Departementb"> <span class="selected1">Departement B</span> </div>
                            <ul class="menu1" id="menudepB">
                                <li class="depsa">Person6</li>
                                <li class="depsa">person7</li>
                                <li class="depsa">person8</li>
                                <li class="depsa">person9</li>
                                <li class="depsa">person10</li>
                                <li class="depsa">person11</li>
                            </ul>
                        </div>
                    </li>
                    <li class="mennuu">
                        <div class="dropdown1">
                            <div class="select1" id="Departementc"> <span class="selected1">Departement C</span> </div>
                            <ul class="menu1" id="menudepC">
                                <li class="depsa">Person12</li>
                                <li class="depsa">person13</li>
                                <li class="depsa">person14</li>
                                <li class="depsa">person15</li>
                                <li class="depsa">person16</li>
                                <li class="depsa">person17</li>>
                            </ul>
                        </div>
                    </li>
                    <li class="mennuu">
                        <div class="dropdown1">
                            <div class="select1" id="Departementd"> <span class="selected1">Departement D</span> </div>
                            <ul class="menu1" id="menudepD">
                                <li id="depsa">S_chama</li>
                                <li class="depsa">Person1</li>
                                <li class="depsa">person2</li>
                                <li class="depsa">person3</li>
                                <li class="depsa">person4</li>
                                <li class="depsa">person5</li>
                                <li class="depsa">person6</li>
                            </ul>
                        </div>
                    </li>


                    </li>
                </ul>
            </div>




        </div>
        <br>
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="footer">
            <button id="buttonshow">show</button>
            <button id="buttonvid">vide</button>
        </div>



    </div>

</div>



<script src="src.js"></script>
</body>

</html>