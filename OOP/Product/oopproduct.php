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
    <h4><i class="fa fa-angle-right"></i> Manage Prodect</h4>
    <div class="form-panel">
    <div class="form">
    <form class="cmxform form-horizontal style-form"   action="prodect.php" method="post" enctype="multipart/form-data">
      <div class="form-group ">
      <label  class="control-label col-lg-2" >Name</label>
      <div class="col-lg-10">
      <input class=" form-control"  name="name" type="text" />
      </div>
       </div>
     <div class="form-group ">
    <label  class="control-label col-lg-2" >Description</label>
      <div class="col-lg-10">
      <input class="form-control "  name="Description" type="text" />
      </div>
      </div>
    <div class="form-group ">
   <label  class="control-label col-lg-2" >Image</label>
   <div class="col-lg-10">
     <input class="form-control "  name="image" type="file" />
     </div>
                  </div>
                   <div class="form-group ">
                    <label class="control-label col-lg-2" > quantity 
        </label>
                    <div class="col-lg-10">
                      <input class="form-control " name="quantity" type="text" />
                    </div>
                  </div>
            
             <div class="form-group ">
                    <label class="control-label col-lg-2" > Price 
        </label>
                    <div class="col-lg-10">
                      <input class="form-control " name="price" type="text" />
                    </div>
                  </div>
<div class="form-group ">
  <label class="control-label col-lg-2" > Category 
        </label>
                    <select name="select" class="forn-control">
                    
                      <?php
                      $result=$y->selectcat($conn);
                       while($row=$result->fetch_assoc())
                          {
                        echo "<option value={$row['category_ID']}>";
                        echo $row['Name'];
                        echo "</option>";
                      }
                      ?>
                    </select>
                  </div>


                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="sub">Save</button>
                      
                    </div>
                  </div>
                </form>
              </div>
            </div>
            
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
                <h4><i class="fa fa-angle-right"></i> product Table</h4>
                <hr> 
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i>product_ID</th>
                    <th><i class="fa fa-bookmark"></i> Name</th>
                    <th><i class="fa fa-bullhorn"></i>Image</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Description</th>
                    
                    <th><i class=" fa fa-edit"></i>quantity </th>
                     <th><i class=" fa fa-edit"></i>Price </th>
                     <th><i class=" fa fa-edit"></i> Category_name</th>
        
        
                  </tr>
                </thead><tbody>
<?php
 $result=$n->selectproductc($conn);
 while($row=$result->fetch_assoc())
{
 echo "<tr>";
 echo "<td>{$row['product_ID']}</td>";
 echo "<td>{$row['proname']}</td>";
 echo "<td><img src='image/{$row['image']}' width='100' hight='140'/></td>";
 echo "<td>{$row['Description']}</td>";
 echo "<td>{$row['quantity']}</td>";
 echo "<td>{$row['Price']}</td>";
 echo "<td>{$row['Name']}</td>";
 echo "<td><a href='oopproductedit.php?id={$row['product_ID']}' class='btn btn-primary'>Edit</a></td>";
 echo "<td><a href='oopproductdelete.php?id={$row['product_ID']}' class='btn btn-danger'>Delete</a></td>";
echo "</tr>";
}
?>
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
