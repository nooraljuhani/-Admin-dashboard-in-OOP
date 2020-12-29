<?php
include ("classes.php");

$id=$_GET['id'];
$result=$y->selectcategory($conn,$id);
$row=$result->fetch_assoc();

if(isset($_POST['sub1'])){
$Name=$_POST['Name'];
$des=$_POST['Description'];
$img=$_FILES['image']['name'];
$tmp='category.php';
$path="image/";
move_uploaded_file($tmp, $path.$img);

$y->editcategory($conn,$Name,$des,$img,$id);  
if($result){

  header("location:oopcategory.php");
}
}

include('Admin.php');
?>
<section id="container">
  <section id="main-content">
  <section class="wrapper">
  <div class="row mt">
   <div class="col-lg-12">
    <h4><i class="fa fa-angle-right"></i> Manage category</h4>
    <div class="form-panel">
    <div class="form">
      
  <form class="cmxform form-horizontal style-form" enctype="multipart/form-data"  action="" method="post">
      <div class="form-group ">
      <label  class="control-label col-lg-2" >Name</label>
      <div class="col-lg-10">
      <input class=" form-control"  name="Name" type="text" value="<?php echo $row['Name']?>"/>
      </div>
       </div>
     <div class="form-group ">
    <label  class="control-label col-lg-2" >Description</label>
      <div class="col-lg-10">
      <input class="form-control "  name="Description" type="text" value="<?php echo $row['Description'] ?>" />
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
  <button class="btn btn-theme" type="submit" name="sub1">Save</button>
  </div>
 </div>
 </form>
 </div>
</div>
</div>
</div>
</section>
</section>