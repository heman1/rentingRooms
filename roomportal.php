<?php // require 'config/config.php';
 
 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Room Portal</title>
    <link href="assets/css/dashStyle.css" rel="stylesheet">

  </head>

  <body>

 <?php include 'includes/navheader.php'; ?>     
      
       
       </ul>
     </div><!-- /.navbar-collapse -->
</nav>
   <link href="assets/css/dashStyle.css" rel="stylesheet">
    <!-- Page Content -->
    <div class="container-fluid">
     
      <div class="row">
         
        <!-- /.col-lg-3 -->
        <div class="container filter col-lg-3 col-md-3  col-sm-3 nav nav-pills nav-stacked" data-spy="affix" data-offset-top="150">
           <form action="roomportal.php" class="navbar-form navbar-right">
            <ul>
                <li>
                    <label>location</label><br>
                    <div class="form-group">
                     <input type="text" class="form-control" placeholder="search">
                    </div>
               </li>
               <br>
               <li>
                   <label>category</label><br>
                   <div class="checkbox">
                      <label><input type="checkbox" value="">Boys</label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="">Girls</label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value="">Family</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Other></label>
                    </div>
                </li>
                <br>
                <li>
                    <label>Amount</label><br> 
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" name="Search">
                  </div>
                
               </li><br>
               <li>
                   <label>Type</label><br>
                   <div class="radio">
                      <label><input type="radio" value="">Hostel</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" value="">PG</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" value="">room</label>
                    </div>
               </li>
               <br>
               <button class="btn btn-default" name="SearchButton">Go</button> 
            </ul>
            </form>
        </div>

        <div class="container feed">

            <?php 
           $con=mysqli_connect('localhost','root','');
            $ConnectingDB=mysqli_select_db($con,"roomfinder");
       //      if ( $urlId==1) {
         //     $viewquery="SELECT * FROM roominfo WHERE statename LIKE '%'  ORDER BY datetime desc";
       //      }
             if (isset($_GET["SearchButton"])) {
                $Search=$_GET["Search"];
                $viewquery="SELECT * FROM roominfo WHERE datetime LIKE '%$Search%'  OR levelset LIKE '%$Search%' OR rent LIKE '%$Search%'";
              }else{ 
                $viewquery="SELECT * FROM roominfo";}
                $count=0;
                $execute=mysqli_query($con,$viewquery);
              while($dataRows=mysqli_fetch_array($execute)) {
              $Id=$dataRows["id"];
              $Landlord=$dataRows["landlord"];
              $Address=$dataRows["address"];
          //    $City=$dataRows["city"];
            //  $State=$dataRows["state"];
          //    $Contact=$dataRows["contact"];
              $Rent=$dataRows["rent"];
         
            //  $Contact=$dataRows["contact"];
              $Info=$dataRows["info"];
              $Image1=$dataRows["image1"];
              $Levelset=$dataRows["levelset"]; 
              $Datetime=$dataRows["datetime"];
              $Address=$dataRows["address"];
              $username = $dataRows["username"];
            
            
              ?>          
          <div class="row feedInside">
  
            <div class="col-lg-12 col-sm-12 col-md-12 ">
              <div style="overflow:hidden" class="card">
                <a href="fullpost.php?fullid=<?php echo $Id ;?>"><img  class="card-img-top img-responsive" src="uploadedimg/<?php echo htmlentities($Image1); ?>" alt="">
                <div class="card-body">
                  <h4 class="card-title">
                     Address:<span> <?php echo htmlentities($Address);?></span>
                  </h4>
                  <h4>Type: <?php echo htmlentities($Levelset); ?> room set</h4>
                  <h5>published by: <?php echo htmlentities($username); ?></h5>
                  <h5>published on: <?php echo htmlentities($Datetime); ?></h5>
                  <br>
                  <br>
                </div>
                <div class="card-footer">
                 <h4 style="color:black;">
                      Rent <i class="fa fa-rupee"> </i><span> <?php echo htmlentities($Rent); ?> </span>
                  </h4>
                </div>
              </a>  
              </div>
            </div>
             
            
          </div>
        <!--row ends...........................-->
         <!--div class="card w-75">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Button</a>
  </div>
</div-->
          <?php  }//end of while loop ?>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

   <?php
include 'includes/footer.php';
?>
  </body>

</html>
