<?php
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
   <link rel="icon" type="image/x-icon" href="../../../imags/Hospital-PNG-HD (1).png">
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
            <a href="../index.php"><img src="../imags/Hospital-PNG-HD (1).png" alt="logo" id="logo" width="50px"></a>


         </div>
         <div class="nav4">

         </div>

      </div>





      <div class="mid">
         <h2 id="titlle">Seniorenzentrum Gundelfingen</h2>

         <div class="cards">
            <div class="DepartmentX">
               <img src="imags/Userlogo.png" alt="logo" id="logoDepartmentX">
               <h3 id="titleDepartmentX">Department 1</h3>
               <p id="DepartmentXexpla">Some explanations about this . Some explanations about this . Some
                  explanations about this </p>
               <a href="departement1/index.php" class="button1">Access</a>

            </div>



            <div class="DepartmentY">
               <img src="imags/Userlogo.png" alt="logo" id="logoDepartmentY">
               <h3 id="titleDepartmentY">Department 2</h3>
               <p id="DepartmentYexpla">Some explanations about this . Some explanations about this . Some
                  explanations about this </p>
               <a href="departement2/index.php" class="button2">Access</a>

            </div>

            <div class="DepartmentZ">
               <img src="imags/Userlogo.png" alt="logo" id="logoDepartmentZ">
               <h3 id="titleDepartmentZ">Department 3</h3>
               <p id="DepartmentZexpla">Some explanations about this . Some explanations about this . Some
                  explanations about this </p>
               <a href="departement3/index.php" class="button3">Access</a>

            </div>

            <div class="DepartmentN">
               <img src="imags/Userlogo.png" alt="logo" id="logoDepartmentN">
               <h3 id="titleDepartmentN">Department 4</h3>
               <p id="DepartmentNexpla">Some explanations about this . Some explanations about this . Some
                  explanations about this </p>
               <a href="departement4/index.php" class="button4">Access</a>

            </div>








         </div>




      </div>


   </div>



   <!-- The Modal -->
   <div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
         <span class="close">&times;</span>
         <br>
         <div class="container">
            <div class="text">Add Person</div>
            <form action="#">
               <div class="form-row">
                  <div class="input-data">
                     <input type="text" required>
                     <div class="underline"></div>
                     <label for="">Vorname</label>
                  </div>
                  <div class="input-data">
                     <input type="text" required>
                     <div class="underline"></div>
                     <label for="">Nachname</label>
                  </div>
               </div>
               <div class="form-row">
                  <div class="input-data">
                     <input type="text" required>
                     <div class="underline"></div>
                     <label for="">Email Address</label>
                  </div>
                  <div class="input-data">
                     <input type="number" required>
                     <div class="underline"></div>
                     <label for="">Tel</label>
                  </div>
               </div>
               <div class="form-row">
                  <div class="input-data">
                     <label for="">Departement</label>
                     <br>
                     <select name="" id="combo">
                        <option disabled selected value> -- select an option -- </option>
                        <option value="">Departement A</option>
                        <option value="">Departement B</option>
                        <option value="">Departement C</option>
                     </select>
                  </div>
                  <div class="input-data">
                     <label for="">Photo</label>
                     <br>
                     <input type="file" id="combo" name="img" accept="image/*">

                  </div>
               </div>
               <button class="btnnn">okay</button>
               <button class="btnnn2">cancel</button>

            </form>
         </div>
      </div>

   </div>

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



</body>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>

</html>