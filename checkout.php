<?php 
session_start();
include "header.php";
include "connect.php"; 

// Check if user is logged in and session UID is set
if (!isset($_SESSION['uid'])) {
    echo "User not logged in.";
    exit;
}

// Fetch user data from the registration table based on the session UID
$uid = $_SESSION['uid'];
$query = "SELECT * FROM registration WHERE userid = ?";
$stmt = $con->prepare($query);
$stmt->bind_param("i", $uid);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "No registration data found.";
    exit;
}

$userData = $result->fetch_assoc();
?>

<div style="height: 150px;"></div>
<div style="width: 80%; margin: 0 auto;">
    <div style="width: 50%; margin: 0 auto;">

        <form action="order.php" method="post">
            <table align="center" border="1" cellspacing="14" cellpadding="12" style="width: 100%">
                <tr>
                    <th><h3 align="center" style="font-size: 1.3em;">Fill Up Details To Deliver Your Item</h3></th>
                </tr>
                <tr align="center">
                    <td style="color: red">Enter your name<br>
                        <input type="text" name="nm" placeholder="Enter your name" style="width: 100%; padding: 10px; color: orange; background-color: black" required value="<?php echo htmlspecialchars($userData['full_name']); ?>"></td>
                </tr>
                <tr align="center">
                    <td style="color: red">Enter Mobile no<br>
                        <input type="text" name="mo" placeholder="Enter Mobile no" style="width: 100%; padding: 10px; color: orange; background-color: black" required pattern="\d{11}" value="<?php echo htmlspecialchars($userData['phone_number']); ?>"></td>
                </tr>
                <tr align="center">
                    <td style="color: red">Enter Email address<br>
                        <input type="email" name="em" placeholder="Enter email address" style="width: 100%; padding: 10px; color: orange; background-color: black" required value="<?php echo htmlspecialchars($userData['email']); ?>"></td>
                </tr>
                <tr align="center">
                    <td style="color: red">Enter address<br>
                        <input type="text" name="ad" placeholder="enter your address" style="width: 100%; padding: 10px; color: orange; background-color: black" required value="<?php echo htmlspecialchars($userData['address']); ?>"></td>
                </tr>
                <tr align="center">
                    <td colspan="4"><input type="submit" name="s" value="Confirm Order" style="height: 50px; background-color:lightgreen; color: black; padding: 10px; width: 30%;"></td>
                </tr>
            </table>
        </form>
        <br><br>
    </div>
</div>

<?php include "footer.php"; ?>
