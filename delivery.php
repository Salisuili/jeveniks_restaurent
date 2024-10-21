<?php session_start();

if(isset($_POST['submit'])){
$u = $_POST['username'];
$p = $_POST['password'];
include  "connect.php";
$s = mysqli_query($con,"select * from delivery_man where username='$u' and password='$p'");

if($r = mysqli_fetch_array($s))
{
		$_SESSION['uid'] = $u;
		header("location:admin/delivery_home.php");

}
else
{
		echo "<br><div style='color:black; border-radius:10px; padding:10px; text-align:center; background-color:tomato;'>Please Enter Valid User and password</div><br>";
		include "delivery.php";
}
}
?>

<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Jeveniks Restaurent</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb" style="height:50px;">
		<div class="container text-center" >
			<div class="row">
				<div class="col-lg-12">
                    <h1>Jeveniks Restaurant</h1>
					<h2 style="color:white;">Delivery Man Login </h2>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
<form action="delivery.php" method="post">

  <table border="0" align="center" cellpadding="5" cellspacing="7">
	
	        <tr align="right">	
		     <td> <img src="Login.png" style="width: 30%"> <br>
		      </td>
		 </tr>
		<tr>
             <td> Enter Your Username </td>
        <td> <input type="text" name="username" placeholder="Enter Your Username" style="padding: 10px; width: 150%"> <br>  </td>
		
		</tr> 

		<tr>
           <td> Enter Your Password</td>
 <td> <input type="Password" name="password" placeholder="Enter Your Password" style="padding: 10px; width: 150%"> <br>   </td>
		
		</tr>

		<tr>	    
 <td align="right"> <input type="submit" name="submit" value="Login Now" style="color: red; background-color: lightgreen; font-size: 1.5em; font-family: times new roman;"> </td> 
</tr>
               
              
</form>
		</table>			




				</div>
			</div>
		
		</div>
	</div>
<?php include "footer.php"; ?>