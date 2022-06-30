<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<style>
	.a{
		background-color:#C94C4C;
		width: 1530px;
		height:60px;
	}
	.b{
		color:#77212E;
		font-size: 60px;
		padding-left: 670px;
	}
	.c{
		width: 1530px;
		height:10px;
		background-color:cyan;
	}
	.d{
		width: 1530px;
		height: 620px;
		background-color: lightgrey;
	}
	.e{
		width:765px;
		height:620px;
		background-color: lightgrey;
		float: left;
		font-size: 50px;
		
	}
	.f{
		width:765px;
		height:620px;
		background-color: #3B4C54;
		float:left;
	}
	
	.h{
		background-color: cyan;
		width: 82px;
		border-radius:0px
		border-color:cyan;
	}
	.j{
		font-size: 60PX;
		padding-left: 20px;
	}
	
	
</style>


	<title>Hire Me</title>

</head>
<body>
<div class="a">
		
		
	<span class="b">Hire Me</span>
	

		</div>
<div class="c">
	</div>
<div class="d">
	<div class="e">
		<img src="hire.jpg" style="width:765px;height:620px">
	</div>
	<div class="f">
		<div style="background-color:blue;width:382px;height:80px;float: left">
			<img src="facebook.jpg" style="width: 382px;height: 80px">
		</div>
		<div style="background-color:green;width:382px;height:80px;float: left">
			<img src="twiter.jpg" style="width: 382px;height: 80px">
		</div>
		<div style="background-color: ;width: 765px;height: 40px;margin-top:70px">
		<center>	<span style="font-size: 30px;color:white">or sign up with</span> </center>
		
		<div style="background-color:yellow;width:382px;height:50px;float: left;margin-top: 10px;margin-left: 3px">
			<form action="register.php" method="post">
			<input type="text" style="width:382px;height:50px" placeholder="Name" name="name" required="">
		</div>
		<div style="background-color:blue;width:355px;height:50px;float: left;margin-left: 15px;margin-top: 10px">
			<input type="text" style="width:355px;height:50px"placeholder="RollNo" name="rollno" required="">
		</div>
		<div style="background-color:green;width:750px;height:50px;margin-top: 80px;margin-left: 3px">
			<input type="text" style="width:750px;height:50px"placeholder="Email" name="email" required="">

	</div>
	<div style="background-color:black;width:750px;height:50px;margin-top: 20px;margin-left:3px">
			<input type="text" style="width:750px;height:50px"placeholder="Enter CGPA" name="cgpa" required="">

	</div>
	<div style="background-color:#3B4C54;width:500px;height:50px;margin-top: 15px;float:left">
		<div style="width: 20px;height: 20px;border: 0.5px solid white;float:left;margin-top: 6px"  onclick="sood()">
			<img src=" " style="width: 20px;height: 20px border:0px" id="ankush" >
		</div>

		<span style="font-size: 29px;color: white ;float: left;padding-left: 5px">By creating an account, you agree to our </span>
	</div>
<div style="background-color:#3B4C54;width:260px;height:50px;margin-top: 15px;float:left;padding-left: 2px">
		<span style="font-size: 29px;color:#B3E3FF">Terms & Conditions</span>
	</div>
<input type="submit" value="Create Account" style="width: 650px;height: 50px;margin-top: 10px;background-color: #07793D;border:0px;font-size: 30px;margin-left: 70px;color:white;border-radius:20px;display: none" id="an">
</form>

</div>
<script type="text/javascript">
	 var x=0;
function sood(){
	if(x==0){
	document.getElementById("ankush").src="a.jpg";
	document.getElementById("an").style.display="block";
x=1;}
	else if(x==1){
	document.getElementById("ankush").src=" ";
		document.getElementById("an").style.display="none";	
	x=0;
	}
}
</script>

</body>
</html>