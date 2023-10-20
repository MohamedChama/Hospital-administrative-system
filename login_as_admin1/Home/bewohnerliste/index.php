<?php
$con = mysqli_connect("localhost","root","","seniorenzentrum");

session_start();
if(!isset($_SESSION['Nachname'])){
   ?>
   <script>
      window.location.href = "http://localhost/SNzentrum/login_as_admin1/loginadmin1.php";
   </script>
   
   <?php
   
   exit();
}

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}
if(isset($_POST['savee'])){
         $Name = mysqli_real_escape_string($con, $_POST['Name']);
        $Tag = mysqli_real_escape_string($con, $_POST['Tag']);
        $opp = mysqli_real_escape_string($con, $_POST['opp']);
        $Time = mysqli_real_escape_string($con, $_POST['Time']);

    if(empty($Name) || empty($Tag)|| empty($opp) ){
        ?>
        <script>
            alert("Es gibt ein Problem bei der Eingabe von Informationen")
            window.location.href = "http://localhost/SNzentrum/login_as_admin1/Home/bewohnerliste/index.php";
        </script>
        <?php

    }else{
        
    
        $query = "INSERT INTO `liste`(`Name`, `Tag`, `Aufgaben`, `Time`) VALUES ('$Name','$Tag','$opp','$Time')";
    
        $query_run = mysqli_query($con, $query);
    }

    

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seniorenzentrum Gundelfingen</title>
   <link rel="icon" type="image/x-icon" href="../../../imags/Hospital-PNG-HD (1).png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">




    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="all">
        <div class="left">
            <div class="nav1">

                <a class="icon11" href="../page_parameter/index.php">
                    <span>
                        <ion-icon name="cog-outline" class="icon1" id="iconpara"></ion-icon>
                    </span>
                </a>
                <a class="icon11" href="http://localhost/SNzentrum/">
                    <span>
                        <ion-icon name="log-out-outline" class="icon1"></ion-icon>
                    </span>
                </a>
                <div class="dark">



                    <input class="darkmood2" type="checkbox" id="darkmode-toggle" />
                    <label class="darkmood" for="darkmode-toggle">
                        <div class="backgrounddr">
                            <?xml version="1.0" encoding="utf-8"?>

                            <svg class="sun" width="16px" height="16px" viewBox="0 0 16 16"
                                xmlns="http://www.w3.org/2000/svg">

                                <g>

                                    <path d="M8 .25a.75.75 0 01.75.75v1.273a.75.75 0 01-1.5 0V1A.75.75 0 018 .25z" />

                                    <path fill-rule="evenodd"
                                        d="M4 8a4 4 0 118 0 4 4 0 01-8 0zm4-2.5a2.5 2.5 0 100 5 2.5 2.5 0 000-5z"
                                        clip-rule="evenodd" />

                                    <path
                                        d="M8.75 13.727a.75.75 0 00-1.5 0V15a.75.75 0 001.5 0v-1.273zM2.519 2.518a.75.75 0 011.06 0l.904.904a.75.75 0 01-1.06 1.06l-.904-.903a.75.75 0 010-1.06zM12.578 11.517a.75.75 0 00-1.061 1.06l.904.904a.75.75 0 101.06-1.06l-.903-.904zM.25 8A.75.75 0 011 7.25h1.273a.75.75 0 010 1.5H1A.75.75 0 01.25 8zM13.727 7.25a.75.75 0 000 1.5H15a.75.75 0 000-1.5h-1.273zM4.483 11.517a.75.75 0 010 1.06l-.904.904a.75.75 0 01-1.06-1.06l.903-.904a.75.75 0 011.061 0zM13.481 3.58a.75.75 0 00-1.06-1.062l-.904.904a.75.75 0 101.06 1.06l.904-.903z" />

                                </g>

                            </svg>
                            <?xml version="1.0" encoding="iso-8859-1"?>

                            <svg class="moon" height="12px" width="12px" version="1.1" id="Capa_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                viewBox="0 0 383.852 383.852" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M382.667,248.54c-2.528-6.168-8.48-9.896-14.776-9.904c-0.032,0-0.064-0.008-0.096-0.008c-0.104,0-0.192,0.04-0.296,0.048
                                              c-1.232,0.032-2.464,0.232-3.688,0.56c-0.456,0.12-0.888,0.24-1.328,0.392c-0.224,0.08-0.456,0.112-0.688,0.2
                                              c-20.072,8.248-41.392,12.432-63.384,12.432c-91.976,0-166.808-74.832-166.808-166.808c0-21.992,4.176-43.312,12.432-63.384
                                              c0.12-0.28,0.16-0.576,0.256-0.864c0.12-0.352,0.224-0.704,0.32-1.072c0.36-1.32,0.584-2.648,0.6-3.976
                                              c0-0.056,0.024-0.112,0.024-0.176c0-0.016-0.008-0.04-0.008-0.056c0-0.96-0.112-1.904-0.288-2.832c-0.04-0.2-0.072-0.4-0.112-0.6
                                              c-0.208-0.92-0.472-1.832-0.84-2.696c-0.144-0.336-0.344-0.624-0.504-0.944c-1.672-3.336-4.44-6.144-8.168-7.672
                                              c-4.36-1.784-9.024-1.464-12.96,0.416c-0.04,0.016-0.088,0.024-0.128,0.048c-23.912,9.832-45.496,24.264-64.152,42.92
                                              c-77.432,77.528-77.432,203.672,0.008,281.216c38.768,38.72,89.68,58.072,140.6,58.072s101.84-19.36,140.616-58.08
                                              c18.592-18.6,33-40.112,42.832-63.944c0.048-0.088,0.064-0.192,0.104-0.288c0.456-0.952,0.824-1.944,1.088-2.976
                                              c0.016-0.08,0.048-0.152,0.072-0.232C384.155,255.18,383.995,251.772,382.667,248.54z M316.691,303.148
                                              c-65.064,64.968-170.92,64.968-235.968,0c-64.976-65.056-64.976-170.912-0.008-235.96c6.944-6.944,14.448-13.064,22.312-18.576
                                              c-2.256,12.064-3.424,24.36-3.424,36.848c0,109.624,89.184,198.808,198.808,198.808c12.48,0,24.784-1.168,36.848-3.424
                                              C329.739,288.7,323.635,296.204,316.691,303.148z" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                </div>

            </div>

            <div class="nav2">
                <ul class="logosss">
                    <li class="list ">
                        <a class="icon11" id="firsicon" href="../page_calendar/index.php">
                            <span>
                                <ion-icon name="calendar-outline" class="icon2" id="firsicon"></ion-icon>
                            </span>
                        </a>
                    </li>

                    <li class="list ">
                        <a class="icon11" href="../page_persons/index.php">
                            <span>
                                <ion-icon name="people-outline" class="icon2"></ion-icon>
                            </span>
                        </a>
                    </li>
                    <li class="list ">
                        <a class="icon11" href="../artzt_nummer/index.php">
                            <span>
                                <ion-icon name="newspaper-outline" class="icon2"></ion-icon>
                            </span>
                        </a>
                    </li>
                    <li class="list ">
                        <a class="icon11" href="../bewohnerliste/index.php">
                            <span>
                                <ion-icon name="list-circle-outline" class="icon2"></ion-icon>
                            </span>
                        </a>
                    </li>
                    <li class="list ">
                        <a class="icon11" href="../table3/index.php">
                            <span>
                                <ion-icon name="file-tray-stacked-outline" class="icon2" id="lasticon"></ion-icon>
                            </span>
                        </a>
                    </li>




                </ul>
            </div>

            <div class="nav3">
                <a href="../index.php"><img src="../../../imags/Hospital-PNG-HD (1).png" alt="logo" id="logo"
                        width="50px"></a>


            </div>
            <div class="nav4">

            </div>
        </div>

        <div class="mid">
            <div class="textandbutton">
                <h2 class="title2">Liste für <b>RR</b> , <b>BZ</b> und <b>Gewichtskontrolle</b> </h2>
                <a href="#addEmployeeModal" id="addnewartbutton" class="btn btn-success" data-toggle="modal"><i
                        class="material-icons">&#xE147;</i> <span>Add New</span></a>

            </div>
            <div class="tableRRBZ">

                <div class="justforscroll">
                    <table id="tableread" >
                        <thead>
                            <tr class="trtop">

                                <th class="tageentitel2" id="montagborder">Montag</th>
                                <th class="tageentitel">Dienstag</th>
                                <th class="tageentitel">Mittwoch</th>
                                <th class="tageentitel">Donnerstag</th>
                                <th class="tageentitel">Freitag</th>
                                <th class="tageentitel">Samstag</th>
                                <th class="tageentitel3">Sonntag</th>
                            </tr>


                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="7" class="alltd" id="RR">RR</td>

                            </tr>
                      
                            <tr>
                                <td class="alltd" id="montagrr1">.</td>
                                <td class="alltd" id="dienstagrr1">.</td>
                                <td class="alltd" id="mittwochrr1">.</td>
                                <td class="alltd" id="donnerstagrr1">.</td>
                                <td class="alltd" id="freitagrr1">.</td>
                                <td class="alltd" id="samstagrr1">.</td>
                                <td class="alltd" id="sonntagrr1">.</td>
                            </tr>
                            <tr>
                                <td class="alltd" id="montagrr2">.</td>
                                <td class="alltd" id="dienstagrr2">.</td>
                                <td class="alltd" id="mittwochrr2">.</td>
                                <td class="alltd" id="donnerstagrr2">.</td>
                                <td class="alltd" id="freitagrr2">.</td>
                                <td class="alltd" id="samstagrr2">.</td>
                                <td class="alltd" id="sonntagrr2">.</td>
                            </tr>
                            <tr>
                                <td class="alltd" id="montagrr3">.</td>
                                <td class="alltd" id="dienstagrr3">.</td>
                                <td class="alltd" id="mittwochrr3">.</td>
                                <td class="alltd" id="donnerstagrr3">.</td>
                                <td class="alltd" id="freitagrr3">.</td>
                                <td class="alltd" id="samstagrr3">.</td>
                                <td class="alltd" id="sonntagrr3">.</td>
                            </tr>
                            <tr>
                                <td class="alltd" id="montagrr4">.</td>
                                <td class="alltd" id="dienstagrr4">.</td>
                                <td class="alltd" id="mittwochrr4">.</td>
                                <td class="alltd" id="donnerstagrr4">.</td>
                                <td class="alltd" id="freitagrr4">.</td>
                                <td class="alltd" id="samstagrr4">.</td>
                                <td class="alltd" id="sonntagrr4">.</td>
                            </tr>
                            <tr>
                                <td class="alltd" id="montagrr5">.</td>
                                <td class="alltd" id="dienstagrr5">.</td>
                                <td class="alltd" id="mittwochrr5">.</td>
                                <td class="alltd" id="donnerstagrr5">.</td>
                                <td class="alltd" id="freitagrr5">.</td>
                                <td class="alltd" id="samstagrr5">.</td>
                                <td class="alltd" id="sonntagrr5">.</td>
                            </tr>
                            <tr>
                                <td colspan="7" class="alltd" id="BZ">BZ</td>
                            </tr>
                            <tr>
                                <td class="alltd" id="montagbz1">.</td>
                                <td class="alltd" id="dienstagbz1">.</td>
                                <td class="alltd" id="mittwochbz1">.</td>
                                <td class="alltd" id="donnerstagbz1">.</td>
                                <td class="alltd" id="freitagbz1">.</td>
                                <td class="alltd" id="samstagbz1">.</td>
                                <td class="alltd" id="sonntagbz1">.</td>
                            </tr>
                            <tr>
                                <td class="alltd" id="montagbz2">.</td>
                                <td class="alltd" id="dienstagbz2">.</td>
                                <td class="alltd" id="mittwochbz2">.</td>
                                <td class="alltd" id="donnerstagbz2">.</td>
                                <td class="alltd" id="freitagbz2">.</td>
                                <td class="alltd" id="samstagbz2">.</td>
                                <td class="alltd" id="sonntagbz2">.</td>
                            </tr>
                            <tr>
                                <td class="alltd" id="montagbz3">.</td>
                                <td class="alltd" id="dienstagbz3">.</td>
                                <td class="alltd" id="mittwochbz3">.</td>
                                <td class="alltd" id="donnerstagbz3">.</td>
                                <td class="alltd" id="freitagbz3">.</td>
                                <td class="alltd" id="samstagbz3">.</td>
                                <td class="alltd" id="sonntagbz3">.</td>
                            </tr>
                            <tr>
                                <td class="alltd" id="montagbz4">.</td>
                                <td class="alltd" id="dienstagbz4">.</td>
                                <td class="alltd" id="mittwochbz4">.</td>
                                <td class="alltd" id="donnerstagbz4">.</td>
                                <td class="alltd" id="freitagbz4">.</td>
                                <td class="alltd" id="samstagbz4">.</td>
                                <td class="alltd" id="sonntagbz4">.</td>
                            </tr>
                            <tr>
                                <td colspan="7" class="alltd" id="Sewichts">Gewichts Kontrolle</td>
                            </tr>
                            <tr>
                                <td class="alltd" id="montagsk1">.</td>
                                <td class="alltd" id="dienstagsk1">.</td>
                                <td class="alltd" id="mittwochsk1">.</td>
                                <td class="alltd" id="donnerstagsk1">.</td>
                                <td class="alltd" id="freitagsk1">.</td>
                                <td class="alltd" id="samstagsk1">.</td>
                                <td class="alltd" id="sonntagsk1">.</td>
                            </tr>
                            <tr>
                                <td class="alltd" id="montagsk2">.</td>
                                <td class="alltd" id="dienstagsk2">.</td>
                                <td class="alltd" id="mittwochsk2">.</td>
                                <td class="alltd" id="donnerstagsk2">.</td>
                                <td class="alltd" id="freitagsk2">.</td>
                                <td class="alltd" id="samstagsk2">.</td>
                                <td class="alltd" id="sonntagsk2">.</td>
                            </tr>
                            <tr>
                                <td class="alltd" id="montagsk3">.</td>
                                <td class="alltd" id="dienstagsk3">.</td>
                                <td class="alltd" id="mittwochsk3">.</td>
                                <td class="alltd" id="donnerstagsk3">.</td>
                                <td class="alltd" id="freitagsk3">.</td>
                                <td class="alltd" id="samstagsk3">.</td>
                                <td class="alltd" id="sonntagsk3">.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="index.php" method="post">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Employee</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <table style="margin-left:30px ;" class="tablemodal">
                            <tr style="height:60px ;">
                                <td>Name : </td>
                                <td><input name="Name" class="input" id="inputname" type="text"
                                        placeholder="Geben Sie den Namen ein" />
                                </td>

                            </tr>
                            <tr style="height:60px ;">
                                <td>Welcher Tag : </td>
                                <td>
                                    <select id="Tag" name="Tag">
                                        <option disabled="" selected="" value=""> </option>
                                        <option value="Montag">Montag</option>
                                        <option value="Dienstag">Dienstag</option>
                                        <option value="Mittwoch">Mittwoch</option>
                                        <option value="Donnerstag">Donnerstag</option>
                                        <option value="Freitag">Freitag</option>
                                        <option value="Samstag">Samstag</option>
                                        <option value="Sonntag">Sonntag</option>
                                    </select>
                                </td>
                            </tr>
                            <tr style="height:60px ;">
                                <td>Time : </td>
                                <td>
                                <input type="time" name="Time" value="00:00" >
                                </td>
                            </tr>
                            <tr style="height:60px ;">
                                <td>Was Aufgaben : </td>
                                <td>
                                    <select id="op" name="opp">
                                        <option disabled="" selected="" value=""></option>
                                        <option value="RR">RR</option>
                                        <option value="BZ">BZ</option>
                                        <option value="Gewichts Kontrolle">Gewichts Kontrolle</option>
                                    </select>
                                </td>

                            </tr>
                            


                        </table>

                        <div class="modal-footer">
                            <input type="button" id="Cancel" class="btn btn-default" data-dismiss="modal"
                                value="Cancel">
                                <input type="submit" name="savee" onclick="windowld()"   class="btn btn-success" value='Add'>


                                

                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>





    <script>
        let montagrr1 = document.getElementById('montagrr1');
        let montagrr2 = document.getElementById('montagrr2');
        let montagrr3 = document.getElementById('montagrr3');
        let montagrr4 = document.getElementById('montagrr4');
        let montagrr5 = document.getElementById('montagrr5');

        let dienstagrr1 = document.getElementById('dienstagrr1');
        let dienstagrr2 = document.getElementById('dienstagrr2');
        let dienstagrr3 = document.getElementById('dienstagrr3');
        let dienstagrr4 = document.getElementById('dienstagrr4');
        let dienstagrr5 = document.getElementById('dienstagrr5');

        let mittwochrr1 = document.getElementById('mittwochrr1');
        let mittwochrr2 = document.getElementById('mittwochrr2');
        let mittwochrr3 = document.getElementById('mittwochrr3');
        let mittwochrr4 = document.getElementById('mittwochrr4');
        let mittwochrr5 = document.getElementById('mittwochrr5');

        let donnerstagrr1 = document.getElementById('donnerstagrr1');
        let donnerstagrr2 = document.getElementById('donnerstagrr2');
        let donnerstagrr3 = document.getElementById('donnerstagrr3');
        let donnerstagrr4 = document.getElementById('donnerstagrr4');
        let donnerstagrr5 = document.getElementById('donnerstagrr5');

        let freitagrr1 = document.getElementById('freitagrr1');
        let freitagrr2 = document.getElementById('freitagrr2');
        let freitagrr3 = document.getElementById('freitagrr3');
        let freitagrr4 = document.getElementById('freitagrr4');
        let freitagrr5 = document.getElementById('freitagrr5');

        let samstagrr1 = document.getElementById('samstagrr1');
        let samstagrr2 = document.getElementById('samstagrr2');
        let samstagrr3 = document.getElementById('samstagrr3');
        let samstagrr4 = document.getElementById('samstagrr4');
        let samstagrr5 = document.getElementById('samstagrr5');

        let sonntagrr1 = document.getElementById('sonntagrr1');
        let sonntagrr2 = document.getElementById('sonntagrr2');
        let sonntagrr3 = document.getElementById('sonntagrr3');
        let sonntagrr4 = document.getElementById('sonntagrr4');
        let sonntagrr5 = document.getElementById('sonntagrr5');



        let montagbz1 = document.getElementById('montagbz1');
        let montagbz2 = document.getElementById('montagbz2');
        let montagbz3 = document.getElementById('montagbz3');
        let montagbz4 = document.getElementById('montagbz4');
        
        let dienstagbz1 = document.getElementById('dienstagbz1');
        let dienstagbz2 = document.getElementById('dienstagbz2');
        let dienstagbz3 = document.getElementById('dienstagbz3');
        let dienstagbz4 = document.getElementById('dienstagbz4');
        
        let mittwochbz1 = document.getElementById('mittwochbz1');
        let mittwochbz2 = document.getElementById('mittwochbz2');
        let mittwochbz3 = document.getElementById('mittwochbz3');
        let mittwochbz4 = document.getElementById('mittwochbz4');

        let donnerstagbz1 = document.getElementById('donnerstagbz1');
        let donnerstagbz2 = document.getElementById('donnerstagbz2');
        let donnerstagbz3 = document.getElementById('donnerstagbz3');
        let donnerstagbz4 = document.getElementById('donnerstagbz4');

        let freitagbz1 = document.getElementById('freitagbz1');
        let freitagbz2 = document.getElementById('freitagbz2');
        let freitagbz3 = document.getElementById('freitagbz3');
        let freitagbz4 = document.getElementById('freitagbz4');

        let samstagbz1 = document.getElementById('samstagbz1');
        let samstagbz2 = document.getElementById('samstagbz2');
        let samstagbz3 = document.getElementById('samstagbz3');
        let samstagbz4 = document.getElementById('samstagbz4');

        let sonntagbz1 = document.getElementById('sonntagbz1');
        let sonntagbz2 = document.getElementById('sonntagbz2');
        let sonntagbz3 = document.getElementById('sonntagbz3');
        let sonntagbz4 = document.getElementById('sonntagbz4');



        let montagsk1 = document.getElementById('montagsk1');
        let montagsk2 = document.getElementById('montagsk2');
        let montagsk3 = document.getElementById('montagsk3');

        let dienstagsk1 = document.getElementById('dienstagsk1');
        let dienstagsk2 = document.getElementById('dienstagsk2');
        let dienstagsk3 = document.getElementById('dienstagsk3');

        let mittwochsk1 = document.getElementById('mittwochsk1');
        let mittwochsk2 = document.getElementById('mittwochsk2');
        let mittwochsk3 = document.getElementById('mittwochsk3');

        let donnerstagsk1 = document.getElementById('donnerstagsk1');
        let donnerstagsk2 = document.getElementById('donnerstagsk2');
        let donnerstagsk3 = document.getElementById('donnerstagsk3');

        let freitagsk1 = document.getElementById('freitagsk1');
        let freitagsk2 = document.getElementById('freitagsk2');
        let freitagsk3 = document.getElementById('freitagsk3');

        let samstagsk1 = document.getElementById('samstagsk1');
        let samstagsk2 = document.getElementById('samstagsk2');
        let samstagsk3 = document.getElementById('samstagsk3');

        let sonntagsk1 = document.getElementById('sonntagsk1');
        let sonntagsk2 = document.getElementById('sonntagsk2');
        let sonntagsk3 = document.getElementById('sonntagsk3');

        <?php
                $sql1 = "SELECT * FROM `liste` WHERE Tag='Montag' AND Aufgaben='RR'";
                $result1 = $con->query($sql1);
                 if($result1->num_rows > 0){
                    while($row1 = $result1->fetch_assoc()){ ?>
                         if (montagrr1.innerHTML == '.') {
                            montagrr1.innerHTML = ` <?php echo($row1['Name']) ?> </br> Um "<?php echo($row1['Time']) ?>"  <a href="#deleteEmployeeModal" id="<?php echo($row1['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                    data-toggle="tooltip" title="Delete">&#xE872;</i></a> ` ;
                         }else if (montagrr2.innerHTML == '.') {
                            montagrr2.innerHTML =  ` <?php echo($row1['Name']) ?> </br> Um "<?php echo($row1['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row1['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                         }
                         else if (montagrr3.innerHTML == '.') {
                            montagrr3.innerHTML =  ` <?php echo($row1['Name']) ?> </br> Um "<?php echo($row1['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row1['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                         }
                         else if (montagrr4.innerHTML == '.') {
                            montagrr4.innerHTML =  ` <?php echo($row1['Name']) ?> </br> Um "<?php echo($row1['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row1['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                         }
                         else if (montagrr5.innerHTML == '.') {
                            montagrr5.innerHTML =  ` <?php echo($row1['Name']) ?> </br> Um "<?php echo($row1['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row1['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                         }
                <?php }
                 }

                 $sql2 = "SELECT * FROM `liste` WHERE Tag='Montag' AND Aufgaben='BZ'";
                 $result2 = $con->query($sql2);
                  if($result2->num_rows > 0){
                     while($row2 = $result2->fetch_assoc()){ ?>
                          if (montagbz1.innerHTML == '.') {
                            montagbz1.innerHTML = ` <?php echo($row2['Name']) ?> </br> Um "<?php echo($row2['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row2['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                     data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                          }else if (montagbz2.innerHTML == '.') {
                            montagbz2.innerHTML =  ` <?php echo($row2['Name']) ?> </br> Um "<?php echo($row2['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row2['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                     data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                          }
                          else if (montagbz3.innerHTML == '.') {
                            montagbz3.innerHTML =  ` <?php echo($row2['Name']) ?> </br> Um "<?php echo($row2['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row2['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                     data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                          }
                          else if (montagbz4.innerHTML == '.') {
                            montagbz4.innerHTML =  ` <?php echo($row2['Name']) ?> </br> Um "<?php echo($row2['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row2['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                     data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                          }
                          
                 <?php }
                  }

                  $sql3 = "SELECT * FROM `liste` WHERE Tag='Montag' AND Aufgaben='Gewichts Kontrolle'";
                  $result3 = $con->query($sql3);
                   if($result3->num_rows > 0){
                      while($row3 = $result3->fetch_assoc()){ ?>
                           if (montagsk1.innerHTML == '.') {
                            montagsk1.innerHTML = ` <?php echo($row3['Name']) ?> </br> Um "<?php echo($row3['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row3['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                      data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                           }else if (montagsk2.innerHTML == '.') {
                            montagsk2.innerHTML =  ` <?php echo($row3['Name']) ?> </br> Um "<?php echo($row3['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row3['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                      data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                           }
                           else if (montagsk3.innerHTML == '.') {
                            montagsk3.innerHTML =  ` <?php echo($row3['Name']) ?> </br> Um "<?php echo($row3['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row3['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                      data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                           }

                  <?php }
                   }




                   $sql4 = "SELECT * FROM `liste` WHERE Tag='Dienstag' AND Aufgaben='RR'";
                $result4 = $con->query($sql4);
                 if($result4->num_rows > 0){
                    while($row4 = $result4->fetch_assoc()){ ?>
                         if (dienstagrr1.innerHTML == '.') {
                            dienstagrr1.innerHTML = ` <?php echo($row4['Name']) ?> </br> Um "<?php echo($row4['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row4['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                         }else if (dienstagrr2.innerHTML == '.') {
                            dienstagrr2.innerHTML =  ` <?php echo($row4['Name']) ?> </br> Um "<?php echo($row4['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row4['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                         }
                         else if (dienstagrr3.innerHTML == '.') {
                            dienstagrr3.innerHTML =  ` <?php echo($row4['Name']) ?> </br> Um "<?php echo($row4['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row4['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                         }
                         else if (dienstagrr4.innerHTML == '.') {
                            dienstagrr4.innerHTML =  ` <?php echo($row4['Name']) ?> </br> Um "<?php echo($row4['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row4['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                         }
                         else if (dienstagrr5.innerHTML == '.') {
                            dienstagrr5.innerHTML =  ` <?php echo($row4['Name']) ?> </br> Um "<?php echo($row4['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row4['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                         }
                <?php }
                 }

                 $sql5 = "SELECT * FROM `liste` WHERE Tag='Dienstag' AND Aufgaben='BZ'";
                 $result5 = $con->query($sql5);
                  if($result5->num_rows > 0){
                     while($row5 = $result5->fetch_assoc()){ ?>
                          if (dienstagbz1.innerHTML == '.') {
                            dienstagbz1.innerHTML = ` <?php echo($row5['Name']) ?> </br> Um "<?php echo($row5['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row5['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                     data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                          }else if (dienstagbz2.innerHTML == '.') {
                            dienstagbz2.innerHTML =  ` <?php echo($row5['Name']) ?> </br> Um "<?php echo($row5['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row5['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                     data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                          }
                          else if (dienstagbz3.innerHTML == '.') {
                            dienstagbz3.innerHTML =  ` <?php echo($row5['Name']) ?> </br> Um "<?php echo($row5['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row5['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                     data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                          }
                          else if (dienstagbz4.innerHTML == '.') {
                            dienstagbz4.innerHTML =  ` <?php echo($row5['Name']) ?> </br> Um "<?php echo($row5['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row5['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                     data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                          }
                          
                 <?php }
                  }

                  $sql6 = "SELECT * FROM `liste` WHERE Tag='Dienstag' AND Aufgaben='Gewichts Kontrolle'";
                  $result6 = $con->query($sql6);
                   if($result6->num_rows > 0){
                      while($row6 = $result6->fetch_assoc()){ ?>
                           if (dienstagsk1.innerHTML == '.') {
                            dienstagsk1.innerHTML = ` <?php echo($row6['Name']) ?> </br> Um "<?php echo($row6['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row6['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                      data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                           }else if (dienstagsk2.innerHTML == '.') {
                            dienstagsk2.innerHTML =  ` <?php echo($row6['Name']) ?> </br> Um "<?php echo($row6['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row6['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                      data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                           }
                           else if (dienstagsk3.innerHTML == '.') {
                            dienstagsk3.innerHTML =  ` <?php echo($row6['Name']) ?> </br> Um "<?php echo($row6['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row6['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                      data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                           }

                  <?php }
                   }

                   
                   $sql7 = "SELECT * FROM `liste` WHERE Tag='Mittwoch' AND Aufgaben='RR'";
                $result7 = $con->query($sql7);
                 if($result7->num_rows > 0){
                    while($row7 = $result7->fetch_assoc()){ ?>
                         if (mittwochrr1.innerHTML == '.') {
                            mittwochrr1.innerHTML = ` <?php echo($row7['Name']) ?> </br> Um "<?php echo($row7['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row7['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                         }else if (mittwochrr2.innerHTML == '.') {
                            mittwochrr2.innerHTML =  ` <?php echo($row7['Name']) ?> </br> Um "<?php echo($row7['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row7['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                         }
                         else if (mittwochrr3.innerHTML == '.') {
                            mittwochrr3.innerHTML =  ` <?php echo($row7['Name']) ?> </br> Um "<?php echo($row7['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row7['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                         }
                         else if (mittwochrr4.innerHTML == '.') {
                            mittwochrr4.innerHTML =  ` <?php echo($row7['Name']) ?> </br> Um "<?php echo($row7['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row7['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                         }
                         else if (mittwochrr5.innerHTML == '.') {
                            mittwochrr5.innerHTML =  ` <?php echo($row7['Name']) ?> </br> Um "<?php echo($row7['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row7['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                         }
                <?php }
                 }

                 $sql8 = "SELECT * FROM `liste` WHERE Tag='Mittwoch' AND Aufgaben='BZ'";
                 $result8 = $con->query($sql8);
                  if($result8->num_rows > 0){
                     while($row8 = $result8->fetch_assoc()){ ?>
                          if (mittwochbz1.innerHTML == '.') {
                            mittwochbz1.innerHTML = ` <?php echo($row8['Name']) ?> </br> Um "<?php echo($row8['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row8['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                     data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                          }else if (mittwochbz2.innerHTML == '.') {
                            mittwochbz2.innerHTML =  ` <?php echo($row8['Name']) ?> </br> Um "<?php echo($row8['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row8['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                     data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                          }
                          else if (mittwochbz3.innerHTML == '.') {
                            mittwochbz3.innerHTML =  ` <?php echo($row8['Name']) ?> </br> Um "<?php echo($row8['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row8['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                     data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                          }
                          else if (mittwochbz4.innerHTML == '.') {
                            mittwochbz4.innerHTML =  ` <?php echo($row8['Name']) ?> </br> Um "<?php echo($row8['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row8['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                     data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                          }
                          
                          
                 <?php }
                  }

                  $sql9 = "SELECT * FROM `liste` WHERE Tag='mittwoch' AND Aufgaben='Gewichts Kontrolle'";
                  $result9 = $con->query($sql9);
                   if($result9->num_rows > 0){
                      while($row9 = $result9->fetch_assoc()){ ?>
                           if (mittwochsk1.innerHTML == '.') {
                            mittwochsk1.innerHTML = ` <?php echo($row9['Name']) ?> </br> Um "<?php echo($row9['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row9['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                      data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                           }else if (mittwochsk2.innerHTML == '.') {
                            mittwochsk2.innerHTML =  ` <?php echo($row9['Name']) ?> </br> Um "<?php echo($row9['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row9['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                      data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                           }
                           else if (mittwochsk3.innerHTML == '.') {
                            mittwochsk3.innerHTML =  ` <?php echo($row9['Name']) ?> </br> Um "<?php echo($row9['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row9['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                      data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                           }

                  <?php }
                   }



                   $sql10 = "SELECT * FROM `liste` WHERE Tag='Donnerstag' AND Aufgaben='RR'";
                $result10 = $con->query($sql10);
                 if($result10->num_rows > 0){
                    while($row10 = $result10->fetch_assoc()){ ?>
                         if (donnerstagrr1.innerHTML == '.') {
                            donnerstagrr1.innerHTML = ` <?php echo($row10['Name']) ?> </br> Um "<?php echo($row10['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row10['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                         }else if (donnerstagrr2.innerHTML == '.') {
                            donnerstagrr2.innerHTML =  ` <?php echo($row10['Name']) ?> </br> Um "<?php echo($row10['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row10['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                         }
                         else if (donnerstagrr3.innerHTML == '.') {
                            donnerstagrr3.innerHTML =  ` <?php echo($row10['Name']) ?> </br> Um "<?php echo($row10['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row10['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                         }
                         else if (donnerstagrr4.innerHTML == '.') {
                            donnerstagrr4.innerHTML =  ` <?php echo($row10['Name']) ?> </br> Um "<?php echo($row10['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row10['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                         }
                         else if (donnerstagrr5.innerHTML == '.') {
                            donnerstagrr5.innerHTML =  ` <?php echo($row10['Name']) ?> </br> Um "<?php echo($row10['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row10['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                         }
                <?php }
                 }

                 $sql11 = "SELECT * FROM `liste` WHERE Tag='Donnerstag' AND Aufgaben='BZ'";
                 $result11 = $con->query($sql11);
                  if($result11->num_rows > 0){
                     while($row11 = $result11->fetch_assoc()){ ?>
                          if (donnerstagbz1.innerHTML == '.') {
                            donnerstagbz1.innerHTML = ` <?php echo($row11['Name']) ?> </br> Um "<?php echo($row11['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row11['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                     data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                          }else if (donnerstagbz2.innerHTML == '.') {
                            donnerstagbz2.innerHTML =  ` <?php echo($row11['Name']) ?> </br> Um "<?php echo($row11['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row11['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                     data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                          }
                          else if (donnerstagbz3.innerHTML == '.') {
                            donnerstagbz3.innerHTML =  ` <?php echo($row11['Name']) ?> </br> Um "<?php echo($row11['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row11['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                     data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                          }
                          else if (donnerstagbz4.innerHTML == '.') {
                            donnerstagbz4.innerHTML =  ` <?php echo($row11['Name']) ?> </br> Um "<?php echo($row11['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row11['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                     data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                          }
                          
                          
                 <?php }
                  }

                  $sql12 = "SELECT * FROM `liste` WHERE Tag='Donnerstag' AND Aufgaben='Gewichts Kontrolle'";
                  $result12 = $con->query($sql12);
                   if($result12->num_rows > 0){
                      while($row12 = $result12->fetch_assoc()){ ?>
                           if (donnerstagsk1.innerHTML == '.') {
                            donnerstagsk1.innerHTML = ` <?php echo($row12['Name']) ?> </br> Um "<?php echo($row12['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row12['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                      data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                           }else if (donnerstagsk2.innerHTML == '.') {
                            donnerstagsk2.innerHTML =  ` <?php echo($row12['Name']) ?> </br> Um "<?php echo($row12['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row12['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                      data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                           }
                           else if (donnerstagsk3.innerHTML == '.') {
                            donnerstagsk3.innerHTML =  ` <?php echo($row12['Name']) ?> </br> Um "<?php echo($row12['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row12['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                      data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                           }

                  <?php }
                   }



                   $sql13 = "SELECT * FROM `liste` WHERE Tag='Freitag' AND Aufgaben='RR'";
                   $result13 = $con->query($sql13);
                    if($result13->num_rows > 0){
                       while($row13 = $result13->fetch_assoc()){ ?>
                            if (freitagrr1.innerHTML == '.') {
                               freitagrr1.innerHTML = ` <?php echo($row13['Name']) ?> </br> Um "<?php echo($row13['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row13['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                       data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                            }else if (freitagrr2.innerHTML == '.') {
                               freitagrr2.innerHTML =  ` <?php echo($row13['Name']) ?> </br> Um "<?php echo($row13['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row13['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                       data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                            }
                            else if (freitagrr3.innerHTML == '.') {
                               freitagrr3.innerHTML =  ` <?php echo($row13['Name']) ?> </br> Um "<?php echo($row13['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row13['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                       data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                            }
                            else if (freitagrr4.innerHTML == '.') {
                               freitagrr4.innerHTML =  ` <?php echo($row13['Name']) ?> </br> Um "<?php echo($row13['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row13['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                       data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                            }
                            else if (freitagrr5.innerHTML == '.') {
                               freitagrr5.innerHTML =  ` <?php echo($row13['Name']) ?> </br> Um "<?php echo($row13['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row13['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                       data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                            }
                   <?php }
                    }
   
                    $sql14 = "SELECT * FROM `liste` WHERE Tag='Freitag' AND Aufgaben='BZ'";
                    $result14 = $con->query($sql14);
                     if($result14->num_rows > 0){
                        while($row14 = $result14->fetch_assoc()){ ?>
                             if (freitagbz1.innerHTML == '.') {
                               freitagbz1.innerHTML = ` <?php echo($row14['Name']) ?> </br> Um "<?php echo($row14['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row14['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                        data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                             }else if (freitagbz2.innerHTML == '.') {
                               freitagbz2.innerHTML =  ` <?php echo($row14['Name']) ?> </br> Um "<?php echo($row14['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row14['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                        data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                             }
                             else if (freitagbz3.innerHTML == '.') {
                               freitagbz3.innerHTML =  ` <?php echo($row14['Name']) ?> </br> Um "<?php echo($row14['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row14['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                        data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                             }
                             else if (freitagbz4.innerHTML == '.') {
                               freitagbz4.innerHTML =  ` <?php echo($row14['Name']) ?> </br> Um "<?php echo($row14['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row14['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                        data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                             }
                             
                             
                    <?php }
                     }
   
                     $sql15 = "SELECT * FROM `liste` WHERE Tag='Freitag' AND Aufgaben='Gewichts Kontrolle'";
                     $result15 = $con->query($sql15);
                      if($result15->num_rows > 0){
                         while($row15 = $result15->fetch_assoc()){ ?>
                              if (freitagsk1.innerHTML == '.') {
                               freitagsk1.innerHTML = ` <?php echo($row15['Name']) ?> </br> Um "<?php echo($row15['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row15['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                         data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                              }else if (freitagsk2.innerHTML == '.') {
                               freitagsk2.innerHTML =  ` <?php echo($row15['Name']) ?> </br> Um "<?php echo($row15['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row15['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                         data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                              }
                              else if (freitagsk3.innerHTML == '.') {
                                freitagsk3.innerHTML =  ` <?php echo($row15['Name']) ?> </br> Um "<?php echo($row15['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row15['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                         data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                              }
   
                     <?php }
                      }


                      $sql16 = "SELECT * FROM `liste` WHERE Tag='Samstag' AND Aufgaben='RR'";
                      $result16 = $con->query($sql16);
                       if($result16->num_rows > 0){
                          while($row16 = $result16->fetch_assoc()){ ?>
                               if (samstagrr1.innerHTML == '.') {
                                  samstagrr1.innerHTML = ` <?php echo($row16['Name']) ?> </br> Um "<?php echo($row16['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row16['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                          data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                               }else if (samstagrr2.innerHTML == '.') {
                                  samstagrr2.innerHTML =  ` <?php echo($row16['Name']) ?> </br> Um "<?php echo($row16['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row16['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                          data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                               }
                               else if (samstagrr3.innerHTML == '.') {
                                  samstagrr3.innerHTML =  ` <?php echo($row16['Name']) ?> </br> Um "<?php echo($row16['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row16['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                          data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                               }
                               else if (samstagrr4.innerHTML == '.') {
                                  samstagrr4.innerHTML =  ` <?php echo($row16['Name']) ?> </br> Um "<?php echo($row16['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row16['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                          data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                               }
                               else if (samstagrr5.innerHTML == '.') {
                                  samstagrr5.innerHTML =  ` <?php echo($row16['Name']) ?> </br> Um "<?php echo($row16['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row16['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                          data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                               }
                      <?php }
                       }
      
                       $sql17 = "SELECT * FROM `liste` WHERE Tag='Samstag' AND Aufgaben='BZ'";
                       $result17 = $con->query($sql17);
                        if($result17->num_rows > 0){
                           while($row17 = $result17->fetch_assoc()){ ?>
                                if (samstagbz1.innerHTML == '.') {
                                  samstagbz1.innerHTML = ` <?php echo($row17['Name']) ?> </br> Um "<?php echo($row17['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row17['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                           data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                                }else if (samstagbz2.innerHTML == '.') {
                                  samstagbz2.innerHTML =  ` <?php echo($row17['Name']) ?> </br> Um "<?php echo($row17['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row17['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                           data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                                }
                                else if (samstagbz3.innerHTML == '.') {
                                  samstagbz3.innerHTML =  ` <?php echo($row17['Name']) ?> </br> Um "<?php echo($row17['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row17['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                           data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                                }
                                else if (samstagbz4.innerHTML == '.') {
                                  samstagbz4.innerHTML =  ` <?php echo($row17['Name']) ?> </br> Um "<?php echo($row17['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row17['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                           data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                                }
                                
                                
                       <?php }
                        }
      
                        $sql18 = "SELECT * FROM `liste` WHERE Tag='Samstag' AND Aufgaben='Gewichts Kontrolle'";
                        $result18 = $con->query($sql18);
                         if($result18->num_rows > 0){
                            while($row18 = $result18->fetch_assoc()){ ?>
                                 if (samstagsk1.innerHTML == '.') {
                                  samstagsk1.innerHTML = ` <?php echo($row18['Name']) ?> </br> Um "<?php echo($row18['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row18['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                            data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                                 }else if (samstagsk2.innerHTML == '.') {
                                  samstagsk2.innerHTML =  ` <?php echo($row18['Name']) ?> </br> Um "<?php echo($row18['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row18['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                            data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                                 }
                                 else if (samstagsk3.innerHTML == '.') {
                                    samstagsk3.innerHTML =  ` <?php echo($row18['Name']) ?> </br> Um "<?php echo($row18['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row18['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                            data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                                 }
      
                        <?php }
                         }




                         $sql19 = "SELECT * FROM `liste` WHERE Tag='Sonntag' AND Aufgaben='RR'";
                         $result19 = $con->query($sql19);
                          if($result19->num_rows > 0){
                             while($row19 = $result19->fetch_assoc()){ ?>
                                  if (sonntagrr1.innerHTML == '.') {
                                     sonntagrr1.innerHTML = ` <?php echo($row19['Name']) ?> </br> Um "<?php echo($row19['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row19['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                             data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                                  }else if (sonntagrr2.innerHTML == '.') {
                                     sonntagrr2.innerHTML =  ` <?php echo($row19['Name']) ?> </br> Um "<?php echo($row19['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row19['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                             data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                                  }
                                  else if (sonntagrr3.innerHTML == '.') {
                                     sonntagrr3.innerHTML =  ` <?php echo($row19['Name']) ?> </br> Um "<?php echo($row19['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row19['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                             data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                                  }
                                  else if (sonntagrr4.innerHTML == '.') {
                                     sonntagrr4.innerHTML =  ` <?php echo($row19['Name']) ?> </br> Um "<?php echo($row19['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row19['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                             data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                                  }
                                  else if (sonntagrr5.innerHTML == '.') {
                                     sonntagrr5.innerHTML =  ` <?php echo($row19['Name']) ?> </br> Um "<?php echo($row19['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row19['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                             data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                                  }
                         <?php }
                          }
         
                          $sql20 = "SELECT * FROM `liste` WHERE Tag='Sonntag' AND Aufgaben='BZ'";
                          $result20 = $con->query($sql20);
                           if($result20->num_rows > 0){
                              while($row20 = $result20->fetch_assoc()){ ?>
                                   if (sonntagbz1.innerHTML == '.') {
                                     sonntagbz1.innerHTML = ` <?php echo($row20['Name']) ?> </br> Um "<?php echo($row20['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row20['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                              data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                                   }else if (sonntagbz2.innerHTML == '.') {
                                     sonntagbz2.innerHTML =  ` <?php echo($row20['Name']) ?> </br> Um "<?php echo($row20['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row20['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                              data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                                   }
                                   else if (sonntagbz3.innerHTML == '.') {
                                     sonntagbz3.innerHTML =  ` <?php echo($row20['Name']) ?> </br> Um "<?php echo($row20['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row20['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                              data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                                   }
                                   else if (sonntagbz4.innerHTML == '.') {
                                     sonntagbz4.innerHTML =  ` <?php echo($row20['Name']) ?> </br> Um "<?php echo($row20['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row20['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                              data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                                   }
                                   
                                   
                          <?php }
                           }
         
                           $sql21 = "SELECT * FROM `liste` WHERE Tag='Sonntag' AND Aufgaben='Gewichts Kontrolle'";
                           $result21 = $con->query($sql21);
                            if($result21->num_rows > 0){
                               while($row21 = $result21->fetch_assoc()){ ?>
                                    if (sonntagsk1.innerHTML == '.') {
                                     sonntagsk1.innerHTML = ` <?php echo($row21['Name']) ?> </br> Um "<?php echo($row21['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row21['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                               data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                                    }else if (sonntagsk2.innerHTML == '.') {
                                     sonntagsk2.innerHTML =  ` <?php echo($row21['Name']) ?> </br> Um "<?php echo($row21['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row21['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                               data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                                    }
                                    else if (sonntagsk3.innerHTML == '.') {
                                        sonntagsk3.innerHTML =  ` <?php echo($row21['Name']) ?> </br> Um "<?php echo($row21['Time']) ?>" <a href="#deleteEmployeeModal" id="<?php echo($row21['id']) ?>" class="delete" data-toggle="modal"><i class="material-icons"
                               data-toggle="tooltip" title="Delete">&#xE872;</i></a>` ;
                                    }
         
                           <?php }
                            }
 



        ?>

        const buttonsdelet = document.querySelectorAll('.delete');

        buttonsdelet.forEach(buttondelet => {


            buttondelet.addEventListener('click', () => {

               var name_id = buttondelet.id;

               $.ajax({
                type: "POST",
                    url: "index.php",
                    data: {
                        'delete_student': true,
                        'name_id': name_id
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if(res.status == 500) {

                            alert(res.message);
                        }else{
                            alertify.set('notifier','position', 'top-right');
                            alertify.success(res.message);

                           
                           
                        }
                    }



               })

               <?php 
               if(isset($_POST['delete_student'])){

                $name_id = mysqli_real_escape_string($con, $_POST['name_id']);

                $queryX = "DELETE FROM `liste` WHERE id='$name_id'";
                $query_run = mysqli_query($con, $queryX);
            

               }
               
               ?>
               window.location.href = "http://localhost/SNzentrum/login_as_admin1/Home/bewohnerliste/index.php";
               
                    
            })
        })

        

    </script>



</body>
<script src="scr.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>

</html>