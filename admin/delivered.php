<?php include "connect.php"; 

		if (isset($_GET['a'])) {
		    $id = $_GET['a'];

		    // SQL query to delete the record with the specified id
		    $query = "UPDATE `checkout` SET `delivered`= 1 WHERE id = '$id'";

		    if (mysqli_query($con, $query)) {
		        echo "<script>alert('Details Updated');</script>";
		    } else {
		        echo "<script>alert('Error Updating');</script>";
		    }

		    // Redirect back to the page that lists the items
		    echo "<script>window.location.href='delivery_home.php';</script>";
		} else {
		    echo "<script>alert('Invalid request');</script>";
		    echo "<script>window.location.href='delivery_home.php';</script>";
		}

	?>
<?php include "footer.php"; ?>