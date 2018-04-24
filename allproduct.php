<?php include('header.php'); ?>

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Product Page</li>
      </ol>
      <div class="row">
        <div class="col-12">
<table class="table table-bordered" >
  <tr>
    <td>S.No</td>
    <td>Product Name</td>
      <td>Image</td>
            <td>Product Description</td>
    <td>Sub Category Name</td>
  
  </tr>
  
  <?php
  $query="select * from products where vid='$_SESSION[vid]'";

  $sql=mysqli_query($conn,$query);
  if(mysqli_num_rows($sql) > 0){
    $i=1;
    
    
while($row=mysqli_fetch_assoc($sql)){
  
  ?>
  <tr>
    <td><?php echo $i++; ?></td>

   
     <td><?php echo ucwords($row['Name']);?> </td>
     
      <td><img src="images/<?php echo ucwords($row['Image']);?>" alt="" height="150" width="50"/> </td>
      <td><?php echo ucwords($row['Description']);?> </td>
    <td><?php
  $query2="select * from subcategory where Sid='$row[Sid]'";
  $sql2=mysqli_query($conn,$query2);
  $row2=mysqli_fetch_assoc($sql2);
  
  
   echo ucwords($row2['SCatName']);?> </td>

  </tr>
  
  
  <?php
}
  }
  
  ?>
  
  
</table>





        </div>
      </div>
    </div>









          <?php include('footer.php');?>