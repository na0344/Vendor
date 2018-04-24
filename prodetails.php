<?php include('header.php'); ?>






<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add Product</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1Ad Product</h1>

<div calss="row">


<div class="col-md-8">

<?php
if(isset($_POST['btn'])){

                $shape=clean($_POST['shape']);
				$flav=clean($_POST['flav']);
        $w=clean($_POST['w']);
	
	if(empty($_POST['shape'])||empty($_POST['flav'])||empty($_POST['w'])){
		
		echo"<p class='text-danger'>Fill the Required Feilds</p>";
	}
	else{
		
		$query2="Insert into prodetails values('','$_POST[P]','$shape','$w','$flav','$_POST[egg]','$_POST[sugar]')";
  

		if(mysqli_query($conn,$query2)){
			
			
			echo"<p class='text-sucess'> Thank you. Your record has been submitted</p>";
}
}
}


?>

<form method="post" action="" enctype="multipart/form-data">


<div class="form-group">
<label>Shape</label>
<input type="text" class="form-control" name="shape"/>
</div>

<div class="form-group">
<label> Flavour</label>
<input type=text class="form-control" name="flav"/>
</div>

<div class="form-group">
<label> Weight</label>
<input type=text class="form-control" name="w"/>

</div>


<div class="form-group">
  <label for="sel1">Sugar Free:</label>
  <select class="form-control" id="sel1" name="sugar">
    <option value="YES">YES</option>
    <option value="NO">NO</option>
  </select>
</div>


<div class="form-group">
  <label for="sel1">Egg Included</label>
  <select class="form-control" id="sel1" name="egg">
    <option value="YES">YES</option>
    <option value="NO">NO </option>
  </select>
</div>



<div class="form-group">
<label> Select  Product </label>
<select class="form-control" name="P">
<?php  
$query="select * from products where vid='$_SESSION[vid]'";
echo $query;
$sql=mysqli_query($conn,$query);
if(mysqli_num_rows($sql)>0)
{
	
	while($row=mysqli_fetch_assoc($sql)){
		
		
		
		
	
?>
<option value="<?php echo $row['Pid'];  ?>"><?php echo $row['Name'];  ?></option>
<?php 

	}
}
?>
</select>
</div>

<div class="form-group">
<input type="submit" class="btn btn-default" name="btn" value="Add Details"/>
</div>
</form>

</div>
</div>


        </div>
      </div>
    </div>









<?php include('footer.php');?>

