<?php
include("header.php");?>

 <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Search Rider</li>
      </ol>
      <div class="row">
        <div class="col-12">
        <div calss="row">
<div class="col-md-8">
<form action="searchr.php"  method="post">
<div class="form-group">
  <label for="sel1">Search by:</label>
  <select class="form-control" id="sel1" name="search">
    <option value="rid">Rider Id</option>
    <option value="name">Rider Name</option>
    <option  value="area" >Rider Delivery  Area</option>
    <option  value="model" >Rider Vechicle model</option>
      <option  value="vnum" >Rider Vechicle number</option>
       <option  value="vcom" >Rider Vechicle company</option>
        <option  value="contact" >Rider Contact</option>
  </select>
</div>



<div class="form-group">
  <label for="usr">Enter Details </label>
  <input type="text" class="form-control" id="usr" name="detail">
</div>

<div class="form-group">
 <input type="submit" class="btn btn-success" value="Search" name='btn'/>
</div>

</form>
</div>
</div>  
        </div>
      </div>
    </div>
</hr>



<?php 
include("footer.php");?>