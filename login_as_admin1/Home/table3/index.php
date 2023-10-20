<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "seniorenzentrum";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
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

            <div class="dark" id="navbott">



                    <input class="darkmood2" type="checkbox" id="darkmode-toggle" onclick="darkmoodF()" />
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

            <div class="nav2" id="nav2">
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

         <div class="nav3" id="nav3">
            <a href="../index.php"><img src="../imags/Hospital-PNG-HD (1).png" alt="logo" id="logo" width="50px"></a>
         </div>
            <div class="nav4" id="nav4">

            </div>
        </div>
        <div class="mid">

            <div class="tableandbtn">

                <h2 id="manage">Der title</h2>

                <div>
                    <div class="buttons">
                    <form method="post" action="index.php">
                    <input type="submit" id="addanother" value="+" name="save">
                </form>
                <?php 
                if(isset($_POST['save'])){
                
                $sql = "INSERT INTO tabel3test (Mitarbeiter) VALUES ('Select the employee')";
                if (mysqli_query($conn, $sql)) {
                 } else {
                    echo "Error: " . $sql . ":-" . mysqli_error($conn);
                 }
                 ?>
                 <script>
                 window.location.href = "http://localhost/SNzentrum/login_as_admin1/Home/table3/index.php";
                 </script>
                 <?php 
            }
            ?>
                        
                    </div>
                    <table id="myTable">
                    <?php 
            $sql = "SELECT * FROM tabel3test";
            $result = $conn->query($sql);
            if ($result->num_rows > 0){

                // output data of each row
                if($row = $result->fetch_assoc()){
                    ?>
                        <tr id="thetr">
                            <th id="thefirstth">

                                <div class="dropdown" id="dropdowns">
                                <button class="btnDropdow" name="btndata" id="<?php echo ($row["Id"]) ?>" onclick="toggleDropdown(event)" ><?php echo ($row["Mitarbeiter"]) ?></button>

                                    <div class="dropdown-menu">
                                        <div class="dropdown2">
                                            <button class="btnOption1" onclick="toggleDropdown2(event)">Option
                                                1</button>
                                            <div class="dropdown-menu2" id="depart1">
                                                <span onclick="selectOption(event)"><span>Samirchama</span></span>
                                                <span onclick="selectOption(event)"><span>Mohamed</span></span>
                                                <span onclick="selectOption(event)"><span>salam</span></span>
                                            </div>
                                        </div>
                                        <div class="dropdown2">
                                            <button class="btnOption2" onclick="toggleDropdown2(event)">Option
                                                2</button>
                                            <div class="dropdown-menu2" id="depart2">
                                                <span onclick="selectOption(event)"><span>Samirchama</span></span>
                                                <span onclick="selectOption(event)"><span>Mohamed</span></span>
                                                <span onclick="selectOption(event)"><span>salamlaba</span></span>
                                            </div>
                                        </div>
                                        <div class="dropdown2">
                                            <button class="btnOption3" onclick="toggleDropdown2(event)">Option
                                                3</button>
                                            <div class="dropdown-menu2" id="depart3">
                                                <span onclick="selectOption(event)"><span>Samirchama</span></span>
                                                <span onclick="selectOption(event)"><span>Mohamed</span></span>
                                                <span onclick="selectOption(event)"><span>salam</span></span>
                                            </div>
                                        </div>
                                        <div class="dropdown2">
                                            <button class="btnOption4" onclick="toggleDropdown2(event)">Option
                                                4</button>
                                            <div class="dropdown-menu2" id="depart4">
                                                <span onclick="selectOption(event)"><span>Samirchama</span></span>
                                                <span onclick="selectOption(event)"><span>Mohamed</span></span>
                                                <span onclick="selectOption(event)"><span>salam</span></span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </th>

                        </tr>
                        <form action="index.php" method="post">
                        <tr>
                        <td class="thrfirsttd"><input class="input" id="<?php echo ($row["Id"]) ?>" type="text"  value="<?php echo ($row["Patient1"]) ?>"></td>
                        </tr>
                        <tr>
                        <td><input class="input" id="<?php echo ($row["Id"]) ?>" type="text" value="<?php echo ($row["Patient2"]) ?>"></td>
                        </tr>
                        <tr>
                        <td><input class="input" id="<?php echo ($row["Id"]) ?>" type="text" value="<?php echo ($row["Patient3"]) ?>"></td>
                        </tr>
                        <tr>
                        <td><input class="input" id="<?php echo ($row["Id"]) ?>" type="text" value="<?php echo ($row["Patient4"]) ?>"></td>
                        </tr>
                        <tr>
                        <td><input class="input" id="<?php echo ($row["Id"]) ?>" type="text" value="<?php echo ($row["Patient5"]) ?>"></td>
                        </tr>
                        <tr>
                        <td><input class="input" id="<?php echo ($row["Id"]) ?>" type="text" value="<?php echo ($row["Patient6"]) ?>"></td>
                        </tr>
                        <tr>
                        <td><input class="input" id="<?php echo ($row["Id"]) ?>" type="text" value="<?php echo ($row["Patient7"]) ?>"></td>
                        </tr>
                        <tr>
                        <td><input class="input" id="<?php echo ($row["Id"]) ?>" type="text" value="<?php echo ($row["Patient8"]) ?>"></td>
                        </tr>
                        <tr>
                        <td><input class="input" id="<?php echo ($row["Id"]) ?>" type="text" value="<?php echo ($row["Patient9"]) ?>"></td>
                        </tr>
                        <tr>
                        <td><input class="input" id="<?php echo ($row["Id"]) ?>" type="text" value="<?php echo ($row["Patient10"]) ?>"></td>
                        </tr>
                        <tr>
                        <td><input class="input" id="<?php echo ($row["Id"]) ?>" type="text" value="<?php echo ($row["Patient11"]) ?>"></td>
                        </tr>
                        <tr>
                        <td><input class="input" id="<?php echo ($row["Id"]) ?>" type="text" value="<?php echo ($row["Patient12"]) ?>"></td>
                        </tr>
                        <tr>
                        <td><input class="input" id="<?php echo ($row["Id"]) ?>" type="text" value="<?php echo ($row["Patient13"]) ?>"></td>
                        </tr>
                        
                        <tr>
                        <td><textarea class="w3review" id="<?php echo ($row["Id"]) ?>" name="Aufgaben" rows="4"
                                cols="20"><?php echo ($row["Aufgaben"]) ?></textarea>
                        </td>
                        </tr>
                        <tr>
                            <td class="twobtns">
                                    <input type="submit"  id="<?php echo ($row["Id"]) ?>" class="Update1 btnupdate" value="Save"/></td>
                        </tr>
                        </form>
                    <?php
                }
            }else {
                echo "0 results";
              }
            ?>
                    </table>
                </div>
        </div>
        <script>

