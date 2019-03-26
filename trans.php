
<?php
       
       include('connection.php');
       include('header.php');
       
        ?>   
<body>

    <div id="wrapper">

       
                <a class="navbar-brand" href="index.php"></a>
            </div>
     
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i></a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

               
                <!-- /.row -->


             <div class="col-lg-12">
                <?php
                        $fle = $_POST['file'];
                        $dte = $_POST['dateupload'];
                        $nme = $_POST['activityname'];
                        
                
                    switch($_GET['action']){
                        case 'add':         
                                $query = "INSERT INTO file
                                (file_id, file, date_upload, activity_name) VALUES ('Null','".$fle."','".$dte."','".$nme."')";
                                mysqli_query($db,$query)or die ('Error in updating Database');
                            
                        break;
                                    
                        }
                ?>
        <script type="text/javascript">
            alert("Successfully added.");
            window.location = "attendance.php";
        </script>
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>

