<?php include('header.php');?>


 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Search Product</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1>Required Product Information</h1>
         <div class="row">
<div class="row">
<div class="col-md-10">
  <table class="table table-bordered" >
    <tr>
    <td>Name</td>
    <td>Link</td>
      <td>Description</td>
         <td>Product ID</td>
    <td>Category</td>
  </tr>
  
  <?php
  $query="Select * from products where Pid='$_GET[Pid]'";
  $sql=mysqli_query($conn,$query);
  if(mysqli_num_rows($sql) > 0){
    $i=1;
    
while($row=mysqli_fetch_assoc($sql)){
  
  
  ?>
 
    
<?php echo"<form action='updatep.php' method='post'>";echo "<tr>";
echo"<td>"."<input type='text' name='t1' value=" .$row['Name'] ." </td>";
echo"<td>"."<input type='text' name='t2' value=" .$row['Link'] ." </td>";
echo"<td>"."<input type='text' name='t3' value=" .$row['Description'] ." </td>";
echo "<td>"."<input type='text' readonly name='t5' value=" .$row['Pid'] ." </td>";

 $query2="select * from subcategory where Sid='$row[Sid]'";
  $sql2=mysqli_query($conn,$query2);
  $row2=mysqli_fetch_assoc($sql2);  
echo"<td>"."<input type='text' name='t4' value=" .$row2['SCatName'] ." </td>";

?> 
<tr>
<td>
  <input type="submit" value="update" name="update" class="btn btn-primary"/></td>

  </tr>
 </form> 
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

    <?php include('footer.php');?>