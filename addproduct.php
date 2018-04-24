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

$Title=clean($_POST['Title']);
				$Desc=clean($_POST['Description']);
	
	if(empty($_POST['Title'])||empty($_POST['Description'])||empty($_POST['link'])){
		
		echo"<p class='text-danger'>Fill the Required Feilds</p>";
	}
	else{
		$a= $_SESSION['vid'];
		$query2="Insert into products values('','$_POST[Cat]','$Title','$file','$Desc','$_POST[link]',now(),'$a','$_POST[price]','0')";

		if(mysqli_query($conn,$query2)){
			
			
			echo"<p class='text-sucess'> Thank you. Your record has been submitted</p>";
			
		}
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
<label> Product Name</label>
<input type="text" class="form-control" name="Title"/>
</div>

<div class="form-group">
<label> Product Image</label>
<input type="file" class="form-control" name="Upload"/>
</div>

<div class="form-group">
<label> Product Description</label>
<textarea name="Description" cols="40" rows="4" class="form-control">
</textarea>
</div>


<div class="form-group">
<label> Link</label>
<input type="text" class="form-control" name="link"/>
</div>


<div class="form-group">
<label> Price</label>
<input type="text" class="form-control" name="price"/>
</div>

<div class="form-group">
<label>  Category </label>
<select class="form-control" name="Cat">
<?php  
$query="select * from subcategory";
$sql=mysqli_query($conn,$query);
if(mysqli_num_rows($sql)>0)
{
	
	while($row=mysqli_fetch_assoc($sql)){
		
		
		
		
	
?>
<option value="<?php echo $row['Sid'];  ?>"><?php echo $row['SCatName'];  ?></option>
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

