<?php
include ("classes.php");

$id=$_GET['id'];
$result=$n->selectproduct($conn,$id);
$row=$result->fetch_assoc();

if(isset($_POST['subb'])){
$Name=$_POST['name'];
$des=$_POST['Description'];
$qua=$_POST['quantity'];
$pri=$_POST['price'];
$img=$_POST['image'];
if ( ! $_FILES['img']['name']) 
    {

     $n->editproduct($conn,$Name,$des,$qua,$pri,$img,$id);  
 
    }
    else
    {

    $img=$_FILES['img']['name'];
    $tmp='product.php';
      $path="image/";
     move_uploaded_file($tmp,$path.$img);

     $n->editproduct($conn,$Name,$des,$qua,$pri,$img,$id);  
 

    }
if($result){

  header("location:oopproduct.php");
}
}

include('Admin.php');
?>
 <section id="container">
  <section id="main-content">
  <section class="wrapper">
  <div class="row mt">
   <div class="col-lg-12">
    <h4><i class="fa fa-angle-right"></i> Manage Prodect</h4>
    <div class="form-panel">
    <div class="form">
    <form class="cmxform form-horizontal style-form" enctype="multipart/form-data"  action="" method="post">
      <div class="form-group ">
      <label  class="control-label col-lg-2" >Name</label>
      <div class="col-lg-10">
      <input class=" form-control"  name="name" type="text"  value="<?php echo $row['proname'] ?>"/>
      </div>
       </div>
       
     <div class="form-group ">
    <label  class="control-label col-lg-2" >Description</label>
      <div class="col-lg-10">
      <input class="form-control "  name="Description" type="text" value="<?php echo $row['Description'] ?>"/>
      </div>
      </div>
    
                   
       <div class="form-group ">
                    <label class="control-label col-lg-2" > quantity 
        </label>
                    <div class="col-lg-10">
                      <input class="form-control " name="quantity" type="text" value="<?php echo $row['quantity'] ?>"/>
                    </div>
                  </div>
            
             <div class="form-group ">
                    <label class="control-label col-lg-2" > Price 
        </label>
                    <div class="col-lg-10">
                      <input class="form-control " name="price" type="text" value="<?php echo $row['Price'] ?>"/>
                    </div>
                  </div>
                  <div class="form-group ">
      <label  class="control-label col-lg-2" >Image</label>
      <div class="col-lg-10">
        <?php
      echo "<img src='image/{$row['image']}' width='100' hight='140'/>";
      ?>
     <input class="form-control "  name="image" type="file" />
     </div>
      </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="subb">Save</button>
                      
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