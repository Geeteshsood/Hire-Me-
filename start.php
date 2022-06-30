
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">

	<title>Start</title>
	<style type="text/css">
		#dr{
			margin-left: 40px;
			overflow-x: hidden;
			border:6px;;border-radius:12px;width:100%;float: left;
		}

	</style>
	</head>
	<body>
	</body>
	<div style="background-color: black;height:70px" class="container-fluid">
		<span style="padding: 0;font-size: 50px;color:white;position: absolute;margin-left:40%;font-family: 'Quicksand', sans-serif;"> Welcome <?php  error_reporting(0);echo $r["name"] ?></span>
	</div>


   <?php 
error_reporting(0);
session_start();
   $id = $_GET["id"];
   if($_GET['id']==1)
   	$_SESSION['score']=0;

   $con=new mysqli("localhost","root","","hireme");

$result=$con->query("select *from round1 where id='$id'  ");
if($r=$result->fetch_assoc()){


   ?>
   <br><br><br><br>
   <div style="background-color:white;width: 200px;height: 450px;float: left" class="container-fluid">
   </div>
   <div style="border:6px;box-sizing:border-box;box-shadow: 2px 2px 4px #000000;border-radius:12px;width: 1100px;height: 450px;float: left">
  
    <form action="qact.php?id=<?php echo $id ?>" method="POST">
  <div id="dr">
	<span style="padding: 0;font-size: 35px;color:black;position: absolute;font-family: 'Quicksand', sans-serif;"> Q<?php  echo $r["id"]; ?><html>&nbsp;</html><?php  echo $r["question"]; ?></span><br><br>

		
	<input type="radio" name="ankush" value="<?php  echo $r["a"]; ?>"> <span style="font-size: 30px" > <?php  echo $r["a"]; ?> </span> <br>
	 <input type="radio" name="ankush" value="<?php  echo $r["b"]; ?>"style="padding-right: 150px"> <span style="font-size: 30px" ><?php  echo $r["b"]; ?></span><br>
 <input type="radio" name="ankush" value="<?php  echo $r["c"]; ?>"style="padding-right: 150px"><span style="font-size: 30px" > <?php  echo $r["c"]; ?></span><br>
	 <input type="radio" name="ankush" value="<?php  echo $r["d"]; ?>"style="padding-right: 150px"> <span style="font-size: 30px" ><?php  echo $r["d"]; ?></span><br><br>
</div>

<?php } ?>
	 <input type="submit" value="Submit" style="width: 350px;height: 50px;background-color: #07793D;border:0px;font-size: 30px;color:white;border-radius:20px;margin-left: 350px;margin-top: 60px" class="btn btn-primary">
	</form>
</div>
<div style="background-color:white;width: 200px;height: 450px;float: left">

  
</div>
</div>
<script type="text/javascript">
	document.addEventListener('visibilitychange', function(){
    location.href="<%= themeDisplay.getURLSignOut()%>";
})
</script>
</html>