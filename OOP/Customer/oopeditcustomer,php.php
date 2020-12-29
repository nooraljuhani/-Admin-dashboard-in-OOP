<?php
include ("classes.php");

$id=$_GET['id'];
$result=$z->selectcustomer($conn,$id);
$row=$result->fetch_assoc();

if(isset($_POST['submit1'])){
$Name=$_POST['Full_Name'];
$email=$_POST['Email'];
$pass=$_POST['Password'];
$Phone=$_POST['Phone'];
$add=$_POST['Address'];

$z->editcustomer($conn,$Name,$email,$pass,$phone,$add);    
if($result){

  header("location:oopcustomer.php");
} 
}

include('Admin.php');
?>
<section id="container">
  <section id="main-content">
  <section class="wrapper">
  <div class="row mt">
   <div class="col-lg-12">
    <h4><i class="fa fa-angle-right"></i> Manage Customer</h4>
    <div class="form-panel">
    <div class="form">
    <form class="cmxform form-horizontal style-form"   action="" method="post">
      <div class="form-group ">
      <label  class="control-label col-lg-2" >Full Name</label>
      <div class="col-lg-10">
      <input class=" form-control"  name="Full_Name" type="text" value="<?php echo $row['name'] ?>"/>
      </div>
       </div>
     <div class="form-group ">
    <label  class="control-label col-lg-2" >Password</label>
      <div class="col-lg-10">
      <input class="form-control "  name="password" type="password" value="<?php echo  $row['password'] ?>" />
      </div>
      </div>
     <div class="form-group ">
      <label  class="control-label col-lg-2" >Email</label>
      <div class="col-lg-10">
      <input class="form-control " name="Email" type="email" value="<?php echo  $row['Email'] ?>"/>
        </div>
        </div>
    <div class="form-group ">
     <label  class="control-label col-lg-2" >Phone</label>
      <div class="col-lg-10">
      <input class="form-control "  name="Phone" type="" value="<?php echo  $row['phone'] ?>"/>
      </div>
      </div>
    <div class="form-group ">
     <label class="control-label col-lg-2" >Address</label>
      <div class="col-lg-10">
      <input class="form-control " name="Address" type="text" value="<?php echo  $row['address'] ?>" />
 </div>
  </div>
<div class="form-group">
  <div class="col-lg-offset-2 col-lg-10">
  <button class="btn btn-theme" type="submit" name="submit1">Save</button>
  </div>
 </div>
 </form>
 </div>
</div>
</div>
</div>
</section>
</section>