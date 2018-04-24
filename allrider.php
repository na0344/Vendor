<?php include('header.php'); ?>

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Rider Page</li>
      </ol>
      <div class="row">
        <div class="col-12">
<table class="table table-bordered" >
  <tr>
    <td>S.No</td>
    <td>Rider Name</td>
      <td>Image</td>
        <td>Rider Delivery Area</td>
            <td>Rider Address</td>
    <td>Rider Contact</td>
  <td>Rider Vehicle information</td>
  </tr>
  
  <?php
  $query="select * from rider where vid='$_SESSION[vid]'";

  $sql=mysqli_query($conn,$query);
  if(mysqli_num_rows($sql) > 0){
    $i=1;
    
    
while($row=mysqli_fetch_assoc($sql)){
  
  ?>
  <tr>
    <td><?php echo $i++; ?></td>

   
     <td><?php echo ucwords($row['name']);?> </td>
     
      <td><img src="riders/<?php echo ucwords($row['img']);?>" alt="" height="150" width="50"/> </td>
      <td><?php echo ucwords($row['area']);?> </td>
            <td><?php echo ucwords($row['address']);?> </td>
            <td><?php echo ucwords($row['contact']);?> </td> 
                    <td><?php echo ucwords($row['model']);?> <?php echo ucwords($row['vnum']);?><?php echo ucwords($row['vcom']);?></td> 
   

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