 <?php   require('header.php');  

 ?> 
 <br />
<br />
<!--style="padding-left: 300px; -->
<div class="container" style="font-weight: bold;">
  <form  action="" method="post">
    <div class="form-row">
      <div class="col-md-4" style="padding-right: 20px;">
        <div class="form-group">
          <label for="firstname">Firstname</label>
          <input
            type="text"
            class="form-control"
            id="firstname"
            name="firstname"
            formControlName="firstname"
          />
        </div>
      </div>
      <div class="col-md-4" style="padding-left: 20px;">
        <div class="form-group">
          <label for="CIN">CIN</label>
          <input
            type="text"
            class="form-control"
            id="firstname"
            name="CIN"
            formControlName="CIN"
          />
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-4" style="padding-right: 20px;">
        <div class="form-group">
          <label for="lastname">Lastname</label>
          <input
            type="text"
            class="form-control"
            id="lastname"
            name="lastname"
            formControlName="lastname"
          />
        </div>
      </div>
      <div class="col-md-4" style="padding-left: 20px;">
        <div class="form-group">
          <label for="Email">Email</label>
          <input
            type="text"
            class="form-control"
            id="Email"
            name="Email"
            formControlName="Email"
          />
        </div>
      </div>
    </div>

    <div class="form-row">
      <div class="col-md-4" style="padding-right: 20px;">
        <div class="form-group">
          <label for="Identifiant">Identifiant</label>
          <input
            type="text"
            class="form-control"
            id="Identifiant"
            name="Identifiant"
            formControlName="Identifiant"
          />
        </div>
      </div>

      <div class="col-md-4" style="padding-left: 20px;">
        <div class="form-group">
          <label for="Phone">Phone</label>
          <input
            type="text"
            class="form-control"
            id="Phone"
            name="Phone"
            formControlName="Phone"
          />
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-4" style="padding-right: 20px;">
        <div class="form-group">
          <label for="password">Password</label>
          <input
            type="password"
            class="form-control"
            id="password"
            name="password"
            formControlName="password"
          />
        </div>
      </div>
      <div class="col-md-4" style="padding-left: 20px;">
        <div class="form-group">
          <label for="cin">Address</label>
          <input
            type="text"
            class="form-control"
            id="Address"
            name="Address"
            formControlName="Address"
          />
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-4" style="padding-right: 20px;">
        <div class="form-group">
          <label for="repassword">Confirm Password</label>
          <input
            type="password"
            class="form-control"
            id="repassword"
            name="repassword"
            formControlName="repassword"
          />
        </div>
      </div>
      <div class="col-md-4" style="padding-left: 20px;">
        <div class="form-group">
          <label for="cin">Date de naissance</label>
          <input
            type="text"
            class="form-control"
            id="cin"
            name="cin"
            formControlName="cin"
          />
        </div>
      </div>
    </div>
    <br />
    <div style="padding-left: 329px;">
		<input type="submit" value="Submit" name="inscription" class="btn btn-success">
     
    </div>
  </form>
</div>
<?php

if(isset($_POST['inscription']))
{
	if(!empty($_POST['firstname']) AND !empty($_POST['CIN']) AND !empty($_POST['lastname']) AND !empty($_POST['Email'])AND !empty($_POST['Identifiant']) AND !empty($_POST['Phone']) )
	{
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$Identifiant=$_POST['Identifiant'];
	$CIN=$_POST['CIN'];
	$Phone=$_POST['Phone'];
	$Email=$_POST['Email'];
	$Address=$_POST['Address'];
	$password=$_POST['password'];	
		try{
	  $insertmbr = $bdd->prepare("INSERT INTO agent(f_name,l_name,identifiant,cin,phone,email,adresse,state,type,password) VALUES(?,?,?,?,?,?,?,?,?,?)");
		  $insertmbr->execute(array($firstname,$lastname,$Identifiant,$CIN,$Phone,$Email,$Address,'No','Agent',$password));
		}catch(PDOException $e){
            echo $e->getMessage( ) ;
        }
}}
	?>