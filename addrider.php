<?php include('header.php'); ?>






<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add Rider</li>
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
		
		
		$dir="riders/";
		$file=$_FILES['Upload']['name'];
		
		if(file_exists($dir.$_FILES['Upload']['name'])){
			
			echo  "this file is already exists";
			
		}else
			{
				move_uploaded_file($_FILES['Upload']['tmp_name'],$dir.$_FILES['Upload']['name']);

                $name=clean($_POST['name']);
				$model=clean($_POST['model']);
				$com=clean($_POST['vcom']);
				$area=clean($_POST['area']);
				$addr=clean($_POST['addr']);
				$enc_pass=base64_encode($_POST['pass']);

	
	if(empty($_POST['name'])||empty($_POST['model'])||empty($_POST['vcom'])||empty($_POST['area'])||empty($_POST['vnum'])||empty($_POST['addr'])||empty($_POST['contact'])||empty($_POST['email'])||empty($_POST['pass'])){
		
		echo"<p class='text-danger'>Fill the Required Feilds</p>";
	}
	else{
		$a= $_SESSION['vid'];
		$query2="Insert into rider values('','$name','$file','$model','$_POST[vnum]','$com','$area','$_POST[contact]','$_POST[email]','$enc_pass','$a',now(),'$addr')";


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
<label> Rider Name</label>
<input type="text" class="form-control" name="name"/>
</div>

<div class="form-group">
<label> Rider  Image</label>
<input type="file" class="form-control" name="Upload"/>
</div>

<div class="form-group">
<label> Vehicle Model </label>
<input  type=text name="model" class="form-control"/>

</div>


<div class="form-group">
<label> Vehicle Number</label>
<input type="text" class="form-control" name="vnum"/>
</div>


<div class="form-group">
<label> Vehicle Company</label>
<input type="text" class="form-control" name="vcom"/>
</div>


<div class="form-group">
<label> Rider Area</label>
<input type="text" class="form-control" name="area"/>
</div>


<div class="form-group">
<label> Rider Address</label>
<input type="text" class="form-control" name="addr"/>
</div>

<div class="form-group">
<label> Rider Contact</label>
<input type="text" class="form-control" name="contact"/>
</div>

<div class="form-group">
<label> Rider Email</label>
<input type="email" class="form-control" name="email"/>
</div>

<div class="form-group">
<label> Rider Password</label>
<input type="password" class="form-control" name="pass"/>
</div>

<div class="form-group">
<input type="submit" class="btn btn-default" name="btn" value="Add Rider"/>
</div>
</form>

</div>
</div>


        </div>
      </div>
    </div>









<?php include('footer.php');?>

