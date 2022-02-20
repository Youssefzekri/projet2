 <?php 
  require('header.php'); 
if($_SESSION['state'] =="Yes"){
if(isset($_POST['verif']))
{ 
 
	

$verif_imag=$_FILES['verif_image']['name'];
	  
	$requser = $bdd->prepare('SELECT * FROM cheque WHERE image = ?');
	$requser->execute(array($verif_imag));
	$userinfo = $requser->fetch();

/*	$porcentage=(random_int(86, 97));
	if ($porcentage>90)
	{
	$desci="Accepted";	
	}
	else
		{
	$desci="Refused";	
	}*/
}
 ?> 
<div style="height: 600px; background-color: rgb(203, 203, 250);">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
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
            <div style="background-color: rgb(106, 213, 231);">
              
              Check Traitment
            </div>
 <?php 
  
if($_SESSION['type'] =="Admin"){  ?> 
           <div style="background-color: rgb(106, 213, 231);">
              <a href="admin" >
            Agent Management
			</a>
          </div>
		  <?php 
}  ?> 
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div
          style="
            background-color: white;
            width: 500px;
            height: 200px;
            margin-left: -250px;
            margin-top: 15px;
          "
        >
          <img src="<?php echo "images/".$userinfo['image']; ?>" width="500px" height="200px" />
        </div>
        <br />
        <div class="container" style="margin-left: -250px;">
          <table class="table" style="width: 480px;">
            <tbody>
              <tr>
                <th>Check Number</th>
                <th > <?php echo $userinfo['number']; ?></th>
              </tr>

              <tr>
                <th>RIB</th>
                <th > <?php echo $userinfo['rib']; ?></th>
              </tr>

              <tr>
                <th>Client Name</th>
               <th > <?php echo $userinfo['client']; ?></th>
              </tr>

              <tr>
                <th>Algorithm Decision</th>
                 <th ><?php  usleep(10000000);  echo $userinfo['algo']; ?> </th>
              </tr>

              <tr>
                <th>Similarity Pourcentage</th>
                <th > <?php echo $userinfo['pourcent']; ?></th>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-md-4">
        <br />
        <p style="font-weight: bold;">
          Import Check Image here :
        </p>
        <br />
        <form action="" style="margin-top: -25px;" method="post" enctype="multipart/form-data">
          <input
            type="file"
            style="
              width: 280px;
              background-color: white;
              border-width: 0.5px;
              border-color: rgb(219, 216, 216);
              border-style: solid;
            "
            #Image
            accept="image/*"
            (change)="handleFileInput($event.target.files)"
			name ="verif_image"
          />
          
		  <input type="submit" value="Submit" name="verif"  class="btn btn-info btn-sm" style="margin-left: -0.0025px; margin-top: -5px;">
          <!--</div>-->
        </form>

        <br />
        <p style="font-weight: bold;">Reference Signature :</p>
        <div style="width: 300px; height: 150px; background-color: white;">
          <img src="<?php echo "images/s_".$userinfo['image']; ?>" width=" 300px" height=" 150px" />
        </div>
        <br />
        <div style="margin-left: -25px;">
          <form class="form-inline my-2 my-lg-0">
            <button
              class="btn btn-success my-2 my-sm-0 mx-3"
              style="width: 150px; height: 37px;"
            >
              Valid
            </button>
            <button
              class="btn btn-danger my-2 my-sm-0"
              style="width: 150px; height: 37px;"
              (click)="delete()"
            >
              Refuse
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
  <?php 
}
else {echo "Contact your Admin to activate your state";}
?>