function toggleDropdown(event) {
    var dropdown = event.currentTarget.parentNode;
    dropdown.classList.toggle('open');
}

function toggleDropdown2(event) {
    var dropdown2 = event.currentTarget.parentNode;
    dropdown2.classList.toggle('open');
}


function selectOption(event) {
    var dropdown = event.currentTarget.parentNode.parentNode.parentNode.parentNode;
    var button = dropdown.querySelector("button");
    var option = event.currentTarget.textContent;

    button.textContent = option

    dropdown.classList.remove('open');
}

        <?php
              $sql = "SELECT * FROM tabel3test LIMIT 10 OFFSET 1" ;
              $result = $conn->query($sql);
              if ($result->num_rows > 0){
  
                  // output data of each row
                  while($row = $result->fetch_assoc()){
                    ?>
                    var table = document.getElementById("myTable");
                    var headerCell = document.createElement("th");


// create dropdown element
var dropdown = document.createElement("div");
dropdown.classList.add("dropdown");
dropdown.id = "dropdowns";
// create dropdown button
var dropdownButton = document.createElement("button");
dropdownButton.classList.add("btnDropdow");
dropdownButton.id = "<?php echo ($row['Id']) ?>";
dropdownButton.textContent = "<?php echo ($row['Mitarbeiter']) ?>";
dropdownButton.addEventListener("click", toggleDropdown);
dropdownButton.value = "<?php echo ($row['Mitarbeiter']) ?>";
dropdown.appendChild(dropdownButton);
// create dropdown menu
var dropdownMenu = document.createElement("div");
dropdownMenu.classList.add("dropdown-menu");
dropdown.appendChild(dropdownMenu);
// create dropdown options
var options = [
  { value: "Option1" , class: "btnOption1", id: "depart1", names: ["Samirchama", "Mohamed", "salam", "halima"] },
  { value: "Option2" , class: "btnOption2", id: "depart2", names: ["Samirchama", "Mohamed", "salamlaba"] },
  { value: "Option3" , class: "btnOption3", id: "depart3", names: ["Samirchama", "Mohamed", "salam"] },
  { value: "Option4" , class: "btnOption4", id: "depart4", names: ["Samirchama", "Mohamed", "salam"] }
];

for (let i = 0; i < options.length; i++) {
  // create dropdown option
  var option = document.createElement("div");
  option.classList.add("dropdown2");
  dropdownMenu.appendChild(option);
  
  // create dropdown button for option
  var optionButton = document.createElement("button");
  optionButton.classList.add(options[i].class);
  optionButton.textContent = options[i].value;
 optionButton.addEventListener("click", toggleDropdown2);
  option.appendChild(optionButton);

  // create dropdown menu for option
  var optionMenu = document.createElement("div");
  optionMenu.classList.add("dropdown-menu2");
  optionMenu.id = options[i].id;
  option.appendChild(optionMenu);

  // create dropdown option names
  for (let j = 0; j < options[i].names.length; j++) {
    var optionName = document.createElement("span");
    var innerSpan = document.createElement("span");
    innerSpan.textContent = options[i].names[j];
    optionName.appendChild(innerSpan);
    optionName.addEventListener("click", selectOption);
    optionMenu.appendChild(optionName);
  }
}


// add dropdown element to the document

headerCell.append(dropdown);


                    var headerRow = table.rows[0];
                    headerRow.appendChild(headerCell);

                    var input1 = document.createElement('input');
                    input1.setAttribute('name', 'Patient1');
                    input1.setAttribute('id','<?php echo ($row["Id"]) ?>');
                    input1.setAttribute('class', 'input');
                    input1.setAttribute('type', 'text');
                    input1.setAttribute('value', '<?php echo ($row["Patient1"]) ?>');

                    var input2 = document.createElement('input');
                    input2.setAttribute('type', 'text');
                    input2.setAttribute('name', 'Patient2');
                    input2.setAttribute('id','<?php echo ($row["Id"]) ?>');
                    input2.setAttribute('class', 'input');
                    input2.setAttribute('value', '<?php echo ($row["Patient2"]) ?>');

                    var input3 = document.createElement('input');
                    input3.setAttribute('type', 'text');
                    input3.setAttribute('name', 'Patient3');
                    input3.setAttribute('id','<?php echo ($row["Id"]) ?>');
                    input3.setAttribute('class', 'input');
                    input3.setAttribute('value', '<?php echo ($row["Patient3"]) ?>');

                    var input4 = document.createElement('input');
                    input4.setAttribute('type', 'text');
                    input4.setAttribute('name', 'Patient4');
                    input4.setAttribute('id','<?php echo ($row["Id"]) ?>');
                    input4.setAttribute('class', 'input');
                    input4.setAttribute('value', '<?php echo ($row["Patient4"]) ?>');

                    var input5 = document.createElement('input');
                    input5.setAttribute('type', 'text');
                    input5.setAttribute('name', 'Patient5');
                    input5.setAttribute('id','<?php echo ($row["Id"]) ?>');
                    input5.setAttribute('class', 'input');
                    input5.setAttribute('value', '<?php echo ($row["Patient5"]) ?>');

                    var input6 = document.createElement('input');
                    input6.setAttribute('type', 'text');
                    input6.setAttribute('name', 'Patient6');
                    input6.setAttribute('id','<?php echo ($row["Id"]) ?>');
                    input6.setAttribute('class', 'input');
                    input6.setAttribute('value', '<?php echo ($row["Patient6"]) ?>');

                    var input7 = document.createElement('input');
                    input7.setAttribute('type', 'text');
                    input7.setAttribute('name', 'Patient7');
                    input7.setAttribute('id','<?php echo ($row["Id"]) ?>');
                    input7.setAttribute('class', 'input');
                    input7.setAttribute('value', '<?php echo ($row["Patient7"]) ?>');

                    var input8 = document.createElement('input');
                    input8.setAttribute('type', 'text');
                    input8.setAttribute('name', 'Patient8');
                    input8.setAttribute('id','<?php echo ($row["Id"]) ?>');
                    input8.setAttribute('class', 'input');
                    input8.setAttribute('value', '<?php echo ($row["Patient8"]) ?>');

                    var input9 = document.createElement('input');
                    input9.setAttribute('type', 'text');
                    input9.setAttribute('name', 'Patient9');
                    input9.setAttribute('id','<?php echo ($row["Id"]) ?>');
                    input9.setAttribute('class', 'input');
                    input9.setAttribute('value', '<?php echo ($row["Patient9"]) ?>');

                    var input10 = document.createElement('input');
                    input10.setAttribute('type', 'text');
                    input10.setAttribute('name', 'Patient10');
                    input10.setAttribute('id','<?php echo ($row["Id"]) ?>');
                    input10.setAttribute('class', 'input');
                    input10.setAttribute('value', '<?php echo ($row["Patient10"]) ?>');

                    var input11 = document.createElement('input');
                    input11.setAttribute('type', 'text');
                    input11.setAttribute('name', 'Patient11');
                    input11.setAttribute('id','<?php echo ($row["Id"]) ?>');
                    input11.setAttribute('class', 'input');
                    input11.setAttribute('value', '<?php echo ($row["Patient11"]) ?>');
                    
                    var input12 = document.createElement('input');
                    input12.setAttribute('type', 'text');
                    input12.setAttribute('name', 'Patient12');
                    input12.setAttribute('id','<?php echo ($row["Id"]) ?>');
                    input12.setAttribute('class', 'input');
                    input12.setAttribute('value', '<?php echo ($row["Patient12"]) ?>');

                    var input13 = document.createElement('input');
                    input13.setAttribute('type', 'text');
                    input13.setAttribute('name', 'Patient13');
                    input13.setAttribute('id','<?php echo ($row["Id"]) ?>');
                    input13.setAttribute('class', 'input');
                    input13.setAttribute('value', '<?php echo ($row["Patient13"]) ?>');

                    var textirea = document.createElement('textarea');
                    textirea.setAttribute('name', 'Aufgaben');
                    textirea.setAttribute('rows', '4');
                    textirea.setAttribute('id','<?php echo ($row["Id"]) ?>');
                    textirea.setAttribute('cols', '20');
                    textirea.setAttribute('class', 'w3review');
                    textirea.value = '<?php echo ($row["Aufgaben"]) ?>'
                    
                    var input15 = document.createElement('input');
                    input15.setAttribute('type', 'submit');
                    input15.setAttribute('value', 'Delet');
                    input15.setAttribute('class', 'Delet btndelete');
                    input15.setAttribute('id', '<?php echo ($row["Id"]) ?>');
                    //input15.setAttribute('class', 'btndelete');



                    var input16 = document.createElement('input');
                    input16.setAttribute('type', 'submit');
                    input16.setAttribute('value', 'Save');
                    input16.setAttribute('class', 'Update btnupdate2');
                    input16.setAttribute('id', '<?php echo ($row["Id"]) ?>');
                   // input16.setAttribute('class', 'btnupdate2');


                    
                    
                    var cell1 = table.rows[1].insertCell(-1);
                    var cell2 = table.rows[2].insertCell(-1);
                    var cell3 = table.rows[3].insertCell(-1);
                    var cell4 = table.rows[4].insertCell(-1);
                    var cell5 = table.rows[5].insertCell(-1);
                    var cell6 = table.rows[6].insertCell(-1);
                    var cell7 = table.rows[7].insertCell(-1);
                    var cell8 = table.rows[8].insertCell(-1);
                    var cell9 = table.rows[9].insertCell(-1);
                    var cell10 = table.rows[10].insertCell(-1);
                    var cell11 = table.rows[11].insertCell(-1);
                    var cell12 = table.rows[12].insertCell(-1);
                    var cell13 = table.rows[13].insertCell(-1);
                    var cell14 = table.rows[14].insertCell(-1);
                    var cell15 = table.rows[15].insertCell(-1);

                    cell1.appendChild(input1);
                    cell2.appendChild(input2);
                    cell3.appendChild(input3);
                    cell4.appendChild(input4);
                    cell5.appendChild(input5);
                    cell6.appendChild(input6);
                    cell7.appendChild(input7);
                    cell8.appendChild(input8);
                    cell9.appendChild(input9);
                    cell10.appendChild(input10);
                    cell11.appendChild(input11);
                    cell12.appendChild(input12);
                    cell13.appendChild(input13);
                    cell14.appendChild(textirea);
                    cell15.appendChild(input15);
                    cell15.appendChild(input16);
    




    <?php
                  }
                }
              ?>


