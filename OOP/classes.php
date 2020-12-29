<?php
$conn= mysqli_connect("localhost","root","","database 1");

class admin{
  public $Name;
  public $email;
  public $pass;

  public function insert($conn,$Name,$email,$pass)
      {
       $query="insert into admin(Full_name,Email,Password)
       values('$Name','$email','$pass')";
       $conn->query($query);
       }


  public function select($conn){
                $query = "select * from admin";
                $result=$conn->query($query);
                return $result;
            }       

public function selectadmin($conn,$id){
                $query = "select * from admin where Admin_ID='$id'";
                $result=$conn->query($query);
                return $result;
            }   

  public  function delete($conn,$id)
    {
       $query ="delete from admin where Admin_ID= {$_GET['id']}";
        $conn->query($query);
    }
    
  public function edit($conn,$Name,$email,$pass,$id){
    $query = "update admin set
    Email   = '$email',
    Password = '$pass',
    Full_Name = '$Name'
    where Admin_ID =$id";
    $result=$conn->query($query);
                
              

  }
}
$x=new admin();

if(isset($_POST['submit'])){
$Name=$_POST['Full_Name'];
$email=$_POST['Email'];
$pass=$_POST['Password'];
$x->insert($conn,$Name,$email,$pass);
 }

//admin*/




class category{

  public function insertcategory($conn,$Name,$des,$img)
      {
       $query="insert into category (Name,Description,image)
       values('$Name','$des','$img')";
       $conn->query($query);
       }


  public function selectcat($conn)
               {
                $query = "select * from category";
                $result=$conn->query($query);
                return $result;
               }       


  public function selectcategory($conn,$id)
                {
                $query = "select * from category where category_ID='$id'";
                $result=$conn->query($query);
                return $result;
                }   



  public  function deletecategory($conn,$id)
       {
       $query ="delete from category where category_ID= {$_GET['id']}";
        $conn->query($query);
       }
    


  public function editcategory($conn,$Name,$des,$img,$id)
       { 

       $query = "update category set
         Name = '$Name',
         image='$img',
         Description ='$des'
         where category_ID = $id";
      $conn->query($query);
       } 
}
$y=new category();
if(isset($_POST['sub11'])){
$Name=$_POST['Name'];
$des=$_POST['Description'];
$img=$_FILES['image']['name'];
$tmp='category.php';
$path="image/";
move_uploaded_file($tmp, $path.$img);
$y->insert($conn,$Name,$des,$img);
 }
 //category




class customer
{    public function insertcustomer($conn,$Name,$email,$pass,$phone,$add)
      {
       $query="insert into customer(name,Email,Password,phone,address)
       values('$Name','$email','$pass','$Phone','$add')";
       $conn->query($query);
       }

    public function selectcus($conn)
        {
                $query = "select * from customer";
                $result=$conn->query($query);
                return $result;
        }       
    
     public function selectcustomer($conn,$id)
                {
                $query = "select * from customer where customer_ID='$id'";
                $result=$conn->query($query);
                return $result;
                }   



     public  function deletecustomer($conn,$id)
       {
       $query ="delete from customer where customer_ID= {$_GET['id']}";
        $conn->query($query);
       }
    

public function editcustomer($conn,$Name,$email,$pass,$phone,$add)
       { 

       $query = "update customer set
         Email    = '$email',
         Password = '$pass',
             name = '$Name',
             phone='$Phone',
            address='$add'
            where customer_ID = {$_GET['id']}";
      $conn->query($query);
       } 

}

$z=new customer();
if(isset($_POST['submit'])){
$Name=$_POST['Full_Name'];
$email=$_POST['Email'];
$pass=$_POST['Password'];
$Phone=$_POST['Phone'];
$add=$_POST['Address'];  
$y->insertcustomer($conn,$Name,$email,$pass,$phone,$add); 
}

//customer


class product
{
          public function insertproduct($conn,$Name,$des,$qua,$pri,$img)
          {
          $query="insert into product(proname,Description,quantity,Price,category_ID,image)
          values('$Name','$des','$qua','$pri','$cat','$img')";
          $conn->query($query);
          }

          public function selectproduct($conn,$id)
                {
                $query  = "select * from product where product_ID = {$_GET['id']}";    
                $result=$conn->query($query);
                return $result;
                }

          public function selectproductc($conn)
                {
                $query  = "select * from category,product where category.category_ID=product.category_ID"; 
                $result=$conn->query($query);
                return $result;
                }  

          public  function  deleteproduct($conn,$id)
               {
             $query = "delete from product where product_ID = {$_GET['id']}";
             $conn->query($query);
               }
          public function editproduct($conn,$Name,$des,$qua,$pri,$img,$id)
               { 

               "update product set
                proname     = '$Name',
                Description = '$des',
                quantity    ='$qua',
                      Price ='$pri',
                      image ='$img'
                where product_ID = $id";
                 $conn->query($query);

                 } 


     

               

}


$n=new product();
if(isset($_POST['sub']))
{
$Name=$_POST['name'];
$des=$_POST['Description'];
$qua=$_POST['quantity'];
$pri=$_POST['price'];
$cat=$_POST['select'];
$img=$_FILES['image']['name'];
$tmp='product.php';
$path="image/";
move_uploaded_file($tmp, $path.$img);
$z->insertproduct($conn,$Name,$des,$qua,$pri,$img);
}


?>