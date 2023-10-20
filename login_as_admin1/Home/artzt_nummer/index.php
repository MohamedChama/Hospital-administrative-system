
<?php 
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
                <a href="../index.php"><img src="../imags/Hospital-PNG-HD (1).png" alt="logo" id="logo"
                        width="50px"></a>


            </div>
            <div class="nav4">

            </div>
        </div>

        <div class="mid">

            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="jaja">
                                <h2 id="manage">Adressenliste <b>Ärtze</b></h2>
                            </div>
                            
                            <div class="jaja2">
                                <form action="action.php" method="post">
                                <input onkeyup="searchData()" class="search" id="inputsearch" type="text"
                                    placeholder="search by Name" />
                                </form>
                                
                            

                            </div>
                            <div class="jaja3"><a href="#addEmployeeModal" id="addnewartbutton" class="btn btn-success"
                                    data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New
                                        Ärtze</span></a></div>

                        </div>
                    </div>
                    

                    <div class="table-wrapper2" >
                        <table class="table table-striped table-hover" id="tablelefttop">
                            <div class="tablescroooool">
                                <thead>
                                    <tr class="the_th">
                                    <th id="tablerighttop2">Id</th>
                                        <th>Vorname</th>
                                        <th>Nachname</th>
                                        <th>Strasse</th>
                                        <th>Ort</th>
                                        <th>Tel</th>
                                        <th>Fax</th>
                                        <th id="tablerighttop">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="thetd" id="tbody">



                                <?php
                            require 'dbcon.php';

                            $query = "SELECT * FROM doctors";

                                
                                $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $doctor)
                                {
                                    ?>
                                    <tr>
                                        <td><?= $doctor['Id'] ?></td>
                                        <td><?= $doctor['Vorname'] ?></td>
                                        <td><?= $doctor['Nachname'] ?></td>
                                        <td><?= $doctor['Strasse'] ?></td>
                                        <td><?= $doctor['Ort'] ?></td>
                                        <td><?= $doctor['Tel'] ?></td>
                                        <td><?= $doctor['Fax'] ?></td>
                                        <td>
                                        <button type="button" value="<?=$doctor['Id'];?>" class="editStudentBtn btn btn-success btn-sm">Edit</button>
                                        <button type="button"  value="<?=$doctor['Id'];?>" class="deleteStudentBtn btn btn-danger btn-sm">Delete</button>

                                       <!-- <a href="#editEmployeeModal" value="" class="editStudentBtn edit"
                                                data-toggle="modal"><i class="material-icons" data-toggle="tooltip"
                                                    title="Edit">&#xE254;</i></a> 
                                            <a href="#deleteEmployeeModal" value="" class="deleteStudentBtn delete"
                                                data-toggle="modal"><i class="material-icons" data-toggle="tooltip"
                                                    title="Delete">&#xE872;</i></a> -->




                                            
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>






                                    
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- add new -->
        

        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form id="saveStudent">
                        <div class="modal-header">
                            <h4 class="modal-title">Add Employee</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <table style="margin-left:30px ;">
                        
                            <tr style="height:60px ;">
                                <td>Vorname : </td>
                                <td><input name="Vorname" class="input"   type="text"
                                        placeholder="Geben Sie den Vorname ein" />
                                </td>

                            </tr>

                            <tr style="height:60px ;">
                                <td>Nachname :</td>
                                <td><input name="Nachname" class="input"   type="text"
                                        placeholder="Geben Sie den Nachname ein" />
                                </td>
                            </tr>

                            <tr style="height:60px ;">
                                <td>Straße : </td>
                                <td><input name="Strasse" class="input"  type="text"
                                        placeholder="Geben Sie die Straße ein" />
                                </td>
                            </tr>

                            <tr style="height:60px ;">
                                <td>Ort : </td>
                                <td><input name="Ort" class="input"  type="text"
                                        placeholder="Geben Sie den Ort ein" />
                                </td>
                            </tr>

                            <tr style="height:60px ;">
                                <td>Tel : </td>
                                <td><input name="Tel" class="input" type="text"
                                        placeholder="Geben Sie die Handynummer ein" /></td>
                            </tr>

                            <tr style="height:60px ;">
                                <td>Fax : </td>
                                <td><input  name="Fax" class="input"type="text"
                                        placeholder="Geben Sie den Handynummer ein" /></td>
                            </tr>
                        </table>

                        <div class="modal-footer">
                            <!-- <input type="button" onclick="cleardata()" id="Cancel" class="btn btn-default"
                                data-dismiss="modal" value="Cancel">-->

                                <button type="button"  class="btn btn-default" data-bs-dismiss="modal">Cancel</button>


                                <button type="submit" onclick="windowld()" class="btn btn-success">Add</button>

                            <!-- <button id="submit" name="Add" class="btn btn-default">cCancel</button>
                            <button id="submit" name="Add" class="btn btn-success">Add</button>-->

                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        

        <!-- Edit Modal HTML -->



        <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                     <form id="updateStudent">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Employee</h4>

                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        
                        <table style="margin-left:30px ;">
                        
                        <input type="hidden" name="student_id" id="student_id" >

                            <tr style="height:60px ;">
                                <td>Vorname : </td>
                                <td><input type="text" name="VornameED" id="Vorname" class="input" /></td>

                            </tr>

                            <tr style="height:60px ;">
                                <td>Nachrname :</td>
                                <td><input type="text" name="NachnameED" id="Nachname" class="input"  /></td>
                            </tr>

                            <tr style="height:60px ;">
                                <td>Straße : </td>
                                <td><input name="StrasseED" id="Strasse" class="input" type="text" /></td>
                            </tr>

                            <tr style="height:60px ;">
                                <td>Ort : </td>
                                <td><input name="OrtED" id="Ort" class="input" type="text" /></td>
                            </tr>

                            <tr style="height:60px ;">
                                <td>Tel : </td>
                                <td><input name="TelED" id="Tel" class="input" type="text" /></td>
                            </tr>

                            <tr style="height:60px ;">
                                <td>Fax : </td>
                                <td><input name="FaxED" id="Fax" class="input" type="text" /></td>
                            </tr>
                        </table>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-default" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" onclick="windowld()"  class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        <!-- Delete Modal HTML -->
    

    </div>



</body>
<script src="scr.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script>
        $(document).on('submit', '#saveStudent', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("save_student", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessage').removeClass('d-none');
                        $('#errorMessage').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessage').addClass('d-none');
                        $('#addEmployeeModal').modal('hide');
                        $('#saveStudent')[0].reset();

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);

                        $('#tablelefttop').load(location.href + " #tablelefttop");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });
            window.location.href = "http://localhost/SNzentrum/login_as_admin1/Home/artzt_nummer/index.php";

        });

        $(document).on('click', '.editStudentBtn', function () {

            var student_id = $(this).val();
            
            $.ajax({
                type: "GET",
                url: "code.php?student_id=" + student_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if(res.status == 404) {

                        alert(res.message);
                    }else if(res.status == 200){

                        $('#student_id').val(res.data.Id);
                        $('#Vorname').val(res.data.Vorname);
                        $('#Nachname').val(res.data.Nachname);
                        $('#Strasse').val(res.data.Strasse);
                        $('#Ort').val(res.data.Ort);
                        $('#Tel').val(res.data.Tel);
                        $('#Fax').val(res.data.Fax);

                        $('#editEmployeeModal').modal('show');
                    }

                }
            });

        });

        $(document).on('submit', '#updateStudent', function (e) {
            $('#editEmployeeModal').modal('hide');

            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_student", true);

            $.ajax({
                type: "POST",
                url: "code.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    
                    var res = jQuery.parseJSON(response);
                    if(res.status == 422) {
                        $('#errorMessageUpdate').removeClass('d-none');
                        $('#errorMessageUpdate').text(res.message);

                    }else if(res.status == 200){

                        $('#errorMessageUpdate').addClass('d-none');

                        alertify.set('notifier','position', 'top-right');
                        alertify.success(res.message);

                        $('#updateStudent')[0].reset();

                        $('#tablelefttop').load(location.href + " #tablelefttop");

                    }else if(res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        

        $(document).on('click', '.deleteStudentBtn', function (e) {
            e.preventDefault();

            if(confirm('Are you sure you want to delete this data?'))
            {
                var student_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'delete_student': true,
                        'student_id': student_id
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if(res.status == 500) {

                            alert(res.message);
                        }else{
                            alertify.set('notifier','position', 'top-right');
                            alertify.success(res.message);

                            $('#tablelefttop').load(location.href + " #tablelefttop");
                        }
                    }
                });
            }
            window.location.href = "http://localhost/SNzentrum/login_as_admin1/Home/artzt_nummer/index.php";
        });

    </script>

</body>

</html>