const buttonsdelet = document.querySelectorAll('.Delet');
        buttonsdelet.forEach(buttondelet => {

    buttondelet.addEventListener('click', () => {
       
        var Id = buttondelet.id;

        //alert(Id)
        $.ajax({
                type: "POST",
                    url: "index.php",
                    data: {
                        'Delet': true,
                        'Id': Id
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
               if(isset($_POST['Delet'])){

                $Id = mysqli_real_escape_string($conn, $_POST['Id']);
         
                $queryX = "DELETE FROM `tabel3test` WHERE Id='$Id'";

                if (mysqli_query($conn, $queryX)) {
                    
                } else {
                   echo "Error: " . $sql . ":-" . mysqli_error($conn);
                }
               }
               ?>
                window.location.href = "http://localhost/SNzentrum/login_as_admin1/Home/table3/index.php";
            

    })

})



//var Id = '71';
//var textarea = document.querySelector(`textarea[id="${Id}"]`);
//console.log(textarea.value);
//var inputs = document.querySelectorAll(`input[id=${Id}]`);



const buttonsupdate = document.querySelectorAll('.Update');
buttonsupdate.forEach(buttonupdate => {

    buttonupdate.addEventListener('click', () => {

       
        var Id = buttonupdate.id;
        let Mitarbeiter = document.getElementById(`${Id}`).textContent;

        var inputs = document.querySelectorAll(`input[id="${Id}"]`);
        var textarea = document.querySelector(`textarea[id="${Id}"]`);

        var values = [];

        for (var i = 0; i < inputs.length; i++) {
            values.push(inputs[i].value);
        }
        let Patient1 = values[0];
        let Patient2 = values[1];
        let Patient3 = values[2];
        let Patient4 = values[3];
        let Patient5 = values[4];
        let Patient6 = values[5];
        let Patient7 = values[6];
        let Patient8 = values[7];
        let Patient9 = values[8];
        let Patient10 = values[9];
        let Patient11 = values[10];
        let Patient12 = values[11];
        let Patient13 = values[12];
        let Aufgaben = textarea.value;

        


        $.ajax({
                type: "POST",
                    url: "index.php",
                    data: {
                        'Update': true,
                        'Id': Id,
                        'Mitarbeiter': Mitarbeiter,
                        'Patient1': Patient1,
                        'Patient2': Patient2,
                        'Patient3': Patient3,
                        'Patient4': Patient4,
                        'Patient5': Patient5,
                        'Patient6': Patient6,
                        'Patient7': Patient7,
                        'Patient8': Patient8,
                        'Patient9': Patient9,
                        'Patient10': Patient10,
                        'Patient11': Patient11,
                        'Patient12': Patient12,
                        'Patient13': Patient13,
                        'Aufgaben': Aufgaben
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
               if(isset($_POST['Update'])){

                $Id = mysqli_real_escape_string($conn, $_POST['Id']);
                $Mitarbeiter = mysqli_real_escape_string($conn, $_POST['Mitarbeiter']);
                $Patient1 = mysqli_real_escape_string($conn, $_POST['Patient1']);
                $Patient2 = mysqli_real_escape_string($conn, $_POST['Patient2']);
                $Patient3 = mysqli_real_escape_string($conn, $_POST['Patient3']);
                $Patient4 = mysqli_real_escape_string($conn, $_POST['Patient4']);
                $Patient5 = mysqli_real_escape_string($conn, $_POST['Patient5']);
                $Patient6 = mysqli_real_escape_string($conn, $_POST['Patient6']);
                $Patient7 = mysqli_real_escape_string($conn, $_POST['Patient7']);
                $Patient8 = mysqli_real_escape_string($conn, $_POST['Patient8']);
                $Patient9 = mysqli_real_escape_string($conn, $_POST['Patient9']);
                $Patient10 = mysqli_real_escape_string($conn, $_POST['Patient10']);
                $Patient11 = mysqli_real_escape_string($conn, $_POST['Patient11']);
                $Patient12 = mysqli_real_escape_string($conn, $_POST['Patient12']);
                $Patient13 = mysqli_real_escape_string($conn, $_POST['Patient13']);
                $Aufgaben = mysqli_real_escape_string($conn, $_POST['Aufgaben']);


         
                $queryX = "UPDATE tabel3test SET  Mitarbeiter='$Mitarbeiter' ,Patient1='$Patient1', Patient2='$Patient2', Patient3='$Patient3', Patient4='$Patient4', Patient5='$Patient5', Patient6='$Patient6', Patient7='$Patient7', Patient8='$Patient8', Patient9='$Patient9', Patient10='$Patient10', Patient11='$Patient11', Patient12='$Patient12', Patient13='$Patient13', Aufgaben='$Aufgaben'  WHERE Id='$Id'";

                if (mysqli_query($conn, $queryX)) {
                    
                } else {
                   echo "Error: " . $sql . ":-" . mysqli_error($conn);
                }
               }
               ?>
                window.location.href = "http://localhost/SNzentrum/login_as_admin1/Home/table3/index.php";
            

    })

})

/*--------------------------------------------*/



const buttonupdate1 = document.querySelector('.Update1');

buttonupdate1.addEventListener('click', () => {

        var Id = buttonupdate1.id;
        
        let Mitarbeiter = document.getElementById(`${Id}`).textContent;

        var textarea = document.querySelector(`textarea[id="${Id}"]`);


        var inputs = document.querySelectorAll(`input[id="${Id}"]`);


        var values = [];

        for (var i = 0; i < inputs.length; i++) {
            values.push(inputs[i].value);
        }
        let Patient1 = values[0];
        let Patient2 = values[1];
        let Patient3 = values[2];
        let Patient4 = values[3];
        let Patient5 = values[4];
        let Patient6 = values[5];
        let Patient7 = values[6];
        let Patient8 = values[7];
        let Patient9 = values[8];
        let Patient10 = values[9];
        let Patient11 = values[10];
        let Patient12 = values[11];
        let Patient13 = values[12];
        let Aufgaben = textarea.value;        
        

        $.ajax({
                type: "POST",
                    url: "index.php",
                    data: {
                        'Update': true,
                        'Id': Id,
                        'Mitarbeiter': Mitarbeiter,
                        'Patient1': Patient1,
                        'Patient2': Patient2,
                        'Patient3': Patient3,
                        'Patient4': Patient4,
                        'Patient5': Patient5,
                        'Patient6': Patient6,
                        'Patient7': Patient7,
                        'Patient8': Patient8,
                        'Patient9': Patient9,
                        'Patient10': Patient10,
                        'Patient11': Patient11,
                        'Patient12': Patient12,
                        'Patient13': Patient13,
                        'Aufgaben': Aufgaben
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
               if(isset($_POST['Update'])){

                $Id = mysqli_real_escape_string($conn, $_POST['Id']);
                $Mitarbeiter = mysqli_real_escape_string($conn, $_POST['Mitarbeiter']);
                $Patient1 = mysqli_real_escape_string($conn, $_POST['Patient1']);
                $Patient2 = mysqli_real_escape_string($conn, $_POST['Patient2']);
                $Patient3 = mysqli_real_escape_string($conn, $_POST['Patient3']);
                $Patient4 = mysqli_real_escape_string($conn, $_POST['Patient4']);
                $Patient5 = mysqli_real_escape_string($conn, $_POST['Patient5']);
                $Patient6 = mysqli_real_escape_string($conn, $_POST['Patient6']);
                $Patient7 = mysqli_real_escape_string($conn, $_POST['Patient7']);
                $Patient8 = mysqli_real_escape_string($conn, $_POST['Patient8']);
                $Patient9 = mysqli_real_escape_string($conn, $_POST['Patient9']);
                $Patient10 = mysqli_real_escape_string($conn, $_POST['Patient10']);
                $Patient11 = mysqli_real_escape_string($conn, $_POST['Patient11']);
                $Patient12 = mysqli_real_escape_string($conn, $_POST['Patient12']);
                $Patient13 = mysqli_real_escape_string($conn, $_POST['Patient13']);
                $Aufgaben = mysqli_real_escape_string($conn, $_POST['Aufgaben']);


         
                $queryX = "UPDATE tabel3test SET  Mitarbeiter='$Mitarbeiter' ,Patient1='$Patient1', Patient2='$Patient2', Patient3='$Patient3', Patient4='$Patient4', Patient5='$Patient5', Patient6='$Patient6', Patient7='$Patient7', Patient8='$Patient8', Patient9='$Patient9', Patient10='$Patient10', Patient11='$Patient11', Patient12='$Patient12', Patient13='$Patient13', Aufgaben='$Aufgaben'  WHERE Id='$Id'";

                if (mysqli_query($conn, $queryX)) {
                    ?>
                    window.location.href = "http://localhost/SNzentrum/login_as_admin1/Home/table3/index.php";
                    <?php
                } else {
                   echo "Error: " . $sql . ":-" . mysqli_error($conn);
                }
               }
               ?>
                
            

    })


       </script>


</body>
<script src="scr.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
</body>

</html>