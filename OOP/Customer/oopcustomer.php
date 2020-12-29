<?php
include ("classes.php");
include('Admin.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>
<link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
</head>

<body>

  <section id="container">
  <section id="main-content">
  <section class="wrapper">
  <div class="row mt">
   <div class="col-lg-12">
    <h4><i class="fa fa-angle-right"></i> Manage Customer</h4>
    <div class="form-panel">
    <div class="form">
    <form class="cmxform form-horizontal style-form"   action="customer.php" method="post">
      <div class="form-group ">
      <label  class="control-label col-lg-2" >Full Name</label>
      <div class="col-lg-10">
      <input class=" form-control"  name="Full_Name" type="text" />
      </div>
       </div>
     <div class="form-group ">
    <label  class="control-label col-lg-2" >Password</label>
      <div class="col-lg-10">
      <input class="form-control "  name="password" type="password" />
      </div>
      </div>
     <div class="form-group ">
      <label  class="control-label col-lg-2" >Email</label>
      <div class="col-lg-10">
      <input class="form-control " name="Email" type="email" />
        </div>
        </div>
                   <div class="form-group ">
                    <label  class="control-label col-lg-2" >Phone</label>
                    <div class="col-lg-10">
                      <input class="form-control "  name="Phone" type="" />
                    </div>
                  </div>
                   <div class="form-group ">
                    <label class="control-label col-lg-2" >Address</label>
                    <div class="col-lg-10">
                      <input class="form-control " name="Address" type="text" />
                    </div>
                  </div>
            
             
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="submit">Save</button>
                      
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <section id="main-content">
      <section class="wrapper">
 <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Coustomer Table</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i>Coustomer ID</th>
                    <th><i class="fa fa-bookmark"></i> Name</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Email</th>
                    
              
                    <th><i class=" fa fa-edit"></i> Phone</th>
                    <th><i class=" fa fa-edit"></i> Address</th>
        
                  </tr>
                </thead><tbody>
<?php
 $result=$z->selectcus($conn);
 while($row=$result->fetch_assoc()){
 echo "<tr>";
 echo "<td>{$row['customer_ID']}</td>";
 echo "<td>{$row['name']}</td>";
 echo "<td>{$row['Email']}</td>";
 echo "<td>{$row['phone']}</td>";
 echo "<td>{$row['address']}</td>";
 echo "<td><a href='oopeditcustomer,php.php?id={$row['customer_ID']}' class='btn btn-primary'>Edit</a></td>";
 echo "<td><a href='oopcustomerdelet.php?id={$row['customer_ID']}' class='btn btn-danger'>Delete</a></td>";
echo "</tr>";
}?>
  </tbody>
 </table>
</div>
</div>
</div>
 </section>
</section>
    
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/form-validation-script.js"></script>
  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

</body>

</html>
