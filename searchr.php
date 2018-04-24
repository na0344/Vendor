 
<?php include('header.php');?>


 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Search Rider</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Required Rider information</h1>
         <div class="row">
<div class="col-md-10">
<table class="table table-bordered" >
  <tr>
    <td>Rider ID</td>
    <td>Rider Name</td>
      <td>Rider Area</td>
    <td> Rider Vechicle model</td>
        <td>Rider Vechicle comapny</td>
    <td> Product Vechicle number</td>
    <td> rider Contact</td>
    <td colspan="2" align="center">Action</td>
  </tr>
  
  <?php
  $query="select * from rider where $_POST[search]='$_POST[detail]'and vid='$_SESSION[vid]'";

  $sql=mysqli_query($conn,$query);
  if(mysqli_num_rows($sql) > 0){
   
    
while($row=mysqli_fetch_assoc($sql)){
  
  ?>
  <tr>
    
     <td><?php echo ucwords($row['rid']);?> </td>
      <td><?php echo ucwords($row['name']);?> </td>
       <td><?php echo ucwords($row['area']);?> </td>
        <td><?php echo ucwords($row['model']);?> </td>
                <td><?php echo ucwords($row['vcom']);?> </td>
                             <td><?php echo ucwords($row['vnum']);?> </td>
        <td><?php echo ucwords($row['contact']);?> </td>
  
    <td><a href="delv.php?Pid=<?php echo $row['rid'];?>" class="btn btn-danger"> Delete</a></td>
    <td><a href="editp.php?Pid=<?php echo $row['rid'];?>" class="btn btn-primary">Update</a></td>
  </tr>
  
  
  <?php
}
  }
  else{
    echo"<p class='text-danger'>Record not Found Kindly check your Inputs or Register</p></br>";
  }
  
  ?>
  
  
</table>





</div>
</div>
        </div>
      </div>
    </div>


  <?php  include('footer.php');?>