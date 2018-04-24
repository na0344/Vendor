<?php include('header.php'); ?>






<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add Product Image</li>
      </ol>
      <div class="row">
        <div class="col-12">
          <h1Ad Product</h1>

<div calss="row">


<div class="col-md-8">

<?php
if(isset($_POST['btn'])){
if($_FILES['Upload']['size']>0){
if($_FILES['Upload']['size']<400000){
	
	if($_FILES['Upload']['type']=='image/png'|| $_FILES['Upload']['type']=='image/jpeg'||$_FILES['Upload']['type']=='image/gif'){
		
		
		$dir="images/";
		$file=$_FILES['Upload']['name'];
		
		if(file_exists($dir.$_FILES['Upload']['name'])){
			
			echo  "this file is already exists";
			
		}else
			{
				move_uploaded_file($_FILES['Upload']['tmp_name'],$dir.$_FILES['Upload']['name']);

				
		$query2="Insert into images values('','$file','$_POST[P]')";


		if(mysqli_query($conn,$query2)){
			
			
			echo"<p class='text-sucess'> Thank you. Your record has been submitted</p>";
			


	
	}
}
}
			}
}else{  
echo "Image is Compusurly";
}

	
	
	
}



?>

<form method="post" action="" enctype="multipart/form-data">




<div class="form-group">
<label> Upload Product Image</label>
<input type="file" class="form-control" name="Upload"/>
</div>




<div class="form-group">
<label>  Select Product </label>
<select class="form-control" name="P">
<?php  
$query="select * from products where vid='$_SESSION[vid]'";
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
<input type="submit" class="btn btn-default" name="btn" value="Add New Product"/>
</div>
</form>

</div>
</div>


        </div>
      </div>
    </div>









<?php include('footer.php');?>























        <?php include('footer.php');?>