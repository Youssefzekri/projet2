 <?php 
 session_start();
 require('header.php');  
 if(isset($_POST['inscription']))
{
$identifiant = ($_POST['identifiant']);
$mot_de_passe = ($_POST['passe']);
if(!empty($identifiant) AND !empty($mot_de_passe))
{
$requser = $bdd->prepare("SELECT * FROM agent WHERE identifiant = ? AND password = ?");
$requser->execute(array($identifiant,$mot_de_passe));
$userexist = $requser->rowcount();
if($userexist == 1)
{
	$userinfo = $requser->fetch();
	$_SESSION['identifiant'] = $userinfo['identifiant'];
	$_SESSION['state'] = $userinfo['state'];
	$_SESSION['type'] = $userinfo['type'];
	if($userinfo['type'] == 'Agent'){
	header("location: agent");
	}
	
	if($userinfo['type'] == 'Admin'){
	header("location: admin");
	}
}
else
{
$erreur = "Mauvais mail ou mot de passe!";
}
}
else
{
	$erreur = "tous les champs doivent etre complété!";
}
}
 ?> 
<br />
<br />
<br />
<br />
<div align="center" style="color: ghostwhite;">
  <form class="form-signin" action="" method="post">
    <img class="mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" />
    <h1 class="h3 mb-3 font-weight-normal">
      Please sign in
    </h1>
    <label for="inputIdentifiant" class="col-md-6" >Identifiant </label>

    <div class="col-sm-4">
      <input type="text" id="inputIdentifiant" class="form-control" name="identifiant"/>
    </div>
    <label for="inputPassword" class="col-md-6"  name="passe">Password</label>

    <div class="col-sm-4">
      <input type="password" id="inputPassword" class="form-control" name="passe"/>
    </div>
    <div class="checkbox sb-3">
      <label> <input type="checkbox" value="remember-me" /> Remember me </label>
    </div>

    <div class="col-sm-4">
		<input type="submit" value="Submit" name="inscription" class="btn btn-lg btn-primary btn-block">
     
    </div>
    <br />
    <p>
      &copy; 2019-2020
    </p>
  </form>
</div>
</body>
</html>