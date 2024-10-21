<?php include "header.php"; ?> 
<body>
    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12">
                    <h1>REGISTRATION</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Pages -->
    
    <!-- Start Contact -->
    <div class="contact-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"></div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <table cellpadding="10" cellspacing="12" align="left">
                        <form action="" method="POST"> 

                            <tr>
                                <td>
                                    <input type="text" name="fullname" value="" placeholder="Enter Full Name" required="" style="padding: 10px; width: 300%"><br>
                                </td>
                            </tr>
							<tr>
                                <td>
                                    <input type="text" name="username" value="" placeholder="Enter Username" required="" style="padding: 10px; width: 300%"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="phone" value="" placeholder="Enter Phone Number" required="" style="padding: 10px; width: 300%"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <select name="gender" required="" style="padding: 10px; width: 300%">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="date" name="dob" value="" placeholder="Enter Date of Birth" required="" style="padding: 10px; width: 300%"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="address" value="" placeholder="Enter Address" required="" style="padding: 10px; width: 300%"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="email" name="email" value="" placeholder="Enter Your Email Address" required="" style="padding: 10px; width: 300%"><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="password" name="pass" value="" placeholder="Enter Your Password" required="" style="padding: 10px; width: 300%"><br>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <input type="submit" name="sb" value="Register Now" style="color:red; background: lightgreen; font-size: 1.3em; font-family: times new roman">
                                </td>
                            </tr>

                        </form>
                    </table>

						<?php
						if (isset($_POST['sb'])) {
							$fullname = $_POST['fullname'];
							$phone = $_POST['phone'];
							$userid = $_POST['username'];
							$gender = $_POST['gender'];
							$dob = $_POST['dob'];
							$address = $_POST['address'];
							$email = $_POST['email'];
							$pass = $_POST['pass'];

							include "connect.php";

							// Check if the email already exists
							$checkEmailQuery = "SELECT * FROM registration WHERE email = '$email'";
							$result = mysqli_query($con, $checkEmailQuery);

							if (mysqli_num_rows($result) > 0) {
								// If email already exists, show an error message
								echo "<script>alert('Email already registered. Please use a different email.');</script>";
							} else {
								// Insert the form data into the registration table if the email doesn't exist
								$query = "INSERT INTO `registration`(`userid`, `password`, `email`, `full_name`, `phone_number`, `address`, `gender`, `dob`) VALUES ('$userid','$pass','$email','$fullname','$phone','$address','$gender','$dob')";

								if (mysqli_query($con, $query)) {
									echo "<script>alert('Registration Successful');</script>";
									echo "<center>Registration Successful ... Click to <a href='login.php'>Login</a></center>";
								} else {
									echo "Error: " . mysqli_error($con);
								}
							}
						}
						?>

                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->
    <?php include "footer.php"; ?>
</body>
