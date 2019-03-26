<<?php 
include ('connection.php');

$error = FALSE;
$message =FALSE;
$messages =FALSE;
$messagess =FALSE;
$messagesss = FALSE;

if (isset($_GET["added"]) && !empty($_GET["added"])) {
    $message = TRUE;    
}else{  
    echo "";
}

if (isset($_GET["update"]) && !empty($_GET["update"])) {
    $messages = TRUE;    
}else{  
    echo "";
}

if (isset($_GET["archive"]) && !empty($_GET["archive"])) {
    $messagess = TRUE;    
}else{  
    echo "";
}

if (isset($_GET["error"]) && !empty($_GET["error"])) {
    $error = TRUE;    
}else{  
    echo "";
}
if (isset($_GET["restore"]) && !empty($_GET["restore"])) {
    $messagesss = TRUE;    
}else{  
    echo "";
}

?> 
<style type="text/css">
#dialogmessage{
  position: fixed;
  top: 15%;
  left: 2%;
  width: 100%;
} 
#inner-meesage{
  margin: 0 auto;
} 
</style>
 ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SSG</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.php" style="color: white; font-size: 30px;">SSG Office</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
         
          </div>
        </div>
      </form>

      <!-- Navbar -->
      
         
        
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
             </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span>
          </a>
       
         
        </li>
             <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i> Services </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div><span><a class="dropdown-item" href="#">Activities</a></span></div>
           <div> <span><a class="dropdown-item" href="students.php">Students</a></span></div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="others.php">
            <i class="fas fa-fw fa-table"></i>
            <span>About us</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="add.php">
            <i class=""></i>
            <span>Contact</span></a>
        </li>
        
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <img src="logo.png" width="1070px" height="250px" style="text-align: center;">
            </li>
            
          </ol>
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" style="margin-top: 90px;">
  <?php if($message == TRUE){ 
        if($_GET['added'] == 1){ ?>
            <div id="dialogmessage">
              <div class="alert alert-primary fade show" id="inner-meesage" style="width: 30%;">
                <center>Successfully Added</center>
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>
              </div>
            </div>          
       <?php }
        else if($_GET['added'] == 2){ ?>
            <div id="dialogmessage">
              <div class="alert alert-danger fade show" id="inner-meesage" style="width: 30%;">
                <center>No Data Added</center>
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>               
              </div>
            </div>
       <?php } ?>

   
          <?php }elseif($messages == TRUE){
        if($_GET['update'] == 1){ ?>
            <div id="dialogmessage">
              <div class="alert alert-success fade show" id="inner-meesage" style="width: 30%;">
                <center>Successfully Updated</center>
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>
              </div>
            </div>          
       <?php }
        else if($_GET['update'] == 2){ ?>
            <div id="dialogmessage">
              <div class="alert alert-danger fade show" id="inner-meesage" style="width: 30%;">
                <center>No Data Updated</center>
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>               
              </div>
            </div>
       <?php } ?>

          <?php }elseif($messagess == TRUE){
        if($_GET['archive'] == 1){ ?>
            <div id="dialogmessage">
              <div class="alert alert-success fade show" id="inner-meesage" style="width: 30%;">
                <center>Successfully Archived</center>
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>
              </div>
            </div>          
       <?php }
        else if($_GET['archive'] == 2){ ?>
            <div id="dialogmessage">
              <div class="alert alert-danger fade show" id="inner-meesage" style="width: 30%;">
                <center>No Data Archived</center>
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>               
              </div>
            </div>
       <?php } ?>

        <?php }elseif($error == TRUE){
        if($_GET['error'] == 1){ ?>
            <div id="dialogmessage">
              <div class="alert alert-danger fade show" id="inner-meesage" style="width: 30%;">
                <center>No User Added</center>
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>               
              </div>
            </div>
       <?php }elseif ($_GET['error'] == 2) { ?>
            <div id="dialogmessage">
              <div class="alert alert-danger fade show" id="inner-meesage" style="width: 30%;">
                <center>Incorrect Old Password</center>
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>               
              </div>
            </div>         
       <?php }
     }elseif($messagesss == TRUE){
        if($_GET['restore'] == 1){ ?>
            <div id="dialogmessage">
              <div class="alert alert-success fade show" id="inner-meesage" style="width: 30%;">
                <center>One User Restored</center>
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>
              </div>
            </div>          
       <?php }
        else if($_GET['restore'] == 2){ ?>
            <div id="dialogmessage">
              <div class="alert alert-danger fade show" id="inner-meesage" style="width: 30%;">
                <center>No User Restored</center>
                <script type="text/javascript">
                  history.pushState('', document.title, window.location.pathname);
                </script>               
              </div>
            </div>
       <?php } ?>
        <?php }?> 
         
                      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
               <h1 class="h2">Settings</h1>
            </div>
          <div class="container">
            <div class="row">
              <div class="col-sm-3 container">
                           <li class="nav-item">
                               <a class="btn btn-xs btn-info" href="user.php">Admin's Profile</a>
                           </li>
                        </ul> 
                    </div>
                    <div class="col-sm-9">
                      <div class="card w3-card-4">
                        <div class="card-header bg-success text-light">
                          <center><strong>User Information</strong></center>
                        </div>
                        <div class="container">
                          <div class="btn-group mr-2">
                            <div class="w3-margin">
                        <a href="#adduser" data-toggle="modal" data-tooltip="tooltip" title="Add User" class="btn btn-sm btn-outline-primary"><span class="fa fa-user-plus"></span> User</a> 
                        <?php
                          include "modals/add_usermodal.php";
                        ?>
                    </div>
                  </div>
                  </div>

                        <div class="card-body">
                  <div class="w3-margin">
                    <div class="row">
                      <div class="col-sm-4">
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." class="list-group-item">

                <ul id="myUL" class="list-group box">
                  <?php
                  
                  $result = mysqli_query($conn, "
        SELECT user.userid, user.user_level, user.user_name, user.password, user.register, user.office_id, user.name,
             user.address, user.contact, user.active, office.office_id, office.office_name
        FROM
            user, office
        WHERE
            user.office_id = office.office_id   
        HAVING
            user.active = 1
        ORDER BY 
            user.userid ASC
                    ");
                  while ($rows = mysqli_fetch_array($result)) { ?>
                  <li class="list-group-item" data-tooltip="tooltip" title="<?php echo $rows['name'] ?> of <?php echo $rows['office_name'] ?> "><a href="?id=<?php echo $rows['userid'] ?>"><?php echo $rows['name']; ?></a></li>
                  <?php
                  }
                   ?>                      
                </ul>                 
                      </div>
                      <div class="col-sm-8">

                        <?php if (isset($_GET['id'])) {
                          $id = $_GET['id'];
                          $result = mysqli_query($conn, "
SELECT user.userid, user.user_level, user.user_name, user.password, user.register, user.office_id, user.name,
     user.address, user.contact, user.active, office.office_id, office.office_name
FROM
    user, office
WHERE
    user.office_id = office.office_id
    AND
    user.userid = {$id}   
HAVING
    user.active = 1
ORDER BY 
    user.userid ASC
                            ");

                         while ($rows = mysqli_fetch_array($result)) { 
                          $userlevel = $rows['user_level'];
                          $userlvl = '';
                          if ($userlevel = 1) {
                           $userlvl = "Administrator";
                          }elseif ($userlevel = 2) {
                            $userlvl = "Office Administrator";
                          }elseif ($userlevel = 3) {
                            $userlvl = "Viewer";
                          }
                          ?>
                <div class="table-responsive">
                            <table id="ttable" class="table table-striped table-bordered table-sm w3-small">
                              <thead style="font-size: .750rem;">
                                <tr>
                                 <div class="col-sm-9">
                                        <strong><?php echo $rows['name']; ?></strong>

                                         <table class="table table-user-information">
                                                              <tbody>
                                                              <tr>
                                                                  <td>User level:</td>
                                                                  <td><?php echo $userlvl; ?></td>
                                                              </tr>
                                                              <tr>
                                                                  <td>Registered since:</td>
                                                                  <td><?php echo $rows['register']; ?></td>
                                                              </tr>
                                                               <tr>
                                                                  <td>Office:</td>
                                                                  <td><?php echo $rows['office_name']; ?></td>
                                                              </tr>
                                                              <tr>
                                                                  <td>Name:</td>
                                                                  <td><?php echo $rows['name']; ?></td>
                                                              </tr>
                                                               <tr>
                                                                  <td>Address:</td>
                                                                  <td><?php echo $rows['address']; ?></td>
                                                              </tr>
                                                               <tr>
                                                                  <td>Contact:</td>
                                                                  <td><?php echo $rows['contact']; ?></td>
                                                              </tr>
                                                            </tbody>
                                 <?php include 'modals/edit_usermodal.php'; ?>   
                                 <?php include 'modals/changeusermodal.php'; ?>
                                 
          
                            </table>
                            <div class="pull-left">
                            <div class="btn-group">  
                            <button type="button" class="btn btn-sm btn-success shadow" data-toggle="modal" data-target="#edit_user" data-tooltip="tooltip" title="Edit"><span class="fa fa-edit"></span> Edit</button>

                            <button type="button" class="btn btn-sm btn-success shadow" data-toggle="modal" data-target="#archive_user" data-tooltip="tooltip" title="Archive"><span class="fa fa-archive"></span> Archive</button>
                            </div>
                          </div>

                          <div class="pull-right">
                            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#changeuser" data-tooltip="tooltip" title="Update User Information"><span class="fa fa-edit"></span> Change User Info</button>
                          </div>
                          </div>                          
                      </div>                           
                  <?php } 
                        }else{
                          echo "<center>
                                  <strong>
                                    Click on the names...
                                  </strong>
                                </center>";
                        } ?>



                    </div>                     
                  </div>                                                            
                        </div>
                        <div class="card-footer">
                          
                        </div>
                      </div>
                    </div>
            </div>
          </div>
              
    
        </main>        
            </div>
        </div>

<style type="text/css">
#myInput {
    background-image: url('../assets/src/img/search.png'); /* Add a search icon to input */
    background-size: 28px;
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
}


#myUL li a:hover:not(.header) {
    background-color: #eee; /* Add a hover effect to all links, except for headers */
} 

.fixed-box {
    position:inherit;
    top: inherit;
    width: 100%;
    overflow:auto;
}
.box{
  position:relative;
    top: inherit;
    width: 100%;
    overflow:auto;  
    height: 100%;  
}
</style>

<script>
function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
<script type="text/javascript">
  $(document).ready(function(){
  $('.alert').alert();

       setTimeout(function(){
        $("#inner-meesage").hide();
     },4000);



  });
</script>



                         
                            </div>
                          </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
         
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span></span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
