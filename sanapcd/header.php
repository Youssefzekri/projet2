 <?php
 
$bdd = new PDO('mysql:host = 127.0.0.1;dbname=sana','root','');
 
$status = $bdd->getAttribute(PDO::ATTR_CONNECTION_STATUS);
error_reporting(0);
 session_start();
?>

<html>
<head>
    <meta charset="utf-8">
    <title> formaENSI </title>
    <!-- css avec bootstrap -->
    <link rel="stylesheet" href="bootstrap.min.css">
     <link rel="stylesheet" href="all.css">
  
 
  <nav class="navbar navbar-expand-md navbar-light bg-light">
  <p style="margin: 5px;">
    <svg
      class="bi bi-house"
      width="2em"
      height="2em"
      viewBox="0 0 16 16"
      fill="currentColor"
      xmlns="http://www.w3.org/2000/svg"
    
    </svg>
  </p>
  <a href="index"
    class="navbar-brand"
    style="
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      margin-top: 7px;
      font-weight: bold;
    "
    
    >HOME</a
  >
  
   
  <?php 
  
if($_SESSION['type']){  ?> 
  <form  method="post" action="index" class="form-inline my-2 my-lg-0" style="padding-left: 650px;">
    <?php 
  
if($_SESSION['type'] == 'Admin'){  ?> 
   <button
      type="button"
      class="btn btn-primary my-2 my-sm-0 mx-3"
       
    >
	<a href="agent"
    class="navbar-brand"
    style="
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      margin-top: -7px;
       
    "
    
    > 
      Check Traitment</a>
    </button>
    <button
      type="button"
      class="btn btn-info my-2 my-sm-0 mx-3"
       
    >
     <a href="register"
    class="navbar-brand"
    style="
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      margin-top: -7px;
       
    "
    
    >  Register </a>
    </button>
	 <?php 
}  ?> 
    <input 
      type="submit"
      class="btn btn-danger my-2 my-sm-0 mx-3"
      style="height: 40px;"
       name="logout"
    value="Logout"
  
         
     
  

    <!--800px padding left-->
  </form>
   <?php 
}  ?> 
  <?php
  if(isset($_POST['logout']))
{
session_start();
unset($_SESSION);
$_SESSION = array();
session_destroy();

 header('Location:index'); 
}
?>
</nav>
  <style>
body {
  background-image: url('image.jpg');
  background-repeat: no-repeat;
}
</style>
</head>
<body >
