 <?php   require('header.php');  
  
	 
	 $requser = $bdd->prepare('SELECT * FROM agent where identifiant = ?');
	$requser->execute(array($_POST["update_av"]));
	$userinfo = $requser->fetch();
 
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
            value="<?php echo $userinfo['f_name']; ?>"
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
              value="<?php echo $userinfo['cin']; ?>"
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
             value="<?php echo $userinfo['l_name']; ?>"
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
             value="<?php echo $userinfo['email']; ?>"
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
              value="<?php echo $userinfo['identifiant']; ?>"
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
             value="<?php echo $userinfo['phone']; ?>"
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
             value="<?php echo $userinfo['password']; ?>"
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
              value="<?php echo $userinfo['adresse']; ?>"
          />
        </div>
      </div>
    </div>
    
    <br />
    <div style="padding-left: 329px;">
		<input type="submit" value="Update" name="updaten" class="btn btn-success">
     
    </div>
	 <input type="hidden" name="update_av"  value="<?php echo $userinfo['identifiant']; ?>" />
  </form>
</div>
<?php

if(isset($_POST['updaten']))
{ 
	 $firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$Identifiant=$_POST['Identifiant'];
	$CIN=$_POST['CIN'];
	$Phone=$_POST['Phone'];
	$Email=$_POST['Email'];
	$Address=$_POST['Address'];
	$password=$_POST['password'];	
	$Iden=$_POST["update_av"];
		try{
	 
	 
	 $sql = "UPDATE agent SET f_name=?, l_name=?, identifiant=?, cin=?, phone=?, email=?, adresse=?, password=?  WHERE identifiant=?";

$stmt= $bdd->prepare($sql);

		$stmt->execute(array($firstname,$lastname,$Identifiant,$CIN,$Phone,$Email,$Address,$password,$Iden));
	 
	 }catch(PDOException $e){
            echo $e->getMessage( ) ;

}}
	?>