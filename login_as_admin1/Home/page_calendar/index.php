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
 
}

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Seniorenzentrum Gundelfingen</title>
   <link rel="icon" type="image/x-icon" href="../../imags/Hospital-PNG-HD (1).png">
   <link rel="stylesheet" href="style.css">
   <link rel="icon" type="image/x-icon" href="../imags/Hospital-PNG-HD (1).png">
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

            <div class="dark" id="navbott">



               <input class="darkmood2" type="checkbox" id="darkmode-toggle" />
               <label class="darkmood" for="darkmode-toggle" onclick="darkmoodF()">
                  <div class="backgrounddr">
                     <?xml version="1.0" encoding="utf-8"?>

                     <svg class="sun" width="16px" height="16px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">

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

         <div class="nav2" id="nav2">
            <ul class="logosss">
               <li class="list ">
                  <a class="icon11" id="firsicon" href="index.php">
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
            <a href="../index.php"><img src="../imags/Hospital-PNG-HD (1).png" alt="logo" id="logo" width="50px"></a>
         </div>

         <div class="nav4" id="nav4">

         </div>

      </div>
      <?php
$sql1 = "SELECT * FROM message";
$result1 = $conn->query($sql1);
if ($result1->num_rows > 0){
   while($row1 = $result1->fetch_assoc()){
      $nameeee = $row1["Name"];
      $Nachricht = $row1["Message"];
   }
}
?>
      <div class="mid">
         <input type="checkbox" id="toggle">
         <label for="toggle">
            <div class="notification">
               Info
            </div>
         </label>
         <div class="msg">

            <div><span class="cheef" id="cheef">
                  <?php echo($nameeee) ?>
               </span>
               <br>
               <span class="Nachrichtbychef" id="Nachrichtbychef">
                  <?php echo($Nachricht) ?>
               </span>

            </div>
            <button class="button_msg" id="myBtn">Create a message</button>
         </div>
      </div>
      <div id="myModal" class="modal">


         <!-- Modal content -->
         <form action="index.php" method="POST">
            <div class="modal-content">
               <span class="close">&times;</span>
               <h3 class="Nachrichttitel">Erstellen Sie eine Nachricht</h3>
               <br>
               <label class="Nachrichtname">Name :</label>
               <br>
               <input type="text" id="Nachrichttextname" class="Nachrichttextname" name="name">
               <br>
               <br>
               <label class="Nachrichtname">Nachricht :</label>
               <br>
               <textarea class="form-control" id="NachrichtNach" required="" name="nachricht"></textarea>
               <br>
               <input type="submit" value="Done" class="buttonsendnachricht" name="btnaddmsg">

            </div>
         </form>
         <?php
         if(isset($_POST["btnaddmsg"])){

           $name = $_POST['name'];
            $nachricht = $_POST['nachricht'];

          $sql2 = "UPDATE `message` SET `Name`='$name' , `Message`= '$nachricht' ";
           $stmt2 = $conn->prepare($sql2);

            // execute the query
           $stmt2->execute(); 
           ?>
           <script>
            window.location.href = "http://localhost/SNzentrum/login_as_admin1/Home/page_calendar/index.php";
         </script>
         <?php
           
         }
         ?>

         


      </div>



      <div class="table-wrapper">
         <div class="buttonwoches">

         </div>
         <div class="tablemargleft">


            <table>
               <thead class="Tagss">
                  <th id="ntg"></th>
                  <th id="tablelefttop">Montag</th>
                  <th id="alltheth1">Dienstag</th>
                  <th id="alltheth2">Mittwoch </th>
                  <th class="donstage" id="alltheth3">Donnerstag</th>
                  <th id="alltheth4">Freitag</th>
                  <th id="alltheth5">Samstag</th>
                  <th id="tablerighttop">Sonntag</th>


               </thead>
               <?php
      $sql3 = "SELECT * FROM calendar WHERE Woche = '1'";
      if(isset($_POST["btnwoche1"])){
         $sql3 = "SELECT * FROM calendar WHERE Woche = '1'";}
      if(isset($_POST["btnwoche2"])){
         $sql3 = "SELECT * FROM calendar WHERE Woche = '2'";}
      if(isset($_POST["btnwoche3"])){
         $sql3 = "SELECT * FROM calendar WHERE Woche = '3'";}
      if(isset($_POST["btnwoche4"])){
            $sql3 = "SELECT * FROM calendar WHERE Woche = '4'";}
            
   
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
               <tbody>

                  <tr>

                     <td rowspan="3" class="jajajaja D1">
                        <p>D1</p>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($montagd1_1)?>
                        </span>
                     </td>


                     <td>
                        <span class="depart">
                           <?php echo($dienstagd1_1)?>
                        </span>
                     </td>

                     <td>
                        <span class="depart">
                           <?php echo($mittwochd1_1)?>
                        </span>
                     </td>

                     <td>
                        <span class="depart">
                           <?php echo($donnerstagd1_1)?>
                        </span>
                     </td>

                     <td>
                        <span class="depart">
                           <?php echo($freitagd1_1)?>
                        </span>
                     </td>

                     <td>
                        <span class="depart">
                           <?php echo($samsatgd1_1)?>
                        </span>
                     </td>

                     <td>
                        <span class="depart">
                           <?php echo($sonntagd1_1)?>
                        </span>
                     </td>



                  </tr>

                  <tr>
                     <td>
                        <span class="depart">
                           <?php echo($montagd1_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($dienstagd1_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($mittwochd1_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($donnerstagd1_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($freitagd1_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($samsatgd1_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($sonntagd1_2)?>
                        </span>
                     </td>

                  </tr>


                  <tr>
                     <td>
                        <span class="depart">
                           <?php echo($montagd1_3)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($dienstagd1_3)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($mittwochd1_3)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($donnerstagd1_3)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($freitagd1_3)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($samsatgd1_3)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($sonntagd1_3)?>
                        </span>
                     </td>
                  </tr>






                  <tr>
                     <td rowspan="2" class="jajajaj D2">
                        <p>D2</p>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($montagd2_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($dienstagd2_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($mittwochd2_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($donnerstagd2_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($freitagd2_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($samsatgd2_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($sonntagd2_1)?>
                        </span>
                     </td>
                  </tr>


                  <tr>
                     <td>
                        <span class="depart">
                           <?php echo($montagd2_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($dienstagd2_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($mittwochd2_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($donnerstagd2_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($freitagd2_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($samsatgd2_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($sonntagd2_2)?>
                        </span>
                     </td>
                  </tr>







                  <tr>
                     <td class="jajajaja A4">
                        <p>A4</p>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($montaga4_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($dienstaga4_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($mittwocha4_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($donnerstaga4_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($freitaga4_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($samsatga4_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($sonntaga4_1)?>
                        </span>
                     </td>
                  </tr>






                  <tr>
                     <td class="jajajaja A22">
                        <p>22</p>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($montag22_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($dienstag22_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($mittwoch22_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($donnerstag22_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($freitag22_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($samsatg22_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($sonntag22_1)?>
                        </span>
                     </td>
                  </tr>





                  <tr>
                     <td rowspan="3" class="jajajaja D5">
                        <p>D5</p>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($montagd5_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($dienstagd5_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($mittwochd5_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($donnerstagd5_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($freitagd5_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($samsatgd5_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($sonntagd5_1)?>
                        </span>
                     </td>

                  <tr>
                     <td>
                        <span class="depart">
                           <?php echo($montagd5_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($dienstagd5_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($mittwochd5_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($donnerstagd5_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($freitagd5_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($samsatgd5_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($sonntagd5_2)?>
                        </span>
                     </td>
                  </tr>
                  <tr>
                     <td>
                        <span class="depart">
                           <?php echo($montagd5_3)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($dienstagd5_3)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($mittwochd5_3)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($donnerstagd5_3)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($freitagd5_3)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($samsatgd5_3)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($sonntagd5_3)?>
                        </span>
                     </td>
                  </tr>




                  <tr>
                     <td class="jajajaja A7">
                        <p>7A</p>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($montag7a_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($dienstag7a_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($mittwoch7a_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($donnerstag7a_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($freitag7a_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($samsatg7a_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($sonntag7a_1)?>
                        </span>
                     </td>
                  </tr>





                  <tr>
                     <td rowspan="2" class="jajajaja D28">
                        <p>D28</p>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($dienstagd4_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($dienstagd4_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($mittwochd4_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($donnerstagd4_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($freitagd4_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($samsatgd4_1)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($sonntagd4_1)?>
                        </span>
                     </td>

                  </tr>
                  <tr>
                     <td>
                        <span class="depart">
                           <?php echo($montagd4_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($dienstagd4_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($mittwochd4_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($donnerstagd4_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($freitagd4_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($samsatgd4_2)?>
                        </span>
                     </td>
                     <td>
                        <span class="depart">
                           <?php echo($sonntagd4_2)?>
                        </span>
                     </td>

                  </tr>


               </tbody>
            </table>
         </div>
      </div>



</body>
<script src="script.js"></script>
<script>
   // Get the modal
   var modal = document.getElementById("myModal");

   // Get the button that opens the modal
   var btn = document.getElementById("myBtn");

   // Get the <span> element that closes the modal
   var span = document.getElementsByClassName("close")[0];

   // When the user clicks the button, open the modal 
   btn.onclick = function () {
      modal.style.display = "block";
   }

   // When the user clicks on <span> (x), close the modal
   span.onclick = function () {
      modal.style.display = "none";
   }

   // When the user clicks anywhere outside of the modal, close it
   window.onclick = function (event) {
      if (event.target == modal) {
         modal.style.display = "none";
      }
   }


























</script>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"> </script>
</body>

</html>