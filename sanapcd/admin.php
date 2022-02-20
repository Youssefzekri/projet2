 <?php  
 require('header.php');   
if(isset($_POST['update_a']))
{ 
   //header('Location:update'); 
}
if(isset($_POST['update_b']))
{ 
 if ($_POST["state_av"]=="No"){
$requser = $bdd->prepare('update agent set state="Yes" WHERE identifiant = ?');
	$requser->execute(array($_POST["update_av"]));
 } 
 if ($_POST["state_av"]=="Yes"){
  $requser = $bdd->prepare('update agent set state="No" WHERE identifiant = ?');
	$requser->execute(array($_POST["update_av"]));
}}
if(isset($_POST['delete']))
{ 
  $requser = $bdd->prepare('delete from agent WHERE identifiant = ?');
	$requser->execute(array($_POST["update_av"]));
}
?>
<link
  rel="stylesheet"
  href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"

/>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div
        style="
          background-color: whitesmoke;
          margin-left: -128px;
          height: 200px;
          width: 200px;
        "
      >
        <div
          style="
            font-size: large;
            color: rgb(85, 87, 88);
            font-family: 'Times New Roman', Times, serif;
            padding-top: 30px;
            padding-left: 10px;
            font-weight: bold;
          "
        >
          Welcome ! <br />
          <br />
          <div>
            <a href="agent" >
            Check Traitment
			</a>
          </div>

          <div style="background-color: rgb(106, 213, 231);">
              <a href="admin" >
            Agent Management
			</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="container/fluid">
        <h1 style="margin-top: 100px; margin-left: -200px; color: white;">
      
		List of Bank Agent
		
        </h1>
      </div>
    </div>

    <!--style="margin-left: -125px; width: 100%; background-color: lavender;"-->
    <div
      class="row"
      style="
        margin-left: 2px;
        margin-top: 35px;
        width: 100%;
        background-color: lavender;
      "
    >
      <!-- style="color: white;"-->
      <div class="col">
        <br />
        
        <table class="table table-sm">
          <thead style="color: rgb(68, 46, 46);">
            <tr>
              <th>#</th>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Identifiant</th>
              <th>CIN</th>
              <th>Phone</th>
              <th>Email</th>
              <th>Address</th>
              <th>State</th>
              <th> #</th>
            </tr>
          </thead>
          <!--style="color: white;"-->
		   <?php  
	  
	$requser = $bdd->query('SELECT * FROM agent');
	
	
 while ($userinfo = $requser->fetch())
{

 ?> 
          <tbody>
            <tr >
			 <th><?php echo $userinfo['id']; ?></th>
              <th><?php echo $userinfo['f_name']; ?></th>
              <td><?php echo $userinfo['l_name']; ?></td>
              <td><?php echo $userinfo['identifiant']; ?></td>
              <td><?php echo $userinfo['cin']; ?></td>
              <td><?php echo $userinfo['phone']; ?></td>
              <td><?php echo $userinfo['email']; ?></td>
              <td><?php echo $userinfo['adresse']; ?></td>
             

              <td>
			  <?php if ($userinfo['state']=="Yes"){ ?>
                <span class="badge badge-pill badge-success">Active</span>
				  <?php } elseif ($userinfo['state']=="No"){ ?>
               <span class="badge badge-pill badge-danger">Disabled</span>
				  <?php   }?>
              </td>
              <td >
			  <form  action="update" method="post">
			  
			  <button type="submit" name="update_a" class="btn btn-info mr-2">
      <i class="fas fa-user">
	  
    </i>
	<input type="hidden" name="update_av"  value="<?php echo $userinfo['identifiant']; ?>" />
  </form>
               
				 </td>
              <td > 
			 <form  action="" method="post">
			  
			  <button type="submit" name="update_b" class="btn btn-info mr-2">
       <i class="fas fa-user-times">
	  
    </i>
	 <input type="hidden" name="update_av"  value="<?php echo $userinfo['identifiant']; ?>" />
	  <input type="hidden" name="state_av"  value="<?php echo $userinfo['state']; ?>" />
  </form>	 
			 
				 </td>
              <td > 
               
                <!--  <button class="btn btn-danger mr-2">
                  <i class="fas fa-user-check"></i>
                </button>-->
		 <?php 		if ($userinfo['f_name'] !="Admin") {?>
				<form  action="" method="post">
			  
			  <button type="submit" name="delete" class="btn btn-danger">
       <i class="far fa-trash-alt">
	  
    </i>
	 <input type="hidden" name="update_av"  value="<?php echo $userinfo['identifiant']; ?>" />
  </form>	 
		 <?php 		}?>	
                 
              </td>
            </tr>
          </tbody>
		   <?php 
}
$requser->closeCursor();
?>
        </table>
      </div>
    </div>
  </div>
</div>
